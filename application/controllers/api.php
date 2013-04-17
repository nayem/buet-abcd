<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Api extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {}
    
    function search_item($item){
        $this->load->model('api_model');
        $re = $this->api_model->search_review($item);

        //print_r($re);
        echo json_encode($re);
    }

}

?>
