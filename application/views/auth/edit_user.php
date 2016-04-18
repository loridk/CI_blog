<div class="row" style="margin-top: 5%">

    <div class="col-md-12 text-center" style="margin-top: 2%">
        <div id="infoMessage"><h3 class="text-danger"><?php echo $message;?></h3></div>
        <h1><?php echo lang('edit_user_heading');?></h1>
        <p><?php echo lang('edit_user_subheading');?></p>

    </div>

    <div class="col-md-6 col-md-offset-4">

        <?php echo form_open(uri_string());?>


        <div class="form-group">
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
        </div>

        <div class="form-group">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
        </div>

        <?php if ($this->ion_auth->is_admin()): ?>

            <h3><?php echo lang('edit_user_groups_heading');?></h3>
            <?php foreach ($groups as $group):?>
                <label class="checkbox">
                    <?php
                    $gID=$group['id'];
                    $checked = null;
                    $item = null;
                    foreach($currentGroups as $grp) {
                        if ($gID == $grp->id) {
                            $checked= ' checked="checked"';
                            break;
                        }
                    }
                    ?>
                    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                </label>
            <?php endforeach?>

        <?php endif ?>

        <?php echo form_hidden('id', $user->id);?>
        <?php echo form_hidden($csrf); ?>


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





