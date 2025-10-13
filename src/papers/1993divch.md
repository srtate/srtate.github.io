---
authors: 'S. R. Tate'
title: 'Newton Iteration and Integer Division'
pubin: 'Synthesis of Parallel Algorithms'
extra: 'edited by John H. Reif, Chapter 12, pp. 539--572, 1993. San Mateo, CA: Morgan Kaufmann Publishers'
sort: 199301
tags: ["S:Complexity","T:Journal"]
---
*No abstract -- brief description follows.*

At the heart of all numerical computations are the basic operations of
addition, subtraction, multiplication, and division (also, to a lesser extent,
more complex operations such as powering, finding square roots, computing
logarithms, etc.). It is vital to study these problems from the standpoint of
parallel algorithms, because even in commonly used single processor machines
the basic operations are done in parallel (by parallel paths through low-level
logic circuits).

In this chapter, the parallel complexity of division is compared with
the complexity of the other elementary operations.  The problem of
integer division is defined to be a function that takes a pair
of input values $(y,x)$, and produces the pair of values $(q,r)$ such
that $y=qx+r$, where $0 \leq r < x$ (i.e., a quotient and a
remainder).  Reduction of division to multiplication via
Newton approximation is shown to provide good sequential
results, but these results do not translate well to parallel
algorithms.  In this chapter, we describe a parallel algorithm due to
Reif and Tate which is a modified version of Newton
approximation (called *high order* Newton approximation
for reasons that will become clear).  This algorithm obtains parallel
results that are almost optimal.  On the way to the results for
division, it will be discovered that finding limited integer powers is
vital for division, so ways of accomplishing this are discussed.

### Resources and Downloads

* [Conference paper - author's copy](/publications/1993-DivisionChapter.pdf)


