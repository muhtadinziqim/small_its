<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user', "user");
    }

    public function index()
    {
        if ($this->session->userdata('aktor') == "Biro Keamanan") {
            redirect('keamanan/laporan');
        } else if ($this->session->userdata('aktor') == "User") {
            redirect('user/laporan');
        } else {
            $this->load->view('login_view');
        }
    }

    public function login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$w_user = array(
			'USERNAME' => $username,
			'PASSWORD' => md5($password)
		);
		$user = $this->user->detail($w_user, 'user');
        if ($user) {
            if($user[0]->aktor == "Biro Keamanan"){
                $data_session = array(
                    'aktor' => $user[0]->aktor
                );
                $this->session->set_userdata($data_session);
                redirect('keamanan/laporan');
            }else if($user[0]->aktor == "User"){
                $data_session = array(
                    'aktor' => $user[0]->aktor
                );
                $this->session->set_userdata($data_session);
                redirect('user/laporan');
            }
        }
		else{
			redirect('Auth');
		}
    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
