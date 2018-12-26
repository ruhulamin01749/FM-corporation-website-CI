<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['slider_movie'] = $this->welcome_model->slider_movie_info();
		$data['popular_movie'] = $this->welcome_model->popular_movie_info();
		$data['show_hollywood_first_movie'] = $this->welcome_model->show_hollywood_first_movie_info();
		$data['show_hollywood_movie'] = $this->welcome_model->show_hollywood_movie_info();
		$data['show_animation_first_movie'] = $this->welcome_model->show_animation_first_movie_info();
		$data['show_animation_movie'] = $this->welcome_model->show_animation_movie_info();
		$data['show_chinese_first_movie'] = $this->welcome_model->show_chinese_first_movie_info();
		$data['show_chinese_movie'] = $this->welcome_model->show_chinese_movie_info();
		$data['show_bollywood_first_movie'] = $this->welcome_model->show_bollywood_first_movie_info();
    	$data['show_bollywood_movie'] = $this->welcome_model->show_bollywood_movie_info();
    	$data['show_timil_telegu_first_movie'] = $this->welcome_model->show_timil_telegu_first_movie_info();
   		$data['show_timil_telegu_movie'] = $this->welcome_model->show_timil_telegu_movie_info();
   		$data['show_bangla_first_movie'] = $this->welcome_model->show_bangla_first_movie_info();
        $data['show_bangla_movie'] = $this->welcome_model->show_bangla_movie_info();
        $data['show_bangla_n_first_movie'] = $this->welcome_model->show_bangla_n_first_movie_info();
        $data['show_bangla_n_movie'] = $this->welcome_model->show_bangla_n_movie_info();
        $data['music_video'] = $this->welcome_model->show_music_video_info();
        $data['show_tv_series_first_movie'] = $this->welcome_model->show_tv_series_first_movie_info();
        $data['show_tv_series_movie'] = $this->welcome_model->show_tv_series_movie_info();

		$data['title'] = 'Home';
		$data['fm'] = $this->welcome_model->show_fm_info();
		$this->load->view('index',$data);
	}
	
	public function fm_detail($fm_id)
	{
		$data = array();
		$data['fm_info'] = $this->welcome_model->select_fm_info_by_id($fm_id);
		$data['fm'] = $this->welcome_model->show_fm_info();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['popular_movie'] = $this->welcome_model->popular_movie_info();
		$data['music_video'] = $this->welcome_model->show_music_video_info();
		$data['title'] = $data['fm_info']->fm_name;
		$this->load->view('fm_detail',$data);

	}
		
	public function category_movie($category_id)
	{
		$this->load->library('pagination');

        $config['base_url'] = "http://fs.1netbd.com/welcome/category_movie/".$category_id;
        $config['total_rows'] = $this->db->where('movie_category', $category_id)->get('movies')->num_rows();
        $config['per_page'] = 30;
        $config['num_links'] = 5;
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
		$data['fm'] = $this->welcome_model->show_fm_info();
		$data['publish_catagory_name'] = $this->welcome_model->publish_all_category_by_id($category_id);
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['popular_movie'] = $this->welcome_model->popular_movie_info();
		$data['music_video'] = $this->welcome_model->show_music_video_info();
		if ($this->input->get('page')) {
    $sgm = (int) trim($this->input->get('page'));
    $data['segment'] = $config['per_page'] * ($sgm - 1);
 } else {
    $data['segment'] = 0;
 }

        $this->pagination->initialize($config);

        
        $query = $this->db->where('movie_category', $category_id)->limit($config['per_page'], $data['segment'])->order_by('movie_id','desc')->get('movies');
        $data['category_movie'] = $query->result_array();
		
		$data['title'] = $data['publish_catagory_name']->category_name;
		
		$this->load->view('category_movie',$data);
	}
	public function movie_detail($movie_id)
	{
		$data = array();
		$data['movie_detail'] = $this->welcome_model->movie_detail_by_id($movie_id);
		$total_hit = $data['movie_detail']->hit_count+1;
		$this->welcome_model->update_hitcount($total_hit,$movie_id);
		$movie_category = $data['movie_detail']->movie_category;
		$data['related'] = $this->welcome_model->show_related_post_info($movie_category);
		
		$data['fm'] = $this->welcome_model->show_fm_info();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['popular_movie'] = $this->welcome_model->popular_movie_info();
		$data['music_video'] = $this->welcome_model->show_music_video_info();
		$data['movie_detail'] = $this->welcome_model->movie_detail_by_id($movie_id);
		$data['title'] = $data['movie_detail']->movie_name;
		$this->load->view('movie_detail',$data);

	}
	public function tube()
	{
		$data = array();
		$data['fm'] = $this->welcome_model->show_fm_info();
		$data['title'] = 'kachajal_tube';
		$this->load->view('tube',$data);

	}

	
public function search(){
	$search_content = $this->input->post('search',TRUE);
	$data = array();
	$data['title'] = 'search_result';
	$data['fm'] = $this->welcome_model->show_fm_info();
	$data['publish_catagory'] = $this->welcome_model->publish_all_category();
	$data['popular_movie'] = $this->welcome_model->popular_movie_info();
	$data['music_video'] = $this->welcome_model->show_music_video_info();
	$data['search_result'] = $this->welcome_model->search_info($search_content);
	$this->load->view('search_result',$data);
}
public function softwer()
	{
		$data = array();
		$data['title'] = 'Software';
		$data['show_softwer'] = $this->welcome_model->publish_all_softwer();
		$this->load->view('softwer',$data);

	}
public function search_softwer(){
	$search_content = $this->input->post('search',TRUE);
	$data = array();
	$data['title'] = 'search_result';
	$data['search_result'] = $this->welcome_model->search_softwer_info($search_content);
	$this->load->view('search_softwer_result',$data);
}


	

	public function secret_softwer()
	{
		$admin_id = $this->session->userdata('user_id');
		if ($admin_id == NULL) {
			redirect('secret');
		}
		$data = array();
		$data['title'] = 'Secret_Software';
		$data['show_softwer'] = $this->welcome_model->publish_all_secret_softwer();
		$this->load->view('secret/secret_softwer',$data);

	}
	public function search_secret_softwer(){
		$admin_id = $this->session->userdata('user_id');
		if ($admin_id == NULL) {
			redirect('secret');
		}
		$search_content = $this->input->post('search',TRUE);
		$data = array();
		$data['title'] = 'search_result';
		$data['search_result'] = $this->welcome_model->search_secret_softwer_info($search_content);
		$this->load->view('secret/search_secret_softwer_result',$data);
}
public function logout(){
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_name');
			$sdata = array();
			$this->session->set_userdata($sdata);
			redirect('secret');
	}
}

