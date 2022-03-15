<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexs extends CI_Controller {
 
	 


	public function index()
	{

		//var_dump(base_url(),site_url());
		//$this->load->view('welcome_message');
		$this->load->view('setup-structure');
	}

	public function setData()
	{

		  $data = $this->input->post();

		 $this->db->insert('structure',$data);
		// var_dump($this->getData());die;


		  $data_list = $this->getData();
		    $new_options = '';
		    foreach ($data_list as $key => $value) {
		    	 $new_options .= "<option value='".$value['id']."'>".$value['name']."</option>";
		    }
		    $parent_option = $new_options;





		 echo json_encode(['data_list'=>$data_list,'parent_option'=> $parent_option]);

	}

	public function getData()
	{

		 		
		return  $this->db->get('structure')->result_array();
		 

	}
}


 