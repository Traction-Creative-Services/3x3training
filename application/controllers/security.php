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
	
	public function logIn($pin)
	{

		if($pin != false) {
			if($pin == 'threetimesthree') {
				$this->session->set_userdata('auth',true);
				redirect('/home','refresh');
			} else {
				$this->session->set_userData('auth',false);
				redirect('/welcome','refresh');
			}
		}
	}

	public function logOut()
	{
		$this->session->set_userData('auth',false);
		redirect('/welcome','refresh');
	}
}