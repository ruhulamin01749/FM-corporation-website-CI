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

	public function logo(){

		$data = array();
		$data['title'] = 'Manage logo';
		$data['logo_info'] = $this->super_admin_model->view_logo_info();
		$this->load->view('admin/manage_logo',$data);

	}
	public function save_logo(){

				$config['upload_path']          = 'images/logo/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1000*4;
                $config['max_height']           = 500*4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('logo'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();

                       
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['image_name'] = $config['upload_path'].$fdata['file_name'];
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->save_logo_info($data);


                        $sdata = array();
						$sdata['message'] = 'logo save successfully !';
						$this->session->set_userdata($sdata);

                        redirect('super_admin/logo');


	}
}
public function unpublished_logo($logo_id){
		$this->super_admin_model->update_unpublished_logo($logo_id);
		redirect('super_admin/logo');
	}

	public function published_logo($logo_id){
		$this->super_admin_model->update_published_logo($logo_id);
		redirect('super_admin/logo');
	}


	public function delete_logo($logo_id){

		$this->super_admin_model->delete_logo_info($logo_id);
		redirect('super_admin/logo');
	}
	
	public function slider(){

		$data = array();
		$data['title'] = 'Manage slider';
		$data['slider_info'] = $this->super_admin_model->view_slider_info();
		$this->load->view('admin/manage_slider',$data);

	}

	public function save_slider(){


		        $config['upload_path']          = 'images/slider/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('slider'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();

                       
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['image_name'] = $config['upload_path'].$fdata['file_name'];
                        $data['slogan'] = $this->input->post('slogan',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->save_slider_info($data);


                        $sdata = array();
						$sdata['message'] = 'Slider image save successfully !';
						$this->session->set_userdata($sdata);

                        redirect('super_admin/slider');

                     
                }


}
public function unpublished_slider($slider_id){
		$this->super_admin_model->update_unpublished_slider($slider_id);
		redirect('super_admin/slider');
	}

	public function published_slider($slider_id){
		$this->super_admin_model->update_published_slider($slider_id);
		redirect('super_admin/slider');
	}


	public function delete_slider($slider_id){
		$this->super_admin_model->delete_slider_info($slider_id);
		redirect('super_admin/slider');
	}

	public function manage_welcome(){
		$data = array();
		$data['title'] = 'Manage_welcome';
		$data['welcome_info'] = $this->super_admin_model->view_welcome_message_info();
		$this->load->view('admin/edit_welcome_form',$data);

	}

	public function update_welcome(){

		


		$data = array();
		$welcome_id = $this->input->post('welcome_id');
		$data['welcome_title'] = $this->input->post('welcome_title');
		$data['welcome_desc'] = $this->input->post('welcome_desc');

		$this->super_admin_model->update_welcome_info($data,$welcome_id);

		redirect('super_admin/manage_welcome');

	}


		public function add_service(){
		$data = array();
		$data['title'] = 'Add Services';
		$this->load->view('admin/add_service',$data);
	}

	public function save_service(){

		$config['upload_path']          = 'images/services/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('service_image'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();

                       
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['service_icon'] = $this->input->post('service_icon',true);
                        $data['service_name'] = $this->input->post('service_name',true);
                        $data['service_image'] = $config['upload_path'].$fdata['file_name'];
                        $data['service_desc'] = $this->input->post('service_desc',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->save_service_info($data);


                        $sdata = array();
						$sdata['message'] = 'Services data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_service');

	}
}


	public function manage_service(){
		$data = array();
		$data['title'] = 'Manage Services';
		$data['view_service'] = $this->super_admin_model->show_service_info();
		$this->load->view('admin/manage_service',$data);
	}


	public function unpublished_service($service_id){
		$this->super_admin_model->update_unpublished_service($service_id);
		redirect('super_admin/manage_service');
	}

	public function published_service($service_id){
		$this->super_admin_model->update_published_service($service_id);
		redirect('super_admin/manage_service');
	}


	public function delete_service($service_id){
		$this->super_admin_model->delete_service_info($service_id);
		redirect('super_admin/manage_service');
	}


	public function edit_service($service_id){
		$data = array();
		$data['title'] = 'Edit service';
		$data['service_info'] = $this->super_admin_model->select_service_info_by_id($service_id);
		$this->load->view('admin/edit_service_form',$data);
	}


	public function update_service(){
		$data = array();
                        $service_id= $this->input->post('service_id',true);
                        $old_image = $this->super_admin_model->select_service_info_by_id($service_id);

                        $data['service_icon'] = $this->input->post('service_icon',true);
                        $data['service_name'] = $this->input->post('service_name',true);

		
		$config['upload_path']          = 'images/services/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
               

                $fdata = array(); 
                $fdata['file_name'] =  $this->upload->do_upload('service_image');

                if (!$fdata['file_name'])
                {
                       $data['service_image'] = $old_image->service_image;

                }
                else
                {
                		$path = $old_image->service_image;
                		if($path){
						unlink($path);
                        $fdata = $this->upload->data();
                        $data['service_image'] = $config['upload_path'].$fdata['file_name'];
                    }
                    }
                        $data['service_desc'] = $this->input->post('service_desc',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->update_service_info($data,$service_id);

		
					redirect('super_admin/manage_service');

	}
		
		public function add_client(){
		$data = array();
		$data['title'] = 'Add Clients';
		$this->load->view('admin/add_client',$data);
	}
	
public function save_client(){

		$config['upload_path']          = 'images/clients/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('client_image'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();

                       
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['client_name'] = $this->input->post('client_name',true);
                        $data['client_image'] = $config['upload_path'].$fdata['file_name'];
                        $data['client_desc'] = $this->input->post('client_desc',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->save_client_info($data);


                        $sdata = array();
						$sdata['message'] = 'Client data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_client');

	}
}
			public function manage_client(){
		$data = array();
		$data['title'] = 'Manage Clients';
		$data['view_client'] = $this->super_admin_model->show_client_info();
		$this->load->view('admin/manage_client',$data);
	}


	public function unpublished_client($client_id){
		$this->super_admin_model->update_unpublished_client($client_id);
		redirect('super_admin/manage_client');
	}

	public function published_client($client_id){
		$this->super_admin_model->update_published_client($client_id);
		redirect('super_admin/manage_client');
	}


	public function delete_client($client_id){
		$this->super_admin_model->delete_client_info($client_id);
		redirect('super_admin/manage_client');
	}


	public function edit_client($client_id){
		$data = array();
		$data['title'] = 'Edit Client';
		$data['client_info'] = $this->super_admin_model->select_client_info_by_id($client_id);
		$this->load->view('admin/edit_client_form',$data);
	}


	public function update_client(){
		$data = array();
                        $client_id= $this->input->post('client_id',true);
                        $old_image = $this->super_admin_model->select_client_info_by_id($client_id);

                      
                        $data['client_name'] = $this->input->post('client_name',true);

		
		$config['upload_path']          = 'images/clients/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
               

                $fdata = array(); 
                $fdata['file_name'] =  $this->upload->do_upload('client_image');

                if (!$fdata['file_name'])
                {
                       $data['client_image'] = $old_image->client_image;

                }
                else
                {
                		$path = $old_image->client_image;
                		if($path){
						unlink($path);
                        $fdata = $this->upload->data();
                        $data['client_image'] = $config['upload_path'].$fdata['file_name'];
                    }
                    }
                        $data['client_desc'] = $this->input->post('client_desc',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->update_client_info($data,$client_id);

		
					redirect('super_admin/manage_client');

	}
		

public function add_project(){
		$data = array();
		$data['title'] = 'Add projects';
		$this->load->view('admin/add_project',$data);
	}
	
public function save_project(){

		$config['upload_path']          = 'images/projects/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $fdata = array(); 

                if ( ! $this->upload->do_upload('project_image'))
                {
                        $error =$this->upload->display_errors();
                        echo $error;
                        exit();

                       
                }
                else
                {
                        $fdata = $this->upload->data();
                        
                        $data = array();
                        $data['project_name'] = $this->input->post('project_name',true);
                        $data['project_image'] = $config['upload_path'].$fdata['file_name'];
                        $data['project_desc'] = $this->input->post('project_desc',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->save_project_info($data);


                        $sdata = array();
						$sdata['message'] = 'project data save successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('super_admin/add_project');

	}
}
			public function manage_project(){
		$data = array();
		$data['title'] = 'Manage projects';
		$data['view_project'] = $this->super_admin_model->show_project_info();
		$this->load->view('admin/manage_project',$data);
	}


	public function unpublished_project($project_id){
		$this->super_admin_model->update_unpublished_project($project_id);
		redirect('super_admin/manage_project');
	}

	public function published_project($project_id){
		$this->super_admin_model->update_published_project($project_id);
		redirect('super_admin/manage_project');
	}


	public function delete_project($project_id){
		$this->super_admin_model->delete_project_info($project_id);
		redirect('super_admin/manage_project');
	}


	public function edit_project($project_id){
		$data = array();
		$data['title'] = 'Edit project';
		$data['project_info'] = $this->super_admin_model->select_project_info_by_id($project_id);
		$this->load->view('admin/edit_project_form',$data);
	}


	public function update_project(){
		$data = array();
                        $project_id= $this->input->post('project_id',true);
                        $old_image = $this->super_admin_model->select_project_info_by_id($project_id);

                      
                        $data['project_name'] = $this->input->post('project_name',true);

		
		$config['upload_path']          = 'images/projects/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']             = 1000 * 5;
                $config['max_width']            = 1024 * 4;
                $config['max_height']           = 768 * 4;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
               

                $fdata = array(); 
                $fdata['file_name'] =  $this->upload->do_upload('project_image');

                if (!$fdata['file_name'])
                {
                       $data['project_image'] = $old_image->project_image;

                }
                else
                {
                		$path = $old_image->project_image;
                		if($path){
						unlink($path);
                        $fdata = $this->upload->data();
                        $data['project_image'] = $config['upload_path'].$fdata['file_name'];
                    }
                    }
                        $data['project_desc'] = $this->input->post('project_desc',true);
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->super_admin_model->update_project_info($data,$project_id);

		
					redirect('super_admin/manage_project');

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
		$data = array();

                        $data['name'] = $this->input->post('admin_name',true);
                        $data['email'] = $this->input->post('admin_email',true);
                        $data['password'] = md5($this->input->post('admin_password',true));
                        $data['publication_status'] = $this->input->post('publication_status',true);
                        $this->admin_model->update_admin_info($data,$admin_id);

		
					redirect('super_admin/manage_admin');

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