<?php $title = 'Motherboard Expansion Slots - Learn Hardware- DevOpsNoob.com'; ?>
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
			  <li class="breadcrumb-item active">Motherboard Expansion Slots</li>
		  </ol>
          <article id="motherboardExpansionSlots" class="text-left">
              <h2 class="text-center">Motherboard Expansion Slots</h2>
              <p>
              In computing <em>bus</em> refers to the communication system between components of the computer via the motherboard.  It is quite literally the little copper wires (traces) that connect components together, easily visible on the back of the motherboard.
              </p>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/PCIExpress.jpg/512px-PCIExpress.jpg" alt="PCIExpress"/>
                  <figcaption>PCIe Expansion Slots</figcaption>
              </figure>
              <h3>The Expansion Bus</h3>
              <p>
                  The expansion bus is a "roadway" for bytes that connects the expansion slots, like the PCIe slots pictured above, to the rest of the computer's components.  Expansion slots allow the extension of a computer's capabilities by adding additional components such a graphics card (GPU), a TV tuner card, a USB expansion card, and many, many others.
              </p>
              <p>
                  The expansion bus has a width that is measured in bits - that is, the amount of data that can flow through the expansion bus at any given moment.  It used to be that the width of a bus was a literal measurement of the number of connecting wires, but width in modern computers is better thought of as bandwidth, the amount of data the connection can carry.
              </p>
              <p>
                  The expansion bus has its own clock speed.  Thus means that the <em>expansion bus crystal</em> controls how fast things are transported on the expansion bus.  Clock speed does not necessarily equal transfer rate, as some components have been designed to circumvent clock speed to transfer data at astonishing rates (see <a href="#pcie">PCIe</a> below!).
              </p>
              <p>
                  There are many different kinds of expansion slots that allow different components to be added to the motherboard.  The most common of these expansion slots include:
              </p>
              <ul>
                  <li><a class="inTextLink" href="#PCI">PCI</a></li>
                  <li><a class="inTextLink" href="#AGP">AGP</a></li>
                  <li><a class="inTextLink" href="#pcix">PCI-X</a></li>
                  <li><a class="inTextLink" href="#pcie">PCIe</a></li>
              </ul>
              <h3 id="PCI">PCI</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/PCI_Slots_Digon3.JPG/512px-PCI_Slots_Digon3.JPG" alt="PCI Slots Digon3"/>
                  <figcaption>3 PCI Slots</figcaption>
              </figure>
              <p>
                  PCI stands for Peripheral Component Interconnect but is commonly known as PCI.  It is the oldest of the modern expansion slots and was created in 1994 by Intel.  It was exceptionally common expansion slot until newer, more modern slots replaced it (<a href="#pcie">PCIe</a>).  It can still be found in lots of older computers, connecting older components to older motherboards.
              </p>
              <p>
                  PCI came in 32-bit and 64-bit varieties and featured parallel communication, meaning communication flowed both ways in the same channel.  The amount of data it could transfer (throughput) varied from as low as 133MB/s up to 533MB/s depending on bus speed and whether the 32-bit or 64-bit varieties were employed.
              </p>
              <h3 id="AGP">AGP</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Slots_AGP_%26_PCI_on_Motherboard_P4VMM2_MCS.JPG/512px-Slots_AGP_%26_PCI_on_Motherboard_P4VMM2_MCS.JPG" alt="Slots AGP &amp; PCI on Motherboard P4VMM2 MCS">
                  <figcaption>AGP Slot (orange/brown slot on top)</figcaption>
              </figure>
              <p>
                  AGP stands for Accelerated Graphics Port and was an advanced version of PCI which was meant only for video cards - to address the lacking graphics that PC's were able to produce in the 1990s.  It was directly connected to the North Bridge and could not support anything other than a video card.  AGP is not often used in modern computers  - since 2004 PCIe has rapidly been replacing it and today AGP is mostly a relic of past computing.
              </p>
              <h3 id="pcix">PCI-X</h3>
              <figure>
                  <img class="img-responsive centered" src="https://aplusjourney.files.wordpress.com/2016/04/pci_slots_2.png" alt="pci_slots_2">
                  <figcaption>PCI-X Slots Compared to PCI Slots</figcaption>
              </figure>
              <p>
                  PCI-X, which stands for PCI eXtended, was introduced in 1998 as a larger and more capable version of PCI.  It doubled PCI's width in bits (32) with a 64-bit double-sided connector that was actually capable of operating at four (4) times the clock speed PCI ran at.  Further, PCI-X was able to transfer 1,064MB/s, which was very fast back in 1998 when it was introduced.  PCI-X was intended for use in servers and other computers that had very high computing loads.  PCI-X shares many protocols with PCI, it can be thought of like PCI's bigger brother.  PCI-X still exists, but it has been almost completely replaced by PCIe.
              </p>
              <h3 id="pcie">PCIe</h3>
              <figure>
                  <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/PCIExpress.jpg/512px-PCIExpress.jpg" alt="PCIExpress">
                  <figcaption>PCIe Expansion Slots</figcaption>
              </figure>
              <p>
                  PCIe, shorthand for PCI Express, is the modern standard expansion slot.  It was introduced in 2004 and has essentially replaced previous expansion slots. The major breakthrough of PCIe is that it communicates serially with the motherboard; all previous expansion slots communicated in parallel.  For example, if a PCI slot were sending some data to the motherboard, all the bits would go to the bus in a 32-bit wide parallel signal.  So each time data was transferred, it engaged the entire 32-bit bus.  With PCIe, communication with the motherboard is split into "lanes", which mean that a PCIe with 16 lanes can communicate 16 pieces of information to or from the motherboard at the same time.  More lanes equal faster data transfer.
              </p>
              <p>
                  PCIe has been evolving since 2004, with newer versions coming out regularly.  Versions 1.0 - 3.0 are currently in use throughout the PC industry, with Version 4.0 under development.
              </p>
              <p>
                  PCIe slots come in several variations (pictured above), which designate how many lanes each slot has.  The variations include:
              </p>
              <ul>
                  <li>x1 (by 1)</li>
                  <li>x2 (by 2)</li>
                  <li>x4 (by 4)</li>
                  <li>x8 (by 8)</li>
                  <li>x16 (by 16)</li>
              </ul>
              <p>
                  PCIe has impressive throughput, and version 4.0, which is expected in 2016-2017, will be unbelievably fast:
              </p>
              <figure>
                  <img class="img-responsive centered" src="https://aplusjourney.files.wordpress.com/2016/04/pcie.png" alt="PCIe">
                  <figcaption>PCIe Throughput via Wikipedia</figcaption>
              </figure>
              <p>
                  PCIe is also available for laptops in the form factor of Mini-PCIe, which has much of the power and capability of PCIe, but in a smaller form factor for laptops.  This allows laptops to be upgraded, adding WiFi expansion card or a mobile broadband expansion card are quite common using PCIe expansion slots.
              </p>
              <figure>
                  <img  class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/A_PCI_Express_Mini_Card_and_its_connector.jpg/512px-A_PCI_Express_Mini_Card_and_its_connector.jpg" alt="A PCI Express Mini Card and its connector">
                  <figcaption>Mini-PCIe Expansion Slot and WLAN Expansion Card</figcaption>
              </figure>
              <h3>Further Resources</h3>
              <p>
                  Mike Meyers.  <a class="inTextLink" href="http://www.amazon.ca/gp/product/125958951X/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&amp;camp=15121&amp;creative=330641&amp;creativeASIN=125958951X&amp;linkCode=as2&amp;tag=19thcentuhist-20"><em>CompTIA A+ Certification All-in-One Exam Guide, Ninth Edition (Exams 220-901 &amp; 220-902)</em></a>.  pp. 240-271.
              </p>
              <p>
                  Wikipedia - <a class="inTextLink" href="https://en.wikipedia.org/wiki/Bus_(computing)">Bus</a>, <a href="https://en.wikipedia.org/wiki/Conventional_PCI">PCI</a>, <a href="https://en.wikipedia.org/wiki/Accelerated_Graphics_Port">AGP</a>, <a href="https://en.wikipedia.org/wiki/PCI-X">PCI-X</a>, <a href="https://en.wikipedia.org/wiki/PCI_Express">PCI Express</a>
              </p>
              <p>
                  YouTube:
              </p>
              <iframe class="wideVideo" src="https://www.youtube.com/embed/-R6gsPo6LEQ" allowfullscreen></iframe>
          </article>
			</div>
			<div class="col-md-2">
			</div>
		</div>
<?php include '../includes/footer.php'; ?>
