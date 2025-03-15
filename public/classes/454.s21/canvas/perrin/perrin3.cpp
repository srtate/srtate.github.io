// perrin3.cpp -- Adding memory to computation of Perrin residues
// Author:  Steve Tate  (srt@uncg.edu)
// Last modified:  Jan 10, 2020
//
// Perrin numbers are defined by the recursive formula:  
//    P(0)=3, P(1)=0, P(2)=2, and for n>3, P(n)=P(n-3)+P(n-2)
//
// This problem reduces the linear recurrence to an expression using
// a 3x3 matrix, and then uses matrix powering to quickly compute the
// desired value.
//
// The running time of this algorithm is Theta(log n).

#include <iostream>
#include <stdlib.h>

using namespace std;

#include "Matrix33.h"    // Classes for 3 dim vector and 3x3 matrix

//+=======================================================================
//+ int pnmodm(int n, int m)
//+
//+ Computes P(n) mod m.  Probably the only interesting way to call
//+ this is with m=n, but it has two separate parameters for maximum
//+ flexibility.

int64_t pnmodm(int n, int m)
{
    IMatrix33<int64_t> mat(0, 1, 1,
		  1, 0, 0,
		  0, 1, 0);
    IVector3<int64_t> vec(2, 0, 3);
    IMatrix33<int64_t> pow;
    IVector3<int64_t> result;

    pow.isModPower(mat, n-2, n);
    MModTimesV(pow, vec, result, n);

    return(result[0]);
}


//========================================================================
//  Main program.  Just prompts the user for input and calls the pnmodm()
//  procedure to get the answer.

int main(int argc, char *argv[])
{
    const int repeat = 5000000;   // Number of times to repeat to get timing.
    int result;
    int n;
    int i;


    if (argc == 1) {
	cout << "Enter the value n: ";
	cin >> n;
    } else {
	n = atoi(argv[1]);
	if (n <= 1) {
	    cerr << "Invalid n\n";
	    exit(1);
	}
    }

    for (i=0; i<repeat; i++)
	result = pnmodm(n, n);

    cout << "P(" << n << ") mod " << n << " = " << pnmodm(n, n) << '\n';

    return(0);
}
