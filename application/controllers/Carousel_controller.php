<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carousel_controller extends CI_Controller{
   function __construct() 
	{
		 parent::__construct();
		 $this->load->helper('url');
		$this->load->model('Carousel_model','Carousel_controller');

	}
	public function index(){
		$carousel = $this->Carousel_controller->all_carousel();
		$data['post']= $carousel;
		$this->load->view('carousel_view',$data);
	}
}