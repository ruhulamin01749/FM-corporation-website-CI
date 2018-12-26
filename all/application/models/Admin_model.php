<?php

class Admin_model extends CI_Model{
	public function login_from_check_info($user_email,$user_password){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$user_email);
		$this->db->where('password',md5($user_password));
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;


	}
	public function save_admin_info($data){
		$this->db->insert('admin',$data);
	}
	public function view_admin_info(){

		$this->db->select('*');
 		$this->db->from('admin');
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;
	}
	public function show_admin_info(){
 		$this->db->select('*');
 		$this->db->from('admin');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;

 	}

 	public function update_unpublished_admin($admin_id){

 		$this->db->set('publication_status',0);
 		$this->db->where('id',$admin_id);
 		$this->db->update('admin');

 	}

 	public function update_published_admin($admin_id){

 		$this->db->set('publication_status',1);
 		$this->db->where('id',$admin_id);
 		$this->db->update('admin');

 	}

 	public function delete_admin_info($admin_id){
 		$this->db->where('id',$admin_id);
 		$this->db->delete('admin');

 	}

 	public function select_admin_info_by_id($admin_id){

 		$this->db->select('*');
 		$this->db->from('admin');
 		$this->db->where('id',$admin_id);
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;

 	}


 	public function update_admin_info($data,$admin_id){

		
		$this->db->where('id',$admin_id);
		$this->db->update('admin',$data);


	}

}

?>