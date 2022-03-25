<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {
 
	 
	public function index()
	{
 	 
	}

	public function task4(){

		/*
			*Task 4:-*
			Write a code for Refer And Earn. User can register and enter referral 
			code. After successfull registration New User will get 10 points and 
			Invite User will get 20 Points in his wallet.

		*/

		$this->load->view('task/task4');

	}

	public function insertUsers(){


		if (!empty($_POST)) {
			 

			// var_dump($_POST);DIE;


			 // Suppose user Referral code which is shared by user1 is "" and user_id = 1

			  $referral_code = "AVANNISH";
			  $referral_user_id = 1;
			 
			 // step 1 : 
			/*CHeck Validation of input Fields*/



			if($validation == true){

				// step 2: Insert data into users table 

					// insert into table where 

				$data = $this->inupt->post();
				$referral_code_submitted = $this->input->post('referral_code');
				$last_id = $this->db->insert('table_name',$data);

				$last_insert_id = $this->db->insert_id();

				if ($referral_code_submitted == $referral_code ) {
					 	
					$sql_for_register_user = "update table_name set point = 10 where user_id=".$last_id;
					$this->db->query($sql_for_register_user);


					$sql_for_register_user = "update table_name set point = point+20 where user_id=".$referral_user_id;
					$this->db->query($sql_for_register_user);


				}

			}else{
				// validation  message
			}

			redirect('task/task4');

		}
	}

	
}


 