// sorttest.cpp - Testing heapsort
// Author:  Steve Tate
// Date:  October 21, 2009

using namespace std;

#include <iostream>
#include <cstdlib>
#include <queue>

//======================================================================
// bubbleDown:  This function does a "bubble down" operation on a binary
// max-heap.  The heap is stored in data[0..n-1], and all positions in the
// heap are assumed to satisfy the max-heap property EXCEPT possibly the
// item at data[pos], which might be too small (smaller than a child) and
// hence must be bubbled down the heap.

void bubbleDown(int data[], size_t pos, size_t n)
{
    while (true) {
	size_t child = 2*pos + 1;
	if (child >= n)
	    return;

	if ((child + 1 < n) && (data[child+1] > data[child]))
	    child++;

	if (data[pos] >= data[child])
	    return;

	int tmp = data[child];
	data[child] = data[pos];
	data[pos] = tmp;
	pos = child;
    }
}


//======================================================================
// bubbleUp:  This function does a "bubble up" operation on a binary
// max-heap.  The heap is stored in data[0..n-1], and all positions in the
// heap are assumed to satisfy the max-heap property EXCEPT possibly the
// item at data[pos], which might be too larger (larger than its parent) and
// hence must be bubbled up the heap.

void bubbleUp(int data[], size_t pos, size_t n)
{
    while (pos > 0) {
	size_t parent = (pos-1)/2;
	if (data[parent] >= data[pos])
	    return;

	int tmp = data[parent];
	data[parent] = data[pos];
	data[pos] = tmp;
	pos = parent;
    }
}


//======================================================================
// hsort:  Performs a heapsort on the data stored in data[0..n-1]

void hsort(int data[], size_t n)
{
    if (n > 1) {
	for (int i = (n-2)/2; i>=0; i--)
	    bubbleDown(data, i, n);

	for (int i=n-1; i>=0; i--) {
	    int tmp=data[i];
	    data[i] = data[0];
	    data[0] = tmp;
	    bubbleDown(data, 0, i);
	}
    }
}


//======================================================================
// ssort: Performs a selection sort on data in data[0..n-1]

void ssort(int data[], size_t n)
{
    for (size_t i=0; i<n-1; i++) {
	int minpos = i;
	for (size_t j=i+1; j<n; j++) {
	    if (data[j] < data[minpos])
		minpos = j;
	}

	int tmp = data[minpos];
	data[minpos] = data[i];
	data[i] = tmp;
    }
}


//======================================================================
// The main program - fills an array with random ints and then calls the
// appropriate sorting function.  You may change the code below when
// testing your sorting code, but DO NOT put any code other than main()
// below.

int main()
{
    const size_t TestSize = 2000000;
    int d[TestSize];

    for (size_t i=0; i<TestSize; i++) {
	d[i] = random();
    }

    hsort(d, TestSize);

    return 0;
}

