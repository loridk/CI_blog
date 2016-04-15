
<div class="row" style="margin-top: 5%">
    <div class="col-md-12 text-center">
        <h2><?php echo $title?></h2>
    </div>
    <div class="col-md-6 col-md-offset-3">

        <?php
            $attributes = array('role' => 'form', 'id' => 'registerForm');
            echo form_open('page/create_post', $attributes);
        ?>

            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>



            <button type="submit" class="btn btn-default">Submit</button>
        <?php echo form_close();?>
    </div>
</div>

<div class="row" style="margin-top: 1%">
    <div class="col-md-6 col-md-offset-3">
        <a href="<?php echo site_url('') ?>" class="btn btn-primary">Back</a>
    </div>
</div>