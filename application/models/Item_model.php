<?php 
class Item_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_items(){
		if(!empty($this->input->get("search"))){
			$this->db->like('title',$this->input->get("search"));
			$this->db->or_like('description',$this->input->get("search"));
		}
		$query = $this->db->get("items");
		return $query->result();
	}

	public function create_items(){
		$data= array(
			'title'=> $this->input->post('title'),
			'description' => $this->input->post('description')
		);
		return $this->db->insert('items', $data);
	}
	public function find_item($id){
		return $this->db->get_where('items', array('id'=>$id))->row();
	}
}

 ?>