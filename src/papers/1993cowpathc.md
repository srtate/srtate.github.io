---
authors: 'M. Kao, J. H. Reif, and S. R. Tate'
title: 'Searching in an Unknown Environment: An Optimal Randomized Algorithm for the Cow-Path Problem'
pubin: 'Proceedings of the Fourth Annual ACM-SIAM Symposium on Discrete Algorithms (SODA)'
extra: '1993, pp. 441-447'
sort: 199301
tags: ["S:Online Algorithms","T:Conference"]
---

Searching for a goal is a central and extensively studied problem in
computer science.  In classical searching problems, the cost of
a search function is simply the number of queries made to an
oracle that knows the position of the goal.  In many robotics
problems, as well as in problems from other areas, 
we want to charge a cost proportional
to the distance between queries (e.g., the time required to travel
between two query points).  With this cost function in mind,
the abstract problem known as the $w$-lane cow-path problem
was designed.

There are known optimal deterministic algorithms for the cow-path
problem, and we give the first randomized algorithms in this paper.
We show that our algorithm is optimal for two paths ($w=2$), and give
evidence that it is indeed optimal for larger values of $w$.  The
randomized algorithms give expected performance that is almost twice
as good as is possible with a deterministic algorithm.



### Resources and Downloads

* [Conference paper - author's copy](/publications/1993-CowPath-SODA.pdf)
* [Official proceedings page - ACM Digital Library](https://dl.acm.org/doi/10.5555/313559.313848)
* [Subsequent journal version](../1996cowpathj)


