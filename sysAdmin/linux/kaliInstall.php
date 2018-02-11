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
                            For anyone interested in cybersecurity, Kali Linux is a great place to start.  It has a full suite of offensive security tools, ready for deployment.  If you'd rather a more defensive/development security distribution of Linux, check out <a class="inTextLink" href="<?= $siteRoot; ?>sysAdmin/linux/parrotSecurityOSInstall.php">Parrot Security OS</a>.
                        </p>
                        <div id="accordion">
                          <h4><strong>Step 1: Download the .iso file of Kali Linux</strong></h4>
                          <div>
                              <p>
                                  Download the <a class="inTextLink" href="https://www.kali.org/downloads/" target="_blank">Kalix Linux .iso File</a>:
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/01downloadISO.png">
                                  <figcaption>Download Kali Linux .iso</figcaption>
                              </figure>
                              <p>
                                Place it wherever you're planning to place the virtual machine (VM).  In my case, I setup a directory in which to house the VM called <em>Kali Linux</em>, simply to make maintenance of the VM easier.
                              </p>
                              <figure>
                                  <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/02chooseDownloadLocation.png">
                                  <figcaption>Choose Download Location</figcaption>
                              </figure>
                          </div>
                          <h4><strong>Step 2: Create a NEW Virtual Machine in VMWare</strong></h4>
                          <div>
                            <p>
                                If you don't have VMWare Workstation Pro 14, you can download it here: <a class="inTextLink" href="https://my.vmware.com/en/web/vmware/info/slug/desktop_end_user_computing/vmware_workstation_pro/14_0" target="_blank">VMWare Workstation Pro 14.1 (Free Trial Available)</a>.  Once you've downloaded and installed it, you're ready to begn.
                            </p>
                            <p>
                                Click on "Create a New Virtual Machine":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/03CreateVM.png">
                                <figcaption>Create New Virtual Machine</figcaption>
                            </figure>
                            <p>
                              You'll begin with the "New Machine Wizard," where you can select a "Typical" setup:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/04NewVirtualMachineWizard.png">
                                <figcaption>New Machine Wizard - Typical Setup</figcaption>
                            </figure>
                            <p>
                              Instead of selecting an .iso file here, we'll add it later.  This way, VMWare won't try to autopopulate any defaults that you might not want:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/05GuestOperatingSystemSelection.png">
                                <figcaption>Select "Typical" Install</figcaption>
                            </figure>
                            <p>
                              Kali Linux isn't one of the standard options, so simply choose "Other Linux Kernel 4.0"
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/06OtherLinuxKernel.png">
                                <figcaption>Choose "Other Linux Kernel 4...</figcaption>
                            </figure>
                            <p>
                              Next, choose a name and a location for your virtual machine.  The location is particularly crucial, if you'd like your VM to be portable, you'll need to place it in an external hard drive.  Choose carefully:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/07NameLocationVM.png">
                                <figcaption>Choose a Name and File Location for the Virtual
                                Machine </figcaption>
                            </figure>
                            <p>
                              Specifying the disk capacity of your VM is another important consideration - its rare to use less than 50GB for a virtual machine.  Choose as large as you can based on how much storage space you have available.  In this example, I've selected 500G - remember this is dynamically allocated and will only be used if necessary.  Also, choose a single file if you're not using FAT32 (old!):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/08SpecifyDiskCapacity.png">
                                <figcaption>Specify hwo large the hard drive of the VM will be</figcaption>
                            </figure>
                            <p>
                              It may look like you're done here, but choose "Customize Hardware" and add some RAM - VMWare suggests  that you'll only need 768MB for this Linux machine - that's not enough to enjoy your computing experience:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/09CustomizeHardware.png">
                                <figcaption>Select "Customize Hardware"</figcaption>
                            </figure>
                            <p>
                              Similar to the hard drive, choosing how much RAM your VM will have is dependent on your host computer.  The more the better.  In this case, I'm choosing 8GB.  As a general rule, I choose half of the RAM that the host computer has, but there are always exceptions:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/10AddRAM.png">
                                <figcaption>Add as much RAM as can be spared</figcaption>
                            </figure>
                            <p>
                              After clicking "Close" on the previous screen, you're ready to create your VM!  This only takes a second.  At this point you've created a guest computer (virtual machine), and are ready to install the operating system on it.
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/11ReadyToCreateVM.png">
                                <figcaption>Create Your Guest Computer (Virtual Machine)</figcaption>
                            </figure>
                          </div>
                          <h4><strong>Step 3: Install Kali Linux on Virtual Machine</strong></h4>
                          <div>
                            <p>
                              So we've created a computer with a blank hard drive on which to install Kali Linux.  The first step will be to insert the .iso file in the "Optical Drive".  To start this process, click on "Edit Virtual Machine Settings":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/12EditVMSettings.png">
                                <figcaption>Click "Edit Virtual Machine Settings"</figcaption>
                            </figure>
                            <p>
                              Add the .iso file in the "CD/DVD Drive":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/13AddISO.png">
                                <figcaption>Add the .iso File Downloaded Earlier</figcaption>
                            </figure>
                            <p>
                              Save thses settings, and "Start Up the Guest Operating System":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/14StartupGuest.png">
                                <figcaption>Click "Start Up Guest Operating System"</figcaption>
                            </figure>
                            <p>
                              We're finally beginning to install the guest operating system, Kali Linux.  Click inside the window (your mouse will disappear), and use the keyboard to navigate down the list to "Install", and then press "Enter":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/15InstallKali.png">
                                <figcaption>Navigate to "Install" with your keyboard and press "Enter"</figcaption>
                            </figure>
                            <p>
                              Choose your language:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/16ChooseLanguage.png">
                                <figcaption>Choose Language</figcaption>
                            </figure>
                            <p>
                              Choose your location:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/17ChooseLocation.png">
                                <figcaption>Choose Location</figcaption>
                            </figure>
                            <p>
                              Choose your keyboard layout:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/18ChooseKeyboard.png">
                                <figcaption>Choose Keyboard</figcaption>
                            </figure>
                            <p>
                              Choose a hostname.  This is the name of your computer, and it will be what shows up if you're searching through the network to connect to it:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/19ChooseHostname.png">
                                <figcaption>Choose Hostname</figcaption>
                            </figure>
                            <p>
                              If you have a domain (if you're connected to a directory service such as Active Directory), thne you'll need to specify a domain.  If not, <code>localdomain</code> will suffice:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/20ChooseDomain.png">
                                <figcaption>Specify Your Domain</figcaption>
                            </figure>
                            <p>
                              Next, you'll set your <code>root</code> password.  This is for the master user of this computer.  It is absolutely critical you set a root password, and make sure you don't forget it!!  Choosing a strong password is a good idea:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/21SetRootPwd.png">
                                <figcaption>Set Root Password</figcaption>
                            </figure>
                            <p>
                              You'll need to confirm the password (to err is human!):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/22ConfirmRootPwd.png">
                                <figcaption>Confirm Root Password</figcaption>
                            </figure>
                            <p>
                              Choose your timezone:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/23TimeZone.png">
                                <figcaption>Choose Timezone</figcaption>
                            </figure>
                            <p>
                              This next section can be confusing for beginners.  However, Kali offers a reasonably simple process to follow.  As a beginner, select "Guided - use entire disk", which will use the entire disk that we created earlier for the installation of Kali Linux (it will still only be used if needed by VMWare):
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/24PartitionDisk.png">
                                <figcaption>Choose "Guided - use entire disk"</figcaption>
                            </figure>
                            <p>
                              Selecting the disk is straightfoward - there is only one:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/25PartitionDisk02.png">
                                <figcaption>Select which disk to install Kali Linux on</figcaption>
                            </figure>
                            <p>
                              Splitting a disk up into various partitions and storing various key files in different locations is a popular (and smart) choice amongst seasoned Linux users.  In this tutorial, however, we'll keep it simple.  Select "All files in one partition":
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/26PartitionDisk03.png">
                                <figcaption>Select "All files in one partition"</figcaption>
                            </figure>
                            <p>
                              At this point, you should get the following overview of your disk partition setup:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/27PartitionDisk04.png">
                                <figcaption>Overview of Disk Partitions</figcaption>
                            </figure>
                            <p>
                              Select "Yes" (you may have to hit the Tab key) in order to confirm your selection and begin to format the virtual hard drive:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/28PartitionDisk05.png">
                                <figcaption>Confirm Disk Partition Selections</figcaption>
                            </figure>
                            <p>
                              Finally, the installation of Kali Linux begins:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/29Installing.png">
                                <figcaption>Installation of Kali Linux begins!</figcaption>
                            </figure>
                            <p>
                              Partway through the installation process, Kali asks if you'd like to check a network mirror for updates to your software.  This is a good idea if you've got connectivity to the Internet:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/30NetworkMirror.png">
                                <figcaption>Use a Network Mirror if connected to the Internet</figcaption>
                            </figure>
                            <p>
                              You may have to use an HTTP Proxy Server to connect to the Internet.  In most cases, however, this won't be necessary:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/31HTTPProxy.png">
                                <figcaption>Use HTTP Proxy Server if necessary</figcaption>
                            </figure>
                            <p>
                              Kali Linux, like most distributions of Linux, is automatically set up to play nicely with other operating systems that could be found on the hard drive.  Its really common to dual or triple-boot a computer in the Linux world.  That isn't the case here - so you'll need to install GRUB right onto the master boot record as pictured below:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/32InstallGRUB.png">
                                <figcaption>Install GRUB on the Master Boot Record (MBR)</figcaption>
                            </figure>
                            <p>
                              Select device for GRUB to be installed onto - in this case, there's only one choice!
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/33SelectDeviceForGRUB.png">
                                <figcaption>Select device on which to install GRUB</figcaption>
                            </figure>
                            <p>
                              The installation process of Kali Linux is complete.  You won't need to worry about removing the installation media, although this can be done (see steps above and reverse the process) if this causes problems with your VM:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/34InstallFinished.png">
                                <figcaption>Installtion Process for Kali Linux is Complete!</figcaption>
                            </figure>
                            <p>
                              Once your system restarts, you'll need to log in.  The username is <code>root</code>:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/35LoginScreen.png">
                                <figcaption>Login as "Root"</figcaption>
                            </figure>
                            <p>
                              Remember the root password we set earlier?  Now's when you need it:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/36EnterPassword.png">
                                <figcaption>Enter Root's Password</figcaption>
                            </figure>
                            <p>
                              Congratulations!  You've installed Kali Linux!
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/37InstallComplete.png">
                                <figcaption>Successfuly Installed Kali Linux!</figcaption>
                            </figure>
                          </div>
                          <h4><strong>Step 4: Preserve Your Kali Linux Installation with a VMWare SnapShot</strong></h4>
                          <div>
                            <p>
                              Protecting your base configuration is a smart idea.  Take a snapshot via the VM Menu:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/38TakeSnapshot.png">
                                <figcaption>Protect Your Install with a Snapshot</figcaption>
                            </figure>
                            <p>
                              Name your snapshot something you'll understand and be able to reference later:
                            </p>
                            <figure>
                                <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/kaliInstall/39NameSnapshot.png">
                                <figcaption>Descriptively Name Your Snapshot</figcaption>
                            </figure>
                            <p>
                              One final note:  Kali Linux doesn't set up non-root users by default.  Anyone who maintains servers or even home computers should know that you shouldn't use your adminstrative account all the time.  Create a user with <code>sudo</code> rights and use that as your main login - only use <code>root</code> when you really need to.
                            </p>
                            <p>
                              Hopefully this guide was helpful and you start to enjoy using Kali Linux!
                            </p>
                          </div>
                        </div>
                        <br />
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
