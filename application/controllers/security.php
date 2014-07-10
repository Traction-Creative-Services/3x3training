<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Security extends CI_Controller {


	public function index() {
		$pin = $this->input->post('pin');
		if($pin) {
			$this->logIn($pin);
		}
		else {
			$this->logOut();
		}
	}

	public function admin() {
		$pin = $this->input->post('pin');
		if($pin) {
			$this->logIn($pin,true);
		}
		else {
			$this->logOut();
		}
	}
	
	public function logIn($pin,$admin = false)
	{

		if($pin != false && !$admin) {
			if($pin == 'threetimesthree') {
				$this->session->set_userdata('auth',true);
				redirect('/home','refresh');
			} else {
				$this->session->set_userdata('auth',false);
				redirect('/welcome','refresh');
			}
		}
		if($pin != false && $admin) {
			if($pin == 'Novabuild1@') {
				$this->session->set_userdata('admin_auth',true);
				redirect('/admin/dashboard', 'refresh');
			} else {
				$this->session->set_userdata('admin_auth',false);
				redirect('/admin', 'refresh');
			}
		}
	}

	public function logOut()
	{
		if($this->session->userdata('auth')) {
			$this->session->set_userdata('auth',false);
		}
		if($this->session->userdata('admin_auth')) {
			$this->session->set_userdata('admin_auth',false);
		}
		redirect('/welcome','refresh');
	}
}