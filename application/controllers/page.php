<?php


class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index()
    {

        $data = array(
            'title' => 'Blog'
        );

        $this->load->view('header');
        $this->load->view('content', $data);
        $this->load->view('footer');
    }



}

?>