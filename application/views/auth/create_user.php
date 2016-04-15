

<div class="row" style="margin-top: 5%">
    
      <div class="col-md-12 text-center" style="margin-top: 2%">
            <div id="infoMessage"><h3 class="text-danger"><?php echo $message;?></h3></div>
            <h2><?php echo lang('create_user_heading');?></h2>
            <p><?php echo lang('create_user_subheading');?></p>

      </div>

      <div class="col-md-6 col-md-offset-3">

            <?php
            $attributes = array('role' => 'form', 'id' => 'createUserForm');
            echo form_open('auth/create_user', $attributes);
            ?>


          <div class="form-group">
              <?php echo lang('create_user_fname_label', 'first_name');?> <br />
              <?php echo form_input($first_name);?>
          </div>

          <div class="form-group">
              <?php echo lang('create_user_lname_label', 'last_name');?> <br />
              <?php echo form_input($last_name);?>
          </div>

          <?php
          if($identity_column!=='email') {
              echo '<div class="form-group">';
              echo lang('create_user_identity_label', 'identity');
              echo '<br />';
              echo form_error('identity');
              echo form_input($identity);
              echo '</div>';
          }
          ?>

          <div class="form-group">
              <?php echo lang('create_user_company_label', 'company');?> <br />
              <?php echo form_input($company);?>
          </div>

          <div class="form-group">
              <?php echo lang('create_user_email_label', 'email');?> <br />
              <?php echo form_input($email);?>
          </div>

          <div class="form-group">
              <?php echo lang('create_user_phone_label', 'phone');?> <br />
              <?php echo form_input($phone);?>
          </div>

          <div class="form-group">
              <?php echo lang('create_user_password_label', 'password');?> <br />
              <?php echo form_input($password);?>
          </div>

          <div class="form-group">
              <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
              <?php echo form_input($password_confirm);?>
          </div>
          

          <?php

          $data = array(
              'name' => 'submit',
              'id' => 'submit',
              'type' => 'submit',
              'class' => 'btn btn-default',
              'content' => 'Register'
          );

          echo form_button($data);
          ?>
            

            <?php echo form_close();?>
      </div>
</div>

<div class="row" style="margin-top: 1%">
      <hr>
      <div class="col-md-6 col-md-offset-3">
            <a href="<?php echo site_url('') ?>" class="btn btn-primary">Back</a>
      </div>
</div>