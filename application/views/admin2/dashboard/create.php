
<!-- /MENU ADMIN -->
  <div class="container">



<!-- CREATE POST -->
<div class="col-sm-10 col-sm-offset-1">
  <div class="panel panel-default create-panel">
    <h1>Cr&eacute;er un nouveau post</h1>
  <div class="panel-body">
    <?= form_open('admin/posts/create') ?>
    <div class="form-group">
        <?= form_error('title') ?>
    <label for="title">Titre</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" maxlength="150" placeholder="Facultatif. Maxi -??? caracteres"><?= set_value('description'); ?></textarea>
    </div>
    <div class="form-group">
    <label for="content">Contenu de l'article</label>
    <textarea name="content" class="ckeditor form-control" placeholder="Article" rows="10" cols="40"><?= set_value('content'); ?></textarea><br />
  </div>
    <button type="submit" class="col-sm-3 btn btn-danger pull-right">Creer l'article</button>
  <?= form_close() ?>
</div>
</div>
</div>
</div>


	<!-- CREATE POST -->
