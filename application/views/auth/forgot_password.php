<div class="row" style="margin-top: 5%">

    <div class="col-md-12 text-center" style="margin-top: 2%">
        <div id="infoMessage"><h3 class="text-danger"><?php echo $message;?></h3></div>
        <h1><?php echo lang('forgot_password_heading');?></h1>
        <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

    </div>

    <div class="col-md-6 col-md-offset-4">

        <?php echo form_open("auth/forgot_password");?>


        <div class="form-group">
            <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
            <?php echo form_input($identity);?>
        </div>


        <?php

        $data = array(
            'name' => 'submit',
            'id' => 'submit',
            'type' => 'submit',
            'class' => 'btn btn-default',
            'content' => 'Submit'
        );

        echo form_button($data);
        ?>

        <?php echo form_close();?>
    </div>
</div>









