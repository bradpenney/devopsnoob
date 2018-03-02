<?php $title = 'Learn Database Management @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Database Management @ DevOpsNoob</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>db.php">Databases</a></li>
                        <li class="breadcrumb-item active">Database Management</li>
                    </ol>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gHotBackup.php">Hot Backup with Recovery Manager in Oracle 11g</a>
                        </h4>
                        <p>
                          Backup &amp; Recovery of Databases is a major focus of the Database Adminstrator.  Systems that need high availablity (so called "five nines (99.999%)" availability systems) utilize hot backups (backups while the database is still running) on a regular schedule.  In this tutorial, we'll use Recovery Manager to perform &amp; schedule hot backups on an Oracle 11g database.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gMoveTablespaceWithRMAN.php">Moving Tablespaces with Recovery Manager in Oracle 11g</a>
                        </h4>
                        <p>
                          Recovery Manager (RMAN) gives Database Administrators peace of mind that their data is safe and secure.  One of the basic tasks that RMAN makes easy is manipulating tablespaces.  In this short tutorial, we'll demonstrate just how easy it is to move tablespaces with RMAN.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gImportingDataToStagingArea.php">Importing Data To a Staging Area in Oracle 11g</a>
                        </h4>
                        <p>
                          Working with raw data is a large challenge for Database Administrators.  This brief article illustrates some to the techniques and challenges associated with importing raw data into a database.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gWorkingWithObjectsInTheDatabase.php">Working with Objects in the Database in Oracle 11g</a>
                        </h4>
                        <p>
                          Learning how to optimize a database using tools such as caching, partitioning, indexes and views are key skills for Database Administrators.  This article provides an introduction to several techniques for database optimization.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gConfiguringRMAN.php">Configuring Recovery Manager in Oracle 11g</a>
                        </h4>
                        <p>
                          Recovery Manager, RMAN, is the way that Oracle 11g protects its databases from data loss. This brief tutorial walks through implementing a basic RMAN configuration.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gWorkingWithTableSpaces.php">Working with Tablespaces in Oracle 11g</a>
                        </h4>
                        <p>
                          Tablespaces are the logical holding containers of a schema within a database.  Tablespaces are stored in datafiles (.dbf) in the phyiscal file system.  This walk-through shows how to view the tablespaces that exist in your database, create tablespaces with multiple datafiles, and drop tablespaces suit your needs within Oracle 11g.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gAdjustingMemoryParameters.php">Adjusting Memory Parameters in Oracle 11g</a>
                        </h4>
                        <p>
                          Determining how much memory is available to the database is another crucial aspect to database tuning and performance.  Having more memory available than will ever be used is a poor use of resources, however, not allocating enough memory to a database can cause a signficant reduction in performance.  This walk-through shows how to change memory parameters to suit your needs within Oracle 11g.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GworkingWithRedoLogs.php">Working with Redo Logs in Oracle 11g</a>
                        </h4>
                        <p>
                          Redo Logs are crucial files that record the history of all transactions in the database (both DML and DDL).  Best practice is that redo logs are split into at least two groups, with two files in each group.  More groups and more files (within reason) are recommended. This step-by-step guide will illustrate some of the basics about working with redo logs.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GgatheringServerStatistics.php">Gathering Server Statistics on Oracle 11g</a>
                        </h4>
                        <p>
                          Fine-tuning the performance of a database requires gathering basic statistics about the server performance.  This tutorial walks through some of the basic tools available to gather statistics about server performance.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                          <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GcontrolFileBackup.php">Oracle 11G Control File Backup Using Custom Scripts</a>
                        </h4>
                        <p>
                          Backing up a database is more than simply backing up the raw data.  The structure of the database is also critical to its functioning.  In this series of scripts, the control files, spfiles and a couple of .ora files are backed up.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>Video:  Online Analytical Processing - A Brief Introduction</h4>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/v5kct2IhpcE" allowfullscreen></iframe>
                        <p>
                          Online Analytical Processing (OLAP) is a decision support system (DSS) that uses multidimensional data analysis techniques.  OLAP creates an advanced data analysis environment that supports decision making, business modeling, and operations research.
                        </p>
                      </li>
                      <li class="list-group-item">
                          <h4>
                              <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11Gbackup.php">Oracle 11G Schema Backup Using Data Pump</a>
                          </h4>
                          <p>
                            A screenshot walkthrough of backing up a schema to another instance using Data Pump.  This is meant as an Activity Log to show how this works.
                          </p>
                      </li>
                      <li class="list-group-item">
                          <h4>
                              <a class="inTextLink" href="oracle11GInstall.php">Install Oracle 11G on an Oracle Linux 7.4 Virtual Machine</a>
                          </h4>
                          <p>
                            A screenshot walkthrough of installing Oracle 11G Database on a Oracle Linux 7.4 Virtual Machine.  This is meant as an Activity Log to show how this works.
                          </p>
                      </li>
                      <li class="list-group-item">
                        <h4><a class="inTextLink" href="<?= $siteRoot; ?>database/selectingNoSQL.php">Selecting a NoSQL Database</a></h4>
                        <p>
                          A quick article outlining the strengths and weaknesses of the four main types of NoSQL databases.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>Video:  Q&amp;A - Database Administrator | What they do</h4>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/0LFa8DH_6f4" allowfullscreen></iframe>
                        <p>
                          What does a Database Administrator do?  Its a very large job description, this video sheds a little light on what a DBA is.
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
