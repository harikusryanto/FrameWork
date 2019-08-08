<?php
/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$data_user = $this->User_model->select();
		$data['user']=$data_user;
		$this->load->view('user/list',$data);
	}
	public function indexkomentar()
	{
		$data_komentar = $this->User_model->selectkomentar();
		$data['komentar']=$data_komentar;
		$this->load->view('komen/list',$data);
	}
	public function delete($id)
	{
		$this->User_model->delete($id);
		redirect(site_url('user'));

	}
	public function update($id)
	{
		$user=$this->db->where('id_user',$id)->get('user')->row();
		$data['user']=$user;
		$this->load->view('user/form',$data);	
	}
	public function insert()
	{
		$this->load->view('user/form');		
	}
	public function insert_aksi()
	{
	$id_user=$this->input->post('id_user');	
	$nama_user=$this->input->post('nama_user');
	$email_user=$this->input->post('email_user');
	$password_user=$this->input->post('password_user');
	$nama_anak=$this->input->post('nama_anak');
	$tgl=$this->input->post('tgl');
	$berat=$this->input->post('berat');
	$tinggi=$this->input->post('tinggi');
	$jk=$this->input->post('jk');
	$data_user = array('nama_user' =>$nama_user ,
						'email'=>$email_user,
						'password'=>md5($password_user),
						'nama_anak'=>$nama_anak,
						'tgl'=>$tgl,
						'berat'=>$berat,
						'tinggi'=>$tinggi,
						'jk'=>$jk);

	if ($id_user == "") {
		$this->User_model->insert($data_user);
		redirect(site_url('user'));
	}else{		
		$this->User_model->update($data_user,$id_user);
		redirect(site_url('user'));
	}

	}
}

?>