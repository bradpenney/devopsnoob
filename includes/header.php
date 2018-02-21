<?php
    //  path should be '/' in production and '/devopsnoob/' in testing
    $siteRoot = '/devopsnoob/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="author" content="Brad Penney">


        <link rel="stylesheet" href="<?= $siteRoot; ?>css/normalize.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $siteRoot; ?>css/main.css">

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= $siteRoot; ?>js/main.js"></script>

        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div id="wrap">
            <nav class="navbar navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span  class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" id="logo" href="<?= $siteRoot; ?>index.php">DevOpsNoob.com</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-default navbar-nav">
                    <li><a class="topbar" href="<?= $siteRoot; ?>index.php">Home</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle topbar" data-toggle="dropdown" href="#">Programming<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $siteRoot; ?>programming/python.php">Python</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/java.php">Java</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/php.php">PHP</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/javascript.php">JavaScript</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/frontEndWeb.php">HTML5 &amp; CSS3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle topbar" data-toggle="dropdown" href="#">Systems Admin<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $siteRoot; ?>sysAdmin/linux.php">Linux</a></li>
                        <li><a href="<?= $siteRoot; ?>sysAdmin/docker.php">Docker</a></li>
                        <li><a href="<?= $siteRoot; ?>sysAdmin/windows.php">Windows</a></li>
                        <li><a href="<?= $siteRoot; ?>sysAdmin.php">Resources</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle topbar" data-toggle="dropdown" href="#">Databases<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $siteRoot; ?>database/dbManagement.php">Database Management</a></li>
                        <li><a href="<?= $siteRoot; ?>database/dbDev.php">Database Development</a></li>
                        <li><a href="<?= $siteRoot; ?>database/SQL.php">SQL</a></li>
                      </ul>
                    </li>
                    <li><a class="topbar" href="<?= $siteRoot; ?>networking.php">Networking</a></li>
                    <li><a class="topbar" href="<?= $siteRoot; ?>security.php">Security</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle topbar" data-toggle="dropdown" href="#">Other<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $siteRoot; ?>projectManagement/videoIntro.php">Introduction to Project Management</a></li>
                        <li><a href="<?= $siteRoot; ?>hardware.php">Computer Hardware</a></li>
                        <li><a href="<?= $siteRoot; ?>contact.php">About &amp; Contact</a></li>
                      </ul>
                    </li>

                  </ul>
                </div>
              </div>
          </nav>
