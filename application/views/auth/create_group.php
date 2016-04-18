
<div class="row" style="margin-top: 5%">

    <div class="col-md-12 text-center" style="margin-top: 2%">
        <div id="infoMessage"><h3 class="text-danger"><?php echo $message;?></h3></div>
        <h1><?php echo lang('create_group_heading');?></h1>
        <p><?php echo lang('create_group_subheading');?></p>

    </div>

    <div class="col-md-4 col-md-offset-4">

        <?php echo form_open("auth/create_group");?>


            <div class="form-group">
                <?php echo lang('create_group_name_label', 'group_name');?> <br />
                <?php echo form_input($group_name);?>
            </div>

            <div class="form-group">
                <?php echo lang('create_group_desc_label', 'description');?> <br />
                <?php echo form_input($description);?>
            </div>

        <?php

        $data = array(
            'name' => 'submit',
            'id' => 'submit',
            'type' => 'submit',
            'class' => 'btn btn-default',
            'content' => 'Create Group'
        );

        echo form_button($data);
        ?>

        <?php echo form_close();?>
    </div>
</div>
