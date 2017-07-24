<?php $title = 'Threads - Learn Operating System Theory - DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">Threads</li>
		  </ol>
				<article id="threads" class="text-left">
					<h2 class="text-center">Operating Systems - Threads</h2>
					<p class="articleDate">April 18th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/KhjqKZr3fdM" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a CS lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 6: Threads.  Many thanks to Sean Barker (the lecturer) on his excellent work.  Note: the beginning of this lecture is a continuation of the previous lecture, skip to 28:00 to see where Sean begins to discuss threads.
					</p>
					<h3>What is A Thread?</h3>
					<p>
						Threads, threading and multi-threaded are terms that come up often in computer programming.  Marketers have capitalized on the exotic-sounding nature of "multithreading" to sell computers and programs - although most of the general population don't understand what threads are!
					</p>
					<p>
						A thread is the smallest possible segment of sequenced instructions that can be independently managed by a CPU scheduler.  In most operating systems, a thread is a component of a process.  The major advantage of threads is that multiple threads can freely share memory space.  This means that threads give the program parallelism - if the program has multiple threads, each of those threads could run independently on multiple CPU cores, making the program exponentially faster.
					</p>
					<h3>Processes vs Threads</h3>
					<p>
						Threads and processes are different but similar.  A process defines the address space, text, resources, and so on needed to complete some unit of work for a computer complete.  A thread defines a single sequential execution stream within a process.  So a thread can be thought of as a unit within a process (assuming that the programmer has designated threads). There can be many threads within a process, and many processes within a computer.  Threads are bound to a single process and cannot go outside the process. Within each process, the address space is shared and no system calls are required to cooperate amongst threads.  This is much more simple and efficient than message passing or shared memory among processes (<a href="https://intro2operatingsystems.wordpress.com/2016/04/07/operating-systems-process-management/">cooperating processes discussion</a>).
					</p>
					<p>
						All modern operating systems support multithreading.  This means that all modern OS's can support one or many address spaces, with one or many threads per address space.  Even Windows 95 supported multithreading!
					<p>
					<h3>Kernel Threads</h3>
					<p>
						Designers of an OS create threads within the kernel, also known as <em>lightweight processes</em>.  The operating system manages and schedules the threads separately, resulting in very fast computation (the same types of scheduling algorithms can be used for threads as processes).   Switching between kernel threads of the same process requires a smaller context switch than if the OS were switching between process.   This is because only the value of the registers, program counter, and stack pointer must be changed, the memory management does not need changing because the threads share address space.  For kernel processes, the more threads it creates, the more time is allocated to it by the CPU scheduling algorithm.
					</p>
					<h3>User-Level Threads</h3>
					<p>
						Unlike kernel threads, an OS does not actually know about threads that reside within the user level.  The OS only sees the process, not the thread(s) within it.  Therefore, the OS schedules the process, but not the threads within the process.  Programmers use a <em>thread library </em>to manage threads (create and delete them, synchronize them, and schedule them).
					</p>
					<h3>User-Level Threads: Advantages</h3>
					<p>
						Within the user level, there is no context-switch involved when switching threads because all the threads are sharing the resources of the process.  This makes user-level thread scheduling more flexible.  There are many ways in this flexibility could be used by the programmer.  Examples include:
					</p>
					<ol>
						<li>User-level code can define a problem which is dependant on thread scheduling policy</li>
						<li>Each process might use a different scheduling algorithm for its own threads.</li>
						<li>A thread can voluntarily give up the processor by telling the scheduler it will yield to other threads</li>
					</ol>
					<p>
						Remember, user-level threads do not require system-calls to create them or context switches to move between them.  The result of this is that user-level threads are typically much faster than kernel threads
					</p>
					<h3>User-Level Threads: Disadvantages</h3>
					<p>
						Predictably, there are also some disadvantages of user-level threading as well.  The first problem is that there is no true parallelism with user-level threads. Multiple threads within the same process do not access separate cores simultaneously (concurrently), because sees only the process, not the individual threads.
					</p>
					<p>
						Further, the OS may make poor scheduling decisions due to its lack of knowledge of the user-level threads. For example,it could run a process that has only idle threads.  Or, if a user-level thread is waiting for I/O, the entire process will wait.  The way to solve this problem is communication between the kernel and the user-level thread manager.
					</p>
					<h3>Thread Libraries</h3>
					<p>
						Programmers most commonly take advantage of multithreading by using a thread library.  Thread libraries provide programmers with an API for creating and managing threads.  Thread libraries can be found only within user space, or they can be kernel-level libraries that are supported by the OS.
					</p>
					<h3>Thread Library: Pthreads</h3>
					<p>
						Pthreads may be provided either as user-level or kernel-level.  Pthreads is the POSIX standard (IEEE 1003.1c) API for thread creation and synchronization, it is common in UNIX-based operating systems (Solaris, Linux, MAC OS X).  Pthreads specifies how threads should be implemented within a program. WIN32 Threads is very similar to Pthreads, but for Windows (functionality is similar).
					</p>
					<h4>Java Threads</h4>
					<p>
						In Java, threads are managed by the Java Virtual Machine (JVM).  The JVM typically implements the threads model that is provided by the underlying OS.  In Java, threads may be created by extending the Thread class, or by implementing the Runnable interface.
					</p>
					<h3>Summary</h3>
					<p>
						A thread is a single execution stream within a process.  Switching between user-level threads is faster than between kernel threads since context switch is not required. User-level threads may result in the kernel making poor scheduling decisions, resulting in slower process execution than if kernel threads were used.
					</p>
					<h3>Further Resources</h3>
					<p>
						<a href="http://www.cs.iit.edu/~cs561/cs450/ChilkuriDineshThreads/dinesh's%20files/User%20and%20Kernel%20Level%20Threads.html">User and Kernel Level Threads</a>
					</p>
				</article>
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
