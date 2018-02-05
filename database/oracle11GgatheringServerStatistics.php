<?php $title = 'Gathering Server Statistics on Oracle 11g - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Gathering Server Statistics on Oracle 11g</li>
                        </ol>
                        <h2>Gathering Server Statistics on Oracle 11g</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  Gathering server statistics allows a conscientious Database Administrator to fine tune the performance of a database.  This is a walk-through of gathering basic statistics about server performance on Oracle 11g database server.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Examine Input/Output Statistics</strong></h4>
                            <div>
                              <p>

                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/01iostat.png">
                                <figcaption>Examine Imput/Output Statistics</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 2: Examine Virtual Memory Statistics</strong></h4>
                            <div>
                              <p>

                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/02vmstat.png">
                                <figcaption>Examine Virtual Memory Statistics</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 3: Kill a (Hanging) Process in Oracle 11g</strong></h4>
                            <div>
                              <p>

                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/03RunSampleQueryAsChinook.png">
                                <figcaption>Running a Sample Query as Chinook User</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/04FourteenRowsSelected.png">
                                <figcaption>Results in 14 Rows</figcaption>
                              </figure>
                              <p>
                                Finding the process involves entering the following query at the SQLPLUS prompt:<br/><kbd>SELECT s.sid, s.serial#, s.username, s.osuser, s.machine, s.program, s.status FROM V$SESSION; </kbd>.<br />  This will result in a large printout of the processes - scroll through the list to find the process started by CHINOOK:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/05DetermineProcessToKill.png">
                                <figcaption>Find the Process</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/06AlterDBKillProcess.png">
                                <figcaption>Kill the Process From Inside Oracle 11g</figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/07ProcessKilled.png">
                                <figcaption>Sucessfully Killed Process</figcaption>
                              </figure>
                            </div>
                          </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
