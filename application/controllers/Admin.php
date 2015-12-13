<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','themes'));
    }

	public function index()
	{
	    $data['title']="Dashboard";

	    $this->themes->load_back_theme("default","home",$data);
	}
}