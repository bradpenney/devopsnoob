<?php $title = 'Learn Project Management @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Project Management @ DevOpsNoob.com</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>projectManagement.php">Learn Project Management</a></li>
                        <li class="breadcrumb-item active">Introduction</li>
                    </ol>
                    <div class="text-left">
                      <h2>Introduction to Project Management</h2>
                      <p class="small">
                          This information is based in large part on the PMBOK&reg; Guide, 5th ed.  The first chapter of this guide is the introduction, and the following is a brief synopsis of that chapter.
                      </p>
                      <p>
                        According to the Project Management Body of Knowledge (PMBOK<sup>&reg;</sup>), "project management is the application of knowledge, skills, tools, and techniques to project activities to meet project requirements."<sup><a href="#fn1" id="ref1">1</a></sup><sup><a href="#fn2" id="ref2">2</a></sup>  In more common terms, project management is the planning of a project, then implementing said plan until the desired result is achieved.
                      </p>
                      <h3>What is a Project?</h3>
                      <p>
                        <blockquote>
                          “A project is a temporary endeavour undertaken to create a unique product, service, or result.”<sup><a href="#fn3" id="ref3">3</a></sup>
                        </blockquote>
                      </p>
                      <p>
                        Projects create an end product.  These end products are as diverse as can be imagined, everything from a new business process to a rocket.  However, each individual product can be viewed as the result of a project.  This doesn't mean that manufactured products are the result of a project; rather, the machine that manufactures a product is the result of a project.  Projects require planning, management and execution.  Athe machine does not require planning and execution in order to produce the product it was designed to output.  Project management techniques are employed in <em>creating unique</em> products.
                      </p>
                      <p>
                        To put this concept more concrete terms: Project management techniques <em>are not</em> employed in creating a coffee-cup lid.  Project management techniques <em>are</em> employed in designing and creating the machine that manufactures coffee-cup lids.
                      </p>
                      <h3>Is a Project a Business?</h3>
                      <p>
                        It is sometimes unclear as to where a project fits within the hierarchy of a business.  It is unlikely that an entire business would be based on only one project.  Rather, most successful businesses are based at least on a <em>program</em> - a collection of projects.  Large businesses are usually based on a <em>portfolio</em> - a collection of programs.  This is illustrated below:
                      </p>
                      <figure>
                        <img class="img-responsive centered noShadow" src="<?= $siteRoot; ?>images/projectManagement/portfolioProgramProjects.png">
                        <figcaption>A Porfolio contains Programs, which contain Projects</figcaption>
                      </figure>
                      <h3>What is Project Management?</h3>
                      <p>
                        Project Management is categorized into five (5) process groups, which essentially translate into five phases of a project:
                        <ol class="textList">
                          <li>Initiating</li>
                          <li>Planning</li>
                          <li>Executing</li>
                          <li>Monitoring &amp; Controlling</li>
                          <li>Closing <sup><a href="#fn4" id="ref4">4</a></sup></li>
                        </ol>
                      </p>
                      <p>
                        Each of these phases or process groups will be discussed in detail in upcoming chapters.  However, it is worth noting that this general framework shares commonialities with the Software Development LifeCycle, as well as the Database Development LifeCycle, where the first stages involve extensive planning, moving on to design, then implementation and finally testing.  The Project Management process can be applied to any product, but for the purposes of this discussion, we'll stick to how it can be applied in the Technology industry.
                      </p>
                      <h3>Project Management vs. Operations Managment</h3>
                      <p>
                        As eluded to above in the coffee-cup lid example, projects differ from operations.  Projects are temporary, and produce a unique end result.  Operations are meant to be ongoing, and serve to sustain businesses.  Accounting operations, software support, and building maintenance do not fall into the categories of Project Managment.  Designing an accounting operation is a project, operating an accounting operation is not.
                      </p>
                      <p>
                        This is not to say that Operations Management is irrelevant to Project Management, rather, projects often produce a result which will be implemented by operations; operations are regularly consulted when gathering the requirements of a project.
                      </p>
                      <h3>Businesses and Project Managment</h3>
                      <p>
                        All businesses employ Project Management techniques (some more formally than others).  Project Management drives growth and innovation in businesses - whether the innovation is a new physical product, a new business proecess, or new intellectual property.
                      </p>
                      <p>
                        The real power of formal Project Management is that all stakeholders share a common language and expectations.  Further, a business can intentionally align multiple projects together in order that the produced products compliment each other.   A prime example of this is Apple, where several of its products not only share similar names, but also similar characteristics to allow their products to have a a predictable user experience.  The ability to align projects into a program (and perhaps even a portfolio) allows Apple to be an incredibly successful business.
                      </p>
                      <h3>What is a Project Manager?</h3>
                      <p>
                        A project manager is the leader of the team that is attempting to fulfill the requirements of a project.  The project manager is ultimately responsible for the project's success or failure.  Successful project managers have knowledge in the project area, are highly motivated and able to manage a wide variety of responsiblities.  They are also personally effective at "achieving project objectives and balancing the project constraints" through excellent attitudes and leadership abilities.<sup><a href="#fn5" id="ref5">5</a></sup>  Obviously, excellent interpersonal skills are critical to the sucess of project manager.  The ability to empathize with others while still achieving goals is a difficult balance, but project managers must master this skill in order to succeed.
                      </p>
                      <p>
                        <strong><span class="glyphicon glyphicon-arrow-right"></span> Next Up: <a href="<?= $siteRoot; ?>projectManagement/organizationalInfluencesLifeCycle.php">Organizational Influences and Project Management Life Cycle</a></strong>
                      </p>
                      <hr />
                      <div class="footnote">
                        <sup id="fn1">1. Many thanks to Karl Winegardner for demonstrating a simple way to create footnotes using HTML. How to Create Footnotes in HTML. (n.d.). Retrieved October 08, 2017, from http://karlwinegardner.blogspot.ca/2011/02/how-to-create-footnotes-in-html.html<a href="#ref1" title="Jump back to footnote 1 in the text.">↩</a></sup><br />
                        <sup id="fn2">2. A Guide to the Project Management Body of Knowledge: (PMBOK<sup>&reg;</sup> Guide). (2013). Pennsylvania: Project Management Institute. pp. 5<a href="#ref2" title="Jump back to footnote 2 in the text.">↩</a></sup><br />
                        <sup id="fn3">3. ibid. pp. 3<a href="#ref3" title="Jump back to footnote 3 in the text.">↩</a></sup><br />
                        <sup id="fn4">4. ibid. pp. 5<a href="#ref4" title="Jump back to footnote 4 in the text.">↩</a></sup><br />
                        <sup id="fn5">5. ibid. pp. 17<a href="#ref5" title="Jump back to footnote 5 in the text.">↩</a></sup><br />
                      </div>
                      <br />
                    </div>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
