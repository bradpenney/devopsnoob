<?php $title = 'Process Management - Learn Operating System Theory - DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">Process Management</li>
		  </ol>
				<article id="processManagement" class="text-left">
					<h2 class="text-center">Operating Systems - Process Management</h2>
					<p class="articleDate">April 7th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/SfG_BefeGT4" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a Computer Science lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 4: Process Management.  Many thanks to Sean Barker (the lecturer) on his excellent work.
					</p>
					<h3>What is in a Process?</h3>
					<p>
						A process is the unit of execution (ie. of a program) in a computer. It is possible for several processes to run within the same program, each having its own distinct process with its own <em>state</em> (ie. each tab within the Chrome web browser runs its own process).  Processes execute sequentially, one instruction at a time.
					</p>
					<p>
						A process state consists of at least:
					</p>
					<ul>
						<li>The code for the running system;</li>
						<li>The static data for the running program;</li>
						<li>Space for dynamic data (the heap), and the heap pointer (HP);</li>
						<li>The Program Counter (PC), indicating next instruction;</li>
						<li>An execution stack with the program’s call chain (the stack), the stack pointer (SP);</li>
						<li>Values of CPU registers;</li>
						<li>A set of operating system resources in use (ie. open files);</li>
						<li>Process execution state (ready, running, etc).</li>
					</ul>
					<h3>Process State Execution</h3>
					<p>
						The execution state of a process indicates what it is doing.  There are five (5) different execution states which a process may be in:
					</p>
					<ol>
						<li><strong>New</strong>: the operating system is setting up a new process state</li>
						<li><strong>Running</strong>: executing instructions on the CPU</li>
						<li><strong>Ready</strong>: ready to run, but waiting on the CPU</li>
						<li><strong>Waiting</strong>: waiting for an event to complete</li>
						<li><strong>Terminated</strong>: the operating sytsem is destroying the process</li>
					</ol>
					<p>
						As the program executes, its process moves from state to state as a result of the program actions (ie. system calls), operating system actions (scheduling), and external actions (interrupts).  At any given moment, each process is in one of the five states.
					</p>
					<h3>Process Data Structures</h3>
					<p>
						The <strong>Process Control Block (PCB)</strong> is an operating system data structure that keeps track of each process.  The PCB stores the execution state and location of each process as it moves through the processing cycle. The operating system allocates a new PCB for each process as the process is created, and places the PCB on a state queue.  Once the process terminates, the operating system deallocates the PCB and it no longer exists.
					</p>
					<p>
						At a minimum, a typical Process Control Block contains:
					</p>
					<ul>
						<li>Process state (running, waiting, etc).</li>
						<li>Process number</li>
						<li>Program Counter</li>
						<li>Stack Pointer</li>
						<li>General Purpose Registers</li>
						<li>Memory Management Information</li>
						<li>Username of owner</li>
						<li>List of open files</li>
						<li>Queue pointers for state queues</li>
						<li>Scheduling information (ie. priority)</li>
						<li>I/O status</li>
					</ul>
					<h3>Process State Queues</h3>
					<p>
						There are always multiple PCBs in a modern operating system (because there are always multiple processes!).  The operating system places these PCBs in <em>state queues</em> &#8210; a list of the processes in each execution state (ready, waiting, etc).  All the processes in the same execution state will have their PCBs in the same queue.  If the execution state changes (for example, when the process is worked on the by the CPU), it is removed from the current queue and placed in the new, appropriate queue, depending on its new execution state.
					</p>
					<p>
						The operating system usually has different policies to manage each queue in a slightly different way (hence the need for various queues!).  Also, each input/output (I/O) device will have its own unique queue.
					</p>
					<h3 id="contextSwitch">Context Switch</h3>
					<p>
						In modern operating systems, it is very rare for a process to begin running and continue until completion without interruption.  Rather, processes start and stop depending on factors such as input/output (I/O) calls, interrupts, timing out on the CPU and many others.  Starting and stopping process called a <em>context switch</em>, and is a relatively (time) expensive operation because no useful work is being done by the computer during a context switch.
					</p>
					<p>
						The operating system starts executing a ready process by loading hardware registers from its PCB. While a process is running, the CPU modifies the Program Counter (PC), Stack Pointer (SP), registers, etc.  When the operating system stops a process, it saves the current values of the registers into its PCB.
					</p>
					<p>
						How often context switches occur depends on a multitude of factors. Time sharing systems with preemptive kernels range from 100 to 1000 context switches a second.  The (time) cost of a context switch and the time between switches are closely related - operating system designers aim to have context switches take no more than 1&#37; of the time which a CPU uses.
					</p>
					<h3>Creating a Process</h3>
					<p>
						When a computer is started, the Read-Only Memory (ROM) will find where the operating system is located and start the first process.  After that, the first process creates other processes to do work.  A process that creates another is called the <em>parent</em> and the new process is called the <em>child</em>.  A parent defines (or donates) resources and privileges to its children. A parent can either pause and wait for the child to complete, or continue its work in parallel to the child.  The first process is the only one that does not have a parent.
					</p>
					<p>
						In Unix, the <em>fork</em> system call is used to create child processes. <em>Fork()</em> copies variables and registers from the parent to the child.  At this point, the only difference between the child and the parent is the value returned by the <em>fork()</em>.  In the parent process, <em>fork()</em> returns the process ID of the child, while the child process returns a value of 0.  At this point, the two processes diverge and perform separate tasks.  The parent can wait for the child to terminate by executing a <em>wait</em> system call or continue execution.
					</p>
					<p>
						The child often starts a new a different program within itself, via a call to <em>exec</em> system call.
					</p>
					<h3>Common Unix Process Methods</h3>
					<ul>
						<li><code>fork()</code> - forks a new child process that is a copy of the parent</li>
						<li><code>execlp()</code> - replaces the program of the current process with the named program</li>
						<li><code>sleep()</code> - suspends execution of the process for at least the specified time</li>
						<li><code>waitpid()</code> - waits for the named process to finish execution</li>
						<li><code>gets()</code> - reads a line from a file</li>
					</ul>
					<h3>Process Termination</h3>
					<p>
						Once a process terminates, the operating system reclaims all resources assigned to the process.  In Unix, a process can terminate itself using the <em>exit</em> system call and a parent process can terminate a child process using the <em>kill</em> system call.
					</p>
					<h3>Cooperating Processes</h3>
					<p>
						It is possible for processes to cooperate with each other.  Cooperating processes will work with each other to accomplish a single task. Cooperating processes can improve performance by overlapping activities or performing work in parallel.  This can enable an application to achieve a better program structure, because a set of cooperating processes may be smaller than a single monolithic program and can very easily share information between tasks.  Some computer scientists believe that distributed and parallel processing is the wave of the future.  The challenge of programming these types of programs is to cooperate and coordinate between separate processes.
					</p>
					<h3>Cooperating Processes: Producers and Consumers</h3>
					<p>
						A classic example of cooperating processes are those of producers and consumers. A producer process and a consumer process will share a buffer. The producers produce data and the consumer reads that data.  Producers are often thought of as master threads, and consumers are often thought of as a worker threads.  Producers and consumers communicate using <em>message passing</em> or <em>shared memory</em>.
					</p>
					<h3>Message Passing</h3>
					<p>
						Distributed systems typically communicate using message passing.  Each process names the other process to which it would like to pass messages. Usually, the consumer is assumed to have an infinite buffer size because a bounded (limited size) buffer would require extra overhead. The operating system keeps track of messages (copies them, notifies receiving process, etc).
					</p>
					<h3>Communication Using Shared Memory</h3>
					<p>
						Another form of cooperating between processes involves the use of shared memory.  In this example, it is necessary to establish mapping between the processes’ address space to a named memory object that may be shared across processes. In Unix, the <code>mmap(...)</code> system call performs this function. It is possible to fork processes that need to share the data structure.
					</p>
					<h3>Process Management: Summary</h3>
					<p>
						A process is the unit of execution in a computer. Processes are represented as Process Control Blocks in the operating system. PCBs contain process state, scheduling, and memory management information for each process.  A process is either <em>new</em>, <em>ready</em>, <em>waiting</em>, <em>running</em>, or <em>terminated</em>.  On a uniprocessor (old), there is at most one process <em>running</em> at a time.  Modern multicore computers will <em>run</em> at least one process per core (quad-core is most common in 2016) but often are handling hundreds of processes in various states.  The program currently executing on the CPU is changed by performing a context switch.  Processes communicate either with message passing or shared memory.
					</p>
				</article>
        <br />
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
