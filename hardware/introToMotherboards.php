<?php $title = 'Introduction to Motherboards - Learn Hardware- DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">Introduction To Motherboards</li>
		  </ol>
          <article id="introToMotherboards" class="text-left">
              <h2 class="text-center">Introduction to Motherboards</h2>
              <p>
                  In this article:
              </p>
              <ol>
                  <li><a class="inTextLink" href="#motherboard">What is a Motherboard?</a></li>
                  <li><a class="inTextLink" href="#cpuSockets">CPU Sockets</a></li>
                  <li><a class="inTextLink" href="#ramSlots">RAM Slots</a></li>
                  <li><a class="inTextLink" href="#motherboardChipsets">Motherboard Chipsets</a></li>
              </ol>
              <h3 id="motherboard">What is a Motherboard?</h3>
              <p>
                  The motherboard is the backbone computer component that allows every other part of the computer to communicate with each other.  Every desktop, laptop, tablet and even smartphone will have some sort of motherboard.  There are many of different variations, built to suit a wide variety of applications.  Wikipedia lists about <a href="https://en.wikipedia.org/wiki/Computer_form_factor#Comparisons">40 different form factors (types) of motherboards</a>.
              </p>
              <p>
                  Some of the most common motherboard form factors include:
              </p>
              <ul>
                  <li><a class="inTextLink" href="#ATX">ATX</a></li>
                  <li><a class="inTextLink" href="#microATX">Micro-ATX</a></li>
                  <li><a class="inTextLink" href="#ITX">ITX</a></li>
              </ul>
              <h3 id="ATX">ATX</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Abit-kt7-large.jpg/512px-Abit-kt7-large.jpg">
                  <figcaption class="text-center">Standard ATX Motherboard</figcaption>
              </figure>
              <p>
                  ATX stands for Advanced Technology eXtended.  It was developed by Intel in 1995 and has gone through lots of updates over the past 20 years.  The latest standard version is 2.2, which came out in 2008.  The standard size of an ATX motherboard is 305 × 244 mm.  ATX boards use a standard 20-pin power connection but are also often capable of using a 24-pin power connection.
              </p>
              <h3 id="microATX">microATX (uATX)</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/8/87/ASRock_G31M-S_Micro-ATX_Motherboard.jpg" alt="ASRock G31M-S Micro-ATX Motherboard">
                  <figcaption class="text-center">MicroATX Motherboard</figcaption>
              </figure>
              <p>
                  As their name implies, microATX motherboards are smaller than a standard ATX, with maximum dimensions being 244 × 244 mm.  This, of course, has a limiting factor in the amount of expansion slots available.  Standard microATX motherboards will fit in a standard ATX case, but will also fit into much smaller cases as well.  They also share similar power connectors to an ATX motherboard.  The microATX is a very popular form factor of the motherboard and is still widely in use today.
              </p>
              <h3 id="ITX">ITX</h3>
              <figure>
                  <img  class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/VIA_Mainboards_Form_Factor_Comparison.jpg/512px-VIA_Mainboards_Form_Factor_Comparison.jpg" alt="VIA Mainboards Form Factor Comparison">
                  <figcaption class="text-center">ITX</figcaption>
              </figure>
              <p>
                  ITX is actually a series of different motherboards, varying in size from 170mm x 170mm down to 75mm x 45mm (updated to 60mm x 60mm).  Obviously, their range of capability and expandability also varies.  These motherboards are usually intended for specialty purposes, varying from home theater PC systems to home security systems to embedded medical and military specialist equipment.
              </p>
              <h3 id="cpuSockets">CPU Sockets</h3>
              <p>
                  The highlight component that a motherboard is connected to is the Central Processing Unit (CPU).  While there are many types and comparisons of CPU, this discussion will be limited to the actual connection to the motherboard.
              </p>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/CPU_Socket_LGA775%28T%29.JPG/256px-CPU_Socket_LGA775%28T%29.JPG" alt="CPU Socket LGA775(T)">
                  <figcaption class="text-center">CPU Socket - Land-Grid Array</figcaption>
              </figure>
              <p>
                  There are two main types of CPU sockets in modern motherboards, Pin-Grid Array, and Land-Grid Array.  The physical connection between the CPU and the motherboard is a series of pins.  In a Pin-Grid Array, the pins are on the CPU (AMD).  In the Land-Grid Array, the pins are on the motherboard (Intel).  This doesn't mean any LGA CPU will fit any LGA motherboard (or PGA CPU to PGA motherboard) - there are specific and rigid requirements, only certain CPUs can be paired with certain motherboards.  It is critical to check the motherboard's documentation to see which processors it accepts.
              </p>
              <p>
                  Installing a CPU should require very little pressure from the installer - if this isn't the case, don't force anything!  Recheck that the CPU is the correct one and that it is aligned correctly.  Note: the lever on the side also needs to be open, and it will be easy to close when the CPU is correctly positioned and installed.
              </p>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/SocketA.jpg/512px-SocketA.jpg" alt="SocketA">
                  <figcaption>CPU Socket - Pin-Grid Array</figcaption>
              </figure>
              <h3 id="ramSlots">RAM Slots</h3>
              <figure>
                  <img class="img-responsive centered" src="https://aplusjourney.files.wordpress.com/2016/04/ram_slots.jpg" alt="RAM Slots">
                  <figcaption>RAM Slots</figcaption>
              </figure>
              <p>
                  Another important component that is connected directly to the motherboard is the Random Access Memory (RAM).  These connections have changed over the years to accept RAM as it evolved through many generations, from the original DRAM through to the latest and greatest in RAM - DDR4.  RAM is removed by simply flipping down the tabs on the end and the module should release easily.  When installing, very little force is needed, if there is resistance, check to see if the correct RAM is being used and that it is aligned properly.
              </p>
              <h3 id="motherboardChipsets">Motherboard Chipsets</h3>
              <p>
                  Chipsets are built into motherboards to manage the flow of data between components on the motherboard.  Traditionally, motherboards had two chipsets, the NorthBridge, and the Southbridge, which controlled how data flowed around the computer.  In modern computers, much of the functionality of the Northbridge chipset has been given to the CPU itself; the idea of a Northbridge chipset and Southbridge chipset embedded in a motherboard is closer to a theoretical construct than a reflection of the actual physical components on a modern motherboard.
              </p>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Chipset_schematic.svg/256px-Chipset_schematic.svg.png" alt="Chipset schematic">
                  <figcaption>Motherboard Chipsets Visualized</figcaption>
              </figure>
              <h3>Northbridge Chipset</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/I815EP.png/512px-I815EP.png" alt="I815EP">
                  <figcaption>Northbridge Chipset by Intel (2007)</figcaption>
              </figure>
              <p>
                  Another name for the Northbridge chipset is the Memory Controller Hub.  This is where the data flows the fastest on the motherboard - between the CPU and the RAM (and possibly the Graphics Processor Unit {GPU}).
              </p>
              <h3>Southbridge Chipset</h3>
              <p>
                  Another name for the Southbridge chipset is the Input/Output (I/O) Controller.  It controls the flow of data that originates from the peripherals of the computer - input from USB, Ethernet, expansion slots such as TV tuners, audio cards, etc.  Another important feature of the Southbridge is that it is the connection to the <a href="https://aplusjourney.wordpress.com/2016/04/19/basic-inputoutput-system-bios/">BIOS</a>, which is critical to how the computer first initializes.
              </p>
              <h3>Further Resources</h3>
              <p>
                  Mike Meyers.  <a class="inTextLink" href="http://www.amazon.ca/gp/product/125958951X/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&amp;camp=15121&amp;creative=330641&amp;creativeASIN=125958951X&amp;linkCode=as2&amp;tag=19thcentuhist-20"><em>CompTIA A+ Certification All-in-One Exam Guide, Ninth Edition (Exams 220-901 &amp; 220-902)</em></a>.  pp. 227 - 240.
              </p>
              <p>
                  Wikipedia - <a class="inTextLink" href="https://en.wikipedia.org/wiki/Motherboard">Motherboard</a>, <a href="https://en.wikipedia.org/wiki/CPU_socket">CPU Socket</a>, <a href="https://en.wikipedia.org/wiki/Northbridge_(computing)">Northbridge</a>, <a href="https://en.wikipedia.org/wiki/Southbridge_(computing)">Southbridge</a>
              </p>
              <p>
                  <a class="inTextLink" href="http://www.computerhope.com/jargon/m/memoslot.htm">Computer Hope: Memory Slot</a>
              </p>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/Q7A9z33Qj7M" allowfullscreen></iframe>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/BTq2b5_1EGI" allowfullscreen></iframe>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/bDKCSvmlPuc" allowfullscreen></iframe>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/Fk9LkGhyH-0" allowfullscreen></iframe>
          </article>
          <?php include '../includes/disqus.php'; ?>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../includes/footer.php'; ?>
