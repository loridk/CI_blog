

<div class="row" style="margin-top: 5%">
    <div class="col-md-12 text-center">
        <h2><?php echo $title?></h2>
    </div>


    <?php foreach (array_reverse($posts) as $post): ?>
        <div class="row" style="margin-top: 5%">
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

    <?php endforeach; ?>


    <div class="clearfix"></div>
    <hr>
</div>


