<?php
 /**
  * 
  */
 class User_model extends CI_Model
 {
 	
 	public function login($username, $password)
 	{
 		return $this->db->query("Select *from user where
 							email='".$username."'
 							and password='".$password."'")->row();
 	}
 	public function insert($data)
 	{
 		$this->db->insert('user',$data);
 	}
 	public function select()
 	{
 		return $this->db->get('user')->result();
 	}
 	public function selectkomentar()
 	{
 		return $this->db->get('komentar')->result();
 	}
 	public function delete($id)
 	{
 		$this->db->where('id_user',$id);
 		$this->db->delete('user');
 	}
 	public function deletekomentar($id)
 	{
 		$this->db->where('id_komentar',$id);
 		$this->db->delete('komentar');
 	}
 	public function update($data,$id)
 	{
 		$this->db->where('id_user',$id);
 		$this->db->update('user',$data);
 	}
 }
 
?>