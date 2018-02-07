<?php $title = 'Working with Redo Logs in Oracle 11g - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Working with Redo Logs in Oracle 11g</li>
                        </ol>
                        <h2>Working with Redo Logs in Oracle 11g</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  Redo Logs are crucial files that record the history of all transactions in the database (both DML and DDL).  Industry-standard best practicies is to split redo logs into at least two groups, with two files in each group.  More groups and more files (within reason) are recommended.  This step-by-step guide will illustrate some of the basics about working with redo logs.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Determine the Location of the Current Redo Logs</strong></h4>
                            <div>
                              <p>
                                Within Oracle 11g, the query below shows the location of the current redo logs.  Please note that this query was run in SQL Developer, a GUI database management tool that works nicely with Oracle 11g:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/01LocationOfCurrentRedoLogs.png">
                                <figcaption>Location of Current Redo Logs</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 2: Turn On Archiving Mode</strong></h4>
                            <div>
                              <p>
                                In order for your database to be able to perform point in time recover operations or online backups, you'll need to turn Archive Mode on.  For more information about this, visit <a href="http://www.dba-oracle.com/concepts/archivelog_archived_redo_logs.htm" target="_blank"><u>Administer the Archived Redo Logs from <em>Burleson Consulting</em></u></a>.  The first step to turning Acrhiving Mode on is to shutdown the database:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/02ShutdownImmediate.png">
                                <figcaption>Shutdown The Database</figcaption>
                              </figure>
                              <p>
                                Restart the database using <kbd>startup mount</kbd>, which starts the databse but does not fully load it.  In this mode, the redo logs are not active (and the database would not respond to applications connected to it properly):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/03StartupMount.png">
                                <figcaption>Partial Database Startup</figcaption>
                              </figure>
                              <p>
                                Next, issue the command <kbd>ALTER DATABSE ARCHIVELOG;</kbd>, which activates Archiving Mode:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/04AlterDatabaseArchivelog.png">
                                <figcaption>Alter the Database and turn on Archving Mode</figcaption>
                              </figure>
                              <p>
                                Next, you'll need to fully start up the database by issuing the <kbd>ALTER DATABASE OPEN;</kbd> command:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/05AlterDatabaseOpen.png">
                                <figcaption>Startup Database Completely</figcaption>
                              </figure>
                              <p>
                                At this point, Archive Mode is enabled.  Confirm that with <kbd>ARCHIVE LOG LIST;</kbd>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/06ConfirmArchivingOn.png">
                                <figcaption>Confirm that Archiving is Enabled</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 3: Create Group of Redo Logs</strong></h4>
                            <div>
                              <p>
                                Creating a new group of redo logs in a non-default location (on a different disk preferrably!) is a really good idea.  First, create a file system directory to put the redo logs in:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/07CreateDirectoryForRedoLogs.png">
                                <figcaption>Create File System Directory for Redo Logs</figcaption>
                              </figure>
                              <p>
                                As was shown in Step 1 above, there are already 3 redo log groups in this database.  It is possible to create a fourth group, but this seems like overkill in this sample database.  There are now two options, moving the redo log file, or dropping the redo log file and recreating it.  In this case, we'll choose the latter:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/08DropLogFile3.png">
                                <figcaption>Dropping Current Group 3</figcaption>
                              </figure>
                              <p>
                                Next, create a new group 3 in the location where you created the filesystem directory for it.  Note that on this system, this is simply a non-default directory.  In a production environment, this would be on an entirely separate storage device:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/09AddLogfile.png">
                                <figcaption>Adding Log Files</figcaption>
                              </figure>
                              <p>
                                Confirming that the redo logs were actually created successfully involves running the same query as we ran in Step 1 to determine the current location of the redo logs:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/10ConfirmRedoLogsCreated.png">
                                <figcaption>Confirm that Redo Logs Were Created</figcaption>
                              </figure>
                            </div>
                          </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
