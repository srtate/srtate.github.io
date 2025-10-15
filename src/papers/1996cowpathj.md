---
authors: 'M. Kao, J. H. Reif, and S. R. Tate'
title: 'Searching in an Unknown Environment: An Optimal Randomized Algorithm for the Cow-Path Problem'
pubin: 'Information and Computation'
extra: 'Vol. 133, No. 1, 1996, pp. 62-80'
sort: 199601
tags: ["S:Online Algorithms","T:Journal"]
---

Searching for a goal is a central and extensively studied problem in
computer science.  In classical searching problems, the cost of a
search function is simply the number of queries made to an oracle that
knows the position of the goal.  In many robotics problems, as well as
in problems from other areas, we want to charge a cost proportional to
the distance between queries (e.g., the time required to travel
between two query points).  With this cost function in mind, the
abstract problem known as the $w$-lane cow-path problem was designed.

There are known optimal deterministic algorithms for the cow-path
problem, and we give the first randomized algorithm in this paper.  We
show that our algorithm is optimal for two paths ($w=2$), and give
evidence that it is optimal for larger values of $w$.  Subsequent to
the preliminary of version of this paper, Kao, Ma, Sipser, and
Yin have shown that our algorithm is indeed optimal for
all $w\geq 2$.  Our randomized algorithm gives expected performance
that is almost twice as good as is possible with a deterministic
algorithm.  For the performance of our algorithm, we also derive the
asymptotic growth with respect to $w$ -- despite similar complexity
results for related problems, it appears that this growth has never
been analyzed.

### Resources and Downloads

* [Journal paper - author's copy](/publications/1996-CowPath.pdf)
* [Official journal page](https://doi.org/10.1006/inco.1996.0092)

