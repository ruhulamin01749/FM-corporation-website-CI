<?php
/**
* 
*/
class Super_admin_model extends CI_Model
{
	
	/*public function __construct(){
		parent::__construct();

	}*/

 	public function save_category_info($data){
		
		$this->db->insert('category',$data);

	}

	public function show_category_info(){
 		$this->db->select('*');
 		$this->db->from('category');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;

 	}
    public function show_category_name_by_id_info($category_id){
        $this->db->select('*');
        $this->db->from('category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }
    


 	

 	public function delete_category_info($category_id){
 		$this->db->where('category_id',$category_id);
 		$this->db->delete('category');

 	}

 	public function select_category_info_by_id($category_id){

 		$this->db->select('*');
 		$this->db->from('category');
 		$this->db->where('category_id',$category_id);
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;

 	}


 	public function update_category_info($data,$category_id){
		$this->db->where('category_id',$category_id);
		$this->db->update('category',$data);


	}


public function save_movie_info($data){
        
        $this->db->insert('movies',$data);

    }

    public function show_movie_info(){
      $sql = "SELECT * FROM movies ORDER BY movie_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;

    }


    public function delete_movie_info($movie_id){
        $this->db->where('movie_id',$movie_id);
        $this->db->delete('movies');

    }

    public function select_movie_info_by_id($movie_id){

        $this->db->select('*');
        $this->db->from('movies');
        $this->db->where('movie_id',$movie_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_movie_info($data,$movie_id){

        $this->db->where('movie_id',$movie_id);
        $this->db->update('movies',$data);

    }

    public function save_softwer_info($data){
        
        $this->db->insert('softwer',$data);

    }

    public function show_softwer_info(){
      $sql = "SELECT * FROM softwer ORDER BY softwer_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;

    }


    public function delete_softwer_info($softwer_id){
        $this->db->where('softwer_id',$softwer_id);
        $this->db->delete('softwer');

    }

    public function select_softwer_info_by_id($softwer_id){

        $this->db->select('*');
        $this->db->from('softwer');
        $this->db->where('softwer_id',$softwer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_softwer_info($data,$softwer_id){

        $this->db->where('softwer_id',$softwer_id);
        $this->db->update('softwer',$data);


    }


 public function save_secret_softwer_info($data){
        
        $this->db->insert('secret_softwer',$data);

    }

    public function show_secret_softwer_info(){
      $sql = "SELECT * FROM secret_softwer ORDER BY secret_softwer_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;

    }


    public function delete_secret_softwer_info($secret_softwer_id){
        $this->db->where('secret_softwer_id',$secret_softwer_id);
        $this->db->delete('secret_softwer');

    }

    public function select_secret_softwer_info_by_id($secret_softwer_id){

        $this->db->select('*');
        $this->db->from('secret_softwer');
        $this->db->where('secret_softwer_id',$secret_softwer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_secret_softwer_info($data,$secret_softwer_id){

        $this->db->where('secret_softwer_id',$secret_softwer_id);
        $this->db->update('secret_softwer',$data);


    }

public function save_tube_category_info($data){
        
        $this->db->insert('tube_category',$data);

    }

    public function show_tube_category_info(){
        $this->db->select('*');
        $this->db->from('tube_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }
    public function show_tube_category_name_by_id_info($tube_category_id){
        $this->db->select('*');
        $this->db->from('tube_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }
    


    

    public function delete_tube_category_info($tube_category_id){
        $this->db->where('tube_category_id',$tube_category_id);
        $this->db->delete('tube_category');

    }

    public function select_tube_category_info_by_id($tube_category_id){

        $this->db->select('*');
        $this->db->from('tube_category');
        $this->db->where('tube_category_id',$tube_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_tube_category_info($data,$tube_category_id){
        $this->db->where('tube_category_id',$tube_category_id);
        $this->db->update('tube_category',$data);


    }

public function save_tube_video_info($data){
        
        $this->db->insert('tube_videos',$data);

    }

    public function show_tube_video_info(){
      $sql = "SELECT * FROM tube_videos ORDER BY video_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;

    }


    public function delete_tube_video_info($tube_video_id){
        $this->db->where('video_id',$tube_video_id);
        $this->db->delete('tube_videos');

    }

    public function select_tube_video_info_by_id($tube_video_id){

        $this->db->select('*');
        $this->db->from('tube_videos');
        $this->db->where('video_id',$tube_video_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_tube_video_info($data,$tube_video_id){

        $this->db->where('video_id',$tube_video_id);
        $this->db->update('tube_videos',$data);

    }



 
    
        public function save_user_info($data){
        $this->db->insert('user',$data);
    }
    public function view_user_info(){

        $this->db->select('*');
        $this->db->from('user');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function show_user_info(){
        $this->db->select('*');
        $this->db->from('user');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function update_unpublished_user($user_id){

        $this->db->set('publication_status',0);
        $this->db->where('id',$user_id);
        $this->db->update('user');

    }

    public function update_published_user($user_id){

        $this->db->set('publication_status',1);
        $this->db->where('id',$user_id);
        $this->db->update('user');

    }

    public function delete_user_info($user_id){
        $this->db->where('id',$user_id);
        $this->db->delete('user');

    }

    public function select_user_info_by_id($user_id){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function update_user_info($data,$user_id){

        
        $this->db->where('id',$user_id);
        $this->db->update('user',$data);


    }



}