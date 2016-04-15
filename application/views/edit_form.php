
<div class="row" style="margin-top: 5%">
    <div class="col-md-12 text-center">
        <h2><?php echo $title?></h2>
    </div>
    <div class="col-md-10 col-md-offset-1">

        <?php
            $attributes = array('role' => 'form', 'id' => 'editForm');
            echo form_open('page/edit_post', $attributes);
        ?>

        <input type="hidden" name="id" value="<?php echo $id ?>" />
            <div class="form-group">
                <label for="text">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="<?php echo $oldTitle ?>" required>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" rows="5" id="body" name="body" required><?php echo $oldBody ?></textarea>
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