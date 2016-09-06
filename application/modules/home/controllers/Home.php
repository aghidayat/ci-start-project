<?php

class Home extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->theme();		
	}

	public function index(){
		$data = array();

		web_title('Home');
		web_build('home', $data);
	}

	public function profile(){
		$data = array();

		web_title('Profile');
		web_build('profile', $data);
	}

	public function about(){
		$data = array();

		web_title('Aboout');
		web_build('about', $data);
	}

}