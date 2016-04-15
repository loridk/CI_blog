<?php


class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // show all post
    function index()
    {

        $data = array(
            'title' => 'Blog',
            'posts' => $this->post_model->get_all()
        );

        $this->load->view('header');
        $this->load->view('main', $data);
        $this->load->view('footer');
    }

    // form for new post
    function new_post_form() {

        $data = array(
            'title' => 'New Post'
        );

        $this->load->view('header');
        $this->load->view('form', $data);
        $this->load->view('footer');
    }

    // show one post
    public function show($id) {

        $data = array(
            'post' => $this->post_model->get($id)
        );

        $this->load->view('header');
        $this->load->view('single', $data);
        $this->load->view('footer');

    }




    // test
    public function test() {
        echo "hi";
        exit;
    }



}

?>