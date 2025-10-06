// Code written in CSC 580 class, September 21, 2007
//
// This code does operations over Z2[x] (polynomials where coefficients
// come from Z2).  Each coefficient is a single bit in an unsigned int.
//
// Using "add" and "modmult" on polynomials of degree <= 7, you have operations
// on individual bytes (8 single-bit coefficients), which gives you
// GF(2^8).  The polynomial modulus is the irreducible polynomial
// x^8+x^4+x^3+x+1, which is the same as the GF(2^8) representation
// used in AES.

#include <stdio.h>

//==========================================================================
// Adds two polynomials, whose coefficients are given in a and b.
// Note that addition over Z2 is the same as boolean XOR, so all we
// have to do is a bitwise XOR for this operation.

unsigned int add(unsigned int a, unsigned int b)
{
    return a^b;
}

//==========================================================================
// Multiplies two polynomials whose coefficients are given in a and b.
// This uses a "shift-and-add" method to accumulate the answer. Note that
// this function is a non-modular multiplication, so the degree of the result
// will potentially be large (and might overflow an int if you're not careful)

unsigned int mult(unsigned int a, unsigned int b)
{
    unsigned int m=1;
    unsigned result = 0;
    int i;

    for (i=0; i<8; i++) {
	if (b&m)
	    result ^= a;

	m <<= 1;
	a <<= 1;
    }

    return result;
}


//==========================================================================
// Does a modular multiplication of two polynomials, with modulus
// m(x) = x^8 + x^4 + x^3 + x + 1 

unsigned int modmult(unsigned int a, unsigned int b)
{
    unsigned int m=1;
    unsigned result = 0;
    int i;

    for (i=0; i<8; i++) {
	if (b&m)
	    result ^= a;

	m <<= 1;
	a <<= 1;
	if (a&0x100) {
	    a &= 0xff;
	    a ^= 0x1b;
	}
   }

    return result;
}


//==========================================================================
// Testing calls for polynomial arithmetic routines

int main()
{
    printf("%02x\n", add(0x17, 0x0b));
    printf("%02x\n", mult(0x17, 0x0b));
    printf("%02x\n", modmult(0x83, 0x57));

    return 0;
}
