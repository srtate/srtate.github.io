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
<div class="navcurrent">
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

<p>A <a href="syllabus.pdf">printable PDF</a> is available.</p>

<h1><center>CSC 580 Class Information and Syllabus</center></h1>

<P><P><P><B>Instructor:</B>
<A HREF="https://srtate.github.io">Stephen R. Tate (Steve)</A> <BR><B>Lectures:</B>  Tues/Thurs 9:30-10:45, Petty 227 <BR><B>Office:</B>  Petty 166 <BR><B>Office Hours:</B> Tues/Thurs 11:00-12:30, or by appointment<BR><B>Phone:</B>  336-256-xxxx [old number] <BR><B>E-mail:</B> 
<script type="text/javascript">var teststring = "utvcvgBwpei0gfw";for (i=0;i<teststring.length;i++) {document.write(String.fromCharCode(teststring.charCodeAt(i)-2));}</script><noscript type="text/javascript"><img src="/~srtate/pics/email.png" /></noscript><BR><B>Class Web Page:</B>
<A HREF="http://www.uncg.edu/cmp/faculty/srtate/580/"><CODE>http://www.uncg.edu/cmp/faculty/srtate/580/</CODE></A>
<P><P><B>Catalog Description (from the current catalog - being
rewritten, and included here just for reference):</B> Modern
development of cryptography and secure encryption protocols. Program
security and viruses. Operating system protection. Network and
distributed system security. Database security. Administering
security.
<P><P><B>Prerequisites:</B>
Grades of at least C (2.0) in CSC 330 and CSC 350.
<P><P><B>Student Learning Outcomes:</B> 
Upon successful completion, students will be able to
<UL><LI>describe basic cryptographic functionality, including symmetric
  ciphers, public key encryption, digital signatures, hash functions,
  and related concepts;  <LI>describe how basic cryptographic building blocks are combined to
  meet high-level security goals in protocols like SSL and IPsec;  <LI>identify specific security technologies that can improve aspects
  of a system design;  <LI>justify the use of particular technologies, settings, and
  parameters to meet specified security goals;  <LI>evaluate the security of systems that use cryptography and secure
  communication techniques;  <LI>discuss how security and privacy issues can impact system design;  <LI>(Graduate students) explain and critique current basic research
  in computer security and cryptography.
</UL>
<P><P><B>Textbook:</B>  William Stallings.  <A HREF="http://www.williamstallings.com/Cryptography/index.html"><I>Cryptography and Network
  Security: Principles and Practice (7th Edition)</I></A>.  Pearson/Prentice Hall, Upper Saddle River,
NJ, 2017.
<P><B>Other Reading:</B>  
<UL><LI>Required readings: Some topics will involve reading 
  supplemental materials, including instructor-written handouts and
  published materials. These materials will be handed out as printed
  material, or will be available electronically from the class web
  page.
<LI>Graduate students will be given copies of current research
  papers to read and critique -- these 
  will also be available on the class web page when possible.
</UL>
<P><B>Class Structure and Assignments:</B> The primary method of
instruction will be two 75-minute meetings per week that will consist
of regular quizzes, lecture, discussion, and problem-solving sessions.
The class structure is nontraditional, as described below.
<P><P><I>Written Homework Problems:</I> On most weeks, students will be
given approximately 3 written (non-programming) homework problems on
Thursday. These problems will be representative of the kinds of
written problems you would traditionally see on an exam -- the first
time you see the problem it might take some time and effort to figure
out how to solve the problem, but once you have mastered the material
and practiced you should be able to solve similar problems in around
10 minutes. These should be solved before the following Tuesday, when
solutions will be reviewed and discussed. These problems are not
graded, but are not optional! If you do not <EM>work out</EM> solutions
yourself (and study and practice), then it is unlikely that you will
be able to solve the quiz problems, which <EM>do</EM> count for a
significant part of your grade.
<P><P><I>Quizzes:</I> One week after each set of written problems are
assigned, class will begin with a quiz in which students will be given
one problem similar to the ones assigned the previous week as homework
problems. A typical problem will be designed to be solvable in 10
minutes, and students will be given 15 minutes, so time should not be
an issue. While these problems are based on the homework problems,
they will not be identical. If you <EM>understand</EM> the solutions to
the homework problems and have <EM>practice</EM> solving similar
problems, then you shouldn't have any problems with the
quizzes. However, if you do not work out solutions to the homework on
your own, thinking you can rely on the in-class solution discussion
(or other solutions you locate when studying), then you
probably will not do well. Since there will be a large number of these
quizzes (12-14), your two lowest grades will be dropped. There
will be no quizzes given at other times for any reason (make-up or
in-advance), and if you miss class on a particular day that will need
to be one of your dropped scores. 
<P><P><I>Semester-long Project:</I> The class includes an ongoing project
that will culminate in the production of a secure chat system, using
cryptography to meet the security goals. The project will be
implemented in Java, using the Java Cryptography Architecture
(JCA), which is standardized and available in both desktop Java
environments and in Android. We will focus on the information
management and communication components (and not the user-interface),
but ambitious students may want to experiment with user-interfaces on
different platforms. The project will be broken up into pieces that
will be assigned every 2-3 weeks, and the pieces may
include design and analysis of different components, general testing
of JCA features for possible inclusion, and implementation of
different features. After each design and analysis phase, we will
discuss various options in class and standardize a design that
everyone will use moving forward. Students may work together on the
project, in groups of up to three students, but <EM>must</EM> turn in
<EM>independently-written</EM> work, and must name the students they
collaborated with. If groups do not function well, the instructor
reserves the right to break up groups or disallow certain collaborations.
<P><P><I>Final Exam:</I> There will be a traditional final exam, oriented
around all of the homework problems that are assigned throughout the
semester. The final exam will be held at the university-scheduled day
and time: <B><I>Tuesday, May 9, 12:00pm - 3:00pm</I></B>.
<P><P><I>Graduate Students:</I> In addition to the work described above,
graduate students will be given three research papers
during the semester to read and report on with a 1-2 page written
summary and critique.  During the last 4-6 weeks of the semester,
graduate students will complete a project based on current research in
a security-related topic of their own choosing. The result could be
either a pure research focus, with a 10-15 page survey paper
summarizing research related to that topic, or it could be
implementation-based (including adding research-based advanced
capabilities to the class secure chat program) with a shorter (5-6
page) report.
<P><P><B>Evaluation and Grading:</B> Final grades will be calculated
based on the following weighting.
<BLOCKQUOTE><CENTER>
<TABLE><TR><TD COLSPAN="1" ALIGN="LEFT">

<U>Undergraduates</U> </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Project </TD><TD COLSPAN="1" ALIGN="RIGHT"> 25% </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Quizzes  </TD><TD COLSPAN="1" ALIGN="RIGHT"> 50% </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Final Exam </TD><TD COLSPAN="1" ALIGN="RIGHT"> 25%
</TD></TR></TABLE>

<TABLE><TR><TD COLSPAN="1" ALIGN="LEFT">

<U>Graduate students</U> </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Project </TD><TD COLSPAN="1" ALIGN="RIGHT"> 20% </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Quizzes </TD><TD COLSPAN="1" ALIGN="RIGHT"> 45% </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Final Exam </TD><TD COLSPAN="1" ALIGN="RIGHT"> 25% </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Research Readings/Project </TD><TD COLSPAN="1" ALIGN="RIGHT"> 10%
</TD></TR></TABLE>

</CENTER></BLOCKQUOTE>
<P><P><B>Attendance Policy and In-class Behavior:</B> Be a grown-up,
respect other students, and be responsible for your own
actions. That's it. If further interpretation or enforcement of these
principles is needed, the instructor has the final word.
<P><P><B>University Closings:</B>  If university facilities are closed due to flu
outbreak or other emergencies, it does not mean that classes are
canceled. In such an event, please check the class web page and
Canvas site for information about if and how the class will
proceed. 
<P><P><B>Academic Integrity:</B>   Students are expected to be familiar
with and abide by the UNCG Academic Integrity Policy, which is online
at 
<A HREF="http://academicintegrity.uncg.edu/"><CODE>http://academicintegrity.uncg.edu/</CODE></A>
Remember that while collaboration is allowed on project assignments,
submitted work should be independently written by each student. It is
also important that you clearly cite <EM>any</EM> source of material
other than the textbook or in-class discussions that influences your
solution. This includes any online videos, tutorials, or other sources
of information -- if it didn't come from your own head and your own
creativity, you need to give credit for where the ideas came from.
<BLOCKQUOTE><CENTER>
<B>List of topics</B><BR><I>Numbers after topics indicate approximate time, in class
  days</I><BR>(Detailed and updated schedule on class web page)
</CENTER></BLOCKQUOTE>
<BLOCKQUOTE><CENTER>
<TABLE><TR><TD COLSPAN="1" ALIGN="LEFT">

<B>Topic</B> </TD><TD COLSPAN="1" ALIGN="LEFT"> <B>Reading</B> </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Introduction and security overview (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> Chapter 1 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Math basics for cryptography (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> Sect 2.1-2.3</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Encryption basics (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> Sect 3.1, 3.2, and 3.5</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Traditional block ciphers - ideas/properties (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> 4.1, 4.2, 4.4</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Java Cryptography Architecture (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> Online Docs </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Advanced Encryption Standard -AES (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> Handouts </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Symmetric ciphers - block cipher modes (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> 7.1-7.7</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Random and pseudorandom numbers (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> 8.1-8.4, 8.6 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Security models and reasoning about security (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> Handouts</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Public key ideas, math, and RSA (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> 9.1, 2.4-2.6, 9.2 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Discrete logs and DL-based crypto (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> 2.8, 10.1-10.2 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Cryptographic hash functions (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> Chapter 11</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Message Authentication Codes (MACs) (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> Sections 12.1-12.5 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Authenticated encryption and hash-based PRNG (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> 12.7, 12.9</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Digital Signatures (1) </TD><TD COLSPAN="1" ALIGN="LEFT"> 13.1, 13.2, 13.4, 13.6 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Key Management and Certificates (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> 14.2-14.5 </TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
Transport layer security (2) </TD><TD COLSPAN="1" ALIGN="LEFT"> Chapter 17</TD></TR>
<TR><TD COLSPAN="1" ALIGN="LEFT">
</TD></TR></TABLE>

</CENTER></BLOCKQUOTE>
<P><P><B>ADA Statement:</B> UNCG seeks to comply fully with the Americans
with Disabilities Act (ADA).  Students requesting accommodations based
on a disability must be registered with the Office of Accessibility
Resources and Services located in 215 Elliott University Center: (336)
334-5440 (or <A HREF="http://oars.uncg.edu"><CODE>http://oars.uncg.edu</CODE></A>).
<P><P><B>Commercial note-taking services:</B> Selling class notes for
commercial gain or purchasing such class notes in this or any other
course at UNCG is a violation of the University's Copyright Policy and
of the Student Code of Conduct.  Sharing notes for studying purposes,
or borrowing notes to make up for absences, without commercial gain,
are not violations.

<p>&nbsp;</p>


</div></td></tr>
</table>

</body> </html>

