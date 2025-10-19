---
authors: 'J. H. Reif and S. R. Tate'
title: 'Continuous Alternation: The Complexity of Pursuit in Continuous Domains'
pubin: 'Algorithmica'
extra: 'Vol. 10, 1993, pp. 151--181'
sort: 199310
tags: ["S:Robotics", "S:Complexity", "T:Journal"]
---

Complexity theory has used a game theoretic notion, namely
alternation, to great advantage in modeling parallelism and in
obtaining lower bounds.  The usual definition of alternation requires
that transitions be made in discrete steps.  The study of differential
games is a classic area of optimal control, where there is continuous
interaction and alternation between the players.  Differential games
capture many aspects of control theory and optimal control over
continuous domains.  In this paper, we define a generalization of the
notion of alternation which applies to differential games, and which we
call "continuous alternation".  This approach allows us to obtain
the first known complexity theoretic results for open problems in
differential games and optimal control.

We concentrate our investigation on an important class of differential
games, which we call polyhedral pursuit games.  Pursuit games have
application to many fundamental problems in autonomous robot control
in the presence of an adversary.  For example, this problem occurs in
manufacturing environments with a single robot moving among a number
of autonomous robots with unknown control programs, as well as in
automatic automobile control, and collision control among aircraft and
boats with unknown or adversary control.

We show that in a 3-dimensional pursuit game where each player's velocity
is bounded (but there is no bound on acceleration), the pursuit
game decision problem is hard for exponential time.  This lower bound
is somewhat surprising due to the sparse nature of the problem:
there are only two moving objects (the players), each
with only three degrees of freedom.
It is also the first provably intractable result for any robotic
problem with complete information;  previous intractibility results
have relied on complexity theoretic assumptions.

Fortunately, we can counter our somewhat pessimistic lower bounds
with polynomial time upper bounds for obtaining
approximate solutions.  In particular, we give polynomial time
algorithms that approximately solve a very large class of pursuit
games with arbitrarily small error.
For any $\epsilon > 0$, this algorithm finds a winning strategy for the
evader provided that there is a winning strategy that always stays at least
$\epsilon$ distance from the pursuer and all obstacles.  

If the obstacles are described with $n$ bits, then
the algorithm
runs in time $(n/\epsilon)^{O(1)}$, and applies to several types
of pursuit games: either velocity or both acceleration and velocity
may be bounded, and the bound may be of either the $L_2$ or
$L_\infty$ norm.  Our algorithms also generalize to when the
obstacles have constant degree algebraic descriptions, and
are allowed to have predictable movement.

### Resources and Downloads

* [Journal paper - author's copy](/publications/1993-ContinuousAlternation.pdf)
* [Official journal page](https://link.springer.com/article/10.1007/BF01891838)
