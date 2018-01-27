<?php $title = 'Oracle 11G Database Install on Oracle Linux - DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learning Databases @ DevOpsNoob.com</h1>
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
                            <li class="breadcrumb-item active">Install Oracle 11G on Oracle Linux</li>
                        </ol>
                        <h2>Install Oracle 11G on an Oracle Linux 7.4 Virtual Machine</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  This is a walk-through of installing a basic Oracle 11G Database. It will be installed on an Oracle Linux 7.4 Virtual Machine.  Navigation and familiarity with Linux are assumed.
                        </p>
                        <p>
                          <span class="glyphicon glyphicon-arrow-right"></span> <a href="<?= $siteRoot; ?>sysAdmin/linux/oracleLinuxInstall.php">Guide to Create an Oracle Linux 7.4 Virtual Machine</a>.
                        </p>
                        <p>
                          Two of the website sources used in during process include:
                          <ul>
                            <li>
                              <a href="https://oracle-base.com/articles/11g/oracle-db-11gr2-installation-on-oracle-linux-7" target="_blank">Oracle Database 11g Release 2 (11.2) Installation On Oracle Linux 7 (OL7)</a>
                            </li>
                            <li>
                              <a href="http://it-solutions-blog.blogspot.ca/2015/11/how-to-install-oracle-database-11gr2-on.html" target="_blank">How to Install Oracle Database 11gR2 on Oracle Linux 7 VMware Workstation</a>
                            </li>
                          </ul>
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Oracle 11G Pre-Install Process</strong></h4>
                            <div>
                                <p>
                                  Log into the Oracle Linux 7.4 virtual machine as normal user.  If this is a fresh install, or you've not run updates in a while, do this first: <kbd>sudo yum update</kbd>.  Updates may take a while, depending on the state of your system.  Once complete, proceed to the steps below.
                                </p>
                                <p>
                                  Oracle 11G requires a lot of environment variables setup in order to run properly.  This process can be made a lot easier with the  pre-install packages provided by Oracle Linux:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/01-preinstall.png">
                                  <figcaption>Oracle 11G Pre-Install</figcaption>
                                </figure>
                                <p>
                                  All of the defaults within the pre-install options are fine:
                                </p>13-ImportScript
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/02-AcceptPreinstallDefaults.png">
                                  <figcaption>Accept Preinstall Defaults</figcaption>
                                </figure>
                                <p>
                                  The pre-installer creates an "Oracle" user, but it is necessary to set the password for the Oracle user.  Be sure to set the password to something reasonably complex:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/03-ChangeOracleUserPassword.png">
                                  <figcaption>Change Oracle User Password</figcaption>
                                </figure>
                                <p>
                                  SELinux also needs to be updated - here's the command to do this (using Nano here, use your choice of editor):
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/04-EditSELinuxCommand.png">
                                  <figcaption>Edit SELinux Command</figcaption>
                                </figure>
                                <p>
                                  Change SELinux to "Permissive":
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/05-SELinuxPermissive.png">
                                  <figcaption>Set SELinux to Passive</figcaption>
                                </figure>
                                <p>
                                  Setenforce Needs to be set to Permissive as well:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/06-SetenforcePermissive.png">
                                  <figcaption>Setenforce Permissive</figcaption>
                                </figure>
                                <p>
                                  Create the directories that the database will live in:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/07-CreatingDirectoryForDB.png">
                                  <figcaption>Creating Directory for Database</figcaption>
                                </figure>
                                <p>
                                  Localhost needs to to be added to the Access Control List:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/08-AddingLocalhostToACL.png">
                                  <figcaption>Adding Localhost to Access Control List</figcaption>
                                </figure>
                                <p>
                                  The BASH profile of the Oracle user needs to be changed also:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/09-EditBashProfile.png">
                                  <figcaption>Edit BASH Profile</figcaption>
                                </figure>
                                <p>
                                  The Oracle settings here are crucial to successfully completing this installation.  The settings below were changed after this screenshot was taken - they need to match the hostname and the database name.  To find system hostname, type <kbd>echo $HOSTNAME</kbd>.  The database name will be setup during the install. Make sure these match!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/10-BashOracleSettings.png">
                              13-ImportScript    <figcaption>.bash_profile Oracle Settings</figcaption>
                                </figure>
                              </div>
                              <h4><strong>Step 2: Installing Oracle 11G Software</strong></h4>
                              <div>
                                <p>
                                  Once the pre-install is complete, it is necessary to download the Oracle 11G database software.  This software can be downloaded from <a href="http://www.oracle.com/technetwork/database/enterprise-edition/downloads/index.html" target="_blank"><strong>Oracle Database Software Downloads</strong></a>.  The correct file is higlighted below:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/22-Download11G.png">
                                  <figcaption>Download Oracle 11G</figcaption>
                                </figure>
                                <p>
                                  The files need to be accessible to the Oracle user.  The files can be put anywhere, but the "/home/oracle/downloads" folder makes sense.  After you've downloaded the files, they need to be unzipped.  Again, extract them to anywhere, but somewhere within the Oracle user's home folder is best.  Once all extracted, open a terminal within the folder, and run the following command:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/11-RunInstaller.png">
                                  <figcaption>Run Installer</figcaption>
                                </figure>
                                <p>
                                  If you'd like to configure security updates, fill in the info below.  You'll need an active Oracle (website) account:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/12-ConfigureSecurityUpdates.png">
                                  <figcaption>Configure Security Updates</figcaption>
                                </figure>
                                <p>
                                  Select "Create and Configure a Database":
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/13-InstallationOptions.png">
                                  <figcaption>Installation Options</figcaption>
                                </figure>
                                <p>
                                  Select "Desktop Class" in the screenshot below - not "Server Class".  This was a mistake that was later corrected!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/14-ServerClass.png">
                                  <figcaption>System Class</figcaption>
                                </figure>
                                <p>
                                  Select a "Typical Install":
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/16-SelectInstallType.png">
                                  <figcaption>Select Install Type</figcaption>
                                </figure>
                                <p>
                                  Configure your database with the following settings - be sure to take note of the name of the database.  Confirm that these settings match your <strong>.bash_profile</strong> settings.  If these don't match, your install will fail!  This screen is also where you name your database and set an administrative password - be sure to record these for future documentation.  Also, the password will be used later in this guide to verify connectivity.
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/17-TypicalInstallConfig.png">
                                  <figcaption>Typical Install Configuration</figcaption>
                                </figure>
                                <p>
                                  Create an Inventory:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/18-CreateInventory.png">
                                  <figcaption>Create Inventory</figcaption>
                                </figure>
                                <p>
                                  Oracle may thow several errors during this install.  For the most part, these can be ignored:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/19-IgnoreErrors.png">
                                  <figcaption>Ignore Errors</figcaption>
                                </figure>
                                <p>
                                  Before the install begins in earnest, Oracle will present you with a summary:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/20-Summary.png">
                                  <figcaption>Summary</figcaption>
                                </figure>
                                <p>
                                  Click Finish and the Installation Begins for Real!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/21-InstallInProgress.png">
                                  <figcaption>Install In Progress</figcaption>
                                </figure>
                                <p>
                                  From this point, the installer will complete.  The window can be closed, and you'll return to the regular desktop.  It may be necessary to run some scripts - simply navigate to the indicated scripts and run them via terminal.  Oracle will point you to the exact location.
                                </p>
                                <p>
                                  Congratulations - you've installed an Oracle 11G Database.  Now its time to verify in Step 3!
                                </p>
                            </div>
                            <h4><strong>Step 3: Testing &amp; Verifying Database Install</strong></h4>
                            <div>
                              <p>
                                Now comes the real fun - testing and verifying the database!  If all the environment variables are correct and no major errors occurred during installation, open a terminal (as Oracle) and enter the following:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/22-SQLPlus.png">
                                <figcaption>The <kbd>sqlplus</kbd> Command</figcaption>
                              </figure>
                              <p>
                                The login information, will be <kbd>sys as sysdba</kbd>, and the password set earlier, during the installation.  Although this will connect you to the database, the database will not be active (idle):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/23-ConnectedToIdle.png">
                                <figcaption>Connected to Idle Instance</figcaption>
                              </figure>
                              <p>
                                The database will require a startup command:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/24-Startup.png">
                                <figcaption><kbd>startup</kbd> Command</figcaption>
                              </figure>
                              <p>
                                If everything has worked up to this point, its time to test the database by running a simple SELECT statement:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/25-TestDB.png">
                                <figcaption>Simple SELECT Statement Verifys Database Functionality</figcaption>
                              </figure>
                              <p>
                                If this worked, you've done it - created a working Oracle 11G Database!
                              </p>
                              <p>
                                When done playing with your new database, shut it down (DO NOT JUST CLOSE THE WINDOW!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/26-Shutdown.png">
                                <figcaption><kbd>shutdown</kbd> Command</figcaption>
                              </figure>
                              <p>
                                Once you've shut down your database, you need to exit SQLPlus.  Then, and only then, may you close your terminal:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/27-ExitSQLPlus.png">
                                <figcaption><kbd>exit</kbd> SQLPlus Command</figcaption>
                              </figure>
                              <p>
                                You're now ready to create tablespaces and users for your database and make it a usable environment!
                              </p>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
