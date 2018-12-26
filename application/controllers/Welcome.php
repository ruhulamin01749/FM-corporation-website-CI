<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
*	- or -+
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['view_slider'] = $this->welcome_model->view_slider_image_info();
		$data['view_client_with_limit'] = $this->welcome_model->view_client_info_with_limit();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_services_with_limit'] = $this->welcome_model->view_services_info_with_limit();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['view_project_with_limit'] = $this->welcome_model->view_project_info_with_limit();
		$data['welcome'] = $this->welcome_model->view_welcome_info();
		$data['title'] = 'Home';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '1';
		$data['client'] = '1';
		$data['project'] = '1';
		$this->load->view('master',$data);
	}
	
	public function about()
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_client'] = $this->welcome_model->view_client_info();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['title'] = 'About';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '1';
		$data['client'] = '1';
		$data['project'] = '1';
		$this->load->view('about',$data);
	}
	public function contact()
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['title'] = 'Contact';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '';
		$data['client'] = '';
		$data['project'] = '';
		$this->load->view('contact',$data);
	}
public function services()
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_client'] = $this->welcome_model->view_client_info();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['title'] = 'Service';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '';
		$data['client'] = '1';
		$data['project'] = '1';
		$this->load->view('services',$data);
	}
	public function service_detail($service_id)
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_service_detail'] = $this->welcome_model->view_service_detail_info($service_id);
		$data['view_client'] = $this->welcome_model->view_client_info();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['title'] = 'Service detail';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '1';
		$data['client'] = '1';
		$data['project'] = '1';
		$this->load->view('service_detail',$data);
	}
	public function client()
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_client'] = $this->welcome_model->view_client_info();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['title'] = 'Client';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '1';
		$data['client'] = '';
		$data['project'] = '1';
		$this->load->view('client',$data);
	}
	public function project()
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_client'] = $this->welcome_model->view_client_info();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['title'] = 'Project';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '1';
		$data['client'] = '1';
		$data['project'] = '';
		$this->load->view('project',$data);
	}

	public function project_detail($project_id)
	{
		$data = array();
		$data['view_services'] = $this->welcome_model->view_service_menu_info();
		$data['view_project_detail'] = $this->welcome_model->view_project_detail_info($project_id);
		$data['view_client'] = $this->welcome_model->view_client_info();
		$data['view_project'] = $this->welcome_model->view_project_info();
		$data['title'] = 'Service detail';
		$data['logo'] = $this->welcome_model->view_logo_info();
		$data['services'] = '1';
		$data['client'] = '1';
		$data['project'] = '1';
		$this->load->view('project_detail',$data);
	}

	public function send_mail(){
		 $this->load->library('email');

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $subject = $this->input->post('subject');
   $message= $this->input->post('message');


    $this->email->from($email, $name);
    $this->email->to('ruhul11bd@gmail.com');

    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send())
    {
        
        $sdata = array();
						$sdata['message'] = 'Mesage send successfully !';
						$this->session->set_userdata($sdata);

		
					redirect('welcome/contact');
    }
   else
   {
               $sdata['message'] = 'Mesage not sending  !';
						$this->session->set_userdata($sdata);

		
					redirect('welcome/contact');
   }
	}
	

}

