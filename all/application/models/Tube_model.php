<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tube_model extends CI_Model
{
	public function publish_tube_category_info(){

		$sql = "SELECT * FROM tube_category LIMIT 0,7";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function publish_tube_category_info_2(){

		$sql = "SELECT * FROM tube_category LIMIT 7,20";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function show_video_by_category_id_info($tube_category_id){
		$sql = "SELECT * FROM tube_videos where video_category=$tube_category_id ORDER BY video_id DESC LIMIT 0,36";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function category_name_by_id($tube_category_id){
		$this->db->select('*');
		$this->db->from('tube_category');
		$this->db->where('tube_category_id',$tube_category_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	public function recent_video_info(){
		$sql = "SELECT * FROM tube_videos ORDER BY video_id DESC LIMIT 0,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function popular_video_info_1(){
		$sql = "SELECT * FROM tube_videos ORDER BY hit_count DESC LIMIT 0,4";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function popular_video_info_2(){
		$sql = "SELECT * FROM tube_videos ORDER BY hit_count DESC LIMIT 4,4";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function all_video_info(){
		$sql = "SELECT * FROM tube_videos ORDER BY video_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function video_detail_by_id($video_id){
		$this->db->select('*');
		$this->db->from('tube_videos');
		$this->db->where('video_id',$video_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;

	}
	public function update_hitcount($total_hit,$video_id){
		$this->db->set('hit_count',$total_hit);
		$this->db->where('video_id',$video_id);
		$this->db->update('tube_videos');
	}
	public function upnext_video_info($video_id){
	
		$sql = "SELECT * FROM tube_videos WHERE video_id<$video_id   ORDER BY video_id DESC LIMIT 0,15";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function search_video_info($search_content){
		$sql = "SELECT * FROM tube_videos WHERE video_name LIKE '%$search_content%' ORDER BY video_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}
	public function save_comment_info($data){
		$this->db->insert('tube_comment',$data);
	}
	public function show_comment_info($video_id){
		$sql = "SELECT * FROM tube_comment WHERE video_id = $video_id ORDER BY comment_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

}