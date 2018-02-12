<?php $title = 'Creating an Oracle Linux 7.4 Virtual Machine using VMWare WorkStation Pro 14 - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Creating an Oracle Linux 7.4 Virtual Machine using VMWare WorkStation Pro 14</li>
                        </ol>
                        <h2>Creating an Oracle Linux 7.4 Virtual Machine using VMWare WorkStation Pro 14</h2>
                        <p>
                            Oracle Linux is a widely-used Enterprise Linux distribution.  As far as Enterprise Linux distributions, its main competition is RedHat.  Oracle Linux is used mainly to host Oracle databases, and a true Oracle-shop will consider nothing else as an option for their database server.  Below is a guide to installing Oracle Linux 7.4 on a Virtual Machine (VM).  If you're using a different hypervisor (say Oracle Virtualbox or Microsoft Hyper-V), the steps will be in a different order but will be very similar.  The steps inside the VM will match exactly.
                        </p>
                        <p>
                          Oracle Linux is often used to host a Oracle database <span class="glyphicon glyphicon-arrow-right"></span>  <strong><a class="inTextLink" href="<?= $siteRoot; ?>database/oracle11GInstall.php">Guide to Installing Oracle 11G on Oracle Linux 7.4</a></strong>.
                        </p>
                        <p>
                            The software required to follow this process will be:
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p>
                                        <a class="inTextLink" href="https://my.vmware.com/en/web/vmware/info/slug/desktop_end_user_computing/vmware_workstation_pro/14_0" target="_blank">VMWare Workstation Pro 14 (Free Trial Available)</a>
                                    </p>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        An Oracle Linux 7.4 .iso file will be required.  This can be downloaded (for free) directly from <a class="inTextLink" href="http://www.oracle.com" target="_blank">Oracle</a> but creation of a free account is required.  Please sign up for an account and then download the Oracle Linux 7.4 .iso file from Oracle's Software Delivery Cloud.
                                    </p>
                                    <p>
                                      The required file is <strong>V921569-01.iso, Oracle Linux Release 7 Update 4 for x86 (64 bit), 4.6 GB</strong>
                                    </p>
                                </li>
                            </ul>
                        </p>
                        <div id="accordion">
                            <h4><strong>Step 1: Create a NEW Virtual Machine in VMWare</strong></h4>
                            <div>
                                <p>
                                  Open VMWare Workstation Pro 14. Click on "Create a New Virtual Machine":
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/01-CreateNewVM.png">
                                  <figcaption>Create a New Virtual Machine</figcaption>
                                </figure>
                                <p>
                                  Ensure "Typical" is selected and click "Next".
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/02-NewVirtualMachineWizard.png">
                                  <figcaption>New Virtual Machine Wizard</figcaption>
                                </figure>
                                <p>
                                    Click "Installer disc image file" and browse to wherever you saved the Oracle Linux 7.4 .iso downloaded earlier.  It's strongly recommended that you create a directory somewhere within your computer's file system that will house the .iso <em>and</em> the VM you are creating.  See this step below:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/03-GuestOperatingSystemInstall.png">
                                  <figcaption>Guest Operating System Install</figcaption>
                                </figure>
                                <p>
                                  Based on the .iso file selected, VMWare has determined that Oracle Linux is Being installed.
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/04-SelectGuestOperatingSystem.png">
                                  <figcaption>Guest Operating System Install</figcaption>
                                </figure>
                                <p>
                                  It is possible to change the name of the VM at this point, but VMWare does a good job of auto-populating this field.  The choice is yours!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/05-NameVM.png">
                                  <figcaption>Name &amp; Location of VM</figcaption>
                                </figure>
                                <p>
                                  Note that I made a mistake at this point and forgot to relocate the VM to the correct folder.  I corrected this later, but you should learn from my mistake!
                                </p>
                                <p>
                                  Next, you'll need to specify the disk capacity for your VM.  Note that this space will only be used as required, so it won't be a 50GB chunk of your hard drive unless there is enough data in the VM to fill that space.
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/06-SpecifyDiskCap.png">
                                  <figcaption>Specify Disk Capacity</figcaption>
                                </figure>
                                <p>
                                  After installation, I learned that my system specifications asked for 100GB of hard disk space.  Again, learn from my mistakes!
                                </p>
                                <p>
                                  After specifying the hard disk space, you're almost done.  However, I like to increase the RAM in my VMs, as this makes it run faster and smoother.  Plus, the system specifications I am following recommend 8GB of RAM, as this VM is going to be a database server.
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/07-CustomizeHardware.png">
                                  <figcaption>Customize Hardware</figcaption>
                                </figure>
                                <p>
                                  After clicking "Custmoize Hardware", increase RAM to 8GB.  Note - only do this if your computer can support it!  16GB of RAM on the host computer is recommended in order to use 8GB on the VM.
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/08-AddedRAM.png">
                                  <figcaption>Adding RAM</figcaption>
                                </figure>
                                <p>
                                  The VM should be ready to be created!  Click "Finish" to make the magic happen!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/09-ReadyCreateVM.png">
                                  <figcaption>Ready to Create the VM</figcaption>
                                </figure>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/10-VMCreated.png">
                                  <figcaption>VM Successfully Created!</figcaption>
                                </figure>
                                <p>
                                  Congrats! You've successfully created a VM to house your Oracle Linux 7.4 installation!
                                </p>
                            </div>
                            <h4><strong>Step 2: Install Oracle Linux 7.4 on VM</strong></h4>
                            <div>
                              <p>
                                Upon bootup, you'll be asked to to test your installation media - which is a good idea.  Allow it to time out, or press ENTER:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/11-Oracle7Splash.png">
                                <figcaption>Initial Oracle Splash Screen</figcaption>
                              </figure>
                              <p>
                                Select your language &amp; Click Continue:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/12-LanguageSelect.png">
                                <figcaption>Language Select</figcaption>
                              </figure>
                              <p>
                                Next, you'll get the basic configuration screen.  You'll need to go through each of these options:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/13-InstallationSummaryStart.png">
                                <figcaption>Installation Summary Start</figcaption>
                              </figure>
                              <p>
                                When clicking "Software Selection", select the options that make sense.  In this case, "Server with GUI", with some developer tools and compatibility software:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/14-SoftwareSelection.png">
                                <figcaption>Software Selection</figcaption>
                              </figure>
                              <p>
                                When clicking "Installation Destination", select the hard drive that makes sense.  In this case, the default options are fine:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/15-InstallationDestination.png">
                                <figcaption>Installation Destination</figcaption>
                              </figure>
                              <p>
                                When clicking on "Network And Hostname", be sure the Ethernet is "On", otherwise you won't recieve updates and so on:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/16-NetworkAndHostname.png">
                                <figcaption>Network And Hostname</figcaption>
                              </figure>
                              <p>
                                When clicking "Security", be sure to select at least "Standard System Security Profile" for basic protection:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/17-SecurityPolicy.png">
                                <figcaption>Security Policy</figcaption>
                              </figure>
                              <p>
                                Of course, select the correct date and time as well.  After clicking on all these options, the configuration should be complete &amp; ready to "Begin Installation":
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/18-InstallationSummaryComplete.png">
                                <figcaption>Installation Summary Complete</figcaption>
                              </figure>
                              <p>
                                While the installation processes are completing, you'll see this screen:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/19-Configuration.png">
                                <figcaption>Configuration</figcaption>
                              </figure>
                              <p>
                                Be sure to set a Root Password.  In this demonstration case, I've selected a weak password.  Of course a good (or great) password is recommended for a real-life install:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/20-RootPassword.png">
                                <figcaption>Set Root Password</figcaption>
                              </figure>
                              <p>
                                Also create a user other than "root", as having only a root user on any Linux system is incredibly bad practice:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/21-UserCreation.png">
                                <figcaption>User Creation</figcaption>
                              </figure>
                              <p>
                                After creating the root password and an additional user, wait for the packages to install:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/22-InstallationInProgress.png">
                                <figcaption>Installation In Progress</figcaption>
                              </figure>
                              <p>
                                After all the packages have all installed, a reboot is required:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/23-InstallationComplete.png">
                                <figcaption>Reboot Required</figcaption>
                              </figure>
                              <p>
                                After a reboot, the installation continues:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/24-InitialSetup.png">
                                <figcaption>Initial Setup</figcaption>
                              </figure>
                              <p>
                                Click on "Licensing" and accept the Oracle Linux License Agreement:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/25-LicenseAgreement.png">
                                <figcaption>Oracle Linux License Agreement</figcaption>
                              </figure>
                              <p>
                                Assuming that your networking and hostname were set previously, the installation is done, click "Finish Configuration" to complete:
                              </p>
                              <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/26-InitialSetupComplete.png">
                                <figcaption>Finish Configuration</figcaption>
                              </figure>
                            </div>
                            <h4><strong>Step 3: Initial Setup of Oracle Linux 7.4</strong></h4>
                            <div>
                                <p>
                                  After you've installed Oracle Linux 7.4, there will still be a few final configuration steps.  You'll need to login first:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/27-LoginScreen.png">
                                  <figcaption>Login Screen</figcaption>
                                </figure>
                                <p>
                                  Select the language that works for you:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/28-LanguageSelect.png">
                                  <figcaption>Language Select</figcaption>
                                </figure>
                                <p>
                                  Select your keyboard layout:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/29-KeyboardSelect.png">
                                  <figcaption>Keyboard Select</figcaption>
                                </figure>
                                <p>
                                  Turn "Location Services" on or off, depending on your preferences:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/30-LocationServices.png">
                                  <figcaption>Location Services</figcaption>
                                </figure>
                                <p>
                                  Connect your online accounts if that is required:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/31-OnlineAccounts.png">
                                  <figcaption>Online Accounts</figcaption>
                                </figure>
                                <p>
                                  Finally, your Oracle Linux 7.4 installation is complete!
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/32-ReadyToGo.png">
                                  <figcaption>Ready To Go!</figcaption>
                                </figure>
                            </div>
                            <h4><strong>Step 4: Preserve Your Oracle Linux 7.4 Installation with a VMWare SnapShot</strong></h4>
                            <div>
                                <p>
                                  It's a really smart idea to create a snapshot of your VM at this point before digging in and playing with it.  First, turn off your server, then under the "VM" menu, create a snapshot:
                                </p>
                                <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/oracleLinuxInstall/33-BasicInstallSnapshot.png">
                                  <figcaption>Take a Snapshot!</figcaption>
                                </figure>
                            </div>
                        </div>
                        <br />
                        <?php include '../../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
