<!-- MENU ADMIN -->
<ul class="nav nav-tabs col-xs-12 col-sm-8 col-lg-9 pull-right">
  <li role="presentation" class="pull-right"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
  <li role="presentation" class="active pull-right"><a href="#">Home</a></li>
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
  <div class="container main-content col-xs-12 col-sm-8 col-lg-9 pull-right">


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
			<a href="#" class="basiclink" data-toggle="modal" data-target="#createModal">
      <div class="caption">
				<h3 class="text-center"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></h3>
        <h3 class="text-center">Ecrire un nouveau post</h3>
      </div>
			</a>
    </div>
  </div>

	<div class="modal fade" tabindex="-1" role="dialog" id="createModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        <p>One fine body&hellip;</p>
					<textarea name="content" class="ckeditor" rows="10" cols="40">Type your article here</textarea><br />
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
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



<!-- PAGINATION -->
<div class="pagination">
	<div class="">

	</div>
</div>


<!-- CONTENU -->
