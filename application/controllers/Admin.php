<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$data['pro']=$this->product_model->getdata();
		$this->load->view('home', $data);

	}

	//  public function insertproduct($data){
	//  	$data =$this->product_model->insertdata($data);

	//  }

	public function addForm(){
		$this->load->view('addData');
	}


	public function add()
	{
		$this->validations();
		if($this->form_validation->run() )
		{	
			$this->load->model('product_model');
			$data['category'] = $this->input->post('category');
			$data['name'] = $this->input->post('name');
			$data['cost'] = $this->input->post('cost');
			$data['price'] = $this->input->post('price');
			$data['status'] = $this->input->post('status');
			$this->product_model->insertdata($data);			
			redirect('index');
		}
		else
		{			
			$data['post'] = $this->input->post();			
			$data['selectedCategory'] = $data['post']['catogery'];
			$data['selectedCategory'] = $data['post']['status'];
    		return $this->load->view('addData', $data);		
			
		}	
	}
		
		//update or edit data

		public function editdata($id){
		$data['singleproduct'] = $this->product_model->getupdateproduct($id);			
		$this->load->view('update', $data);	
}

		public function updateproduct($id){
				if($_POST){
					$this->product_model->updatedata([
		
						'category' => $this->input->post('catogery'),
						'name' => $this->input->post('name'),
						'cost' => $this->input->post('cost'),
						'price' => $this->input->post('price'),
						'status' => $this->input->post('status'),
	
						], $id);
					redirect('index');
				}
		}

		public function deletedata($id) {
			$this->load->model('product_model');
			 return $this->product_model->removedata($id);			 			
			 $this->index();
			}
			

			public function validations(){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('category', 'Category', 'trim|required');
				$this->form_validation->set_rules('name', 'Product Name', 'trim|required');
				$this->form_validation->set_rules('cost', 'Cost', 'trim|required');
				$this->form_validation->set_rules('price', 'Price', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');
				$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			}
}