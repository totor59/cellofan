<!-- MENU ADMIN -->
<ul class="nav nav-tabs col-xs-12 col-sm-8 col-md-9 col-lg-10 pull-right">
    <li role="presentation" class="active pull-right"><a href="<?= base_url('admin/posts/create_posts') ?>">Ecrire post</a></li>
  <li role="presentation" class="pull-right"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
  <li role="presentation" class="pull-right"><a href="#">Home</a></li>
  <li role="presentation" class="pull-right dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?= $this->session->username ?> <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
 D&eacute;connection</a></li>
  </ul>
</li>
</ul>
<!-- /MENU ADMIN -->
  <div class="container main-content col-xs-12 col-sm-8 clo-md-9 col-lg-10 pull-right">



<!-- CREATE POST -->
<div class="col-sm-10 col-sm-offset-1">
<?= $title ?>
<br>
<?= $description ?>
<br>
<?= $content ?>
<br>
<?= $thumbnail ?>
<br>

</div>
