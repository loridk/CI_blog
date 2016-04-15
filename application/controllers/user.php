<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function login_form() {
        $data = array(
            'title' => 'Login'
        );

        $this->load->view('header');
        $this->load->view('login', $data);
        $this->load->view('footer');
    }

    function test2() {
        echo 'logout';
    }

    function register_form() {
        $data = array(
            'title' => 'New User'
        );

        $this->load->view('header');
        $this->load->view('register', $data);
        $this->load->view('footer');
    }


}