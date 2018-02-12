<?php $title = 'Creating a Mint 18.0 Virtual Machine using VMWare WorkStation Pro 12 - DevOpsNoob.com'; ?>
<?php include '../../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learning Linux @ DevOpsNoob.com</h1>
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
                            <li class="breadcrumb-item active">Creating a Mint 18.0 Virtual Machine using VMWare WorkStation Pro 12</li>
                        </ol>
                        <h2>Creating a Mint 18.0 Virtual Machine using VMWare WorkStation Pro 12</h2>
                        <p>
                            This is a walk-through of installing a Mint 18.0 Virtual Machine (VM) using VMWare Workstation Pro.  Mint 18.0 is from the Ubuntu family of Linux, and we will be installing it with the Cinnamon desktop environment.
                        </p>
                        <p>
                            The software required to follow this process will be:
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p>
                                        <a class="inTextLink" href="http://www.vmware.com/products/workstation/workstation-evaluation.html" target="_blank">VMWare Workstation Pro 12.5 (Free Trial Available)</a>
                                    </p>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <a class="inTextLink" href="https://www.linuxmint.com/edition.php?id=217" target="_blank">Linux Mint 18.0 "Sarah" Cinnamon</a>
                                    </p>
                                </li>
                            </ul>
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Download the .iso file of Mint 18.0 "Sarah"</strong></h4>
                            <div>
                                <p>
                                    Using the following link, <a class="inTextLink" href="https://www.linuxmint.com/edition.php?id=217" target="_blank">Mint 18.0 "Sarah"</a>, download the .iso file and place it wherever you're planning to place the virtual machine (VM).  In my case, I setup a directory in which to house the VM called <em>Mint</em>, simply to make maintenance of the VM easier.  Mint is <strong>1.6GB</strong> so plan accordingly - ensure you've got enough time, bandwidth and data availablity to complete this download.  It shouldn't take more than a few minutes if you have a decent Internet connection.
                                </p>
                            </div>
                            <h4><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></h4>
                            <div>
                                <p>
                                    If you don't have VMWare Workstation Pro 12, you can download it here: <a class="inTextLink" href="http://www.vmware.com/products/workstation/workstation-evaluation.html" target="_blank">VMWare Workstation Pro 12.5 (Free Trial Available)</a>.  Once you've downloaded and installed it, you can open it and be presented with a screen like this:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/vmware.png">
                                    <figcaption>VMWare Workstation Pro 12 Start Screen</figcaption>
                                </figure>
                                <p>
                                    Click on "Create a New Virtual Machine":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/createNewVM.png">
                                    <figcaption>New Virtual Machine Wizard</figcaption>
                                </figure>
                                <p>
                                    Ensure "Typical" is selected and click "Next".  Then click "Installer disc image file" and browse to wherever you saved the .iso file we downloaded in Step 1.  Again, I strongly recommend that you create a directory somewhere within your computer's file system that will house the .iso and the VM you are creating.  See this step below:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/guestOperatingSystem.png">
                                    <figcaption>Navigate to wherever you saved the .iso file</figcaption>
                                </figure>
                                <p>
                                    VMWare 12 doesn't automatically recognize Mint 18.0 as a valid operating system option, so we're going to have to manually tell it a little bit about the operating system.  We'll tell VMWare that we're installing Linux, and the version will be Ubuntu 64-bit.  This isn't exactly accurate, but VMWAre 12 lacks Mint 18 as an option. Since Mint 18 is based on Ubuntu, however, the settings should be safe and allow us to do whatever is necessary.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/selectOS.png">
                                    <figcaption>Select Linux and Ubuntu 64-bit (close enough!)</figcaption>
                                </figure>
                                <p>
                                    Next is a particularly important screen - name your VM and CHOOSE A LOCATION!  The name is only for reference later, but it is critical that you place the location of your VM where you want.  If you will only be working on this computer, then the local drive is fine.  However, if you want to move your VM, choose an appropriate place - for me, that's my external hard drive (so I can transport this VM to any computer with VMWare 12 on it).
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/nameVM.png">
                                    <figcaption>Name VM and Choose Location</figcaption>
                                </figure>
                                <p>
                                    Mint 18.0 doesn't require a lot of space, but I'm going to choose to increase the default of 20GB up to 50GB - it is highly unlikely I'll ever get to 50GB and the space won't be used unless its needed.  So 50GB is the MAXIMUM that this VM will ever be (at least hard drive space), not including snapshots.  Also, putting it into one file makes it a little faster - splitting into multiple files is only necessary if you're planning to store this VM somehwere with a FAT32 file system (unlikely!).
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/diskCapacity.png">
                                    <figcaption>Disk Capacity of 50GB</figcaption>
                                </figure>
                                <p>
                                    The VM is basically done at this point.  However, we're going to "Customize Hardware", so click there:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/createVM.png">
                                    <figcaption>Almost Done - Click "Customize Hardware"</figcaption>
                                </figure>
                                <p>
                                    First, we're going to increase the RAM of this VM, which will make it run faster.  For me, 4GB of RAM represents one quarter of the total RAM in my host machine, so it's not a stretch.  You'll have to use your own judgement here, based on what your computer can handle.  However, going past 4GB is hardly necessary.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/increaseRAM.png">
                                    <figcaption>Increase RAM to 4096MB (4GB)</figcaption>
                                </figure>
                                <p>
                                    Also, increase the number of processors to however many processors your computer has.  This may seem counterintuitive, but VMWare actually prefers that you allocate all processors to the VM, this makes it run smoother.  The VM and the Host work out who does what when (VMWare figures that out), but if you allocate less to the VM, it just has less to work with and is therefore slower.  Again, this is dependent on your computer - allocate as many cores as you have.  Click "Close" once you're done, and then "Finish" on the final screen.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/increaseProcessors.png">
                                    <figcaption>Increase Processors</figcaption>
                                </figure>
                                <p>
                                    Step 2 is complete!  You've created a VM to house Mint 18.0 in!
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/setupComplete.png">
                                    <figcaption>Mint 18 VM Inital Setup Complete!</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 3: Install Mint 18.0 onto VM</strong> </h4>
                            <div>
                                <p>
                                    At this point we're ready to power on the VM.  Click the little green arrow to power on your VM:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/powerOn.png">
                                    <figcaption>Power On your Mint 18.0 VM</figcaption>
                                </figure>
                                <p>
                                    After Mint starts up, you'll be confronted with a screen that looks like the Operating System is installed:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/mintStart.png">
                                    <figcaption>Mint 18.0 Initial Start Screen</figcaption>
                                </figure>
                                <p>
                                    However, this is simply Mint running off of the .iso file, similar to running off of a USB stick or a CD (lots of distributions of Linux can do this).  I want to intall Mint to this VM, and then it will be independent of the .iso, and it will be more similar to installing Mint on a phyisical computer.  I'll double click "Install Linux Mint" to do this.  The following window will result:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/installMint.png">
                                    <figcaption>Mint 18.0 Start Install Screen</figcaption>
                                </figure>
                                <p>
                                    After selecting a language, Click "Continue".  We're going to install third-party software, so select it an click "Continue":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/thirdParty.png">
                                    <figcaption>Install Third-Party Software</figcaption>
                                </figure>
                                <p>
                                    The next screen is a little frightening for a noob, but no worries.  We're not erasing the host machine hard drive - just the VM's hard drive.  So select "Erase Disk and Install Linux Mint" and click "Install Now".  This is where you'd do things like encryption and custom disk partitioning, but for now the default options will get you up and running:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/eraseDisk.png">
                                    <figcaption>Erase Disk</figcaption>
                                </figure>
                                <p>
                                    Mint throws one last scary message at you - click continue.  It will be OK!
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/scaryMessage.png">
                                    <figcaption>Click Continue - it won't explode!</figcaption>
                                </figure>
                                <p>
                                    Mint is also smart enough to try to figure out your timezone.  Modify it accordingly and click "Continue"
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/timezone.png">
                                    <figcaption>Select your Timezone</figcaption>
                                </figure>
                                <p>
                                    Mint asks you to detect your keyboard - adjust accordingly but standard is fine for me!
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/keyboard.png">
                                    <figcaption>Adjust Keyboard Settings</figcaption>
                                </figure>
                                <p>
                                    The final step before the installation takes place, Mint asks for user informaiton.  Fill this in to your liking - be sure to remember the passwords you select!  Click "Continue" ...
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/userSettings.png">
                                    <figcaption>User Settings</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/mintInstall.png">
                                    <figcaption>Mint Installing....</figcaption>
                                </figure>
                                <p>
                                    After a few minutes, Mint completes its installation.  You'll need to restart in order to finalize the installation:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/restartNow.png">
                                    <figcaption>Restart Mint</figcaption>
                                </figure>
                                <p>
                                    Upon restart, Mint may ask you to "Remove the Installation Medium" - what this means is that the .iso image we used to install is showing up as a DVD in the optical drive.  This can be corrected in VMWare by clicking on VM &rarr; Settings:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/settings.png">
                                    <figcaption>VM &rarr; Settings</figcaption>
                                </figure>
                                <p>
                                    Then switch to the physical drive instead of the .iso image:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/usePhysicalDrive.png">
                                    <figcaption>Use Physical Drive</figcaption>
                                </figure>
                                <p>
                                    Then return to the VM and press "ENTER".  You'll see the login screen next (the background changes):
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/loginScreen.png">
                                    <figcaption>Mint Login Screen</figcaption>
                                </figure>
                                <p>
                                    After you're logged in, you'll get a "Welcome Screen" that looks like this:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/welcomeScreen.png">
                                    <figcaption>Mint 18.0 Welcome Screen</figcaption>
                                </figure>
                                <p>
                                    After browsing anything you're interested in on the Welcome Screen, its time to shut down Mint 18.0 and take a "Snapshot" in VMWare, which you can roll back to at any point in the future, thereby ensuring you don't have to do this process again (unless you want to!).   Shut down by clicking the lower left corner and selecting the power button, which when hovered over brings up a menu which says "Quit":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/quit.png">
                                    <figcaption>Quitting Mint 18.0</figcaption>
                                </figure>
                                <p>
                                    To take a snapshot in VMWare, click "VM &rarr; Snapshot":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/snapshot.png">
                                    <figcaption>Take a Snapshot in VMWare Workstation 12</figcaption>
                                </figure>
                                <p>
                                    And name your snapshot somthing smart like "basicInstall" so you know what it is later:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/basicInstallSnapshot.png">
                                    <figcaption>basicInstall Snapshot</figcaption>
                                </figure>
                                <p>
                                    Step 3 is complete!  You've installed Mint 18.0 on a VM!
                                </p>
                            </div>
                            <h4><strong>Step 4: Install Updates for Mint 18.0 VM</strong></h4>
                            <div>
                                <p>
                                    You're now ready to start installing some updates for Mint 18.0.  Begin by powering up the VM and logging in.  When ready, it'll look like this:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/mintStartupInstalled.png">
                                    <figcaption>Mint Startup</figcaption>
                                </figure>
                                <p>
                                    Now its time to install the updates.  Open a "Terminal" window by typing <kbd>Ctrl + Alt + T</kbd> or by clicking the Terminal icon in the lower left corner.  We'll get our updates by typing <kbd>sudo apt-get update</kbd> and then entering our password (in BASH - aka Terminal - when you type a password it doesn't show up, just type the password and press ENTER!):
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/getUpdate.png">
                                    <figcaption><kbd>sudo apt-get update</kbd></figcaption>
                                </figure>
                                <p>
                                    To run all the upgrades, type <kbd>sudo apt-get upgrade</kbd>:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/upgrade.png">
                                    <figcaption><kbd>sudo apt-get upgrade</kbd></figcaption>
                                </figure>
                                <p>
                                    Mint will ask if you are sure you want to do the upgrades, simply type <kbd>Y + ENTER</kbd> to continue (this will take a few minutes):
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/confirmation.png">
                                    <figcaption>Confirmation Dialogue</figcaption>
                                </figure>
                                <p>
                                    Once the update/upgrade process completes you'll need to reboot the system to make sure that everything is up and running.  This can be done with <kbd>sudo reboot</kbd>:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/reboot.png">
                                    <figcaption><kbd>sudo reboot</kbd></figcaption>
                                </figure>
                                <p>
                                    At this point it makes a ton of sense to do another snapshot (see above if you're confused as to how).  A good snapshot name might be "updatesInstalled"
                                </p>
                            </div>
                            <h4><strong>Step 5: Install Open-VM-Tools</strong></h4>
                            <div>
                                <p>
                                    Its a good idea to install "OpenVMTools" on your VM, that way its a little easier to do things like "drag-and-drop" files, etc.  This isn't strictly mandatory, its just a comfort feature.  Start by opening a "Terminal" (<kbd>Ctrl + Alt + T</kbd>) and type <kbd>sudo apt-get install open-vm-tools</kbd>.  Once again, Mint will ask for the super user password and will ask you to confirm you'd like to install the packages you selected:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/openVMTools.png">
                                    <figcaption><kbd>sudo apt-get install open-vm-tools</kbd></figcaption>
                                </figure>
                                <p>
                                    We'll also be installing the desktop version of the OpenVMTools, using <kbd>sudo apt-get install open-vm-tools-desktop</kbd>:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/mint18Install/openVMToolsDesktop.png">
                                    <figcaption><kbd>sudo apt-get install open-vm-tools-desktop</kbd></figcaption>
                                </figure>
                                <p>
                                    After this completes, the installation is virtually done.  Be sure to mess around a little in Mint to make sure that the internet works, that the VM can go full screen, etc.
                                </p>
                                <p>
                                    The final thing to do to complete this VM installation is to shut down the VM and take a final snapshot.  The directions on how to do this are above, but again choose a sensible name such as "openVMToolsInstalled".
                                </p>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
