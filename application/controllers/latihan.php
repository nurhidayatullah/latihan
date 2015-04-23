<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Latihan extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('latihan');
	}
	public function menu_2(){
		$this->load->view('menu2');
	}
}