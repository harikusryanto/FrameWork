<?php
/**
 * 
 */
class Komen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$data_komen = $this->User_model->selectkomentar();
		$data['komentar']=$data_komen;
		$this->load->view('komen/list',$data);
	}
	public function deletekomentar($id)
	{
		$this->User_model->deletekomentar($id);
		redirect(site_url('komen'));

	}
}	
	?>