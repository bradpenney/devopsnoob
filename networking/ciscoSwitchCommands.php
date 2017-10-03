<?php $title = 'Common Cisco Switch Commands @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Networking @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>networking.php">Learn Networking</a></li>
                  <li class="breadcrumb-item active">Common Cisco Switch Commands</li>
                </ol>
                <h2>Common Cisco Switch Commands</h2>
                <p>
                  Setting up and maintaining Cisco switches is a really common task for network administrators.  The Cisco Internetwork Operating System (IOS) Command-Line Interface (CLI) should be very comfortable for even beginning administrators.
                </p>
                <p>
                  <strong>NOTE: This is meant as a guide.  There is no guarantee these commands will work for every situation!</strong>
                </p>
                <div id="accordion">
                  <h4><strong>Logging On to a Cisco Switch</strong></h4>
                    <div>
                      <p>
                        When logging onto a switch, whether via a console, SSH (or even the unsecure TelNet), users will find a screen similar to this one:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/logon.png">
                          <figcaption>Cisco IOS CLI Logon Screen</figcaption>
                      </figure>
                      <p>
                        If the switch you're logging into is already configured, it likely has a name other than "Switch" and may have a username and password.  The Cisco CLI is similar to Unix/Linux, in that you won't see the password as you type it, not even asterisks (*).
                      </p>
                      <p>
                        Once past any username and passwords, the first command you'll want to enter is <kbd>enable</kbd> (which can be shortened to <kbd>en</kbd>) to get into executive mode.  It is possible there could be another (different) password prompt here.  Once entered, you'll enter <em>EXEC</em> mode, shown by a hash tag similar to this: <code>Switch#</code>.
                      </p>
                    </div>
                    <h4><strong>Entering / Exiting "Global Configure" Mode</strong></h4>
                    <div id="configureMode">
                      <p>
                        Although Exec mode has more commands available than Enable mode, its most common to jump right into the Global Configuration mode, which is where real control of the switch begins.  This is done by typing <kbd>configure terminal</kbd>, but can be shortened to <kbd>conf t</kbd>, which will get you into configure mode:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/conft.png">
                        <figcaption><kbd>configure terminal</kbd> or <kbd>conf t</kbd> Command</figcaption>
                      </figure>
                      <p>
                        As pictured above, to get out of Configure Mode, simply type <kbd>exit</kbd>
                      </p>
                    </div>
                    <h4><strong>Show Running Configuration in Enable or Global Configuration Mode</strong></h4>
                    <div>
                      <p>
                        Depending on where you are within the operating system, this will take two different (but related) commands.  Within Enable mode, simply type <kbd>show run</kbd>.  However, if you are currently within Global Configure mode, you need to add a "do" - <kbd>do show run</kbd>.  This shows you all of the current configuration of the switch - a pretty useful tool.  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/doShowRun.png">
                        <figcaption>Show Running Configuration</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Saving Current Switch Configuration to Permanent Memory</strong></h4>
                    <div>
                      <p>
                        If a switch gets turned off, then any configuration files that aren't saved will be lost.  This can be avoided by saving the running configuration to the startup configuration.  This can be done using this command: <kbd>copy running-config startup-config</kbd>.  However, lots of network administrators shorten this to <kbd>copy run start</kbd>, which gets the same result.  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/copyRunStart.png">
                        <figcaption>Copy Running Configuration to Startup Configuration</figcaption>
                      </figure>
                      <p>
                        Another way to write the running configuration to memory is the command <kbd>write memory</kbd>, which, as ususal, can be shortened to <kbd>wri mem</kbd>.
                      </p>
                    </div>
                    <h4><strong>Disable IP Domain Lookup</strong></h4>
                    <div>
                      <p>
                        One of the most annoying things about Cisco switches is when you enter an incorrect command, the default behaviour is to try to resolve that command as an IP address.  It contacts a DNS server and attempts to make this resolution, which takes about a minute.  Your switch is therefore "locked" for about a minute while you stare at your error (AARRRGGHH!).
                      </p>
                      <p>
                        To disable this default functionality, enter <em>Configure Mode</em> and type <kbd>no ip domain-lookup</kbd>.  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/noIPDomain.png">
                        <figcaption>Disable IP Domain-Lookup</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Setting a Message of the Day (MOTD)</strong></h4>
                    <div>
                      <p>
                        A MOTD banner is usually set by the Network Administrator, often as a warning against anyone who might be trying to login without permission.  It can also be used as a place to show information that needs to be shared amongst Network Administrators.
                      </p>
                      <p>
                        To set up the MOTD, type <kbd>banner motd #My MOTD Message Here#</kbd> in the CLI.  Note the hashtags (pound symbol, #) being used as a delimiter around the message.  This doesn't need to be this symbol, any symbol will do, as long as the message begins and ends with the same symbol.  So <kbd>banner motd %My MOTD Message Here%</kbd> will also work.
                      </p>
                      <p>
                        Now when logging onto a switch, the MOTD banner will appear at the top, similar to this:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/motd.png">
                        <figcaption>MOTD Banner</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Changing the Hostname of a Switch</strong></h4>
                    <div>
                      <p>
                        Its really common to want to name a switch something other than the default "Switch".  This can be done by entering  <em>Configure mode</em> and then typing <kbd>hostname FirstFloor_DevOpsNoob</kbd> (obviously, the name depends on the naming convention of the network!).  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/hostname.png">
                        <figcaption>Changing Name of Switch to FirstFloor_DevOpsNoob</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Select an Interface (Port) to Configure</strong></h4>
                    <div>
                      <p>
                        It is a really common task to configure individual ports on a switch.  To do this, it is necessary to select that port.  From <em>Configure mode</em>, type <kbd>interface fastethernet0/1</kbd> to configure the first port (substitute any port name...).
                      </p>
                      <p>
                       The shorthand version of this command is <kbd>in fa0/1</kbd>, seen below:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/interfaceConfigure.png">
                       <figcaption>Select an Interface to Configure</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Select a Range of Interfaces (Ports)</strong></h4>
                    <div>
                      <p>
                        Another really common task is to select a range of ports (say to assign them to a VLAN).  This can be done using the command <kbd>interface range fastethernet0/1-20</kbd> from within <em>Configure mode</em>.
                      </p>
                      <p>
                       Or the shorthand version, which most network administrators prefer - <kbd>in r fa0/1-20</kbd> - demonstrated below:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/interfaceRangeConfigure.png">
                       <figcaption>Select an Interface Range to Configure</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Show Spanning Tree Protocol (STP) Configuration</strong></h4>
                    <div>
                      <p>
                        To show the current STP configuration, <em>from Exec mode</em> type <kbd>show spanning-tree</kbd>, or <em>from Configure mode</em> type <kbd>do show spanning-tree</kbd>.  Below is a demonstration:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/showSTP.png">
                        <figcaption>Show Spanning Tree Protocol Configuration</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Configure STP Root Priority via Priority Number</strong></h4>
                    <div>
                      <p>
                       One of the ways to make a switch the STP root is to lower its priority number.  The default priority number is 32,768, and the number can be lowered in steps of 4,096.  So to lower the root priority (and make it root), lower the root priority number to 4,096 lower than the other switches.
                      </p>
                      <p>
                       To lower the priority number, <em>enter Configure mode</em> and type <kbd>spanning-tree vlan 1 priority 28672</kbd>.  Of course, use the appropriate VLAN number and priority number to suit your setup.  Here's a demonstration starting from a switch that isn't root:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/configureSTPPriority.png">
                       <figcaption>Configuring Spanning-Tree Root Priority</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Configure STP to VLANs using Primary/Secondary</strong></h4>
                    <div>
                      <p>
                        STP can be configured differently for each VLAN.  The major advantage here is that different switches can have differnt VLAN, thereby spreading the load around the network.  Using Primary / Secondary is slightly less complicated that the priority number method outlined above.  The commands are <em>from Exec mode</em>, type <kbd>spanning-tree vlan 20 root primary</kbd>.  Of course, assign this to whichever VLAN is required.
                      </p>
                      <p>
                        To apply a backup STP switch (a <em>secondary</em>), the commands are <em>from Exec mode</em>, type <kbd>spanning-tree vlan 20 root secondary</kbd>.
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/VLANPrimary.png">
                        <figcaption>Configure STP to a VLAN using Primary</figcaption>
                      </figure>
                    </div>
                    <h4><strong>LACP: Assign Interfaces to Channel-Group</strong></h4>
                    <div>
                      <p>
                        To configure Link-Aggregation Control Protocol (LACP), it is necessary to assign interfaces (ports) to a channel-group.  This <strong>must be done on both switches</strong>, but the number of the channel group doesn't matter (as in, it can be Channel Group 1 on one switch, and Channel-Group 6 on another, it will still connect).
                      </p>
                      <p>
                        The easiest way to do this is to assign an interface range to a channel-group.  From <em>inside Configure mode</em>, type the command <kbd>in r fa0/1-2</kbd> (the desired interface range), then type <kbd>channel-group 1 mode active</kbd>.  This is demonstrated below:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/lacpConfig.png">
                       <figcaption>Configuring Channel-Group for LACP</figcaption>
                      </figure>
                      <p>
                       Once again note: <strong>THIS MUST BE DONE ON BOTH SWITCHES!</strong>
                      </p>
                    </div>
                    <h4><strong>Create a VLAN / Assign Interface to VLAN</strong></h4>
                    <div>
                      <p>
                        The simplest way to create a VLAN is to assign an interface, or a range of interfaces, to it.  This is done in <em>Configure mode</em>, where you enter interface range configuration mode with <kbd>in r fa0/1-10</kbd>.  Next, change the mode with <kbd>switchport mode access</kbd>, and finaally assign the range to a vlan with <kbd>switchport access vlan 20</kbd> (or whatever VLAN works in your network). Here's a demonstration:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/createVLAN.png">
                       <figcaption>Creating a VLAN by Assigning Interfaces</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Naming a VLAN</strong></h4>
                    <div>
                      <p>
                        Naming each VLAN is something almost all network administrators recommend.  To name a VLAN, enter <em>Configuration mode</em>, type the name of the VLAN, for example <kbd>vlan 30</kbd>, then type <kbd>name Management</kbd> (or whatever your requirement is).
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/namingAVLAN.png">
                        <figcaption>Naming a VLAN</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Assigning an IP Address to a VLAN</strong></h4>
                    <div>
                      <p>
                        Assigning an IP address to a VLAN is an important aspect of networking.  In order to do this, enter <em>Configure mode</em>, then <kbd>in vlan 30</kbd> (or whatever your VLAN is called).  Then is the important part - <kbd>ip address 192.168.1.254 255.255.255.0</kbd>.  Note that you have to include the correct subnet mask in this command.  Obviously, you'll need to use the IP address that suits your network.  Here's a demostration:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/addIPToVLAN.png">
                        <figcaption>Naming a VLAN</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Enable Telnet on a Switch</strong></h4>
                    <div>
                      <p>
                        Telnet, although insecure, can be useful.  Be sure not to use it anywhere that packets can be intercepted!
                      </p>
                      <p>
                       The commands are as follows:  from <em>Configure mode</em>, enter <kbd>line vty 0 4</kbd> (this is the number of remote hosts, so pick your range according to your needs, 15 is the highest number).  Next, type <kbd>transport input telnet</kbd>.  Third, <kbd>password secret</kbd> (again, set a better password than "secret").  Finally, <kbd>login</kbd> enforces that someone connecting has to enter a password.  Here's a demonstration:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/enableTelnet.png">
                        <figcaption>Enable Telnet</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Create a Trunk Line</strong></h4>
                    <div>
                      <p>
                       Creating trunks between switches is another critical skill for network admins.  Whether it be an LACP port-channel or a single line, they're treated similarly.  From <em>Configure mode</em>, configure the interface that needs to be a trunk with <kbd>in fa0/1</kbd> (or whatever suits your needs).  Then change the mode by entering <kbd>switchport mode trunk</kbd>.  Assign the same native VLAN to both switches - <kbd>switchport trunk native vlan 99</kbd>.  Finally, tell the trunk which VLANs to allow with <kbd>switchport trunk allowed vlan add 30</kbd> (or again, whatever your network requires).  Here's a demonstration:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/createATrunk.png">
                        <figcaption>Creating a Trunk that Allows VLAN 20</figcaption>
                      </figure>
                    </div>
                    </div>
                    <br />
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
