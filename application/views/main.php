

<div class="row" style="margin-top: 5%">
    <div class="col-md-12 text-center">
        <h2><?php echo $title?></h2>

        <p>// Test area </p>

    </div>


    <?php

    // Query DB
    $posts = $this->post_model->get_all();

    foreach (array_reverse($posts) as $post) {

        echo
            '<div class="row" style="margin-top: 5%">
                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>'. $post['title'] .'</h4>'
                            . date('F j, Y - g:i a', strtotime($post['created']) ) .

                            '<div class="btn-group pull-right">
                                <a href="#"><button class="btn btn-primary btn-xs">Delete</button></a>
                            </div>
                            <br />
                        </div>
                        <div class="panel-body">'
                            . $post['body'] .
                        '</div>
                        <div class="panel-footer">
                            By: ' . $post['user_id'] .
                        '</div>
                    </div>

                </div>
            </div>';
    }
    ?>
    <div class="clearfix"></div>
    <hr>
</div>


