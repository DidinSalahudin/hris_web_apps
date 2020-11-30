<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => 'Karyawan', 
        );
		$this->load->view('Perusahaan/Perusahaan_view', $data);
	}

    public function karyawan_ambil_data()
    {
        $sql = $this->db->query("SELECT employee_id, employee_first_name, employee_last_name, employee_email, employee_department_id, employee_job_position, employee_job_level, employee_employment_status, employee_branch_name FROM employee");
        if ($sql->num_rows() > 0) {
            foreach ($sql->result_array() as $rowEmployee) {		

				$sqlOrganization = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$rowEmployee['employee_department_id']."' ");
				if ($sqlOrganization->num_rows() > 0) {
					$organization_name = $sqlOrganization->row_array()['master_department_name'];
				} else {
					$organization_name = '';
				}

				$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$rowEmployee['employee_job_position']."' ");
				if ($sqlJobPosition->num_rows() > 0) {
					$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
				} else {
					$job_position = '';
				}

				$sqlJobLevel = $this->db->query("SELECT master_job_level_name FROM master_job_level WHERE master_job_level_id  = '".$rowEmployee['employee_job_level']."' ");
				if ($sqlJobLevel->num_rows() > 0) {
					$job_level = $sqlJobLevel->row_array()['master_job_level_name'];
				} else {
					$job_level = '';
				}
                $dataArray[] = array(
                    'employee_id'                => $rowEmployee['employee_id'],
					'employee_first_name'        => $rowEmployee['employee_first_name'],
					'employee_last_name'         => $rowEmployee['employee_last_name'],
					'employee_email'             => $rowEmployee['employee_email'],
					'employee_department_id'     => $organization_name,
					'employee_job_position'      => $job_position,
					'employee_job_level'         => $job_level,
					'employee_employment_status' => ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent',
					'employee_branch_name'       => ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs',
                );
            }
        } else {
            $dataArray = array(
                'employee_id'                => '',
				'employee_first_name'        => '',
				'employee_last_name'         => '',
				'employee_email'             => '',
				'employee_department_id'     => '',
				'employee_job_position'      => '',
				'employee_job_level'         => '',
				'employee_employment_status' => '',
				'employee_branch_name'       => '',
            );
        }
        // die(print_r($dataArray));
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($dataArray))
            ->_display();
        exit;
    }

    public function karyawan_tambah_data()
    {
        // die(print_r($_FILES));
        // $password = mt_rand(100000,1000000);
		$password = "123456";

		$data_employee = array(
			'employee_first_name' 			=> $this->input->post('PD_First_Name'),
			'employee_code'					=> $this->cek_kode_karyawan(),
			'employee_last_name'			=> $this->input->post('PD_Last_Name'),
			'employee_email' 				=> $this->input->post('PD_Email'),
			'employee_password' 			=> password_hash($password,PASSWORD_DEFAULT),
			'employee_password_status' 		=> 1,
			'employee_address' 				=> $this->input->post('PD_Address'),
			'employee_place_of_birth' 		=> $this->input->post('PD_Place_Of_Birth'),
			'employee_date_of_birth' 		=> date('Y-m-d', strtotime($this->input->post('PD_Birth_Date'))),
			'employee_mobile_phone_number' 	=> $this->input->post('PD_Mobile_phone'),
			'employee_home_phone_number' 	=> $this->input->post('PD_Phone'),
			'employee_gender' 				=> $this->input->post('PD_Gender'),
			'employee_marital_status' 		=> $this->input->post('PD_Martial_Status'),
			'employee_religion' 			=> $this->input->post('PD_Religion'),
			'employee_department_id' 	    => $this->input->post('ED_Departmen'),
			'employee_job_position' 		=> $this->input->post('ED_Job_Position'),
			'employee_job_level' 			=> $this->input->post('ED_Job_Level'),
			'employee_employment_status' 	=> $this->input->post('ED_Employment_Status'),
			'employee_join_start_date' 		=> date('Y-m-d H:i:s', strtotime($this->input->post('ED_Join_Date'))),
			'employee_branch_name' 			=> $this->input->post('ED_Branch'),
			'employee_blood_type' 			=> $this->input->post('PD_Blood_Type'),
			'employee_postal_code' 			=> $this->input->post('PD_Postal_Code'),
			// 'employee_approval_line' 		=> $this->input->post('ED_Approval_Line'),
			'employee_no_id_card' 			=> $this->input->post('PD_ID_Card'),
			'employee_approval_1_id' 	    => $this->input->post('ED_Approval_Line_1'),
			'employee_approval_2_id' 	    => $this->input->post('ED_Approval_Line_2'),
			'employee_approval_3_id' 	    => $this->input->post('ED_Approval_Line_3'),
			'employee_create_date' 			=> date('Y-m-d H:i:s')
        );
        // die(print_r($data_employee));

		if ($this->db->insert('employee', $data_employee)) {

            $id_employee =  $this->db->insert_id();
			
			if ($this->input->post('FD_Full_Name')) {
				foreach ($this->input->post('FD_Full_Name') as $key => $value) {
					$data_family = array(
						'employee_id' 					=> $id_employee,
						'employee_family_name' 			=> $this->input->post('FD_Full_Name')[$key],
						'employee_family_relationship' 	=> $this->input->post('FD_Relationship')[$key],
						'employee_family_age' 			=> $this->input->post('FD_Age')[$key],
						'employee_family_gender' 		=> $this->input->post('FD_Gender')[$key],
						'employee_family_job' 			=> $this->input->post('FD_Job')[$key],
						'employee_family_religion' 		=> $this->input->post('FD_Religion')[$key], 
					);
					$this->db->insert('employee_family', $data_family);
				}
			}

			if ($this->input->post('EC_Name')) {
				foreach ($this->input->post('EC_Name') as $key => $value) {
					$data_emergency_contact = array(
						'employee_id' 								=> $id_employee,
						'employee_emergency_contact_name' 			=> $this->input->post('EC_Name')[$key],
						'employee_emergency_contact_relationship' 	=> $this->input->post('EC_Relationship')[$key],
						'employee_emergency_contact_phone_number' 	=> $this->input->post('EC_Phone_Number')[$key],
					);
					$this->db->insert('employee_emergency_contact', $data_emergency_contact);
				}
			}

			if ($this->input->post('EH_Institute_Name')) {
				foreach ($this->input->post('EH_Institute_Name') as $key => $value) {
					$data_education = array(
						'employee_id' 							=> $id_employee,
						'employee_education_institution_name' 	=> $this->input->post('EH_Institute_Name')[$key],
						'employee_education_majors' 			=> $this->input->post('EH_Majors')[$key],
						'employee_education_start_year' 		=> $this->input->post('EH_Start_Years')[$key],
						'employee_education_end_year' 			=> $this->input->post('EH_End_Years')[$key],
						'employee_education_score' 				=> $this->input->post('EH_Score')[$key],
					);
					$this->db->insert('employee_education', $data_education);
				}
            }

			$data_payroll = array(
				'employee_id' 							=> $id_employee,
				'employee_payroll_bank_name' 			=> $this->input->post('P_Bank_name'),
				'employee_payroll_bank_account' 		=> $this->input->post('P_Account'),
				'employee_payroll_bank_account_holder' 	=> $this->input->post('P_Account_holder'),
				'employee_payroll_npwp' 				=> $this->input->post('P_NPWP'),
				'employee_payroll_bpjs_ketenagakerjaan' => $this->input->post('P_BPJS_Ketenagakerjaan'),
				'employee_payroll_bpjs_kesehatan' 		=> $this->input->post('P_BPJS_Kesehatan'),
				'employee_payroll_basic_salary ' 		=> $this->input->post('P_Basic_salary'),
			);

			if ($this->db->insert('employee_payroll', $data_payroll)) {

				$id_payroll =  $this->db->insert_id();

				if ($this->input->post('P_Amount')) {
					foreach ($this->input->post('P_Amount') as $key => $value) {
						$sqlCek = $this->db->query("SELECT * FROM master_payroll_component_detail WHERE master_payroll_component_detail_id = '".$key."' ");
						if ($sqlCek->num_rows() > 0) {
							$component_id 			= $sqlCek->row_array()['payroll_component_master_id'];
							$component_id_detail 	= $sqlCek->row_array()['master_payroll_component_detail_id'];
							$component_name 		= $sqlCek->row_array()['master_payroll_component_detail_name'];
						} else {
							$component_id 			= 1;
							$component_id_detail 	= $key;
							$component_name 		= '';
						}

						$data_payroll_detail = array(
							'employee_payroll_id' 							=> $id_payroll,
							'employee_payroll_detail_component_id' 			=> $component_id,
							'employee_payroll_detail_component_id_detail' 	=> $component_id_detail,
							'employee_payroll_detail_name' 					=> $component_name,
							'employee_payroll_detail_amount ' 				=> $value,
						);
						$this->db->insert('employee_payroll_detail', $data_payroll_detail);
					}
				}
			}


			if ($this->input->post('A_name')) {
				foreach ($this->input->post('A_name') as $key => $value) {
					$data_assets = array(
						'employee_id' 						=> $id_employee,
						'employee_assets_name' 				=> $this->input->post('A_name')[$key],
						'employee_assets_serial_number' 	=> $this->input->post('A_Serial_Number')[$key],
						'employee_assets_description' 		=> $this->input->post('A_Description')[$key],
						'employee_assets_lend_date' 		=> date('Y-m-d H:i:s'),
					);
					$this->db->insert('employee_assets', $data_assets);
				}
			}

			if ($this->input->post('F_Name')) {
				foreach ($this->input->post('F_Name') as $key => $value) {
					if ($_FILES['F_File']['name'][$key] != '') {
	                    $my_file_name   = explode(".", $_FILES['F_File']['name'][$key]);

	                    $NewImageName  = str_replace(' ', '_', $this->input->post('PD_First_Name')).'_'.str_replace(' ', '_', $this->input->post('F_Name')[$key]).'_'.date('YmdHis').'.'. $my_file_name[1];
	                    
	                    $SourcePath = $_FILES['F_File']['tmp_name'][$key]; 
	                    $TargetPath = "assets/upload/employee_file/".$NewImageName; 
	                    if(move_uploaded_file($SourcePath, $TargetPath)) { 
	                        $dir = 'assets/upload/employee_file/'.$NewImageName;
	                    } else {
	                        $dir = '';
	                    }
	                } else {
	                    $dir = '';
	                }

					$data_file = array(
						'employee_id' 					=> $id_employee,
						'employee_file_name' 			=> $this->input->post('F_Name')[$key],
						'employee_file_description' 	=> $this->input->post('F_Description')[$key],
						'employee_file_file' 			=> $dir,
						'employee_file_create_date' 	=> date('Y-m-d H:i:s'),
					);
					$this->db->insert('employee_file', $data_file);
				}
			}

			// $emailTo = $this->input->post('PD_Email');
			// $bodyEmail = 'Email Anda : '.$this->input->post('PD_Email').'<br>Password Anda : '.$password;
	        // // die(print_r($bodyEmail));
	        // $ci = get_instance();
	        // $ci->load->library('email');
	        // $config['protocol'] 	= "smtp";
	        // $config['smtp_host'] 	= "ssl://smtp.gmail.com";
	        // $config['smtp_port'] 	= "465";
	        // $config['smtp_user'] 	= "salahu11162014@nusamandiri.ac.id";
	        // $config['smtp_pass'] 	= "salahudindidin23121995";
	        // $config['charset'] 		= "utf-8";
	        // $config['mailtype'] 	= "html";
	        // $config['newline'] 		= "\r\n";
	        // $ci->email->initialize($config);
	        // $ci->email->from('salahu11162014@nusamandiri.ac.id', 'HRIS');
	        // $list = array($emailTo);
	        // // $list = array('didinsalahudin@gmail.com');
	        // $ci->email->to($list);
	        // $ci->email->subject('Aktivasi Akun');
	        // $ci->email->message($bodyEmail);
	        // $this->email->send();
	        // if ($this->email->send()) {
	        //     echo 'Sukses! email berhasil dikirim.';
	        // } else {
	        //     echo 'Error! email tidak dapat dikirim.';
	        //     show_error($this->email->print_debugger());  
	        // }
			$response["status"] = "success";
		} else {
			$response["status"] = "error";
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;	
    }

    public function get_job_position($id)
    {
        $sql = $this->db->query("SELECT * FROM master_job_position WHERE master_department_id_hd = '".$id."' AND master_job_position_status IN (1)");
        if ($sql->num_rows() > 0) {
            foreach ($sql->result_array() as $value) {
                $dataArray[] = array(
                    'master_job_position_id'     => $value['master_job_position_id'],
                    'master_department_id_hd'    => $value['master_department_id_hd'],
                    'master_job_position_name'   => $value['master_job_position_name'],
                    'master_job_position_status' => $value['master_job_position_status'],
                );
            }
        } else {
            $dataArray = array(
                'master_job_position_id'     => '',
                'master_department_id_hd'    => '',
                'master_job_position_name'   => '',
                'master_job_position_status' => '',
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($dataArray))
            ->_display();
        exit;
	}
}
