<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tube extends CI_Controller {

	
	public function index()
	{
		$data = array();

		$this->load->library('pagination');

        $config['base_url'] = "http://fs.1netbd.com/tube/";
        $config['total_rows'] = $this->db->get('tube_videos')->num_rows();
        $config['per_page'] = 40;
        $config['num_links'] =4;
        $config['full_tag_open'] = '<ul class="pagination no-margin">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['next_link'] = 'Next >';
        $config['prev_link'] = '< Prev';
        $config['enable_query_strings'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['page_query_string'] = TRUE;


		$data['title'] = 'Kachajal Tube';
		$data['publish_tube_category'] = $this->tube_model->publish_tube_category_info();
		$data['publish_tube_category_2'] = $this->tube_model->publish_tube_category_info_2();
		$data['recent_video'] = $this->tube_model->recent_video_info();
		$data['popular_video_1'] = $this->tube_model->popular_video_info_1();
		$data['popular_video_2'] = $this->tube_model->popular_video_info_2();
		/*$data['all_video'] = $this->tube_model->all_video_info();*/

		if ($this->input->get('page')) {
    $sgm = (int) trim($this->input->get('page'));
    $data['segment'] = $config['per_page'] * ($sgm - 1);
 } else {
    $data['segment'] = 0;
 }

        $this->pagination->initialize($config);

        
        $query = $this->db->limit($config['per_page'], $data['segment'])->order_by('video_id','desc')->get('tube_videos');
        $data['all_video'] = $query->result_array();

		$this->load->view('tube/index',$data);
	}
	public function video_detail($video_id)
	{
		$data = array();
		$data['publish_tube_category'] = $this->tube_model->publish_tube_category_info();
		$data['publish_tube_category_2'] = $this->tube_model->publish_tube_category_info_2();
		$data['single_video'] = $this->tube_model->video_detail_by_id($video_id);
		$total_hit = $data['single_video']->hit_count+1;
		$this->tube_model->update_hitcount($total_hit,$video_id);
		$category_id = $data['single_video']->video_category;
		$data['upnext_video'] = $this->tube_model->upnext_video_info($video_id);
		$data['comment'] = $this->tube_model->show_comment_info($video_id);
		$data['total_rows_comment'] = $this->db->where('video_id', $video_id)->get('tube_comment')->num_rows();
		$data['title'] = $data['single_video']->video_name;
		$this->load->view('tube/single',$data);
	}
	
	public function category_video($tube_category_id){

		$this->load->library('pagination');

        $config['base_url'] = "http://fs.1netbd.com/tube/category_video/".$tube_category_id;
        $config['total_rows'] = $this->db->where('video_category', $tube_category_id)->get('tube_videos')->num_rows();
        $config['per_page'] = 40;
        $config['num_links'] = 4;
        $config['full_tag_open'] = '<ul class="pagination no-margin">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['next_link'] = 'Next >';
        $config['prev_link'] = '< Prev';
        $config['enable_query_strings'] = TRUE;
		 $config['use_page_numbers'] = TRUE;
		 $config['query_string_segment'] = 'page';
		 $config['page_query_string'] = TRUE;




		$data = array();
		$data['category_name'] = $this->tube_model->category_name_by_id($tube_category_id);
		$data['publish_tube_category'] = $this->tube_model->publish_tube_category_info();
		$data['publish_tube_category_2'] = $this->tube_model->publish_tube_category_info_2();
		/*$data['show_video_by_category_id'] = $this->tube_model->show_video_by_category_id_info($tube_category_id);*/
		if ($this->input->get('page')) {
    $sgm = (int) trim($this->input->get('page'));
    $data['segment'] = $config['per_page'] * ($sgm - 1);
 } else {
    $data['segment'] = 0;
 }

        $this->pagination->initialize($config);

        
        $query = $this->db->where('video_category', $tube_category_id)->limit($config['per_page'], $data['segment'])->order_by('video_id','desc')->get('tube_videos');
        $data['show_video_by_category_id'] = $query->result_array();
		$data['title'] = $data['category_name']->tube_category_name;
		$this->load->view('tube/category_video',$data);
	}
	public function search_video(){
		$data = array();
		$search_content = $this->input->get('tube_search',TRUE);
		$data['search_result'] = $this->tube_model->search_video_info($search_content);
		$data['publish_tube_category'] = $this->tube_model->publish_tube_category_info();
		$data['publish_tube_category_2'] = $this->tube_model->publish_tube_category_info_2();
		$data['title'] = 'search_result';
		$this->load->view('tube/search_result',$data);
	}
	public function save_comment(){
		$data = array();
		$data['name'] = $this->input->post('name',TRUE);
		$data['email'] = $this->input->post('email',TRUE);
		$data['message'] = $this->input->post('message',TRUE);
		$data['video_id'] = $this->input->post('video_id',TRUE);
		$this->tube_model->save_comment_info($data);
		redirect('tube/video_detail/'.$data['video_id']);

	}


}
