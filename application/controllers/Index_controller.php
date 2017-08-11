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
		//获取新闻
		$news_data=$this->Home_model->getList('*','news');
		if($news_data) {
			foreach ($news_data as $key => &$value) {
				$value['content']=mb_substr($value['content'],0,58,'utf-8').'...';
			}
		}
		$this->load->view('home/index',array('news_data'=>$news_data));
	}
	/**
	**企业概况
	*/
	public function groupOverview() {

		$this->load->view('home/overview');
	}
	/**
	**核心战略
	*/
	public function coreStrategy() {
		$this->load->view('home/corestrategy');
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
		$data['news_data']=$this->Home_model->getList('*','news',array(),0,-1,'create_time DESC');
		$this->load->view('home/news',$data);
	}
	/**
	***新闻详情
	**/
	public function article() {
		$news_id=$this->uri->segment(3);
		$data['data']=$this->Home_model->getRow('*','news',array('news_id'=>$news_id));
		//获取全部新闻
		$news_data=$this->Home_model->getList('news_id,title,content','news',array(),0,-1,'create_time DESC');
		if($news_data) {
			foreach ($news_data as $key => &$value) {
				$value['content']=mb_substr($value['content'],0,50,'utf-8').'...';
			}

		   $data['news_data']=$news_data;
		}
		$this->load->view('home/article',$data);
	}
}
