<?php $title = 'Learn Windows @ DevOpsNoob.com'; ?>
<?php $description = 'Microsoft Windows is the most used desktop operating system across the IT industry.  It is absolutely crucial that a system administrator know the inner workings of Windows.  This page concentrates on the Microsoft Windows Servers, particularly Windows Server 2012 R2 and Windows 2016 (core and GUI).'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Windows @ DevOpsNoob</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>sysAdmin.php">Learn Systems Administration</a></li>
                      <li class="breadcrumb-item active">Learn Windows</li>
                  </ol>
                  <p>
                    Microsoft Windows is the most used desktop operating system across the IT industry.  It is absolutely crucial that a system administrator know the inner workings of Windows.  This page concentrates on the Microsoft Windows Servers, particularly Windows Server 2012 R2 and Windows 2016 (core and GUI).
                  </p>
                  <ul class="list-group">
                    <li class="list-group-item">
                        <h4>
                            <a class="inTextLink" href="https://web.sas.upenn.edu/jasonrw/2016/03/01/how-to-create-a-windows-image-for-mass-deployment/" target="_blank">How to Create a Windows Image for Mass Deployment</a>
                        </h4>
                        <p>
                          The need to clone and deploy a specific Windows configuration is critical to System Administration.  Check out this exceptional article (above) for a useful overview of the process.
                        </p>
                    </li>
                      <li class="list-group-item">
                          <h4>
                              <a class="inTextLink" href="windows/windowsServer2012R2DataCenter.php">Creating an Windows Server 2012 R2 Datacenter Virtual Machine using VMWare WorkStation Pro 12</a>
                          </h4>
                      </li>
                      <li class="list-group-item">
                        <p>
                          <a href="windows/pdfs/activeDirectory.pdf" target="_blank"><img class="thumbnail centered img-responsive" src="../images/sysAdmin/windows/activeDirectory.jpg"></a>
                        </p>
                        <p>
                          Above is an assignment about Active Directory that I completed for a course in Windows Server Administration.  The questions about Active Directory and its role in Windows Servers were specifically provided by the instructor.
                        </p>
                      </li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <?php include '../includes/googleAdsSidebar.php'; ?>
                </div>
              </div>
<?php include '../includes/footer.php'; ?>
