	$config = array(
							  'protocol' => 'smtp',
							  'smtp_host' => 'ssl://smtp.googlemail.com',
							  'smtp_port' => 465,
							  'smtp_user' => 'dfhf@gmail.com',
							  'smtp_pass' => 'sdfgbjhbjrdsgtb',
							);

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			$this->email->from('sdgfsg@sdfgsg.com', 'Mr. Test');
			$this->email->to('sdfgsfg.sdfg@sdg.com');

			$this->email->subject(' My mail through codeigniter from localhost ');
			$this->email->message('Hello World…');

			if (!$this->email->send())
			show_error($this->email->print_debugger());
			else
			echo 'Your e-mail has been sent!';
