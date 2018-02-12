<?php $title = 'Memory Types - Learn Hardware- DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
<div class="jumbotron">
  <div class="container text-center">
	<h1>Learn Hardware @ DevOpsNoob.com</h1>
  </div>
</div>
<div class="container-fluid bg-3 text-center">
  <div class="row">
	  <div class="col-md-2">
	  </div>
	  <div class="col-md-8">
		  <ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
			  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>hardware.php">Learn Hardware</a></li>
			  <li class="breadcrumb-item active">Memory Types</li>
		  </ol>
          <article id="computerMemoryTypesOverview" class="text-left">
              <h2 class="text-center">Computer Memory Types Overview</h2>
              <p>
                  Memory is a critical component of a computer.  There are two main types of computer memory - Read Only Memory (ROM) and Random Access Memory (RAM).  ROM is absolutely critical to the computer during its start-up phase - the <a href="https://aplusjourney.wordpress.com/2016/04/19/basic-inputoutput-system-bios/">BIOS</a> is stored in ROM.  RAM is known as the <em>main memory</em> and is where the computer keeps data that the CPU is working on.   RAM is different than storage (a traditional hard drive or solid state drive); storage access times are much slower but unlike RAM, storage continues to hold data even if the computer is turned off.  RAM is only available to store data while power is supplied to it, and is consequently sometimes called <em>volatile memory</em>.
              </p>
              <p>
                  This article will introduce:
              </p>
              <ol>
                  <li><a class="inTextLink" href="#rom">Read-Only Memory (ROM)</a></li>
                  <li><a class="inTextLink" href="#sram">Static Random-Access-Memory (SRAM)</a></li>
                  <li><a class="inTextLink" href="#dram">Dynamic Random-Access-Memory (DRAM)</a></li>
                  <li><a class="inTextLink" href="#sdrSdram">Synchronous DRAM (SDRAM)</a></li>
                  <li><a class="inTextLink" href="#ddr">Double Data Rate (DDR) SDRAM</a></li>
                  <li><a class="inTextLink" href="#ddr2">Double Data Rate 2 (DDR2) SDRAM</a></li>
                  <li><a class="inTextLink" href="#ddr3">Double Data Rate 3 (DDR3) SDRAM</a></li>
                  <li><a class="inTextLink" href="#ddr4">Double Data Rate 4 (DDR4) SDRAM</a></li>
                  <li><a class="inTextLink" href="#specialty">Specialty RAM</a></li>
              </ol>
              <h3 id="rom">Read Only Memory (ROM)</h3>
              <p>
                  ROM has been a critical part of computers since very early in their development.  Originally, ROM was programmed in the factory and could not be changed.  It was and still is programmed to do a specific task and is only capable of doing that task.
              </p>
              <p>
                  ROM has evolved throughout the computer age with significant advances in the write-ability after its initial programming.  EPROM and EEPROM are forms of erasable ROM memory, which can be written, erased, and re-written.  However, this often requires physical access to the ROM chip or advanced knowledge and therefore is only done by computer technicians in cases of hardware malfunction.
              </p>
              <h3 id="sram">Static RAM (SRAM)</h3>
              <figure>
                  <a title="By Satyamfifa (Own work) [Public domain], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File%3AHyundai_RAM_HY6116AP-10.jpg">
                      <img class="img-responsive centered"  src="https://upload.wikimedia.org/wikipedia/commons/1/15/Hyundai_RAM_HY6116AP-10.jpg" alt="Hyundai RAM HY6116AP-10"></a>
                  <figcaption class="text-center">Static Random-Access-Memory (SRAM)</figcaption>
              </figure>
              <p>
                  Static Random-Access-Memory (SRAM) is the type of memory that is used in CPU caches. It is incredibly fast memory and is much more expensive than other types of memory. Initially, SRAM was soldered onto the motherboard near the CPU (see above), but now is physically incorporated into the CPU.  Modern CPU caches are generally divided into 3 levels, L1, L2, and L3.  Each core of the CPU will have its own cache, L1, which is small but has very fast access times.  Depending on the CPU, L2 may be shared amongst cores and is a little bigger and a little slower to access than L1.  The L3 cache is shared amongst all cores, is much bigger than L1 or L2 and again a little slower to access.  The L3 cache is still much faster than accessing main memory.
              </p>
              <h3 id="dram">Dynamic Random Access Memory (DRAM)</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/MT4C1024-HD.jpg/512px-MT4C1024-HD.jpg" alt="MT4C1024-HD">
                  <figcaption class="text-center">Dynamic Random Access Memory (DRAM)</figcaption>
              </figure>
              <p>
                  Dynamic Random-Access-Memory (DRAM) is the overall category of modern RAM and is one of the most important components of a computer.  Early forms of DRAM  were used widely in computing since the 1970's, and several generations of DRAM improvements bring us to modern RAM.  One of the critical characteristics of DRAM is that it is <em>volatile</em>, meaning that without power the data in the memory disappears.  The other critical characteristic is that it is <em>random-access</em>, meaning that any storage location can be accessed directly by the computer, there is absolutely no built-in physical latency in accessing DRAM.  The access time for any piece of data stored in DRAM is the same regardless of its position.  Some of the many evolutions of DRAM are outlined below.  <a href="https://aplusjourney.wordpress.com/2016/04/27/introduction-to-motherboards-901#ramSlots">Click here to learn about how RAM slots connect RAM modules to the motherboard</a>.
              </p>
              <h3 id="sdrSdram">Synchronous DRAM (SDRAM)</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/SDR_SDRAM-1.jpg/512px-SDR_SDRAM-1.jpg" alt="SDR SDRAM">
                  <figcaption class="text-center">SDRAM</figcaption>
              </figure>
              <p>
                  Synchronous DRAM (SDRAM) was introduced to the market in 1993 and was one of the first improvements on traditional DRAM that had been in computers since the 1970's. Traditional DRAM could only process one memory access command at a time and processed these in the order in which they were received, sometimes resulting in a long queue of memory access commands.  SDRAM had several banks of memory and could operate on several memory access commands at once.   All of the responses that had been processed were sent each time a clock signal was received.  The effect of this was a dramatic increase in the throughput of data and a dramatic increase in the overall speed of memory.
              </p>
              <h3 id="ddr">Double Data Rate (DDR) SDRAM</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Corsair_DDR_PC-3200_Memory_%28Xytram%29.jpg/512px-Corsair_DDR_PC-3200_Memory_%28Xytram%29.jpg" alt="Corsair DDR PC-3200 Memory (Xytram)">
                  <figcaption class="text-center">DDR</figcaption>
              </figure>
              <p>
                  Another evolution in memory occurred around 2000 with the introduction of Double Data Rate (DDR) SDRAM.  DDR used the same principle as SDRAM of collecting memory access commands in banks and sending them once a clock signal was received.  However, unlike the first generation of SDRAM, DDR SDRAM sent responses twice per clock signal, effectively doubling the speed of the main memory.
              </p>
              <p>
                  On a quick side note, the labeling that DDR uses is confusing, and the confusion continues into DDR2, DDR3, and DDR4.  In general, it works like this:
              </p>
              <ul>
                  <li>DDR usually has a number following it: DDR-100.  This means that that memory module sends 100 transfers per second.</li>
                  <li>To get the throughput of data that the memory can process, multiply the 100 by 8, so 800 megabytes per  second (MB/s).</li>
                  <li>The memory will either be labeled DDR-100 or PC800, depending on the manufacturer.  These terms are usually interchangeable.</li>
              </ul>
              <h3 id="ddr2">Double Data Rate 2 (DDR2) SDRAM</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/High_Performance_RAM.jpg/512px-High_Performance_RAM.jpg" alt="High Performance RAM">
                  <figcaption class="text-center">DDR2</figcaption>
              </figure>
              <p>
                  Introduced in 2003, DDR2 was another evolution in memory.  It was able to send four memory access commands per clock cycle, effectively doubling the speed of DDR.  DDR2 was not compatible with DDR or DDR3 which followed shortly thereafter.  It was neither forwards nor backwards compatible.
              </p>
              <h3 id="ddr3">Double Data Rate 3 (DDR3) SDRAM</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/4GB_DDR3_SO-DIMM.jpg/512px-4GB_DDR3_SO-DIMM.jpg" alt="4GB DDR3 SO-DIMM">
                  <figcaption class="text-center">DDR3 SO-DIMM (for laptops)</figcaption>
              </figure>
              <p>
                  DDR3 was introduced in 2007 and again doubled the speed that DDR2 was able to produce.  Like DDR2, it is not backwards compatible.  The architecture of DDR3 has a much larger module capacity than DDR2, and it is common to see 8GB modules in modern computers.
              </p>
              <h3 id="ddr4">Double Data Rate 4 (DDR4) SDRAM</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Two_8_GB_DDR4-2133_ECC_1.2_V_RDIMMs.jpg/512px-Two_8_GB_DDR4-2133_ECC_1.2_V_RDIMMs.jpg" alt="Two 8 GB DDR4-2133 ECC 1.2 V RDIMMs">
                  <figcaption class="text-center">DDR4</figcaption>
              </figure>
              <p>
                  DDR4 is the latest and greatest evolution of memory.  DDR4 was released in 2014.  It has a theoretical limit of 512GB modules, which is well beyond any modules in current production.  Current DDR4 can transfer up to 19,200 MB/s, a truly astonishing amount of data!
              </p>
              <h3 id="specialty">Specialty RAM</h3>
              <p>
                  There are several different forms of memory available for special purposes within the computer industry.  The most important type is computer memory that checks itself for errors. Within normal memory, there is always a very small percentage of error.  On a normal computer, this usually doesn't matter.  But for important computers such as servers and databases that store important information (banks, military, governments, etc), it is really important these errors are caught.
              </p>
              <h4>Parity Memory</h4>
              <p>
                  By adding a redundant bit (which can only be odd or even), parity memory checks to see if the result is consistently the same when processing data.  This is a very old error-checking technique, and cannot correct any errors, rather it simply allows the memory to know that an error has occurred.
              </p>
              <h4>Error Correcting Code (ECC)</h4>
              <p>
                  Error Correcting Code memory is an advancement in parity memory which actually allows the computer memory to not only find errors but to correct the errors it finds.  ECC has more overhead computing, so it is slower than non-parity computer memory.  However, in situations where it is absolutely critical that no errors occur, then ECC is widely used.  Note that ECC memory physically looks exactly like non-error checking memory, and can only be differentiated by reading the label.
              </p>
              <h4>Registered Memory</h4>
              <p>
                  Also known as "buffered memory", registered memory is much more stable than other memory.  This effect is achieved by adding an additional register between the RAM module, lowering the constant electrical load on the RAM.  Like other forms of specialty memory, registered memory is more expensive and usually only found in servers.
              </p>
              <h4>Multi-channel Memory</h4>
              <p>
                  Some motherboards are configured to add more channels of communication between the <a href="https://aplusjourney.wordpress.com/2016/04/27/introduction-to-motherboards-901/">memory controller (aka Northbridge)</a> and the RAM.   RAM modules are grouped together and allow significantly more throughput.  These slots are often color coded, and it is best to put identical RAM modules together on one channel to get best results.
              </p>
              <h3>Further Resources</h3>
              <p>
                  Mike Meyers.  <a class="inTextLink" href="http://www.amazon.ca/gp/product/125958951X/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&amp;camp=15121&amp;creative=330641&amp;creativeASIN=125958951X&amp;linkCode=as2&amp;tag=19thcentuhist-20" target="_blank">CompTIA A+ Certification All-in-One Exam Guide, Ninth Edition (Exams 220-901 &amp; 220-902)</a>.  pp. 147-181.
              </p>
              <p>
                  Wikipedia:
              </p>
              <ul>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/Static_random-access_memory" target="_blank">SRAM</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/Dynamic_random-access_memory" target="_blank">DRAM</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/Synchronous_dynamic_random-access_memory" target="_blank">SDRAM</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/DDR2_SDRAM" target="_blank">DDR2</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/DDR3_SDRAM" target="_blank">DDR3</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/DDR4_SDRAM" target="_blank">DDR4</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/RAM_parity" target="_blank">RAM Parity</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/Registered_memory" target="_blank">Registered Memory</a></li>
                  <li><a class="inTextLink" href="https://en.wikipedia.org/wiki/Multi-channel_memory_architecture" target="_blank">Multi-channel Memory</a></li>
              </ul>
              <p>
                  YouTube:
              </p>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/WzKUVZdIr10" allowfullscreen></iframe>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/bmRMRlDXph0" allowfullscreen></iframe>
          </article>
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../includes/footer.php'; ?>
