<?php $title = 'Common Cisco Router Commands @ DevOpsNoob.com'; ?>
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
                  <li class="breadcrumb-item active">Common Cisco Router Commands</li>
                </ol>
                <h2>Common Cisco Router Commands</h2>
                <p>
                  Setting up and maintaining a Cisco router is a really common task for network administrators.  The Cisco Internetwork Operating System (IOS) Command-Line Interface (CLI) should be very comfortable for even beginning administrators.
                </p>
                <p>
                  <strong>NOTE: This is meant as a guide.  There is no guarantee these commands will work for every situation!</strong>
                </p>
                <div id="accordion">
                  <h4><strong>Logging On to a Cisco Router</strong></h4>
                    <div>
                      <p>
                        When logging onto a router, whether via a console, SSH (or even the unsecure TelNet), users will find a screen similar to this one:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/logon.png">
                          <figcaption>Cisco IOS CLI Logon Screen</figcaption>
                      </figure>
                      <p>
                        If the router you're logging into is already configured, it likely has a name other than "Router" and may have a username and password.  The Cisco CLI is similar to Unix/Linux, in that you won't see the password as you type it, not even asterisks (*).
                      </p>
                      <p>
                        Once past any username and passwords, the first command you'll want to enter is <kbd>enable</kbd> (which can be shortened to <kbd>en</kbd>) to get into executive mode.  It is possible there could be another (different) password prompt here.  Once entered, you'll enter <em>EXEC</em> mode, shown by a hash tag similar to this: <code>Router#</code>.
                      </p>
                    </div>
                    <h4><strong>Entering / Exiting "Global Configure" Mode</strong></h4>
                    <div id="configureMode">
                      <p>
                        Although Exec mode has more commands available than Enable mode, its most common to jump right into Global Configuration mode, which is where real control of the router begins.  This is done by typing <kbd>configure terminal</kbd>, but can be shortened to <kbd>conf t</kbd>, which will get you into configure mode:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/conft.png">
                        <figcaption><kbd>configure terminal</kbd> or <kbd>conf t</kbd> Command</figcaption>
                      </figure>
                      <p>
                        As pictured above, to get out of Configure Mode, simply type <kbd>exit</kbd>
                      </p>
                    </div>
                    <h4><strong>Show Running Configuration in Enable or Configuration Mode</strong></h4>
                    <div>
                      <p>
                        Depending on where you are within the operating system, this will take two different (but related) commands.  Within Enable mode, simply type <kbd>show run</kbd>.  However, if you are currently within Global Configure mode, you need to add a "do" - <kbd>do show run</kbd>.  This shows you all of the current configuration of the switch - a pretty useful tool.  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/showRun.png">
                        <figcaption>Show Running Configuration</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Saving Current Router Configuration to Permanent Memory</strong></h4>
                    <div>
                      <p>
                        If a router gets turned off, then any configuration files that aren't saved will be lost.  This can be avoided by saving the running configuration to the startup configuration.  This can be done using this command: <kbd>copy running-config startup-config</kbd>.  However, lots of network administrators shorten this to <kbd>copy run start</kbd>, which gets the same result.  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoSwitch/copyRunStart.png">
                        <figcaption>Copy Running Configuration to Startup Configuration</figcaption>
                      </figure>
                      <p>
                        Another way to write the running configuration to memory is the command <kbd>write memory</kbd>, which, as ususal, can be shortened to <kbd>wri mem</kbd>.
                      </p>
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
                        Now when logging onto a router, the MOTD banner will appear at the top, similar to this:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/motd.png">
                        <figcaption>MOTD Banner</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Changing the Hostname of a Router</strong></h4>
                    <div>
                      <p>
                        Its really common to want to name a router something other than the default "Router".  This can be done by entering  <em>Configure mode</em> and then typing <kbd>hostname MainRouter</kbd> (obviously, the name depends on the naming convention of the network!).  Here's an example:
                      </p>
                      <figure>
                        <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/hostname.png">
                        <figcaption>Changing Name of Router to MainRouter</figcaption>
                      </figure>
                    </div>
                    <h4><strong>Select an Interface (Port) to Configure</strong></h4>
                    <div>
                      <p>
                        It is a really common task to configure individual ports on a router.  To do this, it is necessary to select that port.  From <em>Configure mode</em>, type <kbd>interface fastethernet0/1</kbd> to configure the first port (substitute any port name...).
                      </p>
                      <p>
                       The shorthand version of this command is <kbd>in fa0/0</kbd>, seen below:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/interfaceConfigure.png">
                       <figcaption>Select an Interface to Configure</figcaption>
                      </figure>
                      <p>
                        Similar to a switch, it is possible to select a range of ports using <kbd>in r fa0/0-1</kbd>, but this is uncommon on a router as most of the time ports are configured differently (and usually have subinterfaces).
                    </div>
                    <h4><strong>Assigning an IP Address to an Interface</strong></h4>
                    <div>
                      <p>
                        As a Layer 3 device, a router needs an IP on an interface in order to be able to communicate using that port.  Assigning an IP is done using the following commands.  From <em>Configure</em>, enter <kbd>in fa0/0</kbd> to enter the interface that needs the IP address.  Next, enter <kbd>ip address 192.168.1.254 255.255.255.0</kbd> (obviously enter the correct interface, IP address and subnet for the network).  This is demonstrated below:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/interfaceIP.png">
                       <figcaption>Assign an IP Address to an Interface</figcaption>
                      </figure>
                      <p>
                        In a router, it is really common to assign an IP to a sub-interface to enable interVLAN communication.  This is outlined below.
                      </p>
                    </div>
                    <h4><strong>Assigning an IP Address to Sub-Interface for interVLAN Routing</strong></h4>
                    <div>
                      <p>
                        Sub-interfaces allow interVLAN routing. That is, the router allows communication between VLANs within an organization.
                      </p>
                      <p>
                        To perform this operation, from <em>Configure</em>, enter <kbd>in fa0/0.20</kbd> to configure VLAN20.  Next, select which type of encapsulation to use (this is essentially a tag added to a packet so the router knows which VLAN the packet came from).  This is done using <kbd>encapsulation dot1Q 20</kbd> (again, use an appropriate VLAN number).
                      </p>
                      <p>
                        The sub-interface is now ready for an IP address.  Ebter the command <kbd>ip address 192.168.20.254 255.255.255.0</kbd>.
                      </p>
                      <p>
                        This is demonstrated below:
                      </p>
                      <figure>
                       <img class="img-responsive centered" src="<?= $siteRoot; ?>images/networking/ciscoRouter/subinterfaceIP.png">
                       <figcaption>Assign an IP Address to a Sub-Interface</figcaption>
                      </figure>
                      <p>
                        Obviously more than one subinterface would recieve its own encapsulation and its own IP address.
                      </p>
                    </div>
                  </div>
                  <br />
                  <?php include '../includes/disqus.php'; ?>
                </div>
                <div class="col-md-2">
                </div>
              </div>
<?php include '../includes/footer.php'; ?>
