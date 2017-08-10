<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct() {
		parent::__construct();
		$data=$this->Home_model->getRow('*','setting');
		$this->config->set_item('home',$data);
		
	}
	public function index()
	{
		$this->load->view('home/index');
	}
	/**
	**企业概况
	*/
	public function groupOverview() {

		$this->load->view('home/overview');
	}
	/**
	**核心业务
	**/
	public function business() {
		$this->load->view('home/business');
	}
	/**
	**全球布局
	**/
	public function globalLayout() {
		$this->load->view('home/globalLayout');
	}
	/**
	**联系我们
	**/
	public function contactUs() {
		$this->load->view('home/contactUs');
	}
	/**
	**新闻中心
	**/
	public function news() {
		$this->load->view('home/news');
	}
}
