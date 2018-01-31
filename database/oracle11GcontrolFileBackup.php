<?php $title = 'Oracle 11G Control File Backup Using Custom Scripts - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Oracle 11G Control File Backup Using Custom Scripts</li>
                        </ol>
                        <h2>Oracle 11G Control File Backup Using Scripts</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  Backing up a database is more than simply backing up the raw data.  The structure of the database is also critical to its functioning.  In this series of scripts, the control files, spfiles and a couple of .ora files are backed up.  This is a walk-through of completing a basic control file backup using custom scripts.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Learn to Manipulate Control Files</strong></h4>
                            <div>
                              <p>
                                Before we get into backing up control files, lets have a look at some of the commmands that can be used to manipulate control files and learn other key information about our database.  Here's an example of some of those commmands (to be run inside SQLPLUS):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/managingControlFiles/01manageControlFiles.png">
                                <figcaption>Script to Manage Control Files<br>
                                <a href="https://github.com/bradpenney/oracleScripts/blob/master/manageControlFiles.sql" target="_blank">Link To Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                The corresponding log file for this script is below.  Note that in the script, I added the keyword <code>append</code> to the location of the log file, therefore appending the log rather than recreating it from scratch:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/managingControlFiles/02manageControlFilesLog.png">
                                <figcaption>Log File of Script to Manage Control Files</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 2: Backup Control Files</strong></h4>
                            <div>
                              <p>
                                Backing up the control files of a database can be done via two different methods, both of which are demonstrated below  This script is to be run inside of SQLPLUS.  They both have similar output, but the first puts the output into a trace file while the second puts it into a stand-alone SQL file.  The stand-alone file is actually encrypted by default.  The two methods are demonstrated below.  For the second method, you'll need to be sure the directory you're pointing the output to is already created (obviously!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/managingControlFiles/03controlFileBackupScript.png">
                                <figcaption>Script to Backup Control Files<br>
                                <a href="https://github.com/bradpenney/oracleScripts/blob/master/createControlFileBackup.sql" target="_blank">Link To Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                The corresponding log file that was created will look like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/managingControlFiles/04controlFileLog.png">
                                <figcaption>Log File of Script to Backup Control Files</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 3: Backup SPFiles</strong></h4>
                            <div>
                              <p>
                                The control files are important, but so are the parameter files (.pfile).  A .spfile is simply an encrypted version of a .pfile.  Oracle 11G also has a utility in SQLPLUS to backup both spfiles and pfiles.  This technique is illustrated below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/managingControlFiles/05spfileBackupScript.png">
                                <figcaption>Script to Backup Control Files<br>
                                <a href="https://github.com/bradpenney/oracleScripts/blob/master/backupSPfiles.sql" target="_blank">Link To Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                This script will create a log file that looks like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/managingControlFiles/06spfilebackuplog.png">
                                <figcaption>Log File of Script to Backup SPFiles</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 4: Backup Listener and TNSName Files</strong></h4>
                            <div>
                              <p>
                                Unlike control files and spfiles, some of the .ora files which need to be backed up can be done through simple BASH scripting.  Here's an example of backing up listener.ora and tnsnames.ora
                              </p>
                              <figure>
                                
                              </figure>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
