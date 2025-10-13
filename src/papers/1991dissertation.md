---
authors: 'S. R. Tate'
title: 'Arithmetic Circuit Complexity and Motion Planning'
pubin: 'Ph.D. Dissertation'
extra: 'Duke University, 1991'
sort: 199105
tags: ["S:Miscellaneous", "T:Report"]
---
This dissertation presents the results of my research in two
areas:  parallel algorithms/circuit complexity, 
and algorithmic motion planning.
The chapters on circuit complexity examine the parallel complexity
of several fundamental problems (such as integer division) in the model
of small depth circuits.  In the later chapters on motion planning,
we turn to the computationally intensive problem of planning
efficient trajectories for robots in both cooperative and
non-cooperative environments.

Specifically, we first examine the complexity of integer division
with remainder under the standard model of constant fanin boolean
circuits.  We restrict our attention to circuits which are
logspace uniform, and present a novel algorithm that has
better asymptotic complexity bounds than any previously
known algorithm.  In fact, it matches the best previously known
depth bound and the best previously known size bound *simultaneously*.

Next, we examine circuits where each gate has arbitrary fanin,
and can compute the MAJORITY function.  Interestingly, while
it is impossible to compute integer division with constant depth,
unbounded fanin AND/OR circuits, we show that
it is possible to compute it with
only $O(n^{1+\epsilon})$ gates (for any constant $\epsilon>0$)
and constant depth when MAJORITY
gates are allowed.  Unfortunately, to get a constant depth circuit,
we allow the circuit to be only P-uniform (rather than logspace
uniform).

In the chapters on motion planning, we first give an approximation
bound for optimal time motion planning, where the robot is given
bounds on the $L_2$ norms of velocity and acceleration.  This 
(and concurrent, independent work by Donald and Xavier)
was the first such approximation algorithm for robots with dynamics
bounded in the $L_2$ norm.

The second chapter on motion planning addresses the following
problem:  what if a second, non-cooperating (or even adversarial)
robot is added to the environment.  This problem is referred to as
a pursuit game, and we must make a plan that
avoids collisions with the second robot.  We present both an
exponential time lower bound and several polynomial time
approximation algorithms for this problem.  The
lower bound is the first truly intractable lower
bound for a robotics problem with perfect information.  Despite
this lower bound, we present a polynomial time
algorithm that gives approximately
optimal solutions to an important class of pursuit games -- namely,
those where it is possible for our robot to keep a certain ``safety
margin'' between it and its adversary.

### Resources and Downloads

* [Full dissertation](/publications/1991-Tate-Dissertation.pdf)

