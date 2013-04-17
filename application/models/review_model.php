<?php

    class Review_model extends CI_Model {
    
        function __construct() {
            parent::__construct();
        }
        
        function review_post($email){
            $this->db->from('user')->where('email',$email);
            $query=$this->db->get();
             
            foreach ($query->result() as $row)
            {
                $this->u_id = $row->u_id;
                $prod->u_id=$row->u_id;
            }
            
            $this->p_id     = $_POST['type']; // please read the below note
            $this->title    = $_POST['reviewName'];
            $this->details  = $_POST['review'];
            $now   = new DateTime;
            $this->time= $now->format( 'd-m-Y' );
            $this->db->insert('review', $this);
            
            switch($_POST['type'])
                    {
                       case 1:
                            $prod->type= "ELECTRONICS";
                            break;
                        case 2:
                            $prod->type= "BANK";
                            break;
                        case 3:
                            $prod->type= "RESTAURANT";
                            break;
                        case 4:
                            $prod->type= "BUS SERVICE";
                            break;
                        case 5:
                            $prod->type= "HOTEL";
                            break;
                    }
                    $prod->time= $now->format( 'd-m-Y' );
                    $prod->name=$_POST['prodName'];
                    $this->db->insert('product', $prod);
        }
        
        function show_review_list($type){
            $this->db->select('*')->from('product')->where('type',$type);
            $this->db->join('review', 'product.p_id = review.p_id');
            $query = $this->db->get();

            foreach ($query->result() as $row) {
                print_r($row);
            }
        }
    }
?>