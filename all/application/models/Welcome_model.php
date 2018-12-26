<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome_model extends CI_Model
{
	// show slider images
	public function view_slider_image_info(){
		$sql = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 0,8";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

	public function publish_all_category(){

		$this->db->select('*');
		$this->db->from('category');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function publish_all_category_by_id($category_id){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$category_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;

	}
	public function show_hollywood_first_movie_info(){
		$sql = "SELECT * FROM movies WHERE movie_category=1 ORDER BY movie_id DESC LIMIT 0,1";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	
}
	public function show_hollywood_movie_info(){
		$sql = "SELECT * FROM movies WHERE movie_category=1 ORDER BY movie_id DESC LIMIT 1,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
		public function show_animation_first_movie_info(){
		$sql = "SELECT * FROM movies WHERE movie_category=5 ORDER BY movie_id DESC LIMIT 0,1";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	
}
	public function show_animation_movie_info(){
		$sql = "SELECT * FROM movies WHERE movie_category=5 ORDER BY movie_id DESC LIMIT 1,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}
		public function show_chinese_first_movie_info(){
		$sql = "SELECT * FROM movies WHERE movie_category=4 ORDER BY movie_id DESC LIMIT 0,1";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	
}
	public function show_chinese_movie_info(){
		$sql = "SELECT * FROM movies WHERE movie_category=4 ORDER BY movie_id DESC LIMIT 1,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}
public function show_bollywood_first_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=3 ORDER BY movie_id DESC LIMIT 0,1";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
  
}
  public function show_bollywood_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=3 ORDER BY movie_id DESC LIMIT 1,3";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}
 public function show_timil_telegu_first_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=6 ORDER BY movie_id DESC LIMIT 0,1";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
  
}
  public function show_timil_telegu_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=6 ORDER BY movie_id DESC LIMIT 1,3";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}
public function show_bangla_first_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=7 ORDER BY movie_id DESC LIMIT 0,1";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
  
}
  public function show_bangla_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=7 ORDER BY movie_id DESC LIMIT 1,3";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}
public function show_bangla_n_first_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=8 ORDER BY movie_id DESC LIMIT 0,1";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
  
}
  public function show_bangla_n_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=8 ORDER BY movie_id DESC LIMIT 1,3";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}
 public function show_music_video_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=10 ORDER BY movie_id DESC LIMIT 0,5";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}
    public function show_tv_series_first_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=9 ORDER BY movie_id DESC LIMIT 0,1";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
  
}
  public function show_tv_series_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=9 ORDER BY movie_id DESC LIMIT 1,3";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}


	public function publish_all_movie(){
		$sql = "SELECT * FROM movies ORDER BY movie_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;

		/*$this->db->select('*');
		$this->db->from('add_blog');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;*/
	}
	public function slider_movie_info(){
		$sql = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 0,8";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

	public function popular_movie_info(){
		$sql = "SELECT * FROM movies ORDER BY hit_count DESC LIMIT 0,5";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function show_fm_info(){
		$sql = "SELECT * FROM fm ORDER BY fm_id ASC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function select_fm_info_by_id($fm_id){

		$this->db->select('*');
		$this->db->from('fm');
		$this->db->where('fm_id',$fm_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;

	}


	public function movie_detail_by_id($movie_id){

		$this->db->select('*');
		$this->db->from('movies');
		$this->db->where('movie_id',$movie_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;

	}
	public function show_related_post_info($movie_category){
		$sql = "SELECT * FROM movies WHERE movie_category=$movie_category ORDER BY movie_id DESC LIMIT 0,6";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

	public function select_movie_info_by_category_id($category_id){
		$sql = "SELECT * FROM movies WHERE movie_category=$category_id ORDER BY movie_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

public function search_info($search_content){
	   $sql = "SELECT * FROM movies WHERE movie_name LIKE '%$search_content%' ORDER BY movie_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}

public function publish_all_softwer(){

	$sql = "SELECT * FROM softwer ORDER BY softwer_name ASC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}
public function search_softwer_info($search_content){
	   $sql = "SELECT * FROM softwer WHERE softwer_name LIKE '%$search_content%' ORDER BY softwer_name ASC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}
public function publish_all_secret_softwer(){

	$sql = "SELECT * FROM secret_softwer ORDER BY secret_softwer_name ASC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}
public function search_secret_softwer_info($search_content){
	   $sql = "SELECT * FROM secret_softwer WHERE secret_softwer_name LIKE '%$search_content%' ORDER BY secret_softwer_name ASC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
}


	public function save_user_info($data){
		$this->db->insert('user',$data);
	}

	public function user_login_info($user_email,$user_password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$user_email);
		$this->db->where('password',md5($user_password));
		
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function save_comment_info($data){
		$this->db->insert('comments',$data);
	}


	public function publish_comment_info($blog_id){
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->where('blog_id',$blog_id);
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function update_hitcount($total_hit,$movie_id){
		$this->db->set('hit_count',$total_hit);
		$this->db->where('movie_id',$movie_id);
		$this->db->update('movies');
	}
	public function populer_blog_info(){
		$sql = "SELECT * FROM add_blog ORDER BY hit_count DESC LIMIT 0,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;

	}

}