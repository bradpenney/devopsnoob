<?php $title = 'BASH Linux Commands - DevOpsNoob.com'; ?>
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
                    <div class="col-md-8 text-center">
                      <h2>BASH Linux Commands</h2>
                      <p>
                        Many IT professionals argue that the ability to use command line in Linux is the most basic requirement for a Linux user.  Below is a list of commands for BASH (<a href="https://en.wikipedia.org/wiki/Bash_(Unix_shell)" target="_blank">Bourne-Again Shell</a>).  These commands are near-universal - they will work in virtually any major distribution of Linux.
                      </p>
                      <table class="centered">
                        <tr>
                          <td>
                            <kbd>whoami</kbd>
                          </td>
                          <td class="col2">
                            a command to determine the user currently using the computer.
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>uname -a</kbd>
                          </td>
                          <td class="col2">
                            print terminal information, with flag <kbd>-a</kbd> shows enough info to satisfy most circumstances.
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>chmod</kbd>
                          </td>
                          <td class="col2">
                            change file mode bits - change user permissions.
                          </td>
                        </tr>
                        <tr>
                          <td>
                          </td>
                          <td class="col2">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>chown</kbd>
                          </td>
                          <td class="col2">
                            change owner
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>date</kbd>
                          </td>
                          <td class="col2">
                            show the date according to the system
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>grep</kbd>
                          </td>
                          <td class="col2">
                            filtering function, usually piped ( <kbd>|</kbd> ), accepts an argument for search term
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>touch</kbd>
                          </td>
                          <td class="col2">
                            create a file
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>wc</kbd>
                          </td>
                          <td class="col2">
                            word count - often used with flag <kbd>-l</kbd> for a line count instead of word count
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>env</kbd> or <kbd>set</kbd>
                          </td>
                          <td class="col2">
                            display environment variables for the session
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>less</kbd> or <kbd>more</kbd>
                          </td>
                          <td class="col2">
                            display output of a command, usually piped ( <kbd>|</kbd> ), which displays output page by page
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>shutdown -h</kbd>
                          </td>
                          <td class="col2">
                            command used to shut down the computer by halting all operations (graceful shutdown!)
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>shutdown -r</kbd>
                          </td>
                          <td class="col2">
                            command used to restart the computer (this command tries to restart the computer gracefully, without damaging the file system, etc.)
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <kbd>which</kbd>
                          </td>
                          <td class="col2">
                            determine the running location of an application within the filesystem
                        </tr>
                        <tr>
                          <td>
                            <kbd>whereis</kbd>
                          </td>
                          <td class="col2">
                            determine not only the running location of an application within the filesystem, but also its souce and its man (manual) pages
                        </tr>
                        <tr>
                          <td>
                            <kbd>pwd</kbd>
                          </td>
                          <td class="col2">
                            display current working directory (where you are within the file system)
                        </tr>
                        <tr>
                          <td>
                            <kbd>cd ~</kbd> or <kbd>cd</kbd>
                          </td>
                          <td class="col2">
                            navigate to your home directory (<kbd>cd</kbd>) only works in some distributions, so its best practice to use <kbd>cd ~</kbd> all the time.
                        </tr>
                        <tr>
                          <td>
                            <kbd>locate file1.txt</kbd>
                          </td>
                          <td class="col2">
                            determine where a file exists within the file system.  Of course, in this example, "file1.txt" is simply a placeholder for the file you're searching for.
                        </tr>
                        <tr>
                          <td>
                            <kbd>man command</kbd>
                          </td>
                          <td class="col2">
                            show documentation about the command you're trying to use.  This is one of the most useful commands in Linux!
                        </tr>
                      </table>
                      <hr />
                      <h3>
                        Granting User Administrative Rights (add to "sudoers" group)
                      </h3>
                      <p>
                        In Linux, it is sometimes necessary to give a user administrative rights to perform certain tasks.  Its really bad practice to be logged in as an adminstrator all the time, and users should have to specify when they want to use administrative rights (I'm not talking a Microsoft Windows UAC pop-up though!).  Users will need to be added to the "sudoers" group - the group that if they type <kbd>sudo</kbd> before a command, they'll be granted administrative rights for a couple of minutes.
                      </p>
                      <p>
                        In order to be added to the "sudoers" group, log in as the root user in the CLI (the command is <kbd>su</kbd> after which you'll be prompted for the root password).  Once logged is as root, you'll need to enter the following command:
                      </p>
                      <p>
                        <kbd>echo "userName ALL=(ALL) ALL" > /etc/sudoers.d/userName</kbd> where <kbd>userName</kbd> obviously represents the indivdual to whom you're giving administrative rights.  Once this action is complete, that user will be able to enter <kbd>sudo</kbd> in front of their CLI commands and be able to perform tasks reserved for administrators.  Of course, this gives them rights to completely destroy your computer (<kbd>rm -fr /</kbd>) so be smart about this!
                      </p>
                      <hr />
                      <h3>
                        Starting and Stopping Graphical User Interface (GUI)
                      </h3>
                      <p>
                        If you'd like to stop the GUI from running, you can enter the CLI and enter the command <kbd>sudo systemctl stop gdm</kbd>.  This will shut down the GUI (which saves significantly on system resources).  If you'd like to restart the GUI, you'll need to log into the terminal and then enter <kbd>sudo systemctl start gdm</kbd>.  This will work on virtually all modern Linux distributions.  Quick note: in Ubuntu, the commands are <kbd>sudo systemctl stop lightdm</kbd> to stop the GUI and <kbd>sudo systemctl start lightdm</kbd> to start the GUI from a terminal.
                      </p>
                      <hr />
                      <h3>
                        Virtual Terminals
                      </h3>
                      <p>
                        Most Linux distributions are actually running 7 virtual terminals by default.  The GUI runs in one of those virtual terminals, and there are six others that can be used.  To switch to another virtual terminal, simply enter <kbd>Ctrl+Alt+FunctionKey#</kbd> - so for example <kbd>Ctl+Alt+F5</kbd> would switch to virtual terminal 5.  In most distributions, the GUI operates in Virtual Terminal 1, but in Ubuntu, the GUI operates in Virtual Terminal 7.
                      </p>
                      <hr />
                      <h3>
                        Issuing a Message to Users about Scheduled Shutdown
                      </h3>
                      <p>
                        There are times when a shutdown is scheduled, particularly if server hardware maintenance is required.  In cases like these, its a great courtesy to schedule the shutdown in advance and let other possible users know about it.  Issue the following CLI command with these arguments: <kbd>sudo shutdown -h 07:00 "Shutting down for scheduled maintenance."</kbd> and other users will be notified.
                      </p>
                      <hr />
                      <h3>
                        Using <kbd>find</kbd>
                      </h3>
                      <p>
                        <kbd>find</kbd> is one of the most important command line tools for the systems adminstrator.  It is used to find specific files with specific names - for example to find all the .gz files, you could run the search <kbd>find -name "*.gz"</kbd>.  To find only directories named "home", simply type <kbd>find type -d home</kbd>.  To find only files named "skunkmonkey.txt", type <kbd>find -type f skunkmonkey.txt</kbd>.  You can also specify where in the file system to search - <kbd>find /home/user type -f skunkmoneky.txt</kbd>.
                      </p>
                      <p>
                        Even more useful, you can find each file/directory with a specific name and then execute a command on that file.  So if you wanted to delete all those pesky "*.txt" files on your system (this is only an example!), you could run <kbd>find type -f "*.txt" -exec rm {} ';'</kbd> which would find every single "*.txt" file in your computer and delete it.  Don't forget the <kbd>';'</kbd> at the end as this makes the command execute properly.
                      </p>
                      <p>
                        Other flags (aka switches) that can be used with <kbd>find</kbd> include <kbd>-mtime 0</kbd>, which searches for when the file was modified, in this case today.  Another is <kbd>-ctime</kbd> which tests for the time when the file was created.  The final one to be discussed here is the <kbd>-size 0</kbd>, which searches for files based on size.  The default block size is 512 bytes, but you can search by kilobytes (<kbd>-size 10k</kbd>), megabytes (<kbd>-size 10M</kbd>), or even gigabytes (<kbd>-size 10G</kbd>).
                      </p>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
<?php include '../../includes/footer.php'; ?>
