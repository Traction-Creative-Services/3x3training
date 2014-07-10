<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php if($auth) { ?>

    <style>
      body { margin-top: 70px;}
    </style>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation" id="mainSiteNav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">3x3 Training</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php if($activeTab == 'mat') echo 'class="active"'; ?>><a href="#">Mat Exercises</a></li>
            <li <?php if($activeTab == 'wall') echo 'class="active"'; ?>><a href="#">Upper Body / Wall</a></li>
            <li <?php if($activeTab == 'standing') echo 'class="active"'; ?>><a href="#">Standing</a></li>
            <li <?php if($activeTab == 'senior') echo 'class="active"'; ?>><a href="#">Senior</a></li>
            <li <?php if($activeTab == 'barre') echo 'class="active"'; ?>><a href="#">Barre</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="security">Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<?php } ?>
    