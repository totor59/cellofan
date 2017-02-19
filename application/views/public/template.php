<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo base_url() . 'public/assets/favicon.ico';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/assets/css/style.css';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/third-party/css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/third-party/css/font-awesome.min.css';?>">
</head>

<body>
<!-- MOBILE -->
<nav class="navbar navbar-default visible-xs">
<div class="container-fluid">
<div class="navbar-header navmobile">
<a class="navbar-brand" href="#">
<img alt="Brand" src="" classe="img-responsive">
</a>
<a href="#" class="pull-right dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu col-xs-12">
<li><a href="#">Action</a></li>
<li><a href="#">Another action</a></li>
<li><a href="#">Something else here</a></li>
<li role="separator" class="divider"></li>
<li><a href="#">Separated link</a></li>
</ul>
</div>
</div>
</nav>
<!-- /MOBILE -->

<div class="container-fluid page-content">
<div class="row">

  <!-- SIDEBAR -->
  <div class="sidebar hidden-xs col-sm-4 col-lg-3">
    <div class="sidebar-wrapper">
    <img class="img-responsive" src="<?= base_url('public/assets/img/logo.png')?>">
    <ul class="menu">
      <li><a href="#" class="basiclink asso">L'asso</a></li>
      <li><a href="#" class="basiclink activite">Activites</a></li>
      <li><a href="#" class="basiclink soutien">Nous soutenir</a></li>
    </ul>
    <div class="social-bar">
      <div class="col-sm-4 text-center">
      <a href="#" class="fb"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="col-sm-4 text-center">
      <a href="#" class="tw"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="col-sm-4 text-center">
      <a href="#" class="yt"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="agenda">
      <h2>AGENDA</h2>
      <ul>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
      </ul>
    </div>
    <div class="contact cartoon">
      <ul>
        <li>Cellofan'</li>
        <li>44/2 rue d’Austerlitz</li>
        <li>59000 LILLE</li>
        <li>09 67 04 46 00</li>
        <li>cellofan.asso@gmail.com</li>
      </ul>
    </div>
  </div>
  </div>
  <!-- SIDEBAR -->
<?php echo $body ?>
</div>
</div>
</body>
<script src="<?php echo base_url() . 'public/third-party/js/jquery-3.1.1.min.js';?>"></script>
<script src="<?php echo base_url() . 'public/third-party/js/bootstrap.min.js';?>"></script>
</html>
