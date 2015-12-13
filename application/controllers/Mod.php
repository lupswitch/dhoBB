<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('themes');
    }

	public function index()
	{
	    $data['title']="dhoBB";

	    $theme=$this->themes->theme_data("default","home");
            foreach($theme as $dt){
                $this->load->view ('default/'.$dt,$data);
        }
	}
}