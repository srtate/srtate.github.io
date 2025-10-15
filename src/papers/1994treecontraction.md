---
authors: 'J. H. Reif and S. R. Tate'
title: 'Dynamic Parallel Tree Contraction'
pubin: 'Proceedings of the Symposium on Parallel Algorithms and Architecture (SPAA)'
extra: '1994, pp. 114--121'
sort: 199401
tags: ["S:Online Algorithms","T:Conference"]
---
Parallel tree contraction has been found to be a useful and quite
powerful tool for the design of a wide class of efficient graph
algorithms.  We propose a corresponding technique for the parallel
solution of incremental problems.  As our computational model, we
assume a variant of the CRCW PRAM where we can dynamically activate
processors by a forking operation.

We consider a dynamic binary tree $T$ of $\le n$ nodes and unbounded
depth.  We describe a procedure, which we call the *dynamic
parallel tree contraction algorithm*, which incrementally processes
various parallel modification requests and queries:

(1) parallel requests to add or delete leaves of $T$, or modify labels
of internal nodes or leaves of $T$, and also

(2) parallel tree contraction queries which require recomputing values
at specified nodes.

Each modification or query is with respect to a set of nodes $U$ in
$T$.

Our dynamic parallel tree contraction algorithm is a randomized
algorithm that takes $O(\log(|U|\log n))$ expected
parallel time using
$O(\frac{|U|\log n}{\log(|U|\log n)})$ processors.  We give a large number of applications (with
the same bounds), including:

(a) maintaining the usual tree properties (such as number of
ancestors, preorder, etc.),
 
(b) Eulerian tour,

(c) expression evaluation,

(d) least common ancestor, and

(e) canonical forms of trees.

Previously, there where no known parallel algorithms for incrementally
maintaining and solving such problems in parallel time less than
$\Theta(\log n)$.

In deriving our incremental algorithms, we solve a key subproblem,
namely a *processor activation problem*, within the same asymptotic
bounds, which may be useful in the design of other parallel
incremental algorithms.  This algorithm uses an interesting persistent
parallel data structure involving a non-trivial construction.

In a subsequent paper, we apply our dynamic parallel tree contraction
technique to various incremental graph problems:
maintaining various properties, (such as coloring, minimum covering
set, maximum matching, etc.) of parallel series graphs, outerplanar
graphs, Helin networks, bandwidth-limited networks,  and various
other graphs with constant separator size.

### Resources and Downloads

* [Conference paper - author's copy](/publications/1994-TreeContraction-SPAA.pdf)
* [Official proceedings page](https://doi.org/10.1145/181014.181050)


