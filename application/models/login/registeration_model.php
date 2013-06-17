<?php

	class Registeration_Model extends CI_Model
		{
			function register()
			{
					//$this->load->library('encrypt');

					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$email = $_POST['email'];
					$password = $_POST['password'];

					//$password = $this->encrypt->encode($password);

					if($first_name != "")
					{
						$data = array(
						'first_name' => $first_name ,
						'last_name' => $last_name ,
						'email' => $email,
						'password' => $password
						);

						$this->db->insert('CI_user', $data); 
					}

					$query = $this->db->get_where('CI_user', array('email' => $email, 'password' => $password));
					if($query->num_rows() > 0)
					{
						return $row = $query->row(); 
					}
					else
					{
						return "Not Available";
					}
			}

		}

?>