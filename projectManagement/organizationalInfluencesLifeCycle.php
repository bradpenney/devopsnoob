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
                        <li class="breadcrumb-item active">Organizational Influences and Project Life Cycle</li>
                    </ol>
                    <div class="text-left">
                      <h2>Organizational Influences and Project Life Cycle</h2>
                      <p class="small">
                          This information is based in large part on the PMBOK&reg; Guide, 5th ed.  The second chapter of this guide is "Organizational Influences and Project Life Cycle" and the following is a brief synopsis of that chapter.
                      </p>
                      <p>
                        Project Management is one of the most important aspects of business.  However, it happens within a business, it is not the entire business.  Even firms that specialize in Project Management have other aspects to their business such as their business structure, style and culture.  These can have a drastic influence on a project; it is critical that successful project managers understand how organizations influence projects.
                      </p>
                      <h3>How Does An Organization Influence a Project?</h3>
                      <p>
                        First and foremost an organization has a culture built into it.  This means that things are done in a certain way within any organization; perfectly accepted behaviour in one company could be unacceptable in another.  For example, in one company, all decisions, even minor changes, may be referred to a member of the executive (CEO, CIO, CTO, CFO, etc), while in other companies is is expected that teams of staff make decisions based on their experience and opinions.  These types of varying expectations have a major impact on how much control a project manager has over any given project.
                      </p>
                      <p>
                        Effective organizational communication also has a major impact on project management.  If communication amongst all stakeholders is easy and clear, the project is much more likely to succeed.
                      </p>
                      <h3>Organizational Structures and Project Management</h3>
                      <p>
                        All businesses have an organzational structure.  From a project management perspective, these can be divided into six major categories:
                        <ol class="textList">
                          <li><strong>Functional</strong> - projects are coordinated by functional managers, not by staff.</li>
                          <li><strong>Weak Matrix</strong> - projects are coordinated by the staff involved in the project.</li>
                          <li><strong>Balanced Matrix</strong> - a specialized project manager works with staff to coordinate (and perform) a project.</li>
                          <li><strong>Strong Matrix</strong> - a project manager from the project management division works with staff to coordinate a project.</li>
                          <li><strong>Projectized</strong> - the organizaiton is divided into project management groups, where the project manager is the head of their own departement, which only works on projects.</li>
                          <li><strong>Composite</strong> - major projects are handled by a dedicated project management department, while minor projects are handled by general staff.  Most organizations are composite.</li>
                        </ol>
                      </p>
                      <h3>What Business Assets Does the Organization Offer to the Project?</h3>
                      <p>
                        In general, a business has been conducting itself in its market space for a long enough to have developed major procedural and knowledge assets that it can lend to any project.  The way things are done in general at company XYZ greatly affects how a project will go at the same company.  For example, if a company has written policies that have to do with subject matter related to a project, it is much easier to identify the business requirements and proceed.  Examples include standardized processes and procedures, previous templates, change control procedures, financial controls, standardized quality control, and so on.
                      </p>
                      <p>
                        Not only do companies offer procedures and processes, but they also offer corporate knowledge.  An established tech company will have a large base of knowledge, both formalized in company documents and patents, and in its employees.  Employees of an IT company know how to design and build networks, for example.  So performing a project involving building an enterprise grade network will be more attainable for an IT company than a marketing company, regardless of the acumen of the project manager.
                      </p>
                      <h3>What About the Project Environment?</h3>
                      <p>
                        Where the project will be performed matters significantly.  This applies not only to geography but also to factors such as political climate, marketplace conditions, and availablity of human resources.  The project environment are factors that are outside the realm of control for the project manager and the company involved, but must be dealt with in order to succeed.  For example, proposing a project which involves building major infrastructure in an uninhabited area (say far North) creates a project environment challenge beyond the control of both the organization and the project manager, and will need careful planning in order to succeed.
                      </p>
                      <h3>Who are the Project Stakeholders?</h3>
                      <p>
                        Any party (individual, group, organization, multi-national corporation) that is affected by the project is a stakeholder.  Obviously, stakeholders have different levels of responsibility for a project.  Some stakeholders are directly affected, others only in passing.  Identifying the stakeholders in a project is critical, and some stakeholders may become apparent as the project progresses which were not apparent initially.
                      </p>
                      <p>
                        Stakeholders can have both positive and negative effects on a project.  Some stakeholders will not want the project to progress or succeed.  Others will depend on its success.  Managing and negotiating with stakeholders is a prime responsiblity of project managers.
                      </p>
                      <h3>What is Project Governance?</h3>
                      <p>
                        Even though they are temporary in nature, projects should still be subject to governance, that is, a framework in which the project team performs.  This will be aligned with the parent organization.
                      </p>
                      <h3>Who is Included in the Project Team?</h3>
                      <p>
                        Who exactly is the project team?  The answer is almost certainly broader than initially considered.  Below is a diagram illustrating the project team.
                      </p>
                      <figure>
                        <img class="img-responsive centered noShadow" src="<?= $siteRoot; ?>images/projectManagement/projectTeam.png">
                        <figcaption>The Project Team Includes Many Players</figcaption>
                      </figure>
                      <p>
                        Not everyone listed here plays a full time role in the project team.  A Subject Matter Expert (SME) may only be required for a very small percentage of the time, but their contribution may be invaluable.
                      </p>
                      <h3>Project Life Cycle</h3>
                      <p>
                        Projects vary by scope and duration.  However, each properly planned project should follow the steps listed below.
                      </p>
                      <figure>
                        <img class="img-responsive centered noShadow" src="<?= $siteRoot; ?>images/projectManagement/projectLifecycle.png">
                        <figcaption>The Project Lifecycle Pattern</figcaption>
                      </figure>
                      <p>
                        The illustration above is an idealized version of the Project Management Life Cycle - most projects are less clear cut that this.  For example, if the project actually has several phases (several small projects inside a larger project), does the planning occur all in the initial stages of the first phase or is it revisited at the start of each phase?  What if the project recieves feedback that will change the project scope during the "Carrying out the Work" stage?  Clearly adjustments and adaptations would be required.  Project Managment is an iterative process, and though planning is important, flexibility is equally important for project managers.
                      </p>
                      <p>
                        <strong><span class="glyphicon glyphicon-arrow-right"></span> Next Up: <a href="<?= $siteRoot; ?>projectManagement/managementProcesses.php">Management Processes</a></strareong>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
