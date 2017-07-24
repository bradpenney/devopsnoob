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
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/03BasicCommands.php">Previous</a></li>
                            <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/05WhatsHappening.php">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 4 - More Basic Commands</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/ZeZVkA1zjWg"  allowfullscreen></iframe>
                        <h3>Summary &amp; Contents</h3>
                        <p>
                            When typing commands into the Linux command line, it is pretty common to want to jump back the beginning or to the end of the commmand.  Noobs (like me) often simply press the appropriate arrow key and wait for the cursor to reach the destination.  However, there are a couple of keyboard shortcuts that do the job much faster and easier.  <kbd>Ctrl + A</kbd> jumps the cursor to the beginning of the command (so you can enter <kbd>sudo</kbd> for example).  <kbd>Ctrl+E</kbd> jumps the cursor to the end of the line, another useful shortcut.
                        </p>
                        <hr />
                        <p>
                            Another keyboard shortcut that aides navigation is <kbd>Ctrl-R</kbd>.  Like pressing the up arrow (<kbd>&uarr;</kbd>), <kbd>Ctrl+R</kbd> recalls previous commands, but unlike the up arrow, sorts the results by what you type next.  So, <kbd>Ctrl+R mkdir</kbd> will result in the most recent command where "mkdir" appeared.  Pressing <kbd>Ctrl+R</kbd> again will result in the next most recent command where "mkdir" appeared.
                        </p>
                        <hr />
                        <p>
                            If you enter a command in Linux that waits for you to enter more input (like the <kbd>Ctrl+R</kbd> mentioned above), there may be a time when you'd like to escape that waiting command.  In this case, <kbd>Ctrl+C</kbd> is the appropriate command.  <kbd>Ctrl+C</kbd> will get you out of all sorts of waiting situations in BASH.
                        </p>
                        <hr />
                        <p>
                            BASH allows users to create links to files.  In Windows, this is known as a shortcut - basically it is a file that points to the original file, not itself.  Putting shortcuts on the desktop is really common in Windows.  In Linux, the exact same principle applies, except it is called a link, and is easily created in the command line (and can show up on user's desktops, or wherever a link is needed.)  Creating a link is easy: simply type <kbd>ln -s fileName.txt linkName</kbd> where the flag <kbd>-s</kbd> stands for "symbolic link", and then the file you'd like to link to, and then whatever you'd like to name your link.  To be very clear, this does not create a copy of the file.  It simply creates a pointer to the original file - so any modifications done in this file will be in the original file.  There is no copy! An example is shown below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/ln-s.png">
                            <figcaption>The <kbd>ln -s</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            We've already covered the <kbd>ls</kbd> command and how it lists the files in a directory.  However, using the flag <kbd>-l</kbd>, as in <kbd>ls -l</kbd>, provides a longer listing of the files in a directory.  It shows things such as permissions for use, when it was created and/or modified, and many more details.  A comparison is below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/ls-l.png">
                            <figcaption>The <kbd>ln -s</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Another set of useful commands is <kbd>head</kbd> and <kbd>tail</kbd>.  The <kbd>head</kbd> command opens the first ten lines of a file, whereas the <kbd>tail</kbd> command opens the last ten lines of a file.  Of course, the command is issued and then the file in question is added as an argument.  See below for exact usage:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/head.png">
                            <figcaption>The <kbd>head</kbd> Command</figcaption>
                        </figure>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/tail.png">
                            <figcaption>The <kbd>tail</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Shutting off the computer, or restarting the computer are similar commands in Linux command line.  The command <kbd>shutdown -r now</kbd> will restart the computer right away.  To delay the restart, the user could type <kbd>shutdown -r +60</kbd> (restart in 60 minutes).  In a similar way, shutting down a system is accomplished by <kbd>shutdown -h now</kbd>.  Notice the "-h" flag, which stands for "halt".  Shutdown can be offset by any number of mintues using <kbd>shutdown -h 240</kbd> where "240" could be any number.  The final way to shutdown a computer is using the <kbd>poweroff</kbd> command.  Below are some examples in action:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/restartNow.png">
                            <figcaption>The <kbd>shutdown -r now</kbd> Command</figcaption>
                        </figure>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/haltNow.png">
                            <figcaption>The <kbd>shutdown -h now</kbd> Command</figcaption>
                        </figure>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/halt+60.png">
                            <figcaption>The <kbd>shutdown -h 60</kbd> Command</figcaption>
                        </figure>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/04/poweroff.png">
                            <figcaption>The <kbd>poweroff</kbd> Command</figcaption>
                        </figure>
                        <ul class="pager">
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/03BasicCommands.php">Previous</a></li>
                            <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/05WhatsHappening.php">Next</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
