<!DOCTYPE html>
<?php // if (isset($_SESSION['initiated'])) validate_session();?>

<html>

    <head>
        <!-- START OF BOOTSTRAP SECTION -->
        <!-- DO NOT MODIFY -->
           <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <!-- Bootstrap Overrides -->

           <!-- Bootstrap Stylesheet -->
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link href="css/bootstrap.min" rel="stylesheet">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/bootstrap.min.css.map" rel="stylesheet">
            <link href="css/bootstrap-grid.min" rel="stylesheet">
            <!--<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>-->
            <link href="css/styles.css" rel="stylesheet"/>
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js does not work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->



            <style>
            html {
              position: relative;
              min-height: 100%;
            }
            body {
              /* Margin bottom by footer height */
              margin-bottom: 60px;
              min-height: 100%;
            }

            .footer {
              position: absolute;
              bottom: 0;
              width: 95%;
              /* Set the fixed height of the footer here */
              height: 60px;

            }

            .navbar {
              background-color: #006400 !important;
              background-image: none !important;
            }
            .navbar-brand {
              color: #fff !important;
            }
            input {
               width: 100%;
               box-sizing: border-box;
               height: 28px; }
            textarea {
              width: 100%;
              box-sizing: border-box;
              height: 84px; }

            #map {
              height: 500px;
            }
            </style>

            <?php if (isset($title)): ?>
                <title>Shire of Owlsherst Inventory: <?= htmlspecialchars($title) ?></title>
            <?php else: ?>
                <title>Shire of Owlsherst Inventory</title>
            <?php endif ?>

            <script src="/js/jquery-1.10.2.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/js/scripts.js"></script>
            <script src="/js/sorttable.js"></script>
        <!-- END OF BOOTSTRAP SECTION -->

    </head>

    <body>

<div class="container-fluid">
  <!-- begin page -->
  <header class="header">
<!--
<img class="banner" src="/img/banner.png" alt="Shire of Owlsherst Inventory site banner" width="100%">
-->
    <div id="top" role="navigation">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">Home</a>
          </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a class="navbar-brand"  href="/public/print.php">Get Printable Inventory Sheets</a></li>
      <li><a class="navbar-brand"  href="/public/change.php">Change request form</a></li>
        <?php
        //if (isset($_SESSION["id"]))
        //{
        //   echo '<li><a class="navbar-brand" href="/public/users.php">User List</a></li>';
        //}
        ?>           <!--
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Recent Additions</a></li>
              <li><a href="#">Another Link</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Advanced Search</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
-->

        </ul>




          <?php /*
          if (isset($_SESSION["id"]))
          {
            echo '<li class="navbar-brand" >Logged in as '.$_SESSION["user_name"].'</li>';
            echo '<li><a href="logout.php" class="navbar-brand">Log Out</a></li>';
          }
          */
          ?>


        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
</header>

<!-- end header -->

<!-- Begin middle -->
            <div id="middle">
