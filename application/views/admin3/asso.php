<div class="row col-xs-12">

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
