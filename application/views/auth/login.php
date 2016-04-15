<div class="row" style="margin-top: 5%">

  <div class="col-md-12 text-center">
    <h2><?php echo lang('login_heading');?></h2>
    <p><?php echo lang('login_subheading');?></p>
  </div>


<div id="infoMessage"><?php echo $message;?></div>

  <div class="col-md-6 col-md-offset-3">

    <?php
    $attributes = array('role' => 'form', 'id' => 'loginForm');
    echo form_open('auth/login', $attributes);
    ?>




    <div class="form-group">
      <?php echo lang('login_identity_label', 'identity');?><br>
      <?php echo form_input($identity);?>
    </div>

    <div class="form-group">
      <?php echo lang('login_password_label', 'password');?><br>
      <?php echo form_input($password);?>
    </div>

    <div class="form-group">
      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </div>

<!--      <p><?php /*echo form_submit('submit', lang('login_submit_btn'));*/?></p>-->

    <?php

    $data = array(
        'name' => 'submit',
        'id' => 'submit',
        'type' => 'submit',
        'class' => 'btn btn-default',
        'content' => 'Login'
    );

    echo form_button($data);
     ?>

    <?php echo form_close();?>
  </div>
</div>

<div class="row" style="margin-top: 1%">
  <div class="col-md-6 col-md-offset-3">
    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
    <a href="<?php echo site_url('') ?>" class="btn btn-primary">Back</a>

  </div>
</div>



