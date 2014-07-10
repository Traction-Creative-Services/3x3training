<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @author Martin Sheeks
	 * 
	 */
	public function index()
	{
		$data['title'] = 'Home';
		$data['activeTab'] = 'mat';
		$data['category'] = $this->getVideos('mat');
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
		$data['auth'] = $this->session->userdata('auth');
		$this->load->view('parts/header',$data);
		$this->load->view('page/'.$page,$data);
		$this->load->view('parts/footer',$data);
	}

	/**
	* Gets the videos for a given tab.
	* @author Martin Sheeks <martin.sheeks@gmail.com>
	* @param string $category the category to load
	* @return array $list the list of videos
	*/
	public function getVideos($cat) {	
		//video category lists
		$mat = array(
			'title'			=> 'Mat Exercises',
			'description'	=> 'lorem ipsum',
			'videos'		=> array(
					array(
						'title' => 'Segment One Exercises One to Four',
						'src'	=> 'seg1_exercise1to4.mp4'
						),
					array(
						'title' => 'Segment One Exercises Five to Seven',
						'src'	=> 'seg1_exercise5to7.mp4'
						),
					array(
						'title' => 'Segment One Pilates',
						'src'	=> 'seg1_pilates.mp4'
						),
					array(
						'title'	=> 'Segment One Bodyslide',
						'src'	=> 'seg1_bodyslide.mp4'
						),
					array(
						'title' => 'Segment One Tucks to Superman',
						'src'	=> 'seg1_tuckstosuperman.mp4'
						),
					array(
						'title' => 'Segment One Bun and Thighs',
						'src'	=> 'seg1_bunandthigh.mp4'
						)
					)
			);

		return $$cat;
	}
}