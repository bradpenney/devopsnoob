<?php $title = 'Gathering Server Statistics on Oracle Linux &amp; Oracle 11g - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Gathering Server Statistics on Oracle Linux &amp; Oracle 11g</li>
                        </ol>
                        <h2>Gathering Server Statistics on Oracle Linux &amp; Oracle 11g</h2>
                        <p>
                          Oracle 11G is an enterprise-level relational database system that is widely used throughout the IT industry.  Gathering server statistics allows a conscientious Database Administrator to fine tune the performance of a database.  This is a walk-through of gathering basic statistics about server performance on Oracle 11g database server.  For more information about gathering statistics of Linux performance, visit <a class="inTextLink" href="https://www.thegeekstuff.com/2011/03/linux-performance-monitoring-intro/" target="_blank">Linux Performance Monitoring and Tuning Introduction from <em>The Geek Stuff</em></a>.
                        </p>
                        <div id="accordion">
                            <h4><strong>Tool #1: Examine Input/Output Statistics</strong></h4>
                            <div>
                              <p>
                                The first step in performance tuning any database is to measure the inputs &amp; outputs of the server. This shows how long the CPU waits for input or output.  If these numbers are high, it indicates a problem with the server.  Below is a screenshot of running the <code>iostat</code> command with the flags <code>-xtc 10 5</code>, which will show the input / output stats for the CPU every 10 seconds, 5 times.  This allows the user to get a sense for the averages of how much the CPU is waiting:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/01iostat.png">
                                <figcaption>Examine Imput/Output Statistics</figcaption>
                              </figure>
                              <p>
                                If disk read/write times are consistently high, the amount of time the disk is busy is greater than 50%, or the average service time is more than 30 milliseconds, you may have a problem which will require addressing.
                              </p>
                            </div>
                            <h4><strong>Tool #2: Examine Virtual Memory Statistics</strong></h4>
                            <div>
                              <p>
                                Monitoring how much virtual memory is being accessed is another great indicator of server performance.  The <code>vmstat</code> command indicates how often virtual memory is being swapped in and out.  The <code>si</code> (swap in) and <code>so</code> (swap out) columns show how often virtual memory is being used.  Ideally this number should be zero, but it should definitely not enter double digits.  Below is an example of running <code>vmstat</code>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/02vmstat.png">
                                <figcaption>Examine Virtual Memory Statistics</figcaption>
                              </figure>
                              <p>
                                In the example pictured above, it would be worth investigating why the <code>so</code> column value is so high.
                              </p>
                            </div>
                            <h4><strong>Tool #3: Kill a (Hanging) Process in Oracle 11g</strong></h4>
                            <div>
                              <p>
                                Another activity that is vital to performance tuning a database is being able to kill any processes that are hanging (stalled) and causing system performance issues.  For this example, a non-DBA user has run the following SQL query:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/03RunSampleQueryAsChinook.png">
                                <figcaption>Running a Sample Query as Non-DBA User</figcaption>
                              </figure>
                              <p>
                                This query has resulted in 14 rows.  This is a small number, but if this had been a poorly written query it could have resulted in millions of results (taking a long time), or could even cause the system to hang indefinitely.
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/04FourteenRowsSelected.png">
                                <figcaption>Results in 14 Rows</figcaption>
                              </figure>
                              <p>
                                If a query is hanging or degrading system performance signficantly, the conscientious Database Administrator needs to find the Oracle process and kill it.  Finding the process involves entering the following query at the SQLPLUS prompt:<blockquote class="blockquote"><kbd>SELECT s.sid, s.serial#, s.username, s.osuser, s.machine, s.program, s.status FROM V$SESSION; </kbd></blockquote>  This will result in a printout of the processes which we can scroll through to find the process started by the non-DBA user (CHINOOK in this case). Of course, on a production database that has thousands of processes, it may be necessary to filter the results by <code>s.username</code> or some other filter:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/05DetermineProcessToKill.png">
                                <figcaption>Find the Offending Process - SID 17, SERIAL #10</figcaption>
                              </figure>
                              <p>
                                Once the offending process is found, it can be killed from within the SQLPLUS prompt (logged in as system or sysdba) using: <blockquote class="blockquote"><kbd>ALTER SYSTEM KILL SESSION '&lt;SID&gt;,&lt;SERIAL#&gt;');</kbd></blockquote> The result of this command in our current example is illustrated below:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/06AlterDBKillProcess.png">
                                <figcaption>Kill a Process From Inside Oracle 11g</figcaption>
                              </figure>
                              <p>
                                Rerunning the query from above confirms the kill (just to be sure!):
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/gatheringServerStatistics/07ProcessKilled.png">
                                <figcaption>Sucessfully Killed Process</figcaption>
                              </figure>
                              <p>
                                It is possible to kill a process outside of Oracle using the Linux command line, using <kbd>kill -9 &lt;spid&gt;</kbd>, but this should only be done if killing the process from inside of Oracle fails, as killing it from the Linux commmand line doesn't do any graceful closures, it simply kills it.  In order to determine the SPID, you'll need to run <kbd>SELECT p.terminal , p.spid FROM V$PROCESS</kbd> in the SQLPUS terminal.
                              </p>
                            </div>
                          </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../includes/footer.php'; ?>
