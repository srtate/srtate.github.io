---
authors: 'M. Kao and S. R. Tate'
title: 'Online Matching with Blocked Input'
pubin: 'Information Processing Letters'
extra: 'Vol. 38, May 1991, pp. 113--116'
sort: 199105
tags: ["S:Online Algorithms","T:Journal"]
---

In this paper, we examine the problem of "blocked online bipartite matching".
This problem is similar to the online matching problem except that the
vertices arrive in blocks instead of one at a time.  Previously studied
problems exist as special cases of this problem;  the case where each
block contains only a single vertex is the standard online matching problem
studied in [KVV90],
and the case where there is only one block (containing all vertices
of the graph) is the offline matching problem (see, for example, [AHU85]).

The main result of this paper is that no performance gain (except in
low order terms) is possible by revealing the vertices in blocks,
unless the number of blocks remains constant as $n$ (the number of
vertices) grows.  Specifically, we show that if the number of vertices
in a block is $k=o(n)$, then the expected size of the matching
produced by any algorithm (on its worst case input) is at most
$(1-1/e)n + o(n)$.  This is exactly the bound achieved in the original
online matching problem, so no improvement is possible when $k=o(n)$.
This result follows from a more general upper bound that applies for
all $k \leq n$; however, the bound does not appear to be tight for
some values of $k$ which are a constant fraction of $n$ (in
particular, for $k=n/3$).

We also give an algorithm that makes use of the blocked structure of
the input.  On inputs with $k=o(n)$, this algorithm can be shown to
perform at least as well as using the algorithm from [KVV90] and
ignoring blocking. Hence, by the upper bound, our algorithm is optimal
to low order terms for $k=o(n)$, and in some cases considerably
outperforms the algorithm of [KVV90].  The algorithm also trivially
has optimal performance for $k=n$; furthermore, it appears to have
optimal performance for $k=n/2$, but a proof of this performance has
not been found.  Unfortunately, the algorithm does not meet the upper
bound for all block sizes, as is shown by a simple example with block
size $n/3$.  We conjecture that the algorithm we present is actually
optimal, and that the upper bound is not tight.


### Resources and Downloads

* [Journal paper - author's copy](/publications/1991-OnlineMatching.pdf)
* [Official journal page](https://doi.org/10.1016/0020-0190(91)90231-6)
