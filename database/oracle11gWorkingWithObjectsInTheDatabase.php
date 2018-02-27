<?php $title = 'Working with Objects in the Database on Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Working with Objects in the Database on Oracle 11g &amp; Oracle Linux</li>
                        </ol>
                        <h2>Working with Objects in the Database on Oracle 11g &amp; Oracle Linux</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Learning how to optimize a database using tools such as caching, partitioning, indexes and views are key skills for Database Administrators.  This article provides an introduction to several techniques for database optimization.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Caching a Table</strong></h4>
                            <div>
                              <p>
                                In Oracle 11g, caching a table keeps it in memory (keeping it in the <a class="inTextLink" href="<?= $siteRoot; ?>hardware/memoryTypes.php">RAM</a>).  For a detailed explanation of how RAM works, visit <a class="inTextLink" href="<?= $siteRoot; ?>sysAdmin/operatingSystemsTheory/memoryManagement.php">Memory Management</a>.  There is some debate over whether or not caching actually improves performance.  Check out <a class="inTextLink" href="https://asktom.oracle.com/pls/apex/f?p=100:11:0::::P11_QUESTION_ID:253415112676" target="_blank">Caching a Table in Memory</a> for a discussion of whether or not caching helps.  The script needed to cache a table and check the results is below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/01ScriptToCacheTable.png">
                                <figcaption>
                                  Script to Cache a Table<br /> <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/cacheTables.sql">This Script on GitHub</a>
                                </figcaption>
                              </figure>
                              <p>
                                The SQL statement to cache a table is relatively simple:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/02alterTableCache.png">
                                <figcaption>
                                  Alter Table Cache
                                </figcaption>
                              </figure>
                              <p>
                                Once this script is run, successful output will look like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/03alterTableCacheLog.png">
                                <figcaption>
                                  Alter Table Cache Log
                                </figcaption>
                              </figure>
                              <p>
                                A more complicated script is needed to tell if the table was cached successfully.  This script was taken from <a class="inTextLink" href="https://mikesmithers.wordpress.com/2016/06/23/oracle-pinning-table-data-in-the-buffer-cache/" target="_blank">Oracle – Pinning table data in the Buffer Cache</a>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/04ConfirmTableCached.png">
                                <figcaption>
                                  Confirm Table is Cached
                                </figcaption>
                              </figure>
                              <p>
                                The two screenshots below show that the table was successfully cached:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/05CachedTable.png">
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/06CachedTable02.png">
                                <figcaption>
                                  Cached Table &amp; Blocks
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Creating Partitioned Tables</strong></h4>
                            <div>
                              <p>
                                Partitioning a table can dramatically improve the performance of a database.  If a table is split into smaller partitions, then searching for a result is much faster.  Oracle has posted a white paper about partitioning entitled <a class="inTextLink" href="http://www.oracle.com/technetwork/database/enterprise-edition/partitioning-11g-whitepaper-159443.pdf" target="_blank">Partitioning in Oracle Database 11g</a>.  The script partition a table is relatively complicated, I've posted <a class="inTextLink" href="https://github.com/bradpenney/oracleScripts/blob/master/partitionTables.sql" target="_blank">an example script on GitHub</a>.  The SQL statement to partition a table by date is below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/08CreatePartitionedTable.png">
                                <figcaption>
                                  Create Partitioned Table
                                </figcaption>
                              </figure>
                              <p>
                                Successfully creating this partitioned table will result in a table that will look like this in SQL Developer:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/09PartitionedTableCreated.png">
                                <figcaption>
                                  Partitioned Table Created
                                </figcaption>
                              </figure>
                              <p>
                                Now that we've created a partitioned table, the data needs to be transferred from the original table to the new table.  The script to do this is as follows:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/10InsertDataIntoTableFromTable.png">
                                <figcaption>
                                  Insert Data into a Table from another Table
                                </figcaption>
                              </figure>
                              <p>
                                If the script runs successfully, you'll get a message like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/11RowsInserted.png">
                                <figcaption>
                                  412 Rows Inserted
                                </figcaption>
                              </figure>
                              <p>
                                While its nice that the log file shows success, its a good idea to run some another test to verify.  First, count the records in the original table and the new table.  This is done with these SQL statements:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/12CountRecordsInBoth.png">
                                <figcaption>
                                  SQL Count Statements to Count Records
                                </figcaption>
                              </figure>
                              <p>
                                The results are the same, which is a good sign:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/13ConfirmSameNumberOfRecords.png">
                                <figcaption>
                                  412 Records in Source Table and Destination Table
                                </figcaption>
                              </figure>
                              <p>
                                If this were a serious production database, samples of data should be taken to confirm they're the same.  This would involve running several SQL queries with various parameters to compare the results.  Since this database is purely for learning purposes, having the same number of records is enough of a test.
                              </p>
                            </div>
                            <h4><strong>Section 3: Viewing Constraints</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/14ShowUserConstraints.png">
                                <figcaption>
                                  Show User Constraints
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/15UserConstraintsKeys.png">
                                <figcaption>
                                  User Constraint Primary and Foreign Keys
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/16UserConstraintKeysAndTablesLog.png">
                                <figcaption>
                                  User Constraint Primary and Foreign Keys and Parent Tables
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 4: Creating a Database View</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/17CreateViewForInvoiceDetails.png">
                                <figcaption>
                                  Create the <code>invoice_details</code> View
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/18InvoiceDetailsViewColumns.png">
                                <figcaption>
                                  Columns of the <code>invoice_details</code> View
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 5: Creating an Index</strong></h4>
                            <div>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/19CreateCustomerIndex.png">
                                <figcaption>
                                  Create Index for Customer Table
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/workingWithObjects/20CustomerIndex.png">
                                <figcaption>
                                  Customer Index
                                </figcaption>
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
