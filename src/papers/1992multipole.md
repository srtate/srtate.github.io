---
authors: 'V. Pan, J. H. Reif, and S. R. Tate'
title: 'The Power of Combining the Techniques of Algebraic and Numerical Computing: Improved Approximate Multipoint Polynomial Evaluation and Improved Multipole Algorithms'
pubin: 'Proceedings of the 33rd Annual Symposium on Foundations of Computer Science (FOCS)'
extra: '1992, pp. 703--713'
sort: 199209
tags: ["S:Geometry", "T:Conference"]
---

We demonstrate the power of combining the techniques of algebraic
computation with ones of numerical computation. We do this by
improving the known methods for polynomial evaluation on a set of real
points and for simulation of $n$ charged particles on the plane (the
latter problem is equivalent to Trummer’s problem). In both cases we
approximate (rather than exactly compute) the solutions and do this by
exploiting algebraic techniques of the algorithm design.

The previous best algorithm for approximate evaluation of a polynomial
on a real set was due to Rokhlin and required the order of $mu + nu^3$
infinite precision arithmetic operations to approximate [on a fixed
bounded set $X(m)$ of $m + 1$ real points] a degree $n$ polynomial
$p(x)=\sum_{i=0}^{n} p_ix^i$
within the error bound $2^{-u}\sum_{i=0}^{n}|p_i|$. We develop an
approximation algorithm, which decreases Rokhlin’s record estimate to
$O(m\log^2 u + n \min \{u,\log n\})$. This result may also be favorably compared
with the record bound $O( (m + n) \log^2 n)$ on the complexity of the
exact multipoint polynomial evaluation. Furthermore, if some values
independent of the input coeficients and of the set $X(m)$ and depending
only on $n$ and $U$ can be precomputed cost-free, then we decrease the
computational cost estimate to $O(m \log^2 u + u \log u)$. All our
algorithms allow NC and processor efficient parallel
implementation. Because of the fundamental nature of the multipoint
polynomial evaluation, our results have further applications to
numerical and algebraic computational problems.

For Trummer’s problem, our algorithm approximates the output values to
$p$ bits each, by using $O(n \log^2 p)$ time, thus improving the previous
record time bound of $O(np\log p)$.

### Resources and Downloads

* [Conference paper - author's copy](/publications/1992-NBody-PanReifTate.pdf)
* [Official proceedings page - IEEE Computer](https://doi.ieeecomputersociety.org/10.1109/SFCS.1992.267780)



