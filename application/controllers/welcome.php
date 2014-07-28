<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @author Martin Sheeks
	 * 
	 */
	public function index()
	{
		$data['title'] = 'Home';
		$data['activeTab'] = 'Home';
		$this->loadViews('home',$data);
	}

	/**
	* Loads the view framework for Bootstrap
	* @author Martin Sheeks <martin.sheeks@gmail.com>
	* @param string $page the page to load
	* @param array $data the data to pass to the pages
	*/
	public function loadViews($page,$data) 
	{
		$data['auth'] = $this->session->userdata('auth');
		$data['menuitems'] = $this->getMenu();
		$this->load->view('parts/header',$data);
		$this->load->view('page/'.$page,$data);
		$this->load->view('parts/footer',$data);
	}
	
	public function getMenu() {
		$menu = array();
		$query = $this->db->query('SELECT * FROM sections');
		foreach($query->result() as $row) {
			$item['title'] = $row->title;
			$item['slug'] = $row->slug;
			$menu[] = $item;
		}
		return $menu;
	}
}