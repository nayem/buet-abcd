<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Api_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function search_review($item) {
        $this->db->from('product')->where('name', $item);
        $pquery = $this->db->get();
        foreach ($pquery->result() as $row)
           $product_id=$row->p_id;
        
        
        $this->db->from('review')->where('p_id', $product_id);
        $query = $this->db->get();
        $counter=0;
        
        foreach ($query->result() as $row){
           $review_array['id']=$row->r_id;

           $this->db->from('user')->where('u_id', $row->u_id);
           $uquery = $this->db->get();
           foreach ($uquery->result() as $urow)
           $review_array['review_by']=$urow->email;
           
           $review_array['title']=$row->title;
           $review_array['body']=$row->details;
           $review_array['date']= $row->time;
           $review_array['num_likes']=$row->like;
           $review_array['num_dislikes']=$row->dislike;
          
           $this->db->from('comment')->where('r_id', $row->r_id);
           $cquery = $this->db->get();
            $num_comment=$cquery->num_rows();
           
           $review_array['num_comments']=$num_comment;
           $c[$counter]=$review_array;
           $counter++;
           //print_r($review_array);
        }
        //print_r($c);
        return $c;
    }
    

}

?>
