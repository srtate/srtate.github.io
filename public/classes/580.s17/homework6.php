<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title>CSC 580:  Cryptography and Security in Computing</title>
<link href="../css/classstyle.css" type="text/css" rel="stylesheet" />
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0">
<tr><td width="800"><img src="580banner.jpg" alt="CSC 580: Cryptography and Security in Computing" /></td></tr>
</table>
<table border="0" cellpadding="0" cellspacing="0">
<col width="150" />
<col width="700" />
<tr><td valign="top">
<div class="navigate">
<div class="navhead">Navigation</div>
<div class="navother">
<a href="index.php">Class Home</a>
</div>
<div class="navother">
<a href="syllabus.php">Syllabus</a>
</div>
<div class="navother">
<a href="sched.php">Schedule</a>
</div>
<div class="navother">
<a href="readings.php">Readings</a>
</div>
<div class="navother">
<a href="handouts.php">Handouts</a>
</div>
<div class="navother">
Assignments
</div>
<div class="navother">
&nbsp;&nbsp;&bullet; <a href="homework.php">HW Problems</a>
</div>
<div class="navother">
&nbsp;&nbsp;&bullet; <a href="project.php">Project</a>
</div>
<div class="navother">
<a href="http://docs.oracle.com/javase/8/docs/technotes/guides/security/crypto/CryptoSpec.html">JCA Ref Guide</a>
</div>
<div class="navother">
<a href="http://docs.oracle.com/javase/8/docs/api/">Java API Docs</a>
</div>
<div class="navother">
<a href="http://canvas.uncg.edu/">Canvas</a>
</div>
<div class="navother">
<a href="moreinfo.php">More Information</a>
</div>
<img src="../img/navtail.png" alt="" />
</div>
</td><td valign="top"><div class="main">

<p>A <a href="homework6.pdf">printable PDF</a> is available.</p>

<center><h1>Homework 6 &ndash; Due Tuesday, February 28</h1></center>

<OL><LI>Textbook, page 229, Problem 7.11.
<p><LI>(<I>This is a repeat of a question from the last homework, with CBC mode
  replaced with CBC-CTS mode. Hint: It may not be clear from Figure
  7.18 in the book, but the part of the ciphertext marked "X" in
  that diagram does not need to be transmitted.</I>)
You are developing an application in which you have to regularly send
packets that are 36 bytes (288 bits) long using AES.  If you use CBC-CTS
mode, how much data do you need to transmit?  Be sure to explain the
reasoning behind your answer (show your work).
<p><LI>A secure PRNG should have unpredictable future outputs if it is
generating bits from an unknown seed, and many cryptographic
applications have been broken in practice because of PRNGs that don't satisfy
this property. Consider a hardware version of the CTR-mode PRNG
described in the book (pages 243 and 244), but with the following
change: rather than the seed being used for both <I>K</I> and the initial
value of <I>V</I>, the seed is only used to initializes <I>V</I> while
<I>K</I> is a fixed secret embedded in the hardware and only known to the
manufacturer.
<p><OL type="a"><LI>Show how the manufacturer can predict all future outputs,
given just the first 128 bits of pseudorandom output. Explain
precisely what the attacker/manufacturer does to predict future
outputs.  (Note: This is called a "backdoor"!)
<p><LI>Do you think that this PRNG is secure against an attacker
that does not know <I>K</I>? Try to give some reasoning/justification for
your answer, but I'm not expecting a detailed argument.
</OL>
</OL>


</div></td></tr>
</table>

</body> </html>

