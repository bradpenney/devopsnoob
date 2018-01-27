<?php $title = 'Learn Database Management @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Database Management @ DevOpsNoob.com</h1>
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
                        <h4>Video:  Online Analytical Processing - A Brief Introduction</h4>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/v5kct2IhpcE" allowfullscreen></iframe>
                        <p>
                          Online Analytical Processing (OLAP) is a decision support system (DSS) that uses multidimensional data analysis techniques.  OLAP creates an advanced data analysis environment that supports decision making, business modeling, and operations research.
                        </p>
                      </li>
                      <li class="list-group-item">
                          <h4>
                              <a href="oracle11Gbackup.php">Oracle 11G Schema Backup Using Data Pump</a>
                          </h4>
                          <p>
                            A screenshot walkthrough of backing up a schema to another instance using Data Pump.  This is meant as an Activity Log to show how this works.
                          </p>
                      </li>
                      <li class="list-group-item">
                          <h4>
                              <a href="oracle11GInstall.php">Install Oracle 11G on an Oracle Linux 7.4 Virtual Machine</a>
                          </h4>
                          <p>
                            A screenshot walkthrough of installing Oracle 11G Database on a Oracle Linux 7.4 Virtual Machine.  This is meant as an Activity Log to show how this works.
                          </p>
                      </li>
                      <li class="list-group-item">
                        <h4><a href="<?= $siteRoot; ?>database/selectingNoSQL.php">Selecting a NoSQL Database</a></h4>
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
                      <li class="list-group-item">
                        <h4>Video: NoSQL vs SQL: a Database Tutorial - Differences and advantages of NoSQL and SQL </h4>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/Jt_w2swkXAk" allowfullscreen></iframe>
                        <p>
                          For beginners who are learning the two major categories of databases, this video is a gentle introduction.  Relational databases are still mainly used by traditional organizations who require a structured database, but truly large databases (Facebook, Google) use NoSQL.  This video will help you decide which is most appropriate for your project!
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
