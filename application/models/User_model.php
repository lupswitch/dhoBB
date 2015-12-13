<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('passwords');
        $this->load->database();
    }
    public function user_group($uid,$gid)
    {
        $usergroup = $this->db->get_where('usergroups', array('gid' => $gid))->row_array();
        foreach ($usergroup as $key => $value) {
            $this->session->set_userdata($key, $value);
        }
    }
    public function user_login() {
		$user_name = $this->input->post('user_name');
        $query = $this->db->get_where('users', array('user_name' => $user_name));

        if ($query->num_rows() == 1) {
            $user= $query->row();
            $uid = $user->uid;
            $gid = $user->gid;
            $hash= $user->password;
            $pass= $this->input->post('password');
            if($this->passwords->verify_password($pass,$hash)){
                $this->session->set_userdata('logged_in', 1);
                $this->session->set_userdata('uid', $user->uid);
                $this->session->set_userdata('user_name', $user->user_name);
                $this->user_group($uid,$gid);
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
	}
    public function user_register()
    {
        $data = array(
			'user_name' => $this->input->post('user_name'),
			'email'     => $this->input->post('email'),
			'password'  => $this->passwords->hash_password($this->input->post('password')),
			'reg_date'  => time(),
		);
		return $this->db->insert('users', $data);
    }

}