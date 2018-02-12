<?php $title = 'Adjusting Memory Parameters on Oracle Linux &amp; Oracle 11g - DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Databases @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>db.php">Learn Databases</a></li>
                          <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>database/dbManagement.php">Database Management</a></li>
                            <li class="breadcrumb-item active">Adjusting Memory Parameters on Oracle Linux &amp; Oracle 11g</li>
                        </ol>
                        <h2>Adjusting Memory Parameters on Oracle Linux &amp; Oracle 11g</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Determining how much memory is available to the database is another crucial aspect to database tuning and performance.  Having more memory available than will ever be used is a poor use of resources, however, not allocating enough memory to a database can cause a signficant reduction in performance.  This walk-through shows how to change memory parameters to suit your needs within Oracle 11g.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Resources Utilized</strong></h4>
                            <div>
                              <p>
                                Burleson Consulting offers some really excellent resources for Oracle 11g administrators.  In preparation for the task of adjusting memory parameters, read <a class="inTextLink" href="http://www.dba-oracle.com/tips_oracle_spfile_example.htm" target="_blank">Oracle Spfile Example</a>, which demonstrates the importance of backing up the parameter files of a database before adjusting the parameters.
                              </p>
                              <p>
                                In addition to the above article, this video was followed closely:
                              </p>
                              <iframe class="wideVideo" src="https://www.youtube.com/embed/giTNGSfNPJg" allowfullscreen></iframe>
                              <p>
                                The finished script for the entire process looks like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/02CodeToAdjustMemoryParameters.png">
                                <figcaption>
                                  Entire Code to Adjust Memory Parameters<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/decreaseMemoryTarget.sql" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Backups &amp; Gathering Information</strong></h4>
                            <div>
                              <p>
                                Before we get started adjusting the memory parameters, let's have a look at where they currently stand.  To do this, we'll peform a <kbd>startup mount</kbd>, which will allow us to see the memory parameters and adjust them without damaging the database:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/01StartupMount.png">
                                <figcaption>Oracle 11g Startup Mount</figcaption>
                              </figure>
                              <p>
                                Next, we'll do a backup of the spfile before making any changes:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/03CreateBackupOfSpfile.png">
                                <figcaption>Backup the Spfile Before Making Changes</figcaption>
                              </figure>
                              <p>
                                And check the log to see that this actually worked:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/04CreateBackupOfSpfileLog.png">
                                <figcaption>Confirm the backup was created in the log</figcaption>
                              </figure>
                              <p>
                                Now we're ready to show the existing memory parameters of the database:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/05ShowParameterMemory.png">
                                <figcaption>Show Parameter Memory</figcaption>
                              </figure>
                              <p>
                                Which results in the following output, either in the log or the terminal (or both depending on your output options):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/06ShowParameterMemoryLog.png">
                                <figcaption>Current Memory Parameters</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 3: Adjusting Memory Parameters</strong></h4>
                            <div>
                              <p>
                                So now we're ready to actually adjust the memory parameters.  This is done with the following commands:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/07AlterMemoryParameters.png">
                                <figcaption>Alter Memory Parameters</figcaption>
                              </figure>
                              <p>
                                As usual, confirm in the log or the terminal output that the alteration actually occurred:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/08SystemSetAltered.png">
                                <figcaption>System Set Altered</figcaption>
                              </figure>
                              <p>
                                In order to reload from the Spfile, we'll shutdown the databse and start it back up right away.  This is necessary because we chose a scope of <code>spfile</code> earlier.  There is another flag, <code>memory</code>, which only changes the current session.  <code>spfile</code> changes the database for every future session (which is what we want in this case).  So a quick shutdown:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/09ShutdownDatabase.png">
                                <figcaption>Shutdown Database for Reload</figcaption>
                              </figure>
                              <p>
                                And then a full startup:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/10StartupDatabase.png">
                                <figcaption>Full Startup of Database</figcaption>
                              </figure>
                              <p>
                                Finally, a quick check to see that the memory parameters actually changed as expected:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/adjustingMemoryParameters/11ShowParameterMemory.png">
                                <figcaption>Memory Parameters Successfully Changed</figcaption>
                              </figure>
                              <p>
                                Success!  Remember, the parameters were changed in this exercise to an arbitrary 500MB.  Adjust your memory parameters to suit your needs, and monitor the resulting performance changes.  You may need to adjust these several times to get the performance and tuning you want from your database.
                              </p>
                            </div>
                          </div>
                        <br />
                        <?php include '../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
