<?php $title = 'Paging and Segmentation - Learn Operating System Theory - DevOpsNoob.com'; ?>
<?php $description = 'Paging is the process of dividing up processes into pages and assigning these pages to frames of physical memory.'; ?>
<?php include '../../includes/header.php'; ?>
<div class="jumbotron">
  <div class="container text-center">
	<h1>Learn Operating Systems Theory @ DevOpsNoob</h1>
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
			  <li class="breadcrumb-item active">Paging and Segmentation</li>
		  </ol>
				<article id="paging" class="text-left">
					<h2 class="text-center">Operating Systems - Paging and Segmentation</h2>
					<p class="articleDate">May 10th, 2016</p>
					<div class="video_article">
						<iframe class="wideVideo" src="https://www.youtube.com/embed/Jw8G4GdY-pc" allowfullscreen></iframe>
					</div>
					<p>
						Below are notes based on a CS lecture found on YouTube.  The course, Computer Science 377, is offered by the University of Massachusetts.   This video is Lecture 12: Paging and Segmentation.  Many thanks to Sean Barker (the lecturer) on his excellent work. Paging was introduced in the previous lecture so the lecture starts part way through the subject.  As a quick refresher:
					</p>
					<blockquote>
						Paging is the process of dividing up processes into pages and assigning these pages to frames of physical memory.  As most processes only use a small amount of the memory they are allotted (90/10 Rule), only those pages in frequent use are kept in memory, the rest are kept on a storage device.  An index of the pages for each process is kept in a page table.
					</blockquote>
					<h3>Making Paging Efficient</h3>
					<p>
						The major drawback of paging is that an index of all the pages has to be kept somewhere easily accessibly by the computer.  Registers (<a href="https://aplusjourney.wordpress.com/#sram" target="_blank">caches found on the CPU</a>) are really fast, but they can store a comparatively small amount of data.  Storing the page table in memory (<a href="https://aplusjourney.wordpress.com/2016/05/03/computer-memory-types-overview/" target="_blank">RAM</a>) solves this problem as it is nearly impossible to envision a page table large enough to fill the RAM.  However, compared to registers, RAM is very slow.
					</p>
					<p>
						The solution to this problem the <strong>Translation Look-Aside Buffer (TLB)</strong>.  The TLB is a separate hardware component that is fast, fully associative memory that stores page numbers (key) and frame (value).  A typical TLB can store from 8 to 2048 entries.  The TLB is not meant to store an index of all pages, only the ones that are most frequently called.  In this way, the location of pages that are called frequently are quickly accessible.
					</p>
					<h3>The Costs of Using the Transition Look-Aside Buffer (TLB)</h3>
					<p>
						With a typical maximum size of 2048 entries, the TLB is not equipped to handle a page table large enough to index every page in memory.  If the index of the page is not stored in the TLB, then the main memory must be consulted.  If the TLB does not contain the index of the page requested, then the time spent consulting the TLB is wasted.  For this reason, it is important to have a large TLB, which maximizes the hit ratio and reduces average memory access times.
					</p>
					<h3>Initializing Memory and TLB When Starting a Process</h3>
					<p>
						When a new process is fetched from storage and begins to execute in memory, it follows specific steps.  These include:
					</p>
					<ol>
						<li>A new process needing <em>k</em> pages arrives.</li>
						<li>If <em>k</em> page frames are free, then allocate these frames to the new pages. If not enough frames are free, then free frames that are no longer needed by currently executing processes.</li>
						<li>The operating system puts each page in a frame, and then puts the frame number in the corresponding entry in the page table.</li>
						<li>At this point, the operating system flushes the TLB's records of the process (if it was previously in memory).</li>
						<li>The operating system begins executing the new process.</li>
						<li>As the new process executes, the operating system loads TLB entries as each page is accessed, which replaces an existing entry if the the TLB is full.</li>
					</ol>
					<h3>Saving/Restoring Memory in a Context Switch</h3>
					<p>
						When implementing paging, the Process Control Block (PCB) (an operating system data structure that keeps track of each process) has to be extended to include the page table to index where the pages of a process are, and could also have to include a copy of the TLB.
					</p>
					<p>
						When a context switch occurs, the following process must be implemented:
					</p>
					<ol>
						<li>A copy of the page table base register value must be sent to the PCB.</li>
						<li>If in use, a copy of the TLB must be sent to the PCB.</li>
						<li>The TLB must be flushed (values invalidated).</li>
						<li>The page table base register is restored.</li>
						<li>The TLB is restored (if it was used).</li>
					</ol>
					<h3>Sharing via Paging</h3>
					<p>
						Another major benefit of paging is that it allows the sharing of memory across processes. Any memory that is shared is marked as read-only so that one process doesn't overwrite information that another may be using.  This is somewhat similar to the way that threads share memory with each other within a process.  Processes don't even need to know that they are sharing memory with each other - the operating system simply keeps track of which processes are accessing which frames of memory.  A perfect example of this is a shared library, where multiple processes could used the shared library, reducing the amount of frames necessary to be kept in memory.
					</p>
					<h3>Paging Summary</h3>
					<p>
						Paging is a huge improvement over relocation. It eliminates the problem of external fragmentation, eliminating the need for compaction. It allows processes to execute even if they are only partially loaded into main memory.  Paging also allows the sharing of read-only code, making overall memory usage more efficient.
					</p>
					<p>
						Paging does have implementation costs - it requires the hardware support of a TLB in order to be efficient and it requires more involvement from the operating system.  Additionally, the continual translation from virtual addresses to physical addresses takes computation time as well.  Overall, however, paging is well worth its costs.
					</p>
					<h3>Segmentation</h3>
					<p>
						Segmentation presents an alternative memory management technique to paging.  As should be obvious, in practice processes vary greatly in size and it makes a lot of sense to keep certain chunks of processes together to allow fast access.  Segmentation is a technique where memory is broken up into logical blocks which hold things like the stack, the heap, or global variables, not just a single linear array of bytes.  Using segmentation, the complier can generate references that identify the segment and the offset within the segment (ie. code segment <em>x</em> with offset of 288).  In essence, segmentation allows the operating system to view processes in a similar fashion to the user (programmer).  Segments make it easier for the stack and the heap to grow dynamically, and makes sharing and protecting data easier for the operating system.
					</p>
					<h3>Implementing Segmentation</h3>
					<p>
						In order to implement segmentation, it is necessary to create a <em>segment table</em> which contains a base address in memory, the length of the segment, and protection information about the segment (can this segment be shared, read, modified, etc.).  As far as hardware support goes, segmentation requires multiple base/limit registers.  The compiler needs to create a general virtual address whose upper order bits are a segment number.
					</p>
					<p>
						Segmentation can be combined with relocation, both static and dynamic.  Each segment will be allocated a contiguous piece of physical memory, without any virtual addresses in between.  While segmentation improves relocation, the old problem of external fragmentation is still present.  Like paging, keeping track of the segment tables can be taxing on the computer, and implementing some sort of buffer akin to the TLB might be necessary, especially if processes have a lot of segments.
					</p>
					<h3>Combining Segments and Paging</h3>
					<p>
						In order to maximize memory efficiency, paging and segmentation can be combined together into one system: Segmented Paging.  In this approach, the virtual memory address space is treated as though it is a collection of segments (logical units) of arbitrary size.  Physical memory is still divided into physical frames.  As segments are usually longer than one frame, a logical segment gets mapped onto multiple pages.  This results in the best of both strategies - segments are closely tied together but benefit from the memory efficiency of paging.
					</p>
					<h3>Addresses in Segmented Paging</h3>
					<p>
						Through implemented segmented paging, virtual addresses will contain three parts: a segment number, a page number within that segment, and an offset number within the page.  The segments are kept track of in a segment table, which stores the base address of a page table for that segment.  The page number indexes the location of the frame.  The frame and the page offset yield the exact location of the data.
					</p>
					<h3>Sharing Pages and Segments: Implementation</h3>
					<p>
						Segment tables can be stored in a small number of associative registers.  Page tables can be stored in a TLB.  If storage space is an issue in either of these cases, then the segment and page tables spill into main memory, which slows the process dramatically.  Details such as protection bits can be stored either in segment tables or page tables.  It is possible to do multiple levels of paging and segmentation when the tables get too big.
					</p>
					<h3>Segmented Paging: Costs and Benefits</h3>
					<p>
						The major benefits of segmented paging is that it aligns how the compiler (programmer) and the operating system view main memory.  It offers flexible process growth, external fragmentation is eliminated, and processes can share read-only memory.
					</p>
					<p>
						The major drawback of segmented paging is the additional computing overhead is generates; context switches are slower because they have to update segment tables, page tables and possibly the TLB.  Overall, however, segmented paging is a preferred choice for most operating system designers as the benefits usually outweigh the costs.
					</p>
				</article>
        <br />
        <?php include '../../includes/disqus.php'; ?>
			</div>
			<div class="col-md-2">
        <?php include '../../includes/googleAdsSidebar.php'; ?>
			</div>
		</div>
<?php include '../../includes/footer.php'; ?>
