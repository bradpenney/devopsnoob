<?php $title = 'Moving Tablespaces with Recovery Manager on Oracle 11g &amp; Oracle Linux - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Moving Tablespaces with Recovery Manager on Oracle 11g &amp; Oracle Linux</li>
                        </ol>
                        <h2>Moving Tablespaces with Recovery Manager on Oracle 11g &amp; Oracle Linux</h2>
                        <p>
                          Oracle 11g is an enterprise-level relational database system that is widely used throughout the IT industry.  Recovery Manager (RMAN) gives Database Administrators peace of mind that their data is safe and secure.  One of the basic tasks that RMAN makes easy is manipulating tablespaces.  In this short tutorial, we'll demonstrate just how easy it is to move tablespaces with RMAN.  This page was largely inspired by <a class="inTextLink" href="https://dbatricksworld.com/how-to-relocate-move-oracle-datafiles-in-oracle-11g/" target="_blank"><em>DBAtricksWorld.com's</em> How to relocate/move oracle datafiles in Oracle 11g</a>.
                        </p>
                        <div id="accordion">
                            <h4><strong>Section 1: Getting Started</strong></h4>
                            <div>
                              <p>
                                In another tutorial, we <a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11gConfiguringRMAN.php">Setup &amp; Configured RMAN</a>.  Now, we need to log back into RMAN and get started:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/01LoginToRMAN.png">
                                <figcaption>
                                  Login to Recovery Manager (RMAN)
                                </figcaption>
                              </figure>
                              <p>
                                The first step is to <code>REPORT SCHEMA;</code>, which shows the tablespaces that RMAN is currently tracking:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/02ReportSchema.png">
                                <figcaption>
                                  Check Existing Tablespaces
                                </figcaption>
                              </figure>
                              <p>
                                The tablespaces we're going to be manipulating are Tablespaces 9 &amp; 10.  Note that they're currently located in <code>/u02/bkuprec/</code>, and we're going to change their location to <code>/u03/bkuprec/</code>.  This is a minor switch for demonstration purposes.  However, its easy to see how this could be a powerful tool for performance and tuning.  If a tablespace is really large, splitting it between mutliple storage locations (multiple disks) would be a really simple performance tuning which could dramatically improve performance.
                              </p>
                            </div>
                            <h4><strong>Section 2: Moving Tablespaces</strong></h4>
                            <div>
                              <p>
                                Before we can move a tablespace, we need to take it offline.  This is done with a simple RMAN command:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/03TakeTools_DataOffline.png">
                                <figcaption>
                                  Take the Target Tablespace Offline
                                </figcaption>
                              </figure>
                              <p>
                                Next, we make a copy of the datafile we're looking to move.  Notice this isn't a move, its a copy:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/04CopyFirstDatafile.png">
                                <figcaption>
                                  Copy the First Datafile
                                </figcaption>
                              </figure>
                              <p>
                                Then we tell RMAN to stop referencing the obsolete datafile, and start using the copy:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/05SwitchDatafile09ToCopy.png">
                                <figcaption>
                                  Switch to the Copy of Tablespace 9 Datafile
                                </figcaption>
                              </figure>
                              <p>
                                Since the tablespace we're working with has two datafiles, we're going to make a copy of the second as well.  This is optional, it is certainly possible to leave the second datafile where it is.  As mentioned earlier, spreading datafiles across multiple locations is a really simple but effective database tuning technique.  For this demonstration, we'll move both:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/06CopySecondDatafile.png">
                                <figcaption>
                                  Copy the Second Datafile
                                </figcaption>
                              </figure>
                              <p>
                                And we'll tell RMAN to start using the copy, not the original:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/07SwitchDatafile10ToCopy.png">
                                <figcaption>
                                  Switch to the Copy of Tablespace 10 Datafile
                                </figcaption>
                              </figure>
                              <p>
                                At this point, its a really smart idea to check to see if these datafiles are actually created in the filesystem.  Simply open another terminal and navigate to the directory you moved them to, in this case <code>/u03/bkuprec/</code>. A simple <code>ls -la</code> command shows the contents of the directory:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/13ConfirmInFileSystem02.png">
                                <figcaption>
                                  Confirm in Filesystem that New .dbf Files Exist
                                </figcaption>
                              </figure>
                              <p>
                                Since everything seems to be in order, go back to RMAN and restore the tablespace to online status:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/08RestoreTools_DataOnline.png">
                                <figcaption>
                                  Restore the Tablespace Online
                                </figcaption>
                              </figure>
                              <p>
                                Everything appears to be in order.  Move on to Section 3 to confirm this:
                              </p>
                            </div>
                            <h4><strong>Section 3: Confirming Move Was Successful</strong></h4>
                            <div>
                              <p>
                                As with everything in Database and Systems Administration, its always a good idea to validate that the expected results of a procedure are what actually happened.  We now expect that Tablespaces 9 &amp; 10 will be in the <code>/u03/bkuprec/</code> directory.  Check this with <code>REPORT SCHEMA;</code>:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/09ConfirmTableSpacesMoved.png">
                                <figcaption>
                                  Confirm the Tablespaces were Moved with <code>REPORT SCHEMA</code>
                                </figcaption>
                              </figure>
                              <p>
                                Since the move was successful, the old datafiles are obsolete and simply taking up space on the system.  These can be deleted using this command:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/10RemoveOldDatafile01.png">
                                <figcaption>
                                  Remove the First Obsolete Datafile
                                </figcaption>
                              </figure>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/11RemoveOldDatafile02.png">
                                <figcaption>
                                  Remove the Second Obsolete Datafile
                                </figcaption>
                              </figure>
                              <p>
                                The final step is to open another terminal and check to see that the files were actually deleted:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/database/movingTablespaceWithRMAN/12ConfirmInFilesystem01.png">
                                <figcaption>
                                  Confirm in Filesystem that Obsolete .dbf Files are Removed
                                </figcaption>
                              </figure>
                              <p>
                                Success!  Moving tablespaces in RMAN is a simple process, but an important one for competent Database Administrators to be able to perform.
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
