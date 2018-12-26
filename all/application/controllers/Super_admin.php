<?php

class Super_admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('id');
		if ($admin_id == NULL) {
			redirect('admin');
		}
		//$this->load->model('super_admin_model','sa_model');
	}
	
	public function index()
	{
		$data = array();
		$data['title'] = 'Home';
		$this->load->view('admin/admin_master',$data);
	}
		public function add_category(){
		$data = array();
		$data['title'] = 'Add category';
		$this->load->view('admin/add_category',$data);
	}

	public function save_category(){

                        $data = array();
                        $data['category_name'] = $this->input->post('category_name',true);
                       
                        $this->super_admin_model->save_category_info($data);


                        $sdata = array();
						$sdata['message'] = 'Category data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_category');

	}



	public function manage_category(){
		$data = array();
		$data['title'] = 'Manage category';
		$data['view_category'] = $this->super_admin_model->show_category_info();
		$this->load->view('admin/manage_category',$data);
	}

	public function delete_category($category_id){
		$this->super_admin_model->delete_category_info($category_id);
		redirect('super_admin/manage_category');
	}


	public function edit_category($category_id){
		$data = array();
		$data['title'] = 'Edit category';
		$data['category_info'] = $this->super_admin_model->select_category_info_by_id($category_id);
		$this->load->view('admin/edit_category_form',$data);
	}


	public function update_category(){
$category_id = $this->input->post('category_id',true);
		$data = array();
		 
        $data['category_name'] = $this->input->post('category_name',true);
       
        $this->super_admin_model->update_category_info($data,$category_id);
		
					redirect('super_admin/manage_category');

	}
		

	
public function add_movie(){
		$data = array();
		$data['title'] = 'Add movies';
		$data['publish_category'] = $this->super_admin_model->show_category_info();
		$this->load->view('admin/add_movie',$data);
	}
	
public function save_movie(){

		$config['upload_path']          = 'images/movies/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('movie_image'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();  
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['movie_name'] = $this->input->post('movie_name',true);
                        $data['movie_image'] = $config['upload_path'].$fdata['file_name'];
                        $data['movie_category'] = $this->input->post('movie_category',true);
                        $data['movie_link'] = $this->input->post('movie_link',true);
                        $data['date'] = $this->input->post('date',true);
                        $data['realese_date'] = $this->input->post('realese_date',true);
                        $data['director'] = $this->input->post('director',true);
                        $data['cast'] = $this->input->post('cast',true);
                        $this->super_admin_model->save_movie_info($data);


                        $sdata = array();
						$sdata['message'] = 'Movie data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_movie');

	}
}
			public function manage_movie(){
		$data = array();
		$data['title'] = 'Manage Movies';
		$data['view_movie'] = $this->super_admin_model->show_movie_info();
		$this->load->view('admin/manage_movie',$data);
	}

	public function delete_movie($movie_id){
		$this->super_admin_model->delete_movie_info($movie_id);
		redirect('super_admin/manage_movie');
	}


	public function edit_movie($movie_id){
		$data = array();
		$data['title'] = 'Edit Movie';
		$data['publish_category'] = $this->super_admin_model->show_category_info();
		$data['movie_info'] = $this->super_admin_model->select_movie_info_by_id($movie_id);
		$this->load->view('admin/edit_movie_form',$data);
	}


	public function update_movie(){
		$data = array();
                        $movie_id= $this->input->post('movie_id',true);
                        $old_image = $this->super_admin_model->select_movie_info_by_id($movie_id);

                      
                        $data['movie_name'] = $this->input->post('movie_name',true);

		
		$config['upload_path']          = 'images/movies/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
               

                $fdata = array(); 
                $fdata['file_name'] =  $this->upload->do_upload('movie_image');

                if (!$fdata['file_name'])
                {
                       $data['movie_image'] = $old_image->movie_image;

                }
                else
                {
                		$path = $old_image->movie_image;
                		if($path){
						unlink($path);
                        $fdata = $this->upload->data();
                        $data['movie_image'] = $config['upload_path'].$fdata['file_name'];
                    }
                    }
                        $data['movie_category'] = $this->input->post('movie_category',true);
                        $data['realese_date'] = $this->input->post('realese_date',true);
                        $data['date'] = $this->input->post('date',true);
                        $data['director'] = $this->input->post('director',true);
                        $data['cast'] = $this->input->post('cast',true);
                        $data['movie_link'] = $this->input->post('movie_link',true);
                        $this->super_admin_model->update_movie_info($data,$movie_id);

		
					redirect('super_admin/manage_movie');

	}

public function add_softwer(){
		$data = array();
		$data['title'] = 'Add softwers';
		$this->load->view('admin/add_softwer',$data);
	}
	
public function save_softwer(){

                        $data = array();
                        $data['softwer_name'] = $this->input->post('softwer_name',true);
                         $data['softwer_desc'] = $this->input->post('softwer_desc',true);
                        $data['softwer_link'] = $this->input->post('softwer_link',true);
                        $data['softwer_size'] = $this->input->post('softwer_size',true);
                        $this->super_admin_model->save_softwer_info($data);


                        $sdata = array();
						$sdata['message'] = 'softwer data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_softwer');

	}

			public function manage_softwer(){
		$data = array();
		$data['title'] = 'Manage softwers';
		$data['view_softwer'] = $this->super_admin_model->show_softwer_info();
		$this->load->view('admin/manage_softwer',$data);
	}

	public function delete_softwer($softwer_id){
		$this->super_admin_model->delete_softwer_info($softwer_id);
		redirect('super_admin/manage_softwer');
	}


	public function edit_softwer($softwer_id){
		$data = array();
		$data['title'] = 'Edit softwer';
		$data['softwer_info'] = $this->super_admin_model->select_softwer_info_by_id($softwer_id);
		$this->load->view('admin/edit_softwer_form',$data);
	}


	public function update_softwer(){
		$softwer_id = $this->input->post('softwer_id',true);
		$data = array();
                        $data['softwer_name'] = $this->input->post('softwer_name',true);
                        $data['softwer_desc'] = $this->input->post('softwer_desc',true);
                        $data['softwer_link'] = $this->input->post('softwer_link',true);
                        $data['softwer_size'] = $this->input->post('softwer_size',true);
                        $this->super_admin_model->update_softwer_info($data,$softwer_id);

		
					redirect('super_admin/manage_softwer');

	}


	public function add_secret_softwer(){
		$data = array();
		$data['title'] = 'Add secret_softwers';
		$this->load->view('admin/add_secret_softwer',$data);
	}
	
public function save_secret_softwer(){

                        $data = array();
                        $data['secret_softwer_name'] = $this->input->post('secret_softwer_name',true);
                         $data['secret_softwer_desc'] = $this->input->post('secret_softwer_desc',true);
                        $data['secret_softwer_link'] = $this->input->post('secret_softwer_link',true);
                        $data['secret_softwer_size'] = $this->input->post('secret_softwer_size',true);
                        $this->super_admin_model->save_secret_softwer_info($data);


                        $sdata = array();
						$sdata['message'] = 'secret_softwer data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_secret_softwer');

	}

			public function manage_secret_softwer(){
		$data = array();
		$data['title'] = 'Manage secret_softwers';
		$data['view_secret_softwer'] = $this->super_admin_model->show_secret_softwer_info();
		$this->load->view('admin/manage_secret_softwer',$data);
	}

	public function delete_secret_softwer($secret_softwer_id){
		$this->super_admin_model->delete_secret_softwer_info($secret_softwer_id);
		redirect('super_admin/manage_secret_softwer');
	}


	public function edit_secret_softwer($secret_softwer_id){
		$data = array();
		$data['title'] = 'Edit secret_softwer';
		$data['secret_softwer_info'] = $this->super_admin_model->select_secret_softwer_info_by_id($secret_softwer_id);
		$this->load->view('admin/edit_secret_softwer_form',$data);
	}


	public function update_secret_softwer(){
		$secret_softwer_id = $this->input->post('secret_softwer_id',true);
		$data = array();
                        $data['secret_softwer_name'] = $this->input->post('secret_softwer_name',true);
                        $data['secret_softwer_desc'] = $this->input->post('secret_softwer_desc',true);
                        $data['secret_softwer_link'] = $this->input->post('secret_softwer_link',true);
                        $data['secret_softwer_size'] = $this->input->post('secret_softwer_size',true);
                        $this->super_admin_model->update_secret_softwer_info($data,$secret_softwer_id);

		
					redirect('super_admin/manage_secret_softwer');

	}


			public function add_tube_category(){
		$data = array();
		$data['title'] = 'Add tube_category';
		$this->load->view('admin/add_tube_category',$data);
	}

	public function save_tube_category(){

                        $data = array();
                        $data['tube_category_name'] = $this->input->post('tube_category_name',true);
                       
                        $this->super_admin_model->save_tube_category_info($data);


                        $sdata = array();
						$sdata['message'] = 'tube_category data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_tube_category');

	}



	public function manage_tube_category(){
		$data = array();
		$data['title'] = 'Manage tube_category';
		$data['view_tube_category'] = $this->super_admin_model->show_tube_category_info();
		$this->load->view('admin/manage_tube_category',$data);
	}

	public function delete_tube_category($tube_category_id){
		$this->super_admin_model->delete_tube_category_info($tube_category_id);
		redirect('super_admin/manage_tube_category');
	}


	public function edit_tube_category($tube_category_id){
		$data = array();
		$data['title'] = 'Edit tube_category';
		$data['tube_category_info'] = $this->super_admin_model->select_tube_category_info_by_id($tube_category_id);
		$this->load->view('admin/edit_tube_category_form',$data);
	}


	public function update_tube_category(){
$tube_category_id = $this->input->post('tube_category_id',true);
		$data = array();
		 
        $data['tube_category_name'] = $this->input->post('tube_category_name',true);
       
        $this->super_admin_model->update_tube_category_info($data,$tube_category_id);
		
					redirect('super_admin/manage_tube_category');

	}


public function add_tube_video(){
		$data = array();
		$data['title'] = 'Add tube_videos';
		$data['publish_tube_category'] = $this->super_admin_model->show_tube_category_info();
		$this->load->view('admin/add_tube_video',$data);
	}
	
public function save_tube_video(){

		$config['upload_path']          = 'kachajal_tube/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('tube_video_image'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();  
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['video_name'] = $this->input->post('tube_video_name',true);
                        $data['video_image'] = $config['upload_path'].$fdata['file_name'];
                        $data['video_link'] = $this->input->post('tube_video_link',true);
                        $data['video_category'] = $this->input->post('tube_video_category',true);
                        $data['video_desc'] = $this->input->post('tube_video_desc',true);
                        $data['video_duration'] = $this->input->post('tube_video_duration',true);
                        $data['publish_date'] = $this->input->post('publish_date',true);
                        $data['publisher_name'] = $this->input->post('publisher_name',true);
                        $this->super_admin_model->save_tube_video_info($data);


                        $sdata = array();
						$sdata['message'] = 'Tube Video data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_tube_video');

	}
}
			public function manage_tube_video(){
		$data = array();
		$data['title'] = 'Manage tube_videos';
		$data['view_tube_video'] = $this->super_admin_model->show_tube_video_info();
		$this->load->view('admin/manage_tube_video',$data);
	}

	public function delete_tube_video($tube_video_id){
		$this->super_admin_model->delete_tube_video_info($tube_video_id);
		redirect('super_admin/manage_tube_video');
	}


	public function edit_tube_video($tube_video_id){
		$data = array();
		$data['title'] = 'Edit tube_video';
		$data['publish_tube_category'] = $this->super_admin_model->show_tube_category_info();
		$data['tube_video_info'] = $this->super_admin_model->select_tube_video_info_by_id($tube_video_id);
		$this->load->view('admin/edit_tube_video_form',$data);
	}


	public function update_tube_video(){
		$data = array();
                        $tube_video_id= $this->input->post('tube_video_id',true);
                        $old_image = $this->super_admin_model->select_tube_video_info_by_id($tube_video_id);

                      
                        $data['video_name'] = $this->input->post('tube_video_name',true);

		
		$config['upload_path']          = 'kachajal_tube/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
               

                $fdata = array(); 
                $fdata['file_name'] =  $this->upload->do_upload('tube_video_image');

                if (!$fdata['file_name'])
                {
                       $data['video_image'] = $old_image->video_image;

                }
                else
                {
                		$path = $old_image->video_image;
                		if($path){
						unlink($path);
                        $fdata = $this->upload->data();
                        $data['video_image'] = $config['upload_path'].$fdata['file_name'];
                    }
                    }
                       $data['video_link'] = $this->input->post('tube_video_link',true);
                        $data['video_category'] = $this->input->post('tube_video_category',true);
                        $data['video_desc'] = $this->input->post('tube_video_desc',true);
                        $data['video_duration'] = $this->input->post('tube_video_duration',true);
                        $data['publish_date'] = $this->input->post('publish_date',true);
                        $data['publisher_name'] = $this->input->post('publisher_name',true);
                        $this->super_admin_model->update_tube_video_info($data,$tube_video_id);

		
					redirect('super_admin/manage_tube_video');

	}



	


public function add_admin(){

		$data = array();
		$data['title'] = 'Add admin';
		$this->load->view('admin/add_admin',$data);

	}
	public function save_admin(){
		$old_admin = $this->admin_model->view_admin_info();
		$old_email = $old_admin->email;
		$data = array();
		$data['name'] = $this->input->post('admin_name',true);
		$data['email'] = $this->input->post('admin_email',true);
		$data['password'] = md5($this->input->post('admin_password',true));
		$data['publication_status'] = $this->input->post('publication_status',true);
		if($old_email != $data['email']){

		$this->admin_model->save_admin_info($data);

		$sdata = array();
		$sdata['message'] = 'Add admin user successfully !';
		$this->session->set_userdata($sdata);
		redirect('super_admin/add_admin',$sdata);
	}
	else{
		$sdata['message'] = 'your email Id is already exists !';
						$this->session->set_userdata($sdata);
		redirect('super_admin/add_admin',$sdata);
	}

	}

			public function manage_admin(){
		$data = array();
		$data['title'] = 'Manage Admins';
		$data['view_admin'] = $this->admin_model->show_admin_info();
		$this->load->view('admin/manage_admin',$data);
	}


	public function unpublished_admin($admin_id){
		$this->admin_model->update_unpublished_admin($admin_id);
		redirect('super_admin/manage_admin');
	}

	public function published_admin($admin_id){
		$this->admin_model->update_published_admin($admin_id);
		redirect('super_admin/manage_admin');
	}


	public function delete_admin($admin_id){
		$this->admin_model->delete_admin_info($admin_id);
		redirect('super_admin/manage_admin');
	}


	public function edit_admin($admin_id){
		$data = array();
		$data['title'] = 'Edit admin';
		$data['admin_info'] = $this->admin_model->select_admin_info_by_id($admin_id);
		$this->load->view('admin/edit_admin_form',$data);
	}


	public function update_admin(){
		$admin_id = $this->input->post('admin_id',true);
		$old_pass = $this->admin_model->select_admin_info_by_id($admin_id);
		$new_pass = $this->input->post('admin_password',true);
		$data = array();

                        $data['name'] = $this->input->post('admin_name',true);
                        $data['email'] = $this->input->post('admin_email',true);
                        	if($new_pass){
                        		$data['password'] = md5($new_pass);
                        	}
                        	else{
                        		$data['password'] = $old_pass->password;
                        	}
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->admin_model->update_admin_info($data,$admin_id);

		
					redirect('super_admin/manage_admin');

	}

		
public function add_user(){

		$data = array();
		$data['title'] = 'Add user';
		$this->load->view('admin/add_user',$data);

	}
	public function save_user(){
		$old_user = $this->super_admin_model->view_user_info();
		$old_email = $old_user->email;
		$data = array();
		$data['name'] = $this->input->post('user_name',true);
		$data['email'] = $this->input->post('user_email',true);
		$data['password'] = md5($this->input->post('user_password',true));
		$data['publication_status'] = $this->input->post('publication_status',true);
		if($old_email != $data['email']){

		$this->super_admin_model->save_user_info($data);

		$sdata = array();
		$sdata['message'] = 'Add user user successfully !';
		$this->session->set_userdata($sdata);
		redirect('super_admin/add_user',$sdata);
	}
	else{
		$sdata['message'] = 'your email Id is already exists !';
						$this->session->set_userdata($sdata);
		redirect('super_admin/add_user',$sdata);
	}

	}

			public function manage_user(){
		$data = array();
		$data['title'] = 'Manage users';
		$data['view_user'] = $this->super_admin_model->show_user_info();
		$this->load->view('admin/manage_user',$data);
	}


	public function unpublished_user($user_id){
		$this->super_admin_model->update_unpublished_user($user_id);
		redirect('super_admin/manage_user');
	}

	public function published_user($user_id){
		$this->super_admin_model->update_published_user($user_id);
		redirect('super_admin/manage_user');
	}


	public function delete_user($user_id){
		$this->super_admin_model->delete_user_info($user_id);
		redirect('super_admin/manage_user');
	}


	public function edit_user($user_id){
		$data = array();
		$data['title'] = 'Edit user';
		$data['user_info'] = $this->super_admin_model->select_user_info_by_id($user_id);
		$this->load->view('admin/edit_user_form',$data);
	}


	public function update_user(){
		$user_id = $this->input->post('user_id',true);
		$old_pass = $this->super_admin_model->select_user_info_by_id($user_id);
		$new_pass = $this->input->post('user_password',true);
		$data = array();

                        $data['name'] = $this->input->post('user_name',true);
                        $data['email'] = $this->input->post('user_email',true);
                        if($new_pass){
                        	$data['password'] = md5($new_pass);
                        }
                        else{
                        	$data['password'] = $old_pass->password;
                        }
                        
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->update_user_info($data,$user_id);

		
					redirect('super_admin/manage_user');

	}

	public function logout(){
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('name');

			$sdata = array();
			$sdata['meassage'] = 'You are successfully logged out !';
			$this->session->set_userdata($sdata);
			redirect('admin');
	} 
}



?>