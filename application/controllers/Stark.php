<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stark extends CI_Controller {
 
	 
	public function index()
	{
 	 	$data['department'] = $this->getDepartments();
 	 	$data['Records'] = $this->getRecords();
		$this->load->view('stark/assignment',$data);
	}

	public function getDepartments(){
		return $this->db->select('*')->get('department')->result_array();
	}

	public function getRecords(){
		return $this->db->query('select e.*,d.name as department,if(gender ="F","Female","Male") as gender from employee e left join department d on d.id = e.dept_id')->result_array();
	}

	public function getRecordsByID($id){
		return $this->db->query('select * from employee where id = '.$id)->row_array();
	}

	public function edit($id){



		$data['department'] = $this->getDepartments();
		$data['edit_record'] = $this->getRecordsByID($id);

		 $data['edit_record']['hobbies'] = explode(',',$data['edit_record']['hobbies']);

 	 	 	//var_dump($data['hobbies']);
		$this->load->view('stark/edit',$data);
		 
	}

	public function add(){
	 	$data['department'] = $this->getDepartments();
 	 	 
		$this->load->view('stark/add',$data);
	}

	public function insert(){
	 	$data = $this->input->post();
	 	$data['hobbies'] = implode(',',$data['hobbies']);
	 	 //var_dump($data);die;
 	 	 $this->db->insert('employee',$data);
		 
 	 	 redirect(site_url('stark'));
	}


public function update(){
	 	
	 	$data = $this->input->post();
	 	$id = $data['id'];
	 	unset($data['id']);
	 	$data['hobbies'] = implode(',',$data['hobbies']);
	 	 $this->db->where('id',$id);
 	 	 $this->db->update('employee',$data);
		 
 	 	 redirect(site_url('stark'));
	}




public function delete($id){
	 	
	 	 
	 	 $this->db->where('id',$id);
 	 	 $this->db->delete('employee');
		 
 	 	 redirect(site_url('stark'));
	}


	 
	 
}


 