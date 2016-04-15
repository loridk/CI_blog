<?php


class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

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

    function new_post() {

        $data = array(
            'title' => 'New Post'
        );

        $this->load->view('header');
        $this->load->view('form', $data);
        $this->load->view('footer');
    }

    function show($id) {

        $query = $this->post_model->get($id);
        if($query->num_rows()!==0)
        {
            var_dump($query);
        }
        else
            echo 'Error';
    }



}

?>