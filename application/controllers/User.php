<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(array('themes','session'));
        $this->load->model('user_model');
    }

	public function index(){
	    $data['title']="dhoBB";

        $this->themes->load_front_theme("default","home",$data);
	}
    public function register(){
	    $data['title']="Register";

		$this->load->library('form_validation');
        $validation_rules=array(
            array(
                'field' => 'user_name',
                'label' => 'Username',
                'rules' => 'trim|required|alpha_numeric|min_length[5]|max_length[20]|is_unique[users.user_name]',
                'errors' => array(
                        'is_unique' => 'This username is registered. Please choose another one.'
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[users.email]',
                'errors' => array(
                        'is_unique' => 'This email is registered. Please choose another one.'
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[5]',
                'errors' => array(
                        'required' => 'You must provide a password.'
                ),
            ),
            array(
                'field' => 'confirm_password',
                'label' => 'Confirm Password',
                'rules' => 'trim|required|min_length[5]|matches[password]',
                'errors' => array(
                        'required' => 'You must provide a confirm password.',
                        'matches' => 'Confirm Password not match.'
                ),
            )
        );
		$this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === false) {
            $this->themes->load_front_theme("default","register",$data);
		} else {
			if ($this->user_model->user_register()) {
                $this->themes->load_front_theme("default","register_success",$data);
			} else {
			    $data['error'] = 'There was a problem creating your new account. Please try again.';
                $this->themes->load_front_theme("default","register",$data);
			}
		}
	}
    public function login(){
	    $data['title']="Login";

		$this->load->library('form_validation');
        $validation_rules=array(
            array(
                'field' => 'user_name',
                'label' => 'Username',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required',
            )
        );
		$this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === false) {
            $this->themes->load_front_theme("default","login",$data);
		} else {
			if ($this->user_model->user_login()) {
                $this->themes->load_front_theme("default","login_success",$data);
			} else {
			    $data['error'] = 'Wrong username or password. Please try again.';
                $this->themes->load_front_theme("default","login",$data);
			}
		}
	}
    public function logout(){
	    $data['title']="Logout";
        $data['user_name']=$this->session->userdata('user_name');

		$this->session->sess_destroy();
		$this->themes->load_front_theme("default","logout_success",$data);
	}
    public function forgotpassword(){
	    $data['title']="Forgot Password";

		$this->load->library('form_validation');
        $validation_rules=array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            )
        );
		$this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === false) {
            $this->themes->load_front_theme("default","forgot_password",$data);
		} else {
			if ($this->user_model->user_login()) {
                $this->themes->load_front_theme("default","forgot_password_success",$data);
			} else {
			    $data['error'] = 'Wrong username or password. Please try again.';
                $this->themes->load_front_theme("default","forgot_password",$data);
			}
		}
	}
}