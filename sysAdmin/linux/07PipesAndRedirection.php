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
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/06TextEditors.php">Previous</a></li>
                            <li class="next disabled"><a href="#">Next</a></li>
                        </ul>
                        <h2>Linux SysAdmin Lesson 7 - Shell Features - Pipes and Redirection</h2>
                        <iframe class="wideVideo" src="https://www.youtube.com/embed/-Z5tCri-QlI"  allowfullscreen></iframe>
                        <h3>Summary &amp; Contents</h3>
                        <p>
                            Part of the power of the Linux command line is the ability to send the output of one program as the input to another program.  This is an absolutely fundamental point.  Sending the output of one command as the input of another is called "piping" and is done with the  "pipe" key ( <kbd>|</kbd> ), which is usually somewhere around the <kbd>ENTER</kbd> key (often above it) and is on the same key as backward slash ( <kbd>\</kbd> ).  In rare cases, it looks like two vertial dashes, but usually it is one solid line.
                        </p>
                        <hr />
                        <p>
                            Outputting text to the command line can be performed using the <kbd>echo</kbd> command.  Demonstrated below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/07/echo.png">
                            <figcaption>The <kbd>echo</kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                            It is possible to use <kbd>echo</kbd> but redirect the output into a new file.  This removes the tediousness of creating a file using <kbd>mk someFile.txt</kbd> and then opeing an editor (usually Nano or VI) and then adding the text to the file.  These steps can be done in one easy command: <kbd>echo "This is the text I want to put into the file" > myNewFile.txt</kbd>.  I've demonstrated this below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/07/echoRedirect.png">
                            <figcaption>The <kbd>echo</kbd> Command Redirected to a File</figcaption>
                        </figure>
                        <p>
                            By the way, I used a new command in the above demonstration, which is <kbd>cat</kbd>.  This command simply outputs the contents of the file to the Terminal and is actually a quite powerful tool.  However, its use in the above example, its it simple enough.
                        </p>
                        <hr />
                        <p>
                            A quick word of caution about redirecting echo statments - the file will be completely rewritten each time this command is performed if only one greater than symbol ( <kbd>></kbd> ) is used.  In order to append new text to end of a file, two greater than symbols ( <kbd>>></kbd> ).  Demonstrated below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/07/echoRedirectAppend.png">
                            <figcaption>The <kbd>echo</kbd> Command Redirected and Appending to a File</figcaption>
                        </figure>
                        <hr />
                        <p>
                            If something that you are working on is creating an error message (that may show up in your terminal), its easy to redirect that error output to its own file.  In this way, you can record the error and be able to refer back to it later, without having to recreate the error.  Instead of using a lone greater than symbol ( <kbd>></kbd> ) or two  greater than symbols ( <kbd>>></kbd> ), the command used is <kbd>2></kbd>.  So, if something throws an error, or you suspect it will, you can redirect that error to its own file.  Demonstration below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/07/errorRedirect.png">
                            <figcaption>Redirecting an Error to its own file using the <kbd>2></kbd> Command</figcaption>
                        </figure>
                        <hr />
                        <p>
                          Once you understand basic redirection, the next step is to learn about piping.  Piping is the use of the <kbd>|</kbd> character, which in most keyboards is above the <kbd>\</kbd> character.
                        </p>
                        <p>
                          Piping redirects the output of one program into another program.  So, for example, you can send an email in the command line using <kbd>echo "This is the body of the email" | mail -s "Test" mydummyemail@gmail.com</kbd>.  Demonstration below:
                        </p>
                        <figure>
                            <img class="img-responsive centered" src="<?= $siteRoot; ?>images/sysAdmin/linux/linuxSysAdminCourse/07/pipingEmail.png">
                            <figcaption>Piping an Email in the Command Line</figcaption>
                        </figure>
                        <p>
                          One last quick note - in this video, Dave tried to send an email in the command line and it failed.  The video was getting long, so I'm sure he didn't want to take the time to set it up.  There's a great guide on how to set it up here:
                          <a href="http://rianjs.net/2013/08/send-email-from-linux-server-using-gmail-and-ubuntu-two-factor-authentication" target="_blank">Configure a Linux server to send email</a>.  I followed this guide and it worked right away!
                        </p>
                        <ul class="pager">
                            <li class="previous"><a href="<?= $siteRoot; ?>sysAdmin/linux/06TextEditors.php">Previous</a></li>
                            <li class="next disabled"><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
