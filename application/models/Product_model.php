<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

public function all_product($category_id='')

{
   
$this->db->select('*');	
$this->db->from('product');
if($category_id!=""){
    // print_r($category_id);die;
    $this->db->where('category_id',$category_id); 
}	
$this->db->order_by('product_id','DESC');
//$this->db->limit('4');


$query = $this->db->get();

//echo $this->db->last_query();die;
if($query->num_rows() > 0){
    return $query->result();
}
else{
    return false;
}
}
 
// -----------------------------*****************discount-banner**************************--------------------------

public function bannerList(){

    $query = $this->db->select("*")
                    ->from("home_banner")
                    ->order_by('id','DESC')
                    ->limit(1)
                    ->get();
                    return $query->row();
}
// ---------------------------------*****************category page *********************-----------------------
public function categoryList(){
    $query = $this->db->select("*")
                     ->from("category")
                     ->get();
                     return $query->result();
}

// ---------------------**********************home page product*********************---------------------
public function latest_product($category_id='')

{
   
$this->db->select('*');	
$this->db->from('product');
	
$this->db->order_by('product_id','DESC');
$this->db->limit('4');


$query = $this->db->get();

//echo $this->db->last_query();die;
if($query->num_rows() > 0){
    return $query->result();
}
else{
    return false;
}
}
// ----------------------------------************************home page youtub**********************-----------------------
public function youtubeList(){

    $query = $this->db->select("*")
                    ->from("youtube_video")
                    ->order_by("id","DESC")
                    ->limit(1)
                    ->get();
                    
               return $query->result();
}
// --------------------------------**********************all category***********************--------------------------------
// public function all_category(){
//     $query = $this->db->select("*")
//                      ->from("category")
//                      ->get();
//                      return $query->result();
// }

}

?>