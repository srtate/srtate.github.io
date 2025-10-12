---
authors: 'V. Gunupudi and S. R. Tate'
title: 'Timing-Accurate TPM Simulation for What-If Explorations in Trusted Computing'
pubin: 'Proceedings of the 2010 International Symposium on Performance Evaluation of Computer and Telecommunication Systems'
extra: '2010, pp. 171-178'
sort: 201002
tags: ["S:Security&Cryptography","T:Conference"]
---
The addition of security-oriented hardware devices such as Trusted Platform Modules (TPMs) to computing systems, as promoted by the Trusted Computing Group, leads to many interesting possibilities. Many interesting research questions are of the form “What if the TPM could do x?”, but since the functionality of these chips is necessarily fixed it is difficult to explore these questions experimentally and evaluate the performance of proposed solutions. In this paper, we develop a timing model for TPMs which we can instantiate based on experiments with existing TPMs. We perform experiments that validate this model, building “performance profiles” for TPMs from different manufacturers. Our validation process shows that our timing model is very accurate (errors less than 20ms and typically less than 1%) for all but one of the TPMs tested. While the accuracy for the remaining TPM is less than ideal, approaching 25% error, we were able to hand-tune this model so that errors in estimated time were reduced to less than 16%.

In this paper we also describe our work incorporating these performance profiles into an existing software-based TPM simulator. This modified simulator then allows us to add new functionality with performance that accurately reflects the time such functionality would require if implemented in actual devices. As an example application of this, we describe results of our experiments with implementing random oracles on TPMs, using enhanced functionality not available on existing TPMs.

### Resources and Downloads

* [Conference paper - author's copy](/publications/2010-TPMSim-GunupudiTate.pdf)



