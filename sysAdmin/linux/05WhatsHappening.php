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
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/04MoreBasicCommands.php">Previous</a></li>
                            <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/06TextEditors.php">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 5 - What's Happening On This Machine?</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/EbOEqycEFeM"  allowfullscreen></iframe>
                        <h3>Summary &amp; Contents</h3>
                        <p>
                            Learning what's going on within a computer is an important Systems Administration task.  Knowing who is logged in, what processes are running and what is happening with the network are vital bits of information for System Adminstrators.  Dave recommends using a program named "Htop" in order to see these things, but since you may not always be able to install this software, we're going to walk through a few built-in tools that can show the System Administrator what's going on in the computer.
                        </p>
                        <p>
                            The first tool is used to find out exactly who is logged into the computer.  The <kbd>who</kbd> shows the user names, but the simpler <kbd>w</kbd> command returns more detailed information.  The <kbd>w</kbd> command is demonstrated below. It returns such information as where the user is logged in (:0 means local user), user load average on the CPU and more.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/05/w.png">
                            <figcaption>The <kbd>w</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Linux command line users can monitor which processes are using the most computer resources using the <kbd>top</kbd> command.  The result, similar to Task Manager in Windows, is listed in decending order from highest usage.  This allows System Administrators to ensure that no one process is taking up excessive amounts of CPU time - something that could be very useful in case of someone trying to hack into the network or the local machine.  <kbd>top</kbd> is the same as <kbd>top -c</kbd>, there are other flags that can be used to alter this command.  It should be noted that <kbd>top</kbd> is dynamic, as processes change the amout of CPU time they use, the list changes around.  This can be seen in real time while running the program. An example of <kbd>top</kbd> is demonstrated below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/05/top.png">
                            <figcaption>The <kbd>top</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Monitoring the network activity is also a critical part of System Administration.  Dave recommends using the <kbd>sudo netstat -tlupn</kbd> command to examine what's going on with the network.  <kbd>netstat</kbd> is one of those super-powerful and detailed commands that will require a lot more discussion throughout this video series.  For now, however, <kbd>sudo netstat -tlupn</kbd> is demonstrated below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/05/netstat-tlupn.png">
                            <figcaption>The <kbd>sudo netstat -tlupn</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Dave mentions the program htop in this video but doesn't explain in detail how to install it.  The process is simple: <kbd>sudo apt-get install htop</kbd> will result in the following process (ONLY INSTALL SOFTWARE ON COMPUTERS IF YOU ARE EXPRESSLY ALLOWED TO DO SO!):
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/05/installhtop.png">
                            <figcaption>The <kbd>sudo apt-get install htop</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Once installed, htop can be run by entering <kbd>htop</kbd> into the Linux command line.  It produces a fairly easy to read and comprehend system utility that allows System Adminstrators to monitor system activity at a glance.  It looks like this while running:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/05/htop.png">
                            <figcaption>The <kbd>htop</kbd> Utility</figcaption>
                        </figure>
                        <ul class="pager">
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/04MoreBasicCommands.php">Previous</a></li>
                            <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/06TextEditors.php">Next</a></li>
                        </ul>
                        <?php include '../../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
