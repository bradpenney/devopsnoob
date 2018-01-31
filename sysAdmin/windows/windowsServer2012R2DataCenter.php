<?php $title = 'Creating a Windows Server 2012  R2 Datacenter VM - DevOpsNoob.com'; ?>
<?php include '../../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Windows @ DevOpsNoob.com</h1>
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
                            <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>sysAdmin/windows.php">Learn Windows</a></li>
                            <li class="breadcrumb-item active">Creating a Windows Server 2012  R2 Datacenter VM</li>
                        </ol>
                        <h2>Creating a Windows Server 2012  R2 Datacenter Virtual Macine</h2>
                        <p>
                            This is a walk-through of installing a Windows Server 2012 R2 Datacenter on a Virtual Machine (VM).
                        </p>
                        <p>
                          The software required to follow this process will be:
                          <ul class="list-group">
                            <li class="list-group-item">
                              <p>
                                  <a href="http://www.vmware.com/products/workstation/workstation-evaluation.html" target="_blank">VMWare Workstation Pro 12.5 (Free Trial Available)</a>
                              </p>
                            </li>
                            <li class="list-group-item">
                              <p>
                                  <a href="https://www.microsoft.com/en-ca/Licensing/product-licensing/windows-server-2012-r2.aspx#tab=2" target="_blank">Windows Server 2012 R2 Datacenter</a>
                              </p>
                            </li>
                          </ul>
                        </p>
                        <div id="accordion">
                          <h4><small><strong>Step 1: Download the .iso file of Windows Server 2012 R2 Datacenter</strong></small></h4>
                          <div>
                            <p>
                                Unfortunately, this software isn't available to the general public without a significant investment.  Here's the link: <a href="https://www.microsoft.com/en-ca/Licensing/product-licensing/windows-server-2012-r2.aspx#tab=2" target="_blank">Windows Server 2012 R2 Datacenter</a> but be prepared for a hefty pricetag.  This software is available to me through my workplace.
                            </p>
                          </div>
                          <h4><small><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></small></h4>
                          <div>
                            <p>
                                If you don't have VMWare Workstation Pro 12, you can download it here: <a href="http://www.vmware.com/products/workstation/workstation-evaluation.html" target="_blank">VMWare Workstation Pro 12.5 (Free Trial Available)</a>.  Once you've downloaded and installed it, you can open it and be presented with a screen like this.  Click on "Create a New Virtual Machine":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/vmware.png">
                                <figcaption>VMWare Workstation Pro 12 Start Screen</figcaption>
                            </figure>
                            <p>
                                You can leave the default "Typical" option selected and click "Next":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/01NewVMWizard.png">
                                <figcaption>New Virtual Machine Wizard</figcaption>
                            </figure>
                            <p>
                                Select "I will install the operating system later" and click "Next":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/02GuestOS.png">
                                <figcaption>Guest Operating System Installation</figcaption>
                            </figure>
                            <p>
                              Since you're attaching the ISO later, you'll need to designate to VMWare the type of Guest OS you're installing:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/03SelectGuestOS.png">
                                <figcaption>Select Type of Guest Operating System</figcaption>
                            </figure>
                            <p>
                              Naming your Virtual Machine is the step.  In this case, we're going to be using this system as an Exchange Server in the future, so we'll name it accordingly.  By the way, this setting is easily changeable within VMWare later.  Also, be sure to select an appropriate file location for this VM. If its created on the local computer, it won't be portable.  In this example, I'm installing in on an external hard drive so I can move from host machine to host machine:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/04NameVM.png">
                                <figcaption>Name the Virtual Machine &amp; Pick File Location</figcaption>
                            </figure>
                            <p>
                              Next, specify the disk capacity you'd like your VM to have.  In our case, 60GB is plenty.  Be sure to pick a number that makes sense for you.  Further, if you're running on a modern file system, then you can make the VM as one file.  However, if you're running on FAT32, be sure to split the VM into multiple files:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/05DiskCapacity.png">
                                <figcaption>Specify Disk Capacity</figcaption>
                            </figure>
                            <p>
                              You're almost ready to create the VM.  In this "Typical" setup, VMWare has only allocated 2GB of RAM to the VM (automagically).  As we plan to use this server as an Exchange 2013 server in the future (and we've got RAM to spare), we're going to bump this up to 8GB.  Click "Customize Hardware":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/06CustomizeHardware.png">
                                <figcaption>Click "Customize Hardware"</figcaption>
                            </figure>
                            <p>
                              Bump the RAM up to 8GB (only if this makes sense in your setup!).  Be sure your host machine can handle this!
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/07AddRAM.png">
                                <figcaption>Increase the RAM to 8GB to support Exchange 2013 (later)</figcaption>
                            </figure>
                            <p>
                              Once this is done, click "Close" and then "Finish".  Your VM is ready!
                            </p>
                          </div>
                          <h4><small><strong>Step 3: Install Windows Server 2012 R2</strong></small></h4>
                          <div>
                            <p>
                              Before firing up your VM, you'll need to point it at an .iso file.  Click "Edit this Virtual Machine":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/09VMCreated.png">
                                <figcaption>Click "Edit this Virtual Machine to point it at an .iso</figcaption>
                            </figure>
                          </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
