<div class="container">
  <div class="panel panel-default col-xs-12">
    <div class="panel-body">
      <h2 class="lato col-xs-3 col-md-6">ARTICLES</h2>
      <a href="<?= base_url('admin/posts/create')?>" class="btn btn-info btn-newpost col-xs-6 col-md-3 pull-right">
          <i class="fa fa-plus-circle fa-lg fa-fw" aria-hidden="true"></i>&nbsp;Écrire un nouvel article
      </a>
  <div class="list-group col-xs-12 postgroup">
    {posts}
    <div class="list-group-item">
      <div class="thumbwrapper col-xs-3 col-md-2">
      <img src="{thumbnail}" alt="" class="img-thumbnail">
      </div>
      <h4 class="list-group-item-heading col-xs-8 col-md-3">{title}</h4>
      <p class="list-group-item-text col-xs-8 col-md-5">{description}</p>
      <ul class="col-xs-1 col-md-2 controls pull-right">
        <li><a href="<?= base_url('admin/posts/edit/{id}')?>"><i class="fa fa-lg fa-pencil fa-fw" aria-hidden="true"></i></a></li>
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
  </div>
  <div class="col-xs-12 text-center">
<?php echo $this->pagination->create_links(); ?>
  </div>
</div>
</div>
</div>
