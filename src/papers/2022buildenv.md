---
authors: 'S.R. Tate and B. Yuan'
title: 'Minimum Size Build Environment Sets and Graph Coloring'
pubin: 'Proceedings of the 17th International Conference on Software Technologies (ICSOFT)'
extra: '2022, pp. 57-67'
sort: 202206
tags: ["hi"]
---
In this paper, we formalize the problem of designing build environments for large-scale software build and analysis, addressing issues with dependencies and conflicts between components required for each source package. We show that this problem can be fully captured by constructing a graph, which we call the "conflict graph," from dependency and conflict information, and then finding a minimum set of build environments corresponds exactly to finding minimum colorings of the conflict graph. As graph coloring is an NP-hard problem, we define several graph simplifications that can reduce the size of the graph, to improve the performance of heuristic coloring algorithms. In experimental results, we explore basic conflict graph metrics over time for various releases of the Ubuntu Linux distribution, and examine coloring results for the latest LTS release (Ubuntu 20.04). We find that small numbers of build environments are sufficient for building large numbers of packages, with 4 different environments sufficient for building the 1000 most popular source packages, and 11 build environments sufficient for building all 30,646 source packages included in Ubuntu 20.04.


