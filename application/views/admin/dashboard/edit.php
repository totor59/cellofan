
<!-- /MENU ADMIN -->
  <div class="container main-content col-xs-12">



<!-- CREATE POST -->
<div class="col-sm-10 col-sm-offset-1">
  <div class="panel panel-default create-panel">
    <h1>Modifier le post</h1>
  <div class="panel-body">
        {post}
    <form class="" action="<?= base_url('admin/posts/edit/') ?>{id}" method="post">
    <div class="form-group">
        <?= form_error('title') ?>
    <label for="title">Titre</label>
    <input type="text" class="form-control" name="title" value="{title}">
    </div>
    <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" maxlength="150">{description}</textarea>
    </div>
    <div class="form-group">
    <label for="content">Contenu de l'article</label>
    <textarea name="content" class="ckeditor form-control" placeholder="Article" rows="10" cols="40">{content}</textarea><br />
  </div>
    <button type="submit" class="col-sm-3 btn btn-danger pull-right">Modifier l'article</button>
    {/post}
  </form>
</div>
</div>
</div>


	<!-- CREATE POST -->
