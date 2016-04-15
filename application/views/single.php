

<div class="row" style="margin-top: 7%">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><a href="<?php echo site_url('show/'.$post['id']) ?>"> <?php echo $post['title'] ?></a></h4>
                <?php echo date('F j, Y - g:i a', strtotime($post['created']) ) ?>
                <div class="btn-group pull-right">
                    <a href="<?php echo site_url('edit_post_form/'.$post['id']) ?>" class="btn btn-primary btn-xs">Edit</a>
                    <a href="<?php echo site_url('delete_post/'.$post['id']) ?>" class="btn btn-primary btn-xs">Delete</a>
                </div>
                <br>
            </div>
            <div class="panel-body">
                <?php echo $post['body'] ?>
            </div>
            <div class="panel-footer">
                By: <?php echo $post['user_id'] ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <a href="<?php echo site_url('') ?>" class="btn btn-primary">Back</a>
    </div>
</div>