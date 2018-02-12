<?php $title = 'CPU Scheduling - Learn Operating System Theory - DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">CPU Scheduling</li>
		  </ol>
				<article id="cpuScheduling" class="text-left">
					<h2 class="text-center">Operating Systems - CPU Scheduling</h2>
					<p class="articleDate">April 12th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/Q_tycyhNkgA" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a CS lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 5: CPU Scheduling.  Many thanks to Sean Barker (the lecturer) on his excellent work.
					</p>
					<h3>Scheduling Processes</h3>
					<p>
						Multiprogramming has come to be a given in modern computing.  The idea that you can open more than one program at a time (say a word processor, calculator, and web browser) is built-in to the way we see our computers.  The modern OS creates this environment by running more than one process at a time. Running more than one process at a time enables the OS to increase system utilization and throughput by overlapping I/O and CPU activities.
					</p>
					<p>
						All processes reside with a <strong>Proces Execution State</strong>.  This is the stage in which the processes find themselves within the CPU.  Processes can be ready, waiting, running, etc.  Each of these is a state, and a list of each process in each stae is kept by the computer.
					</p>
					<p>
						There are two approaches to process scehduling: long-term and short-term.  Long term is used primarily by computers that are completing batch proceses such as servers and server clusters.  It is rarely used by individual PCs.  The idea of long-term scheduling is to carefully select a balance of processes, some of which will be I/O-intensive (I/O bound) and some of which will be CPU-intensive (CPU-bound), thereby maximizing throughput.  The longer selection process uses up CPU-cycles, but is beneficial in heavy-duty computing.
					</p>
					<p>
						Short-term scheduling is the procedure generally used by PCs, and it does not spend a lot of time selecting jobs, rather follows a scheduling algorithm which minimizes selection time and maximizes CPU usage.
					</p>
					<p>
						The factors that all scheduling algorithm must be designed around include:
					</p>
					<ul>
						<li>Policy goals</li>
						<li>Policy options</li>
						<li>Implementation considerations</li>
					</ul>
					<h3>Short-Term Scheduling</h3>
					<p>
						The scheduler is run by the kernel thousands of times per minute (sometimes thousands of times per second). The kernel runs the scheduler (at a minimum) when:
					</p>
					<ol>
						<li>A process switches from running to waiting;</li>
						<li>An interrupt occurs; or</li>
						<li>A process is created or terminated.</li>
					</ol>
					<p>
						There are two categories of schedulers - non-preemptive and preemptive.  A non-preemptive scheduler will not interrupt a process unless one the three critieria above are fulfilled.  This means that a running process can usurp the CPU time until it voluteers control back.  A preemptive system will interrupt a process, generally through the use of a timer.  This ensures that a process does not take over the CPU indefinitely.
					</p>
					<h3>Criteria for Comparing Scheduling Algorithms</h3>
					<p>
						There are many different scheduling algorithms available to OS designers.  When trying to determine which scheduling algorithm is best, the following critieria are easily measured:
					</p>
					<ol>
						<li><strong>CPU Utilization:</strong>the percentage of time that the CPU is busy</li>
						<li><strong>Throughput:</strong> the number of processes completed in a unit of time</li>
						<li><strong>Turnaround time:</strong> the length of time it takes to run a process from initialization to termination, including all the waiting time</li>
						<li><strong>Waiting Time:</strong>the total amount of time that a process is in ready queue</li>
						<li><strong>Response Time:</strong> the time between when a process is ready to run and it's next I/O request</li>
					</ol>
					<h3>Scheduling Policies</h3>
					<p>
						It would be ideal if the CPU scheduling algorithm could optimize all of the above criteria at the same time.  However, OS designers have yet to discover a scheduling algorithm that can do this.
					</p>
					<p>
						As a result, OS designers comprimise and chose an algorithm which will best satisfy a paticular policy.  For example:
					</p>
					<ul>
						<li>Minimize average response time - provide output to the user as quickly as possible and process their input as soon as it is received</li>
						<li>Minimize variance of response time - in interactive systems, predictability may be more important than a low average with a high variance</li>
						<li>Maximize throughput (two factors)
					<ul>
						<li>Minimize overhead (OS overhead, context switching)</li>
						<li>Efficient use of system resources (CPU, I/O devices)</li>
					</ul>
					</li>
						<li>Minimize waiting time - give each process the same amount of time on the processor.  This might actually increase average response time</li>
					</ul>
					<h3>Simplifying Assumptions</h3>
					<p>
						Process scheduling is a complex topic.  In the introductory discussion that follows, we're going to rule out some factors that complicate it even more in real life.  For the purposes of this discussion, we're going to assume that there is one process per user, that there is only one thread per process, that processes are independent of each other and that context-switches are instantaneous (no time expenditure).  These criteria simplify the real-world challenges of OS design but provide an idea of how complex the subject is.
					</p>
					<p>
						Researchers of OS desgin developed the schduling algorithms we're going to discuss in the 1970s, and as computer architeture and OS design has progressed, it has become more and more difficult to test the algorithms without severely relaxing these assumptions.
					</p>
					<h3>Scheduling Algorithms: A Snapshot</h3>
					<p>
						We're going to have alook at five (5) CPU scheduling algorithms:
					</p>
					<ol>
						<li><strong>FCFS:</strong> First Come, First Served</li>
						<li><strong>Round Robin:</strong> Use a time slice and preemption to alternate jobs</li>
						<li><strong>SJF:</strong> Shortest Job First</li>
						<li><strong>Multilevel Feedback Queues:</strong> Round robin on each priority queue</li>
						<li><strong>Lottery Scheduling:</strong> jobs get tickets and scheduler randomly picks a winning ticket</li>
					</ol>
					<h3>Scheduling Policies: FCFS (First Come, First Served)</h3>
					<p>
						This most basic scheduiling algorithm is also known as FIFO (First-In-First-Out). Basically, jobs will be executed by the CPU in the order in whch they arrive in the ready state queue.  In early FCFS schedulers, the process did not give back control over  the CPU even when it was sending data to or waiting for data from an I/O device.  More modern FCFS schedulers will run when a processes is waiting for I/O.
					</p>
					<h3>FCFS: Advantages and Disadvantages</h3>
					<p>
						The major advantage of FCFS is that is is a very simple algorithm that requires virtually no CPU time to execute.  However, systems running and FCFS scheduling algorithm experience highly variable wait times, as short jobs may have to wait for longer jobs to complete.  Further, the random mixture of I/O-bound and CPU-bound processes can lead to I/O processes waiting (idling) while CPU-bound processs take a (realitively) long time to complete.
					</p>
					<h3>Round Robin Scheduling</h3>
					<p>
						Round Robin scheduling is a little more advaced than FCFS.  The basic principle is that each process is scheduled in the order in which they arrive, but are only alloted a specific amount of CPU time, known as a <em>time slice</em>.  If the time slice expires and the process is not completed, the process gets interrupted (preempted) and must go to the back of the ready state queue in order to await its next turn.  If the process completes within the time slice, it is terminated, that time slice expires and the next process starts its time slice.
					</p>
					<p>
						Selecting an optimal time slice can be complicated.  If the time slice is too large, then the wait time wil suffer and the scheduler becomes, in essence, FCFS.  IF the time slice is too short, then throughput will suffer because the computer will spend a large amount of its time swtiching between processes (context-switching) and not getting usfely CPU tasks done.  Most OS designers have cound that the ideal time slice is to find the spot where context-switching takes up about 1% of CPU time.  Modern OSs have a typical time slice of 10-100 milliseconds, while context swithces take between 0.1-1 millisecond.
					</p>
					<p>
						Round Robin scheduling is fair because each process gets a chance to be processed by the CPU.  The average waitng time, however, can be very bad.
					</p>
					<h3>SJF/SRTF: Shortest Job First / Shortest Remaining Time First</h3>
					<p>
						This scheduling algorithm promotes the process which will take the shortest (expected) amount of CPU time to the beginning of the ready state queue.  Whichever process has the lowest anticipated time until completion (or an I/O request) will be the next to run.
					</p>
					<p>
						In a non-preemptive kernel, this is known as SJF, shortest-job first. This means that all processes waiting in the ready state queue are evaluated, and whichever is deemed to be the shortest will move to the front of the line.
					</p>
					<p>
						In a preemptive kernel this algorithm is known as SRTF, shortest remaining time first.  If a shorter process comes into the ready state queue than the one currently running, then the kernel will preempt the process that is running and run the shorter process first.
					</p>
					<p>
						SJF/SRTF provably optimizes minimum average wait times.  This can result in a faster overall scheduler, certainly faster than FCFS or Round Robin.  However, there are several drawbacks.  The most obvious is that there is no way to guarantee accurate predictions of how long a process will take until completion.  Second, with SJF/SRTF, I/O processes tend to get priority over CPU-bound processes, making it a little unfair.  In fact, long-running CPU-bound processes can <em>starve </em>(never get the CPU time they need to complete).
					</p>
					<h3>Multilevel Feedback Queues (MLFQ)</h3>
					<p>
						Mutilevel Feedback Queues (MLFQ) is a much more advanced scheduling algorithm.  It uses past behaviour to predict the future and assign priority to processes.  This feature allows it to overcome the most important drawback of SJF/SRTF.  The MLFQ scheduler knows that if a process is I/O-bound in the past, it is also likely to be I/O bound in the future, and the same for CPU-bound processes. To exploit this behaviour, the MLFQ scheduler favors jobs that have used the least amount of CPU time in the past, thus approximating the approach of SJF/SRTF.
					</p>
					<h3>Approximating SJF: Multilevel Feedback Queues</h3>
					<p>
						MLFQ organize processes into several queues, each with a different priority level (ie. highest, high, medium, low). The scheduler cycles through these queues, starting at the higest priority level, using an approach similar to Round Robin within each priority queue.  Of course, the highest priority queue recieves more cycles than the low priority queue.
					</p>
					<p>
						Once the processes at the highest priority levels finish, those at the next highest priority level begin to run.  Like SJF/SRTF, MLFQs can starve processes at lower levels.  One way to combat this is to increase the time slice exponentially at lower priorities, allowing more time for CPU-bound processes to complete their work.
					</p>
					<h3>Adjusting Priorities in MLFQ</h3>
					<p>
						In MLFQ, processes are often assigned to different queus as they are executed.  All processes start in the highest priority queue, where the time slice is quite short.  If the process is executed but the time slice expres before it completes, it will drop one priority level.  If the process's time slice does not expire, it moves up a priority level (until it is at the highest).  In this way, CPU-bound processes drop to lower-priority quesues where the time slice is longer, and I/O-bound processes stay at high priority.
					</p>
					<h3>Improving Fairness with MLFQ</h3>
					<p>
						MLFQ improves on the scheduling model that SJF/SRTF offers by adding more fairness to the algorithm.  This is done by ensuring that even CPU-intensive jobs have a fraction of CPU time, even if shorter (higher priority) jobs are available.  In order to maximize fairness, there has to be an even distribution of processes in the queues.
					</p>
					<p>
						Another important strategy is to increase a process' relative priority as the process ages.  This means that the longer it is in any ready queue, it increases in priority, eventually moving up to the highest priority queue.  This avoids starvation of CPU-bound processes, but does degrade the average waiting time because jobs have a tendency to migrate to highest priority.
					</p>
					<p>
						Although not perfect, the MLFQ scheduling algorithm is among the best algorithms available and some form of it is in wide use among modern operating systems.
					</p>
					<h3>Lottery Scheduling</h3>
					<p>
						The lottery scheduling algorithm has a very different approach to scheduling processes.  It works exactly as it sounds, each process in the ready state queue is given some lottery tickets, and then the algorithm picks a winner based on a randomly generated number.  The winning process is awarded a time slice, in which the process may be complete or the time slice may expire before the process completes.  The winning process goes back into the ready queue, receives its tickets for the next lottery, and the cycle continues.
					</p>
					<p>
						Although each process will receive at least one (1) ticket per lottery, processes that are expected to be shorter will receive more than one ticket, thereby increasing the chance they'll be picked.  In this way, the lottery scheduler resembles SJF/SRTF, in that it gives priority to what it thinks will be shorter processes.  However, it is more fair that SJF/SRTF, because it does give each process a chance (albeit a small chance) to be selected for a time slice.  Starvation is therefore avoided in the lottery scheduler.
					</p>
					<p>
						The lottery scheduler degrades gracefully as the number of processes increases.  Adding or deleting processes affect all other proportionally, independent of the number of tickets the process has.
					</p>
					<p>
						A major drawback of the lottery scheduling algorithm is that it is inherently unpredictable.  Due to the random nature of the scheduler, there is no way for OS designers to know for sure what will happen in lottery scheduling, possibly producing undesirable results.  It is possible, for example, that one particular CPU-bound process could receive several time slices in a row, thereby allowing other I/O processes to languish without CPU time.  For this reason, lottery scheduling, while provably viable, is not used much in modern OS design.
					</p>
					<h3>Summary</h3>
					<p>
						All modern OSs are multi-programming compatible.  We've covered five (5) CPU scheduling algorithms that an OS could use to determine the order in which processes are executed within the system.  These included:
					</p>
					<ol>
						<li><strong>FCFS:</strong> not fair, and average waiting time is poor;</li>
						<li><strong>Round Robin:</strong> fair, but average waiting time is poor;</li>
						<li><strong>SJF/SRTF:</strong> Not fair, but average waiting time is minimized assuming we can accurately predict the length of the next CPU burst.  Starvation is possible;</li>
						<li><strong>Multilevel Feedback Queuing:</strong> An improvement of SJF/SRTF;</li>
						<li><strong>Lottery Scheduling:</strong> Fairer with low average waiting time, but less predictable.</li>
					</ol>
					<p>
						It is important to remember that we have not factored context switching into this discussion, which is actually an important factor in real-world models.
					</p>
				</article>
        <br />
        <?php include '../../includes/disqus.php'; ?>
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
