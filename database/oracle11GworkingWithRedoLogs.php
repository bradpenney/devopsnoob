<?php $title = 'Working with Redo Logs in Oracle 11g - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Working with Redo Logs in Oracle 11g</li>
                        </ol>
                        <h2>Working with Redo Logs in Oracle 11g</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  Gathering server statistics allows a conscientious Database Administrator to fine tune the performance of a database.  This is a walk-through of gathering basic statistics about server performance on Oracle 11g database server.  For more information about gathering statistics of Linux performance, visit <a href="https://www.thegeekstuff.com/2011/03/linux-performance-monitoring-intro/" target="_blank">Linux Performance Monitoring and Tuning Introduction from <em>The Geek Stuff</em></a>.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Determine the Location of the Current Redo Logs</strong></h4>
                            <div>
                              <p>

                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/01LocationOfCurrentRedoLogs.png">
                                <figcaption>Examine Imput/Output Statistics</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 2: Turn On Archiving</strong></h4>
                            <div>
                              <p>
                              </p>
                            </div>
                            <h4><strong>Step 3: Create Group of Redo Logs</strong></h4>
                            <div>
                              <p>
                              </p>
                            </div>
                          </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
