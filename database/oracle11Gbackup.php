<?php $title = 'Oracle 11G Schema Backup Using Data Pump - DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learning Databases @ DevOpsNoob</h1>
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
                            <li class="breadcrumb-item active">Oracle 11G Schema Backup Using Data Pump</li>
                        </ol>
                        <h2>Oracle 11G Schema Backup Using Data Pump</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  This is a walk-through of completing a basic schema backup using Data Pump.
                        </p>
                        <p>
                          Sources used in during process include:
                          <ul>
                            <li>
                              <a class="inTextLink" href="https://oracle-base.com/articles/10g/oracle-data-pump-10g" target="_blank">Oracle Data Pump (expdp, impdp) in Oracle Database 10g, 11g, 12c</a>
                            </li>
                          </ul>
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Export Schema Using Data Pump</strong></h4>
                            <div>
                              <p>
                                Having a backup of your database is a fundamental requirement for good database administration.  Performing a backup of the schema is a relatively straightforward process. Firstly, a directory needs to be created for the user in question.
                              </p>
                              <p>
                                Note: A directory in a database is not the same as a directory in the file system.  Although, it is a good idea to create a dedicated directory in the file system in which to store a database directory.
                              </p>
                              <p>
                                Below is a screenshot of the script used to create a directory for a particular user:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/01CreateDirectory.png">
                                <figcaption>Script to Create Directory in Oracle 11g Schema</figcaption>
                              </figure>
                              <p>
                                And the corresponding log file:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/02CreateDirectoryLog.png">
                                <figcaption>Log File Showing Successful Completion of Script to Create Directory in Oracle 11g Schema</figcaption>
                              </figure>
                              <p>
                                Next, the Data Pump export script needs to be run:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/03DataPumpExportScript.png">
                                <figcaption>Script to Export Chinook Schema Using Data Pump</figcaption>
                              </figure>
                              <p>
                                Before actually running this script, it needs to be made executable (in terminal) using <kbd>chmod u+x chinookExport.sh</kbd> command, and then run with <kbd>./chinookExport</kbd>.
                              </p>
                              <p>
                                Once run, the Data Pump produces two files:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/04ExportCreated.png">
                                <figcaption>Export Files Created</figcaption>
                              </figure>
                              <p>
                                The corresponding log file:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/05ExportLog.png">
                                <figcaption>Log File for Data Pump Export</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 2: Preparing Backup Machine For Schema Import</strong></h4>
                            <div>
                              <p>
                                The next step is to prepare the backup server to mirror the environment the database was exported from.  In this case, another implementation of Oracle Linux 7.4 with Oracle 11g was created.
                              </p>
                              <p>
                                To setup this environment, follow these guides:
                              </p>
                              <ul>
                                <li>
                                  <strong><a class="inTextLink" href="<?= $siteRoot; ?>sysAdmin/linux/oracleLinuxInstall.php">Guide to Create an Oracle Linux 7.4 Virtual Machine</a></strong>
                                </li>
                                <li>
                                  <strong><a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GInstall.php">Guide to Installing Oracle 11G on Oracle Linux 7.4</a></strong>.
                                </li>
                              </ul>
                              <p>
                                A few other changes were made post-installation.  These included creating a couple of directories on the root.  This was done using the following script, run as sudo user (don't forget to run the <kbd>chmod u+x setupDirectories.sh</kbd> command first):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/06setupDirectoriesScript.png">
                                <figcaption>Setup Directories to Mirror Previous Environment</figcaption>
                              </figure>
                              <p>
                                Tablespaces must be created (like on the previous environment) to house the new schema.  This is necessary in order to keep the schema being imported separate from the system schema.  This is done using the following script:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/07CreateTablespaces.png">
                                <figcaption>Create Tablespaces to House Schema</figcaption>
                              </figure>
                              <p>
                                This generates the following log file:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/08CreateTablespacesLog.png">
                                <figcaption>Log Showing Successful Tablespace Creation</figcaption>
                              </figure>
                              <p>
                                Next, create a user to import the database.  This is done with the following script:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/09CreateUser.png">
                                <figcaption>Create User EXPCHINOOK</figcaption>
                              </figure>
                              <p>
                                Which results in the following log file:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/10CreateUserLog.png">
                                <figcaption>Create User EXPCHINOOK Log File</figcaption>
                              </figure>
                              <p>
                                The final step in prepping the mirror environment is creating a directory in which to house the import dump.  This is created using this script:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/11CreateDirectoryInMirror.png">
                                <figcaption>Create Directory in Mirror</figcaption>
                              </figure>
                              <p>
                                Which results in the following log file:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/12CreateDirectoryLog.png">
                                <figcaption>Create Directory in Mirror Log File</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 3: Importing Schema Backup</strong></h4>
                            <div>
                              <p>
                                In most circumstances, it would be necessary to transfer the file from the original server to the mirror server via a file transfer method such as SSH, SFTP, or by mounting a drive.  However, in this circumstance, this demonstration is being done in two virtual machines, so copy and pasting was used to transfer the .dmp file to the correct location (/u02/chinookBackup).
                              </p>
                              <p>
                                Once everything is all prepared, the final step is to actually import the schema.  The script to do this is as follows (once again, remember to <kbd>chmod u+x importChinook.sh</kbd> in order to make it executable).  Notice the use of the <code>remap_schema</code> command, which remaps the schema from the original "Chinook" to the new schema implemented above, "EXPChinook":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/13ImportScript.png">
                                <figcaption>Import Script for Schema</figcaption>
                              </figure>
                              <p>
                                If the schema is succesfully imported, you'll get a message similar to this one:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/exportImport/14SuccessfullyImportedSchema.png">
                                <figcaption>Successfully Imported Chinook Schema in Backup Server</figcaption>
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
