<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Header_controller extends MY_controller
{

   function __construct() 
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

	
	{
		 parent::__construct();
		
		 $this->load->helper('url');
		$this->load->model('Product_model','Product_controller');
      $this->load->database();
		
	}
  
public function index ()
{
 
   $category = $this->Product_controller->categoryList();
   //print_r($category);die;

                     $data['category']=$category;
                     
$this->load->view('header_view', $data);
}


 


}




?>