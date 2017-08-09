<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_controller extends CI_Controller {

	// public function __construct() {
	// 	$this->adminModel=$this->load->model('admin_model','admin');
	// }
	public function index() {

		//var_export($this->admin_model->getList('*','admin'));exit;
		if(IS_POST) {
			$data=$this->input->post();
			$user_data=$this->admin_model->getRow('*','admin',array('username'=>$data['username'],'password'=>md5($data['password']),'is_disabled'=>1,'status'=>1));
			if(!$user_data) {
				$this->message('用户名或密码错误',site_url('login_controller/index'));
			} else {
				$this->input->set_cookie('admin_id',$user_data['admin_id'],14400);
				$this->input->set_cookie('username',$user_data['username'],14400);
				$this->admin_model->update('admin',array('last_login_ip'=>$_SERVER['REMOTE_ADDR'],'last_login_at'=>time()),$user_data['admin_id']);
				$this->message('登录成功',site_url('default_controller/index'));
			}
		} else {
			if($this->input->cookie('admin_id')) {
				$this->message('您已登录，自动跳转到首页',site_url('default_controller/index'));
			}
			$this->load->view('home/login');
		}
	}
}
?>