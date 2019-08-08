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
	public function insert_aksi()
	{
	$id_komentar=$this->input->post('id_komentar');	
	$nama=$this->input->post('nama');
	$email=$this->input->post('email');
	$pesan=$this->input->post('pesan');
	$data_user = array('nama' =>$nama ,
						'email'=>$email,
						'pesan'=>$pesan);

	if ($id_komentar == "") {
		$this->User_model->insertkomentar($data_komen);
		redirect(site_url('komen'));
	}else{		
		$this->User_model->updatekomentar($data_komen,$id_komentar);
		redirect(site_url('komen'));
	}

	}
}

?>