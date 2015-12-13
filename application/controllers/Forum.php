<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','themes'));
    }

	public function index()
	{
	    $data['title']="dhoBB";

	    $this->themes->load_front_theme("default","home",$data);
	}
    public function viewforum($id=NULL,$slug=NULL)
	{
	    $data['title']="View Forum";

        $this->themes->load_front_theme("default","viewforum",$data);
	}
    public function viewthread($id=NULL,$slug=NULL)
	{
	    $data['title']="View Thread";

        $this->themes->load_front_theme("default","viewthread",$data);
	}
}
