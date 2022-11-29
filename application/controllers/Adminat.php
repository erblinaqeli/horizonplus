<?php
	class Adminat extends CI_Controller{
		public function index(){
			$data['title'] = 'Adminat';
			$s=2;
			$data['adminat'] = $this->adminat_model->get_admin($s);

			$this->load->view('templates/header');
			$this->load->view('adminat/index', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
			$data['title'] = 'Shto Admin';
			$this->form_validation->set_rules('fullname','fullname','required');
			if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header');
			$this->load->view('adminat/create', $data);
			$this->load->view('templates/footer');
			}
			else{
				$this->adminat_model->create_user();
				// Set message
				$this->session->set_flashdata('user_created', 'Admin has been created');
				redirect('adminat');
			}
			
		}
		public function delete($id){
			$this->adminat_model->delete_user($id);
			$this->session->set_flashdata('user_deleted', 'Admin has been Deleted!');
			redirect('adminat');
		}
		public function edit($id){
			$data['adminat'] = $this->adminat_model->get_perdorues1($id);
			$data['title'] = 'Edit Perdorues';
			$this->load->view('templates/header');
			$this->load->view('adminat/edit', $data);
			$this->load->view('templates/footer');
		}
		public function update(){
			$this->adminat_model->update_user();
			$this->session->set_flashdata('user_updated', 'Admin has been Updated!');
			redirect('adminat');
	 	}
	}