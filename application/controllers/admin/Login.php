<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function index()
  {
   $this->load->view('admin/layout/_default'); 
  }

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */