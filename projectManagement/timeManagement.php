<?php $title = 'Learn Project Management @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Project Management @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>projectManagement.php">Learn Project Management</a></li>
                        <li class="breadcrumb-item active">Project Time Management</li>
                    </ol>
                    <div class="text-left">
                      <h2>Project Time Management</h2>
                      <p class="small">
                          This information is based in large part on the PMBOK&reg; Guide, 5th ed.  The sixth chapter of this guide is "Project Time Management" and the following is a brief synopsis of that chapter.
                      </p>
                      <p>
                        <blockquote>
                          Project Time Management includes the processes required to manage the timely completion of the project.<sup><a href="#fn1" id="ref1">1</a></sup>
                        </blockquote>
                      </p>
                      <figure>
                        <img class="img-responsive centered noShadow" src="<?= $siteRoot; ?>images/projectManagement/timeManagement.png">
                        <figcaption>Project Time Management Processes</figcaption>
                      </figure>
                      <p>
                        <strong><span class="glyphicon glyphicon-arrow-right"></span> Next Up: <a href="<?= $siteRoot; ?>projectManagement/costManagement.php">Project Cost Management</a></strong>
                      </p>
                      <div class="footnote">
                        <sup id="fn1">1. A Guide to the Project Management Body of Knowledge: (PMBOK<sup>&reg;</sup> Guide). (2013). Pennsylvania: Project Management Institute. pp. 141<a href="#ref1" title="Jump back to footnote 1 in the text.">↩</a></sup><br />
                      </div>
                      <br />
                    </div>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
