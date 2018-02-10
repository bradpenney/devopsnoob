<?php $title = 'Create a Kali Linux Virtual Machine using VMWare Workstation 14 - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Create A Kali Liunx Virtual Machine using VMWare Workstation 14</li>
                        </ol>
                        <h2>Create A Kali Linux Virtual Machine using VMWare Workstation 14</h2>
                        <p>
                            For anyone interested in cybersecurity, Kali Linux is a great place to start.  It has a full suite of offensive security tools, ready for deployment.  If you'd rather more defensive/development security distribution of Linux, check out <<a href="<?= $siteRoot; ?>sysAdmin/linux/kaliInstall.php">Parrot Security OS</a>.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Download the .iso file of Kali Linux</strong></h4>
                            <div>
                                <p>
                                    Using the following link, <a href="https://www.kali.org/downloads/" target="_blank">Kalix Linux</a>, download the .iso file and place it wherever you're planning to place the virtual machine (VM).  In my case, I setup a directory in which to house the VM called <em>Kali Linux</em>, simply to make maintenance of the VM easier.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/01downloadISO.png">
                                    <figcaption>Download Parrrot Security OS .iso</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/02chooseDownloadLocation.png">
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
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/03CreateVM.png">
                                  <figcaption>Create New Virtual Machine</figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/04NewVirtualMachineWizard.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/05GuestOperatingSystemSelection.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/06OtherLinuxKernel.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/07NameLocationVM.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/08SpecifyDiskCapacity.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/09CustomizeHardware.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/10AddRAM.png">
                                  <figcaption></figcaption>
                              </figure>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/11ReadyToCreateVM.png">
                                  <figcaption></figcaption>
                              </figure>
                          </div>
                          <h4><strong>Step 3: Install Kali Linux on Virtual Machine</strong></h4>
                          <div>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/12EditVMSettings.png">
                                <figcaption>Click "Edit Virtual Machine Settings"</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/13AddISO.png">
                                <figcaption>Add the .iso File Downloaded Earlier</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/14StartupGuest.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/15InstallKali.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/16ChooseLanguage.png">
                                <figcaption>Choose Language</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/17ChooseLocation.png">
                                <figcaption>Choose Location</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/18ChooseKeyboard.png">
                                <figcaption>Choose Keyboard</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/19ChooseHostname.png">
                                <figcaption>Choose Hostname</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/20ChooseDomain.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/21SetRootPwd.png">
                                <figcaption>Set Root Password</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/22ConfirmRootPwd.png">
                                <figcaption>Confirm Root Password</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/23TimeZone.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/24PartitionDisk.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/25PartitionDisk02.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/26PartitionDisk03.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/27PartitionDisk04.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/28PartitionDisk05.png">
                                <figcaption>Partition Disks</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/29Installing.png">
                                <figcaption>Installing</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/30NetworkMirror.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/31HTTPProxy.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/32InstallGRUB.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/33SelectDeviceForGRUB.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/34InstallFinished.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/35LoginScreen.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/36EnterPassword.png">
                                <figcaption></figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/37InstallComplete.png">
                                <figcaption></figcaption>
                            </figure>
                          </div>
                          <h4><strong>Step 4: Preserve Your Kali Linux Installation with a VMWare SnapShot</strong></h4>
                          <div>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/38TakeSnapshot.png">
                                <figcaption>Protect Your Install with a Snapshot</figcaption>
                            </figure>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/39NameSnapshot.png">
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
