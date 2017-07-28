<?php $title = 'Learn Database Administration @ DevOpsNoob.com'; ?>
<?php include './includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Database Administration @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item active">Learn Database Administration</li>
                    </ol>
                    <p>
                        Databases are ubiquitous in computing.  From the behemoth databases of Facebook and Google, down to the tiny databases that a small business might maintain, users interact with databases on a daily basis.  This page outlines some of the open-soucre database projects I've worked on, some of the resources I use and find to be excellent:
                    </p>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <h4>Video: NoSQL vs SQL: a Database Tutorial - Differences and advantages of NoSQL and SQL </h4>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/Jt_w2swkXAk" allowfullscreen></iframe>
                        <p>
                          For beginners who are learning the two different types of databases, this video is a gentle introduction.  Relational databases are still mainly used by traditional organizations who require a structured database, but truly large databases (Facebook, Google) use NoSQL.  This video will help you decide which is most appropriate for your project!
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>Video:  MongoDB In 30 Minutes</h4>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/pWbMrx5rVBE" allowfullscreen></iframe>
                        <p>
                          MongoDB is a document-based NoSQL database system that is incredibly flexible, powerful and useful in several different situations.  As usual, Traversy Media does a great job introducing the subject.
                        </p>
                      </li>
                      <li class="list-group-item">
                          <p>
                              <a href="https://github.com/bradpenney/dataDropDatabasePublic" target="_blank">Data Drop Database</a>
                              <a href="https://github.com/bradpenney/dataDropDatabasePublic" target="_blank"><img class="thumbnail centered" src="images/programming/dataDropDatabaseScreenshot.png"></a>
                          </p>
                          <p>
                            I've created a simple network drop database tool that is essentially a MySQL database that runs off a PHP website.  In essence, a website queries a simple database that holds information about data drops in a building.  Users can search by data drop number, VLAN, room number, rack, switch, and other parameters.  Users can also insert, update and delete information within the GUI.  This is all published under an open-source software license (<a href="https://choosealicense.com/licenses/gpl-3.0/" target="_blank">GPL v3.0</a>), so anyone can freely use it as long as they share any improvements they make!
                          </p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include './includes/footer.php'; ?>
