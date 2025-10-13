---
authors: 'S. R. Tate and K. Xu'
title: 'General-Purpose Spatial Decomposition Algorithms: Experimental Results'
pubin: 'Proceedings of the 2nd Workshop on Algorithm Engineering and Experimentation (ALENEX)'
extra: '2000, pp. 197-216'
sort: 200001
tags: ["S:Geometry", "T:Conference"]
---
In this paper, we experimentally explore four different hierarchical
space decomposition algorithms.  Three of these algorithms are known
from prior literature, whereas the fourth was derived as a result of
initial experimental work with the previous algorithms, and is
presented for the first time in this paper.  The new algorithm has
several variations, and one of them (called TX-AL) is consistently
faster than all of the other algorithms, despite the fact that its
worst-case asymptotic performance is suboptimal (TX-AL has worst-case
complexity $\Theta(n\log n)$, where a couple of the other
algorithms/variants have complexity $O(n\log\log n)$).  This shows the
validity of the bucketing technique introduced by algorithm RT, while
making some sacrifices on asymptotic complexity to allow for smaller
constants in the running time.  We examine the decomposition
algorithms by themselves and also in the context of three different
applications: closest pair, all nearest neighbors, and $n$-body force
computation.

Other results presented here include: tests that show the important
practical benefit of finding tight bounding boxes for regions prior to
testing region dependencies and running applications; tests that show
how the amount of non-uniformity in input distribution affects
decomposition time; and tests that show that this framework of general
decomposition plus application is indeed competitive with algorithms
that are designed to solve specific problems.


### Resources and Downloads

* [Conference paper - author's copy](/publications/2000-DecompExper.pdf)


