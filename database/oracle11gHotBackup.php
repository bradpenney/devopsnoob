<?php $title = 'Hot Backup with Recovery Manager on Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Hot Backup with Recovery Manager on Oracle 11g &amp; Oracle Linux</li>
                        </ol>
                        <h2>Hot Backup with Recovery Manager on Oracle 11g &amp; Oracle Linux</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Backup &amp; Recovery of Databases is a major focus of the Database Adminstrator.  Backups are divided into two categories: Hot and Cold.  Cold backups occur when the database is turned off completely.  Much more important are hot backups, which occur while the database is still running.  Systems that need high availablity (so called "five nines (99.999%)" availability systems) utilize hot backups on a regular schedule.  In this tutorial, we'll use Recovery Manager to perform &amp; schedule hot backups on an Oracle 11g database.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Performing a Recovery Manager Full Backup with Redo Logs Using a BASH Script</strong></h4>
                            <div>
                              <p>
                                Rather than run these commands directly in RMAN, let's make this process a little more repeatable by creating a BASH script, which can be run repeatedly at will.  This requires opening a terminal in the directory where you store your scripts and runnning the command <code>touch &lt;myNewFilename&gt;</code>.  This will result in an empty BASH script.  We'll also need to make our new file executable in order to run it separately.  This means we'll have to add the "executable" permission using <code>chmod +x &lt;myNewFilename&gt;</code>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/01CreateScript.png">
                                <figcaption>
                                  Create Empty BASH Script & Add Executability
                                </figcaption>
                              </figure>
                              <p>
                                Next, we'll write a BASH script that will connect to RMAN (similar to in <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gMoveTablespaceWithRMAN.php">this post</a>), and then execute the command to run a full backup, including the redo logs.  This will only work if redo logs are turned on.  For more information about how to check if redo logs are turned on (and how to turn them on if they're off), check out <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GworkingWithRedoLogs.php">Working with Redo Logs in Oracle 11g</a>.  The finished script will look like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/02RMANFullBackupWithLogs.png">
                                <figcaption>
                                  BASH Script to Run Full Backup with Redo Logs using Recovery Manager<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/RMANFullDBBackupWithLogs.sh" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                After running the script, check the log to see if any errors occurred. The partial log looks like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/03RMANFullBackupWithLogsPartialOutput.png">
                                <figcaption>
                                  Partial Output of Full Backup with Redo Logs with Recovery Manager
                                </figcaption>
                              </figure>
                              <p>
                                While this type of backup works fine, it is storage intensive.  Incremental and Cumulative backups are much preferred alternatives, which we'll discuss in the next section.
                              </p>
                            </div>
                            <h4><strong>Section 2: Writing Scheduled Recovery Manager Backup BASH Scripts</strong></h4>
                            <div>
                              <p>
                                Incremental backups are a much more system-friendly way to backup a database.  There are several levels and modes to incremental backups, and the details on this can be a little intimidating to the beginning administrator.  Suffice to say, <strong>Incremental Level 0 RMAN Backup</strong> is essentially a full backup and should be run regularly (at least once a week).  The BASH script to perform a Level 0 Incremental Backup with RMAN is as follows:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/06RMANBackupIncrementalLevel0.png">
                                <figcaption>
                                  Recovery Manager Incremental Backup Level 0 (Full Backup)<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/RMANBackupIncrementalLevel0.sh" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                An <strong>Incremental Level 1 RMAN Backup</strong> takes only the database blocks that have been modified since the last incremental backup (whether that be a Level 0 or a Level 1).  The BASH script to perform a backup of this kind looks like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/07RMANBackupIncrementalLevel1.png">
                                <figcaption>
                                  Recovery Manager Incremental Backup Level 1<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/RMANBackupIncrementalLevel1.sh" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                The final type of RMAN backup we'll discuss is a <strong>Cumulative Level 1 RMAN Backup</strong>, which does a backup of all the database blocks that have been modifed since the last full (Incremental Level 0) backup.  This means that cumulative backups are more thorough than Incremntal Level 1, but less thorough than Incremental Level 0.  The BASH script to perform one of these looks like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/05RMANBackupCumulativeLevel1.png">
                                <figcaption>
                                  Recovery Manager Cumulative Backup Level 1<br />
                                  <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/RMANBackupCumulativeLevel1.sh" target="_blank">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                Each of these scripts was created by opening a the previous script and using the "Save As..." function.  The execution permissions don't move to the new file using this method - however, it saves a lot of typing.  Therefore, we'll need to set each of the new scripts to executable using terminal:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/04AddingExecuteToScripts.png">
                                <figcaption>
                                  Adding Execution Privileges To Scripts
                                </figcaption>
                              </figure>
                              <p>
                                We're now ready to run each of the scripts and check the logs to make sure there aren't any errors.  If this test succeeds, we'll be ready to schedule each of the scripts to run whenever makes sense in our organization.  The log for the first script, Level 0 Incremental Backup is below.  Its worth noting here that this script must be run <em>before</em> the other two - there is no way to do an Incremental Level 1 or a Cumulative Level 1 if you haven't run an Incremental Level 0 first:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/08IncrementalLevel0Log.png">
                                <figcaption>
                                  Log of Incremental Backup Level 0
                                </figcaption>
                              </figure>
                              <p>
                                Success! Now we run Incremental Level 1 and check the log:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/09IncrementalLevel1Log.png">
                                <figcaption>
                                  Log of Incremental Backup Level 1
                                </figcaption>
                              </figure>
                              <p>
                                This log also looks correct so we're ready to test our last script, the Cumulative Level 1 Backup:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/10CumulativeLevel1Log.png">
                                <figcaption>
                                  Log of Cumulative Backup Level 1
                                </figcaption>
                              </figure>
                              <p>
                                So it appears each of our three incremental backup scripts are working.  In the next section, we'll look at placing them in on schedule.
                              </p>
                              <p>
                                For more information about types of Recovery Manager backups, check out <a class="inTextLink" href="http://dbatricksworld.com/how-to-take-oracle-database-incremental-backup-with-rman-backup-utility-rman-part-3/" target="_blank">How to take Oracle Database Incremental Backup with RMAN Backup Utility</a>.
                              </p>
                            </div>
                            <h4><strong>Section 3: Scheduling Recovery Manager Backups BASH Scripts with Crontab</strong></h4>
                            <div>
                              <p>
                                In Linux, programs are scheduled to run in a program called CronTab.  In essence, you schedule a CronTab to run at a specific time (minute, hour, day, month, day of week), and then you tell it to run a BASH script you've written (or at least have reviewed &amp; understand).  Then, the system will run the job once the appropriate time has come.  CronTabs can also be setup to run on reboot, on start, on shutdown, etc.  This makes the automation of system jobs much more simple - for example, setting up a CronTab to run a BASH script to map a drive on startup means you'll never have to manually do it again.  CronTab is something every DevOps professional should be proficient with.
                              </p>
                              <p>
                                Installing CronTab on Fedora-based systems (Red Hat Enterprise Linux, Centos, Oracle Linux, etc.) is a relatively simple process.  The process for Cento 7 and Oracle Linux 7 is outlined in <a class="inTextLink" href="https://stackoverflow.com/questions/21802223/how-to-install-crontab-on-centos" target="_blank">How to install crontab on Centos</a>.  Once Crontab is installed, you'll need to start it and schedule the BASH scripts we created in Section 2 to run.  Start CronTab with <code>crontab -e</code> in terminal:
                              </p>
                              <figure>                            
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/11StartCrontab.png">
                                <figcaption>
                                  Starting Crontab
                                </figcaption>
                              </figure>
                              <p>
                                Using the BASH scripts we created in Section 2, let's create a backup schedule for the database.  On Saturday at 9pm, we'll run a full backup.  On Monday at 6am and 10am, we'll run a Level 1 Incremental Backup.  Then on Tuesday at 9pm, we'll run a Cumulative Level 1 Backup.  This is just a sample schedule that can be adjusted to fit whatever makes sense in your organization.  The Crontab to do this would look like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/hotBackup/12CrontabBackupScheduled.png">
                                <figcaption>
                                  Schedule of Backups in Crontab
                                </figcaption>
                              </figure>
                              <p>
                                Of course, a prudent DevOps professional would zealously check the logs of these backups after they're scheduled to run - put a note in your daily calendar to do so.  Also, its easy to set up CronTab to email you if there is an error.
                              </p>
                              <p>
                                Ensuring your backups are running as expected, when expected, is a fundamental expectation of a Database Administrator (and/or DevOps Professional!).
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
