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
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/05WhatsHappening.php">Previous</a></li>
                            <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/07PipesAndRedirection.php">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 6 - Text Editors</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/fEGSA68uAR4"  allowfullscreen></iframe>
                        <h3>Summary &amp; Contents</h3>
                        <p>
                            Before diving into text editors in the Linux command line, Dave goes back over a few of the basic commands we've been learning up to this point.  One that he failed to mention previously but is useful is the command to copy, <kbd>cp</kbd>.  Similar to other commands in Linux, it follows a familiar formula - command, target, destination.  So a common one would be <kbd>cp aTextFile.txt aCopiedTextFile.txt</kbd>.  An illustraiton in command line is below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/cp.png">
                            <figcaption>The <kbd>cp</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Another useful tip in navigating around the Linux command line is understanding what <kbd>.</kbd> and <kbd>..</kbd>.  The single dot, <kbd>.</kbd> literally means "this directory".  So it is valid syntax to copy a file to the current directory using <kbd>cp Documents/someFile.txt .</kbd>.  Two dots means the directory above the one that you are currently in.  The most common use of this is to type <kbd>cd ..</kbd>.  This moves up the file structure into the parent of the directory.  An example is below, notice how each <kbd>cd ..</kbd> command gets the user one step closer to root:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/cd.png">
                            <figcaption>The <kbd>cd ..</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            The first text editor that is readily available in the Linux command line is Nano.  Opening Nano is easy - simply type "nano" and the file name - <kbd>nano mySampleFile.txt</kbd> for example.  Nano is user friendly, and includes a menu at the bottom to help the user navigate.  Note that the caret symbol <kbd>^</kbd> denotes the use of <kbd>Ctrl</kbd> so <kbd>^X</kbd> means to press <kbd>Ctrl + X</kbd>.  Here are some demonstrations of Nano's use:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/nano.png">
                            <figcaption>Opening a File with Nano</figcaption>
                        </figure>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/nano01.png">
                            <figcaption>Inside the Nano Text Editor</figcaption>
                        </figure>
                        <hr />
                        <p>
                            The really important keyboard shortcut you'll need to use in Nano is Save <kbd>Ctrl + S</kbd>.  Note that at the bottom of Nano's display there is a list of shortcuts - learn to use them effectively.
                        </p>
                        <hr />
                        <p>
                            While Nano is a useful editor, especially when starting out, VI is the choice of most experienced Linux System Administrators.  To open a file in VI, enter <kbd>vi sampleFile.txt</kbd> where sampleFile.txt represents whichever file you'd like to view / edit.  A word of caution - VI is more powerful than Nano, but less user-friendly, especially to noobs.
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/vi.png">
                            <figcaption>The <kbd>vi</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            Once you've open a file in VI, exiting the program is more tricky than other programs we've encountered thus far.  To exit VI, hit <kbd>Esc</kbd> to enter command mode, then enter <kbd>:wq! + ENTER</kbd>, which will write the changes you've made and quit the program without any further prompts.  If you don't to save your changes, simply hit <kbd>Esc</kbd> to enter command mode and then enter <kbd>:q! + ENTER</kbd>.  Here's a demonstration:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/viExit.png">
                            <figcaption>The <kbd>vi</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            One final basic task that you'll need to perform on a regular basis in the Linux command line is renaming files.  This is a bit of an oddity for Windows users, but the command for renaming is actually the same as moving a file: <kbd>mv</kbd>.  As long as you don't specify a different directory (with a slash <kbd>/</kbd>), the file will simply be renamed as whatever you specify.  Here's a demonstration:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/06/mvRename.png">
                            <figcaption>Using the <kbd>mv</kbd> Command to Rename</figcaption>
                        </figure>
                        <ul class="pager">
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/05WhatsHappening.php">Previous</a></li>
                            <li class="next"><a href="<?= $siteRoot; ?>sysAdmin/linux/07PipesAndRedirection.php">Next</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
