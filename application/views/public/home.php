  <!-- CONTENU -->
<div class="col-xs-12 presentation">
	<h1 class="exo text-center hometitle text-uppercase">Cellofan' - Pour qui? Pourquoi?</h1>
	<div class="col-xs-12">
			<hr class="separator-red">
		</div>
		<p>Depuis plus de 25 ans, Cellofan’ défend le cinéma d’animation, avec l’aide de ses intervenants-animateurs professionnels, réalisateurs, scénaristes, storyboardeurs, scénaristes et graphistes. Des professionnels passionnés, sachant s’adapter à leur auditoire, partagent leur connaissance et leur savoir-faire dans le domaine du cinéma d’animation en Région des Hauts de France mais aussi partout ailleurs.<br>
Le cinéma d’animation est un continuel voyage entre les arts et le cinéma, accessible à tous. Ce medium, riche de ses nombreuses techniques, permet à tout public curieux de développer leur créativité et aussi de s’approprier les codes de l’image contemporaine numérique.<br><br>
« Bien que Michel Ocelot ait fait découvrir au grand public la vitalité du cinéma d’animation avec « Kirikou et la sorcière », cette branche spécifique du cinéma reste encore, pour de nombreuses personnes, un art inconnu. Très attachée à l’Artois, dont je suis originaire, c’est avec grande fierté que j’ai vu, pendant trois ans, petits et grands s’enthousiasmer, s’émerveiller, se révéler devant les programmes de courts-métrages, les expositions et les ateliers de réalisation mis en place par Cellofan’ »<br><br>
« Travailler sur un territoire en impliquant ses habitants, dans une démarche de coconstruction culturelle, est un travail passionnant. Notre volonté de produire avec, par et pour les participants permet, au delà de l’oeuvre, de fabriquer du sens commun et contribue à faire société ensemble avec nos différences. Par le processus de fabrication d’un court-métrage, par exemple, chacun trouve sa place dans une dynamique à la fois collective et individuelle qui permet, une fois l’oeuvre achevée, l’échange, la reconnaissance, et l’estime de soi. »</p>
</div>

<!-- POSTS -->
<div class="row">
	<div class="col-xs-12">
		<h1 class="exo text-center hometitle text-uppercase">Actualit&eacute;s</h1>
		<div class="col-xs-12">
				<hr class="separator-orange">
			</div>
	</div>

	{posts}
		<div class="col-xs-12 col-sm-6 col-lg-4">
	    <div class="thumbnail postcard">
				<a href="<?= base_url('view/index/{slug}') ?>" class="basiclink">
	      <div class="thumbwrap">
	      <img src="{thumbnail}" alt="..." class="img-responsive">
	    </div>
	    <div class="captionwrap">
	      <div class="caption">
	        <h3 class="exo text-uppercase">{title}</h3>
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
