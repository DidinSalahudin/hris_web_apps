<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login/Login_view');
	}

	public function validation_login()
	{		
		// die(print_r($_POST));
		$email    = $this->input->post('email');
		$password = $this->input->post('password');

		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_email = '".$email."' ");
		if ($sqlCek->num_rows() > 0) {
			$rowSql = $sqlCek->row_array();
			if(password_verify($password, $rowSql['employee_password'])) {
				
				$sqlOrganization = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$rowSql['employee_department_id']."' ");
				if ($sqlOrganization->num_rows() > 0) {
					$organization_name = $sqlOrganization->row_array()['master_department_name'];
				} else {
					$organization_name = '';
				}

				$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$rowSql['employee_job_position']."' ");
				if ($sqlJobPosition->num_rows() > 0) {
					$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
				} else {
					$job_position = '';
				}

				$sqlJobLevel = $this->db->query("SELECT master_job_level_name FROM master_job_level WHERE master_job_level_id  = '".$rowSql['employee_job_level']."' ");
				if ($sqlJobLevel->num_rows() > 0) {
					$job_level = $sqlJobLevel->row_array()['master_job_level_name'];
				} else {
					$job_level = '';
				}

				if ($rowSql['employee_foto_avatar'] != '') {
					$foto_avatar = $rowSql['employee_foto_avatar'];
				} else {
					$foto_avatar = 'assets/image/foto_profil/Foto_Profil.jpg';
				}
				
				$newdata = array(
					'user_id'                => $rowSql['employee_id'],
					'user_code'              => $rowSql['employee_code'],
					'user_first_name'        => $rowSql['employee_first_name'],
					'user_last_name'         => $rowSql['employee_last_name'],
					'user_email'             => $rowSql['employee_email'],
					'user_department_id'     => $organization_name,
					'user_job_position'      => $job_position,
					'user_job_level'         => $job_level,
					'user_employment_status' => $rowSql['employee_employment_status'],
					'user_branch_name'       => $rowSql['employee_branch_name'],
					'user_foto_avatar'       => $foto_avatar,
					'user_access'            => 0,
					'user_login'             => TRUE
				);
				// die(print_r($newdata));
				$this->session->set_userdata($newdata);

				if ($rowSql['employee_password_status'] == 1) {
					$response = array(
						"status"          => "TRUE",
						"status_password" => 1,
						"message"         => "Silahkan Setel Ulang Password Anda"
					);
				} else {
					$response = array(
						"status"          => "TRUE",
						"status_password" => 2,
						"message"         => "Login Berhasil"
					);
				}

			} else {
				$response = array(
					"status"          => "FALSE",
					"status_password" => 0,
					"message"         => "Password Yang Anda Masukan Salah"
				);
			}
		} else {
			$response = array(
				"status"          => "FALSE",
				"status_password" => 0,
				"message"         => "Email Yang Anda Masukan Salah"
			);
		}
		
		// die(print_r($arrayName));
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
		
	}

	public function setel_ulang_password()
	{
		if ($_GET) {
			$email = base64_decode($this->input->get('u'));
		} else {
			$email = '';
		}

		$data = array(
			'email' => $email
		);

		$this->load->view('Login/Setel_ulang_password', $data);
	}

	public function simpan_setel_ulang_password()
	{	
		// die(print_r);
		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_email = '".$this->input->post('email')."' ");
		if ($sqlCek->num_rows() > 0) {
			$rowSql = $sqlCek->row_array();
			
			if ($rowSql['employee_password_status'] != 2) {
				$sqlOrganization = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$rowSql['employee_department_id']."' ");
				if ($sqlOrganization->num_rows() > 0) {
					$organization_name = $sqlOrganization->row_array()['master_department_name'];
				} else {
					$organization_name = '';
				}
	
				$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$rowSql['employee_job_position']."' ");
				if ($sqlJobPosition->num_rows() > 0) {
					$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
				} else {
					$job_position = '';
				}
	
				$sqlJobLevel = $this->db->query("SELECT master_job_level_name FROM master_job_level WHERE master_job_level_id  = '".$rowSql['employee_job_level']."' ");
				if ($sqlJobLevel->num_rows() > 0) {
					$job_level = $sqlJobLevel->row_array()['master_job_level_name'];
				} else {
					$job_level = '';
				}
	
				if ($rowSql['employee_foto_avatar'] != '') {
					$foto_avatar = $rowSql['employee_foto_avatar'];
				} else {
					$foto_avatar = 'assets/image/foto_profil/Foto_Profil.jpg';
				}
	
				$dataInsert = array(
					'employee_password'        => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'employee_password_status' => 2
				);
				if ($this->db->update('employee', $dataInsert, ['employee_email' => $rowSql['employee_email']])) {
					$newdata = array(
						'user_id'                => $rowSql['employee_id'],
						'user_code'              => $rowSql['employee_code'],
						'user_first_name'        => $rowSql['employee_first_name'],
						'user_last_name'         => $rowSql['employee_last_name'],
						'user_email'             => $rowSql['employee_email'],
						'user_department_id'     => $organization_name,
						'user_job_position'      => $job_position,
						'user_job_level'         => $job_level,
						'user_employment_status' => $rowSql['employee_employment_status'],
						'user_branch_name'       => $rowSql['employee_branch_name'],
						'user_foto_avatar'       => $foto_avatar,
						'user_access'            => 0,
						'user_login'             => TRUE
					);
					// die(print_r($newdata));
					$this->session->set_userdata($newdata);
	
					$response = array(
						"status"          => "TRUE",
						"message"         => "Setel ulang password berhasil"
					);
				} else {
					$response = array(
						"status"          => "FALSE",
						"message"         => "Setel ulang password gagal"
					);
				}
			} else {
				$response = array(
					"status"          => "FALSE",
					"message"         => "Anda sudah setel ulang password anda, silahkan pilih lupa password di halaman login untuk setel ulang"
				);
			}
			
		} else {
			$response = array(
				"status"          => "FALSE",
				"message"         => "Email karyawan tidak ditemukan"
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
		// die(print_r($dataInsert));
	}

	public function kirim_lupa_password()
	{
		$emailTo = $this->input->post('email');
		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_email = '".$emailTo."' ");
		if ($sqlCek->num_rows() > 0) {
			$encodeEmail = base64_encode($emailTo);
			// die(print_r($encodeEmail));
			$bodyEmail = 'Silahkan klik link di bawah ini untuk mengganti password anda<br>'.base_url().'login/setel_ulang_password?u='.$encodeEmail;
			// die(print_r($bodyEmail));
			$ci = get_instance();
			$ci->load->library('email');
			$config['protocol'] 	= "smtp";
			$config['smtp_host'] 	= "ssl://smtp.gmail.com";
			$config['smtp_port'] 	= "465";
			$config['smtp_user'] 	= "salahu11162014@nusamandiri.ac.id";
			$config['smtp_pass'] 	= "salahudindidin23121995";
			$config['charset'] 		= "utf-8";
			$config['mailtype'] 	= "html";
			$config['newline'] 		= "\r\n";
			$ci->email->initialize($config);
			$ci->email->from('salahu11162014@nusamandiri.ac.id', 'HRIS Walletku');
			$list = array($emailTo);
			// $list = array('didinsalahudin@gmail.com');
			$ci->email->to($list);
			$ci->email->subject('Setel Ulang Password');
			$ci->email->message($bodyEmail);
			// $this->email->send();
			if ($this->email->send()) {
				$response = array(
					"status"          => "TRUE",
					"message"         => "Sukses! email berhasil dikirim."
				);

				$this->db->update('employee', ['employee_password_status' => 1], ['employee_email' => $emailTo]);
				// echo 'Sukses! email berhasil dikirim.';
			} else {
				$response = array(
					"status"          => "FALSE",
					"message"         => $this->email->print_debugger()
				);
				// echo 'Error! email tidak dapat dikirim.';
				// show_error($this->email->print_debugger());  
			}
		} else {
			$response = array(
				"status"          => "FALSE",
				"message"         => "Email yang anda masukan tidak ditemukan"
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}
}
