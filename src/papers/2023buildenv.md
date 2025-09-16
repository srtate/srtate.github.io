---
authors: 'S.R. Tate and B. Yuan'
title: 'On the Efficiency of Building Large Collections of Software: Modeling, Algorithms, and Experimental Results'
pubin: 'Springer Communications in Computer and Information Science'
extra: 'vol 1859, pp. 145-168, July 2023'
sort: 202307
tags: ["Security&Cryptography","Journal"]
---
Building software from source code requires a build environment that meets certain requirements, such as the presence of specific compilers, libraries, or other tools. Unfortunately, requirements for different packages can conflict with each other, so it is often impossible to use a single build environment when building a large collection of software. This paper develops techniques to minimize the number of distinct build environments required, and measures the practical impact of our techniques on build time. In particular, we introduce the notion of a "conflict graph," and prove that the problem of minimizing the number of build environments is equivalent to the graph coloring problem on this graph. We explore several heuristic techniques to compute conflict graph colorings, finding solutions that result in surprisingly small sets of build environments. Using Ubuntu 20.04 as our primary experimental dataset, we computed just 4 different environments that were sufficient for building the "Top 500" most popular source packages, and 11 build environments were sufficient for building all 30,646 source packages included in Ubuntu 20.04. Finally, we experimentally evaluate the benefit of these environments by comparing the work required for building the "Top 500" with our environments to the work required using the traditional minimal environment build. We saw that the total work required for building these packages dropped from 139h36m (139 hours and 36 minutes) to 54h18m, a 61% reduction.


