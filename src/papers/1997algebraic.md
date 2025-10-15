---
authors: 'J. H. Reif and S. R. Tate'
title: 'On Dynamic Algorithms for Algebraic Problems'
pubin: 'Journal of Algorithms'
extra: 'Vol. 22, No. 2, 1997, pp. 347-371'
sort: 199702
tags: ["S:Online Algorithms","T:Journal"]
---

In this paper, we examine the problem of incrementally evaluating
algebraic functions.  In particular, if
$f(x_1,x_2,\cdots,x_n)=(y_1,y_2,\cdots,y_m)$ is an algebraic problem,
we consider answering on-line requests of the form "change input
$x_i$ to value $v$'' or ``what is the value of output $y_j$?"

We first present lower bounds for some simply stated algebraic
problems: multipoint polynomial evaluation, polynomial reciprocal, and
extended polynomial GCD,  proving an $\Omega(n)$ lower
bound for the incremental evaluation of these functions.  In addition,
we prove two time-space trade-off theorems that apply to incremental
algorithms for almost all algebraic functions. 

We then derive several general-purpose algorithm design techniques and
apply them to several fundamental algebraic problems.  For example, we
give an $O(\sqrt{n})$ time per request algorithm for incremental DFT.
We also present a design technique for serving incremental requests
using a parallel machine, giving a choice of either optimal work with
respect to the sequential incremental algorithm or super-fast
algorithms with $O(\log\log n)$ time per request with a sub-linear
number of processors.


### Resources and Downloads

* [Journal paper - author's copy](/publications/1997-DynamicAlgebraicAlgorithms.pdf)
* [Official journal link](https://doi.org/10.1006/jagm.1995.0807)

