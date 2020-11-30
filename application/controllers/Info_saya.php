<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_saya extends CI_Controller {

	function __construct() {
		parent::__construct();   
		if (!$this->session->userdata('user_login')) {
            redirect(base_url());
        }        
	}
	
	public function index()
	{
		echo 'test';
	}

	public function informasi_umum()
	{
		$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$rowEmployee = $sqlEmployee->row_array();

			$sqlDepartmen = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$rowEmployee['employee_department_id']."' ");
           	if ($sqlDepartmen->num_rows() > 0) {
           		$departmen_name = $sqlDepartmen->row_array()['master_department_name'];
           	} else {
           		$departmen_name = '';
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
			   
			$sqlApproval1 = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$rowEmployee['employee_approval_1_id']."' ");
           	if ($sqlApproval1->num_rows() > 0) {
           		$Approval1 = $sqlApproval1->row_array()['employee_first_name'].' '.$sqlApproval1->row_array()['employee_last_name'];
           	} else {
           		$Approval1 = '';
			}
			   
			$sqlApproval2 = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$rowEmployee['employee_approval_2_id']."' ");
           	if ($sqlApproval2->num_rows() > 0) {
           		$Approval2 = $sqlApproval2->row_array()['employee_first_name'].' '.$sqlApproval2->row_array()['employee_last_name'];
           	} else {
           		$Approval2 = '';
			}
			
			$sqlApproval3 = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$rowEmployee['employee_approval_3_id']."' ");
           	if ($sqlApproval3->num_rows() > 0) {
           		$Approval3 = $sqlApproval3->row_array()['employee_first_name'].' '.$sqlApproval3->row_array()['employee_last_name'];
           	} else {
           		$Approval3 = '';
           	}

           	$sqlFamily = $this->db->query("SELECT * FROM employee_family WHERE employee_id  = '".$rowEmployee['employee_id']."' ");
           	if ($sqlFamily->num_rows() > 0) {
           		foreach ($sqlFamily->result_array() as $value) {
           			$data_family[] = array(
           				'employee_family_name' 			=> $value['employee_family_name'],
						'employee_family_relationship' 	=> $value['employee_family_relationship'],
						'employee_family_age' 			=> $value['employee_family_age'],
						'employee_family_gender' 		=> ($value['employee_family_gender'] == 1) ? 'Male' : 'Female',
						'employee_family_job'			=> $value['employee_family_job'],
						'employee_family_religion' 		=> ($value['employee_family_religion'] == 1) ? 'Kristen' : ($value['employee_family_religion'] == 2) ? 'Islam' : ($value['employee_family_religion'] == 3) ? 'Hindu' : 'Budha', 
           			);           		
           		}
           	} else {
           		$data_family = array();
           	}

           	$sqlEmergencyContact = $this->db->query("SELECT * FROM employee_emergency_contact WHERE employee_id  = '".$rowEmployee['employee_id']."' ");
           	if ($sqlEmergencyContact->num_rows() > 0) {
           		foreach ($sqlEmergencyContact->result_array() as $value) {
           			$data_emergency_contact[] = array(
           				'employee_emergency_contact_name' 			=> $value['employee_emergency_contact_name'],
						'employee_emergency_contact_relationship' 	=> $value['employee_emergency_contact_relationship'],
						'employee_emergency_contact_phone_number' 	=> $value['employee_emergency_contact_phone_number'],
           			);           		
           		}
           	} else {
           		$data_emergency_contact = array();
           	}

           	$sqlEducation = $this->db->query("SELECT * FROM employee_education WHERE employee_id  = '".$rowEmployee['employee_id']."' ");
           	if ($sqlEducation->num_rows() > 0) {
           		foreach ($sqlEducation->result_array() as $value) {
           			$data_education[] = array(
           				'employee_education_institution_name' 	=> $value['employee_education_institution_name'],
						'employee_education_majors' 			=> $value['employee_education_majors'],
						'employee_education_start_year' 		=> $value['employee_education_start_year'],
						'employee_education_end_year' 			=> $value['employee_education_end_year'],
						'employee_education_score' 				=> $value['employee_education_score'], 
           			);           		
           		}
           	} else {
           		$data_education = array();
           	}

           	$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id  = '".$rowEmployee['employee_id']."' ");
           	if ($sqlPayroll->num_rows() > 0) {
           			$rowPayroll = $sqlPayroll->row_array();
           			$sqlPayrollDetail = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ");
           			if ($sqlPayrollDetail->num_rows() > 0) {
	           			$rowPayrollDetail = $sqlPayroll->row_array();
	           			foreach ($sqlPayrollDetail->result_array() as $value) {
		           			$data_payroll_detail[] = array(
		           				'employee_payroll_detail_name' 			=> $value['employee_payroll_detail_name'],
								'employee_payroll_detail_amount' 		=> $value['employee_payroll_detail_amount'],
		           			);  
	           			}
	           		} else {
	           			$data_payroll_detail = array();
	           		}

           			$data_payroll = array(
           				'employee_payroll_bank_name' 			=> $rowPayroll['employee_payroll_bank_name'],
						'employee_payroll_bank_account' 		=> $rowPayroll['employee_payroll_bank_account'],
						'employee_payroll_bank_account_holder' 	=> $rowPayroll['employee_payroll_bank_account_holder'],
						'employee_payroll_npwp' 				=> $rowPayroll['employee_payroll_npwp'],
						'employee_payroll_bpjs_ketenagakerjaan' => $rowPayroll['employee_payroll_bpjs_ketenagakerjaan'],
						'employee_payroll_bpjs_kesehatan' 		=> $rowPayroll['employee_payroll_bpjs_kesehatan'],
						'employee_payroll_basic_salary' 		=> $rowPayroll['employee_payroll_basic_salary'], 
						'employee_payroll_detail'				=> $data_payroll_detail,
           			);  
           	} else {
           		$data_payroll = array();
           	}

           	$sqlAssets = $this->db->query("SELECT * FROM employee_assets WHERE employee_id = '".$rowEmployee['employee_id']."' ");
           	if ($sqlAssets->num_rows() > 0) {
           		foreach ($sqlAssets->result_array() as $value) {
           			$data_assets[] = array(
           				'employee_assets_name' 				=> $value['employee_assets_name'],
						'employee_assets_serial_number' 	=> $value['employee_assets_serial_number'],
						'employee_assets_description' 		=> $value['employee_assets_description'],
						'employee_assets_lend_date' 		=> $value['employee_assets_lend_date'],
						'employee_assets_returned_date' 	=> $value['employee_assets_returned_date'], 
           			);           		
           		}
           	} else {
           		$data_assets = array();
           	}

           	$sqlFile = $this->db->query("SELECT * FROM employee_file WHERE employee_id = '".$rowEmployee['employee_id']."' ");
           	if ($sqlFile->num_rows() > 0) {
           		foreach ($sqlFile->result_array() as $value) {
           			$data_file[] = array(
           				'employee_file_name' 			=> $value['employee_file_name'],
						'employee_file_description' 	=> $value['employee_file_description'],
						'employee_file_create_date' 	=> $value['employee_file_create_date'],
						'employee_file_file' 			=> $value['employee_file_file'], 
           			);           		
           		}
           	} else {
           		$data_file = array();
           	}

           	$data['list'] = array(
				'employee_first_name' 			=> $rowEmployee['employee_first_name'],
				'employee_last_name' 			=> $rowEmployee['employee_last_name'],
				'employee_email' 				=> $rowEmployee['employee_email'],
				'employee_address' 				=> $rowEmployee['employee_address'],
				'employee_no_id_card' 			=> $rowEmployee['employee_no_id_card'],
				'employee_place_of_birth' 		=> $rowEmployee['employee_place_of_birth'],
				'employee_date_of_birth' 		=> date('Y-m-d', strtotime($rowEmployee['employee_date_of_birth'])),
				'employee_mobile_phone_number' 	=> $rowEmployee['employee_mobile_phone_number'],
				'employee_home_phone_number' 	=> $rowEmployee['employee_home_phone_number'],
				'employee_gender' 				=> ($rowEmployee['employee_gender'] == 1) ? 'Male' : 'Female',
				'employee_marital_status' 		=> ($rowEmployee['employee_marital_status'] == 1) ? 'Single' : 'Married',
				'employee_religion' 			=> ($rowEmployee['employee_religion'] == 1) ? 'Kristen' : ($rowEmployee['employee_religion'] == 2) ? 'Islam' : ($rowEmployee['employee_religion'] == 3) ? 'Hindu' : 'Budha',
				'employee_departmen_name' 		=> $departmen_name,
				'employee_job_position' 		=> $job_position,
				'employee_job_level' 			=> $job_level,
				'employee_employment_status' 	=> ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent',
				'employee_join_start_date' 		=> $rowEmployee['employee_join_start_date'],
				'employee_join_end_date' 		=> $rowEmployee['employee_join_end_date'],
				'employee_branch_name' 			=> ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs',
				'employee_blood_type' 			=> $rowEmployee['employee_blood_type'] ,
				'employee_postal_code' 			=> $rowEmployee['employee_postal_code'],
				'employee_approval_1' 			=> $Approval1,
				'employee_approval_2' 			=> $Approval2,
				'employee_approval_3' 			=> $Approval3,
				'employee_create_date' 			=> $rowEmployee['employee_create_date'],
				'employee_update_date' 			=> $rowEmployee['employee_update_date'], 

				'employee_data_family'				=> $data_family,
				'employee_data_emergency_contact'	=> $data_emergency_contact,
				'employee_data_education'			=> $data_education,
				'employee_data_payroll'				=> $data_payroll,
				'employee_data_assets'				=> $data_assets,
				'employee_data_file'				=> $data_file,
           	);
		} else {
			$data['list'] = array(
				'employee_first_name' 			=> '',
				'employee_last_name' 			=> '',
				'employee_email' 				=> '',
				'employee_address' 				=> '',
				'employee_no_id_card' 			=> '',
				'employee_place_of_birth' 		=> '',
				'employee_date_of_birth' 		=> '',
				'employee_mobile_phone_number' 	=> '',
				'employee_home_phone_number' 	=> '',
				'employee_gender' 				=> '',
				'employee_marital_status' 		=> '',
				'employee_religion' 			=> '',
				'employee_organization_name' 	=> '',
				'employee_job_position' 		=> '',
				'employee_job_level' 			=> '',
				'employee_employment_status' 	=> '',
				'employee_join_start_date' 		=> '',
				'employee_join_end_date' 		=> '',
				'employee_branch_name' 			=> '',
				'employee_blood_type' 			=> '',
				'employee_postal_code' 			=> '',
				'employee_approval_1' 			=> '',
				'employee_approval_2' 			=> '',
				'employee_approval_3' 			=> '',
				'employee_create_date' 			=> '',
				'employee_update_date' 			=> '',

				'employee_data_family'				=> '',
				'employee_data_emergency_contact'	=> '',
				'employee_data_education'			=> '',
				'employee_data_payroll'				=> '',
				'employee_data_assets'				=> '',
				'employee_data_file'				=> '',
           	);
		}
		
		$data['title'] = 'Informasi Umum';
		$this->load->view('Info_saya/General_info_view', $data);
	}
	
	public function info_gaji()
	{
		$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$rowEmployee = $sqlEmployee->row_array();

           	$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id  = '".$rowEmployee['employee_id']."' ");
           	if ($sqlPayroll->num_rows() > 0) {
					$rowPayroll = $sqlPayroll->row_array();
					   
					// $sqlGroup = $this->db->query("SELECT DISTINCT employee_payroll_detail_component_id FROM employee_payroll_detail WHERE employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ");
					// if ($sqlGroup->num_rows() > 0) {
					// 	$no = 0;
					// 	foreach ($sqlGroup->result_array() as $value) {
					// 		$sqlMaster = $this->db->query("SELECT master_payroll_component_name FROM master_payroll_component WHERE master_payroll_component_id = '".$value['employee_payroll_detail_component_id']."' ");
					// 		if ($sqlMaster->num_rows() > 0) {
					// 			$payroll_component_name = $sqlMaster->row_array()['master_payroll_component_name'];
					// 		} else {
					// 			$payroll_component_name = '';
					// 		}

					// 		$data_payroll_detail[] = array(
					// 			'payroll_component_name' => $payroll_component_name
					// 		);
					// 		$sqlPayrollDetail = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_detail_component_id = '".$value['employee_payroll_detail_component_id']."' AND employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ");
					// 		if ($sqlPayrollDetail->num_rows() > 0) {
					// 			$noDetail = 0;
					// 			foreach ($sqlPayrollDetail->result_array() as $valueDetail) {
					// 				$data_payroll_detail[$no]['payroll_component_detail'][] = array(
					// 					'employee_payroll_detail_name'   => $valueDetail['employee_payroll_detail_name'],
					// 					'employee_payroll_detail_amount' => $valueDetail['employee_payroll_detail_amount'],
					// 				);  
					// 				$noDetail++;
					// 			}
					// 		} 
					// 		$no++;
	           		// 	}
					// } else {
					// 	$data_payroll_detail = array();
					// }


           			$data_payroll = array(
           				'employee_payroll_bank_name' 			=> $rowPayroll['employee_payroll_bank_name'],
						'employee_payroll_bank_account' 		=> $rowPayroll['employee_payroll_bank_account'],
						'employee_payroll_bank_account_holder' 	=> $rowPayroll['employee_payroll_bank_account_holder'],
						'employee_payroll_npwp' 				=> $rowPayroll['employee_payroll_npwp'],
						'employee_payroll_bpjs_ketenagakerjaan' => $rowPayroll['employee_payroll_bpjs_ketenagakerjaan'],
						'employee_payroll_bpjs_kesehatan' 		=> $rowPayroll['employee_payroll_bpjs_kesehatan'],
						'employee_payroll_basic_salary' 		=> $rowPayroll['employee_payroll_basic_salary'], 
						// 'employee_payroll_master'				=> $data_payroll_master,
						// 'employee_payroll_detail'				=> $data_payroll_detail,
						''
           			);  
           	} else {
           		$data_payroll = array();
           	}

           	$data['list'] = array(
				'employee_data_payroll' => $data_payroll,
           	);
		} else {
			$data['list'] = array(
				'employee_data_payroll' => array(),
           	);
		}
		
		$data['title'] = 'Info Gaji';
		// die(print_r($data));
		$this->load->view('Info_saya/Payroll_info_view', $data);
	}

	public function slip_gaji()
	{
		if ($_GET) {
			$tahun = $this->input->get('tahun');
			$bulan = $this->input->get('bulan');
		} else {
			$tahun = '';
			$bulan = '';
		}

		$sqlEmployee = $this->db->query("SELECT employee_id, employee_code FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$valueEmployee = $sqlEmployee->row_array();

			if ($tahun != '' && $bulan != '') {
				$sqlAttendanceSetting = $this->db->query("SELECT * FROM attendance_setting LIMIT 1 ");
				if ($sqlAttendanceSetting->num_rows() > 0) {
					$dateAttendanceSetting = $sqlAttendanceSetting->row_array()['attendance_setting_date'];
				} else {
					$dateAttendanceSetting = '15';
				}

				$dateEnd   = $tahun.'-'.$bulan.'-'.$dateAttendanceSetting;
				$dateStart = date('Y-m-d', strtotime('-1 month', strtotime($dateEnd)));
				
				$sqlAttendance = $this->db->query("SELECT * FROM attendance WHERE employee_code = '".$valueEmployee['employee_code']."' AND (attendance_date BETWEEN '".$dateStart."' AND '".$dateEnd."') AND attendance_type NOT IN (2) ");
				if ($sqlAttendance->num_rows() > 0) {
					$jmlAttendance = 0;
					foreach ($sqlAttendance->result_array() as $valueAttendance) {
						if (date('D', strtotime($valueAttendance['attendance_date'])) == 'Sat' OR date('D', strtotime($valueAttendance['attendance_date'])) == 'Sun') {
						} else {
							$jmlAttendance++;
						}
					}
				} else {
					$jmlAttendance = 0;
				}

				$arrayKehadiran = array(array(
					'komponen_nama'  => 'Kehadiran',
					'detail' => array(
						array(
							'name'  => 'Jumlah Kehadiran',
							'value' => $jmlAttendance
						),
					)
				));

				$sqlPayroll = $this->db->query("SELECT * FROM payroll WHERE employee_id = '".$valueEmployee['employee_id']."' AND payroll_year = '".$tahun."' AND payroll_month = '".$bulan."' LIMIT 1 ");
				if ($sqlPayroll->num_rows() > 0) {
					$rowPayroll = $sqlPayroll->row_array();

					$basic_salary  = $rowPayroll['payroll_basic_salary'];
					$take_home_pay = $rowPayroll['payroll_take_home_pay'];

					$sqlMasterComPayroll = $this->db->query("SELECT DISTINCT payroll_detail_component_name FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' ");
					foreach ($sqlMasterComPayroll->result_array() as $keyComPay => $valueMasterComPayroll) {
						$payrollComponentName = $valueMasterComPayroll['payroll_detail_component_name'];

						$payrol[$keyComPay]['komponen_nama'] = $payrollComponentName;
						$payrol[$keyComPay]['total'] = 0;
						$payrol[$keyComPay]['detail'] = array();
						$sqlPayrollDdetail = $this->db->query("SELECT * FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' AND payroll_detail_component_name = '".$valueMasterComPayroll['payroll_detail_component_name']."' ");
						if ($sqlPayrollDdetail->num_rows() > 0) {
							foreach ($sqlPayrollDdetail->result_array() as $keyComPayDet =>  $valuePayrollDdetail) {
								$payrol[$keyComPay]['total'] += $valuePayrollDdetail['payroll_detail_amount'];
								$payrol[$keyComPay]['detail'][] = array(
									'name'  => $valuePayrollDdetail['payroll_detail_name'],
									'value' => $valuePayrollDdetail['payroll_detail_amount'],
								);
							}
						} else {
							$payrol[$keyComPay]['total'] = 0;
						}
					}
				} else {
					$payrol = array();
					$arrayKehadiran = array();

					$basic_salary  = 0;
					$take_home_pay = 0;
				}
			} else {
				$payrol = array();
				$arrayKehadiran = array();

				$basic_salary  = 0;
				$take_home_pay = 0;
			}
			// die(print_r($jmlAttendance));

			$data = array(
				'employee_id'      => $valueEmployee['employee_id'],
				'gaji'             => $payrol,
				'kehadiran'        => $arrayKehadiran,
				'basic_salary'     => number_format($basic_salary,0,',','.'),
				'totalTakeHomePay' => number_format($take_home_pay,0,',','.'),
			);
			
		} else {
			$data = array(
				'employee_id'      => '',
				'gaji'             => '',
				'kehadiran'        => '',
				'basic_salary'     => '',
				'totalTakeHomePay' => '',
			);
		}

		// die(print_r(count($payrol)));
		
		$data['title']      = 'Slip Gaji';
		$data['bulan']      = $bulan;
		$data['nama_bulan'] = $this->nama_bulan($bulan);
		$data['tahun']      = $tahun;
		// die(print_r($data));
		$this->load->view('Info_saya/Slip_gaji_view', $data);
	}

	public function nama_bulan($no)
	{
		$bulan = array (1 =>   
			'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		
		if ($no != '') {
			$nama_bulan = $bulan[(int)$no];	
			return $nama_bulan;
		} else {
			$nama_bulan = '';	
			return $nama_bulan;
		}
	}

	public function cuti()
	{
		$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$rowEmployee = $sqlEmployee->row_array();

			$data['employee_time_off_balance'] = $rowEmployee['employee_time_off_balance'];
		} else {
			$data['employee_time_off_balance'] = '';
		}
		$data['title'] = 'Cuti';
		$this->load->view('Info_saya/Time_off_view', $data);
	}

	public function ambil_pengajuan_cuti()
	{
		$sql = $this->db->query("SELECT * FROM time_off WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sql->num_rows() > 0) {
			foreach ($sql->result_array() as $value) {
				$sqlMaster = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$value['time_off_type_id']."' ");
				if ($sqlMaster->num_rows() > 0) {
					$rowMaster = $sqlMaster->row_array();
					$masterTimeOffName = $rowMaster['master_time_off_name'];
				} else {
					$masterTimeOffName = '';
				}

				$dataArray[] = array(
					'RecordID'   => $value['time_off_id'],
					'CreateDate' => $value['time_off_create_date'],
					'Type'       => $masterTimeOffName,
					'StartDate'  => $value['time_off_start_date'],
					'StartEnd'   => $value['time_off_end_date'],
					// 'Status'     => ($value['time_off_status'] == 1) ? 'PENDING' : ($value['time_off_status'] == 2) ? 'APPROVE' : 'REJECT'
					'Status'     => $value['time_off_status']
				);
			}
		} else {
			$dataArray = array(
				'RecordID'   => '',
				'CreateDate' => '',
				'Type'       => '',
				'StartDate'  => '',
				'StartEnd'   => '',
				'Status'     => '',
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

	public function pengajuan_cuti()
	{
		// die(print_r($_POST));
		$end_date   = strtotime(date('Y-m-d', strtotime($this->input->post('end_date'))));    // or your date as well
		$start_date = strtotime(date('Y-m-d', strtotime($this->input->post('start_date'))));
		$datediff   = $end_date - $start_date;

		$count_day = round($datediff / (60 * 60 * 24)) + 1;

		// die(print_r($count_day));
		
		if ($count_day > 0) {
			$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' AND employee_time_off_balance >= '".$count_day."' ");
			if ($sqlCek->num_rows() > 0) {
				$row_employee = $sqlCek->row_array();
				$sqlMaterTimeOff = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$this->input->post('time_off_type')."' ");
				if ($sqlMaterTimeOff->num_rows() > 0) {
					$time_off_name = $sqlMaterTimeOff->row_array()['master_time_off_name'];
				} else {
					$time_off_name = "";
				}

				if ($_FILES['file_upload']['name'] != '') {
					$my_file_name   = explode(".", $_FILES['file_upload']['name']);

					$NewImageName  = $row_employee['employee_first_name'].'_'.$time_off_name.'_'.date('YmdHis').'.'. $my_file_name[1];
					
					$SourcePath = $_FILES['file_upload']['tmp_name']; 
					$TargetPath = "assets/upload/time_off_file/".$NewImageName; 
					if(move_uploaded_file($SourcePath, $TargetPath)) { 
						$dir = 'assets/upload/time_off_file/'.$NewImageName;
					} else {
						$dir = '';
					}
				} else {
					$dir = '';
				}

				$dataInsert = array(
					"employee_id"          => $this->session->userdata('user_id'),
					"employee_code"        => $this->session->userdata('user_code'),
					"time_off_type_id"     => $this->input->post('time_off_type'),
					"time_off_start_date"  => date('Y-m-d', strtotime($this->input->post('start_date'))),
					"time_off_end_date"    => date('Y-m-d', strtotime($this->input->post('end_date'))),
					"time_off_leave_day"   => $count_day,
					"time_off_status"      => 1,
					"time_off_reason"      => $this->input->post('reason'),
					"time_off_file"        => $dir,
					"time_off_create_date" => date('Y-m-d H:i:s'),
				);
				// die(print_r($dataInsert));
				if ($this->db->insert('time_off', $dataInsert)) {					
					$response = array(
						"status" 	=> 'TRUE'
					);
				} else {
					if ($dir != '') {
						unlink(FCPATH."assets/upload/time_off_file/".$NewImageName);
					} else {}
					$response = array(
						"status" 	=> 'FALSE',
						"message" 	=> 'Pengajuan Cuti Gagal!'
					);
				}
			} else {
				$response = array(
					"status" 	=> 'FALSE',
					"message" 	=> 'Pengajuan Cuti Gagal! Jatah Cuti Anda tidak cukup'
				);
			}
		} else {
			$response = array(
				"status" 	=> 'FALSE',
				"message" 	=> 'Pengajuan Cuti Gagal! Jatah Cuti Anda tidak cukup'
			);
		}

		// $dataInsert = array(
		// 	"employee_id"          => $this->session->userdata('user_id'),
		// 	"time_off_type_id"     => $this->input->post('time_off_type'),
		// 	"time_off_start_date"  => date('Y-m-d', strtotime($this->input->post('start_date'))),
		// 	"time_off_end_date"    => date('Y-m-d', strtotime($this->input->post('end_date'))),
		// 	"time_off_status"      => 1,
		// 	"time_off_create_date" => date('Y-m-d H:i:s'),
		// );
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}

	public function kehadiran()
	{
		$data['title'] = 'Kehadiran';
		$this->load->view('Info_saya/Attendance_view', $data);
	}

	public function ambil_pengajuan_kehadiran()
	{
		$sql = $this->db->query("SELECT * FROM attendance_request WHERE employee_request_id = '".$this->session->userdata('user_id')."' AND employee_request_code = '".$this->session->userdata('user_code')."' ");
		if ($sql->num_rows() > 0) {
			foreach ($sql->result_array() as $value) {
				$dataArray[] = array(
					'atendance_request_id'                   => $value['atendance_request_id'],
					'employee_request_code'                  => $value['employee_request_code'],
					'employee_request_id'                    => $value['employee_request_id'],
					'atendance_request_date'                 => $value['atendance_request_date'],
					'atendance_request_check_in'             => $value['atendance_request_check_in'],
					'atendance_request_check_out'            => $value['atendance_request_check_out'],
					'atendance_request_note'                 => $value['atendance_request_note'],
					'atendance_request_status'               => $value['atendance_request_status'],
					'atendance_request_approval_by'          => $value['atendance_request_approval_by'],
					'atendance_request_approval_date'        => $value['atendance_request_approval_date'],
					'atendance_request_approval_comment'     => $value['atendance_request_approval_comment'],
					'atendance_request_create_date' 		 => $value['atendance_request_create_date']
				);
			}
		} else {
			$dataArray = array(
				'atendance_request_id'                   => '',
				'employee_request_id'                    => '',
				'atendance_request_date'                 => '',
				'atendance_request_check_in'             => '',
				'atendance_request_check_out'            => '',
				'atendance_request_note'                 => '',
				'atendance_request_status'               => '',
				'atendance_request_approval_by'          => '',
				'atendance_request_approval_date'        => '',
				'atendance_request_approval_comment'     => '',
				'atendance_request_create_date' 		 => '',
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

	public function tambah_pengajuan_kehadiran()
	{
		$dataInsert = array(
            'employee_request_id'           => $this->session->userdata('user_id'),
            'employee_request_code'         => $this->session->userdata('user_code'),
            'atendance_request_date'        => date('Y-m-d', strtotime($this->input->post('attendance_date'))),
            'atendance_request_check_in'    => date('H:i:s', strtotime($this->input->post('attendance_check_in'))),
            'atendance_request_check_out'   => date('H:i:s', strtotime($this->input->post('attendance_check_out'))),
            'atendance_request_note'        => $this->input->post('attendance_note'),
            'atendance_request_create_date' => date('Y-m-d H:i:s'),
		);
		// die(print_r($dataInsert));
        if ($this->db->insert('attendance_request', $dataInsert)) {
            $response = array(
                "status" 	=> 'TRUE'
            );
        } else {
            $response = array(
                "status" 	=> 'FALSE'
            );
        }
        // die(print_r($data));

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response))
            ->_display();
        exit;
	}

	public function lihat_kehadiran()
	{
		if ($_REQUEST) {
			// die(print_r($_REQUEST));
			$month = $this->input->get('attendance_month');
			$year  = $this->input->get('attendance_years');
		} else {
			$month = date('m');
			$year  = date('Y');
		}

		$start_date = "01-".$month."-".$year;
		$start_time = strtotime($start_date);

		$end_time = strtotime("+1 month", $start_time);

		for($i=$start_time; $i<$end_time; $i+=86400)
		{
			$data['date'][] = date('Y-m-d', $i);
			$data['day'][] = date('D', $i);
		}
		// die(print_r($list));
		$data['title']            = 'Attendance';
		$data['attendance_month'] = $month;
		$data['attendance_years'] = $year;
		$this->load->view('Info_saya/Attendance_list_view', $data);
	}

	public function Informasi_lainnya()
	{
		$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$rowEmployee = $sqlEmployee->row_array();

           	$sqlAssets = $this->db->query("SELECT * FROM employee_assets WHERE employee_id = '".$rowEmployee['employee_id']."' ");
           	if ($sqlAssets->num_rows() > 0) {
           		foreach ($sqlAssets->result_array() as $value) {
           			$data_assets[] = array(
           				'employee_assets_name' 				=> $value['employee_assets_name'],
						'employee_assets_serial_number' 	=> $value['employee_assets_serial_number'],
						'employee_assets_description' 		=> $value['employee_assets_description'],
						'employee_assets_lend_date' 		=> $value['employee_assets_lend_date'],
						'employee_assets_returned_date' 	=> $value['employee_assets_returned_date'], 
           			);           		
           		}
           	} else {
           		$data_assets = array();
           	}

           	$sqlFile = $this->db->query("SELECT * FROM employee_file WHERE employee_id = '".$rowEmployee['employee_id']."' ");
           	if ($sqlFile->num_rows() > 0) {
           		foreach ($sqlFile->result_array() as $value) {
           			$data_file[] = array(
           				'employee_file_name' 			=> $value['employee_file_name'],
						'employee_file_description' 	=> $value['employee_file_description'],
						'employee_file_create_date' 	=> $value['employee_file_create_date'],
						'employee_file_file' 			=> $value['employee_file_file'], 
           			);           		
           		}
           	} else {
           		$data_file = array();
           	}

           	$data['list'] = array(
				'employee_data_assets'				=> $data_assets,
				'employee_data_file'				=> $data_file,
           	);
		} else {
			$data['list'] = array(
				'employee_data_assets'				=> '',
				'employee_data_file'				=> '',
           	);
		}
		
		$data['title'] = 'Informasi Umum';
		$this->load->view('Info_saya/More_info_view', $data);
	}

	public function download_gaji($id, $tahun, $bulan)
	{
		$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$id."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$valueEmployee = $sqlEmployee->row_array();

			$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$valueEmployee['employee_job_position']."' ");
           	if ($sqlJobPosition->num_rows() > 0) {
           		$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
           	} else {
           		$job_position = '';
           	}

			if ($tahun != '' && $bulan != '') {
				$sqlAttendanceSetting = $this->db->query("SELECT * FROM attendance_setting LIMIT 1 ");
				if ($sqlAttendanceSetting->num_rows() > 0) {
					$dateAttendanceSetting = $sqlAttendanceSetting->row_array()['attendance_setting_date'];
				} else {
					$dateAttendanceSetting = '15';
				}

				$dateEnd   = $tahun.'-'.$bulan.'-'.$dateAttendanceSetting;
				$dateStart = date('Y-m-d', strtotime('-1 month', strtotime($dateEnd)));
				
				$sqlAttendance = $this->db->query("SELECT * FROM attendance WHERE employee_code = '".$valueEmployee['employee_code']."' AND (attendance_date BETWEEN '".$dateStart."' AND '".$dateEnd."') AND attendance_type NOT IN (2) ");
				if ($sqlAttendance->num_rows() > 0) {
					$jmlAttendance = 0;
					foreach ($sqlAttendance->result_array() as $valueAttendance) {
						if (date('D', strtotime($valueAttendance['attendance_date'])) == 'Sat' OR date('D', strtotime($valueAttendance['attendance_date'])) == 'Sun') {
						} else {
							$jmlAttendance++;
						}
					}
				} else {
					$jmlAttendance = 0;
				}

				$arrayKehadiran = array(array(
					'komponen_nama'  => 'Kehadiran',
					'detail' => array(
						array(
							'name'  => 'Jumlah Kehadiran',
							'nilai' => $jmlAttendance
						),
					)
				));

				$sqlPayroll = $this->db->query("SELECT * FROM payroll WHERE employee_id = '".$valueEmployee['employee_id']."' AND payroll_year = '".$tahun."' AND payroll_month = '".$bulan."' LIMIT 1 ");
				if ($sqlPayroll->num_rows() > 0) {
					$rowPayroll = $sqlPayroll->row_array();

					$basic_salary  = $rowPayroll['payroll_basic_salary'];
					$take_home_pay = $rowPayroll['payroll_take_home_pay'];

					$sqlMasterComPayroll = $this->db->query("SELECT DISTINCT payroll_detail_component_name FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' ");
					foreach ($sqlMasterComPayroll->result_array() as $keyComPay => $valueMasterComPayroll) {
						$payrollComponentName = $valueMasterComPayroll['payroll_detail_component_name'];

						$payrol[$keyComPay]['komponen_nama'] = $payrollComponentName;
						$payrol[$keyComPay]['total'] = 0;
						$payrol[$keyComPay]['detail'] = array();
						$sqlPayrollDdetail = $this->db->query("SELECT * FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' AND payroll_detail_component_name = '".$valueMasterComPayroll['payroll_detail_component_name']."' ");
						if ($sqlPayrollDdetail->num_rows() > 0) {
							foreach ($sqlPayrollDdetail->result_array() as $keyComPayDet =>  $valuePayrollDdetail) {
								$payrol[$keyComPay]['total'] += $valuePayrollDdetail['payroll_detail_amount'];
								$payrol[$keyComPay]['detail'][] = array(
									'name'  => $valuePayrollDdetail['payroll_detail_name'],
									'nilai' => $valuePayrollDdetail['payroll_detail_amount'],
								);
							}
						} else {
							$payrol[$keyComPay]['total'] = 0;
						}
					}
				} else {
					$payrol = array();
					$arrayKehadiran = array();

					$basic_salary  = 0;
					$take_home_pay = 0;
				}
			} else {
				$payrol = array();
				$arrayKehadiran = array();

				$basic_salary  = 0;
				$take_home_pay = 0;
			}
			// die(print_r($payrol[0]['detail']));
			$rowTunjangan = '';
			// foreach ($payrol as $value) {
				$detailRowTunjangan = '';
				foreach ($payrol[0]['detail'] as $value2) {
					$detailRowTunjangan .= '<tr>
													<td style="text-align: left;"><b>'.$value2['name'].'</b></td>
													<td style="text-align: right;"><b>'.number_format($value2['nilai'],0,',','.').'</b></td>
												</tr>';
				}
				// die(print_r($value2['nilai']));

				$rowTunjangan = '<table border="1" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td>
											<table border="0" width="100%" cellpadding="5" cellspacing="0">
												<tr>
													<td colspan="2" style="text-align: center; font-size: 14px;"><b>'.$payrol[0]['komponen_nama'].'</b></td>
												</tr>
												'.$detailRowTunjangan.'
												<tr style="background-color: #d3d3d3;">
													<td style="text-align: left;"><b>Total</b></td>
													<td style="text-align: right;"><b>'.number_format($payrol[0]['total'],0,',','.').'</b></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>';
			// }
			// die(print_r($rowTunjangan));
			$rowPengurangan = '';
			// foreach ($payrol[1] as $key => $value) {
				$detailRowPengurangan = '';
				foreach ($payrol[1]['detail'] as $value2) {
					$detailRowPengurangan .= '<tr>
													<td style="text-align: left;"><b>'.$value2['name'].'</b></td>
													<td style="text-align: right;"><b>'.number_format($value2['nilai'],0,',','.').'</b></td>
												</tr>';
				}

				$rowPengurangan = '<table border="1" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td>
											<table border="0" width="100%" cellpadding="5" cellspacing="0">
												<tr>
													<td colspan="2" style="text-align: center; font-size: 14px;"><b>'.$payrol[1]['komponen_nama'].'</b></td>
												</tr>
												'.$detailRowPengurangan.'
												<tr style="background-color: #d3d3d3;">
													<td style="text-align: left;"><b>Total</b></td>
													<td style="text-align: right;"><b>'.number_format($payrol[1]['total'],0,',','.').'</b></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>';
			// }

			$rowManfaat = '';
			// foreach ($payrol[2] as $key => $value) {
				$detailRowManfaat = '';
				foreach ($payrol[2]['detail'] as $key2 => $value2) {
					$detailRowManfaat .= '<tr>
													<td style="text-align: left;"><b>'.$value2['name'].'</b></td>
													<td style="text-align: right;"><b>'.number_format($value2['nilai'],0,',','.').'</b></td>
												</tr>';
				}

				$rowManfaat = '<table border="1" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td>
											<table border="0" width="100%" cellpadding="5" cellspacing="0">
												<tr>
													<td colspan="2" style="text-align: center; font-size: 14px;"><b>'.$payrol[2]['komponen_nama'].'</b></td>
												</tr>
												'.$detailRowManfaat.'
												<tr style="background-color: #d3d3d3;">
													<td style="text-align: left;"><b>Total</b></td>
													<td style="text-align: right;"><b>'.number_format($payrol[2]['total'],0,',','.').'</b></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>';
			// }

			$RowAbsen = '';
			// foreach ($payrol[2] as $key => $value) {
				$detailRowAbsen = '';
				foreach ($arrayKehadiran[0]['detail'] as $key2 => $value2) {
					$detailRowAbsen .= '<tr>
													<td style="text-align: left;"><b>'.$value2['name'].'</b></td>
													<td style="text-align: right;"><b>'.number_format($value2['nilai'],0,',','.').'</b></td>
												</tr>';
				}

				$RowAbsen = '<table border="1" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td>
											<table border="0" width="100%" cellpadding="5" cellspacing="0">
												<tr>
													<td colspan="2" style="text-align: center; font-size: 14px;"><b>'.$arrayKehadiran[0]['komponen_nama'].'</b></td>
												</tr>
												'.$detailRowAbsen.'
											</table>
										</td>
									</tr>
								</table>';
			// }

			// die(print_r($payrol));
			$nama          = $valueEmployee['employee_first_name']." ".$valueEmployee['employee_last_name'];
			$kode_karyawan = $valueEmployee['employee_code'];
			$jabatan       = $job_position;
			$bulan         = $this->nama_bulan($bulan);
			$tahun         = $tahun;
			$gaji_pokok    = number_format($basic_salary,0,',','.');
			$gaji_bersih   = number_format($take_home_pay,0,',','.');
			
		} else {
			$nama          = '';
			$kode_karyawan = '';
			$jabatan       = '';
			$bulan         = '';
			$tahun         = '';
			$gaji_pokok    = '';
			$gaji_bersih   = '';
		}
		// die(print_r($nama));

		$this->load->library('pdfTc');
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		
		$pdf->SetTitle('SLIP GAJI - '.$bulan.' '.$tahun);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetMargins(15, 15, 15, 15);
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT, PDF_MARGIN_BOTTOM);

		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);
		
		$pdf->SetFont('helvetica', '', 10);
		$pdf->AddPage('P', 'A4');
		$pdf->SetPrintFooter(false);
		
		$html = '
			<div style="width: 100%">
				<div>
					<table border="0" width="100%" cellpadding="5" cellspacing="0">
						<tr>
							<td style="text-align: right;" width="47%">
								<table border="0" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td style="font-size: 16px;"><b>'.$nama.'</b></td>
									</tr>
									<tr>
										<td><b>'.$jabatan.'</b> | <b>Kode Karyawan : '.$kode_karyawan.'</b></td>
									</tr>
								</table>
							</td>
							<td width="6%">
								&nbsp;&nbsp;&nbsp;
							</td>
							<td width="47%">
								<table border="0" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td style="font-size: 14px;"><b>'.$bulan.' '.$tahun.'</b></td>
									</tr>
									<tr>
										<td>Gaji Pokok <br><b style="font-size: 16px;">Rp. '.$gaji_pokok.'</b></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="text-align: right;" width="47%">
								'.$rowTunjangan.'
							</td>
							<td width="6%">
								&nbsp;&nbsp;&nbsp;
							</td>
							<td width="47%">
								'.$rowPengurangan.'
							</td>
						</tr>
						<tr>
							<td style="text-align: right;" width="47%">
								'.$rowManfaat.'
							</td>
							<td width="6%">
								&nbsp;&nbsp;&nbsp;
							</td>
							<td width="47%">
								'.$RowAbsen.'
							</td>
						</tr>
						<tr>
							<td style="text-align: right;" width="100%" colspan="3">
								<table border="1" width="100%" cellpadding="5" cellspacing="0">
									<tr>
										<td>
											<table border="0" width="100%" cellpadding="5" cellspacing="0">
												<tr>
													<td colspan="2" style="text-align: left; font-size: 20px;"><b>Gaji Bersih</b></td>
													<td colspan="2" style="text-align: right; font-size: 20px;"><b>Rp. '.$gaji_bersih.'</b></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>	
			</div>
		';

		$pdf->writeHTML($html, true, false, true, false, '');
		
		$pdf->Output('POLIS.pdf', 'D');
	}
}
