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

<p>A <a href="homework8.pdf">printable PDF</a> is available.</p>

<center><h1>Homework 8 &ndash; Due Tuesday, March 28</h1></center>

<OL><LI>Give the RSA algorithm, including descriptions of how keys are generated and
how encryption and decryption work.  Use formulas, and describe the
size of values (i.e., number of bits) used in a typical real system.
Explain why decryption is the inverse if encryption (i.e., what is the
mathematics that explains why <I>M=D(PR<sub>a</sub>,E(PU<sub>a</sub>,M))</I> for all messages
<I>M</I>).
<p><LI>Joe makes a system using RSA for public key cryptography, but in the
key generation routine uses the standard C library <TT>rand()</TT>
function for random values, which uses a 15-bit value for a seed. Why
is this insecure? Be very specific in your answer, describing a real,
practical attack with an explanation of the time complexity of the
attack.
<p><LI>The basic Diffie-Hellman key exchange protocol is vulnerable to a
"man-in-the-middle" attack, as explained in the textbook. Describe
this attack.
</OL>


</div></td></tr>
</table>

</body> </html>

