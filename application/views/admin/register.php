<div class="col-xs-4 col-xs-offset-4">

<div class="panel panel-default auth-panel">
  <div class="panel-heading">
    <h3 class="panel-title text-center sista">CREER UN UTILISATEUR</h3>
  </div>
  <div class="panel-body">
    <?php echo form_open('admin/dashboard/add_user', 'class="form-horizontal"') ?>
    <div class="form-group">
      <label for="username" class="col-xs-3 col-xs-offset-1 control-label">Username</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-xs-3 col-xs-offset-1 control-label">Email</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-xs-3 col-xs-offset-1 control-label">Password</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
    </div>
      <div class="form-group">
        <label for="password2" class="col-xs-3 col-xs-offset-1 control-label">Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="password2" placeholder="Confirm your password" required>
        </div>
    </div>
    <input class="btn btn-danger pull-right" type="submit" value="Submit">
    <?php echo form_close() ?>
  </div>
</div>

</div>
