<?php $title = 'Learn PHP @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
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
                          <li class="breadcrumb-item active">Learn PHP </li>
                      </ol>
                      <p>
                          PHP is a server-side scripting language which allows websites to be dynamic and interact with databases.  Unlike a static front-end HTML5 and CSS3 page, a PHP page uses the power of the webserver to process user requests and update the information displayed on a website.  PHP is used massively thoughout the web-programming industry, giants like Facebook and Google have used PHP extensively.  There are lots of PHP resources available and as I find good resources I'll post links to them below.  Also, I'll be developing some small sample scripts and posting them here as I explore the language.  Enjoy!
                      </p>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <p>
                            <a class="inTextLink" href="https://nbviewer.jupyter.org/github/bradpenney/jupyterNotebooks/blob/master/Intro%20to%20PHP%20Notebook.ipynb" target="_blank">Jupyter Notebook - Introduction to PHP</a>
                          </p>
                          <p>
                            Check out my Jupyter notebook which introduces PHP.  It's an evergrowing resource for the absolute beginner to PHP.
                          </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <a class="inTextLink" href="https://github.com/bradpenney/dataDropDatabasePublic" target="_blank">Data Drop Database</a>

                                <a class="inTextLink" href="https://github.com/bradpenney/dataDropDatabasePublic" target="_blank"><img class="thumbnail centered img-responsive" src="../images/programming/dataDropDatabaseScreenshot.png"></a>
                            </p>
                            <p>
                              I've created a simple network drop database tool that is essentially a MySQL database that runs off a PHP website.  In essence, a website queries a simple database that holds information about data drops in a building.  Users can search by data drop number, VLAN, room number, rack, switch, and other parameters.  Users can also insert, update and delete information within the GUI.  This is all published under an open-source software license (<a class="inTextLink" href="https://choosealicense.com/licenses/gpl-3.0/" target="_blank">GPL v3.0</a>), so anyone can freely use it as long as they share any improvements they make!
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <a class="inTextLink" href="https://secure.php.net/manual/en/" target="_blank">Official PHP Documentation</a>
                            </p>
                        </li>
                        <li class="list-group-item">
                          <p>
                            <a class="inTextLink" href="http://www.w3schools.com/php/default.asp" target="_blank">W3Schools.com PHP Tutorial</a>
                          </p>
                          <p>
                              As I mentioned in the section on front-end web development, W3Schools.com produces some useful tutorials for learning programming.  The PHP and SQL tutorials are very useful for both learning and reference:
                          </p>
                        </li>
                      </ul>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
