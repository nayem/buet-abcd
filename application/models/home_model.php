<?php

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function login($email, $password) {
        $this->db->from('user')->where('email', $email)->where('password', sha1($password));
        $query = $this->db->get();

        if ($query->num_rows() >0)
            return 1;
        else
            return 0;
    }
    
    function logined($email, $password) {
        $this->db->from('user')->where('email', $email)->where('password', $password);
        $query = $this->db->get();

        if ($query->num_rows() >0)
            return 1;
        else
            return 0;
    }
    
    function setUserInfo($mail,$pass)
    {
        $query="INSERT INTO user (`u_id`,`email`,`password`) VALUES (NULL, '$mail', '$pass')";

        $this->db->query($query);
    }

}

?>