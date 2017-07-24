<?php $title = 'Creating a Windows Server 2012  R2 Datacenter VM - DevOpsNoob.com'; ?>
<?php include '../../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learning Windows @ DevOpsNoob.com</h1>
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
                        <h2>Creating a Windows Server 2012  R2 Datacenter VM</h2>
                        <p>
                            This is a walk-through of installing a Windows Server 2012 R2 Datacenter on a virtual machine (VM).
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
                                    If you don't have VMWare Workstation Pro 12, you can download it here: <a href="http://www.vmware.com/products/workstation/workstation-evaluation.html" target="_blank">VMWare Workstation Pro 12.5 (Free Trial Available)</a>.  Once you've downloaded and installed it, you can open it and be presented with a screen like this:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/vmware.png">
                                    <figcaption>VMWare Workstation Pro 12 Start Screen</figcaption>
                                </figure>
                                <p>
                                    Click on "Create a New Virtual Machine":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/customVM.png">
                                    <figcaption>New Virtual Machine Wizard</figcaption>
                                </figure>
                                <p>
                                    Ensure "Custom" is selected and click "Next". Be sure your hardware compatibility is set to "Workstation 12" and click "Next":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/hardware.png">
                                    <figcaption>New Virtual Machine Wizard - Hardware</figcaption>
                                </figure>
                                <p>
                                    Then click "Installer disc image file" and browse to wherever you saved the .iso file we downloaded in Step 1.  Again, I strongly recommend that you create a directory somewhere within your computer's file system that will house the .iso and the VM you are creating.  See this step below:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/guestSystem.png">
                                    <figcaption>New Virtual Machine Wizard</figcaption>
                                </figure>
                                <p>
                                    The next screen will ask you for your product key, the name of the computer, and the administrator password.  Input each accordingly:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/password.png">
                                    <figcaption>Enter Product Key, Server Name, Passwords</figcaption>
                                </figure>
                                <p>
                                    The next screen is critical if you'd like your VM to be portable.  In my case, I'm installing it on an external hard drive so I can move the VM to a new computer as required.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/VMLocation.png">
                                    <figcaption>Select location for your VM</figcaption>
                                </figure>
                                <p>
                                    Choose a firmware type, either works just fine:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/bios.png">
                                    <figcaption>Select Firmware for your VM</figcaption>
                                </figure>
                                <p>
                                    The next screen is processor configuration - specify as many as possible for your computer.  VMWare works best when it has access to as many cores as possible.   It will work out the co-operation with the host operating system behind-the-scenes.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/processors.png">
                                    <figcaption>Configure the Processors for your VM</figcaption>
                                </figure>
                                <p>
                                    The next decision to be made is how much RAM to allocate to the VM - as much as possible is a good rule of thumb.  In this case, I'm allocating 4096MB (4GB), which is enough for it to run but it isn't enough to make the server very fast.  Fast enough for my purposes, however:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/RAM.png">
                                    <figcaption>Configure the RAM for your VM</figcaption>
                                </figure>
                                <p>
                                    Because this server is being created with a specific use in mind, I'm electing to use bridged networking and I'll assign an IP address.  For most applications however, using NAT and piggy-backing onto the host's IP address is just fine.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/networkType.png">
                                    <figcaption>Configure the Network Type</figcaption>
                                </figure>
                                <p>
                                    Input/Output types is the next screen - which there isn't much choice in this application:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/io.png">
                                    <figcaption>Configure I/O</figcaption>
                                </figure>
                                <p>
                                    Going with the default SCSI hard drive is fine:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/diskType.png">
                                    <figcaption>Select Disk Type</figcaption>
                                </figure>
                                <p>
                                    Select a Disk:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/selectDisk.png">
                                    <figcaption>Select Disk</figcaption>
                                </figure>
                                <p>
                                    Select Disk Capacity.  I'm allocating 40GB (because 60 is probably overkill) and I'm going to be creating another 10GB disk later.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/diskCapacity.png">
                                    <figcaption>Disk Capacity</figcaption>
                                </figure>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
