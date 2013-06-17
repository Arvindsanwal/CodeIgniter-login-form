<?php

	class Checkuser_Model extends CI_Model
		{
			function checkUser()
			{
					$email = $_POST['email'];
					$pass = $_POST['password'];
					$query = $this->db->get_where('CI_user', array('email' => $email, 'password' => $pass));
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