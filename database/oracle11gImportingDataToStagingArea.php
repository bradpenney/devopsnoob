<?php $title = 'Importing Data To a Staging Area on Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Importing Data To a Staging Area on Oracle 11g &amp; Oracle Linux</li>
                        </ol>
                        <h2>Importing Data To a Staging Area on Oracle 11g &amp; Oracle Linux</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Working with raw data is a large challenge for Database Administrators.  This brief article illustrates some to the techniques and challenges associated with importing raw data into a database.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Creating a Working Area</strong></h4>
                            <div>
                              <p>
                                Before we begin working with any raw data of any sort, its important to create a staging area in the database that is completely separate from the other working database.  In this area, a separate tablespace, addresssed by a separate user, will manipulate the data and ensure its ready to incorporate into the working (development or production) environment.  The script to create this separate environment is <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/createStagingEnvironment.sql" target="_blank">available on GitHub</a>.
                              </p>
                              <p>
                                The first step is to create a tablespace named STAGING.  Note that this is done in a separate .dbf file, in a specific and separate file system directory:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/01CreateStagingTablespace.png">
                                <figcaption>
                                  Script to Create STAGING Tablespace
                                </figcaption>
                              </figure>
                              <p>
                                The output of this SQL statement is as follows:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/02createTablespaceSucceeded.png">
                                <figcaption>
                                  STAGING Tablespace Successfully Created
                                </figcaption>
                              </figure>
                              <p>
                                While its ok that SQL told us the tablespace was created, its never a bad idea to confirm this with a different query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/03ConfirmTablespaceCreated.png">
                                <figcaption>
                                  SQL Statement to List Tablespaces in Oracle 11g
                                </figcaption>
                              </figure>
                              <p>
                                Which outputs the following (see STAGING at the bottom of the list):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/04ConfirmTablespaceCreatedOutput.png">
                                <figcaption>
                                  Confirm that the Tablespace is Created
                                </figcaption>
                              </figure>
                              <p>
                                After creating the tablespace, a user needs to be created and granted permissions.  Checks similar to the one above should be run to make sure that these are successful.
                              </p>
                              <p>
                                In order to create a user, run the following statement:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/05CreateUserLoad_Staging.png">
                                <figcaption>
                                  Create User <code>load_staging</code>
                                </figcaption>
                              </figure>
                              <p>
                                Which was successful:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/06CreateUserSucceeded.png">
                                <figcaption>
                                  User <code>load_staging</code> Successfully Created
                                </figcaption>
                              </figure>
                              <p>
                                Grant the necessary privileges to <code>load_staging</code> using this SQL statement:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/07GrantPrivileges.png">
                                <figcaption>
                                  Grant Permissions to <code>load_staging</code>
                                </figcaption>
                              </figure>
                              <p>
                                Which was successful:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/08GrantSucceeded.png">
                                <figcaption>
                                  <code>load_staging</code> User Granted Permissions Successfully
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Making Raw Data Usable</strong></h4>
                            <div>
                              <p>
                                After creating a separate environment to load the raw data into, its time to take a look at that data.  In this case study, we've been provided with several data files.  The file types range from Excel documents (.xlsx), XML documents (.xml), Comma-Separated Values (.csv), and Text Documents (.txt).  There are lots of really powerful software tools out there to manipulate these documents, Alteryx being the most notable, but in this case, Microsoft Excel is capable of doing all the manipulations necessary.  The goal is to save each file as a Comma-Separated Value (CSV) file, which is easily imported into the database.
                              </p>
                              <p>
                                Open up Microsoft Excel (or LibreOffice Calc for Linux users), and then open each raw data file separately.  Each of these files is openable in Excel, but it may require a simple GUI dialog to be clicked through first, depending on the file format.  Each of these is simple and self-explanatory.
                              </p>
                              <p>
                                Once the file is opened in Excel, it should look similar to this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/09OpenCSVFilesInExcel.png">
                                <figcaption>
                                  How a CSV File Should Look In Excel Before Export
                                </figcaption>
                              </figure>
                              <p>
                                To export this data, simply save it with the file type .csv:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/10SaveAsCSV.png">
                                <figcaption>
                                  Save Excel Document as CSV
                                </figcaption>
                              </figure>
                              <p>
                                This process is repeated for each of the files.  Be sure to save all the files into one directory, separate from where the raw files are being stored.
                              </p>
                            </div>
                            <h4><strong>Section 3: Importing Data</strong></h4>
                            <div>
                              <p>
                                Once all the files that need importing are saved as CSVs, you're ready to start importing them into the database.  This is easily completed in SQL Developer.  In the <code>load_stage</code> tablespace, simply click "Tables", then right-click and choose "Import".  The following dialog will result.  Choose one of your files to proceed:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/11ImportCSV01.png">
                                <figcaption>
                                  Import Tale Dialog - Choose a File
                                </figcaption>
                              </figure>
                              <p>
                                Name your table:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/12ImportCSV02.png">
                                <figcaption>
                                  Name Your Table
                                </figcaption>
                              </figure>
                              <p>
                                Be sure to select all the columns you'd like to import (usually all of them):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/13ImportCSV03.png">
                                <figcaption>
                                  Choose Your Columns
                                </figcaption>
                              </figure>
                              <p>
                                This screen is very important, and the most complicated step.  Go through each column and rename it to suit your naming convention.  Also choose an appropriate data type, depending on the type of data in the column.  Common data types include NUMBER, DATE, VARCHAR2, but there are several others.  The screen to do all this looks like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/14ImportCSV04.png">
                                <figcaption>
                                  Correct the Names and Datatypes of each Column
                                </figcaption>
                              </figure>
                              <p>
                                Finally, there's a finishing dialog - simply click "Finish":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/15ImportCSV05.png">
                                <figcaption>
                                  Finsh Off The Import
                                </figcaption>
                              </figure>
                              <p>
                                Once you click "Finish", a dialog box appears to tell you that the import was successful. If this doesn't appear, the import didn't work, and you'll need to repeat the steps.
                              </p>
                            </div>
                            <h4><strong>Section 4: Manipulating Imported Tables</strong></h4>
                            <div>
                              <p>
                                After importing the data into a table, its really common to want to manipulate the metadata (the table information) to make it suit the data model that you're trying to enforce.  By right-clicking on the table name, you can select "Edit", which results in the following dialog.  All of the metadata can be modified here, from column names to the table name:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/16EditTableAsNecessary.png">
                                <figcaption>
                                  Edit Table Metadata
                                </figcaption>
                              </figure>
                              <p>
                                One of the most common tasks is to add a primary key.  This can't be done while there is data in the table.  However, there is an easy way to do this in SQL Developer.  First, right-click on the table you'd like to add the primary key to and select "Use As Template":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/17UseExistingTableAsTemplate.png">
                                <figcaption>
                                  Use Existing Table as Template
                                </figcaption>
                              </figure>
                              <p>
                                In the dialog box that results, you can add columns using the plus symbol:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/18AddColumnToTemplate.png">
                                <figcaption>
                                  Add a Column to the New Table
                                </figcaption>
                              </figure>
                              <p>
                                Add a new column and name it appropriately.  Usually, this is the name of the table plus "_id".  The click in the box next to it in order to make it a primary key:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/19AddPrimaryKey.png">
                                <figcaption>
                                  Make New Column a Primary Key
                                </figcaption>
                              </figure>
                              <p>
                                In order to make this primary key to auto-increment, you'll need to add a column sequence.  This is done at the bottom of the dialog box:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/20AddSequenceToPK.png">
                                <figcaption>
                                  Add a Column Sequence to the Primary Key
                                </figcaption>
                              </figure>
                              <p>
                                After creating the sequence, the new table is ready to accept the data from the old table.  Right-click on the old table and "Export":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/21ExportDataFromTable.png">
                                <figcaption>
                                  Export the Data from the Previous Table
                                </figcaption>
                              </figure>
                              <p>
                                The following dialog box appears.  Be sure to deselect the Data Definition Language (DDL) in the export, as we're looking to recreate the DDL (with a new column that's a primary key).  Also, be sure to export the data as a CSV and place the exported file somewhere accessible:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/22ExportData01.png">
                                <figcaption>
                                  Export Data only, not the DDL
                               </figcaption>
                              </figure>
                              <p>
                                The final step to the export is to click "Finish":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/loadStaging/23ExportData02.png">
                                <figcaption>
                                  Correct the Names and Datatypes of each Column
                                </figcaption>
                              </figure>
                              <p>
                                Next, you'll need to import the data into the new table (follow the procedure above for this).  After confirming the data is actually in the new table, right click on the old table and select "Table -> Drop".  The final step is to right-click on the new table and rename it (edit it as above) to the name of the old table.  A quick data check will reveal the new table has all the same columns and metadata as the old table, but also includes an auto-incremented primary key, which will make building the relationships in this database (staging area) a lot easier.
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
