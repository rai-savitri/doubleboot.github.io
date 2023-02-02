<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model{
public function all_video()
{
$this->db->select('*');	
$this->db->from('youtub_video');	
$this->db->order_by('id','DESC');
$this->db->limit('1');


$query = $this->db->get();
if($query->num_rows() > 0){
    return $query->result();
}
else{
    return false;
}
}
}
?>