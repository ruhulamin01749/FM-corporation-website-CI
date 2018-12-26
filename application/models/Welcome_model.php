<?php

/**
* 
*/
class Welcome_model extends CI_Model
{

	public function view_logo_info(){
		$sql = "SELECT * FROM fm_logo WHERE publication_status='1' ORDER BY logo_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->row();
		return $result;

	}

	// show slider images
	public function view_slider_image_info(){
		$sql = "SELECT * FROM slider_image ORDER BY slider_id DESC LIMIT 0,4";
		$query_result = $this->db->query($sql);
		
		$result = $query_result->result();
		return $result;
	}

	public function view_welcome_info(){
		$this->db->select('*');
		$this->db->from('fm_welcome');
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function view_service_menu_info(){
		$this->db->select('*');
		$this->db->from('fm_service');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function view_services_info_with_limit(){
		$sql = "SELECT * FROM fm_service ORDER BY service_id ASC LIMIT 0,4";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function view_service_detail_info($service_id){
		$this->db->select('*');
		$this->db->from('fm_service');
		$this->db->where('service_id',$service_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function view_client_info(){
		$this->db->select('*');
		$this->db->from('fm_client');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function view_client_info_with_limit(){
		$sql = "SELECT * FROM fm_client ORDER BY client_id DESC LIMIT 0,4";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

public function view_project_info(){
		$this->db->select('*');
		$this->db->from('fm_project');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function view_project_info_with_limit(){
		$sql = "SELECT * FROM fm_project ORDER BY project_id DESC LIMIT 0,4";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function view_project_detail_info($project_id){
		$this->db->select('*');
		$this->db->from('fm_project');
		$this->db->where('project_id',$project_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	
}


?>