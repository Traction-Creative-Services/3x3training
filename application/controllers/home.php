<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @author Martin Sheeks
	 * 
	 */
	public function index($section = 'mat_exercises')
	{
		$data['title'] = 'Home';
		$data['activeTab'] = $section;
		$data['section'] = $this->getSection($section);
		$this->loadViews('lists',$data);
	}

	/**
	* Loads the view framework for Bootstrap
	* @author Martin Sheeks <martin.sheeks@gmail.com>
	* @param string $page the page to load
	* @param array $data the data to pass to the pages
	*/
	public function loadViews($page,$data) 
	{
		$data['menuitems'] = $this->getMenu();
		$data['auth'] = $this->session->userdata('auth');
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

	/**
	* Gets the requested section
	* @author Martin Sheeks <martin.sheeks@gmail.com>
	* @param string $slug the category to load
	* @return array $list the list of videos
	*/
	public function getSection($slug) {	
		
		$results = array();	

		$query = $this->db->query('SELECT s.title as sectionTitle, s.description sectionDesc, v.title as vidTitle, v.description as vidDesc, v.source as src FROM sections s INNER JOIN videos v ON s.section_id = v.section_id WHERE s.slug ="'.$slug.'"');

		foreach($query->result() as $row) {
			$results[] = $row;
		}
		return $results;
	}
}