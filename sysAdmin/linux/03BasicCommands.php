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
                          <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/02YourFirst5Minutes.php">Previous</a></li>
                          <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/04MoreBasicCommands.php">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 3 - Basic Commands</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/Lbh8Bh_SEzU"  allowfullscreen></iframe>
                        <h3>Summary &amp; Contents</h3>
                        <p>
                            In the command shell of Linux, lots of the commands have "flags".  This means that you can enter the basic command and get one result, and then if you enter the command accompanied by a "flag", it will return a different (often more detailed or specific) result.  Flags usually follow the original command and a hyphen.  As an example, the <kbd>ls</kbd> command could be followed by a <kbd> -a</kbd> , as in <kbd>ls -a + ENTER</kbd>, and the result will be a listing of <i>all</i> of the files in a directory, both hidden and normal files.  In Linux, a hidden file has a leading period.  As in <kbd>.hiddenFile</kbd>.  Hidden files are common in all operating systems, and usually contain mundane things that the average user doesn't need to see.  However, getting a listing of them could be vital in some System Administration tasks.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/ls-a.png">
                            <figcaption>The <kbd>ls -a</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            As a couple of side notes, the default shell (terminal) in Linux is known as BASH (Born-Again Shell).  There are other shells, but BASH is the default and the most common.  In BASH, if you hit the up arrow <kbd>&uarr;</kbd>, the previous command you entered will appear.  Continue hitting the up arrow (<kbd>&uarr;</kbd>) and BASH will cycle through all the commands you've entered since opening the shell.  This can be one of the most useful things for a System Adminsitrator to know, as typing the same commands over and over can be tiresome!  Finally, BASH has autocomplete functionality.  If you're entering a command and you hit <kbd>TAB</kbd>, BASH will attempt to autocomplete it for you.  If BASH has several options for autocomplete, it will display the options and then let the user keep typing until only one option is available.
                        </p>
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
                            The most basic command in Terminal or Shell is <kbd>pwd + ENTER</kbd> which stands for "Print Working Directory" and shows the user the file path to the current location.  For example:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/02/pwd.png">
                            <figcaption>The <kbd>pwd</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            In the Linux command line, tilde key, <kbd>~</kbd>, has a special function.  It represents the home directory for the current user.  No matter where you are in the file system, navigating back to the home directory is as simple as entering <kbd>cd ~ + ENTER</kbd>.  Here's an example:
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/tilde.png">
                            <figcaption>The <kbd>cd ~</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Another way to get to the home directory is simply to type <kbd>cd + ENTER</kbd> with no arguments.  This will also take the user to their home directory.
                        </p>
                        <hr />
                        <p>
                            Creating files in the Linux command line is easy too.  The command <kbd>touch mySampleFile.txt + ENTER</kbd> would create "mySampleFile.txt" in whichever directory the command currently is.  Simply substitute whichever filename is required to create it.  In the example below, "demonstrationFile.txt" is created on the Desktop (a couple of <kbd>ls</kbd> functions are inlcuded to show the file was actually created):
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/touch.png">
                            <figcaption>The <kbd>touch</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Creating directories in the Linux command line is just as easy (if not easier!) than creating files.  <kbd>mkdir mySampleDirectory + ENTER</kbd> will create a "mySampleDirectory" wherever the command currently is.  Obviously, you can create directories of whichever name you require.  An example is below, and again a couple of <kbd>ls</kbd> commands are used to show the directory was acutally created via command line:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/mkdir.png">
                            <figcaption>The <kbd>mkdir</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Moving files among directories in the Linux command line requries the use of the <kbd>mv</kbd> command.  For example, the <kbd>mv mySampleFile.txt mySampleDirectory + ENTER</kbd> would move the "mySampleFile.txt" into "mySampleDirectory".  This formula is important because it comes up in the Linux command line regularly - a command, a file to perform the command on, and then the target where to put the result.  An example of moving a file into a directory is included below, again with a couple of <kbd>ls</kbd> commands to show the file in the new directory:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/mv.png">
                            <figcaption>The <kbd>mv</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Removing files (usually referred to as deleting files, espcially by Windows users!) via the Linux command line is done using the <kbd>rm</kbd> command.  In the example below, I create a file named "aFileToRemove.txt" and then promptly remove it again - for demonstration purposes.  The specific command is <kbd>rm aFileToRemove.txt + ENTER</kbd>:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/rm.png">
                            <figcaption>The <kbd>rm</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Removing directories is much the same process as removing files, but the command <kbd>rmdir</kbd> is used instead.  An example is shown below, similar to the one above:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/rmdir.png">
                            <figcaption>The <kbd>rmdir</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            If a directory is not empty, attempting to remove it using <kbd>rmdir</kbd> will result in an error.  Going and removing every file within a directory before removing the directory itself would be a very tedious task . . . which is something computers a great at!  The command to remove all the files within a directory, and then the directory itself is <kbd>rm -r mySampleDirectory</kbd>.  Here is an example:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/rm-r.png">
                            <figcaption>The <kbd>rm -r</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Remembering all of these commands and all their possible flags is a huge mountain of information.  As you spend more time working within the command line, most of these will soak into your brain.  However, there is a shortcut that can be used to remember what a command does and all of the flags it takes.  That command is <kbd>man</kbd>.  Simply enter <kbd>man</kbd> plus whatever command you're trying to remember the function of, and a help screen appears reminding you of what you've forgotten (or never knew!).  When you're done, simply press <kbd>q</kbd> to quit!  Here is the result of running <kbd>man mkdir</kbd>:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/03/man_mkdir.png">
                            <figcaption>The <kbd>rmdir</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            A quick word of caution:  DO NOT USE THE FOLLOWING COMMAND: <kbd> rm -rf /</kbd>.  It will completely destroy your virtual machine (or a real machine if that's what you're working on).  This command will recursively delete everything in the root directory - your computer will have absolutely no operating system or any other data!
                        </p>
                        <ul class="pager">
                          <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/02YourFirst5Minutes.php">Previous</a></li>
                          <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/04MoreBasicCommands.php">Next</a></li>
                        </ul>
                        <?php include '../../includes/disqus.php'; ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
