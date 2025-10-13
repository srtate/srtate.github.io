---
authors: 'P. Yu and S. R. Tate'
title: 'An Online/Offline Signature Scheme Based on the Strong RSA Assumption'
pubin: 'Proceedings of the 3rd IEEE International Symposium on Security in Networks and Distributed Systems (SSNDS) - part of the 21st International Conference on Advanced Information Networking and Applications Workshops'
extra: '2007, pp. 601-606'
sort: 200703
tags: ["S:Security&Cryptography","T:Conference"]
---
We propose an efficient digital signature scheme, which is proved
secure under the strong RSA assumption, and can operate in an
online/offline manner, doing most of its work in the offline
precomputation phase.  The online phase, which is performed after the
message to be signed is known, is very efficient, requiring only a
single modular multiplication.  Online/offline signatures can be used
in settings in which signatures need to be produced quickly either when there
is a large volume of requests or if the device performing the
signature is not computationally powerful (such as a mobile device).
Our scheme can be seen as an online/offline extension of the
traditional signature scheme of Gennaro, Halevi, and Rabin (the GHR
signature scheme) which did not operate in this two-phase manner, and
required significant computation after the message was known.  In
contrast to another online/offline extension of the GHR scheme, our
new scheme avoids the use of trapdoor hash/commitment primitives,
allowing the use of a traditional hash function, improving the
efficiency of the offline phase of the algorithm.

### Resources and Downloads

* [Conference paper - author's copy](/publications/2007-OfflineSigs.pdf)
