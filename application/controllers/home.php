<?php

/**
 * Created by JetBrains PhpStorm.
 * User: Nayem
 * Date: 1/20/13
 * Time: 12:32 PM
 * To change this template use File | Settings | File Templates.
 */
class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if($this->session->userdata('email') && $this->session->userdata('password')){  
            //a session has found, but does it tempered or good?
            $this->logined();
        }
        else{
            $data['title'] = 'Reviews Application';
            $data['user'] = '';
            $data['navbar'] = 'includes/navbar';
            $data['main_content'] = 'home_view/home_v';
            $this->load->view('template', $data);
        }
    }
    
//Log for the fist time, as no session found before.
    function login() {
        if( isset($_POST['email'],$_POST['password']) ){
            $this->load->model('home_model');
            $authenticate = $this->home_model->login($_POST['email'], $_POST['password']);

            if ($authenticate == 1) {
                $this->session->set_userdata('email', $_POST['email']);
                $this->session->set_userdata('password', sha1($_POST['password']));

                $data['title'] = 'Reviews Application';
                $data['user'] = $_POST['email'];
                $data['navbar'] = 'includes/navbar_login';
                $data['main_content'] = 'home_view/home_v';
                $this->load->view('template', $data);
            }
            else{
                $data['attempt']='1';
                $data['title'] = 'Login';
                $data['user'] = '';
                $data['navbar'] = 'includes/navbar';
                $data['main_content'] = 'registration_view/login_v';
                $this->load->view('template', $data);
            }
        }
        elseif ($this->session->userdata('email') && $this->session->userdata('password')) {
        $this->logined();
        }
    
        else {
            $this->session->sess_destroy();
            $data['attempt']='1';
            $data['title'] = 'Login';
            $data['user'] = '';
            $data['navbar'] = 'includes/navbar';
            $data['main_content'] = 'registration_view/login_v';
            $this->load->view('template', $data);
        }        
        
    }
    
//May have previously logged, as a session found before.
    function logined() {
        if($this->session->userdata('email')!='' && $this->session->userdata('password')!=''){
            $this->load->model('home_model');
            $authenticate = $this->home_model->logined($this->session->userdata('email'), $this->session->userdata('password'));

            if ($authenticate == 1) {
                //good session
                $data['title'] = 'Reviews Application';
                $data['user'] = $this->session->userdata('email');
                $data['navbar'] = 'includes/navbar_login';
                $data['main_content'] = 'home_view/home_v';
                $this->load->view('template', $data);
            }
        }
        else{
            //tempered session
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('password');
            $this->session->sess_destroy();
            $this->index();
        }
    }
    
    function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
        $this->index();
    }
    
    function about() {
        $data['title'] = 'About';
        if($this->session->userdata('email')){
            $data['user'] = $this->session->userdata('email');
            $data['navbar'] = 'includes/navbar_login';
        }
        else {
            $data['user'] = '';
            $data['navbar'] = 'includes/navbar';
        }
        
        $data['main_content'] = 'about';
        $this->load->view('template', $data);
    }
    
    function electronics()
    {
        /*$data['title'] = 'ABCD';
        $data['user'] = '';
        $data['navbar'] = 'includes/navbar';
        $data['main_content'] = 'home_view/home_v';
        $this->load->view('template', $data);*/
        $this->load->model('review_model');
        $data['electronic']=$this->review_model->show_review_list('electronic');
        //$this->load->view('review_view/electronics');
        //echo $this->input->post('electronic');
        //print_r($data);

    }

}

?>