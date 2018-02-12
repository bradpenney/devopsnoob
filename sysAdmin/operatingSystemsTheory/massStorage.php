<?php $title = 'Mass Storage and Disk Scheduling - Learn Operating System Theory - DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">Mass Storage and Disk Scheduling</li>
		  </ol>
				<article id="massStorage"  class="text-left">
					<h2 class="text-center">Operating Systems - Mass Storage and Disk Scheduling</h2>
					<p class="articleDate">May 11th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/Obv6wAg1f08" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a CS lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 17: Mass Storage and Disk Scheduling.  Many thanks to Sean Barker (the lecturer) on his excellent work. This article focusses on how a computer accesses a traditional hard drive, with some discussion of Solid-State Drives and RAID at the end.
					</p>
					<h3>Secondary Storage</h3>
					<p>
						For a brief overview of storage device form factors, check out the article <a href="https://aplusjourney.wordpress.com/2016/05/10/storage-devices/" target="_blank">Storage Devices from A+ Journey</a>.  The amount of time it takes to access a hard disk is known as Disk I/O Time.  It is a combination of these factors:
					<ol>
						<li><strong>Seek Time</strong> - the position of the read/write head over the platter (cylinder).  The faster the head moves to its new position, the faster the data can be read.</li>
						<li><strong>Rotational Delay</strong> - the cylinder will usually need to rotate to get the data under the read-write head.  The amount of time it takes for the rotation to occur is its latency.  The faster the disk rotates, the less latency.</li>
						<li><strong>Transfer Time</strong> - the amount of time it takes read bytes from the disk to memory (or vice versa).</li>
					</ol>
					As a general rule, Disk I/O Time = Seek Time + Rotational Delay + Transfer Time
					<h3>Reducing Access Time</h3>
					<p>
						The mutual goal of any hard disk designer and any operating system designer is to minimize the seek time, rotational delay and transfer time of a hard disk.  Some of the methods that are being used include:
					</p>
					<ol>
						<li >Smaller physical platters/cylinders reduce seek time</li>
						<li>Spin platters/cylinders faster reduce rotational delay</li>
						<li>Schedule disk operations in such a way as to minimize head movement</li>
						<li>Lay out data on disk so that related data are on nearby tracks</li>
						<li>Place commonly-used files in a central location on disk to minimize seek time</li>
						<li>Carefully select memory block size.  If the memory block size is too small the result will be a low transfer rate because more seeking will need to be performed for the same amount of data.  If the memory block size is too large, the result will be a large amount of internal fragmentation.</li>
					</ol>
					<p>
						It should be noted that Solid-state drives (SSDs) are becoming more and more common in both desktop and laptop computers; SSDs do not suffer from these problems due to the random-access nature of their construction.
					</p>
					<h3>Disk Head Scheduling</h3>
					<p>
						Similar to <a href="https://intro2operatingsystems.wordpress.com/2016/04/12/operating-systems-cpu-scheduling/" target="_blank">CPU Scheduling</a>, the operating system employs the hard disk controller to schedule access to the hard disk.  As disk requests arrive from the user, the disk scheduler rearranges the requests with the goal of minimizing Disk I/O time.  Some disk head scheduling algorithms include:
					<ol>
						<li>First-Come, First-Served (FCFS)</li>
						<li>Shortest-Seek Time First (SSTF)</li>
						<li>SCAN</li>
						<li>C-SCAN</li>
					</ol>
					<h3>FCFS Disk Head Scheduling Algorithm</h3>
					<p>
						The First Come, First Served algorithm is the most simple form of disk head scheduling. FCFS simply services requests as they arrive at the disk controller.  It works well under light load (few storage disk accesses) and is the primary algorithm used with Solid-State Drives.  The only overhead of this algorithm is a queue.
					</p>
					<h3>SSTF Disk Head Scheduling Algorithm</h3>
					<p>
						The Shortest-Seek Time First algorithm looks at all the requests that have arrived at the disk controller and services the request that is closest to its current position first.  The idea here is to reduce seek time as much as possible by traveling the shortest possible distance to the next request.  SSTF is implemented via a double-linked list, which increases its overhead as compared to FCFS.  Another possible problem with SSTF is that it could cause starvation of a request if it is particularly far away and other, closer requests continue to arrive before the distant one is serviced.  SSTF is useful but not always optimal, particularly if requests are widely-spaced in both directions.
					</p>
					<h3>SCAN Disk Head Scheduling Algorithm</h3>
					<p>
						The SCAN disk head scheduling algorithm simply moves back and forth across the disk, from the starting position to the ending position of the disk.  A great metaphor for SCAN is an elevator that goes from the basement to the penthouse continuously, picking up passengers and dropping them off as requested along the way.  SCAN can be optimized to look for the highest and lowest request, and only go that far, not to the absolute edge of the disk each time.  SCAN requires an ordered list in order to operate, so its overhead is again more than FCFS.
					</p>
					<h4>C-SCAN Disk Head Scheduling Algorithm</h4>
					<p>
						Circular SCAN disk head scheduling algorithm is a slight advancement on the SCAN algorithm; C-SCAN always begins at the starting position (0) and goes to the highest position.  This is meant to fix a fundamental flaw with SCAN - if a request is at the opposite end of the disk in SCAN, it may have to wait for a considerable amount of time.  Like SCAN, it can be optimized to only go as far as the furthest request.
					</p>
					<h3>Comparing Algorithms</h3>
					<img class="img-responsive centered" src="../../images/sysAdmin/operatingSystemTheory/disk_scheduling_algorithm_comparison.png" alt="Disk Scheduling Algorithm Comparison">
					<h3>Improving Disk Performance using Disk Interleaving</h3>
					<p>
						Due to the physical layout of a hard drive platter, data that is laid out contiguously on a platter is sometimes read faster than the operating system can respond to it.  If step-by-step commands are laid out contiguously, the operating system may not have time to process the first command and respond to it before the second command is read.  This results in a new seek request being issued and slows down the entire process.
					</p>
					<p>
						The solution to this is known as <em>disk interleaving</em>, a process where the memory blocks of related data are not contiguously laid out, but rather laid out in temporally contiguous pattern, relative to the speed of the hard drive.  This means that the hard drive can read a command, the operating system can respoHeadnd to the command, and be ready for the next command when it is read.  For example, every third block of memory could be used, allowing disk interleaving to be effective.  Disk interleaving is a file-system optimization.
					</p>
					<h3>Improving Disk Performance using Read-Ahead</h3>
					<p>
						In many file systems, related files are laid out contiguously (or in close proximity).  In an effort to take advantage of this, hard drives sometimes read blocks from the area surrounding the request and place this information in the disk controller buffer.   The idea is that it is probable that this information may be called soon due to its proximity to the actual request, and if it is, a disk seek will be avoided because the information is already in the disk controller buffer.  This reduces the overall number of disk seeks, and makes the disk more efficient.  If the information is not requested in short order, it is flushed from the buffer.  This approach makes sense because the read head was in the vicinity anyways, so the effective cost to load the information into the disk controller is nil while the potential gain is disk I/O efficiency.  Linux is one important operating system that uses read-ahead.
					</p>
					<h3>Solid State Disks</h3>
					<p>
						For another discussion of Solid-State drives, consult <a href="https://aplusjourney.wordpress.com#ssd" target="_blank">Solid-State Drives from A+ Journey</a>.  SSDs use flash storage for random access to their data, there are no moving parts within an SSD.  This translates to very fast reads, but writes are slower because instead of overwriting data, data is written to a new empty block.  The old block is marked for garbage collection is eventually erased (in the background).  Each block only has a certain number of writes over its lifetime, so SSDs eventually wear out.  Of course, traditional hard drives often fail over time as well due to the moving parts inside.
					</p>
					<p>
						SSDs have much faster access times and are becoming commonplace in modern desktops, laptops, and tablets.  It is very common for a computer to store its operating system and user applications on an SSD, and have a traditional hard drive for storage of user files.
					</p>
					<h3>Tertiary Storage</h3>
					<p>
						For a discussion of tape drives and optical drives, consult <a href="https://aplusjourney.wordpress.com#opticalMedia" target="_blank">Optical Media from A+ Journey </a>and <a href="https://aplusjourney.wordpress.com#tapeDrive" target="_blank">Tape Drives from A+ Journey</a>.  The falling cost of tertiary storage means that backing up data, even in several versions, should be done regularly.
					</p>
					<h3>RAID Storage</h3>
					<p>
						RAID stands for Redundant Array of Multiple Disks.  The idea behind RAID is to use multiple disk drives provide data reliability via disk redundancy.  There are several levels of RAID, each providing varying levels of protection.  The most basic RAID arrangement is <em>Disk </em><em>Mirroring</em>, which makes two copies of all data.  <em>Disk Striping</em> creates an interleaved system, where some of the data is spread across two or more hard drives.  <em>Disk S</em><em>triping with Parity</em> is a further enhancement, where data is interleaved across several disks and a parity bit is used to ensure the data is accurate.  The gold standard in RAID is RAID 6, which uses block-level striping across multiple disks and two parity bits to ensure airtight accuracy.
					</p>
					<h3>Summary</h3>
					<p>
						Storage devices are slow compared to the internal workings of a computer; the CPU and main memory interact at a much faster rate than data can be read from or written to storage devices.  Operating system designers are very concerned about increasing the efficiency of accessing data found on a storage device overcome the "weakest link in the chain".  A good operating system design can help to overcome slow disk I/O, and thereby create an overall faster, more efficient operating system.
					</p>
				</article>
        <br />
        <?php include '../../includes/disqus.php'; ?>
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
