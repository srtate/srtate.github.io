---
authors: 'J. H. Reif and S. R. Tate'
title: 'On Threshold Circuits and Polynomial Computation'
pubin: 'SIAM Journal on Computing'
extra: 'Vol. 21, No. 5, October 1992, pp. 896--908'
sort: 199205
tags: ["S:Complexity","T:Journal"]
---

A *Threshold Circuit* consists of an acyclic digraph of unbounded
fanin, where each node computes a threshold function or its negation.
This paper investigates the computational power of Threshold Circuits.
A surprising relationship is uncovered between Threshold Circuits and
another class of unbounded
fanin circuits which are denoted Finite Field $Z_{P(n)}$ Circuits, where
each node computes either multiple sums or products of integers modulo
a prime $P(n)$.  In particular, it is proved that all functions computed
by Threshold Circuits of size $S(n)\geq n$ and depth $D(n)$ can 
also be computed by $Z_{P(n)}$ Circuits of size $O(S(n)\log
S(n)+nP(n)\log P(n))$ and depth $O(D(n))$.  Furthermore, it is shown that
all functions computed by $Z_{P(n)}$ Circuits of size $S(n)$ and depth
$D(n)$ can be computed by Threshold Circuits of size
$O(\frac{1}{\epsilon^2}(S(n)\log P(n))^{1+\epsilon})$ and depth
$O(\frac{1}{\epsilon^5}D(n))$.  These are the main results of this paper.

There are many useful and quite surprising consequences of this result.
For example, integer reciprocal can be computed in size $n^{O(1)}$ and
depth $O(1)$.  More generally, any analytic function with a convergent
rational polynomial power series (such as sine, cosine,
exponentiation, square root, and logarithm) can be computed within
accuracy $2^{-n^{c}}$, for any constant $c$, by Threshold Circuits of
polynomial size and constant depth.  In addition, integer and
polynomial division, FFT, polynomial interpolation, Chinese
Remaindering, all the elementary symmetric functions, banded matrix
inverse, and triangular Toeplitz matrix inverse can be exactly
computed by Threshold Circuits of polynomial size and constant depth.
All these results and simulations hold for polytime uniform circuits.
This paper also gives a corresponding simulation of logspace uniform $Z_{P(n)}$
Circuits by logspace uniform Threshold Circuits requiring an
additional multiplying factor of $O(\log\log\log P(n))$ depth.

Finally, purely algebraic methods for lower bounds for
$Z_{P(n)}$ Circuits are developed.  Using degree arguments, a Depth
Hierarchy Theorem for $Z_{P(n)}$ Circuits is proved: for any $S(n) \geq n$,
$D(n) = O(S(n)^{c'})$ for some constant $c'<1$, and prime $P(n)$
where $6(S(n)/D(n))^{D(n)} < P(n) \leq 2^n$, there exists explicitly
constructible functions computable by $Z_{P(n)}$ Circuits of size $S(n)$
and depth $D(n)$, but provably not computable by $Z_{P(n)}$ Circuits
of size $S(n)^{c}$ and depth $o(D(n))$ for any constant $c\geq 1.$

### Resources and Downloads

* [Journal paper - author's copy](/publications/1992-Threshold.pdf)



