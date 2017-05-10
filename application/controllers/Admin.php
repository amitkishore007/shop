<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Admin controller to perform the operation
*/
class Admin extends CI_Controller
{
	

	public function __construct() {

		parent::__construct();
		
		if (!$this->session->userdata('is_logged_in')) {
			return redirect('admin_login');
		}
		

		$this->load->model('adminModel');

	}



	public function dashboard() {

		$data['main_content'] = 'admin/dashboard';

		$this->load->view('admin_includes/template',$data);
		
		
	}

	public function create_category() {

		$data['main_content'] = 'admin/create_category';

		$this->load->view('admin_includes/template',$data);			

	}

	public function store_category() {


		if ($this->input->post('category')) {

			unset($_POST['category']);

			$result = $this->adminModel->create_category();

			echo json_encode($result);

			
		} else {

			$this->dashboard();
		}

	}

}