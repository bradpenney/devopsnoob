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
                            For anyone interested in cybersecurity, Parrot Security OS is a great place to start.  It has a full suite of offensive and defensive security tools, and as a bonus, it's ready for development in many languages as well.  It's a very well rounded tool!  For those trying to decide between <a class="inTextLink" href="<?= $siteRoot; ?>sysAdmin/linux/kaliInstall.php">Kali Linux</a> and Parrot Security OS, I believe Parrot Security OS to be a great choice.  However, as the distribution is less popular than <a class="inTextLink" href="<?= $siteRoot; ?>sysAdmin/linux/kaliInstall.php">Kali Linux</a>, it does have less documentation available online.  The community is great, just smaller.
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Download the .iso file of Parrot Security OS</strong></h4>
                            <div>
                                <p>
                                    <a class="inTextLink" href="https://www.parrotsec.org/download-full.fx" target="_blank">Download Parrot Security OS</a> to get started:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/01downloadISO.png">
                                    <figcaption>Download Parrrot Security OS .iso</figcaption>
                                </figure>
                                <p>
                                  Put the download wherever you're planning to place the virtual machine (VM).  In my case, I setup a directory in which to house the VM called <em>ParrotSecurityOS</em>, simply to make maintenance of the VM easier.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/02chooseDownloadLocation.png">
                                    <figcaption>Choose Download Location</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></h4>
                            <div>
                              <p>
                                  If you don't have VMWare Workstation Pro 14, you can download it here: <a class="inTextLink" href="https://my.vmware.com/en/web/vmware/info/slug/desktop_end_user_computing/vmware_workstation_pro/14_0" target="_blank">VMWare Workstation Pro 14.1 (Free Trial Available)</a>.  Download and install it and you're ready to begin!
                              </p>
                              <p>
                                  Open up VMWare and click on "Create a New Virtual Machine":
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/03CreateVM.png">
                                  <figcaption>Create New Virtual Machine</figcaption>
                              </figure>
                              <p>
                                Under the "New Virtual Machine Wizard" you'll select "Typical":
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/04NewVirtualMachineWizard.png">
                                  <figcaption>New Virtual Machine Wizard</figcaption>
                              </figure>
                              <p>
                                VMWare tries to make this process as simple as possible - if you add an .iso file here it'll try to assist you in the installation process.  As we're going to be doing things a little out of the ordinary, we'll add the .iso after we've built the VM:
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/05GuestOperatingSystemSelection.png">
                                  <figcaption>Install the Operating System later</figcaption>
                              </figure>
                              <p>
                                Parrot Security OS is not a standard distribution of Linux (like Ubuntu or Centos), so you'll need to select "Linux 4.x...":
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/06OtherLinuxKernel.png">
                                  <figcaption>Select Linux Kernel 4.x</figcaption>
                              </figure>
                              <p>
                                The next screen is where the VM gets a name and the location is assigned.  This is an important step - be sure to pick a folder on an external hard drive if you'd like this VM to be portable.  This is one of the most important aspects of a VM - it can be moved around.  Choose wisely:
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/07NameLocationVM.png">
                                  <figcaption>Name &amp; Define the Location of new Virtual Machine</figcaption>
                              </figure>
                              <p>
                                Picking the size of the guest operating system's hard drive depends largely on what you have available in your host computer.  Remember, this is dynamically allocated, so it isn't dedicated space.  It only needs to be available when the VM is running.  In my case, I've got lots of space available, so 500GB is a reasonable amount.  Also, be sure to put the VM into one file, unless you're using FAT32 (which is an old file system, pre-Windows XP!):
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/08SpecifyDiskCapacity.png">
                                  <figcaption>Specify Disk Capacity &amp; Make it one file</figcaption>
                              </figure>
                              <p>
                                It looks like you're done at this point - but VMWare (in all its wisdom) has only allocated 768MB of RAM to this VM.  While this will probably not fail, it will be really slow.  Click "Customize Hardware" to give your VM a little more RAM:
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/09CustomizeHardware.png">
                                  <figcaption>Click "Customize Hardware"</figcaption>
                              </figure>
                              <p>
                                Exactly how much RAM you give your VM is completely dependent on the host computer.  A good rule of thumb is to give the VM half of your host computer's RAM - so if you have 16GB, then give the VM 8GB.  This is exactly my situation, and what I've chosen:
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/10AddingRAM.png">
                                  <figcaption>Boost RAM Depending On Your System</figcaption>
                              </figure>
                              <p>
                                Once you've clicked "Close" you're ready to click "Finish" and create the new guest computer (virtual machine):
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/11ReadyToCreateVM.png">
                                  <figcaption>Create New Virtual Machine</figcaption>
                              </figure>
                              <p>
                                At this point, you've created the guest computer (VM), but with no operating system installed.  You're now ready to move onto the next step.
                              </p>
                          </div>
                          <h4><strong>Step 3: Install Parrot Security OS 3.11 on Virtual Machine</strong></h4>
                          <div>
                            <p>
                              Before installing the VM, we'll need to point it at the .iso file so it can read the Parrot Security OS software.  The first step is to click "Edit Virtual Machine Settings"
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/12EditVMSettings.png">
                                <figcaption>Click "Edit Virtual Machine Settings"</figcaption>
                            </figure>
                            <p>
                              Select the CD/DVD Drive, and then point it at the .iso file we downloaded earlier:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/13AddISO.png">
                                <figcaption>Add the .iso File Downloaded Earlier</figcaption>
                            </figure>
                            <p>
                              The following screen will appear.  If you click inside the window, your mouse will disappear, and you'll only be able to navigate with the keyboard.  Move the selector down to "Install":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/14InstallParrotSecurityOS.png">
                                <figcaption>Install Parrot Security OS</figcaption>
                            </figure>
                            <p>
                              "Standard Installer" is the correct option for this tutorial:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/15StandardInstall.png">
                                <figcaption>Choose "Standard Installer"</figcaption>
                            </figure>
                            <p>
                              Select which language you'd like:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/16SelectLanguage.png">
                                <figcaption>Choose Language</figcaption>
                            </figure>
                            <p>
                              Select your location:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/17SelectLocation.png">
                                <figcaption>Choose Location</figcaption>
                            </figure>
                            <p>
                              Choose your keyboard layout:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/18SelectKeyboard.png">
                                <figcaption>Choose Keyboard</figcaption>
                            </figure>
                            <p>
                              Next, you'll choose your <code>root</code> password.  This is important - don't forget it!  And make it complicated!  This will give you adminsitrator rights and allow you to make all kinds of changes to your operating system.  Choose wisely:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/19SetRootPwd.png">
                                <figcaption>Choose Root Password</figcaption>
                            </figure>
                            <p>
                              Confirm that you've typed the <code>root</code> password correctly (ever typed something wrong?):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/20ConfirmRootPwd.png">
                                <figcaption>Confirm Root Password</figcaption>
                            </figure>
                            <p>
                              Unlike <a class="inTextLink" href="<?= $siteRoot; ?>sysAdmin/linux/kaliInstall.php">Kali Linux</a>, Parrot Security OS automatically creates another user other than <code>root</code>.  Give their full name here:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/21SetupUser.png">
                                <figcaption>Input User Full Name</figcaption>
                            </figure>
                            <p>
                              Parrot Security OS takes the full name you've input and tries to make a reasonable username for that user.  Make sure it looks good to you:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/22ConfirmUsername.png">
                                <figcaption>Confirm Username</figcaption>
                            </figure>
                            <p>
                              Next, you'll give your user a password.  Still a good idea to make it complicated:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/23UserPwd.png">
                                <figcaption>Set User Password</figcaption>
                            </figure>
                            <p>
                              Type it again (to err is human!):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/24ConfirmUserPwd.png">
                                <figcaption>Confirm User Password</figcaption>
                            </figure>
                            <p>
                              Choose your time zone:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/25TimeZone.png">
                                <figcaption>Choose Time Zone</figcaption>
                            </figure>
                            <p>
                              Partitioning a hard drive is an advanced topic, particularly amoungst advanced Linux users.  For this install, let's keep it really simple and choose "Guided":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/26PartitionDisks.png">
                                <figcaption>Choose "Guided"</figcaption>
                            </figure>
                            <p>
                              Choose a disk to partition (there's only one choice so its pretty easy!):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/27PartitionDisks02.png">
                                <figcaption>Which Disk Shall I Partition?</figcaption>
                            </figure>
                            <p>
                              Putting important files in different partitions is a good idea - but for this install we'll keep it simple and choose "All files in one partition":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/28PartitionDisks03.png">
                                <figcaption>Choose "All files in one partition</figcaption>
                            </figure>
                            <p>
                              This is the progress we've make so far:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/29PartitionDisks04.png">
                                <figcaption>Overview of Disk Partitioning</figcaption>
                            </figure>
                            <p>
                              Parrot Security OS now wants to confirm that this disk partitioning setup is correct.  Choose "Yes":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/30ConfirmDiskPartition.png">
                                <figcaption>Confirm Disk Partition</figcaption>
                            </figure>
                            <p>
                              After installing for a while, Parrot Security OS will ask if you'd like to install GRUB (a boot manager).  Since this is the only operating system on this guest computer, choose "Yes":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/31InstallGRUB.png">
                                <figcaption>Install GRUB Bootloader</figcaption>
                            </figure>
                            <p>
                              Choose the only disk avaialble to install GRUB bootloader:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/32ChooseDiskForGRUB.png">
                                <figcaption>Choose Disk To Install GRUB Onto</figcaption>
                            </figure>
                            <p>
                              The installation process is complete!  Don't worry about taking the .iso out of the "CD/DVD" as VMWare manages this automatically.  However, if this causes problems later, simply follow the process we used above (but in reverse!):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/33FinishInstallation.png">
                                <figcaption>Finish Installation</figcaption>
                            </figure>
                            <p>
                              After your VM reboots, you'll get a login screen.  Login with the non-root user you created:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/34LoginScreen.png">
                                <figcaption>Initial Login Screen</figcaption>
                            </figure>
                            <p>
                              Parrot Security OS is successfully installed!  Congrats!
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/35InstallationComplete.png">
                                <figcaption>Installation Complete!</figcaption>
                            </figure>
                          </div>
                          <h4><strong>Step 4: Preserve Your Parrot Security OS Installation with a VMWare SnapShot</strong></h4>
                          <div>
                            <p>
                              Preserve your hard work with a VMWare snapshot.  This can be found in the VM Menu item:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/36TakeSnapshot.png">
                                <figcaption>Protect Your Install with a Snapshot</figcaption>
                            </figure>
                            <p>
                              Be sure to name it something you'll recognize later if you need to restore from a backup:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/parrotSecurityOSInstall/37NameSnapshot.png">
                                <figcaption>Descriptively Name Your Snapshot</figcaption>
                            </figure>
                            <p>
                              Congratulations!  You've successfully installed Parrot Security OS!  Have fun exploring!
                            </p>
                          </div>
                        </div>
                        <br />
                        <?php include '../../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
