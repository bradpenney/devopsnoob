<?php $title = 'Creating an openSUSE 13.2 Virtual Machine using VMWare WorkStation Pro 12 - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Creating an openSUSE 13.2 Virtual Machine using VMWare WorkStation Pro 12</li>
                        </ol>
                        <h2>Creating an openSUSE 13.2 Virtual Machine using VMWare WorkStation Pro 12</h2>
                        <p>
                            Traditionally, the use of Linux was limited largely by users being a little worried about installing it on their computers.  Having a Linux-only machine was worrisome, and though dual-booting was possible, it was often cumbersome.  In recent years, however, the ease of use and convenience of virtual machines has made having a Linux computer available for use an easy task.  This brief tutorial will walk through the steps required to set up an openSUSE virtual machine.
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
                                        <a href="https://software.opensuse.org/132/en" target="_blank">openSUSE 13.2 (Open Source, Gratis)</a>
                                    </p>
                                </li>
                            </ul>
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Download the .iso file of openSUSE 13.2</strong></h4>
                            <div>
                                <p>
                                    Using the following link, <a href="https://software.opensuse.org/132/en" target="_blank">openSUSE 13.2</a>, download the .iso file and place it wherever you're planning to place the virtual machine (VM).  In my case, I setup a directory in which to house the VM called <em>openSUSE</em>, simply to make maintenance of the VM easier.  openSUSE 13.2 is <strong>4.5GB</strong> so plan accordingly - ensure you've got enough time, bandwidth and data availablity to complete this download.  It can take a while!
                                </p>
                            </div>
                            <h4><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></h4>
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
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/createNewVM.png">
                                    <figcaption>New Virtual Machine Wizard</figcaption>
                                </figure>
                                <p>
                                    Ensure "Typical" is selected and click "Next".  Then click "Installer disc image file" and browse to wherever you saved the .iso file we downloaded in Step 1.  Again, I strongly recommend that you create a directory somewhere within your computer's file system that will house the .iso and the VM you are creating.  See this step below:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/discImage.png">
                                    <figcaption>Navigate to wherever you saved the .iso file</figcaption>
                                </figure>
                                <p>
                                    After clicking "Next", you'll be given the option of naming your new VM.  I chose the name "openSUSE 13.2", but feel free.  Remember, this will show up as the name of the machine, so naming it something fairly intuitive is better than "Goldfish".  But its up to you!
                                </p>
                                <p>
                                    Vastly more important on this screen is <strong>Location</strong> - be sure to browse and place your VM wherever you'd like - the default location is fine if you are only going to use this VM on this local computer, but in my case, I'm placing it on an external drive so the VM is portable.  If VMWare Workstation 12 is installed on a different computer (say, at work or at a friend's house), you can simply take your external storage to the other computer and your VM will work.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/location.png">
                                    <figcaption>Specify Name and Location for your VM</figcaption>
                                </figure>
                                <p>
                                    After clicking "Next" you'll be asked to specify the disk size of the virtual machine.  openSUSE recommends 20GB, but in this case I'm going to make it 50GB, just be be sure I have enough room. An important point here is that this is "MAXIMUM" size of the hard drive, so this VM will start out much smaller and will only reach its maximum size of 50GB if it is holding enough files to warrant the space usage.  In these days of relatively cheap disk storage, 50GB is only a small chunk of most hard drives.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/discCapacity.png">
                                    <figcaption>Specify Disk Capacity</figcaption>
                                </figure>
                                <p>
                                    Another "Next" results in a "Ready to Create Virtual Machine" dialogue, but before we do that we'll click on "Customize Hardware" and increase the amount of RAM this VM will have access to.  Keep in mind here that although openSUSE only needs 768MB of RAM to run, increasing it is a good idea of your computer has RAM to spare (as is the case with many computers today).
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/customize.png">
                                    <figcaption>"Customize Hardware" of your openSUSE VM</figcaption>
                                </figure>
                                <p>
                                    Depending on your computer's capability, increase the VM's RAM up to 4GB.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/increaseRAM.png">
                                    <figcaption>Increase VM RAM to 4GB (4096MB)</figcaption>
                                </figure>
                                <p>
                                    Again depending on your computer's capacity, increasing the number of processors and cores used by your openSUSE VM will increase its performace.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/increaseProcessors.png">
                                    <figcaption>Increase VM Processors &amp; Processor Cores</figcaption>
                                </figure>
                                <p>
                                    Once these modifications are done, click "Close" and "Finish" and you should be presented with a finished screen looking like this:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/done.png">
                                    <figcaption>VM Creation Complete!</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 3: Install openSUSE 13.2 on VM</strong></h4>
                            <div>
                                <p>
                                    The next step is to install openSUSE 13.2 on your new VM.   Clicking on the green arrow will begin the process.  The machine should "boot up" within the VMWare window provided.  Clicking inside the window converts your mouse to the mouse of the VM.   After a brief "Welcome" screen, you'll be see the following:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/startupScreen.png">
                                    <figcaption>openSUSE Initial Startup Screen</figcaption>
                                </figure>
                                <p>
                                    From the list above, using the keyboard, select "Installation" - after which several console screens will fly by, followed by several graphical pages and stop at the following, where you choose your keyboard layout, languages and licenses:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/keyboard.png">
                                    <figcaption>openSUSE Keyboard, Language and License Screen</figcaption>
                                </figure>
                                <p>
                                    More graphical screens will fly by, with the next stop being Installation Options.  At this point, I'm choosing not to install updates, they'll be installed later.  Choosing now is a fine option, but it does slow down the installation (sometimes dramatically).
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/installationOptions.png">
                                    <figcaption>openSUSE Installation Options</figcaption>
                                </figure>
                                <p>
                                    In the interest of simplicity, we will accept openSUSE's default partitioning of the hard drive.  Keep in mind that as this is all occuring inside a VM, the modfications being done are only done <strong>inside</strong> the VM, <strong>not to your local machine</strong>.  If everything in th is whole proess goes wrong, you can simply delete the VM and start again.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/partitions.png">
                                    <figcaption>Accept the default partitions of openSUSE</figcaption>
                                </figure>
                                <p>
                                    Next, you'll pick your time zone:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/timeZone.png">
                                    <figcaption>Pick your Time Zone</figcaption>
                                </figure>
                                <p>
                                    openSUSE supports multiple graphical user interfaces (GUIs).  Gnome and KDE are very popular - for this installation I'll use KDE, but I will come back and install Gnome later and illustrate switching between the two.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/desktopSelection.png">
                                    <figcaption>Pick your Time Zone</figcaption>
                                </figure>
                                <p>
                                    The next dialogue asks you to create new user.  You can choose whatever user name you want; be sure to write this stuff down (or memorize it) so that you don't forget it!  Also, be sure <em>not</em> to use the same password for the system administrator,  this is a bit of a security issue.  Remember 2 passwords!
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/createNewUser.png">
                                    <figcaption>Create New User</figcaption>
                                </figure>
                                <p>
                                    Because I didn't allow the administrator password to be the same as the user password, I must assign it separately.  No big deal - remember both passwords!
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/sysAdminPassword.png">
                                    <figcaption>System Administrator Password</figcaption>
                                </figure>
                                <p>
                                    And you are ready to install openSUSE 13.2!  Click "Install"!  If another warning appears, click "Install" on it as well.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/install.png">
                                    <figcaption>Intstall openSUSE!</figcaption>
                                </figure>
                                <p>
                                    As openSUSE installs, you'll get screens such as these:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/installing.png">
                                    <figcaption>Intstalling openSUSE</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 4: Initial Login to openSUSE 13.2</strong></h4>
                            <div>
                                <p>
                                    After the install process completes, the VM will reboot itself and present the user with the following login screen:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/login.png">
                                    <figcaption>Login to openSUSE</figcaption>
                                </figure>
                                <p>
                                    The first time you login to a KDE desktop (as I selected earlier), you're greeted with a help screen:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/kdeDesktop.png">
                                    <figcaption>KDE Helpscreen</figcaption>
                                </figure>
                                <p>
                                    Feel free to browse around the KDE Helpscreen, but once you're done this its a good idea to save the VM in its current state. We do this by powering off the VM by clicking in the lower left corner and selecting "Shutdown" under the leave tab.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/shutdown.png">
                                    <figcaption>Shutdown openSUSE</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 5: Preserve Your openSUSE Installation with a VMWare SnapShot</strong></h4>
                            <div>
                                <p>
                                    Feel free to browse around the KDE Helpscreen, but once you're done this its a good idea to save the VM in its current state. We do this by powering off the VM by clicking in the lower left corner and selecting "Shutdown" under the leave tab.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/shutdown.png">
                                    <figcaption>Shutdown openSUSE</figcaption>
                                </figure>
                                <p>
                                    Once the VM is shut down, its a great idea to take a "Snapshot" - a copy of the VM.  This will preserve it in its current form and can be rolled back to in case something breaks in the future.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/snapshot.png">
                                    <figcaption>VMWare Snapshot Dialogue</figcaption>
                                </figure>
                                <p>
                                    Name your snapshot something that you can find later with no problems:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/snapshotName.png">
                                    <figcaption>Shutdown openSUSE</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 6: Install GNOME desktop</strong></h4>
                            <div>
                                <p>
                                    So far we've created a VM with openSUSE 13.2, using a KDE desktop.  Any Linux user will be able to tell you about KDE and GNOME, and which is their favourite.  The idea here is to install both and let the end user explore both and decide which they' prefer.  Begin by powering up the VM (click the green arrow in VMWare).
                                </p>
                                <p>
                                    Once booted, click into the Launch Menu &rarr; Applications &rarr; System &rarr; YaST Control Center.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/yast.png">
                                    <figcaption>YaST Control Center in Launch Menu</figcaption>
                                </figure>
                                <p>
                                    You'll be asked to enter your ROOT (Sys Admin) password in order to enter into the control center:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/enterRoot.png">
                                    <figcaption>Enter Root Password</figcaption>
                                </figure>
                                <p>
                                    Enter "Software Management":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/yastSoftwareManagement.png">
                                    <figcaption>YaST Software Management</figcaption>
                                </figure>
                                <p>
                                    Dropdown the "View" button, and click on "Patterns"
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/viewPatterns.png">
                                    <figcaption>View &rarr; Patterns</figcaption>
                                </figure>
                                <p>
                                    Click on "GNOME Desktop Environment":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/gnomeInstall.png">
                                    <figcaption>Install GNOME Desktop</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/confirmationDialogue.png">
                                    <figcaption>Confirmation Dialogue</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/gnomeInstallProgress.png">
                                    <figcaption>GNOME Install Progress</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/gnomeInstallSuccessful.png">
                                    <figcaption>GNOME Install Successful</figcaption>
                                </figure>
                                <p>
                                    Installing a new desktop is one of the few things that will require a restart in openSUSE 13.2.  Click "Restart" in the Launcher:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/restart.png">
                                    <figcaption>Restart</figcaption>
                                </figure>
                                <p>
                                    Once your VM has restarted, you can select GNOME as the desktop, then login as per usual:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/launchGNOME.png">
                                    <figcaption>Select GNOME as the Desktop</figcaption>
                                </figure>
                                <p>
                                    Once openSUSE with GNOME desktop loads, take a few minutes to have a look around.  Its got pretty much all the same features, they're just located in slightly different menus.  The choice between KDE and GNOME (or other) is purely personal preference.  When you're done, click in the upper left corner, click the Power Button, and choose to "Shutdown".
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/shutdownGNOME.png">
                                    <figcaption>Shutdown openSUSE with GNOME Desktop</figcaption>
                                </figure>
                                <p>
                                    Once you've shut down your VM, you'll want to take another VMWare snapshot, calling it something like "installedGNOME":
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/installedGNOME.png">
                                    <figcaption>Take a Snapshot once GNOME Desktop is installed on openSUSE 13.2</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 7: Install Updates</strong></h4>
                            <div>
                                <p>
                                    Once you've got your openSUSE 13.2 VM working with both the KDE and the GNOME desktops, its time to do some updates.  You can use whichever desktop you like to perform these updates, but I'll do it in KDE.  Login to your openSUSE 13.2 VM and open "Terminal" from the Launcher:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/openTerminal.png">
                                    <figcaption>Open Terminal in openSUSE 13.2 KDE Desktop</figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/bash.png">
                                    <figcaption>BASH (Born-Again Shell) in openSUSE 13.2</figcaption>
                                </figure>
                                <p>
                                    The first command I'm going to run is going refresh our package manager.  Input <kbd>sudo zypper refresh</kbd>.  BASH will ask you for your root password.  New users of BASH often get confused here - BASH does not display any text while you type your root password.  Just go on faith - its typing.  Simply type your password and press enter.  Your screen should look similar to this:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/zypperRefresh.png">
                                    <figcaption>Refresh Zypper in BASH</figcaption>
                                </figure>
                                <p>
                                    The next command is <kbd>sudo zypper up</kbd>, which will perform updates.
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/zypperUpdate.png">
                                    <figcaption>Update Zypper</figcaption>
                                </figure>
                                <p>
                                    Zypper will probably offer to update a whole bunch of repositories - simply accept its changes:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/zypperUpdateNeeded.png">
                                    <figcaption>Zypper Updates Needed</figcaption>
                                </figure>
                                <p>
                                    Fair Warning - THIS IS A LONG PROCESS!  Be sure you have time for this to complete - at least half an hour.
                                </p>
                                <p>
                                    After the updates have completed, I'll need to reboot the computer.  I could close the Terminal (by clicking on the "X") and then restart via Lancher as before, or I can restart via BASH. I'll enter <kbd>sudo reboot</kbd>, then enter my root password, and the computer will restart in a similar way as if I had pressed "Restart" in Launcher.
                                </p>
                                <p>
                                    Once restarted, I'll verify the updates zypper just installed.  For example, your VM should now have some vm-tools.  Verify this by opening Terminal, and then typing <kbd>sudo zypper info open-vm-tools</kbd>.  It will look like this if it installed correctly:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/zypperVerified.png">
                                    <figcaption>Zypper Updates Verified</figcaption>
                                </figure>
                                <p>
                                    Feel free to play around with the VM at this point, make sure it still connects to the Internet, that you can create a file, and so on.  Everything should be working properly.
                                </p>
                                <p>
                                    The final step in this entire process is to shutdown the VM and once again create a VMWare Snapshot - with all updates included.  Be sure to name it something you'll understand later:
                                </p>
                                <figure>
                                    <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/openSUSEInstall/updatesInstalled.png">
                                    <figcaption>VMWare updatesInstalled Snapshot</figcaption>
                                </figure>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
