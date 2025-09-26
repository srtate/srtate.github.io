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

<p>A <a href="homework2.pdf">printable PDF</a> is available.</p>

<center><h1>Homework 2 &ndash; Due Tuesday, January 31</h1></center>

<OL><LI>What is the closest power of two to
<UL><LI>(a) 16 million
<LI>(b) 4 billion
<LI>(c) number of nanoseconds in one week
<LI>(d) number of seconds in 8 years
</UL>
<p><LI>This is the "extreme, over-the-top, super-secure keysize security"
estimation problem. Consider if you could convert <EM>an entire
  planet</EM> into one big computer (suggestion: read <EM>The
  Hitchhiker's Guide to the Galaxy</EM> if you haven't) -- look in the
table of large numbers and find how many atoms are in the Earth, and
assume that you can make a logic gate out of every 8 atoms in the
planet. Next, assume that you can clock those gates at the fastest
imaginable speed, the frequency of ultraviolet light, which would be a
1,000 THz computer, and testing a key takes at least 1000 Boolean
operations. Finally, a "super-secure" cipher is one that cannot be
brute-forced in under 128 years. What keysize would need to be used so
that a cipher is "super-secure" against attacks using this
ultra-fast full-planet computer? You can (and should!) estimate all
values as powers of two when you solve this problem.
<p><LI>You have found out that a bank sends money transfer messages encrypted
with a one-time pad using XOR on bytes. You know that if you transfer
$1000 from branch A to branch B, branch A encrypts and sends a message
that says "Add 1000 dollars to Steve's balance." Explain, with as
much detail as you can, how you can intercept and tamper with this
message so that 9,999 dollars is added to my account instead of 1,000
dollars.

</OL>


</div></td></tr>
</table>

</body> </html>

