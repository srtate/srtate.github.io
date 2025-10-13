---
authors: 'V. Gunupudi and S. R. Tate'
title: 'Random Oracle Instantiation in Distributed Protocols Using Trusted Platform Modules'
pubin: 'Proceedings of the 3rd IEEE International Symposium on Security in Networks and Distributed Systems (SSNDS) - part of the 21st International Conference on Advanced Information Networking and Applications Workshops'
extra: '2007, pp. 463-469'
sort: 200702
tags: ["S:Security&Cryptography","T:Conference"]
---
The random oracle model is an idealized theoretical model that has
been successfully used for designing many cryptographic algorithms and
protocols.  Unfortunately, a series of results has shown that proofs
of security in the idealized random oracle model do not translate into
security in the standard model (basically synonymous with "real
systems"), so the reasoning that protocols designed using random
oracles are secure on real systems is heuristic at best, and
fundamentally flawed at worst.  In this paper, we consider how
architectural changes taking place in real systems today, specifically
the introduction of the trusted platform module, affect the
realizability of random oracles.  In particular, we show how a TPM
that is only trivially enhanced from real, standard TPMs can leverage
one of its most powerful capabilities --- the capability of keeping
secrets from the host in which it resides --- in order to provide
functionality that is indistinguishable from a true random oracle to
any polynomial time adversary. In addition to a careful description of how this works, we provide security proofs based on assumptions of
TPM security, and provide concrete performance estimates through
benchmarks using a current TPM. To prove the security of our TPM-based scheme, we formally define and prove properties about a cryptographic primitive which we call a
``hybrid pseudorandom function'' that may be of independent interest.


### Resources and Downloads

* [Conference paper - author's copy](/publications/SSNDS-Oracles.pdf)
