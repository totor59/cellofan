<div class="row col-xs-12">
  <div class="col-sm-10 col-sm-offset-1">

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

{posts}
      <div class="panel panel-default">
        <div class="panel-heading relative" role="tab" id="heading{id}">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{id}" aria-expanded="true" aria-controls="collapseT{id}">
              {title}
            </a>
            <div class="btn-group pull-right page-settings">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-power-off fa-fw fa-lg {status}" aria-hidden="true"></i>
          <i class="fa fa-cog fa-fw fa-lg" aria-hidden="true"></i>
      <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('admin/asso/edit/{id}')?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Editer</a></li>
          <li><a href="#" data-toggle="modal" data-target="#deletePost{id}"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Supprimer</a></li>
          <li><a href="{publish}"><i class="fa fa-fw {button}" aria-hidden="true"></i>Publier</a></li>
        </ul>
      </div>
          </h4>
        </div>
        <div id="collapse{id}" class="panel-collapse collapse {open}" role="tabpanel" aria-labelledby="heading{id}">
          <div class="panel-body page-section">
              {content}
          </div>
        </div>
      </div>

      <!-- Modal -->
    <div class="modal fade" id="deletePost{id}" tabindex="-1" role="dialog" aria-labelledby="delete">
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
            <form class="" action="<?= base_url('admin/asso/delete/') ?>{id}" method="post">
            <button type="submit" class="btn btn-danger">OUI</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
            </form>
          </div>
        </div>
      </div>
    </div>
{/posts}


      <!-- create -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="create">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseCreate" aria-expanded="false" aria-controls="collapseCreate">
                    <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Nouvelle section
                  </a>
                </h4>
              </div>
              <div id="collapseCreate" class="panel-collapse collapse" role="tabpanel" aria-labelledby="create">
                <div class="panel-body">
                  <h1>Cr&eacute;er une nouvelle section</h1>
                <div class="panel-body">
                  <?= form_open('admin/asso/create') ?>
                  <div class="form-group">
                      <?= form_error('title') ?>
                  <label for="title">Titre</label>
                  <input type="text" class="form-control" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                  <label for="content">Contenu de l'article</label>
                  <textarea name="content" class="ckeditor form-control" placeholder="Article" rows="10" cols="40"><?= set_value('content'); ?></textarea><br />
                </div>
                  <button type="submit" class="col-sm-3 btn btn-danger pull-right">Creer</button>
                <?= form_close() ?>
                </div>
              </div>
            </div>
      <!-- create -->

    </div>

  </div>
</div>
