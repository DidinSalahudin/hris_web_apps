<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => 'Karyawan', 
        );
		$this->load->view('Admin/Karyawan/Karyawan_list_view', $data);
	}
	
	public function tambah_karyawan()
	{
        $data = array(
            'title' => 'Tambah Karyawan', 
        );
		$this->load->view('Admin/Karyawan/Karyawan_add_view', $data);
	}
	
	public function edit_karyawan($id = '')
	{
        $sql = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$id."' ");
        if ($sql->num_rows() > 0) {
            $rowEmployee = $sql->row_array();		

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

			$sqlFamily = $this->db->query("SELECT * FROM employee_family WHERE employee_id = '".$rowEmployee['employee_id']."' ");
			if ($sqlFamily->num_rows() > 0) {
				foreach ($sqlFamily->result_array() as $value) {
					$arrayFamily[] = array(
						'employee_family_id'           => $value['employee_family_id'],
						'employee_id'                  => $value['employee_id'],
						'employee_family_name'         => $value['employee_family_name'],
						'employee_family_relationship' => $value['employee_family_relationship'],
						'employee_family_age'          => $value['employee_family_age'],
						'employee_family_gender'       => $value['employee_family_gender'],
						'employee_family_job'          => $value['employee_family_job'],
						'employee_family_religion'     => $value['employee_family_religion'],
					);
				}
			} else {
				$arrayFamily = array();
			}

			$sqlEmerContact = $this->db->query("SELECT * FROM employee_emergency_contact WHERE employee_id = '".$rowEmployee['employee_id']."' ");
			if ($sqlEmerContact->num_rows() > 0) {
				foreach ($sqlEmerContact->result_array() as $value) {
					$arrayEmerContact[] = array(
						'employee_emergency_contact_id'           => $value['employee_emergency_contact_id'],
						'employee_id'                             => $value['employee_id'],
						'employee_emergency_contact_name'         => $value['employee_emergency_contact_name'],
						'employee_emergency_contact_relationship' => $value['employee_emergency_contact_relationship'],
						'employee_emergency_contact_phone_number' => $value['employee_emergency_contact_phone_number'],
					);
				}
			} else {
				$arrayEmerContact = array();
			}

			$sqlEducation = $this->db->query("SELECT * FROM employee_education WHERE employee_id = '".$rowEmployee['employee_id']."' ");
			if ($sqlEducation->num_rows() > 0) {
				foreach ($sqlEducation->result_array() as $value) {
					$arrayEducation[] = array(
						'employee_education_id'               => $value['employee_education_id'],
						'employee_id'                         => $value['employee_id'],
						'employee_education_institution_name' => $value['employee_education_institution_name'],
						'employee_education_majors'           => $value['employee_education_majors'],
						'employee_education_start_year'       => $value['employee_education_start_year'],
						'employee_education_end_year'         => $value['employee_education_end_year'],
						'employee_education_score'            => $value['employee_education_score'],
					);
				}
			} else {
				$arrayEducation = array();
			}

			$sqlFile = $this->db->query("SELECT * FROM employee_file WHERE employee_id = '".$rowEmployee['employee_id']."' ");
			if ($sqlFile->num_rows() > 0) {
				foreach ($sqlFile->result_array() as $value) {
					$arrayFile[] = array(
						'employee_file_id'          => $value['employee_file_id'],
						'employee_id'               => $value['employee_id'],
						'employee_file_name'        => $value['employee_file_name'],
						'employee_file_description' => $value['employee_file_description'],
						'employee_file_create_date' => $value['employee_file_create_date'],
						'employee_file_file'        => $value['employee_file_file'],
					);
				}
			} else {
				$arrayFile = array();
			}

			$sqlAssets = $this->db->query("SELECT * FROM employee_assets WHERE employee_id = '".$rowEmployee['employee_id']."' ");
			if ($sqlAssets->num_rows() > 0) {
				foreach ($sqlAssets->result_array() as $value) {
					$arrayAssets[] = array(
						'employee_assets_id'            => $value['employee_assets_id'],
						'employee_id'                   => $value['employee_id'],
						'employee_assets_name'          => $value['employee_assets_name'],
						'employee_assets_serial_number' => $value['employee_assets_serial_number'],
						'employee_assets_description'   => $value['employee_assets_description'],
						'employee_assets_lend_date'     => $value['employee_assets_lend_date'],
						'employee_assets_returned_date' => $value['employee_assets_lend_date'],
					);
				}
			} else {
				$arrayAssets = array();
			}

			$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id = '".$rowEmployee['employee_id']."' ");
           	if ($sqlPayroll->num_rows() > 0) {
				$rowPayroll = $sqlPayroll->row_array();
				$sqlPayrollDetail = $this->db->query("SELECT DISTINCT employee_payroll_detail_component_id FROM employee_payroll_detail WHERE employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ");
				if ($sqlPayrollDetail->num_rows() > 0) {
					foreach ($sqlPayrollDetail->result_array() as $keyP1 => $value) {
						$sqlMasterComponent = $this->db->query("SELECT * FROM master_payroll_component WHERE master_payroll_component_id = '".$value['employee_payroll_detail_component_id']."' ");
						if ($sqlMasterComponent->num_rows() > 0) {
							$rowMC = $sqlMasterComponent->row_array();
							$namaCom = $rowMC['master_payroll_component_name'];
						} else {
							$namaCom = '';
						}

						$arrayPayrollDetail[$keyP1]['komponen'] = $namaCom;

						$sqlPayrollDetail2 = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_detail_component_id = '".$value['employee_payroll_detail_component_id']."' AND employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ");
						if ($sqlPayrollDetail2->num_rows() > 0) {
							foreach ($sqlPayrollDetail2->result_array() as $value2) {
								$arrayPayrollDetail[$keyP1]['detail'][] = array(
									'employee_payroll_detail_id' 			=> $value2['employee_payroll_detail_id'],
									'employee_payroll_detail_name' 			=> $value2['employee_payroll_detail_name'],
									'employee_payroll_detail_amount' 		=> $value2['employee_payroll_detail_amount'],
								);  
							}
						} else {
							$arrayPayrollDetail = array();
						}
					}
				} else {
					$arrayPayrollDetail = array();
				}
					
				$employee_payroll_id            	   = $rowPayroll['employee_payroll_id'];
				$employee_payroll_bank_name            = $rowPayroll['employee_payroll_bank_name'];
				$employee_payroll_bank_account         = $rowPayroll['employee_payroll_bank_account'];
				$employee_payroll_bank_account_holder  = $rowPayroll['employee_payroll_bank_account_holder'];
				$employee_payroll_npwp                 = $rowPayroll['employee_payroll_npwp'];
				$employee_payroll_bpjs_ketenagakerjaan = $rowPayroll['employee_payroll_bpjs_ketenagakerjaan'];
				$employee_payroll_bpjs_kesehatan       = $rowPayroll['employee_payroll_bpjs_kesehatan'];
				$employee_payroll_basic_salary         = $rowPayroll['employee_payroll_basic_salary'];

				// $arrayPayroll = array(
				// 	'employee_payroll_bank_name' 			=> $rowPayroll['employee_payroll_bank_name'],
				// 	'employee_payroll_bank_account' 		=> $rowPayroll['employee_payroll_bank_account'],
				// 	'employee_payroll_bank_account_holder' 	=> $rowPayroll['employee_payroll_bank_account_holder'],
				// 	'employee_payroll_npwp' 				=> $rowPayroll['employee_payroll_npwp'],
				// 	'employee_payroll_bpjs_ketenagakerjaan' => $rowPayroll['employee_payroll_bpjs_ketenagakerjaan'],
				// 	'employee_payroll_bpjs_kesehatan' 		=> $rowPayroll['employee_payroll_bpjs_kesehatan'],
				// 	'employee_payroll_basic_salary' 		=> $rowPayroll['employee_payroll_basic_salary'], 
				// 	'employee_payroll_detail'				=> $arrayPayrollDetail,
				// );  
           	} else {
				$employee_payroll_id            	   = '';
				$employee_payroll_bank_name            = '';
				$employee_payroll_bank_account         = '';
				$employee_payroll_bank_account_holder  = '';
				$employee_payroll_npwp                 = '';
				$employee_payroll_bpjs_ketenagakerjaan = '';
				$employee_payroll_bpjs_kesehatan       = '';
				$employee_payroll_basic_salary         = '';

           		$arrayPayroll = array();
			   }
			   
			if ($rowEmployee['employee_foto_avatar'] != '') {
				$foto_avatar = $rowEmployee['employee_foto_avatar'];
			} else {
				$foto_avatar = 'assets/image/foto_profil/Foto_Profil.jpg';
			}

			$data = array(
				'title' 						=> 'Edit Employees', 
				'employee_id' 					=> $rowEmployee['employee_id'],
				'employee_first_name' 			=> $rowEmployee['employee_first_name'],
				'employee_last_name'			=> $rowEmployee['employee_last_name'],
				'employee_email' 				=> $rowEmployee['employee_email'],
				'employee_address' 				=> $rowEmployee['employee_address'],
				'employee_place_of_birth' 		=> $rowEmployee['employee_place_of_birth'],
				'employee_date_of_birth' 		=> date('m/d/Y', strtotime($rowEmployee['employee_date_of_birth'])),
				'employee_mobile_phone_number' 	=> $rowEmployee['employee_mobile_phone_number'],
				'employee_home_phone_number' 	=> $rowEmployee['employee_home_phone_number'],
				'employee_gender' 				=> $rowEmployee['employee_gender'],
				'employee_marital_status' 		=> $rowEmployee['employee_marital_status'],
				'employee_total_dependents'		=> $rowEmployee['employee_total_dependents'],
				'employee_religion' 			=> $rowEmployee['employee_religion'],
				'employee_department_id' 	    => $rowEmployee['employee_department_id'],
				'employee_job_position' 		=> $rowEmployee['employee_job_position'],
				'employee_job_level' 			=> $rowEmployee['employee_job_level'],
				'employee_employment_status' 	=> $rowEmployee['employee_employment_status'],
				'employee_join_start_date' 		=> date('m/d/Y', strtotime($rowEmployee['employee_join_start_date'])),
				'employee_branch_name' 			=> $rowEmployee['employee_branch_name'],
				'employee_blood_type' 			=> $rowEmployee['employee_blood_type'],
				'employee_postal_code' 			=> $rowEmployee['employee_postal_code'],
				'employee_no_id_card' 			=> $rowEmployee['employee_no_id_card'],
				'employee_approval_1_id' 	    => $rowEmployee['employee_approval_1_id'],
				'employee_approval_2_id' 	    => $rowEmployee['employee_approval_2_id'],
				'employee_approval_3_id' 	    => $rowEmployee['employee_approval_3_id'],
				'employee_foto_avatar'			=> $foto_avatar,

				'employee_payroll_id'            		=> $employee_payroll_id,
				'employee_payroll_bank_name'            => $employee_payroll_bank_name,
				'employee_payroll_bank_account'         => $employee_payroll_bank_account,
				'employee_payroll_bank_account_holder'  => $employee_payroll_bank_account_holder,
				'employee_payroll_npwp'                 => $employee_payroll_npwp,
				'employee_payroll_bpjs_ketenagakerjaan' => $employee_payroll_bpjs_ketenagakerjaan,
				'employee_payroll_bpjs_kesehatan'       => $employee_payroll_bpjs_kesehatan,
				'employee_payroll_basic_salary'         => $employee_payroll_basic_salary,

				'employee_family'				=> $arrayFamily,
				'employee_EmerContact'			=> $arrayEmerContact,
				'employee_Education'			=> $arrayEducation,
				'employee_File'					=> $arrayFile,
				'employee_Assets'				=> $arrayAssets,
				// 'employee_Payroll'				=> $arrayPayroll,
				'employee_Payroll_Detail'		=> $arrayPayrollDetail,

				// 'employee_id'                => $rowEmployee['employee_id'],
				// 'employee_first_name'        => $rowEmployee['employee_first_name'],
				// 'employee_last_name'         => $rowEmployee['employee_last_name'],
				// 'employee_email'             => $rowEmployee['employee_email'],
				// 'employee_department_id'     => $organization_name,
				// 'employee_job_position'      => $job_position,
				// 'employee_job_level'         => $job_level,
				// 'employee_employment_status' => ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent',
				// 'employee_branch_name'       => ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs',
			);
        } else {
            $data = array(
                // 'employee_id'                => '',
				// 'employee_first_name'        => '',
				// 'employee_last_name'         => '',
				// 'employee_email'             => '',
				// 'employee_department_id'     => '',
				// 'employee_job_position'      => '',
				// 'employee_job_level'         => '',
				// 'employee_employment_status' => '',
				// 'employee_branch_name'       => '',
            );
		}
		
		// die(print_r($data));
		$this->load->view('Admin/Karyawan/Karyawan_edit_view', $data);
	}
	
	public function ubah_data_karyawan()
	{
		// die(print_r($_POST));
		// employee_payroll
		// employee_payroll_detail
		// this->db->query('');
		
		// die(print_r($_FILES));
        // $password = mt_rand(100000,1000000);
		// $password = "123456";	

		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->input->post('employee_id')."' ");
		if ($sqlCek->num_rows() > 0) {
			$rowSqlCek = $sqlCek->row_array();
			// $dirAvatar     = $rowSqlCek['employee_foto_avatar'];
			$kode_karyawan = $rowSqlCek['employee_code'];

			if ($_FILES['profile_avatar']['name'] != '') {
				$ext_avatar   = explode(".", $_FILES['profile_avatar']['name']);
				$img_avatar_name  = $kode_karyawan.'_'.date('YmdHis').'.'. $ext_avatar[1];
				// die(print_r($img_avatar_name));			
				$SourcePathAvatar = $_FILES['profile_avatar']['tmp_name']; 
				$TargetPathAvatar = "assets/image/foto_profil/".$img_avatar_name; 
				if(move_uploaded_file($SourcePathAvatar, $TargetPathAvatar)) { 
					$dirAvatar = 'assets/image/foto_profil/'.$img_avatar_name;
				} else {
					$dirAvatar = '';
				}
			} else {
				if ($rowSqlCek['employee_foto_avatar'] != '') {
					$dirAvatar = $rowSqlCek['employee_foto_avatar'];
				} else {
					$dirAvatar = '';
				}
			}
	
			$data_employee = array(
				'employee_first_name' 			=> $this->input->post('PD_First_Name'),
				'employee_last_name'			=> $this->input->post('PD_Last_Name'),
				'employee_email' 				=> $this->input->post('PD_Email'),
				// 'employee_password' 			=> password_hash($password,PASSWORD_DEFAULT),
				// 'employee_password_status' 		=> 1,
				'employee_address' 				=> $this->input->post('PD_Address'),
				'employee_place_of_birth' 		=> $this->input->post('PD_Place_Of_Birth'),
				'employee_date_of_birth' 		=> date('Y-m-d', strtotime($this->input->post('PD_Birth_Date'))),
				'employee_mobile_phone_number' 	=> $this->input->post('PD_Mobile_phone'),
				'employee_home_phone_number' 	=> $this->input->post('PD_Phone'),
				'employee_gender' 				=> $this->input->post('PD_Gender'),
				'employee_marital_status' 		=> $this->input->post('PD_Martial_Status'),
				'employee_total_dependents'		=> $this->input->post('PD_jumlah_tanggungan'),
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
				'employee_foto_avatar'			=> $dirAvatar,
				'employee_create_date' 			=> date('Y-m-d H:i:s')
			);
			// die(print_r($data_employee));
	
			if ($this->db->update('employee', $data_employee, ['employee_id' => $this->input->post('employee_id')])) {
	
				$id_employee = $this->input->post('employee_id');
				
				if ($this->input->post('FD_Full_Name')) {
					foreach ($this->input->post('FD_Full_Name') as $key => $value) {
						$data_family = array(
							'employee_family_name' 			=> $this->input->post('FD_Full_Name')[$key],
							'employee_family_relationship' 	=> $this->input->post('FD_Relationship')[$key],
							'employee_family_age' 			=> $this->input->post('FD_Age')[$key],
							'employee_family_gender' 		=> $this->input->post('FD_Gender')[$key],
							'employee_family_job' 			=> $this->input->post('FD_Job')[$key],
							'employee_family_religion' 		=> $this->input->post('FD_Religion')[$key], 
						);
						$this->db->update('employee_family', $data_family, ['employee_family_id' => $key]);
					}
				}
	
				if ($this->input->post('Tambah_FD_Full_Name')) {
					foreach ($this->input->post('Tambah_FD_Full_Name') as $key => $value) {
						$data_family = array(
							'employee_id' 					=> $id_employee,
							'employee_family_name' 			=> $this->input->post('Tambah_FD_Full_Name')[$key],
							'employee_family_relationship' 	=> $this->input->post('Tambah_FD_Relationship')[$key],
							'employee_family_age' 			=> $this->input->post('Tambah_FD_Age')[$key],
							'employee_family_gender' 		=> $this->input->post('Tambah_FD_Gender')[$key],
							'employee_family_job' 			=> $this->input->post('Tambah_FD_Job')[$key],
							'employee_family_religion' 		=> $this->input->post('Tambah_FD_Religion')[$key], 
						);
						$this->db->insert('employee_family', $data_family);
					}
				}
	
				if ($this->input->post('EC_Name')) {
					foreach ($this->input->post('EC_Name') as $key => $value) {
						$data_emergency_contact = array(
							'employee_emergency_contact_name' 			=> $this->input->post('EC_Name')[$key],
							'employee_emergency_contact_relationship' 	=> $this->input->post('EC_Relationship')[$key],
							'employee_emergency_contact_phone_number' 	=> $this->input->post('EC_Phone_Number')[$key],
						);
						$this->db->update('employee_emergency_contact', $data_emergency_contact, ['employee_emergency_contact_id' => $key]);
					}
				}
	
				if ($this->input->post('Tambah_EC_Name')) {
					foreach ($this->input->post('Tambah_EC_Name') as $key => $value) {
						$data_emergency_contact = array(
							'employee_id' 								=> $id_employee,
							'employee_emergency_contact_name' 			=> $this->input->post('Tambah_EC_Name')[$key],
							'employee_emergency_contact_relationship' 	=> $this->input->post('Tambah_EC_Relationship')[$key],
							'employee_emergency_contact_phone_number' 	=> $this->input->post('Tambah_EC_Phone_Number')[$key],
						);
						$this->db->insert('employee_emergency_contact', $data_emergency_contact);
					}
				}
	
				if ($this->input->post('EH_Institute_Name')) {
					foreach ($this->input->post('EH_Institute_Name') as $key => $value) {
						$data_education = array(
							'employee_education_institution_name' 	=> $this->input->post('EH_Institute_Name')[$key],
							'employee_education_majors' 			=> $this->input->post('EH_Majors')[$key],
							'employee_education_start_year' 		=> $this->input->post('EH_Start_Years')[$key],
							'employee_education_end_year' 			=> $this->input->post('EH_End_Years')[$key],
							'employee_education_score' 				=> $this->input->post('EH_Score')[$key],
						);
						$this->db->update('employee_education', $data_education, ['employee_education_id' => $key]);
					}
				}
				
				if ($this->input->post('Tambah_EH_Institute_Name')) {
					foreach ($this->input->post('Tambah_EH_Institute_Name') as $key => $value) {
						$data_education = array(
							'employee_id' 							=> $id_employee,
							'employee_education_institution_name' 	=> $this->input->post('Tambah_EH_Institute_Name')[$key],
							'employee_education_majors' 			=> $this->input->post('Tambah_EH_Majors')[$key],
							'employee_education_start_year' 		=> $this->input->post('Tambah_EH_Start_Years')[$key],
							'employee_education_end_year' 			=> $this->input->post('Tambah_EH_End_Years')[$key],
							'employee_education_score' 				=> $this->input->post('Tambah_EH_Score')[$key],
						);
						$this->db->insert('employee_education', $data_education);
					}
				}
	
				$data_payroll = array(
					'employee_payroll_bank_name' 			=> $this->input->post('P_Bank_name'),
					'employee_payroll_bank_account' 		=> $this->input->post('P_Account'),
					'employee_payroll_bank_account_holder' 	=> $this->input->post('P_Account_holder'),
					'employee_payroll_npwp' 				=> $this->input->post('P_NPWP'),
					'employee_payroll_bpjs_ketenagakerjaan' => $this->input->post('P_BPJS_Ketenagakerjaan'),
					'employee_payroll_bpjs_kesehatan' 		=> $this->input->post('P_BPJS_Kesehatan'),
					'employee_payroll_basic_salary ' 		=> $this->input->post('P_Basic_salary'),
				);
	
				if ($this->db->update('employee_payroll', $data_payroll, ['employee_id' => $this->input->post('P_id')])) {
	
					$id_payroll =  $this->input->post('P_id');
					
					if ($this->input->post('P_Amount')) {
						foreach ($this->input->post('P_Amount') as $key => $value) {

							if ($value != '' || $value != 0) {
								$sqlCek2 = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_id = '".$id_payroll."' AND employee_payroll_detail_component_id_detail = '".$key."' ");
								if ($sqlCek2->num_rows() > 0) {
									$data_payroll_detail = array(
										// 'employee_payroll_detail_component_id' 			=> '',
										// 'employee_payroll_detail_component_id_detail' 	=> '',
										// 'employee_payroll_detail_name' 					=> '',
										'employee_payroll_detail_amount ' 				=> $value,
									);
									$this->db->update('employee_payroll_detail', $data_payroll_detail, ['employee_payroll_id' => $id_payroll, 'employee_payroll_detail_component_id_detail' => $key]);
								} else {
									$sqlMasterPayrollComponent = $this->db->query("SELECT * FROM master_payroll_component_detail WHERE master_payroll_component_detail_id = '".$key."' ");
									if ($sqlMasterPayrollComponent->num_rows() > 0) {
										$component_id 			= $sqlMasterPayrollComponent->row_array()['payroll_component_master_id'];
										$component_id_detail 	= $sqlMasterPayrollComponent->row_array()['master_payroll_component_detail_id'];
										$component_name 		= $sqlMasterPayrollComponent->row_array()['master_payroll_component_detail_name'];
									} else {
										$component_id 			= 1;
										$component_id_detail 	= $key;
										$component_name 		= '';
									}

									$data_payroll_detail_insert = array(
										'employee_payroll_id'                         => $id_payroll,
										'employee_payroll_detail_component_id'        => $component_id,
										'employee_payroll_detail_component_id_detail' => $component_id_detail,
										'employee_payroll_detail_name'                => $component_name,
										'employee_payroll_detail_amount '             => $value,
									);
									$this->db->insert('employee_payroll_detail', $data_payroll_detail_insert);
								}
							}							
						}
					}
	
					// if ($this->input->post('P_Amount')) {
					// 	foreach ($this->input->post('P_Amount') as $key => $value) {
					// 		$data_payroll_detail = array(
								// 'employee_payroll_detail_component_id' 			=> $component_id,
								// 'employee_payroll_detail_component_id_detail' 	=> $component_id_detail,
								// 'employee_payroll_detail_name' 					=> $component_name,
					// 			'employee_payroll_detail_amount ' 				=> $value,
					// 		);
					// 		$this->db->update('employee_payroll_detail', $data_payroll_detail, ['employee_payroll_detail_id' => $key]);
							
					// 	}
					// }
				}
	
	
				if ($this->input->post('A_name')) {
					foreach ($this->input->post('A_name') as $key => $value) {
						$data_assets = array(
							'employee_assets_name' 				=> $this->input->post('A_name')[$key],
							'employee_assets_serial_number' 	=> $this->input->post('A_Serial_Number')[$key],
							'employee_assets_description' 		=> $this->input->post('A_Description')[$key],
							'employee_assets_lend_date' 		=> date('Y-m-d H:i:s'),
						);
						$this->db->update('employee_assets', $data_assets, ['employee_assets_id' => $key]);
					}
				}
	
				if ($this->input->post('Tambah_A_name')) {
					foreach ($this->input->post('Tambah_A_name') as $key => $value) {
						$data_assets = array(
							'employee_id' 						=> $id_employee,
							'employee_assets_name' 				=> $this->input->post('Tambah_A_name')[$key],
							'employee_assets_serial_number' 	=> $this->input->post('Tambah_A_Serial_Number')[$key],
							'employee_assets_description' 		=> $this->input->post('Tambah_A_Description')[$key],
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
							$sqlCekAssets = $this->db->query("SELECT * FROM employee_file WHERE employee_file_id = '".$key."' ");
							if ($sqlCekAssets->num_rows() > 0) {
								$dir = $sqlCekAssets->row_array()['employee_file_file'];
							} else {
								$dir = '';
							}
						}
	
						$data_file = array(
							'employee_file_name' 			=> $this->input->post('F_Name')[$key],
							'employee_file_description' 	=> $this->input->post('F_Description')[$key],
							'employee_file_file' 			=> $dir,
							'employee_file_create_date' 	=> date('Y-m-d H:i:s'),
						);
						$this->db->update('employee_file', $data_file, ['employee_file_id' => $key]);
					}
				}
	
				if ($this->input->post('Tambah_F_Name')) {
					foreach ($this->input->post('Tambah_F_Name') as $key => $value) {
						if ($_FILES['Tambah_F_File']['name'][$key] != '') {
							$my_file_name   = explode(".", $_FILES['Tambah_F_File']['name'][$key]);
	
							$NewImageName  = str_replace(' ', '_', $this->input->post('PD_First_Name')).'_'.str_replace(' ', '_', $this->input->post('Tambah_F_Name')[$key]).'_'.date('YmdHis').'.'. $my_file_name[1];
							
							$SourcePath = $_FILES['Tambah_F_File']['tmp_name'][$key]; 
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
							'employee_file_name' 			=> $this->input->post('Tambah_F_Name')[$key],
							'employee_file_description' 	=> $this->input->post('Tambah_F_Description')[$key],
							'employee_file_file' 			=> $dir,
							'employee_file_create_date' 	=> date('Y-m-d H:i:s'),
						);
						$this->db->insert('employee_file', $data_file);
					}
				}
				$response["status"] = "success";
			} else {
				$response["status"] = "error";
			}

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

		$email = $this->input->post('PD_Email');
		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_email = '".$email."' ");
		if ($sqlCek->num_rows() == 0) {
			// die(print_r($_POST));
			$kode_karyawan = $this->cek_kode_karyawan();
			// $password = mt_rand(100000,1000000);
			$password = "12345678";
			if ($_FILES['profile_avatar']['name'] != '') {
				$ext_avatar   = explode(".", $_FILES['profile_avatar']['name']);
				$img_avatar_name  = $kode_karyawan.'_'.date('YmdHis').'.'. $ext_avatar[1];
				// die(print_r($img_avatar_name));			
				$SourcePathAvatar = $_FILES['profile_avatar']['tmp_name']; 
				$TargetPathAvatar = "assets/image/foto_profil/".$img_avatar_name; 
				if(move_uploaded_file($SourcePathAvatar, $TargetPathAvatar)) { 
					$dirAvatar = 'assets/image/foto_profil/'.$img_avatar_name;
				} else {
					$dirAvatar = '';
				}
			} else {
				$dirAvatar = '';
			}

			// die(print_r($dirAvatar));

			$data_employee = array(
				'employee_first_name' 			=> $this->input->post('PD_First_Name'),
				'employee_code'					=> $kode_karyawan,
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
				'employee_total_dependents'		=> $this->input->post('PD_jumlah_tanggungan'),
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
				'employee_foto_avatar'			=> $dirAvatar,
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
							
							if ($value != '' || $value != 0) {
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
				$response["status"]  = "success";
				$response["message"] = "Karyawan Berhasil Ditambahkan";
			} else {
				$response["status"]  = "error";
				$response["message"] = "Gagal Menambahkan Karyawan";
			}
		} else {
			$response["status"]  = "error";
			$response["message"] = "Email Yang Anda Masukan Sudah Dipakai";
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;	
    }

    public function ambil_data_posisi_pekerjaan($id)
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
	
	public function cek_kode_karyawan()
    {
		// die(print_r($_POST));
		$dateCode = 'WL';
		$query = $this->db->query("SELECT coalesce(max(SUBSTR(`employee_code`,3, 5)),0) as employee_code FROM employee");
		if ($query->row('employee_code') == 0){			
			$urut = 1;
		}else{
			$urut = ($query->row('employee_code')*1) + 1;
		}
		$code_karyawan = $dateCode.str_pad($urut,5,'0',STR_PAD_LEFT);
		
		return $code_karyawan;
	}
	
	public function download_daftar_karyawan(){
		
		$sql = $this->db->query("SELECT * FROM employee");
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
					'employee_id'                  => $rowEmployee['employee_id'],
					'employee_code'                => $rowEmployee['employee_code'],
					'employee_first_name'          => $rowEmployee['employee_first_name'],
					'employee_last_name'           => $rowEmployee['employee_last_name'],
					'employee_email'               => $rowEmployee['employee_email'],
					'employee_password'            => $rowEmployee['employee_password'],
					'employee_password_status'     => $rowEmployee['employee_password_status'],
					'employee_address'             => $rowEmployee['employee_address'],
					'employee_no_id_card'          => $rowEmployee['employee_no_id_card'],
					'employee_place_of_birth'      => $rowEmployee['employee_place_of_birth'],
					'employee_date_of_birth'       => $rowEmployee['employee_date_of_birth'],
					'employee_mobile_phone_number' => $rowEmployee['employee_mobile_phone_number'],
					'employee_home_phone_number'   => $rowEmployee['employee_home_phone_number'],
					'employee_gender'              => ($rowEmployee['employee_gender'] == 1) ? 'Laki-laki' : 'Perempuan',
					'employee_marital_status'      => ($rowEmployee['employee_marital_status'] == 1) ? 'Belum Menikah' : 'Sudah Menikah',
					'employee_religion'            => ($rowEmployee['employee_religion'] == 1) ? 'Kristen' : ($rowEmployee['employee_religion'] == 2) ? 'Islam' : ($rowEmployee['employee_religion'] == 2) ? 'Hindu' : 'Budha',
					'employee_department_id'       => $organization_name,
					'employee_job_position'        => $job_position,
					'employee_job_level'           => $job_level,
					'employee_employment_status'   => ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent',
					'employee_join_start_date'     => $rowEmployee['employee_join_start_date'],
					'employee_join_end_date'       => $rowEmployee['employee_join_end_date'],
					'employee_branch_name'         => ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs',
					'employee_blood_type'          => $rowEmployee['employee_blood_type'],
					'employee_postal_code'         => $rowEmployee['employee_postal_code'],
					'employee_approval'            => $rowEmployee['employee_approval'],
					'employee_approval_1_id'       => $rowEmployee['employee_approval_1_id'],
					'employee_approval_2_id'       => $rowEmployee['employee_approval_2_id'],
					'employee_approval_3_id'       => $rowEmployee['employee_approval_3_id'],
					'employee_time_off_balance'    => $rowEmployee['employee_time_off_balance'],
					'employee_foto_avatar'         => $rowEmployee['employee_foto_avatar'],
					'employee_create_date'         => $rowEmployee['employee_create_date'],
					'employee_update_date'         => $rowEmployee['employee_update_date'],
				);
            }
        } else {
            $dataArray[] = array(
					'employee_id'                  => '',
					'employee_code'                => '',
					'employee_first_name'          => '',
					'employee_last_name'           => '',
					'employee_email'               => '',
					'employee_password'            => '',
					'employee_password_status'     => '',
					'employee_address'             => '',
					'employee_no_id_card'          => '',
					'employee_place_of_birth'      => '',
					'employee_date_of_birth'       => '',
					'employee_mobile_phone_number' => '',
					'employee_home_phone_number'   => '',
					'employee_gender'              => '',
					'employee_marital_status'      => '',
					'employee_religion'            => '',
					'employee_department_id'       => '',
					'employee_job_position'        => '',
					'employee_job_level'           => '',
					'employee_employment_status'   => '',
					'employee_join_start_date'     => '',
					'employee_join_end_date'       => '',
					'employee_branch_name'         => '',
					'employee_blood_type'          => '',
					'employee_postal_code'         => '',
					'employee_approval'            => '',
					'employee_approval_1_id'       => '',
					'employee_approval_2_id'       => '',
					'employee_approval_3_id'       => '',
					'employee_time_off_balance'    => '',
					'employee_foto_avatar'         => '',
					'employee_create_date'         => '',
					'employee_update_date'         => '',
				);
		}
		
		// die(print_r($dataArray));
		
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $excel = new PHPExcel();
        
        $excel->getProperties()->setCreator('PT Datascrip')
                    ->setLastModifiedBy('PT Datascrip')
                    ->setTitle("Report Feedback Form")
                    ->setSubject("Feedback Form")
                    ->setDescription("Report Feedback Form Datascrip Solution Days E-Conference 2020")
                    ->setKeywords("Report Feedback Form Datascrip Solution Days E-Conference 2020");
                    
        $style_col = array(
            'font'      => array('bold' => true),  
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,  
                'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER     
            ),
            'borders' => array(
                'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
                'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
                'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN)   
            )
        );
       
        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
            ),
            'borders' => array(
                'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
                'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
                'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN)   
            )
        );

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Laporan Daftar Karyawan");
        $excel->getActiveSheet()->mergeCells('A1:AD1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
        $excel->setActiveSheetIndex(0)->setCellValue('A2', "ID");
        $excel->setActiveSheetIndex(0)->setCellValue('B2', "Kode Karyawan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('C2', "Nama Depan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('D2', "Nama Belakang"); 
        $excel->setActiveSheetIndex(0)->setCellValue('E2', "Email"); 
        $excel->setActiveSheetIndex(0)->setCellValue('F2', "Password"); 
        $excel->setActiveSheetIndex(0)->setCellValue('G2', "Status Password"); 
        $excel->setActiveSheetIndex(0)->setCellValue('H2', "Alamat"); 
        $excel->setActiveSheetIndex(0)->setCellValue('I2', "Kode Pos"); 
        $excel->setActiveSheetIndex(0)->setCellValue('J2', "No Identitas"); 
        $excel->setActiveSheetIndex(0)->setCellValue('K2', "Tempat Lahir"); 
        $excel->setActiveSheetIndex(0)->setCellValue('L2', "Tanggal Lahir"); 
        $excel->setActiveSheetIndex(0)->setCellValue('M2', "No HP");
        $excel->setActiveSheetIndex(0)->setCellValue('N2', "No Telepon");
        $excel->setActiveSheetIndex(0)->setCellValue('O2', "Golongan Darah"); 
        $excel->setActiveSheetIndex(0)->setCellValue('P2', "Jenis Kelamin"); 
        $excel->setActiveSheetIndex(0)->setCellValue('Q2', "Status Pernikahan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('R2', "Agama"); 
        $excel->setActiveSheetIndex(0)->setCellValue('S2', "Departemen"); 
        $excel->setActiveSheetIndex(0)->setCellValue('T2', "Posisi Pekerjaan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('U2', "Level Pekerjaan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('V2', "Status Pekerjaan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('W2', "Lokasi Kerja"); 
        $excel->setActiveSheetIndex(0)->setCellValue('X2', "Tanggal Masuk"); 
        $excel->setActiveSheetIndex(0)->setCellValue('Y2', "Tanggal Keluar"); 
        $excel->setActiveSheetIndex(0)->setCellValue('Z2', "Jatah Cuti"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AA2', "Persetujuan Atasan 1"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AB2', "Persetujuan Atasan 2"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AC2', "Persetujuan Atasan 3"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AD2', "Foto Avatar"); 
		
		$excel->getActiveSheet()->getStyle('A2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('S2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('T2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('U2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('V2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('W2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('X2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Y2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Z2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AA2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AB2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AC2')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AD2')->applyFromArray($style_col);
        
        $no     = 1;                          
        $numrow = 3;                          
        foreach($dataArray as $data){ 
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data['employee_id']);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['employee_code']);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['employee_first_name']);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['employee_last_name']);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['employee_email']);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['employee_password']);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['employee_password_status']);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['employee_address']);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['employee_postal_code']);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['employee_no_id_card']);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['employee_place_of_birth']);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['employee_date_of_birth']);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['employee_mobile_phone_number']);
			$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['employee_home_phone_number']);
			$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['employee_blood_type']);
			$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['employee_gender']);
			$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['employee_marital_status']);
			$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['employee_religion']);
			$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['employee_department_id']);
			$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['employee_job_position']);
			$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['employee_job_level']);
			$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data['employee_employment_status']);
			$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['employee_branch_name']);
			$excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['employee_join_start_date']);
			$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['employee_join_end_date']);
			$excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['employee_time_off_balance']);
			$excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['employee_approval_1_id']);
			$excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data['employee_approval_2_id']);
			$excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data['employee_approval_3_id']);
			$excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data['employee_foto_avatar']);

			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
            
            $no++; 
            $numrow++; 
		}
		
		$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
        
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        
        $excel->getActiveSheet(0)->setTitle("Laporan Daftar Karyawan");
        $excel->setActiveSheetIndex(0);

        $filename = "Laporan Daftar Karyawan ".date('YmdHis').".xlsx";
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$filename.'"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
	}
	
	public function setel_ulang_password($id)
	{
		$password = "123456";
		$dataUpdate = array(
			'employee_password'        => password_hash($password,PASSWORD_DEFAULT),
			'employee_password_status' => 1,
		);

		if ($this->db->update('employee', $dataUpdate, ['employee_id' => $id])) {
			$response = array(
				'status' => 'TRUE'
			);
		} else {
			$response = array(
				'status' => 'FALSE'
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
