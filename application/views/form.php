
<div class="row" style="margin-top: 5%">
    <div class="col-md-12 text-center">
        <h2><?php echo $title?></h2>
    </div>
    <div class="col-md-10 col-md-offset-1">

        <?php
            $attributes = array('role' => 'form', 'id' => 'postForm');
            echo form_open('page/create_post', $attributes);
            $user = $this->ion_auth->user()->row_array();
            $username = $user['first_name'] . ' ' . $user['last_name'];
        ?>

            <input type="hidden" name="user_id" value="<?php echo $username ?>" />

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" rows="5" id="body" name="body" required></textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        <?php echo form_close();?>
    </div>
</div>

<div class="row" style="margin-top: 1%">
    <div class="col-md-10 col-md-offset-1">
        <a href="<?php echo site_url('') ?>" class="btn btn-primary">Back</a>
    </div>
</div>