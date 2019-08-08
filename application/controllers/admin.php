<?php
class admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$data_admin = $this->User_model->selectadmin();
		$data['admin']=$data_admin;
		$this->load->view('admin/list',$data);
	}
}
?>