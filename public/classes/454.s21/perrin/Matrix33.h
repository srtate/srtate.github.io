// Matrix33.h -- 3 dim vector and 3x3 matrix support
// Author:  Steve Tate (srt@cs.unt.edu)
// Last Modified:  Aug 21, 1996
//
// Note:  This file is meant to provide only the bare minimum of 3 dimensional
// linear algebra support.  In particular, it includes only those methods
// needed to support the O(log n) time Perrin residue computation.
//
// In addition to being incomplete class specifications, there is also no
// documentation.  In reality this whole module should be re-written, but
// it's provided so that the Perrin algorithm can be implemented.

#include <iostream>
#include <cstring>

using namespace std;

template <class ElemType> class IVector3;
template <class ElemType> class IMatrix33;

// The vector class...

template <class ElemType>
void MModTimesV(IMatrix33<ElemType> &m, IVector3<ElemType> &v, 
		IVector3<ElemType> &ans, int mod);

template <class ElemType>
class IVector3 {
    ElemType val[3];

public:
    IVector3(ElemType v1, ElemType v2, ElemType v3) {
	val[0] = v1;
	val[1] = v2;
	val[2] = v3;
    };

    IVector3() {
	val[0] = val[1] = val[2] = 0;
    };

    ElemType& operator[](const int ind) {
	return(val[ind]);
    };

    friend template <class T> void MModTimesV(IMatrix33<T> &m, IVector3<T> &v, IVector3<T> &ans, int mod);
};



// The matrix class...

template <class ElemType>
class IMatrix33 {
    ElemType val[3][3];

public:
    IMatrix33() {
	memset(val, 0, sizeof(val));
    };

    IMatrix33(ElemType r1c1, ElemType r1c2, ElemType r1c3,
	      ElemType r2c1, ElemType r2c2, ElemType r2c3,
	      ElemType r3c1, ElemType r3c2, ElemType r3c3) {
	val[0][0] = r1c1;  val[0][1] = r1c2;  val[0][2] = r1c3;
	val[1][0] = r2c1;  val[1][1] = r2c2;  val[1][2] = r2c3;
	val[2][0] = r3c1;  val[2][1] = r3c2;  val[2][2] = r3c3;
    };

    void print() {
	for (int i=0; i<3; i++) {
	    for (int j=0; j<3; j++)
		cout << val[i][j] << ' ';
	    cout << '\n';
	}
    }

    void isModProduct(const IMatrix33 &m1, const IMatrix33 &m2, const int mod) {
	for (int i=0; i<3; i++)
	    for (int j=0; j<3; j++) {
		val[i][j] = ( m1.val[i][0]*m2.val[0][j] +
		              m1.val[i][1]*m2.val[1][j] +
			      m1.val[i][2]*m2.val[2][j] ) % mod;
	    }
    };

    void isModPower(IMatrix33 &m, int pow, int mod) {
	if (pow == 1) {
	    *this = m;
	} else {
	    IMatrix33 msquared, tmp;

	    msquared.isModProduct(m, m, mod);
	    if (pow & 1) {    // if power is odd....
		tmp.isModPower(msquared, pow/2, mod);
		this->isModProduct(tmp, m, mod);
	    } else {
		this->isModPower(msquared, pow/2, mod);
	    }
	}
    };

    friend void MModTimesV<>(IMatrix33<ElemType> &m, IVector3<ElemType> &v, 
			   IVector3<ElemType> &ans, int mod);
};


// A routine for multiplying a matrix times a vector...

template <class ElemType>
void MModTimesV(IMatrix33<ElemType> &m, IVector3<ElemType> &v, 
		IVector3<ElemType> &ans, int mod)
{
    for (int i=0; i<3; i++)
	ans.val[i] = (m.val[i][0]*v.val[0] + 
	              m.val[i][1]*v.val[1] + 
	              m.val[i][2]*v.val[2] ) % mod;
}

