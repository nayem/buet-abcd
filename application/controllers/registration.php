<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Registration extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title'] = 'ABCD';
        $data['user'] = '';
        $data['navbar'] = 'includes/navbar';
        $data['main_content'] = 'registration_view/registration_v';
        $this->load->view('template', $data);
    }

    function login() {

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->load->model('home_model');
        $authenticate = $this->home_model->login($_POST['email'], $_POST['password']);

        if ($authenticate == 1) {
            $this->session->set_userdata('is_logged', 'TRUE');
            $this->session->set_userdata('email', $_POST['email']);
            $this->session->set_userdata('password', sha1($_POST['password']));
        }

        if ($authenticate == 0 || $this->form_validation->run() == FALSE) {
            $data['attempt'] = $_POST['attempt'] + 1;
            $data['title'] = 'Login';
            $data['user'] = '';
            $data['navbar'] = 'includes/navbar';
            $data['main_content'] = 'registration_view/login_v';
            $this->load->view('template', $data);
        } else {
            $data['title'] = 'ABCD';
            $data['user'] = $_POST['email'];
            $data['navbar'] = 'includes/navbar_login';
            $data['main_content'] = 'home_view/home_v';
            $this->load->view('template', $data);
        }
    }

    function register() {
        //echo 'Mail: '.$_POST['email'].'+Pass: '.$this->input->post('password').'<br/>';
        $this->load->model('home_model');
        $this->home_model->setUserInfo(strip_tags($this->input->post('email')), sha1($this->input->post('password')));

        $this->session->set_userdata('email', $_POST['email']);
        $this->session->set_userdata('password', sha1($_POST['password']));

        $data['title'] = 'Registration Successful';
        $data['user'] = $this->session->userdata('email');
        $data['navbar'] = 'includes/navbar_login';
        $data['main_content'] = 'registration_view/success';
        $this->load->view('template', $data);
    }

}

?>
