

  <div class="container main-content col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">
	<!-- CONTENU -->
<div class="panel panel-default banner">
<img class="img-responsive" src="<?= base_url('public/assets/img/banner.jpg')?>">
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



{posts}
	<div class="col-xs-12 col-sm-6 col-lg-4">
			<img src="<?= base_url('public/assets/img/pin-icon.png')?>" alt="..." class="pin">
      <div class="btn-group pull-right settings">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-power-off fa-fw fa-lg {status}" aria-hidden="true"></i>
    <i class="fa fa-cog fa-fw fa-lg" aria-hidden="true"></i>
<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="<?= base_url('admin/posts/edit/{id}')?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Editer</a></li>
    <li><a href="#" data-toggle="modal" data-target="#deletePost"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Supprimer</a></li>
    <li><a href="{publish}"><i class="fa fa-fw {button}" aria-hidden="true"></i>Publier</a></li>
  </ul>
</div>
    <div class="thumbnail postcard">
			<a href="{view}" class="basiclink">
      <div class="thumbwrap">
      <img src="{thumbnail}" alt="..." class="img-responsive">
    </div>
    <div class="captionwrap">
      <div class="caption">
        <h3 class="sista">{title}</h3>
        <p>{description}<strong>[ ... Lire la suite ]</strong></p>
      </div>
    </div>
			</a>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-labelledby="delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
          <h4 class="text-center">
            <span class="fa-stack fa-lg">
  <i class="fa fa-circle-o fa-stack-2x"></i>
  <i class="fa fa-exclamation fa-stack-1x"></i>
</span>
<strong>
Voulez vous supprimer definitivement cet article ?
</strong>
</h4>
        </div>
      </div>
      <div class="modal-footer">
        <form class="" action="<?= base_url('admin/posts/delete/') ?>{id}" method="post">
        <button type="submit" class="btn btn-danger">OUI</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
        </form>
      </div>
    </div>
  </div>
</div>
  {/posts}


  <!-- PAGINATION -->
  <div class="pagination col-xs-12 text-center">
  	<div class="">
  <?php echo $this->pagination->create_links(); ?>
  	</div>

</div>  <!-- row -->

<!-- POSTS -->

</div>





<!-- CONTENU -->
