<!-- MOBILE -->
<nav class="navbar navbar-default visible-xs">
<div class="container-fluid">
<div class="navbar-header navmobile">
<a class="navbar-brand" href="#">
<img alt="Brand" src="" classe="img-responsive">
</a>
<a href="#" class="pull-right dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu col-xs-12">
<li><a href="#">Action</a></li>
<li><a href="#">Another action</a></li>
<li><a href="#">Something else here</a></li>
<li role="separator" class="divider"></li>
<li><a href="#">Separated link</a></li>
</ul>
</div>
</div>
</nav>
<!-- /MOBILE -->



<div class="container page-content">
<div class="row row-eq-height">
  <!-- SIDEBAR -->
  <div class="sidebar hidden-xs col-sm-4 col-md-3 col-lg-3">
    <div class="row">
    <img class="img-responsive" src="<?= base_url('public/assets/img/logo-detail.png')?>">
    <ul class="menu">
      <li><a href="<?= base_url('admin/asso') ?>" class="basiclink asso">L'asso</a></li>
      <li><a href="#" class="basiclink activite">Activites</a></li>
      <li><a href="#" class="basiclink soutien">Nous soutenir</a></li>
    </ul>
    <div class="social-bar">
      <div class="col-sm-4 text-center">
      <a href="#" class="fb"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="col-sm-4 text-center">
      <a href="#" class="tw"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="col-sm-4 text-center">
      <a href="#" class="yt"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="agenda">
      <h2>AGENDA</h2>
      <ul>
        <!-- creation event -->
        <li>
          <div class="panel panel-default">
            <div class="panel-heading">Nouvel Evenement</div>
            <div class="panel-body">
              <?= form_open('admin/posts/create_event'); ?>
              <!-- <div class="alert alert-danger" role="alert">...</div> -->
              <div class="form-group">

                <label for="date">Date</label>
                <input type="text" name="date" id="datepicker" class="form-control" value="<?= set_value("date") ?>">
            </div>
                  <!-- <input type="date" id="datepicker" class="form-control" name="date" placeholder="Date"> -->

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" rows="2" name="description"></textarea>
              </div>
              <div class="form-group">

                <label for="link">Linker l'evenement</label>
                <input type="text" name="link" class="form-control" value="<?= set_value("date") ?>">
            </div>
              <button type="submit" class="btn btn-default btn-block">Submit</button>
              <?= form_close() ?>
              <br>
            </div>
          </div>
          </div>
        <!-- ?creation event -->

        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
        <li>
          <h3 class="date">JEUDI 27 SEPT. </h3>
          <span class="excerpt">Projection Manolo a St So de 20h a 23h</span>
        </li>
      </ul>
    </div>
    <div class="contact cartoon">
      <ul>
        <li>Cellofan'</li>
        <li>44/2 rue d’Austerlitz</li>
        <li>59000 LILLE</li>
        <li>09 67 04 46 00</li>
        <li>cellofan.asso@gmail.com</li>
      </ul>
    </div>
  </div>
  <!-- SIDEBAR -->
