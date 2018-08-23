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
    $data['content'] = 'admin/login/sign-in';
    $this->load->view('admin/layout/_login', $data); 
  }

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */