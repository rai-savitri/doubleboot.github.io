<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Contact_controller extends MY_controller
{
  
public function index ()
{
    $this->load->helper("url");
    $this->load->view('Contact_view');
 
}

 


}




?>