---
authors: 'S. R. Tate and K. Xu'
title: 'On Garbled Circuits and Constant Round Secure Function Evaluation'
pubin: 'CoPS Lab Technical Report 2003-02'
extra: '2003'
sort: 200302
tags: ["S:Security&Cryptography","T:Report"]
---
In this paper, we examine a form of garbled (or encrypted) circuit
introduced by Beaver, Micali, and Rogaway as part of their design of a
constant-round secure function evaluation (SFE)
protocol [Beaver 90].
We show that a subtle flaw in their construction allows even a simple
passive adversary (also known as an "honest-but-curious adversary")
to discover private data when evaluating such a garbled circuit.  In
particular, information leaks from the garbled circuit at places where
multiple gates share a common input wire, and is extracted by
exploiting dependencies between the gate labels of the multiple gates
that share that input wire.
In addition to showing how this flaw manifests itself and
how it can be exploited, we pinpoint the errors in the corresponding
security proof [Rogaway 91].  Finally, we introduce a new type of
gate called a "splitter" which corrects the security flaw by
removing all instances of shared input wires, and using
this we can correct the problems in the proof as well, giving a secure
garbled circuit.  This corrected circuit can be substituted for
the original construction in applications such as the constant round
SFE protocol of Beaver, Micali, and Rogaway and secure mobile agent
protocols such as described by Algesheimer *et
al.*

### Resources and Downloads

* [Conference paper - author's copy](/publications/2003-GarbledCircuits.pdf)


