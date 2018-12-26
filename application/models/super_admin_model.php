<?php
/**
* 
*/
class Super_admin_model extends CI_Model
{
	
	/*public function __construct(){
		parent::__construct();

	}*/
	public function save_logo_info($data){

		$this->db->insert('fm_logo',$data);
	}

	public function view_logo_info(){

		$this->db->select('*');
 		$this->db->from('fm_logo');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;
	}

	public function update_unpublished_logo($logo_id){

 		$this->db->set('publication_status',0);
 		$this->db->where('logo_id',$logo_id);
 		$this->db->update('fm_logo');

 	}

 	public function update_published_logo($logo_id){

 		$this->db->set('publication_status',1);
 		$this->db->where('logo_id',$logo_id);
 		$this->db->update('fm_logo');

 	}

 	public function delete_logo_info($logo_id){

 		
 		$this->db->where('logo_id',$logo_id);
 		$this->db->delete('fm_logo');
 		

 	}

	/*public function save_category_info($data){
		
		$this->db->insert('category',$data);

	}*/
	// slider upload

	public function save_slider_info($data){


		$this->db->insert('slider_image',$data);

		
	}

	public function view_slider_info(){

		$this->db->select('*');
 		$this->db->from('slider_image');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;
	}

	public function update_unpublished_slider($slider_id){

 		$this->db->set('publication_status',0);
 		$this->db->where('slider_id',$slider_id);
 		$this->db->update('slider_image');

 	}

 	public function update_published_slider($slider_id){

 		$this->db->set('publication_status',1);
 		$this->db->where('slider_id',$slider_id);
 		$this->db->update('slider_image');

 	}

 	public function delete_slider_info($slider_id){

 		
 		$this->db->where('slider_id',$slider_id);
 		$this->db->delete('slider_image');
 		

 	}

 	public function view_welcome_message_info(){
 		$this->db->select('*');
		$this->db->from('fm_welcome');
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
 	}

 	public function update_welcome_info($data,$welcome_id){
 		
 		$this->db->where('welcome_id',$welcome_id);
 		$this->db->update('fm_welcome',$data);
 	}


 	public function save_service_info($data){
		
		$this->db->insert('fm_service',$data);

	}

	public function show_service_info(){
 		$this->db->select('*');
 		$this->db->from('fm_service');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;

 	}

 	public function update_unpublished_service($service_id){

 		$this->db->set('publication_status',0);
 		$this->db->where('service_id',$service_id);
 		$this->db->update('fm_service');

 	}

 	public function update_published_service($service_id){

 		$this->db->set('publication_status',1);
 		$this->db->where('service_id',$service_id);
 		$this->db->update('fm_service');

 	}

 	public function delete_service_info($service_id){
 		$this->db->where('service_id',$service_id);
 		$this->db->delete('fm_service');

 	}

 	public function select_service_info_by_id($service_id){

 		$this->db->select('*');
 		$this->db->from('fm_service');
 		$this->db->where('service_id',$service_id);
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;

 	}


 	public function update_service_info($data,$service_id){

		
		$this->db->where('service_id',$service_id);
		$this->db->update('fm_service',$data);


	}

	public function save_client_info($data){
		
		$this->db->insert('fm_client',$data);

	}

	public function show_client_info(){
 		$this->db->select('*');
 		$this->db->from('fm_client');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;

 	}

 	public function update_unpublished_client($client_id){

 		$this->db->set('publication_status',0);
 		$this->db->where('client_id',$client_id);
 		$this->db->update('fm_client');

 	}

 	public function update_published_client($client_id){

 		$this->db->set('publication_status',1);
 		$this->db->where('client_id',$client_id);
 		$this->db->update('fm_client');

 	}

 	public function delete_client_info($client_id){
 		$this->db->where('client_id',$client_id);
 		$this->db->delete('fm_client');

 	}

 	public function select_client_info_by_id($client_id){

 		$this->db->select('*');
 		$this->db->from('fm_client');
 		$this->db->where('client_id',$client_id);
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;

 	}


 	public function update_client_info($data,$client_id){

		
		$this->db->where('client_id',$client_id);
		$this->db->update('fm_client',$data);


	}

public function save_project_info($data){
        
        $this->db->insert('fm_project',$data);

    }

    public function show_project_info(){
        $this->db->select('*');
        $this->db->from('fm_project');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function update_unpublished_project($project_id){

        $this->db->set('publication_status',0);
        $this->db->where('project_id',$project_id);
        $this->db->update('fm_project');

    }

    public function update_published_project($project_id){

        $this->db->set('publication_status',1);
        $this->db->where('project_id',$project_id);
        $this->db->update('fm_project');

    }

    public function delete_project_info($project_id){
        $this->db->where('project_id',$project_id);
        $this->db->delete('fm_project');

    }

    public function select_project_info_by_id($project_id){

        $this->db->select('*');
        $this->db->from('fm_project');
        $this->db->where('project_id',$project_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_project_info($data,$project_id){

        
        $this->db->where('project_id',$project_id);
        $this->db->update('fm_project',$data);


    }





}


?>