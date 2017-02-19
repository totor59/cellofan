<div class="col-xs-4 col-xs-offset-4">

<div class="panel panel-default auth-panel">
  <div class="panel-heading">
    <h3 class="panel-title text-center sista">AUTHENTIFICATION</h3>
  </div>
  <div class="panel-body">
    <?php echo form_open('login/login', 'class="form-horizontal"') ?>
    <div class="form-group">
      <label for="inputEmail3" class="col-xs-3 col-xs-offset-1 control-label">Username</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-xs-3 col-xs-offset-1 control-label">Password</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
    </div>
    <input class="btn btn-danger" type="submit" value="Submit">
    <?php echo form_close() ?>
  </div>
</div>

</div>
