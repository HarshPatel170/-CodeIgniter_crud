<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {


	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->model('EmployeeModel');

		$data['employee'] = $this->EmployeeModel->getemployee();

		$this->load->view('frontend/employee',$data);
		$this->load->view('frontend/footer');
	}

	public function create()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/create');
		$this->load->view('frontend/footer');
	}

	public function store()
	{
		
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('Phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() )
		{
			$data = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'Phone' => $this->input->post('Phone'),
				'email' => $this->input->post('email')
			];

			$this->load->model('EmployeeModel');
			$this->EmployeeModel->insertemployee($data);
			redirect(base_url('employee'));
		}
		else
		{
			$this->create();
		}
	}

	public function edit($id)
	{
		$this->load->view('frontend/header');

		$this->load->model('EmployeeModel');
		$data['employee'] = $this->EmployeeModel->editEmployee($id);

		$this->load->view('frontend/edit', $data);
		$this->load->view('frontend/footer');
	}

	/// -----------update----------
	public function update($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('Phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() )
		{
			$data = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'Phone' => $this->input->post('Phone'),
				'email' => $this->input->post('email')
			];
			
			$this->load->model('EmployeeModel');
			$this->EmployeeModel->updateEmployee($data, $id);
			redirect(base_url('employee'));
		}
		else
		{
			$this->edit($id);
		}
	}

	// -----------------delete-----
	public function delete($id)
	{
		$this->load->model('EmployeeModel');
		$this->EmployeeModel->deleteEmployee($id);
		redirect(base_url('employee'));
	}
}