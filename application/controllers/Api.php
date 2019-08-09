<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: *");
	}
	//Menampilkan data user
	function user_get($id_user=""){
		if($id_user == ''){
			$user = $this->db->get('user')->result();
		}else {
			$this->db->where('id_user', $id_user);
			$user = $this->db->get('user')->result();
		}
		$this->response($user,200);
	}

	function user_post(){
		$data = array (
			'nama_user' => $this->post('nama_user'),
			'email' => $this->post('email'),
			'password' =>$this->post('password'),
			'nama_anak' =>$this->post('nama_anak'),
			'tgl'=>$this->post('tgl'),
			'berat'=>$this->post('berat'),
			'tinggi'=>$this->post('tinggi'),
			'jk'=>$this->post('jk'));
		$insert = $this->db->insert('user',$data);
		if($insert){
			$this->response($data,200);
		}else {
			$this->response(array('status' => 'fail',502 ));
		}
	}

	function user_put(){
		$id_user = $this->put('id_user');
		$data = array (
			'id_user' => $this->put('id_user'),
			'nama_user' => $this->put('nama_user'),
			'email' => $this->put('email'),
			'password' => $this->put('password'),
			'nama_anak' =>$this->put('nama_anak'),
			'tgl'=>$this->put('tgl'),
			'berat'=>$this->put('berat'),
			'tinggi'=>$this->put('tinggi'),
			'jk'=>$this->put('jk'));
		$this->db->where('id_user', $id_user);
		$update = $this->db->update('user',$data);
		if($update){
			$this->response($data,200);
		}else {
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_delete(){
		$id_user = $this->delete('id_user');
		$this->db->where('id_user',$id_user);
		$delete = $this->db->delete('user');
		if($delete){
			$this->response(array('status'=>'succes'),201);
		}else {
			$this->response(array('status' => 'fail',502));
		}
	}
}
