<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes {

    public function load_front_theme($theme,$part,$data){
        $CI=& get_instance();
        require_once("views/frontend/".$theme."/functions.php");
        $function="theme_".$part;
        foreach($function() as $func){
                $CI->load->view ('frontend/default/'.$func,$data);
        }
    }
	public function load_back_theme($theme,$part,$data){
	    $CI=& get_instance();
        require_once("views/backend/".$theme."/functions.php");
        $function="theme_".$part;
        foreach($function() as $func){
                $CI->load->view ('backend/default/'.$func,$data);
        }
    }
}