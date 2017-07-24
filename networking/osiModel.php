<?php $title = 'Introduction to the OSI Model @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Networking @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>networking.php">Learn Networking</a></li>
                          <li class="breadcrumb-item active">OSI Model Introduction</li>
                      </ol>
                      <h2>
                          OSI Model Introduction
                     </h2>
                     <p>
                         The Open Systems Interconnect (OSI) Model is a computer networking theoretical construct that allows humans to understand how computers are communicating with each other.  It is divided into seven different layers, each with its own purpose and protocols. The seven layers are as follows:
                     </p>
                     <figure>
                         <a title="By Dino.korah [GFDL (http://www.gnu.org/copyleft/fdl.html) or CC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0/)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File%3AOsi-model.png">
                             <img class="img-responsive centered" src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Osi-model.png" target="_blank">
                         </a>
                         <figcaption>OSI Model<br />Via <a href="https://commons.wikimedia.org/wiki/File%3AOsi-model.png" target="_blank">Wikimedia Commons</a></figcaption>
                     </figure>
                     <p>
                         The top three layers all have to do with the individual piece of software the user is running on the computer (for example, Adobe Photoshop).  The Transport and Network layers are where the data that program is communicating to other computers using is split up and labelled, getting it ready to send.  The Transport layer splits the data into segments, and the Network Layer adds an IP Address - making the data into something the average user may have heard of: packets.
                     </p>
                     <p>
                         However, while the Transport and Network layers are interesting, for physical networking the real magic happens in the Data Link layer, which takes those packets, data which an individual computer understands, and prepares it to be converted into bits in the Physical Layer.  In essence, packets enter the Data  Link layer as data, and exit it in pulses of electricity which are either "ON" or "OFF", the proverbial 1's and 0's that computers communicate with.  In reality, its more that the wire that connects the two computers is blinking "ON" (meaning electrical current, 5V) or "OFF" (no current) at incredibly rapid rates.
                     </p>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
