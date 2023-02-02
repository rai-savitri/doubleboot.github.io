<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Video_controller extends CI_Controller{
   function __construct() 
	{
		 parent::__construct();
		 $this->load->helper('url');
		$this->load->model('Video_model','Video_controller');

	}
	public function index(){
		$video = $this->Video_controller->all_video();
		$data['post']= $video;
		$this->load->view('product-video_view',$data);
	}
}