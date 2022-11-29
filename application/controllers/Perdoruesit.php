<?php
	class Perdoruesit extends CI_Controller{
		public function index(){
			$data['title'] = 'Perdoruesit';
			$s=3;
			$data['perdoruesit'] = $this->perdoruesit_model->get_perdorues($s);

			$this->load->view('templates/header');
			$this->load->view('perdoruesit/index', $data);
			$this->load->view('templates/footer');
		}
		public function indexB(){
			$data['title'] = 'Borgjet';
			$data['borgjet'] = $this->perdoruesit_model->get_borgje();

			$this->load->view('templates/header');
			$this->load->view('perdoruesit/indexB', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
			$data['title'] = 'Shto Perdorues';
			$this->form_validation->set_rules('fullname','fullname','required');
			if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header');
			$this->load->view('perdoruesit/create', $data);
			$this->load->view('templates/footer');
			}
			else{
				$this->perdoruesit_model->create_user();
				
				// Set message
				$this->session->set_flashdata('user_created', 'User has been created');
				redirect('perdoruesit');
			}
			
		}
		public function register(){
			$data['title'] = 'Shto Perdorues';
			$this->form_validation->set_rules('fullname','fullname','required');
			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header', $data);
			$this->load->view('perdoruesit/register', $data);
			$this->load->view('templates/footer');
			}
			else{
				$this->perdoruesit_model->create_user();
				// Set message
				$this->session->set_flashdata('user_registered', 'Jeni regjistruar me sukses.');
				redirect('login');
			}
			
		}
		public function borgj(){
			$data['title'] = 'Apliko per Borgj';
			$this->form_validation->set_rules('arsyeja','shuma','required');
			if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header');
			$this->load->view('perdoruesit/borgj', $data);
			$this->load->view('templates/footer');
			}
			else{
				$this->perdoruesit_model->apply_borgj();
				// Set message
				$this->session->set_flashdata('user_created', 'Aplimi u dergua');
				redirect('pages/view');
			}
			
		}
		public function delete($id){
			$this->perdoruesit_model->delete_user($id);
			$this->session->set_flashdata('user_deleted', 'User has been Deleted!');
			redirect('perdoruesit');
		}
		public function delete_borgj($id){
			$this->perdoruesit_model->delete_borgje($id);
			$this->session->set_flashdata('user_deleted', 'Kerkesa per borgj u fshij!');
			redirect('perdoruesit/indexB');
		}
		public function edit($id){
			$data['perdoruesit'] = $this->perdoruesit_model->get_perdorues1($id);
			$data['title'] = 'Edit Perdorues';
			$this->load->view('templates/header');
			$this->load->view('perdoruesit/edit', $data);
			$this->load->view('templates/footer');
		}
		public function editB($id){
			$data['borgjet'] = $this->perdoruesit_model->get_borgje1($id);
			$data['title'] = 'Edit Kerkes Borgji';
			$this->load->view('templates/header');
			$this->load->view('perdoruesit/editB', $data);
			$this->load->view('templates/footer');
		}
		public function update(){
			$this->perdoruesit_model->update_user();
			$this->session->set_flashdata('user_updated', 'User has been Updated!');
			redirect('perdoruesit');
	 	}
	 	public function updateB(){
			$this->perdoruesit_model->update_borgj();
			$this->session->set_flashdata('user_updated', 'Borgj u Aprovua!');
			redirect('perdoruesit/indexB');
	 	}
	 	
	}