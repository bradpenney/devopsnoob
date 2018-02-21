<?php $title = 'Learn Docker @ DevOpsNoob.com'; ?>
<?php $description = 'Containers only have the parts of the operating system that are absolutely necessary for them to operate correctly.  This makes containers much more efficient.'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Docker @ DevOpsNoob</h1>
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
                        <li class="breadcrumb-item active">Learn Docker</li>
                    </ol>
                    <h2>Learn Docker</h2>
                    <p>
                      Docker is an important tool for DevOps professionals to master.
                    </p>
                    <p>
                      The video below offers a basic introduction and demonstration of Docker:
                    </p>
                    <iframe class="wideVideo" src="https://www.youtube.com/embed/IGQLFENPC7o" allowfullscreen></iframe>
                    <div class="text-left">
                      <h3>
                        What is a Container?
                      </h3>
                      <p>
                        A container image is a lightweight, stand-alone, executable package of a piece of software that includes everything needed to run it: code, runtime, system tools, system libraries, settings.
                      </p>
                      <p>
                        Containers can be thought of as a next generation of virtual machines - they are self-sufficient units that can be shared between developers and a production environment.  A container has everything within it to run in the exact same way, regardless of which computer the container is running on.
                      </p>
                      <h3>
                        Containers vs. Virtual Machines
                      </h3>
                      <p>
                        With virtual machines, each instance of a Virtual Machine requires all of the components of the guest operating system. This means that each VM requires a specified amount of RAM and storage space, and that is replicated over and over, even if the VM is doing nothing. Starting up a VM can take a couple minutes; therefore, they have to be running at all times to meet customer expectations. VMs run on a hypervisor, which also takes up its own resources.
                      </p>
                      <p>
                        Containers only have the parts of the operating system that are absolutely necessary for them to operate correctly.  This makes containers much more efficient.  They don’t run unnecessary resources in the background, don’t take up idle space, and only run when necessary.  Starting up a container is virtually instant, so containers can be stopped when demand is low and then generated when demand is high while still meeting customer expectations.  Containers run on containerization software, which plays a similar role to a hypervisor.
                      </p>
                      <h3>
                        Is Docker the Only Type of Container?
                      </h3>
                      <p>
                        There are many different companies that develop containers.  Docker is not an entirely unique technology, or even the first of its kind.  However, since its release in 2014, Docker has exploded in popularity and is currently the most popular container in the IT industry.
                      </p>
                      <p>
                        Check out <a class="inTextLink" href="https://cloudacademy.com/blog/container-technologies-more-than-dockers/" target="_blank">Container Technologies: More than just Docker</a> from <a class="inTextLink" href="https://cloudacademy.com/" target="_blank">Cloud Academy</a> for more information.
                      </p>
                      <h3>
                        Installing Docker
                      </h3>
                      <p>
                        Docker runs natively on Linux.  In Windows and Mac, it needs a piece of software called Docker Machine or Docker Quickstart.  This adds a small layer of complexity, but is well worth the trouble.
                      </p>
                      <p>
                        Installing Docker on Ubuntu 17.10 is a really easy task.  Simply type <kbd>sudo apt-get install docker.io </kbd>and then start the service with <kbd>sudo service docker start</kbd>.  Docker is this easy to install on Linux distros.  <a class="inTextLink" href="https://runnable.com/" target="_blank">Runnable</a> has written a nice guide to <a class="inTextLink" href="https://runnable.com/docker/install-docker-on-linux" target="_blank">Install Docker on Linux</a> for your preferred distribution.
                      </p>
                      <h3>
                        Running the First Container
                      </h3>
                      <p>
                        After installing Docker, you can create your first simple container by typing <kbd>sudo docker run -ti ubuntu bash</kbd>.
                      </p>
                      <p>
                        This container is a scaled back version of Ubuntu 16.04 with only the things that are absolutely necessary installed and running.  In a moment, we’ll compare the running running processes of an Ubuntu host computer to the running processes of an Ubuntu container.  <strong>Watch the video above for a demonstration.</strong>
                      </p>
                      <h3>
                        Develop & Deploy Custom Containers
                      </h3>
                      <p>
                        So here is how the Docker Workflow works.  Typically, the starting point is from a publically available image.  The container is modified to your needs, stopped, and committed to serve as the starting point to build from.  So we start a container from an image, which is usually downloaded from the internet.
                      </p>
                      <p>
                        You change that container to suit your needs - adding software packages, custom code, whatever you (or your organization) requires.
                      </p>
                      <p>
                        You stop the container and commit it as your own custom image.   Initially this resides on your local computer, but can be stored in an online repository such as <a class="inTextLink" href="https://hub.docker.com/" target="_blank">DockerHub</a>.
                      </p>
                      <p>
                        From your custom container, you can create as many instances of the new custom container as is needed - so each developer can have their own copy of the environment, multiple containers can reside on the server, and so on.
                      </p>
                      <h3>
                        Containers Play Well Together
                      </h3>
                      <p>
                        Each Docker container has its own networking capability.  It is possible to open and close ports, sending information to and from containers.
                      </p>
                      <p>
                        Docker containers can be created with DockerFiles, which are similar to BASH scripts.  Each line creates a new container from the product of the last line.  This means you can build up a huge system of containers using a Dockerfile.
                      </p>
                      <p>
                        Docker containers are environment-agnostic - they only require that Docker is installed and don't care about the operating system.  Containers will run the same anywhere and everywhere.
                      </p>
                      <h3>
                        Why Use Docker?
                      </h3>
                      <h4>
                        Increase Robustness
                      </h4>
                      <p>
                        Using Docker will make deploying and updating applications easier and faster.  This means faster to market and better customer experience.
                      </p>
                      <p>
                        Applications are more scalable using Docker, because new instances of the software are instantly available.
                      </p>
                      <p>
                        Unfortunately, orchestrating numerous containers may increase the complexity of applications, but the benefits outweigh the complexity added.  Most organizations (and individuals) find that the benefits outweigh this added complexity.
                      </p>
                      <h4>
                        Improve Performance
                      </h4>
                      <p>
                        Eliminating applications reliance on Virtual Machine's will save system resources.  Instead of dedicated RAM not being properly used, containers use only what is actually necessary at the time.  It is anticipated that most enterprise clients will already have Docker installed.
                      </p>
                      <h4>
                        Modular Design
                      </h4>
                      <p>
                        The most important benefit of containers is that sections of the code can be divided up and only used if the enterprise client needs them.  This will make deployment much easier and scalable. As each aspect of the application being developed is separate, if there is a problem with one, the entire application need not fail.  Finding and fixing bugs is easier, and sending patches to clients is easier (because they’re smaller!)
                      </p>
                      <p>
                        Finally, because containers are environment-agnostic, there will not be any need to develop multiple versions of the software.  There is no need to write software that will play nicely with various other software or hardware.  If the target machine has Docker, the container will run the same as everywhere else.
                      </p>
                    </div>
                    <?php include '../includes/disqus.php'; ?>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
