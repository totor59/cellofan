<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo base_url() . 'public/assets/favicon.ico';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/assets/css/style.css';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/assets/css/admin.css';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/third-party/css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/third-party/css/jquery-ui.min.css';?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/third-party/css/font-awesome.min.css';?>">
<script src="<?= base_url() . 'public/third-party/ckeditor/ckeditor.js';?>"></script>
</head>

<body>
  <!-- MENU ADMIN -->
  <div class="container-fluid navcontainer">
  <ul class="nav nav-tabs">
      <li role="presentation" class="pull-right"><a href="<?= base_url('admin/posts/create_posts') ?>">Ecrire post</a></li>
    <li role="presentation" class="pull-right"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
    <li role="presentation" class="active pull-right"><a href="<?= base_url('admin/home') ?>">Home</a></li>
    <li role="presentation" class="pull-right dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?= $this->session->username ?> <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
   D&eacute;connection</a></li>
    </ul>
  </li>
  </ul>
</div>
  <!-- /MENU ADMIN -->
