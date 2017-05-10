<?php 

/**
* 
*/
class AdminModel extends CI_Model
{
	

	public function check_login($info) {

		$info  = $this->input->post();

		$info['user_type'] = 'superadmin';
	
		$this->load->library('form_validation');

		$output = array();
		
		$output['status'] = "";
		
		$output['msg']    = "";
				

		if ($this->form_validation->run('login_form_validation')==FALSE) {
				
			$output['status'] = "false";
			$output['msg']    = "Email/password did not matched !";

		} else {

		
			$info['password'] = md5($info['password']);
			
			$result = $this->db->where($info)->get('users');

			if ($result->num_rows()) {
					
				$admin  = $result->row();
				$data = array(
					'admin_id'=>$admin->id,
					'admin_email'=>$admin->email,
					'role'=>$admin->user_type,
					'is_logged_in'=>true
					);
				$this->session->set_userdata($data);
				
				$output['status'] = "true";
				
				$output['msg']    = "success";

			} else {

				$output['status'] = "false";
				
				$output['msg']          = "Admin not found";
				
			}


		}

		return $output;

	}


	public function create_category() {

		$info  = $this->input->post();

		
	
		$this->load->library('form_validation');

			$output = array();
		
			$output['status']  = "";
			$output['name']    = "";
			$output['parent']  = "";
			$output['desc']    = "";
					

		if ($this->form_validation->run('category_form_validation')==FALSE) {
			
			$this->form_validation->set_error_delimiters('', '');
			$output['status']  = "false";
			$output['name']    = form_error('name');
			$output['parent']  = form_error('parent_id');
			$output['desc']    = form_error('description');
			$output['msg']     = 'error occured';

		} else {

				


			$this->db->insert('category',$info);

			if ($this->db->affected_rows()) {
					
				
				$output['status'] = "true";	
				

			} else {

				$output['status'] = "false";
				
				$output['msg']   = "Category could not be created, please try later";
				
			}

				$output['name']    = '';
				$output['parent']  = '';
				$output['desc']    = '';


		}

		return $output;


	}







}