
<div class="row" style="margin-top: 5%">
    <div class="col-md-12 text-center">
        <h2><?php echo $title?></h2>
    </div>
    <div class="col-md-6 col-md-offset-3">

        <?php
            $attributes = array('role' => 'form', 'id' => 'loginForm');
            echo form_open('user/login', $attributes);
        ?>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" required>
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