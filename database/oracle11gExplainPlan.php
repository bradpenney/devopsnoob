<?php $title = 'Exploring Explain Plans with Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Exploring Explain Plans with Oracle 11g &amp; Oracle Linux</li>
                        </ol>
                        <h2>Exploring Explain Plans with Oracle 11g &amp; Oracle Linux</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Explain plans are a critical component of performance tuning a database in Oracle 11g.  They give the DBA the ability to see how a query will be executed, and determine what specific changes will improve the performance of a query.  This brief tutorial is a simple introduction, explain plans are a very complicated and powerful tool!
                        </p>
                        <figure>
                          <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/000Script.png">
                          <figcaption>
                            Script to Create Explain plans<br />
                            <a href="https://github.com/bradpenney/oracleScripts/blob/master/explainPlan.sql" target="_blank">Link To Script on GitHub</a>
                          </figcaption>
                        </figure>
                        <div id="accordion">
                            <h4><strong>Section 1: Preparing to Run Explain Plans</strong></h4>
                            <div>
                              <p>
                                Before jumping into running explain plans, make sure you're aware of your database environment and the objects it contains.  For example, it may be necessary to grant permissions to certain users in order to execute these plans effectively.  For the example below, the <code>SELECT_CATALOG_ROLE</code> needed to be granted to the <code>PRODUCTION</code> user in order for them to be able to look at the metadata tables:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/00GrantSelectCatalogToProduction.png">
                                <figcaption>
                                  Grant Select Catalog Privileges to Production User
                                </figcaption>
                              </figure>
                              <p>
                                With these permissions granted, have a look at the tables that are within the tablespace using <code>SELECT * FROM user_tables;</code>.  Note that this could also be done in a GUI tool such as SQL Developer, however, we're using the command line here just to show it can be done:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/02ShowUserTables.png">
                                <figcaption>
                                  Show User Tables
                                </figcaption>
                              </figure>
                              <p>
                                Have a look at the indices that exist in the tablespace using this query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/04ShowIndexes.png">
                                <figcaption>
                                  Show User Indices
                                </figcaption>
                              </figure>
                              <p>
                                This is an example environment, so there isn't much to show (you may have many more indices!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/05ShowIndexesResult.png">
                                <figcaption>
                                  Show User Indices Result
                                </figcaption>
                              </figure>
                              <p>
                                Now that we know how many indices there are, lets look at some info about them.  Of course, this could be filtered to show only the indices of interest if there were many indices in the tablespace:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/06ShowIndexInfo.png">
                                <figcaption>
                                  Show Information about the Indices
                                </figcaption>
                              </figure>
                              <p>
                                The indices exist, but are fairly minimal (but will work for our purpose here!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/07ShowIndexInfoResults.png">
                                <figcaption>
                                  Index Information Results
                                </figcaption>
                              </figure>
                            </div>
                            <h4><strong>Section 2: Creating Explain Plans</strong></h4>
                            <div>
                              <p>
                                After determining some information about your database and the objects it contains, its time to write a query that will make use of one of the existing indices:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/08SampleQuery.png">
                                <figcaption>
                                  Sample Query that Utilizes the Index
                                </figcaption>
                              </figure>
                              <p>
                                Run the query and make sure it gives usable results:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/09SampleQueryResults.png">
                                <figcaption>
                                  Sample Query Results
                                </figcaption>
                              </figure>
                              <p>
                                Now you're ready to run an explain plan on this query, and make sure that it is utilizing the index created for this purpose.  Creating the explain plan is done with the following query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/10CreateExplainPlan.png">
                                <figcaption>
                                  Create the Explain Plan
                                </figcaption>
                              </figure>
                              <p>
                                If the creation of the explain was successful, you'll get the following message:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/11ExplainPlanCreated.png">
                                <figcaption>
                                  Explain Plan Created
                                </figcaption>
                              </figure>
                              <p>
                                In the next section, we'll discuss comparing explain plan results.  For now, output the explain plan results into a log file or a text document, where they can be comapared later.  This is necessary because explain plans are only stored temporarily (by default), and each new plan overwrites the previous.  Output the results of the explain plan using this query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/12ShowExplainPlanQuery.png">
                                <figcaption>
                                  Show Explain Query
                                </figcaption>
                              </figure>
                              <p>
                                Assuming that the explain plan shows that the query is using the index, its now necessary to stop using the index and see what change this makes.  <strong>Be sure to keep a copy of the DDL for the index, so you can recreate it quickly after this test</strong>. In this case, the DDL to create the index in question is:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/16IndexDDL.png">
                                <figcaption>
                                  Data Definition Langugage of the Index Being Tested
                                </figcaption>
                              </figure>
                              <p>
                                Dropping an index is done in SQL using the <code>DROP INDEX &lt;indexName&gt;;</code>, but there's a neat dialog box that does it in SQL Developer too (simply right-click on the index name)
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/14DropIndex.png">
                                <figcaption>
                                  Drop the Index
                                </figcaption>
                              </figure>
                              <p>
                                After dropping the index, rerun the explain plan query, then show the results, appending them to the same log or text file you put the last ones in.  In this way, the two results will be next to one another, and easier to compare.  In the next section, we'll do exactly that.
                              </p>
                            </div>
                            <h4><strong>Section 3: Comparing the Results of Explain Plans</strong></h4>
                            <div>
                              <p>
                                Now that we've created two explain plans, its easy to compare their results.  The two results look like this:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/13ExplainPlanResults.png">
                                <figcaption>
                                  Explain Plan Results with Index
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/explainPlan/15RerunExplainPlanResults.png">
                                <figcaption>
                                  Explain Plan Results after Dropping Index
                                </figcaption>
                              </figure>
                              <p>
                                The theory behind indices is that they make seaching for records much faster within a database. These explain plans were run on a very small dataset, so it would be surprising if the index made any difference at all.  However, as can be seen above, the CPU works almost twice as hard (9% vs. 5%) on the query without the index.  If this example were run on a database with millions of records spread over many disks and perhaps even multiple locations, the index would make the query run significantly faster.  Proving an index is useful is an easy job using explain plans - which is exactly why the abiltiy to run and (more importantly) explain the results of this tool is so powerful for DBAs.
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
