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

<p>A <a href="homework12.pdf">printable PDF</a> is available.</p>

<center><h1>Homework 12 &ndash; Due Tuesday, April 25</h1></center>

<P><P><P><I>For problems 1 and 2 below, see what you can calculate based
  on the formulas for <I>r</I> and <I>s</I>, as well as the information that is
  known by the attacker (as described in each problem). Try taking the
  formulas and multiplying through by values, or subtracting formulas
  to see what cancels out, or doing other basic algebraic
  manipulations to see what you can have "pop out" of the formulas.</I>
<OL><LI>The Digital Signature Algorithm (see Figure 13.3 on page 410) starts
by selecting what the book calls the user's "per message secret
number" <I>k</I>, after which <I>r=(g<sup>k</sup> mod p) mod q</I>
becomes part of the signature. Since <I>k</I> is just a random value, not
related to the signer's private key, is it important to protect <I>k</I>?
In particular, what would be the consequences if an attacker could
learn <I>k</I> in addition to the signature <I>(r,s)</I>?
<p><LI>The "per message" part of the phrase "per message secret number"
is vital. If an attacker could trick a signer into signing two different
messages, say <I>M<sub>1</sub></I> and <I>M<sub>2</sub></I>, using the same secret <I>k</I>, what can the
attacker figure out from knowledge of those two signatures and the two
messages.
<p><LI>The secure chat protocol that we have developed for the project in
this class is not perfect. Describe at least one way the security of
the system could be compromised (if you make any assumptions, make
sure they are clearly stated).
</OL>


</div></td></tr>
</table>

</body> </html>

