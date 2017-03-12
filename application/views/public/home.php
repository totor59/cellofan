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

	{posts}
		<div class="col-xs-12 col-sm-6 col-lg-4">
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
		{/posts}


		<!-- PAGINATION -->
	  <div class="pagination col-xs-12 text-center">
	  	<div class="">
	  <?php echo $this->pagination->create_links(); ?>
	  	</div>


</div>
<!-- POSTS -->




<!-- CONTENU -->
