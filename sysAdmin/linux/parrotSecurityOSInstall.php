<?php $title = 'Create a Parrot Security OS 3.11 Virtual Machine using VMWare Workstation 14 - DevOpsNoob.com'; ?>
<?php include '../../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Linux @ DevOpsNoob.com</h1>
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
                            <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>sysAdmin/linux.php">Learn Linux</a></li>
                            <li class="breadcrumb-item active">Create A Parrot Security OS 3.11 Virtual Machine using VMWare Workstation 14</li>
                        </ol>
                        <h2>Create A Parrot Security OS 3.11 Virtual Machine using VMWare Workstation 14</h2>
                        <p>
                            For anyone interested in cybersecurity, Parrot Security OS is a great place to start.  It has a full suite of offensive and defensive security tools, and is ready for development as well.  Its a very well rounded tool!  For those trying to decide between Kali Linux and Parrot Security OS, I believe Parrot Security OS to be a great choice.  However, as the distribution is less popular than Kali, it does have less documentation available online.  The community is great, just smaller.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Download the .iso file of Parrot Security OS</strong></h4>
                            <div>
                                <p>
                                    Using the following link, <a href="https://www.parrotsec.org/download-full.fx" target="_blank">Parrot Security OS</a>, download the .iso file and place it wherever you're planning to place the virtual machine (VM).  In my case, I setup a directory in which to house the VM called <em>ParrotSecurityOS</em>, simply to make maintenance of the VM easier.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/01downloadISO.png">
                                    <figcaption>Download Parrrot Security OS .iso</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/02chooseDownloadLocation.png">
                                    <figcaption>Choose Download Location</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></h4>
                            <div>
                              <p>
                                  If you don't have VMWare Workstation Pro 14, you can download it here: <a href="https://my.vmware.com/en/web/vmware/info/slug/desktop_end_user_computing/vmware_workstation_pro/14_0" target="_blank">VMWare Workstation Pro 14.1 (Free Trial Available)</a>.  Once you've downloaded and installed it, you're ready to begn.
                              </p>
                              <p>
                                  Click on "Create a New Virtual Machine":
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/03CreateVM.png">
                                  <figcaption>Create New Virtual Machine</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/04NewVirtualMachineWizard.png">
                                  <figcaption>New Virtual Machine Wizard</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/05GuestOperatingSystemSelection.png">
                                  <figcaption>Select a Guest Operating System</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/06OtherLinuxKernel.png">
                                  <figcaption>Select Linux Kernel</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/07NameLocationVM.png">
                                  <figcaption>Name &amp; Define the Location of new Virtual Machine</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/08SpecifyDiskCapacity.png">
                                  <figcaption>SpecifyDiskCapacity</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/09CustomizeHardware.png">
                                  <figcaption>Click "Customize Hardware"</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/10AddingRAM.png">
                                  <figcaption>Boost RAM Depending On Your System</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/11ReadyToCreateVM.png">
                                  <figcaption>Create New Virtual Machine</figcaption>
                              </figure>
                          </div>
                          <h4><strong>Step 3: Install Parrot Security OS 3.11 on Virtual Machine</strong></h4>
                          <div>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/12EditVMSettings.png">
                                <figcaption>Click "Edit Virtual Machine Settings"</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/13AddISO.png">
                                <figcaption>Add the .iso File Downloaded Earlier</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/14InstallParrotSecurityOS.png">
                                <figcaption>Install Parrot Security OS</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/15StandardInstall.png">
                                <figcaption>Choose Standard Install</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/16SelectLanguage.png">
                                <figcaption>Choose Language</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/17SelectLocation.png">
                                <figcaption>Choose Location</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/18SelectKeyboard.png">
                                <figcaption>Choose Keyboard</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/19SetRootPwd.png">
                                <figcaption>Choose Root Password</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/20ConfirmRootPwd.png">
                                <figcaption>Confirm Root Password</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/21SetupUser.png">
                                <figcaption>Input User Full Name</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/22ConfirmUsername.png">
                                <figcaption>Confirm Username</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/23UserPwd.png">
                                <figcaption>Set User Password</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/24ConfirmUserPwd.png">
                                <figcaption>Confirm User Password</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/25TimeZone.png">
                                <figcaption>Choose Time Zone</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/26PartitionDisks.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/27PartitionDisks02.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/28PartitionDisks03.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/29PartitionDisks04.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/30ConfirmDiskPartition.png">
                                <figcaption>Confirm Disk Partition</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/31InstallGRUB.png">
                                <figcaption>Install GRUB Bootloader</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/32ChooseDiskForGRUB.png">
                                <figcaption>Choose Disk To Install GRUB Onto</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/33FinishInstallation.png">
                                <figcaption>Finish Installation</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/34LoginScreen.png">
                                <figcaption>Initial Login Screen</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/35InstallationComplete.png">
                                <figcaption>Installation Complete!</figcaption>
                            </figure>
                          </div>
                          <h4><strong>Step 4: Preserve Your Parrot Security OS Installation with a VMWare SnapShot</strong></h4>
                          <div>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/36TakeSnapshot.png">
                                <figcaption>Protect Your Install with a Snapshot</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/37NameSnapshot.png">
                                <figcaption>Descriptively Name Your Snapshot</figcaption>
                            </figure>
                          </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
