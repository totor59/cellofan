<div class="row">
  <div class="col-sm-10 col-sm-offset-1">

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
{posts}
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{id}" aria-expanded="true" aria-controls="collapseOne">
            {title}
            </a>
          </h4>
        </div>
        <div id="collapse{id}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            {content}
          </div>
        </div>
      </div>
{/posts}

    </div>

  </div>
</div>
