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
                          <h4><strong>Step 1: Download the .iso file of Windows Server 2012 R2 Datacenter</strong></h4>
                          <div>
                            <p>
                              Unfortunately, this software isn't available to the general public without a significant investment.
                            </p>
                            <p>
                              Here's the link <i class="fas fa-arrow-right"></i> <a href="https://www.microsoft.com/en-ca/Licensing/product-licensing/windows-server-2012-r2.aspx#tab=2" target="_blank">Windows Server 2012 R2 Datacenter</a>
                            </p>
                            <p>
                              Be prepared for a hefty pricetag.  Luckily, this software is available to me through my workplace.
                            </p>
                          </div>
                          <h4><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></h4>
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
                              Naming your Virtual Machine is the next step.  In this case, we're going to be using this system as an Exchange 2013 server in the future, so we'll name it accordingly.  By the way, this setting is easily changeable within VMWare later.  Also, be sure to select an appropriate file location for this VM. If its created on the local computer, it won't be portable (without a long copy/paste session!).  In this example, I'm installing in on an external hard drive so I can move from host machine to host machine:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/04NameVM.png">
                                <figcaption>Name the Virtual Machine &amp; Pick File Location</figcaption>
                            </figure>
                            <p>
                              Next, specify the disk capacity you'd like your VM to have.  In this case, 60GB is plenty.  Be sure to pick a number that makes sense for you.  Further, if you're running on a modern file system, then you can make the VM as one file.  However, if you're running on FAT32, be sure to split the VM into multiple files:
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
                          <h4><strong>Step 3: Install Windows Server 2012 R2</strong></h4>
                          <div>
                            <p>
                              Before firing up your VM, you'll need to point it at an .iso file.  Click "Edit Virtual Machine Settings":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/09VMCreated.png">
                                <figcaption>Click "Edit Virtual Machine Settings" to point it at an .iso</figcaption>
                            </figure>
                            <p>
                              Point the VMWare BIOS at the .iso.  Once this is complete, click "Ok" and then "Power On This Virtual Machine":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/10AddISO.png">
                                <figcaption>Click "Edit this Virtual Machine" to point it at an .iso</figcaption>
                            </figure>
                            <p>
                              Your VM should start up and immediately find the Windows .iso file.  You'll see some Windows logos, and the VM will stop for input at this screen:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/11WindowsSetup.png">
                                <figcaption>Windows Setup: Language, Time Zone, Input Method</figcaption>
                            </figure>
                            <p>
                              Once you've selected your desired parameters, click "Next".  The next stop is "Install Now":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/12InstallNow.png">
                                <figcaption>Install Windows Server 2012 R2 Datacenter Now!</figcaption>
                            </figure>
                            <p>
                              Windows Server 2012 R2 comes in two flavors: Core and Standard.  Core is command line only, and Standard has a GUI.  In this particular instance, we're going to use this server as an Exchange server, so the GUI is absolutely necessary.  Select this option and click "Next":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/13SelectOS.png">
                                <figcaption>Select "Standard with GUI" Option</figcaption>
                            </figure>
                            <p>
                              You'll be prompted for your product key on the next page.  I've skipped this page (for obvious reasons!).  After the product key page, you'll need to accept the license terms:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/14LicenseAgreement.png">
                                <figcaption>Windows Server 2012 R2 Standard License Agreement</figcaption>
                            </figure>
                            <p>
                              The next screen is a little confusing (thanks Microsoft).  It seems to indicate that you have the option to upgrade this machine to Windows Server 2012 R2, even though this is a fresh machine that does not have any operating system on it at all....  In any case, choose "Custom: Install Windows Only":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/15TypeOfInstall.png">
                                <figcaption>Choose "Custom: Install Windows Only" for a Fresh Install</figcaption>
                            </figure>
                            <p>
                              You'll need to pick a partition to install this operating system onto now.  If the hard drive doesn't have any partitions yet, click "New".  In this case, we're going to select the entire hard drive as one partition.  Adjust this to your needs:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/16DiskPartition.png">
                                <figcaption>Create &amp; Select a New Disk Partition</figcaption>
                            </figure>
                            <p>
                              Once you've figured out your disk partitions and click "Next", your installation will begin:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/17InstallInProgress.png">
                                <figcaption>Windows Server 2012 R2 Standard Installation In Progress...</figcaption>
                            </figure>
                            <p>
                              During the install, Windows Server 2012 R2 will ask you for an administrator password.  <strong>Be sure to take note of this password</strong> - its really important!  Don't forget it:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/18SettingAdminPasswd.png">
                                <figcaption>Setting Administrator Password</figcaption>
                            </figure>
                            <p>
                              After this, your Windows Server 2012 R2 Standard (GUI) is complete!
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/19GUIComplete.png">
                                <figcaption>Windows Server 2012 R2 Standard (GUI) Install Complete!</figcaption>
                            </figure>
                          </div>
                          <h4><strong>Step 4: Basic Configuration of Windows Server 2012 R2</strong></h4>
                          <div>
                            <p>
                              In this section, we'll go over some basic configuration steps to set up your new Windows Server 2012 R2 Datacenter installation.  The first step will be to configure the IP address.  This is entirely dependent on your setup - I've pictured a sample that is custom to my needs.  It is possible that leaving the default DHCP settings will suffice for your needs.  In order to get to this screen you need to find the following settings: Network and Sharing Center -> View Adapter Settings -> Choose Adapter -> Right-click to Properties -> IPv4 "Properties":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/20AssignIPAddress.png">
                                <figcaption>Assign an IP Address Based On Your Needs</figcaption>
                            </figure>
                            <p>
                              As with any operating system install, you'll need to update it after installation.  Simply go to Windows Update center, and check for updates.  Install all the recommended updates at least.  Beware - this could take a long time (possibly more than an hour!):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/21CheckForUpdates.png">
                                <figcaption>Windows Server 2012 R2 Check for Updates</figcaption>
                            </figure>
                            <p>
                              If you need to join this server to a Domain (a server with Active Directory installed and active), this is done through System -> Change Name/Domain.  You'll need the user name and password for a domain administrator (or domain user that is allowed to add computers):
                            </p>
                            <figure>
                              <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/22JoinDomain.png">
                              <figcaption>Joining A Domain</figcaption>
                            </figure>
                            <p>
                              Another really common task is disabling Internet Explorer Enhanced Security Configuration for administrators, which makes navigating around a little easier for admins:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/23EnhancedSecurityOffForAdmins.png">
                                <figcaption>Internet Explorer Enhanced Security Configuation Off for Administrators</figcaption>
                            </figure>
                            <p>
                              Setting the update frequency for a server is also a critical initial setup task - the last thing you want is your server updating itself during the middle of a work day!  Those settings can be found through running <kbd>gpedit.msc</kbd> in the command prompt.  Then find Windows Update (Computer Configurations -> Windows Settings -> Windows Update) and make sure the server will only update when you want it to!
                            </p>
                            <figure>
                              <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/24SetServerUpdateFrequency.png">
                              <figcaption>Create a Scripts Directory Directly on C:\</figcaption>
                            </figure>
                            <p>
                              The final setup task we'll discuss here is creating a directory to keep any custom scripts that you'll be running in your server.  This directory should be easily accessible via terminals (commmand or PowerShell) so putting it directly on the C:\ drive is a good idea:
                            </p>
                            <figure>
                              <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/windows/windowsServer2012R2Datacenter/25CreateScripts.png">
                              <figcaption>Create a Scripts Directory Directly on C:\</figcaption>
                            </figure>
                            <p>
                              So at this point, you've installed Windows Server 2012 R2 Datacenter on a Virtual Machine, and even set up some basic configurations.  Congratulations!
                            </p>
                          </div>
                        </div>
                      <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
