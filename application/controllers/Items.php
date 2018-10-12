<?php 

class Items extends CI_Controller{
	public function __construct(){
		parent::__construct();


	}
	
	public function index(){
		$data['data'] = $this->item_model->get_items();
		$this->load->view('templates/header');
		$this->load->view('items/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id){
		$item = $this->item_model->find_item($id);
		$this->load->view('templates/header');
		$this->load->view('items/view', array('item'=>$item));
		$this->load->view('templates/footer');
	}

	public function create(){
		$this->form_validation->set_rules('title','Title', 'required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('errors', validation_errors());

			$this->load->view('templates/header');
			$this->load->view('items/create');
			$this->load->view('templates/footer');
			
		}else{
			$this->item_model->insert_items();
			redirect(base_url('items'));
		}
	}


}

 ?>