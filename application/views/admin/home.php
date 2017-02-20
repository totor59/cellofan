<!-- MENU ADMIN -->
<ul class="nav nav-tabs col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">
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
<!-- /MENU ADMIN -->

  <div class="container main-content col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">


	<!-- CONTENU -->
<div class="panel panel-default banner cartoon">
<img class="img-responsive cartoon" src="<?= base_url('public/assets/img/banner.jpg')?>">
</div>


<div class="col-xs-12 presentation">
	<h1 class="sista text-center hometitle">Cellofan' - Pr&eacute;sentation</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<!-- POSTS -->
<div class="row">
	<div class="col-xs-12">
		<h1 class="sista text-center hometitle">Actualit&eacute;s</h1>
	</div>

<!-- CREATE POST -->
	<div class="col-xs-12 col-sm-6 col-lg-4">
    <div class="thumbnail postcard createcard">
			<a href="<?= base_url('admin/posts') ?>" class="basiclink">
      <div class="caption">
				<h3 class="text-center"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></h3>
        <h3 class="text-center">Ecrire un nouveau post</h3>
      </div>
			</a>
    </div>
  </div>


	<!-- CREATE POST -->




	<div class="col-xs-12 col-sm-6 col-lg-4">
			<img src="<?= base_url('public/assets/img/pin-icon.png')?>" alt="..." class="pin">
    <div class="thumbnail postcard">
			<a href="#" class="basiclink">
      <img src="<?= base_url('public/assets/img/image2.jpg')?>" alt="..." class="thumb">
      <div class="caption">
        <h3 class="sista">Thumbnail label</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
			</a>
    </div>
  </div>

	<div class="col-xs-12 col-sm-6 col-lg-4">
			<img src="<?= base_url('public/assets/img/pin-icon.png')?>" alt="..." class="pin">
		<div class="thumbnail postcard">
			<a href="#" class="basiclink">
			<img src="<?= base_url('public/assets/img/image3.jpg')?>" alt="..." class="thumb">
			<div class="caption">
				<h3 class="sista">Thumbnail label</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			</a>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-4">
			<img src="<?= base_url('public/assets/img/pin-icon.png')?>" alt="..." class="pin">
		<div class="thumbnail postcard">
			<a href="#" class="basiclink">
			<img src="<?= base_url('public/assets/img/image4.jpg')?>" alt="..." class="thumb">
			<div class="caption">
				<h3 class="sista">Thumbnail label</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			</a>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-4">
			<img src="<?= base_url('public/assets/img/pin-icon.png')?>" alt="..." class="pin">
		<div class="thumbnail postcard">
			<a href="#" class="basiclink">
			<img src="<?= base_url('public/assets/img/image5.jpg')?>" alt="..." class="thumb">
			<div class="caption">
				<h3 class="sista">Thumbnail label</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			</a>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-4">
			<img src="<?= base_url('public/assets/img/pin-icon.png')?>" alt="..." class="pin">
		<div class="thumbnail postcard">
			<a href="#" class="basiclink">
			<img src="<?= base_url('public/assets/img/image6.jpg')?>" alt="..." class="thumb">
			<div class="caption">
				<h3 class="sista">Thumbnail label</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			</a>
		</div>
	</div>


</div>
<!-- POSTS -->

</div>


<!-- PAGINATION -->
<div class="pagination">
	<div class="">

	</div>


<!-- CONTENU -->
