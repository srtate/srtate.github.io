// perrin2.cpp -- Adding memory to computation of Perrin residues
// Author:  Steve Tate  (srtate@uncg.edu)
// Last modified:  Jan 10, 2020
//
// Perrin numbers are defined by the recursive formula:  
//    P(0)=3, P(1)=0, P(2)=2, and for n>3, P(n)=P(n-3)+P(n-2)
//
// This program uses an iterative technique to compute the Perrin
// numbers by noting that you only need to remember the last three
// values in order to compute the next value in the Perrin number
// sequence.  Given a value of n as input, this program will compute
// P(n) mod n, where P(n) is the nth Perrin number.
//
// The running time of this algorithm is Theta(n).

#include <iostream>
#include <stdlib.h>

using namespace std;

//+=======================================================================
//+ int pnmodm(int n, int m)
//+
//+ Computes P(n) mod m.  Probably the only interesting way to call
//+ this is with m=n, but it has two separate parameters for maximum
//+ flexibility.
//+
//+ With 32-bit integers, this code should work correctly up to n slightly
//+ greater than 10^9

int pnmodm(int n, int m)
{
    int i;

    if (n == 0) return(3 % m);
    else if (n == 1) return(0);
    else if (n == 2) return(2 % m);
    else {
        int last1 = 2;   // When computing P(n) mod m, variable lastX
        int last2 = 0;   // will hold the value of P(n-X) mod m (mod m
        int last3 = 3;   // reduction is not necessary for initial values).
        int curr;

        for (i=3; i<=n; i++) {
	    curr = ( last2 + last3 ) % m;
	    last3 = last2;
	    last2 = last1;
	    last1 = curr;
	}

	return(last1);
    }
}

//========================================================================
//  Main program.  Just prompts the user for input and calls the pnmodm()
//  procedure to get the answer.


int main(int argc, char *argv[])
{
    int n;

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

    cout << "P(" << n << ") mod " << n << " = " << pnmodm(n, n) << '\n';

    return(0);
}
