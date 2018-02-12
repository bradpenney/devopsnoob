<?php $title = 'Converting Decimal to Binary @ DevOpsNoob.com'; ?>
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
                          <li class="breadcrumb-item active">Converting Decimal to Binary</li>
                      </ol>
                      <h2>
                         Converting Decimal to Binary
                     </h2>
                     <p>
                         Binary is a 2-base numbering system.  Decimal is a 10-base numbering system.  Computers speak to each other using binary numbers, but humans (except extreme nerds perhaps), use the decimal system.  Converting between the two is actually a fairly simple process.
                     </p>
                     <p>
                         It may seem a little confusing to the beginner that a binary number <code>10110010</code> equals 178 in decimal.  Here's a chart of how:
                     </p>
                     <figure>
                         <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/binaryToDecimalChart.png">
                         <figcaption>Converting From Binary to Decimal</figcaption>
                     </figure>
                     <?php include '../includes/disqus.php'; ?>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
