<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexs extends CI_Controller {
 
	 


	public function index()
	{
 		
		 
		 
 		$data_list['menus'] =   $this->getMenus();
 		/*echo "<pre>";
 		var_dump($data_list['menus']);die;*/
		$data_list['parents'] = $this->getData();
		$this->load->view('setup-structure',$data_list);
	}

	public function getMenus(){
		$data = $this->getParentChildStruture();
		$all_menus = [];
		$all_menus = $this->getChildMenus($data,0);
		return $all_menus;
	}

	public function getChildMenus($data,$parent_id){
		$menus = [];
		$menus_all = [];
			if (!empty($data[$parent_id])) {
			 		$menus = $data[$parent_id];	

			 		foreach ($menus as $key => $m) {
			 			$s = [];
			 			$s = $m;
 
			 			$s['sub_menu'] = $this->getChildMenus($data,$m['id']);
			 			 $menus_all[]  = $s;
			 		}
			 }else{
			 	 $menus_all = [];
			 }
		 
			 return $menus_all;
	}

	 
	 

	public function getParentChildStruture(){
		$data =   $this->db->query('SELECT id,name,parent_id FROM `structure` ;')->result_array();
		$menus = [];
		foreach ($data	 as $key => $value) {
			 $menus[$value['parent_id']][] =  $value;
			
		}
		 return $menus;
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


 