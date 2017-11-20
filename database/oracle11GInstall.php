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
                            <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>database.php">Learn Databases</a></li>
                            <li class="breadcrumb-item active">Install Oracle 11G on Oracle Linux</li>
                        </ol>
                        <h2>Install Oracle 11G on an Oracle Linux 7.4 Virtual Machine</h2>
                        <p>
                            Oracle 11G is a enterprise-level relational database system that is widely used throughout the IT industry.  This is a walk-through of installing this software on Oracle Linux 7.4 - the recommended operating system platform from Oracle.
                        </p>
                        <p>
                          In the Systems Administration section of this website, there is a <a href="<?= $siteRoot; ?>/sysAdmin/linux/oracleLinuxInstall.php">complete guide to install Oracle Linux 7.4</a> available.  This guide assumes a basic ability to navigate through a Linux environment.
                        </p>
                        <p>
                          Two of the guides used in this process include:
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
                                  Log into the Oracle Linux 7.4 virtual machine created above.  Oracle 11G requires a lot of environment variables setup in order to run properly.  This process can be made a lot easier with premade pre-install packages:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/01-preinstall.png">
                                  <figcaption>Oracle 11G Pre-Install</figcaption>
                                </figure>
                                <p>
                                  All of the defaults within the pre-install options are fine:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/02-AcceptPreinstallDefaults.png">
                                  <figcaption>Accept Preinstall Defaults</figcaption>
                                </figure>
                                <p>
                                  The pre-installer creates an "Oracle" user, but it is necessary to set the password for the Oracle user:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/03-ChangeOracleUserPassword.png">
                                  <figcaption>Change Oracle User Password</figcaption>
                                </figure>
                                <p>
                                  SELinux also needs to be updated - here's the command to do this (using Nano):
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/04-EditSELinuxCommand.png">
                                  <figcaption>Edit SELinux Command</figcaption>
                                </figure>
                                <p>
                                  Change SELinux to "Permissive".
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
                                  Localhost needs to to be added to the Access Control List.
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
                                  The Oracle settings here are crucial to successfully completing this installation.  The settings below were changed after this screenshot was taken - they need to match the hostname and the database name.  To find system hostname, type <kbd>echo $HOSTNAME</kbd>.
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/10-BashOracleSettings.png">
                                  <figcaption>.bash_profile Oracle Settings</figcaption>
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
                                  The files need to be downloaded from within the Oracle user.  The files can be put anywhere, but the "Downloads" folder makes sense.  After you've downloaded the files, they need to be unzipped.  Again, extract them to anywhere, but somewhere within the Oracle user's home folder makes sense.  Once all extracted, open a terminal within the folder, and run the following command:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/11-RunInstaller.png">
                                  <figcaption>Run Installer</figcaption>
                                </figure>
                                <p>
                                  If you'd like to configure security updates, fill in the info below.  You'll need an active Oracle account:
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
                                  Select "Desktop Class" in the screenshot below - not "Server Class".  This was a mistake that was later corrected.
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
                                  Configure your database with the following settings - be sure to take note of the name of the database.  Confirm that these settings match your <strong>.bash_profile</strong> settings.  If these don't match, your install will fail!
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
                                  Oracle may thow several errors in this install.  For the most part, these can be ignored:
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
                                  Click Finish and the Installation Begins for real!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/oracle11G/21-InstallInProgress.png">
                                  <figcaption>Install In Progress</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 3: Logging Into the Database After Install</strong></h4>
                            <div>
                              <p>
                                Install screen shots showing SQLPlus.
                              </p>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
