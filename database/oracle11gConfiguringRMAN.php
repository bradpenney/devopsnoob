<?php $title = 'Configuring Recovery Manager on Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Configuring Recovery Manager on Oracle 11g &amp; Oracle Linux</li>
                        </ol>
                        <h2>Configuring Recovery Manager on Oracle 11g &amp; Oracle Linux</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Script to Configure Recovery Manager (RMAN)</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/00RMANScriptPt1.png">
                                <figcaption>
                                  Script to Configure Recover Manager<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/workingWithRMAN.sql" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/01RMANScriptPt2.png">
                                <figcaption>Script to Configure Recovery Manager (Part 2)</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/01RMANScriptPt3.png">
                                <figcaption>Script to Configure Recovery Manager (Part 3)</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Pre-requisite Checks</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/02CheckForArchiving.png">
                                <figcaption>Check for Archiving</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/03ArchivingIsOn.png">
                                <figcaption>Archiving is On</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/04IfArchivingIsOff.png">
                                <figcaption>What to Do if Archiving is Off</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/05CheckForReadWrite.png">
                                <figcaption>Check for Read Write</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/06ReadWriteOn.png">
                                <figcaption>Read Write is On</figcaption>
                              </figure><figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/07EnsureArchiveLogHasDestination.png">
                                <figcaption>Ensure Archive Log Has a Destination</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/08ArchiveLogDestination.png">
                                <figcaption>Current Archive Log Destination</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/09ChangeArchiveLogIfDesired.png">
                                <figcaption>How to Change Archive Log Destionation (if desired)</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/10ShowParameterDBRecovery.png">
                                <figcaption>Show Parameter: DB Recovery</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/11DBDestinationFileLocation.png">
                                <figcaption>Database Destination File Location</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 3: Beginning with Recovery Manager (RMAN)</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/12CommandsToRunRMAN.png">
                                <figcaption>Run these commands in RMAN</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/13StartupRMAN.png">
                                <figcaption>Startup RMAN</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/14RMANConfigureControlfileAutobackupOn.png">
                                <figcaption>Configure Control File Autobackup</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/15ConfigureBackupOptimizationOn.png">
                                <figcaption>Turn on Backup Optimization</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/16ConfigureRetentionPolicy.png">
                                <figcaption>Configure Retention Policy</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 4: Configuring a Recovery User</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/17CheckDBConnectedTo.png">
                                <figcaption>Double-check which Database we're connected to</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/18ConnectedToCorrectDB.png">
                                <figcaption>Connected to the Correct Database</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/19MakeDirectoryForNewTablespace.png">
                                <figcaption>Make a directory for the new Tablespace in the file system</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/20CreateTablespaceRMAN_backup.png">
                                <figcaption>Create a Tablespace called RMAN_backup</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/21TablespaceCreated.png">
                                <figcaption>Tablespace Created Successfully</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/22CreateRecoveryManUser.png">
                                <figcaption>Create User named RecoveryMan</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/23RecoveryManCreated.png">
                                <figcaption>RecoveryMan Successfully Created</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/24AlterRecoveryManTablespace.png">
                                <figcaption>Assign default tablepsace for Recoveryman</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/25TablespaceAddedToRecoveryMan.png">
                                <figcaption>Tablspace succesfully added to RecoveryMan</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/26GrantRecoveryManRecoveryCatalog.png">
                                <figcaption>Grant RecoveryMan the Recovery Catalog</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/27GrantSucceeded.png">
                                <figcaption>Grant Succeeded</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/28GrantConnectResourceRecoveryMan.png">
                                <figcaption>Grant Connect &amp; Resource Privileges to RecoveryMan</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/27GrantSucceeded.png">
                                <figcaption>Grant Succeeded</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 5: Finalizing Configuration of Recovery Manager (RMAN)</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/30LogOntoRMAN.png">
                                <figcaption>Log into RMAN</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/31RecoveryCatalogCreated.png">
                                <figcaption>Recovery Catalog Created</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/32DirectionsToFinishSettingUpRMAN.png">
                                <figcaption>Directions To Finish Setting Up RMAN</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/33LoginToSQLPLUSAsRecoveryMan.png">
                                <figcaption>Login to SQLPLUS as RecoveryMan</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/34ShowUserIsRecoveryMan.png">
                                <figcaption>User is RecoveryMan</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/35RegisterDatabase.png">
                                <figcaption>Register the Database in RMAN</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/36ReportSchema.png">
                                <figcaption>Confirm that Database is Registered</figcaption>
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
