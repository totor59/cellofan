<div class="container">
  <div class="panel panel-default col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <div class="panel-body">
      <h2 class="lato col-xs-3 col-md-4">ASSO</h2>
      <a href="<?= base_url('admin/asso/create')?>" class="btn btn-info btn-newpost col-xs-5 pull-right">
          <i class="fa fa-plus-circle fa-lg fa-fw" aria-hidden="true"></i>&nbsp;Écrire une nouvelle section
      </a>
  <div class="list-group col-xs-12 postgroup">
    {posts}
    <div class="list-group-item page-item col-xs-12">
      <h4 class="list-group-item-heading col-xs-8 col-md-9">{title}</h4>
      <ul class="col-xs-4 col-md-3 controls pull-right">
        <li><a href="<?= base_url('admin/asso/edit/{id}')?>"><i class="fa fa-lg fa-pencil fa-fw" aria-hidden="true"></i></a></li>
        <li><a href="#" data-toggle="modal" data-target="#deletePost{id}"><i class="fa fa-lg fa-trash fa-fw" aria-hidden="true"></i></a></li>
        <li><a href="{publish}"><i class="fa fa-fw fa-lg {button}" aria-hidden="true"></i></a></li>
      </ul>
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
             Voulez vous supprimer definitivement cette section ?
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
  </div>
</div>
</div>
</div>
