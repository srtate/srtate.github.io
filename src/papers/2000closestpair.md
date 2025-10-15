---
authors: 'J. H. Reif and S. R. Tate'
title: 'Fast Spatial Decomposition and Closest Pair Computation for Limited Precision Input'
pubin: 'Algorithmica'
extra: 'Vol. 28, 2000, pp. 271-287'
sort: 200001
tags: ["S:Geometry", "T:Journal"]
---
In this paper we show that if the input points to the geometric
closest pair problem are given with limited precision (each coordinate
is specified with $O(\log n)$ bits), then we can compute the closest
pair in $O(n\log\log n)$ time.  We also apply our spatial
decomposition technique to the $k$-nearest neighbor and $n$-body
problems, achieving similar improvements.

To make use of the limited precision of the input points, we use a
reasonable machine model that allows "bit shifting" in constant time
-- we believe that this model is realistic, and provides an
interesting way of beating the $\Omega(n\log n)$ lower bound that
exists for this problem using the more typical algebraic RAM model.

### Resources and Downloads

* [Journal paper - author's copy](/publications/2000-Decomposition.pdf)
* [Official journal link](https://link.springer.com/article/10.1007/s004530010040)
