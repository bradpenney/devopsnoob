<?php $title = 'Memory Management - Learn Operating System Theory - DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">Memory Management</li>
		  </ol>
				<article id="memoryManagement" class="text-left">
					<h2 class="text-center">Operating Systems - Memory Management</h2>
					<p class="articleDate">May 6th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/lEG71DDLD9E" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a CS lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 11: Memory Management.  Many thanks to Sean Barker (the lecturer) on his excellent work.
					</p>
					<h3>Memory Management</h3>
					<p>
						A process is the unit of execution of a program in a computer.  With all modern operating systems, multiple processes run simultaneously - as of this writing there are 89 processes running on this computer!  This article will introduce how modern operating systems allows multiple processes to run at once within <em>main memory</em> (RAM).
					<h3>Background: Computer Architecture</h3>
					<p>
						First of all, all programs are stored on a storage device (a traditional hard drive, SSD or other storage) while not in use.  When a user attempts to open a program, the computer fetches the executable file from the disk and loads it into the RAM.  It isn't necessary for the entire program to load into memory before the program begins to execute, rather the operating system continues to load the program as it initiates.
					</p>
					<h3>Memory Management: Terminology</h3>
					<p>
						There are few terms that are necessary in order to discuss memory management:
					</p>
					<ul>
						<li><strong>Segment:</strong>  a chunk of memory assigned to a process</li>
						<li><strong>Physical Address:</strong>  a real address of the data stored in memory</li>
						<li><strong>Virtual Address:</strong> an address relative to the start of a process’ address space</li>
					</ul>
					<h3>Where do Memory Addresses Come From?</h3>
					<p>
						Programs generate instructions and data addresses in three different ways:
					</p>
					<ol>
						<li><strong>Compile Time:</strong> When the program is compiled, the compiler generates the exact physical location in memory for instructions and data addresses, starting from a position <i>k</i>.  In this scenario, the operating system doesn't need to do anything.  This method was only used in the early computer era and is never used in modern computing.</li>
						<li><strong>Load Time:</strong> When the program is compiled, the compiler generates instructions and data addresses, but instead of assigning them to a specific location, at load time the operating system determines the starting position in memory for the process.  Once the process loads, its position in memory is fixed.  While it is still possible, this method is not commonly used in modern computing.</li>
						<li><strong>Execution Time:</strong> When the program is compiled, the compiler generates instructions and data addresses but gives the operating system complete freedom to place it anywhere in memory.</li>
					</ol>
					<h3>Uniprogramming Operating Systems</h3>
					<p>
						Some of the earliest operating systems were "uniprogram" - only one program could run on the computer at once.  For example, in the disk operating system (DOS), which was used in the 1980s and early 1990s was only capable of running one program at a time.  In DOS, the highest memory addresses were reserved for the operating system and the lowest addresses were for whatever program was running.
					</p>
					<p>
						Instructions and data addresses could be assigned by the compiler during this era. Processes were always loaded starting at address zero (0).  The maximum address that the compiler could assign was the size of the RAM minus the amount of memory that the operating system (memory size - operating system size).
					</p>
					<p>
						The operating system was protected from the running process by checking the addresses being used by that process, making sure that the addresses don't interfere with the addresses it was using.
					</p>
					<h3>Multiprogramming Operating Systems</h3>
					<p>
						Multiprogramming was a huge step forward in operating system design.  In order to run multiple programs at once, several conditions have to be fulfilled:
					</p>
					<ol>
						<li><strong>Transparency</strong> - multiple processes have to coexist in memory.  In order to work properly, no process should be aware that the memory is shared with others.  Processes shouldn't care what portion of memory they are assigned to, only that there is enough memory for it to complete.</li>
						<li><strong>Safety</strong> - it should be impossible for processes to corrupt each other.  More importantly, processes should not be able to corrupt the operating system.</li>
						<li><strong>Efficiency</strong> - running multiple processes should not excessively degrade the system (at least not while running a reasonable number of processes).</li>
					</ol>
					<h3>Relocation</h3>
					<p>
						Operating systems can manage where each process is stored in memory using a technique called relocation.  The operating system is often stored in the highest memory addresses.  When the program compiles and executes, it starts with zero (0).  The maximum address is equal to the total memory size minus the operating system size.  The process is loaded and allocated a contiguous segment of memory.  The first (smallest) physical address of the process is the <em>base</em> address and the largest physical address the process can access is the <i>limit</i> address.  There are two methods of relocation: static and dynamic.
					<p>
					<h3>Static Relocation</h3>
					<p>
						The first method of relocation is known as <em>static relocation</em>.  In this process, the operating system adjusts the memory address of a process to reflect its starting position in memory. Once a process is assigned a starting position in memory, it executes within the space it has been allocated.  Once the static relocation process has completed, the operating system can no longer relocate the process until it terminates.
					</p>
					<h3>Dynamic Relocation</h3>
					<p>
						<em>Dynamic relocation</em> is the second (and more advanced) method of relocation.  In this method, hardware adds relocation register (base value ) to the virtual address generated by the compiler.  The relocation register allows translation to a physical memory address.  Hardware compares this memory address with the limit register (the highest value available in the allocated section - this memory address must be less than the limit).  If the memory address is higher than the limit, the processor takes an address trap and ignores the physical address.
					</p>
					<p>
						The advantages of dynamic relocation are numerous.  The first and most important advantage is that the operating system can easily move a process if necessary.  This leads to the second advantage: a process can grow over time (because it can easily be relocated to a larger memory block).  Dynamic relocation is performed by hardware and is simple - it requires two special registers, a simple addition, and a simple comparison.  This is very inexpensive in computing terms.
					</p>
					<p>
						There are also disadvantages to dynamic relocation.  Although relatively inexpensive, it does slow down hardware because of the additional operations outlined above.  Another consequence of dynamic relocation is that processes cannot share memory.  Processes still require a fixed amount of physical memory (whatever size the entire process is), and this can result in a limiting of multiprogramming because each active process must fit into memory.
					</p>
					<h3>Properties of Relocation</h3>
					<p>
						Relocation has three main properties:
					</p>
					<ol>
						<li><strong>Transparency:</strong> processes are unaware that they are sharing memory.</li>
						<li><strong>Safety:</strong> memory references are checked to ensure that they fall between the base and limit registers, which keeps other processes safe from corruption.</li>
						<li><strong>Efficiency: </strong>memory checks and assurance that the process is within its range are fast because they are performed in hardware.  However, if a process grows it may have to be moved which is a very time expensive operation.</li>
					</ol>
					<h3>Memory Management: Memory Allocation</h3>
					<p>
						Once a process is fetched from storage and it begins to execute, it grows and eventually terminates.  Throughout this process, the operating system must keep track of which memory is available and which is utilized.  Pieces of memory that are free are known as holes.  Given a new process, the operating system has to decide in which hole to place the new process.
					</p>
					<h3>Memory Allocation Policies</h3>
					<p>
						There are three main policy options available for allocating memory.  These policies include:
					</p>
					<ol>
						<li><strong>First-Fit:</strong> allocate the new process in the first hole in which the process will fit.  The search for a hole that is large enough can start with the first hole in memory or, alternatively, the search can begin wherever the previous first-fit search ended.</li>
						<li><strong>Best-Fit:</strong> allocate the new process to the smallest hole that is big enough to hold the process.  In this approach, the operating system must search the entire list and find the appropriately-sized hole, or alternatively, store a list of available holes sorted by size.</li>
						<li><strong>Worst-Fit:</strong> allocate the new process to the largest hole available.  The reasoning behind this policy is that perhaps the remaining space will still be useful for new processes later.  Similar to the best-fit policy, the operating system must search the entire list and find the largest hole, or alternatively, store a list of available holes sorted by size.</li>
					</ol>
					<p>
						Simulations show that the first-fit policy and the best-fit policy usually yield better storage utilization that the worst-fit policy.  Simulations also show that the first-fit policy is generally faster than best-fit.
					</p>
					<h3>Fragmentation</h3>
					<p>
						Fragmentation is the breaking up of blocks of memory (or storage) into small, unusable pieces that cost computing time to keep track of but are not useful.  It is always important to avoid fragmentation.  There are two different forms of fragmentation:
					</p>
					<ol>
						<li><strong>External Fragmentation</strong> - The process of loading and unloading programs causes free space in memory to become fragmented.  In a case of extreme external fragmentation, it is possible that there could technically be enough space in memory to fit a new process, but the  available space is divided up and not contiguous.  Simulations of memory management clearly show that up to one-third (1/3) of memory can be wasted due to external fragmentation.  For this reason, minimizing external fragmentation is a priority in operating system design.</li>
						<li><strong>Internal Fragmentation</strong> - If a process is allocated a block of memory that is only slightly larger than its requirements, it is more efficient to allocate the process the entire block than it is to keep the extra memory as a separate block.  Keeping track of only one or two bytes of free space is more expensive than the value they add as free space.  This wastage of memory internal to a partition is known as internal fragmentation.</li>
					</ol>
					<h3>Compaction</h3>
					<p>
						Compaction is the process of moving memory around to eliminate most of the smaller holes and make one larger hole.  On storage disks, this is known as disk defragmentation - a well-used utility in most Windows operating systems.  Like defragmentation, compaction is very time expensive.  It is possible to perform a partial compaction, simply to create a hole in memory large enough to house the new process that is attempting to execute.
					</p>
					<h3>Swapping</h3>
					<p>
						When memory is becoming full, it is possible to swap out the process onto a storage device, which releases all the memory that the process is holding.  This is only done with a process that has stalled (waiting for I/O, for example) and is not in the ready queue.  Once the process is reactivated, the operating system reloads it into memory.  If static relocation has been used, then the process must be put back in the same memory location as before.  If dynamic relocation was used, the operating system can find a new position in memory and update the relocation and limit registers.
					</p>
					<p>
						If the operating system utilizes swapping, this is also an ideal time to incorporate compaction.  Combining several smaller holes together to create one large enough to accommodate another process is easier when one or more of the processes is swapped out to a storage disk.
					</p>
					<h3>Memory Management Challenges</h3>
					<p>
						Thus far in this discussion, there have been multiple challenges facing the operating system designer.  External fragmentation requires frequent compaction, an expensive operation.  The need for contiguous allocation makes it difficult to fit processes into memory, and very difficult to grow or shink the amount of memory allocated to a process. Further, up to this point it has been a requirement for all of a process to reside in memory, and while process swapping helps, it doesn't solve this problem completely, mostly because swapping itself is a very expensive operation.  Memory management using these techniques is clearly a large challenge.  Enter <em>paging</em>.
					</p>
					<h3>Paging</h3>
					<p>
						The basic process of paging takes place in the following way:
					</p>
					<ol>
						<li>Processes are divided up and assigned into fixed page sizes.</li>
						<li>These pages are assigned to frames (blocks of memory).</li>
						<li>The operating system manages (moves, removes, reallocates) pages in memory as required by the process.</li>
						<li>Pages are not necessarily contiguously assigned, they can be anywhere in memory.</li>
					</ol>
					<h3>Paging: Motivation and Features</h3>
					<p>
						The idea of paging arose after computer scientists realized the 90/10 rule of computing: in general, processes spend 90% of their time accessing 10% of their space in memory.  The other 90% of the allocated memory is used only 10% of the time.  The idea of paging was to keep only the parts of a process that are actually being used in memory.
					</p>
					<p>
						Pages greatly simplify the problem of insufficient memory space.  Using paging, the process sees the memory it is using as contiguous, but pages don't actually have to be physically contiguous in memory.  This happens by dividing memory into blocks or frames of fixed size and processes into fixed-size sections called pages.  The frames don't need to be contiguous on the disk, but from the point-of-view of the process, each page is contiguous with the next.  Note that paging does eliminate external fragmentation, but not internal fragmentation.  Due to the fixed-size nature of pages and frames, sometimes the process lacks enough data to fill a page.
					</p>
					<h3>Paging Hardware</h3>
					<p>
						If pages are not allocated contiguously, then it is clear that finding them in memory could be a challenge.  This is where the idea of virtual addresses comes into play.  When a process is executed it uses a virtual (aka logical) address to name each of the memory locations it will require.  These virtual addresses are contiguous, from 0 to the size of the process.  The operating system assigns the process to pages, and the paging hardware translates the virtual addresses into actual physical addresses in memory (frames) that could appear anywhere, in any order within memory.  The hardware manages the translation from virtual address to physical, meaning that the operating system merely requests a page and the hardware fetches it, wherever it may be in physical memory.  The operating system employs page tables to keep track of this information.
					</p>
					<p>
						Paging is a form of dynamic relocation, where each virtual address is bound by the paging hardware to a physical address.  It may be easier to think of the page table as a set of relocation registers, one for each frame.  Mapping is invisible to the process; the operating system maintains the mapping and the hardware will perform the translation.  Protection is provided with the same mechanisms as used in dynamic relocation.
					</p>
				</article>
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
