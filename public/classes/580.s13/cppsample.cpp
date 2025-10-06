// This file provides sample code for reading in a file character by
// character in C++, as needed by Assignment 1 in CSC 580 (Spring
// 2013). Note that I'm using a static array of characters for the
// input text so that the code can make multiple passes over the input
// easily, and I've allocated 1,000,000 characters for the input. All
// of the sample inputs provided for this assignment fit in this
// space, but if you were to use this with a larger file you will need
// to adjust the array size accordingly.

// Note that the input comes from standard input. Most likely the input
// is stored in a file, so you can run this program as follows:

//  In Windows: program.exe <inputfile.txt >outputfile.txt

//  In Unix/Linux: ./program <inputfile.txt >outputfile.txt

#include <iostream>

using namespace std;

int main()
{
    char input[1000000];

    int inSize = 0;
    while (cin.good()) {
	int ch = cin.get();
	if (cin.good()) {
	    input[inSize++] = ch;
	}
    }

    // At this point the input that has been read from standard input is
    // in stored in the input[], which contains inSize characters.

    return 0;
}
