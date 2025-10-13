---
authors: 'P. Yu and S. R. Tate'
title: 'Online/Offline Signature Schemes for Devices with Limited Computing Capabilities'
pubin: 'Proceedings of the RSA Conference 2008, Cryptographers Track (CT-RSA)'
extra: '2008, pp. 301-317'
sort: 200802
tags: ["S:Security&Cryptography","T:Conference"]
---
We propose a family of efficient digital signature schemes, which are
proved secure under the strong RSA assumption without requiring a
random oracle. The new signature schemes can operate in an
online/offline manner, doing most of their work in the offline
precomputation phase.  The online phase, which is performed after the
message to be signed is known, is very efficient, requiring only a
single multiplication. Online/offline signatures are useful in
settings in which signatures need to be produced with few operations,
either when there is a large volume of requests or if the device
performing the signature is not computationally powerful. Our schemes
have extremely low computation cost so are particularly suitable for
devices with limited computing capabilities such as smart cards or
mobile devices.

This paper provides three specific contributions.  First, we
show how to modify the Camenisch-Lysyanskaya signature scheme to
operate in an online/offline manner (the modifications also have
benefits even when used as a traditional one-phase
signature). Secondly, we show that we can use computations over a
small subgroup of $Z_n^*$ to further improve the
efficiency of our basic signature scheme while retaining the
online/offline characteristic. And third, we show that we can use
division intractable hash functions to remove the requirement of
generating random primes for use in this class of signature schemes.

### Resources and Downloads

* [Conference paper - author's copy](/publications/2008-OfflineSigs.pdf)

