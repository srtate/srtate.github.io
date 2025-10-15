---
authors: 'M.-Y. Kao, A. Nolte, and S. R. Tate'
title: 'The Risk Profile Problem for Stock Portfolio Optimization'
pubin: 'Proceedings of the 32nd Annual ACM Symposium on Theory of Computing (STOC)'
extra: '2000, pp. 228-234'
sort: 200005
tags: ["S:Miscellaneous", "T:Conference"]
---

In this paper we study the problem of determining an
optimal investment strategy for investors with different attitudes
toward the trade-offs of risk and profit.  The probability
distribution of the return values of the stocks that are considered
by the investor are assumed to be known, while the joint distribution
is unknown. The problem is to find the best investment strategy in
order to minimize the probability of losing a certain percentage of the
invested capital based on different attitudes of the investors toward
future outcomes of the stock market.

We show that for portfolios made up of two stocks, we can exactly and
quickly solve the problem of finding an optimal portfolio for
aggressive or risk-averse investors, using an algorithm based on a
fast greedy solution to a maximum flow problem.  However, an investor
looking for an average-case guarantee (so is neither aggressive or
risk-averse) must deal with a more difficult problem.  In particular,
we show that computing the distribution function associated with the
average-case bound is $\sharp P$-complete.  On the positive side, we
show how to use random sampling techniques similar to those for
high-dimensional volume estimation to provide approximate answers.
When $k>2$ stocks are considered, we show that a simple solution based
on the same flow concepts as our 2-stock algorithm would imply that
$P=NP$, so is highly unlikely.  We give approximation algorithms for
this case as well as exact algorithms for some important special cases.


### Resources and Downloads

* [Conference paper - author's copy](/publications/2000-RiskProfile.pdf)

