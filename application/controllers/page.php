<?php


class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index()
    {
        // Query DB
        $posts = $this->post_model->as_array()->get_all();

       var_dump($posts);
        exit();

        /*$data = array(
            'title' => 'Blog'
        );*/

        $this->load->view('header');
        $this->load->view('content', $posts);
        $this->load->view('footer');
    }



}

?>