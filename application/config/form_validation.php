<?php
$config = array(
  'error_prefix' => '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i>&nbsp;',
  'error_suffix' => '</div>',

  'post' => array(
array(
      'field' => 'title',
      'rules' => 'required',
      'errors' => array(
              'required' => "Vous devez renseigner un titre &agrave; votre article.",
      ),
),
array(
      'field' => 'content',
),
array(
      'field' => 'description',
),

),


  'page' => array(
array(
      'field' => 'title',
      'rules' => 'required',
      'errors' => array(
              'required' => "Vous devez renseigner un titre &agrave; votre page.",
      ),
),
array(
      'field' => 'content',
),

),




)
?>
