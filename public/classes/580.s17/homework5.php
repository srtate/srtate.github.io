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

<p>A <a href="homework5.pdf">printable PDF</a> is available.</p>

<center><h1>Homework 5 &ndash; Due Tuesday, February 21</h1></center>

<OL><LI>Recall that cipher "modes" are ways of using block ciphers when the
input is larger than a single block.  Describe ECB mode and CBC mode
encryption ("describe" can mean just giving either a clear diagram
or formulas).  What is the advantage of CBC mode over ECB mode?  Is
there any advantage of ECB over CBC?
<p><LI>You are developing an application in which you have to regularly send
packets that are 36 bytes (288 bits) long using AES.  If you use CBC
mode, how much data do you need to transmit?  Be sure to explain the
reasoning behind your answer (show your work).
<p><LI>Joe Crypto always loved playing the "guess which hand is holding a
prize" game, so proposes the following guessing game: You can give
him two files, containing whatever data you want them to contain, but
with the restriction that they must be the same length. He will then
pick one of them, encrypt it with a secret key, and then give you the
resulting ciphertext. You have to guess which file he encrypted!  Joe's crypto
knowledge isn't so great, however, and he uses AES in ECB mode. How
can you play this game so that you can win? Be very specific,
including a clear explanation of why your strategy allows you to
win. The number of bonus points you get depends as much on the clarity
of your description as it does the technical quality of your strategy.
(<I>Hint: What is the main weakness of ECB mode, and how can you create a
file that displays this weakness?</I>)
</OL>


</div></td></tr>
</table>

</body> </html>

