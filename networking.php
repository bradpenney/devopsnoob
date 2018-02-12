<?php $title = 'Learn Networking @ DevOpsNoob.com'; ?>
<?php include './includes/header.php'; ?>
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
                        <li class="breadcrumb-item active">Learn Networking</li>
                    </ol>
                    <p>
                        Understanding how computers communicate with each other is such a critical skill for any IT professional.  For DevOps professionals it is just as important.  A thorough practical knowledge of the underlying fundamentals is what opens up the possibilities for effective security strategies, efficient data transfer, and many more.  Here are some of the resources I use and find to be excellent:
                    </p>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <h4><a class="inTextLink" href="./networking/ciscoSwitchCommands.php">Cisco Switch Commands</a></h4>
                        <p>
                          A quick reference to really common Cisco switch configuration commands.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4><a class="inTextLink" href="./networking/ciscoRouterCommands.php">Cisco Router Commands</a></h4>
                        <p>
                          A quick reference to really common Cisco router configuration commands.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4><a class="inTextLink" href="http://en.community.dell.com/support-forums/network-switches/f/866/t/19445143" target="_blank">Example Dell Switch Commands</a></h4>
                        <p>
                          Dell switches, although less used than Cisco switches, are still often encountered in the IT industry.  Here are a few examples of Dell switch commands (CLI) in case you encounter and need some help getting started.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4><a class="inTextLink" href="./networking/osiModel.php">OSI Model Introduction</a></h4>
                        <p>
                          The OSI Model is incredibly important in networking.  This extra-brief intro (which will likely grow over time!) will introduce the concept.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4><a class="inTextLink" href="./networking/decimalToBinary.php">Converting Decimal to Binary</a></h4>
                        <p>
                          Another important topic in networking (and hardware) is converting decimal numbers to binary.  A super-brief example shows how.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                            <a class="inTextLink" href="http://www.vlsm-calc.net/" target="_blank">Variable Length Subnet Mask Calculator</a>
                        </h4>
                        <p>
                          One of the key parts of building a well-designed enterprise network is to use variable-length subnet masks. The site linked below is very useful, as it doesn't have a lot of extra bells and whistles, it just calculates the masks based on the sizes you want (and your original IP + CIDR).  Its my go to tool for VLSM.
                        </p>
                      </li>
                      <li class="list-group-item">
                        <h4>
                            <a class="inTextLink" href="http://www.subnetmask.info/" target="_blank">Network Calculators</a>
                        </h4>
                        <p>
                            Another useful subnet calculator was recommended by my professor when I took an Introduction to Networking course.  It too has its advantages, but as far as I know it does not calculate variable-length subnets.  Still a useful tool, especially when starting to learn the concepts of subnet masking.
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include './includes/footer.php'; ?>
