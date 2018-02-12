<?php $title = 'Working with Tablespaces on Oracle Linux &amp; Oracle 11g - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Working With Tablespaces on Oracle Linux &amp; Oracle 11g</li>
                        </ol>
                        <h2>Working With Tablespaces on Oracle Linux &amp; Oracle 11g</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Tablespaces are the logical holding containers of a schema within a database.  Tablespaces are stored in datafiles (.dbf) in the phyiscal file system.  This walk-through shows how to view the tablespaces that exist in your database, create tablespaces with multiple datafiles, and drop tablespaces to suit your needs within Oracle 11g.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: View Tablespaces</strong></h4>
                            <div>
                              <p>
                                Knowing the tablespaces and datafiles that currently exist in your database is the first step to managing them.  The script below allows you to describe the tables that hold the tablespaces and datafiles, and select specific entities for viewing:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/01ViewingDetailsAboutTablespaces.png">
                                <figcaption>
                                  Script to View Current Tablespaces<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/viewingDetailsAboutTablespaces.sql" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                Running the SELECT statements in the script above gets the information we're looking for here:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/02ShowDetailsAboutTablespaces.png">
                                <figcaption>Queries to View Current Tablespaces</figcaption>
                              </figure>
                              <p>
                                There are currently 8 tablespaces and datafiles, three of which have been created by users and five of which are system defaults:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/03CurrentTablespaces.png">
                                <figcaption>Current Tablespaces in the Database</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Create Tablespaces</strong></h4>
                            <div>
                              <p>
                                As a demonstration, we'll create some new tablespaces and datafiles.  Notice in the script that two separate datafiles are created per tablespace - in an ideal situation these would be created on separate storage devices.  For this demonstration, we're simply using the same location.  The script to perform this is below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/04CreateTableSpacesScript.png">
                                <figcaption>Script to Create Tablespaces<br />
                                <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/createTablespaces.sql" target="_blank">This Script on GitHub</a></figcaption>
                              </figure>
                              <p>
                                The log of this script shows that the tablespaces and datafiles were created:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/05CreateTableSpacesLog.png">
                                <figcaption>Log of Creating Tablespace</figcaption>
                              </figure>
                              <p>
                                By running the queries in Section 1, we can indpendently verify that the tablespaces were created:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/06ConfirmTablespacesExist.png">
                                <figcaption>Confirmation that Tablespaces Exist</figcaption>
                              </figure>
                              <p>
                                And the datafiles were created:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/07ConfirmDatafilesExist.png">
                                <figcaption>Confirmation that Datafiles Exist</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 3: Dropping Tablespaces</strong></h4>
                            <div>
                              <p>
                                Next, we'll drop one of the tablespaces just created in Section 2 (it was created for this demonstration only!).  Notice that the <code>DROP TABLESPACE</code> query includes <code>CONTENTS AND DATAFILES</code>, which completely erases the logical tablespace as well as the physical datafiles that were associated with the tablespace.  The script to complete this is below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/08DropTableSpacesScript.png">
                                <figcaption>Script to Drop Tablespaces<br />
                                <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/dropTablespace.sql" target="_blank">This Script on GitHub</a></figcaption>
                              </figure>
                              <p>
                                After running the above script, the log file shows that the tablespaces were dropped:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/09DropTableSpacesLog.png">
                                <figcaption>Log Showing Tablespaces Dropped</figcaption>
                              </figure>
                              <p>
                                Once again, it is a best practice to independently confirm that the tablespace was dropped.  Run the queries from Section 1 to confirm that the tablespace is actually gone:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/10ConfirmTableSpaceDropped.png">
                                <figcaption>Confirm Tablespaces Dropped</figcaption>
                              </figure>
                              <p>
                                Not only was the tablespace dropped, but the associated datafiles are gone as well:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithTablespaces/11ConfirmDatafileDropped.png">
                                <figcaption>Confirm Datafiles Dropped</figcaption>
                              </figure>
                            </div>
                          </div>
                        <br />
                        <?php include '../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
