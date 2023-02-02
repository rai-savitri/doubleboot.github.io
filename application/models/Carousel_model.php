<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carousel_model extends CI_Model{
   public function all_carousel()
	{
	$this->db->select('*');	
    $this->db->from('home_banner');	
    $this->db->order_by('id','DESC');
    $query = $this->db->get();
    if($query->num_rows() > 0){
        return $query->result();
    }
    else{
        return false;
    }
}
}
