<?php
    class Review extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
        }
        
        function index()
        {
            $data['title'] = 'ABCD';
            $data['user'] = $this->session->userdata('email');
            $data['navbar'] = 'includes/navbar_login';
            $data['main_content'] = 'review_view/review_page';
            $this->load->view('template', $data);
        }
        
        function review_submit()
        {
            $this->load->model("review_model");
            
            $this->review_model->review_post($this->session->userdata('email'));
            
            $data['title'] = 'ABCD';
            $data['user'] = $this->session->userdata('email');
            $data['navbar'] = 'includes/navbar_login';
            $data['main_content'] = 'review_view/review_submit';
            
            $data['prodType']= $_POST['type'];
            $data['reviewName']=$_POST['reviewName'];
            $data['review']=$_POST['review'];
            $data['prodName']=$_POST['prodName'];
            $now   = new DateTime;
            $data['date']=  $now->format( 'd-m-Y' );
            
            $this->load->view('template', $data);
        }
        
    }

?>