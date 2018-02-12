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
                          <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/01SettingUpLinuxVM.php">Previous</a></li>
                          <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/03BasicCommands.php">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 2 - Linux Command-Line for Beginners: Your First 5 Minutes</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/id3DGvljhT4" allowfullscreen></iframe>
                        <h3>Summary &amp; Contents</h3>
                        <p>
                            In order to complete this lesson, you'll of course have to start your Ubuntu VM, login and have it ready.
                        </p>
                        <p>
                            To open Terminal in Ubuntu, press <kbd>Ctrl+Alt+T</kbd>.  Once your terminal has opened, you should get a display that looks a little like this:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/terminalCommandPrompt.png">
                            <figcaption>Terminal Command Prompt</figcaption>
                        </figure>
                        <hr />
                        <p>
                            The most basic command in Terminal or Shell is <kbd>pwd + ENTER</kbd> which stands for "Print Working Directory" and shows the user the file path to the current location.  For example:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/pwd.png">
                            <figcaption>The <kbd>pwd</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            The next command users need to know is <kbd>ls + ENTER</kbd> which stands for "List", as in list the contents of the current directory.  As a quick side note, what most Windows users's call a "Folder" is known as a "Directory" in the Linux world.  The terms are often interchangeable, and it seems the concepts are essentially the exact same.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/ls.png">
                            <figcaption>The <kbd>ls</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            You can also list the contents of another directory, simply by specifying which directory you'd like to list the contents of.  In the example below, the input would be <kbd>ls /boot + ENTER</kbd>.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/lsAnotherDirectory.png">
                            <figcaption>The <kbd>ls</kbd> Command for Another Directory</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Changing directories is easy in the Terminal too.  Simply use the <kbd>cd</kbd> command, and specify which directory you'd like to move to.  In the example below, we move to the "bin" directory (bin stands for binary, and its a key directory in the Linux operating system).  Use <kbd>cd /bin + ENTER</kbd> to move to /bin:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/cd.png">
                            <figcaption>The <kbd>cd /bin</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Sometimes there is a lot of infomation showing on the terminal screen, which can be a little confusing to users.  The command <kbd>clear + ENTER</kbd>, predictably, clears the screen.  Sometimes clearing the screen and then running a new command will make the problem a lot clearer.  The <kbd>clear + ENTER</kbd> command (before &amp; after execution) is demonstrated below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/clearBefore.png">
                            <figcaption>The <kbd>clear</kbd> Command Before</figcaption>
                        </figure>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/clearAfter.png">
                            <figcaption>The <kbd>clear</kbd> Command After</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Moving "up" or "down" in a file path is fairly simple in Linux too.  To move "up" means to get closer to the "root", that is, the inital directory in which everything else is stored.  The command to go up a directory level is <kbd>cd .. + ENTER</kbd>.  Here is an example of moving up out of the Downloads directory into the Home directory:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/moveUp.png">
                            <figcaption>The <kbd>cd ..</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <ul class="pager">
                          <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/01SettingUpLinuxVM.php">Previous</a></li>
                          <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/03BasicCommands.php">Next</a></li>
                        </ul>
                        <?php include '../../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
