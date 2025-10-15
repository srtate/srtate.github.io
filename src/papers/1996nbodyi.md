---
authors: 'J. H. Reif and S. R. Tate'
title: "N-Body Simulation I: Fast Algorithms for Potential Field Evaluation and Trummer's Problem"
pubin: 'UNT Computer Science Technical Report N-96-002'
extra: '1996'
sort: 199601
tags: ["S:Geometry", "T:Report"]
---

In this paper, we describe a new approximation algorithm for the
$n$-body problem.  The algorithm is a non-trivial modification of the
fast multipole method that works in both two and three dimensions.
Due to the equivalence between the two-dimensional $n$-body problem
and Trummer's problem, our algorithm also gives the fastest known
approximation algorithm for Trummer's problem.

Let $A$ be the sum of the absolute values of the particle charges in
the $n$-body problem under consideration (or the sum of the masses if
the simulation is gravitational).  To approximate the particle
potentials with error bound $\epsilon$, we let
$p=\lceil\log(A/\epsilon)\rceil$ and give complexity bounds in terms
of $p$.  Note that, under reasonable assumptions on the particle
charges, if we desire the output to be accurate to $b$ bits, then
$p=\Theta(b)$.  In two dimensions, our algorithm runs in time
$O(n\log^2 p)$, which is a substantial improvement over the previous
best algorithm which requires $\Theta(n p \log p)$ time.  We also
apply our new algorithm to the three dimensional problem and get a new
algorithm that has time complexity $O(np^2)$, an improvement over the
best previously-known three-dimensional algorithm which requires
$\Theta(np^2\log p)$ time.  Our algorithms do not make any assumptions
about the input distribution, and are true worst-case bounds.


### Resources and Downloads

* [Tech report - author's copy](/publications/1996-NBodyI.pdf)

