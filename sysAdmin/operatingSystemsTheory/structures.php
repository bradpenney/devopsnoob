<?php $title = 'Operating System Structures - Learn Operating System Theory - DevOpsNoob.com'; ?>
<?php include '../../includes/header.php'; ?>
<div class="jumbotron">
  <div class="container text-center">
	<h1>Learn Operating Systems Theory @ DevOpsNoob.com</h1>
  </div>
</div>
<div class="container-fluid bg-3 text-center">
  <div class="row">
	  <div class="col-md-2">
	  </div>
	  <div class="col-md-8">
		  <ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
			  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>sysAdmin.php">Learn Systems Administration</a></li>
			  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>sysAdmin/operatingSystemsTheory.php">Learn Operating Systems Theory</a></li>
			  <li class="breadcrumb-item active">Operating System Structures</li>
		  </ol>
		  <article id="operatingSystemStructures" class="text-left">
					<h2 class="text-center">Operating Systems - Structures</h2>
					<p class="articleDate">April 6th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/UxCiuctkKYo?list=PLCwUSyNqAQUgkRAgqy3j4Srb2aAqni1P3" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a Computer Science lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 3: Operating System Structures.  Many thanks to Sean Barker (the lecturer) on his excellent work.
					</p>
					<h3>System Calls</h3>
					<p>
						The Operating System (OS) provides a programming interface to hardware services such as Input/Output (I/O) and the CPU.  This programming interface is typically written in a  high-level language (C, C++, etc).  The operating system is therefore mostly accessed by programs via a high-level Application Program Interface (API) rather than direct system call use.  The three most common operating system APIs are:
					</p>
					<ol>
						<li>Win32 API for Windows</li>
						<li>POSIX API for POSIX-based systems (UNIX, Linux, and MAC OS)</li>
						<li>Java API for the Java Virtual Machine</li>
					</ol>
					<p>
						Programming to an API is safer and more convenient for the programmer.  It also increases portability of the code.
					</p>
					<h3>System Call Implementation</h3>
					<p>
						There is usually a number associated with each system call.  The System-Call Interface maintains a table which is indexed according to these numbers.  The System-Call Interface invokes the  intended system call in the operating system's kernel and returns the status of the system call and any return values. The caller does not need to know about how the system call is implemented.
					</p>
					<p>
						One of the great advantages of programming to an API is that the programmer does not need to know about how the system call is implemented.  The programmer simply needs to obey APIs functions and understand what the operating system will do as a result.  Most details of the operating system interface are hidden from the programmer by the API.  The API is managed by a run-time support library (a set of functions built into libraries included with the compiler).
					</p>
					<h3>System Call Parameter Passing</h3>
					<p>
						Often, more information is required than the simple identity of the desired system call.  This information is usually passed to the system call as a parameter.  The exact type and amount of information varies according to the operating system's API and the system call being employed.
					</p>
					<p>
						There are three (3) general methods used to pass parameters to the operating system:
					</p>
					<ol>
						<li>Pass the parameters in registers (simplest).  This works well, but in some cases, there may be more parameters to be passed than registers available.</li>
						<li>Parameters can be stored in a block (or a table) in memory, and the address of the block is passed as a parameter in a register.  This is the approach that is taken by Linux and Solaris.  A layered operating system is not used in practice, it has several flaws which render it mostly theoretical; in practice a layered OS would not be efficient, it could run out of physical memory, and have other problems.s.</li>
						<li>Parameters can be placed, or <em>pushed</em>, onto the <em>stack</em> by the program and <em>popped</em> off the stack by the operating system.</li>
					</ol>
					<p>
						It should be noted that the second and third methods, block and stack, do not limit the number or length of parameters being passed.
					</p>
					<h3>Basic Operating System Structures</h3>
					<p>
						The <em>kernel</em> is the protected part of the operating system that runs in kernel mode and protects the critical operating system data structures and device registers from user programs.
					</p>
					<p>
						There is an ongoing debate about what functionality belongs in the kernel.  For example, is a web-browswer part of the kernel or a user program?  The general consensus is that a web-browser is a user program, but Microsoft includes Internet Edge (or Internet Explorer) as part of its Windows operating systems.
					</p>
					<h3>Layered Operating System Design</h3>
					<p>
						Another approach to operating system design is the layered approach.  Each layer of the kernel uses the layer below it to build the overall structure, with each layer providing new functionality to the kernel.  Central to the design of this approach is that each layer will only talk to the layer above and below it.                      <br />
					</p>
					<p>
						The advantages of the layered approach are that it is simple and modular - there are only two (2) possible communications points.  This makes it easier to debug for the designer, as there is only one layer to debug at a time.
					</p>
					<p>
						The disadvantages of the layered operating system design is that it causes extra overhead because the layers are forced to convey messages to each other whenever the two communicating are not next to one another (pure overhead).  A layered operating system is only theoretical, in practice it is highly unlikely to be efficient.  For example, it is likely that a layered operating system would run out of physical memory. It is worth noting that a layered operating system is very similar to the design of the network stack.
					</p>
					<h3>Microkernel</h3>
					<p>
						A microkernel is an operating system design that concentrates on having the smallest kernel possible.  It provides communication (message passing) and other basic functionality only.  Other operating system functionality is implemented as user-space processes.  A microkernel may be more resilient to crashes because most of the system processes are outside of microkernel.  It could also be more secure than other designs.
					</p>
					<p>
						Communication can be a problem because each system process has to send messages through the kernel to other system processes.  This causes very high processing overhead, making it a microkernel operating system design inefficient.
					</p>
					<h3>Microkernel Features</h3>
					<p>
						The goal of a microkernel is to minimize its size by implementing as much of the operating system in user-level processes as possible.  The advantages of this strategy include	better relia					</p>
					<p>
						A layered operating system is not used in practice, it has several flaws which render it mostly theoretical; in practice a layered OS would not be efficient, it could run out of physical memory, and have other problems.bility, easier extension, and customization. Unfortunately, microkernels suffer mediocre performance. The first microkernel was Hydra (Carnegie Mellon University [CMU] 1970). More modern operating systems that use a microkernel include Chorus (France) and Mach (CMU).
					</p>
					<h3>Modular Operating System Design</h3>
					<p>
						Most modern operating systems implement kernel modules in their structure. Modules take advantage of object-oriented principles.  Each core component is in a separate module. Each module talks to other modules over known interfaces.  Modules are loaded into the kernel as they are needed. Overall, the modular approach has most of the advantages of a layered structure but is more flexible.
					</p>
					<h3>Summary</h3>
					<p>
						Operating System designers are always asking themselves "How do we make the operating system more efficient, more reliable and more extensible?"
					</p>
					<p>
						The design and implementation of an operating system involves constant tradeoffs between <em>simplicity</em> and <em>performance</em>.  As a general rule, designers strive for simplicity except when there is a strong reason to make a particular component more complicated in order to achieve acceptable performance.
					</p>
				</article>
        <br />
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
