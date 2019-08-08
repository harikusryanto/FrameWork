<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function artikel()
	{
		$this->load->view('artikel');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function login()
	{

		$this->load->view('login');
	}
	public function kontak()
	{
		$this->load->view('contact');
	}
	public function loginadmin()
	{
		$this->load->view('loginadmin');
	}

	// Register
	public function register()
	{
		if ($this->input->post()) {
			$namesurname	=$this->input->post("namesurname");
			$email			=$this->input->post("email");
			$password		=$this->input->post("password");
			$nama_anak		=$this->input->post("nama_anak");
			$tgl			=$this->input->post("tgl");
			$berat			=$this->input->post("berat");
			$tinggi			=$this->input->post("tinggi");
			$jk				=$this->input->post("jk");
			$data_inputan	= array('nama_user' =>$namesurname ,
									 'email'	=>$email,
									 'password' =>md5($password),
									 'nama_anak' =>$nama_anak,
									 'tgl' => $tgl,
									 'berat'=>$berat,
									 'tinggi'=>$tinggi,
									 'jk'=>$jk);
			$this->User_model->insert($data_inputan);
			redirect('/');
		}else{
			$this->load->view("register");
		}
	}

	// Login
	public function cek_login()
	{
		$username = $this->input->post("username");	
		$password = $this->input->post("password");
		$cek_login= $this->User_model->login($username,md5($password));

		if (empty($cek_login)) {
			redirect ("/");
		}else{
			redirect(site_url('welcome/blog'));
		}
	}
	public function cek_loginadmin()
	{
		$username = $this->input->post("username");	
		$password = $this->input->post("password");
		$cek_loginadmin= $this->User_model->loginadmin($username,md5($password));

		if (empty($cek_loginadmin)) {
			redirect ("/");
		}else{
			redirect(site_url('welcome/home'));
		}
	}

	//Buat Fungsi Home
	 public function home()
	 {
		$this->load->view('template');

	 }
}
