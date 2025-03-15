// perrin1.cpp -- Recursive computation of Perrin number residues
// Author:  Steve Tate  (srtate@uncg.edu)
// Last modified:  Jan 10, 2020
//
// Perrin numbers are defined by the recursive formula:  
//    P(0)=3, P(1)=0, P(2)=2, and for n>3, P(n)=P(n-3)+P(n-2)
//
// This program uses recursion to directly implement the Perrin number
// formulas.  Given a value of n as input, this program will compute
// P(n) mod n, where P(n) is the nth Perrin number.
//
// The running time of this algorithm is Theta(p^n), where p is
// approximately 1.325.

#include <iostream>
#include <stdlib.h>

using namespace std;

//+=======================================================================
//+ int pnmodm(int n, int m)
//+
//+ Computes P(n) mod m.  Initially, this should be called with n=m
//+ so that you are really computing P(n) mod n.  Only in recursive
//+ calls will n!=m.
//+
//+ With 32-bit integers, this code should work correctly up to n slightly
//+ greater than 10^9

int pnmodm(int n, int m)
{
    if (n < 3) {
	if (n == 0) return(3 % m);
	else if (n == 1) return(0);
	else return(2 % m);
    } else {
	return (pnmodm(n-2, m) + pnmodm(n-3, m)) % m;
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

