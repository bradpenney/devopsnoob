<?php $title = 'Intro to PHP @ DevOpsNoob.com'; ?>
<?php include '../../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn PHP @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>programming.php">Learn Programming</a></li>
                          <li class="breadcrumb-item active">Intro to PHP</li>
                      </ol>
                      <p class="text-left">
                          PHP is a server-side scripting language which allows websites to be dynamic and interact with databases.  Unlike a static front-end HTML5 and CSS3 page, a PHP page uses the power of the webserver to process user requests and update the information displayed on a website.  PHP is used massively thoughout the web-programming industry, giants like Facebook and Google have used PHP extensively.
                      </p>
                      <p class="text-left">
                        On of the hurdles many new web developers face when trying to learn and experiment with PHP is the fact that they need access to a websever.  It is possible to use a live webserver, but this isn't likely for a new web developer.  A much smarter solution is to make your local computer a webserver.  This can be done whether you're running Windows, Linux or Mac.  Depending on your operating system, these are known as a WAMP(Windows), a LAMP(Linux) or MAMP(Mac).
                      </p>
                      <ol>
                        <li>Instructions for Windows</li>
                        <li>Instructions for Linux</li>
                        <li>Instructions for Mac</li>
                      </ol>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
