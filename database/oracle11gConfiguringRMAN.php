<?php $title = 'Configuring Recovery Manager on Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Databases @ DevOpsNoob</h1>
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
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Recovery Manager, RMAN, is the way that Oracle 11g protects its databases from data loss. This brief tutorial walks through implementing a basic RMAN configuration.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Script to Configure Recovery Manager (RMAN)</strong></h4>
                            <div>
                              <p>
                                The script below is used to complete the entire exercise.  Download it from GitHub <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/workingWithRMAN.sql" target="_blank">here</a>.  The entire script is commented out (initially) and is meant to be uncommented one query at a time and run repeatedly.  In the sections that cannot be completed in SQL, clear directions are given as to the commands that need to be performed either in terminal, RMAN or SQLPLUS.  Also of note, this script is not set up to log automatically, please add this before running.  In this session, the screenshots are being used as the log.
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/00RMANScriptPt1.png">
                                <figcaption>
                                  Script to Configure Recover Manager Part 1
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/01RMANScriptPt2.png">
                                <figcaption>
                                  Script to Configure Recovery Manager Part 2<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/workingWithRMAN.sql" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Prerequisite Checks</strong></h4>
                            <div>
                              <p>
                                There are several checks that need to be perfomed before setting up RMAN.  The first of these is to check to see if the database is archiving.  For more information about ArchiveMode, check out <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GworkingWithRedoLogs.php">Working with Redo Logs in Oracle 11g</a>.  To check to see if archiving is on, run the following query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/02CheckForArchiving.png">
                                <figcaption>Check for Archiving</figcaption>
                              </figure>
                              <p>
                                In this case, archiving is activiated:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/03ArchivingIsOn.png">
                                <figcaption>Archiving is On</figcaption>
                              </figure>
                              <p>
                                If archiving is not activiated, follow the directions below.  If this fails, check <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GworkingWithRedoLogs.php">Working with Redo Logs in Oracle 11g</a>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/04IfArchivingIsOff.png">
                                <figcaption>What to Do if Archiving is Off</figcaption>
                              </figure>
                              <p>
                                The next check is to ensure that the database is in Read/Write mode.  If the database is not in Read/Write, Recovery Manager won't work properly:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/05CheckForReadWrite.png">
                                <figcaption>Check for Read Write</figcaption>
                              </figure>
                              <p>
                                Read/Write is the mode for this database:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/06ReadWriteOn.png">
                                <figcaption>Read Write is On</figcaption>
                              </figure>
                              <p>
                                Archive Log List shows various information about the archiving that is happening within the database.  If archiving was turned on above, this should not create an error:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/07EnsureArchiveLogHasDestination.png">
                                <figcaption>Ensure Archive Log Has a Destination</figcaption>
                              </figure>
                              <p>
                                The information you recieve should resemble the following, which outlines that archving is on, it has a destination (a file in the file system), and has log sequences:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/08ArchiveLogDestination.png">
                                <figcaption>Current Archive Log Destination</figcaption>
                              </figure>
                              <p>
                                If you'd like, you can specify exactly where you'd like the log destination to be using the commands outlined below.  A word of caution: if you use this command, shut down your database completely and reload it before proceeding.  Its critical that you reload your <code>spfile</code> for these commands to work properly:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/09ChangeArchiveLogIfDesired.png">
                                <figcaption>How to Change Archive Log Destionation (if desired)</figcaption>
                              </figure>
                              <p>
                                Since moving the log destination file is optional, we'll leave it where it is.  The final prerequisite check is to confirm the database recovery destination using the following query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/10ShowParameterDBRecovery.png">
                                <figcaption>Show Parameter: DB Recovery Destination</figcaption>
                              </figure>
                              <p>
                                Which should give you a result similar to this one (depending on your setup!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/11DBDestinationFileLocation.png">
                                <figcaption>Database Destination File Location</figcaption>
                              </figure>
                              <p>
                                If all of these checks have succeeded, you're ready to move on to begin setup of Recovery Manager.
                              </p>
                            </div>
                            <h4><strong>Section 3: Beginning with Recovery Manager (RMAN)</strong></h4>
                            <div>
                              <p>
                                Beginning the setup of Recovery Manager is done in the terminal.  In case you're wondering, Recovery Manager is automatically built into Oracle 11g, just like SQLPLUS.  The commands to begin working with RMAN are in the script as follows:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/12CommandsToRunRMAN.png">
                                <figcaption>Run these commands in RMAN</figcaption>
                              </figure>
                              <p>
                                To get started with RMAN, from terminal, type <code>rman target /</code>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/13StartupRMAN.png">
                                <figcaption>Startup RMAN</figcaption>
                              </figure>
                              <p>
                                The first step is to configure the control file for auto backup.  This means that RMAN will automatically backup the control file and server parameters file (spfile) whenever there is a change.  For more information about how this works, check Orcale Doc's <a class="inTextLink" href="https://docs.oracle.com/cd/B19306_01/backup.102/b14192/setup004.htm#i1017907" target="_blank">Configuring Control File and Server Parameter File Autobackup</a>.  Run the command <code>configure controlfile autobackup on;</code>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/14RMANConfigureControlfileAutobackupOn.png">
                                <figcaption>Configure Control File Autobackup</figcaption>
                              </figure>
                              <p>
                                Next, we'll turn on Backup Optimization.  In essence, this ensure that backups are only made if the files have changed, identical files do not get backed up.  For more details about how this works, checkout Oracle Doc's <a class="inTextLink" href="https://docs.oracle.com/cd/B28359_01/backup.111/b28270/rcmconfb.htm#BRADV138" target="_blank">Configuring Backup Optimization</a>.  Run the commmand <code>configure controlfile backup optimization on;</code>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/15ConfigureBackupOptimizationOn.png">
                                <figcaption>Turn on Backup Optimization</figcaption>
                              </figure>
                              <p>
                                The final step in this section is to set the Backup Retention Policy.  This sets how long the backups are stored for.  This is endlessly modifiable, for more info check Oracle Doc's <a class="inTextLink" href="https://docs.oracle.com/cd/B28359_01/backup.111/b28270/rcmconfb.htm#BRADV8400" target="_blank">Configuring the Backup Retention Policy</a>.  To set up the retention policy for seven days, type <code>configure retention policy to recovery window of 7 days;</code> (which is as close to plain English as any command ever is!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/16ConfigureRetentionPolicy.png">
                                <figcaption>Configure Retention Policy</figcaption>
                              </figure>
                              <p>
                                Once these steps are complete, log out of RMAN by typing <code>exit</code>.  Move on to the next steps!
                              </p>
                            </div>
                            <h4><strong>Section 4: Configuring a Recovery User</strong></h4>
                            <div>
                              <p>
                                In this section, we'll add a recovery user that will be able to access the backups that Recovery Manager creates.  First, however, be sure you're still in the correct database by logging into SQLPLUS and runnning the query below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/17CheckDBConnectedTo.png">
                                <figcaption>Double-check which Database we're connected to</figcaption>
                              </figure>
                              <p>
                                And we're still connected to the correct database:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/18ConnectedToCorrectDB.png">
                                <figcaption>Connected to the Correct Database</figcaption>
                              </figure>
                              <p>
                                In the coming section, we're going to create a tablespace for the user we're going to create.  First, we'll need to create a directory in the file system. The location depends on your system:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/19MakeDirectoryForNewTablespace.png">
                                <figcaption>Make a directory for the new Tablespace in the file system</figcaption>
                              </figure>
                              <p>
                                Back in SQLPLUS (or SQL Developer), we'll create a tablespace for our recovery user.  Creating and modifying tablespaces is covered in detail in <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gWorkingWithTableSpaces.php">Working with Tablespaces in Oracle 11g</a>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/20CreateTablespaceRMAN_backup.png">
                                <figcaption>Create a Tablespace called RMAN_backup</figcaption>
                              </figure>
                              <p>
                                The tablespace, RMAN_backup, was created successfully:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/21TablespaceCreated.png">
                                <figcaption>Tablespace Created Successfully</figcaption>
                              </figure>
                              <p>
                                A specific user is created to manage the recovery database.  The user is known as "RecoveryMan" in this demonstration, although a more difficult to guess name might be a good idea in a production environment!  Also, it might be a good idea to use a better password that "recoveryman":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/22CreateRecoveryManUser.png">
                                <figcaption>Create User named RecoveryMan</figcaption>
                              </figure>
                              <p>
                                The user is created successfully:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/23RecoveryManCreated.png">
                                <figcaption>RecoveryMan Successfully Created</figcaption>
                              </figure>
                              <p>
                                RecoveryMan will need a default tablespace, in this case, RMAN_backup:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/24AlterRecoveryManTablespace.png">
                                <figcaption>Assign default tablepsace for Recoveryman</figcaption>
                              </figure>
                              <p>
                                RecoveryMan was successfully assigned to the RMAN_backup tablespace:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/25TablespaceAddedToRecoveryMan.png">
                                <figcaption>Tablespace succesfully added to RecoveryMan</figcaption>
                              </figure>
                              <p>
                                RecoveryMan needs to be the owner of the recovery catalog:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/26GrantRecoveryManRecoveryCatalog.png">
                                <figcaption>Grant RecoveryMan the Recovery Catalog</figcaption>
                              </figure>
                              <p>
                                The grant was successful:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/27GrantSucceeded.png">
                                <figcaption>Grant Succeeded</figcaption>
                              </figure>
                              <p>
                                Finally, RecoveryMan will need connect and resource privileges:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/28GrantConnectResourceRecoveryMan.png">
                                <figcaption>Grant Connect &amp; Resource Privileges to RecoveryMan</figcaption>
                              </figure>
                              <p>
                                The grant was successful:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/27GrantSucceeded.png">
                                <figcaption>Grant Succeeded</figcaption>
                              </figure>
                              <p>
                                At this point, you've done some initial configuration of RMAN, created the RecoveryMan user, assigned a tablespace, and granted permissions to RecoveryMan.  In the next section, the intial RMAN setup will be complete.
                              </p>
                            </div>
                            <h4><strong>Section 5: Finalizing Basic Configuration of Recovery Manager (RMAN)</strong></h4>
                            <div>
                              <p>
                                In this final section, you'll need to follow the instructions pictured below.  These instructions are included in <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/workingWithRMAN.sql" target="_blank">the script</a> simply to document how to complete this process in one place:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/32DirectionsToFinishSettingUpRMAN.png">
                                <figcaption>Directions To Finish Setting Up RMAN</figcaption>
                              </figure>
                              <p>
                                Log into RMAN as below.  Note that the "@bkuprec" section of the command will need to be modified to the name of your database:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/30LogOntoRMAN.png">
                                <figcaption>Log into RMAN</figcaption>
                              </figure>
                              <p>
                                Next, its time to create the recovery catalog. For more info check Oracle Doc's <a class="inTextLink" href="https://docs.oracle.com/database/121/RCMRF/rcmsynta012.htm#RCMRF117" target="_blank">Create Catalog</a>.  The command is below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/31RecoveryCatalogCreated.png">
                                <figcaption>Recovery Catalog Created</figcaption>
                              </figure>
                              <p>
                                Next, its time to check to see if you can log into SQLPLUS as "Recoveryman".  Remember we set the password to "recoveryman" above:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/33LoginToSQLPLUSAsRecoveryMan.png">
                                <figcaption>Login to SQLPLUS as RecoveryMan</figcaption>
                              </figure>
                              <p>
                                Show the user to confirm that RecoveryMan works:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/34ShowUserIsRecoveryMan.png">
                                <figcaption>User is RecoveryMan</figcaption>
                              </figure>
                              <p>
                                Registering the database in the recovery catalog is the next step.  This is done so that RMAN can maintain the database's metadata.  For more information check out Oracle Doc's
                                <a class="inTextLink" href="https://docs.oracle.com/cd/B28359_01/backup.111/b28273/rcmsynta031.htm#RCMRF141" target="_blank">Register Database</a>.
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/35RegisterDatabase.png">
                                <figcaption>Register the Database in RMAN</figcaption>
                              </figure>
                              <p>
                                The final step in this process is to confirm that all the components of the database are registered in the recovery catalog.  This is performed with this command:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/configuringRMAN/36ReportSchema.png">
                                <figcaption>Confirm that Database is Registered</figcaption>
                              </figure>
                              <p>
                                If your output is similar to the one above (based on your environment), then you've successfully implemented a basic configuration of RMAN!
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
