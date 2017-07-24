<?php $title = 'Linux SysAdmin Course - DevOpsNoob.com'; ?>
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
                            <li class="breadcrumb-item active">Linux SysAdmin Course</li>
                        </ol>
                        <ul class="pager">
                          <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/courseIntroduction.php">Previous</a></li>
                          <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/02YourFirst5Minutes.php">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 1 - Setting Up A Linux Virtual Machine</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/OLK49ZTbmWM" allowfullscreen></iframe>
                        <h3>Stepping Through the Process</h3>
                        <p>
                            For this lesson, Dave guides the process to create a Virtual Machine (an operating system that runs inside another operating systems). </p>
                        <p>
                            Running a VM is much safer than installing Linux on a phyiscal computer, because if something goes wrong it is very easy to simply delete the VM and start over.  The only data lost is what is stored in the VM, so it is unlikely family photos, etc will be lost.  The first step is to download a copy of Ubuntu - the current version being Ubuntu 16.04 LTS.
                        </p>
                        <p>
                            Ubuntu 16.04 is freely available at the link below:
                        </p>
                        <figure>
                            <a href="https://www.ubuntu.com/download/desktop" alt="Download Ubuntu Desktop" target="_blank"><img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuDownload.png"></a>
                            <figcaption><a href="https://www.ubuntu.com/download/desktop" alt="Download Ubuntu Desktop" target="_blank">Download Ubuntu Desktop</a></figcaption>
                        </figure>
                        <hr />
                        <p>
                            The free software used to create Virtual Machines is Oracle VirtualBox.  There are other options, but none as powerful or as FREE!
                        </p>
                        <p>
                            VirtualBox is freely available at the link below:
                        </p>
                        <figure>
                            <a href="https://www.virtualbox.org/wiki/Downloads?replytocom=98578" alt="Download VirtualBox" target="_blank"><img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/virtualBox.png"></a>
                            <figcaption><a href="https://www.virtualbox.org/wiki/Downloads?replytocom=98578" alt="Download VirtualBox" target="_blank">Download VirtualBox</a></figcaption>
                        </figure>
                        <hr />
                        <p>
                            VirtualBox is easy to install - once the .exe file downloads it runs automatically (in Windows 10) and the user is confronted with the following dialog box:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/virtualBoxSetup.png">
                            <figcaption>VirtualBox Setup Dialog</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Mid-way through the process, VirtualBox presents you with this ominous warning (below) which ran on my system without any problems:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/virtualBoxNetworkingWarning.png">
                            <figcaption>VirtualBox Network Warning Dialog</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Once correctly installed, VirtualBox presents the user with the following dialog:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/virtualBoxStartup.png">
                            <figcaption>VirtualBox Initial Startup</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Creating an Ubuntu Virtual Machine is easy - simply click on "New".  Although Dave walks through the "Guided Mode", I found it better to walk through the "Expert Mode", as my screenshots illustrate.  If you can spare it, I suggest giving the VM 4GB (4096MB) of RAM.  This will make your Ubuntu machine blazingly fast, but it'll run just fine on 2GB (2048MB) if that's all you can spare.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuVMCreationExpertMode.png">
                            <figcaption>Creating an Ubuntu VM in Expert Mode</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Make sure you allocate at least 12GB of hard drive space for your virtual machine.  I know Dave suggests 8GB is fine, but I tried to install it with 8GB and Ubuntu 16.04 (using hard drive encryption, we'll get there later) failed.  I went back and tried again with 12GB, worked perfectly.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuVMCreationExpertMode01.png">
                            <figcaption>Creating an Ubuntu VM System Setup</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Once your VM is set up, you'll be presented with the following screen.  Simply click on "Start" to run your VM.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/newUbuntuVM.png">
                            <figcaption>Brand New Ubuntu VM!</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Here's where the copy of Ubuntu 16.04 you downloaded earlier comes in.  Your VM will ask you to locate it.  A quick tip: move the .iso file into the same folder as the VM you created - this way you'll always be able to find it if you every need it in the future.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/findUbuntuDiskImage.png">
                            <figcaption>Find Ubuntu Disk Image</figcaption>
                        </figure>
                        <hr />
                        <p>
                            After Ubuntu completes its initial setup, you'll be confronted with the following screen, simply click on "Install Ubuntu":
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen.png">
                            <figcaption>Initial Startup Screen In Ubuntu 16.04</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Although Dave doesn't care to install the updates, I went ahead and did this step.  I'm thinking that this VM will be useful for more than just this course, so I might as well keep it up to date.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen01.png">
                            <figcaption>Download Updates &amp; Third-Party Software</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Again varying from Dave, I wanted to use file encryption as well as LVM.  I don't know if I'll regret this later - but I figured that using encrpytion is going to be standard in Systems Administraiton, so I might as well adapt to any headaches it causes now!
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen02.png">
                            <figcaption>Encryption and File System Options</figcaption>
                        </figure>
                        <hr />
                        <p>
                            If you choose to encrypt your files, you're going to need to assign an encrpytion password.  DO NOT FORGET THIS PASSWORD!  IT IS IRRETREIVEBALE IF LOST!  YOU WILL LOSE ALL YOUR DATA!
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen03.png">
                            <figcaption>Encryption Security Key Setup</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Ubuntu will ask you which time zone you're in - mostly so that it can set the clock correctly.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen04.png">
                            <figcaption>Regional Setup</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Ubuntu 16.04 will ask you what keyboard layout you'd like to use.  DVORAK anyone?
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen05.png">
                            <figcaption>Keyboard Setup</figcaption>
                        </figure>
                        <hr />
                        <p>
                            On the final setup screen Ubuntu 16.04 will ask you to enter your login credentials.  Once again, don't forget this stuff.  Its not as critical as the encryption password, but if you lose these credentials it will be a gigantic pain for you!
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen06.png">
                            <figcaption>Login Credentials Setup</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Now there's nothing left but waiting for Ubuntu 16.04 to install!  I am sure the screens that pop up sharing critical information with the user will keep you riveted to the screen.  Such fascinating reading!
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/ubuntuStartScreen07.png">
                            <figcaption>Wait while Ubuntu 16.04 Installs!</figcaption>
                        </figure>
                        <hr />
                        <p>
                            All done!  If your screen looks like the screenshot below, you've successfully installed an Ubuntu 16.04 virtual machine!
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/01/runningUbuntuVM.png">
                            <figcaption>Shiny New Ubuntu 16.04 Virtual Machine!</figcaption>
                        </figure>
                        <ul class="pager">
                          <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/courseIntroduction.php">Previous</a></li>
                          <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/02YourFirst5Minutes.php">Next</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
