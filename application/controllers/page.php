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

    // show one post
    function show($id) {

        $data = array(
            'post' => $this->post_model->get($id)
        );

        $this->load->view('header');
        $this->load->view('single', $data);
        $this->load->view('footer');

    }

    // form for new post
    function new_post_form() {
        if ($this->ion_auth->logged_in()) {
            $data = array(
                'title' => 'New Post'
            );

            $this->load->view('header');
            $this->load->view('form', $data);
            $this->load->view('footer');
        }
        else {
            redirect('login');
        }
    }


    // insert new post
    function create_post() {
        $form_data = $this->input->post();
        $title = $form_data['title'];
        $body = $form_data['body'];
        $user_id = $form_data['user_id'];

        $this->post_model->insert(array(
            'title' => $title,
            'body' => $body,
            'user_id' => $user_id
        ));

        redirect('');
    }

    // delete post
    function delete_post($id) {
        if ($this->ion_auth->logged_in()) {
            $this->post_model->delete($id);
            redirect('');
        }
        else {
            redirect('login');
        }
    }

    //form for edit post
    function edit_post_form($id) {
        if ($this->ion_auth->logged_in()) {
            $post = $this->post_model->get_by('id', $id);
            $oldTitle = $post['title'];
            $oldBody = $post['body'];

            $data = array(
                'title' => 'Edit Post',
                'id' => $id,
                'oldTitle' => $oldTitle,
                'oldBody' => $oldBody
            );

            $this->load->view('header');
            $this->load->view('edit_form', $data);
            $this->load->view('footer');
        }
        else {
            redirect('login');
        }
    }

    // edit
    function edit_post() {

        $form_data = $this->input->post();
        $title = $form_data['title'];
        $body = $form_data['body'];
        $id = $form_data['id'];

        $this->post_model->update($id, array( 'title' => $title, 'body' => $body ));

        redirect('');

    }

    // show all post
    function error()
    {
        $data = array(
            'title' => 'You seem to have taken a wrong turn'
        );

        $this->load->view('header');
        $this->load->view('error', $data);
        $this->load->view('footer');
    }


}

?>