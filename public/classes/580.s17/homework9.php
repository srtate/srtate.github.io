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

<p>A <a href="homework9.pdf">printable PDF</a> is available.</p>

<center><h1>Homework 9 &ndash; Due Tuesday, April 4</h1></center>

<OL><LI>Consider a cryptographic hash function
<I>f:{0,1}<sup>n</sup> -&gt; {0,1}<sup>h</sup></I> that satisfies the preimage
resistance property and second preimage resistance property, even
though it only works on fixed-size input blocks.  Joe needs a function
like this, but it has to work on <EM>pairs</EM> of <I>n</I>-bit inputs, so he
defines <I>g:{0,1}<sup>n</sup>&#215;{0,1}<sup>n</sup> -&gt; {0,1}<sup>h</sup></I> as
<BLOCKQUOTE><I>  g(x,y) = f(x XOR y) . </I></BLOCKQUOTE>
Is this function preimage resistant?  Does it satisfy the second
preimage resistance property?  Justify both answers!
<p><LI>Prove that a hash function that satisfies the collision resistance
property also satisfies the second preimage resistance
property. (<I>Hint: Write the statement you're trying to prove as
  an implication, and then prove the logical contrapositive.</I>)
<p><LI>Does a hash function that has second preimage resistance also
satisfy the preimage resistance property?
To answer this question, consider a hash function <I>H(x)</I> that
produces <I>k</I>-bit hash codes, and satisfies all three of the hash
function security
properties. Now construct a hash function <I>H'(x)</I> that produces
<I>(k+1)</I>-bit hash codes as follows: If <I>x</I> is exactly <I>k</I> bits long,
then output <I>0||x</I> (a single 0 bit followed by <I>x</I>); otherwise output
<I>1||H(x)</I> (a single 1 bit followed by the <I>H</I>-hash code of <I>x</I>). Is
<I>H'(x)</I> second preimage resistant? Is it preimage resistant? Justify your
answers!
</OL>



</div></td></tr>
</table>

</body> </html>

