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
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  ADD DESCRIPTION!
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Determine the Location of the Current Redo Logs</strong></h4>
                            <div>
                              <p>

                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/01LocationOfCurrentRedoLogs.png">
                                <figcaption>Location of Current Redo Logs</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 2: Turn On Archiving</strong></h4>
                            <div>
                              <p>
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/02ShutdownImmediate.png">
                                <figcaption>Shutdown The Database</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/03StartupMount.png">
                                <figcaption>Startup Database using <kbd>startup mount</kbd></figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/04AlterDatabaseArchivelog.png">
                                <figcaption> </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/05AlterDatabaseOpen.png">
                                <figcaption>Startup Database Completely</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/06ConfirmArchivingOn.png">
                                <figcaption>Confirm that Archiving is Enabled</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 3: Create Group of Redo Logs</strong></h4>
                            <div>
                              <p>
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/07CreateDirectoryForRedoLogs.png">
                                <figcaption>Create File System Directory for Redo Logs</figcaption>
                              </figure><figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/08DropLogFile3.png">
                                <figcaption>Dropping Current Group 3</figcaption>
                              </figure><figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithRedoLogs/09AddLogfile.png">
                                <figcaption>Adding Log Files</figcaption>
                              </figure><figure>
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
