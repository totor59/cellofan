<!DOCTYPE html>
<html lang="fr">
<head>
  {header}
<meta charset="UTF-8">
<title>{title}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo base_url() . 'public/assets/favicon.ico';?>">
<link rel="stylesheet" href="<?php echo base_url('public/assets/css/dashboard.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/assets/css/style.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/third-party/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/third-party/css/font-awesome.min.css') ;?>">
<script src="<?= base_url() . 'public/third-party/ckeditor/ckeditor.js';?>"></script>
</head>

<body>

<div class="container-fluid page-content">
<div class="row">

  <nav class="navbar navbar-admin navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-sm" href="#">
          <img alt="Brand" class="img-responsive" src="<?php echo base_url('public/assets/img/logoblanc.png');?>">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="{posts}"><a href="<?php echo base_url('admin/posts');?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Articles</a></li>
          <li class="dropdown {pages}">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Pages&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url('admin/asso');?>"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Asso</a></li>
              <li><a href="<?php echo base_url('admin/activites');?>"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Activités</a></li>
            </ul>
          <li class="{events}"><a href="#"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>&nbsp;Événements</i></a></li>
          <li class="{general}"><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Général</a></li>
          <li class="{preview}"><a href="#"><i class="fa fa-eye fa-fw" aria-hidden="true"></i>&nbsp;Apercu du site</a></li>
          <li class="dropdown {admin}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>&nbsp;<?= ucfirst($_SESSION['username']) ?>&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp;Utilisateurs</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Déconnection</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
{/header}
