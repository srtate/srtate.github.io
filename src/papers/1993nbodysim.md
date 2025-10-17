---
authors: 'J. H. Reif and S. R. Tate'
title: 'The Complexity of N-body Simulation'
pubin: 'Proceedings of the 20th Annual International Conference on Automata, Languages, and Programming (ICALP)'
extra: '1993, pp. 162--176'
sort: 199310
tags: ["S:Geometry", "T:Conference"]
---

The $n$-*body simulation problem* is stated as follows: Given
initial positions and velocities of $n$ particles that have pair-wise
force interactions, simulate the movement of these particles so as to
determine the positions of the particles at a future time.

In this paper, we give the first known $n$-body simulation algorithms
with rigorous proofs of bounded error.  The *reachability problem*
is to determine if a specific particle will reach a certain region at
some specified target time.  In the case we require $poly(n)$ bits of
accuracy and where the target time is $poly(n)$, our complexity bounds
are surprisingly PSPACE.

We also have matching lower bounds for $n$-body simulation problem (in
comparison all previous lower bound proofs required either artificial
external forces or obstacles).  We show that the reachability problem
for a set of interacting particles in three dimensions is PSPACE-hard.


### Resources and Downloads

* [Conference paper - author's copy](/publications/1993-NBody-ICALP.pdf)
* [Official proceedings page - Springer](https://link.springer.com/chapter/10.1007/3-540-56939-1_70)
