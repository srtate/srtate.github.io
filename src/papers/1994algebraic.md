---
authors: 'J. H. Reif and S. R. Tate'
title: 'Dynamic Algebraic Algorithms'
pubin: 'Proceedings of the Fifth Annual ACM-SIAM Symposium on Discrete Algorithms (SODA)'
extra: '1994, pp. 290--301'
sort: 199401
tags: ["S:Online Algorithms","T:Conference"]
---

In this paper, we examine the problem of incrementally evaluating
algebraic functions.  In particular, if
$f(x_1,x_2,\cdots,x_n)=(y_1,y_2,\cdots,y_m)$ is an algebraic problem,
we consider answering on-line requests of the form "change input
$x_i$ to value $v$'' or ``what is the value of output $y_j$?"  While
incremental evaluation of problems in graph theory and computational
geometry have been examined, there is very little literature on the
incremental evaluation of algebraic problems, with the exception of
the prefix sum problem for which [Fredman, 82] showed tight
$\Theta(\log n)$ bounds.  In this paper, we examine both lower bounds
and algorithm design techniques for algebraic problems.

We first present lower bounds for some simply stated algebraic
problems: multipoint polynomial evaluation, polynomial reciprocal, and
extended polynomial GCD.  In all cases we prove an $\Omega(n)$ lower
bound for the incremental evaluation of these functions.  In addition,
we give a rather surprising space-time trade off that applies to most
interesting algebraic functions, including those with good incremental
algorithms such as prefix sum, which are the first space-time
trade-offs known for incremental algorithms.  In particular, if we
have $S(n)$ storage locations available in addition to the inputs,
then incremental algorithms for most problems require
$\Omega(\frac{n}{S(n)})$ time per request.

Secondly, we present two general purpose techniques for designing
incremental algorithms.  The first method can produce highly efficient
incremental algorithms, giving for example an $O(M(w)\log n)$ time per
request algorithm for evaluating order-$w$ linear recurrences, and an
$O(\sqrt{n})$ time bound for incremental computation of the Discrete
Fourier Transform.  The second technique gives slightly slower
incremental algorithms for these problems, but is applicable to a
wider class of problems than the first method.  Using the second
method, we give incremental algorithms for multipoint evaluation with
changing coefficients, polynomial multiplication, and restricted
polynomial reciprocal that have request time $\tilde{O}(\sqrt{n})$,
where $\tilde{O}$ denotes the "soft-O" which neglects polylog
factors.  We also apply these techniques to various matrix problems,
giving fast incremental algorithms.

Lastly, we consider answering the on-line requests with a parallel
machine (a PRAM).  We show that requests can be answered very
efficiently for the problems of DFT, two-dimensional DFT, multipoint
polynomial evaluation with changing coefficients, and the chirp
$z$-transform with constant $z$.  We show a continuous processor-time
trade-off for these problems, where the total amount of work equals
our sequential algorithms for $\tilde{O}(\sqrt{n})$ processors, and at
the fastest end of the spectrum requests can be handled in $O(\log\log
n)$ time using $O(n/\log^cn)$ processors for any constant $c$.
Clearly, the sequential lower bounds can be translated to work lower
bounds for our parallel algorithms.

### Resources and Downloads

* [Conference paper - author's copy](/publications/1994-DynamicAlgebraicAlgorithms-SODA.pdf)
* [Official proceedings link -- ACM Digital Library](https://dl.acm.org/doi/abs/10.5555/314464.314507)
* [Subsequent journal version](../1997algebraic)
