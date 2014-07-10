<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @author Martin Sheeks <martin.sheeks@gmail.com>
	 * 
	 */
	public function index()
	{
		$data['title'] = 'Admin';
		$this->loadViews('admin_home',$data);
	}

	/**
	* Admin dashboard (displays once logged in)
	* @author Martin Sheeks <martin.sheeks@gmail.com>
	* 
	*/
	public function dashboard() {
		$this->load->database();
		$this->load->library('grocery_CRUD');

		$crud = new grocery_CRUD();

		$crud->set_theme('twitter-bootstrap');
		$crud->set_table('videos');
		

		$output = $crud->render();

		$this->load->view('admin',$output);
	}

	public function videos() {
		$this->load->database();
		$this->load->library('grocery_CRUD');

		$crud = new grocery_CRUD();

		$crud->set_theme('twitter-bootstrap');
		$crud->set_table('videos');
		

		$output = $crud->render();

		$this->load->view('admin',$output);
	}

	public function sections() {
		$this->load->database();
		$this->load->library('grocery_CRUD');

		$crud = new grocery_CRUD();

		$crud->set_theme('twitter-bootstrap');
		$crud->set_table('sections');
		

		$output = $crud->render();

		$this->load->view('admin',$output);
	}

	/**
	* Loads the view framework for Bootstrap
	* @author Martin Sheeks <martin.sheeks@gmail.com>
	* @param string $page the page to load
	* @param array $data the data to pass to the pages
	*/
	public function loadViews($page,$data) 
	{
		$data['auth'] = $this->session->userdata('admin_auth');

		$this->load->view('parts/header',$data);
		$this->load->view('page/'.$page,$data);
		$this->load->view('parts/footer',$data);
	}
}