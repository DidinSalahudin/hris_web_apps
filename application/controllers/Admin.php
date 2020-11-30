<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();           
    }

    public function Login(){
    	$this->load->view('Admin/Login/Login_admin_view');
    }

    public function validation_login()
	{		
		// die(print_r($_POST));
		$email    = $this->input->post('email');
		$password = $this->input->post('password');

		$sqlCek = $this->db->query("SELECT * FROM admin WHERE admin_email = '".$email."' ");
		if ($sqlCek->num_rows() > 0) {
			$rowSql = $sqlCek->row_array();
			if(password_verify($password, $rowSql['admin_password'])) {

				// if ($rowSql['employee_foto_avatar'] != '') {
				// 	$foto_avatar = $rowSql['employee_foto_avatar'];
				// } else {
					$foto_avatar = 'assets/image/foto_profil/Foto_Profil.jpg';
				// }

				$newdata = array(
                    'user_id'                => $rowSql['admin_id'],
                    'user_code'              => $rowSql['admin_code'],
                    'user_first_name'        => $rowSql['admin_username'],
                    'user_last_name'         => $rowSql['admin_name'],
                    'user_email'             => $rowSql['admin_email'],
                    'user_department_id'     => 'Sistem',
                    'user_job_position'      => 'Sistem',
                    'user_job_level'         => 'Sistem',
                    'user_employment_status' => 'Sistem',
					'user_branch_name'       => 'Sistem',
					'user_foto_avatar'       => $foto_avatar,
                    'user_access'            => 1,
                    'user_login'             => TRUE
				);
				// die(print_r($newdata));
				$this->session->set_userdata($newdata);

				$response = array(
					"status" 	=> "TRUE",
					"message"	=> "Success"
				);
			} else {
				$response = array(
					"status" 	=> "FALSE",
					"message"	=> "Password Yang Anda Masukan Salah"
				);
			}
		} else {
			$response = array(
				"status" 	=> "FALSE",
				"message"	=> "Email Yang Anda Masukan Salah"
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
    
    public function injectUser(){
        $insertData = array(
            "admin_id"       => 1,
            "admin_email"    => "admin@admin.com",
            "admin_username" => 'Administrator',
            "admin_password" => password_hash('212',PASSWORD_DEFAULT)
        );
        if ($this->db->insert('admin', $insertData)) {
            echo "SUKSES";
        } else {
            echo "GAGAL";
        }
    }
}
