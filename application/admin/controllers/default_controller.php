<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default_controller extends CI_Controller {

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


	
	public function __construct()
	{


		parent::__construct();
		if(!$this->input->cookie('admin_id'))
		{

			echo '<script>window.top.location.href="'.site_url('login_controller/index').'"</script>';
        	
        	exit();
		}
	}
	public function index()
	{
		

		
		$this->load->view('home/index');
	}
	/**
	**配置信息
	**/
	public function setting() {

		if(IS_POST) {
			$data=$this->input->post();
			if(isset($data['core_business_key']) && isset($data['core_business_val']))
			{
				foreach ($data['core_business_key'] as $key => $value) {
					foreach ($data['core_business_val'] as $k => $v) {
						if($key==$k)
						{
							$core_business[]=array(
								$value=>$v,
								);
						}
					}
				}
				$data['core_business']=serialize($core_business);
				unset($data['core_business_key'],$data['core_business_val']);
			}
			if(isset($data['contactus_key']) && isset($data['contactus_val']))
			{
				foreach ($data['contactus_key'] as $key => $value) {
					foreach ($data['contactus_val'] as $k => $v) {
						if($key==$k)
						{
							$contactus[]=array(
								$value=>$v,
								);
						}
					}
				}
				$data['contactus']=serialize($contactus);
				unset($data['contactus_key'],$data['contactus_val']);
			}

			if(isset($data['thumb']) && $data['thumb']){
				$data['thumb']=implode(',',$data['thumb']);
			}
			if(isset($data['core_businessImg']) && $data['core_businessImg']){
				$data['core_businessImg']= implode(',',$data['core_businessImg']);
			}
			
			$data['create_time']=time();
			if($data['setting_id']!='' && isset($data['setting_id']))
			{
				$setting_id=$data['setting_id'];
				unset($data['setting_id']);
				$flag=$this->admin_model->update('setting',$data,array('setting_id'=>$setting_id));
			}else {
				$flag=$this->admin_model->insert('setting',$data);
			}
			
			if($flag) {
				$this->message('保存成功',site_url('default_controller/setting'));
			}else {
				$this->message('保存失败',site_url('default_controller/setting'));
			}
		}else {
			$rRow=$this->admin_model->getRow('*','setting');
			$rRow['core_business']=$rRow['core_business'] ? unserialize($rRow['core_business']) :array();//序列化核心业务
			$rRow['contactus']=$rRow['contactus'] ? unserialize($rRow['contactus']) :array();//序列化联系我们
			$rRow['thumb']=$rRow['thumb']  ? explode(',',$rRow['thumb']) :array();
			$rRow['core_businessImg']=$rRow['core_businessImg'] ? explode(',',$rRow['core_businessImg']) :array();
			$data['data']=$rRow;
			$this->load->view('home/setting',$data);
		}
		
	}
	public function welcome() {

		$this->load->view('home/welcome');
	}
}
