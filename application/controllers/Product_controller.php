<?php
	

class Product_controller extends MY_controller
{
	function __construct() 
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

	
	{
		 parent::__construct();
		
		 $this->load->helper('url');
		$this->load->model('Product_model','Product_controller');
		$this->load->model('Carousel_model','Carousel_controller');
	}

	public function index(){
		//echo 111; exit;
		$product = $this-> Product_controller->latest_product();
		// print_r($carousel);
		$carousel = $this->Carousel_controller->all_carousel();
		$bannerList = $this->Product_controller->bannerList();
		$youTube=  $this->Product_controller->youtubeList();
		//print_r($youTube);die;
		$data['carousel']= $carousel;
		$data['bannerList']= $bannerList;
		$data['youTube']= $youTube;
		//print_r($bannerList);die;
		//$data['crousel'] = $this->load->view('carousel_view',$data);
		$data['post']= $product;
		$this->load->view('product_view',$data);
	}
	// ---------------------------**************************product page***************************----------------------------
	public function shop($category_id=''){
		//print_r($category_id);
		$product = $this->Product_controller->all_product($category_id);
	//  print_r($post);die ;
		$data['post']= $product;
		$this->load->view('shop_view',$data);
	}
// -------------------------------********************all category page*****************-----------------------
  public function all_category(){
	
    $this->load->view('categories_view');

 }
	}




?>