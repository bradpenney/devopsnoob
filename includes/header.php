<?php
    //  path should be '/' in production and '/devopsnoob/' in testing
    $siteRoot = '/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="Brad Penney">


        <link rel="stylesheet" href="<?= $siteRoot; ?>css/normalize.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $siteRoot; ?>css/main.css">

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= $siteRoot; ?>js/main.js"></script>

        <title><?php echo $title; ?></title>
    </head>

    <body>
        <div id="wrap">
            <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?= $siteRoot; ?>index.php">DevOpsNoob.com</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Programming<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $siteRoot; ?>programming/python.php">Python</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/java.php">Java</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/php.php">PHP</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/javascript.php">JavaScript</a></li>
                        <li><a href="<?= $siteRoot; ?>programming/frontEndWeb.php">HTML5 &amp; CSS3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Systems Admin<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $siteRoot; ?>sysAdmin/linux.php">Linux</a></li>
                        <li><a href="<?= $siteRoot; ?>sysAdmin/windows.php">Windows</a></li>
                        <li><a href="<?= $siteRoot; ?>sysAdmin.php">Resources</a></li>
                      </ul>
                    </li>
                    <li><a href="<?= $siteRoot; ?>dbadmin.php">Database Admin</a></li>
                    <li><a href="<?= $siteRoot; ?>hardware.php">Hardware</a></li>
                    <li><a href="<?= $siteRoot; ?>networking.php">Networking</a></li>
                    <li><a href="<?= $siteRoot; ?>security.php">Security</a></li>
                  </ul>
                </div>
              </div>
          </nav>
