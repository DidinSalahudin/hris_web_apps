<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {
	
	function __construct() {
		parent::__construct();   
		if (!$this->session->userdata('user_login')) {
            redirect(base_url());
        }        
    }

	public function index()
	{
        $data = array(
            'title' => 'Gaji Karyawan', 
        );
		$this->load->view('Admin/Gaji/Gaji_view', $data);
	}

	public function daftar_gaji_karyawan()
	{
		if ($_GET) {
			$tahun = $this->input->get('tahun');
			$bulan = $this->input->get('bulan');
		} else {
			$tahun = date('Y');
			$bulan = date('m');
		}

		$sqlPayroll = $this->db->query("SELECT * FROM payroll WHERE payroll_year = '".$tahun."' AND payroll_month = '".$bulan."' ");
		if ($sqlPayroll->num_rows() > 0) {
			foreach ($sqlPayroll->result_array() as $rowPayroll) {	
				$sql = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$rowPayroll['employee_id']."' ");
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

					$employee_id                          = $rowEmployee['employee_id'];
					$employee_code                        = $rowEmployee['employee_code'];
					$employee_first_name                  = $rowEmployee['employee_first_name'];
					$employee_last_name                   = $rowEmployee['employee_last_name'];
					$employee_email                       = $rowEmployee['employee_email'];
					$employee_department_id               = $organization_name;
					$employee_job_position                = $job_position;
					$employee_job_level                   = $job_level;
					$employee_employment_status           = ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent';
					$employee_branch_name                 = ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs';
				} else {
					$employee_id                          = '';
					$employee_code                        = '';
					$employee_first_name                  = '';
					$employee_last_name                   = '';
					$employee_email                       = '';
					$employee_department_id               = '';
					$employee_job_position                = '';
					$employee_job_level                   = '';
					$employee_employment_status           = '';
					$employee_branch_name                 = '';
				}

				$absen         = $rowPayroll['payroll_absen'];
				$basic_salary  = $rowPayroll['payroll_basic_salary'];
				$take_home_pay = $rowPayroll['payroll_take_home_pay'];

				$sqlMasterComPayroll = $this->db->query("SELECT DISTINCT payroll_detail_component_name FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' ");
				foreach ($sqlMasterComPayroll->result_array() as $keyComPay => $valueMasterComPayroll) {
					$payrollComponentName = $valueMasterComPayroll['payroll_detail_component_name'];

					$payrol[$keyComPay]['com_name'] = $payrollComponentName;
					$payrol[$keyComPay]['total'] = 0;
					$sqlPayrollDdetail = $this->db->query("SELECT * FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' AND payroll_detail_component_name = '".$valueMasterComPayroll['payroll_detail_component_name']."' ");
					if ($sqlPayrollDdetail->num_rows() > 0) {
						foreach ($sqlPayrollDdetail->result_array() as $keyComPayDet =>  $valuePayrollDdetail) {
							$payrol[$keyComPay]['total'] += $valuePayrollDdetail['payroll_detail_amount'];
						}
					} else {
						$payrol[$keyComPay]['total'] = 0;
					}
				}

				$dataArray[] = array(
					'employee_id'                          => $employee_id,
					'employee_code'						   => $employee_code,
					'employee_first_name'                  => $employee_first_name,
					'employee_last_name'                   => $employee_last_name,
					'employee_email'                       => $employee_email,
					'employee_department_id'               => $employee_department_id,
					'employee_job_position'                => $employee_job_position,
					'employee_job_level'                   => $employee_job_level,
					'employee_employment_status'           => $employee_employment_status,
					'employee_branch_name'                 => $employee_branch_name,
					'employee_component_tunjangan'         => $payrol[0]['com_name'],
					'employee_component_tunjangan_total'   => $payrol[0]['total'],
					'employee_component_pengurangan'       => $payrol[1]['com_name'],
					'employee_component_pengurangan_total' => $payrol[1]['total'],
					'employee_component_manfaat'           => $payrol[2]['com_name'],
					'employee_component_manfaat_total'     => $payrol[2]['total'],
					'employee_absen'     		   		   => $absen,
					'employee_salary'     		   		   => $basic_salary,
					'employee_take_home_pay'     		   => $take_home_pay,
				);
			}
		} else {
			$dataArray = array();
		}

		$data = array(
			'title' => 'Gaji Karyawan', 
			'tahun' => $tahun,
			'bulan' => $bulan,
			'data'	=> $dataArray
		);
		// die(print_r($data));
		$this->load->view('Admin/Gaji/Gaji_view', $data);
	}

	public function gaji_ambil_data($tahun = 0, $bulan = 0)
    {
        if ($tahun != 0 && $bulan != 0) {
			$sqlPayroll = $this->db->query("SELECT * FROM payroll WHERE payroll_year = '".$tahun."' AND payroll_month = '".$bulan."' ");
			if ($sqlPayroll->num_rows() > 0) {
				foreach ($sqlPayroll->result_array() as $rowPayroll) {	
					$sql = $this->db->query("SELECT employee_id, employee_first_name, employee_last_name, employee_email, employee_department_id, employee_job_position, employee_job_level, employee_employment_status, employee_branch_name FROM employee WHERE employee_id = '".$rowPayroll['employee_id']."' ");
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

						$employee_id                          = $rowEmployee['employee_id'];
						$employee_first_name                  = $rowEmployee['employee_first_name'];
						$employee_last_name                   = $rowEmployee['employee_last_name'];
						$employee_email                       = $rowEmployee['employee_email'];
						$employee_department_id               = $organization_name;
						$employee_job_position                = $job_position;
						$employee_job_level                   = $job_level;
						$employee_employment_status           = ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent';
						$employee_branch_name                 = ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs';
					} else {
						$employee_id                          = '';
						$employee_first_name                  = '';
						$employee_last_name                   = '';
						$employee_email                       = '';
						$employee_department_id               = '';
						$employee_job_position                = '';
						$employee_job_level                   = '';
						$employee_employment_status           = '';
						$employee_branch_name                 = '';
					}

					$basic_salary  = $rowPayroll['payroll_basic_salary'];
					$take_home_pay = $rowPayroll['payroll_take_home_pay'];

					$sqlMasterComPayroll = $this->db->query("SELECT DISTINCT payroll_detail_component_name FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' ");
					foreach ($sqlMasterComPayroll->result_array() as $keyComPay => $valueMasterComPayroll) {
						$payrollComponentName = $valueMasterComPayroll['payroll_detail_component_name'];

						$payrol[$keyComPay]['com_name'] = $payrollComponentName;
						$payrol[$keyComPay]['total'] = 0;
						$sqlPayrollDdetail = $this->db->query("SELECT * FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' AND payroll_detail_component_name = '".$valueMasterComPayroll['payroll_detail_component_name']."' ");
						if ($sqlPayrollDdetail->num_rows() > 0) {
							foreach ($sqlPayrollDdetail->result_array() as $keyComPayDet =>  $valuePayrollDdetail) {
								$payrol[$keyComPay]['total'] += $valuePayrollDdetail['payroll_detail_amount'];
							}
						} else {
							$payrol[$keyComPay]['total'] = 0;
						}
					}

					$dataArray[] = array(
						'employee_id'                          => $employee_id,
						'employee_first_name'                  => $employee_first_name,
						'employee_last_name'                   => $employee_last_name,
						'employee_email'                       => $employee_email,
						'employee_department_id'               => $employee_department_id,
						'employee_job_position'                => $employee_job_position,
						'employee_job_level'                   => $employee_job_level,
						'employee_employment_status'           => $employee_employment_status,
						'employee_branch_name'                 => $employee_branch_name,
						'employee_component_tunjangan'         => $payrol[0]['com_name'],
						'employee_component_tunjangan_total'   => $payrol[0]['total'],
						'employee_component_pengurangan'       => $payrol[1]['com_name'],
						'employee_component_pengurangan_total' => $payrol[1]['total'],
						'employee_component_manfaat'           => $payrol[2]['com_name'],
						'employee_component_manfaat_total'     => $payrol[2]['total'],
						'employee_salary'     		   		   => $basic_salary,
						'employee_take_home_pay'     		   => $take_home_pay,
					);
				}
			} else {
				$dataArray = array(
					'employee_id'                          => '',
					'employee_first_name'                  => '',
					'employee_last_name'                   => '',
					'employee_email'                       => '',
					'employee_department_id'               => '',
					'employee_job_position'                => '',
					'employee_job_level'                   => '',
					'employee_employment_status'           => '',
					'employee_branch_name'                 => '',
					'employee_component_tunjangan'         => '',
					'employee_component_tunjangan_total'   => '',
					'employee_component_pengurangan'       => '',
					'employee_component_pengurangan_total' => '',
					'employee_component_manfaat'           => '',
					'employee_component_manfaat_total'     => '',
					'employee_salary'     		   		   => '',
					'employee_take_home_pay'     		   => '',
				);
			}
		} else {
			$dataArray = array(
				'employee_id'                          => '',
				'employee_first_name'                  => '',
				'employee_last_name'                   => '',
				'employee_email'                       => '',
				'employee_department_id'               => '',
				'employee_job_position'                => '',
				'employee_job_level'                   => '',
				'employee_employment_status'           => '',
				'employee_branch_name'                 => '',
				'employee_component_tunjangan'         => '',
				'employee_component_tunjangan_total'   => '',
				'employee_component_pengurangan'       => '',
				'employee_component_pengurangan_total' => '',
				'employee_component_manfaat'           => '',
				'employee_component_manfaat_total'     => '',
				'employee_salary'     		   		   => '',
				'employee_take_home_pay'     		   => '',
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
	
	public function jalankan_gaji()
	{
		$payrollSetting = $this->db->query("SELECT * FROM payroll_setting LIMIT 1");
		$rowPayrrolSetting = $payrollSetting->row_array();

		$date = $rowPayrrolSetting['payroll_setting_date'].'-'.date('m');

		$years = date('Y');
		$month = date('m');

		if (date('d-m') >= $date) {

			$sqlCekPayroll = $this->db->query("SELECT * FROM payroll WHERE payroll_month = '".$month."' AND payroll_year = '".$years."' LIMIT 1");
			if ($sqlCekPayroll->num_rows() > 0) {
				$data['title']  = 'Jalankan Gaji';
				$data['status'] = 1;
				$data['pesan']  = "Gaji Sudah Dijalankan";
			} else {
				$sqlCekTempPayroll = $this->db->query("SELECT * FROM temp_payroll WHERE temp_payroll_month = '".$month."' AND temp_payroll_year = '".$years."' LIMIT 1");
				if ($sqlCekTempPayroll->num_rows() > 0) {
					$rowsqlCekTempPayroll = $sqlCekTempPayroll->row_array();

					$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_employment_status NOT IN (3)");
					foreach ($sqlEmployee->result_array() as $valueEmployee) {

						$sqlOrganization = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$valueEmployee['employee_department_id']."' ");
						if ($sqlOrganization->num_rows() > 0) {
							$organization_name = $sqlOrganization->row_array()['master_department_name'];
						} else {
							$organization_name = '';
						}

						$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$valueEmployee['employee_job_position']."' ");
						if ($sqlJobPosition->num_rows() > 0) {
							$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
						} else {
							$job_position = '';
						}

						$sqlJobLevel = $this->db->query("SELECT master_job_level_name FROM master_job_level WHERE master_job_level_id  = '".$valueEmployee['employee_job_level']."' ");
						if ($sqlJobLevel->num_rows() > 0) {
							$job_level = $sqlJobLevel->row_array()['master_job_level_name'];
						} else {
							$job_level = '';
						}

						// die(print_r($data)); 
						// die(print_r('Total = '.$jmlAttendanceTotal.' ==== Jumlah kehadiran = '.$jmlAttendance)); 

						
						$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id = '".$valueEmployee['employee_id']."' ");
						if ($sqlPayroll->num_rows() > 0) {
							$rowPayroll = $sqlPayroll->row_array();	

							$sqlTempPayroll = $this->db->query("SELECT * FROM temp_payroll WHERE temp_employee_id = '".$valueEmployee['employee_id']."' AND temp_payroll_month = '".$month."' AND temp_payroll_year = '".$years."' ");
							if ($sqlTempPayroll->num_rows() > 0) {
								$rowsqlTempPayroll = $sqlTempPayroll->row_array();
	
								$totalTakeHomePay = $rowsqlTempPayroll['temp_payroll_take_home_pay'];
								$jmlAttendance    = $rowsqlTempPayroll['temp_payroll_absen'];

								$arrayPayrollDetail = array();
								$sqlTempPayrollDetail = $this->db->query("SELECT DISTINCT temp_payroll_detail_component_name FROM temp_payroll_detail WHERE temp_payroll_id = '".$rowsqlTempPayroll['temp_payroll_id']."' ");
								if ($sqlTempPayrollDetail->num_rows() > 0) {
									foreach ($sqlTempPayrollDetail->result_array() as $keyTempPayrollDetail => $valueTempPayrollDetail) {

										$arrayPayrollDetail[$keyTempPayrollDetail]['komponen'] = $valueTempPayrollDetail['temp_payroll_detail_component_name'];
										$arrayPayrollDetail[$keyTempPayrollDetail]['total']    = 0;
										$arrayPayrollDetail[$keyTempPayrollDetail]['detail']   = array();

										$sqlTempPayrollDetail2 = $this->db->query("SELECT * FROM temp_payroll_detail WHERE temp_payroll_id = '".$rowsqlTempPayroll['temp_payroll_id']."' AND temp_payroll_detail_component_name = '".$valueTempPayrollDetail['temp_payroll_detail_component_name']."' ");
										if ($sqlTempPayrollDetail2->num_rows() > 0) {
											foreach ($sqlTempPayrollDetail2->result_array() as $value2) {
												
												$valueAmunt = round($value2['temp_payroll_detail_amount']);
												$valueName  = $value2['temp_payroll_detail_name'];

												$arrayPayrollDetail[$keyTempPayrollDetail]['total'] += $valueAmunt;
												$arrayPayrollDetail[$keyTempPayrollDetail]['detail'][] = array(
													// 'employee_payroll_detail_id' 			=> $value2['employee_payroll_detail_id'],
													'employee_payroll_detail_name' 			=> $valueName,
													'employee_payroll_detail_amount' 		=> $valueAmunt,
												);  
											}
										} else {
											
										}
									}
								} else {
									
								}
								
							} else {
							}

							$arrayPayroll = array(
								// 'employee_id'                           => $employee_id,							
								'employee_payroll_bank_name'            => $rowPayroll['employee_payroll_bank_name'],
								'employee_payroll_bank_account'         => $rowPayroll['employee_payroll_bank_account'],
								'employee_payroll_bank_account_holder'  => $rowPayroll['employee_payroll_bank_account_holder'],
								'employee_payroll_npwp'                 => $rowPayroll['employee_payroll_npwp'],
								'employee_payroll_bpjs_ketenagakerjaan' => $rowPayroll['employee_payroll_bpjs_ketenagakerjaan'],
								'employee_payroll_bpjs_kesehatan'       => $rowPayroll['employee_payroll_bpjs_kesehatan'],
								'employee_payroll_basic_salary'         => $rowPayroll['employee_payroll_basic_salary'],
								'employee_payroll_detail'               => $arrayPayrollDetail,
							);
						} else {
							$totalTakeHomePay = 0;
							$jmlAttendance    = 0;

							$arrayPayroll = array();
						}

						// die(print_r($jmlAttendance));

						$data_array[] = array(
							'employee_id'                => $valueEmployee['employee_id'],
							'employee_code'              => $valueEmployee['employee_code'],
							'employee_first_name'        => $valueEmployee['employee_first_name'],
							'employee_last_name'         => $valueEmployee['employee_last_name'],
							'employee_email'             => $valueEmployee['employee_email'],
							'employee_department_id'     => $organization_name,
							'employee_job_position'      => $job_position,
							'employee_job_level'         => $job_level,
							'employee_employment_status' => ($valueEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent',
							'employee_branch_name'       => ($valueEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs',
							'payroll'          			 => $arrayPayroll,
							'totalTakeHomePay' 			 => $totalTakeHomePay,
							'absen'            			 => $jmlAttendance
						);
					}

					$data['title']      = 'Jalankan Gaji';
					$data['status']     = 0;
					$data['pesan']      = "Gaji Belum Dijalankan";
					$data['data_array'] = $data_array;
					
				} else {

					$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_employment_status NOT IN (3)");
					foreach ($sqlEmployee->result_array() as $valueEmployee) {

						$sqlOrganization = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$valueEmployee['employee_department_id']."' ");
						if ($sqlOrganization->num_rows() > 0) {
							$organization_name = $sqlOrganization->row_array()['master_department_name'];
						} else {
							$organization_name = '';
						}

						$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$valueEmployee['employee_job_position']."' ");
						if ($sqlJobPosition->num_rows() > 0) {
							$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
						} else {
							$job_position = '';
						}

						$sqlJobLevel = $this->db->query("SELECT master_job_level_name FROM master_job_level WHERE master_job_level_id  = '".$valueEmployee['employee_job_level']."' ");
						if ($sqlJobLevel->num_rows() > 0) {
							$job_level = $sqlJobLevel->row_array()['master_job_level_name'];
						} else {
							$job_level = '';
						}

						$sqlAttendanceSetting = $this->db->query("SELECT * FROM attendance_setting LIMIT 1 ");
						if ($sqlAttendanceSetting->num_rows() > 0) {
							$dateAttendanceSetting = $sqlAttendanceSetting->row_array()['attendance_setting_date'];
						} else {
							$dateAttendanceSetting = '15';
						}

						$dateEnd   = $years.'-'.$month.'-'.$dateAttendanceSetting;
						$dateStart = date('Y-m-d', strtotime('-1 month', strtotime($dateEnd)));
						
						$sqlAttendance = $this->db->query("SELECT * FROM attendance WHERE employee_code = '".$valueEmployee['employee_code']."' AND (attendance_date BETWEEN '".$dateStart."' AND '".$dateEnd."') AND attendance_type NOT IN (2) ");
						if ($sqlAttendance->num_rows() > 0) {
							$jmlAttendance = 0;
							foreach ($sqlAttendance->result_array() as $valueAttendance) {
								if (date('D', strtotime($valueAttendance['attendance_date'])) == 'Sat' OR date('D', strtotime($valueAttendance['attendance_date'])) == 'Sun') {
								} else {
									$jmlAttendance++;
									$dataa[] = $valueAttendance['attendance_date'];
								}
							}
						} else {
							$jmlAttendance = 0;
						}
						
						$start_time         = strtotime('-1 month', strtotime(date('Y-m-d', strtotime('+1 days', strtotime($dateEnd)))));
						$end_time           = strtotime($dateEnd);

						$jmlAttendanceTotal = 0;
						for($i = $start_time; $i <= $end_time; $i += 86400) {
							if (date('D', $i) == 'Sat' OR date('D', $i) == 'Sun') {
							} else {
								$jmlAttendanceTotal++;
								// $data['date'][] = date('Y-m-d', $i);
								// $data['day'][] = date('D', $i);
							}
						}

						// die(print_r($data)); 
						// die(print_r('Total = '.$jmlAttendanceTotal.' ==== Jumlah kehadiran = '.$jmlAttendance)); 

						$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id = '".$valueEmployee['employee_id']."' ");
						if ($sqlPayroll->num_rows() > 0) {
							$rowPayroll = $sqlPayroll->row_array();						

							$tunjanganNominal = 0;
							$sqlPayrollDetailTunjangan = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' AND employee_payroll_detail_component_id IN (1)");
							if ($sqlPayrollDetailTunjangan->num_rows() > 0) {
								foreach ($sqlPayrollDetailTunjangan->result_array() as $key => $value) {
									$tunjanganNominal += $value['employee_payroll_detail_amount'];
								}
							} else {
								$tunjanganNominal = 0;
							}
							
							$nilai_bonus = 0;
							$sqlTHR = $this->db->query("SELECT * FROM payroll_bonus WHERE employee_id = '".$valueEmployee['employee_id']."' AND payroll_bonus_month = '".$month."' AND payroll_bonus_years = '".$years."' ");
							if ($sqlTHR->num_rows() > 0) {
								foreach ($sqlTHR->result_array() as $key => $valueTHR) {
									$nilai_bonus += $valueTHR['payroll_bonus_amount'];
								}
							} 

							// die(print_r($nilai_bonus));

							$gapok     = $rowPayroll['employee_payroll_basic_salary'];
							$tunjangan = $tunjanganNominal;

							$statusMenikah = $valueEmployee['employee_marital_status'];
							$tanggungan    = $valueEmployee['employee_total_dependents'];

							$npwp    = $rowPayroll['employee_payroll_npwp'];

							$jumlah_pendapatan = $gapok+$tunjangan;

							if ($tanggungan > 4) {
								if ($jumlah_pendapatan > 12000000) {
									$bpjs_k_tanggungan = ($tanggungan-4)*0.01*12000000;
								} else {
									$bpjs_k_tanggungan = ($tanggungan-4)*0.01*$jumlah_pendapatan;
								}
							} else {
								$bpjs_k_tanggungan = 0;
							}

							if ($jumlah_pendapatan > 12000000) {
								$bpjs_k = (0.01*12000000)+$bpjs_k_tanggungan;
								$bpjs_k_benefit = (0.04*12000000)+$bpjs_k_tanggungan;
							} else {
								$bpjs_k = (0.01*$jumlah_pendapatan)+$bpjs_k_tanggungan;
								$bpjs_k_benefit = (0.04*$jumlah_pendapatan)+$bpjs_k_tanggungan;
							}
							$biaya_jabatan    = 0.05*$jumlah_pendapatan;
							$bpjs_jht         = 0.02*$jumlah_pendapatan;
							$bpjs_jht_benefit = 0.037*$jumlah_pendapatan;
							$bpjs_jp          = 0.01*$jumlah_pendapatan;
							$bpjs_jp_benefit  = 0.02*$jumlah_pendapatan;
							
							// die(print_r($bpjs_k.'==='.$bpjs_k_benefit.'==='.$bpjs_jht_benefit.'==='.$bpjs_jp_benefit)); 

							$jumlah_pengurangan = $biaya_jabatan+$bpjs_jht+$bpjs_jp;

							$netto_sebulan = $jumlah_pendapatan-$jumlah_pengurangan;
							$netto_setahun = (12*$netto_sebulan)+$nilai_bonus;
							
							$ptkp_pribadi = 54000000;
							
							// 1 = Belum Menikah, 2 = Menikah
							if ($statusMenikah == 2) {
								if ($tanggungan > 3) {
									$ptkp_tambahan = 3*4500000;
								} else if ($tanggungan > 0) {
									$ptkp_tambahan = $tanggungan*4500000;
								} else {
									$ptkp_tambahan = 4500000;
								}
							} else {
								$ptkp_tambahan = 0;
							}

							$ptkp_setahun = $ptkp_pribadi+$ptkp_tambahan;

							if (($netto_setahun-$ptkp_setahun) > 0) {
								$gajiKenaPajak = $netto_setahun-$ptkp_setahun;
							} else {
								$gajiKenaPajak = 0;
							}
							
							if ($npwp != '') {
								$pajak = 0;
								if ($gajiKenaPajak > 0) {
									if ($gajiKenaPajak > 500000000) {
										$tier1 = 0.05 * 50000000;
										$tier2 = 0.15 * 200000000;
										$tier3 = 0.25 * 250000000;
										$tier4 = 0.3 * ($gajiKenaPajak - 500000000);
										$pajak = $tier1 + $tier2 + $tier3 + $tier4;
									} elseif ($gajiKenaPajak > 250000000) {
										$tier1 = 0.05 * 50000000;
										$tier2 = 0.15 * 200000000;
										$tier3 = 0.25 * ($gajiKenaPajak - 250000000);
										$pajak = $tier1 + $tier2 + $tier3;
									} elseif ($gajiKenaPajak > 50000000) {
										$tier1 = 0.05 * 50000000;
										$tier2 = 0.15 * ($gajiKenaPajak - 50000000);
										$pajak = $tier1 + $tier2;
									} else {
										$tier1 = 0.05 * $gajiKenaPajak;
										$pajak = $tier1;
									}
								}
							} else {
								$pajak = 0;
								if ($gajiKenaPajak > 0) {
									if ($gajiKenaPajak > 500000000) {
										$tier1 = 0.06 * 50000000;
										$tier2 = 0.18 * 200000000;
										$tier3 = 0.3 * 250000000;
										$tier4 = 0.36 * ($gajiKenaPajak - 500000000);
										$pajak = $tier1 + $tier2 + $tier3 + $tier4;
									} elseif ($gajiKenaPajak > 250000000) {
										$tier1 = 0.06 * 50000000;
										$tier2 = 0.18 * 200000000;
										$tier3 = 0.3 * ($gajiKenaPajak - 250000000);
										$pajak = $tier1 + $tier2 + $tier3;
									} elseif ($gajiKenaPajak > 50000000) {
										$tier1 = 0.06 * 50000000;
										$tier2 = 0.18 * ($gajiKenaPajak - 50000000);
										$pajak = $tier1 + $tier2;
									} else {
										$tier1 = 0.06 * $gajiKenaPajak;
										$pajak = $tier1;
									}
								}
							}

							$pph21_setahun = 0.05*$pajak;
							$pph21_sebulan = round($pph21_setahun/12);

							// die(print_r($gapok.'==='.$tunjangan.'==='.$pph21_setahun.'==='.$pph21_sebulan)); 
							
							$sqlPayrollDetail = $this->db->query("SELECT DISTINCT employee_payroll_detail_component_id FROM employee_payroll_detail WHERE employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ORDER BY employee_payroll_detail_component_id ASC ");
							if ($sqlPayrollDetail->num_rows() > 0) {
								foreach ($sqlPayrollDetail->result_array() as $keyP1 => $value) {
									$sqlMasterComponent = $this->db->query("SELECT * FROM master_payroll_component WHERE master_payroll_component_id = '".$value['employee_payroll_detail_component_id']."' AND master_payroll_component_status IN (1) ");
									if ($sqlMasterComponent->num_rows() > 0) {
										$rowMC = $sqlMasterComponent->row_array();
										$namaCom = $rowMC['master_payroll_component_name'];
									} else {
										$namaCom = '';
									}

									$arrayPayrollDetail[$keyP1]['komponen'] = $namaCom;
									$arrayPayrollDetail[$keyP1]['total']    = 0;
									$arrayPayrollDetail[$keyP1]['detail']   = array();

									if ($rowMC['master_payroll_component_id'] == 1 || $rowMC['master_payroll_component_id'] == 3) {
										$sqlTHRGaji = $this->db->query("SELECT * FROM payroll_bonus WHERE employee_id = '".$valueEmployee['employee_id']."' AND payroll_bonus_month = '".$month."' AND payroll_bonus_years = '".$years."' ");
										if ($sqlTHRGaji->num_rows() > 0) {
											foreach ($sqlTHRGaji->result_array() as $key => $valueTHRGaji) {
												if ($valueTHRGaji['payroll_bonus_type'] == 1) {
													$nama_bonus = 'THR';
												} else {
													$nama_bonus = 'Bonus';
												}
												$arrayPayrollDetail[$keyP1]['total'] += $valueTHRGaji['payroll_bonus_amount'];
												$arrayPayrollDetail[$keyP1]['detail'][] = array(
													'employee_payroll_detail_id' 			=> 999,
													'employee_payroll_detail_name' 			=> $nama_bonus,
													'employee_payroll_detail_amount' 		=> $valueTHRGaji['payroll_bonus_amount'],
												);  
											}
										} 
									}

									$sqlPayrollDetail2 = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_detail_component_id = '".$value['employee_payroll_detail_component_id']."' AND employee_payroll_id = '".$rowPayroll['employee_payroll_id']."' ");
									if ($sqlPayrollDetail2->num_rows() > 0) {
										foreach ($sqlPayrollDetail2->result_array() as $value2) {
											
											if ($value2['employee_payroll_detail_component_id_detail'] == '3') {
												$valueAmunt = round($pph21_sebulan);
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '4') {
												$valueAmunt = round($bpjs_k);
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '5') {
												$valueAmunt = round($bpjs_jht);
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '6') {
												$valueAmunt = round($bpjs_jp);
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '7') {
												$hitung_kehadiran = $jmlAttendanceTotal-$jmlAttendance;
												if ($hitung_kehadiran > 0) {
													$hitung_harian_kehadiran = $gapok/22;
													$valueAmunt = round($hitung_harian_kehadiran*$hitung_kehadiran);
												} else {
													$valueAmunt = round(0);
												}
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '9') {
												$valueAmunt = round($bpjs_k_benefit);
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '10') {
												$valueAmunt = round($bpjs_jht_benefit);
											} else if ($value2['employee_payroll_detail_component_id_detail'] == '11') {
												$valueAmunt = round($bpjs_jp_benefit);
											} else {
												$valueAmunt = round($value2['employee_payroll_detail_amount']);
											}
											$valueName  = $value2['employee_payroll_detail_name'];

											$arrayPayrollDetail[$keyP1]['total'] += $valueAmunt;
											$arrayPayrollDetail[$keyP1]['detail'][] = array(
												'employee_payroll_detail_id' 			=> $value2['employee_payroll_detail_id'],
												'employee_payroll_detail_name' 			=> $valueName,
												'employee_payroll_detail_amount' 		=> $valueAmunt,
											);  
										}
									} else {
										$arrayPayrollDetail = array();
									}
								}
							} else {
								$arrayPayrollDetail = array();
							}

							$totalTakeHomePay = $gapok+($arrayPayrollDetail[0]['total']-$arrayPayrollDetail[1]['total']);

							$dataInsertPayroll = array(
								'temp_employee_id'           => $valueEmployee['employee_id'],
								'temp_payroll_month'         => $month,
								'temp_payroll_year'          => $years,
								'temp_payroll_absen'         => $jmlAttendance,
								'temp_payroll_basic_salary'  => $rowPayroll['employee_payroll_basic_salary'],
								'temp_payroll_take_home_pay' => $totalTakeHomePay,
							);

							if ($this->db->insert('temp_payroll', $dataInsertPayroll)) {
								$id_payroll = $this->db->insert_id();
								
								foreach ($arrayPayrollDetail as $key => $valueArray) {
									foreach ($valueArray['detail'] as $key2 => $valueArray2) {
										$dataInsertPayrollDetail = array(
											'temp_payroll_id'                    => $id_payroll,
											'temp_payroll_detail_component_name' => $valueArray['komponen'],
											'temp_payroll_detail_name'           => $valueArray2['employee_payroll_detail_name'],
											'temp_payroll_detail_amount'         => $valueArray2['employee_payroll_detail_amount'],
										);
										$this->db->insert('temp_payroll_detail', $dataInsertPayrollDetail);
									}
								}
							}
							
							$arrayPayroll = array(
								// 'employee_id'                           => $employee_id,							
								'employee_payroll_bank_name'            => $rowPayroll['employee_payroll_bank_name'],
								'employee_payroll_bank_account'         => $rowPayroll['employee_payroll_bank_account'],
								'employee_payroll_bank_account_holder'  => $rowPayroll['employee_payroll_bank_account_holder'],
								'employee_payroll_npwp'                 => $rowPayroll['employee_payroll_npwp'],
								'employee_payroll_bpjs_ketenagakerjaan' => $rowPayroll['employee_payroll_bpjs_ketenagakerjaan'],
								'employee_payroll_bpjs_kesehatan'       => $rowPayroll['employee_payroll_bpjs_kesehatan'],
								'employee_payroll_basic_salary'         => $rowPayroll['employee_payroll_basic_salary'],
								'employee_payroll_detail'               => $arrayPayrollDetail,
							);  
						} else {

							$arrayPayroll = array();
						}
						// die(print_r($jmlAttendance));

						$data_array[] = array(
							'employee_id'                => $valueEmployee['employee_id'],
							'employee_code'              => $valueEmployee['employee_code'],
							'employee_first_name'        => $valueEmployee['employee_first_name'],
							'employee_last_name'         => $valueEmployee['employee_last_name'],
							'employee_email'             => $valueEmployee['employee_email'],
							'employee_department_id'     => $organization_name,
							'employee_job_position'      => $job_position,
							'employee_job_level'         => $job_level,
							'employee_employment_status' => ($valueEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent',
							'employee_branch_name'       => ($valueEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs',
							'payroll'          			 => $arrayPayroll,
							'totalTakeHomePay' 			 => $totalTakeHomePay,
							'absen'            			 => $jmlAttendance
						);
					}

					$data['title']      = 'Jalankan Gaji';
					$data['status']     = 0;
					$data['pesan']      = "Gaji Belum Dijalankan";
					$data['data_array'] = $data_array;

				}

			}

			// die(print_r($years."==".$month));
		} else {
			$data['title']  = 'Jalankan Gaji';
			$data['status'] = 1;
			$data['pesan']  = "Gaji Belum Bisa Dijalankan";
		}
		
		// die(print_r($data));
		$this->load->view('Admin/Gaji/Jalankan_gaji_view', $data);
	}

	public function perbarui_jalankan_gaji()
	{
		// die(print_r($_POST));
		if ($this->input->post('P_Amount')) {
			foreach ($this->input->post('P_Amount') as $key => $value) {
				$data_payroll_detail = array(
					// 'employee_payroll_detail_key ' => $key,
					'temp_payroll_detail_amount ' => $value,
				);
				$this->db->update('temp_payroll_detail', $data_payroll_detail, ['temp_payroll_detail_id' => $key]);
			}
			// die(print_r($data_payroll_detail));
			$response = array(
				"status"    => "TRUE",
				"message"   => "Update Berhasil",
			);
		} else {
			$response = array(
				"status"    => "FALSE",
				"message"   => "Update Gagal",
			);
		}

		$this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response))
            ->_display();
        exit;
	}

	public function proses_jalankan_gaji()
	{
		$payrollSetting = $this->db->query("SELECT * FROM payroll_setting LIMIT 1");
		$rowPayrrolSetting = $payrollSetting->row_array();

		$date = $rowPayrrolSetting['payroll_setting_date'].'-'.date('m');

		$years = date('Y');
		$month = date('m');

		if (date('d-m') >= $date) {

			$sqlCekPayroll = $this->db->query("SELECT * FROM payroll WHERE payroll_month = '".$month."' AND payroll_year = '".$years."' LIMIT 1");
			if ($sqlCekPayroll->num_rows() > 0) {
				$data['title']  = 'Jalankan Gaji';
				$data['status'] = 1;
				$data['pesan']  = "Gaji Sudah Dijalankan";
			} else {
				$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_employment_status NOT IN (3)");
				foreach ($sqlEmployee->result_array() as $valueEmployee) {

					$sqlOrganization = $this->db->query("SELECT master_department_name FROM master_department WHERE master_department_id = '".$valueEmployee['employee_department_id']."' ");
					if ($sqlOrganization->num_rows() > 0) {
						$organization_name = $sqlOrganization->row_array()['master_department_name'];
					} else {
						$organization_name = '';
					}

					$sqlJobPosition = $this->db->query("SELECT master_job_position_name FROM master_job_position WHERE master_job_position_id = '".$valueEmployee['employee_job_position']."' ");
					if ($sqlJobPosition->num_rows() > 0) {
						$job_position = $sqlJobPosition->row_array()['master_job_position_name'];
					} else {
						$job_position = '';
					}

					$sqlJobLevel = $this->db->query("SELECT master_job_level_name FROM master_job_level WHERE master_job_level_id  = '".$valueEmployee['employee_job_level']."' ");
					if ($sqlJobLevel->num_rows() > 0) {
						$job_level = $sqlJobLevel->row_array()['master_job_level_name'];
					} else {
						$job_level = '';
					}
					
					$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id = '".$valueEmployee['employee_id']."' ");
					if ($sqlPayroll->num_rows() > 0) {
						$rowPayroll = $sqlPayroll->row_array();	

						$sqlTempPayroll = $this->db->query("SELECT * FROM temp_payroll WHERE temp_employee_id = '".$valueEmployee['employee_id']."' AND temp_payroll_month = '".$month."' AND temp_payroll_year = '".$years."' ");
						if ($sqlTempPayroll->num_rows() > 0) {
							$rowsqlTempPayroll = $sqlTempPayroll->row_array();

							$totalTakeHomePay = $rowsqlTempPayroll['temp_payroll_take_home_pay'];
							$jmlAttendance    = $rowsqlTempPayroll['temp_payroll_absen'];

							$arrayPayrollDetail = array();
							$sqlTempPayrollDetail = $this->db->query("SELECT DISTINCT temp_payroll_detail_component_name FROM temp_payroll_detail WHERE temp_payroll_id = '".$rowsqlTempPayroll['temp_payroll_id']."' ");
							if ($sqlTempPayrollDetail->num_rows() > 0) {
								foreach ($sqlTempPayrollDetail->result_array() as $keyTempPayrollDetail => $valueTempPayrollDetail) {

									$arrayPayrollDetail[$keyTempPayrollDetail]['komponen'] = $valueTempPayrollDetail['temp_payroll_detail_component_name'];
									$arrayPayrollDetail[$keyTempPayrollDetail]['total']    = 0;
									$arrayPayrollDetail[$keyTempPayrollDetail]['detail']   = array();

									$sqlTempPayrollDetail2 = $this->db->query("SELECT * FROM temp_payroll_detail WHERE temp_payroll_id = '".$rowsqlTempPayroll['temp_payroll_id']."' AND temp_payroll_detail_component_name = '".$valueTempPayrollDetail['temp_payroll_detail_component_name']."' ");
									if ($sqlTempPayrollDetail2->num_rows() > 0) {
										foreach ($sqlTempPayrollDetail2->result_array() as $value2) {
											
											$valueAmunt = round($value2['temp_payroll_detail_amount']);
											$valueName  = $value2['temp_payroll_detail_name'];

											$arrayPayrollDetail[$keyTempPayrollDetail]['total'] += $valueAmunt;
											$arrayPayrollDetail[$keyTempPayrollDetail]['detail'][] = array(
												// 'employee_payroll_detail_id' 			=> $value2['employee_payroll_detail_id'],
												'employee_payroll_detail_name' 			=> $valueName,
												'employee_payroll_detail_amount' 		=> $valueAmunt,
											);  
										}
									} else {
										
									}
								}
							} else {
								
							}
							
						} else {
						}

					} else {
						$totalTakeHomePay = 0;
						$jmlAttendance    = 0;

						$arrayPayroll = array();
					}
					
					$dataInsertPayroll = array(
						'employee_id'           => $valueEmployee['employee_id'],
						'payroll_month'         => $month,
						'payroll_year'          => $years,
						'payroll_absen'         => $jmlAttendance,
						'payroll_basic_salary'  => $rowPayroll['employee_payroll_basic_salary'],
						'payroll_take_home_pay' => $totalTakeHomePay,
					);

					// die(print_r($arrayPayrollDetail));

					if ($this->db->insert('payroll', $dataInsertPayroll)) {
						$id_payroll = $this->db->insert_id();
						
						foreach ($arrayPayrollDetail as $key => $valueArray) {
							foreach ($valueArray['detail'] as $key2 => $valueArray2) {
								$dataInsertPayrollDetail = array(
									'payroll_id'                    => $id_payroll,
									'payroll_detail_component_name' => $valueArray['komponen'],
									'payroll_detail_name'           => $valueArray2['employee_payroll_detail_name'],
									'payroll_detail_amount'         => $valueArray2['employee_payroll_detail_amount'],
								);
								$this->db->insert('payroll_detail', $dataInsertPayrollDetail);
							}
						}
					}

					$response['status'] = 'TRUE';
					$response['pesan']  = "Gaji Berhasil Dijalankan";
				}
			}
		} else {
			$response['status'] = 'FALSE';
			$response['pesan']  = "Gaji Gagal Dijalankan";
		}

		$this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response))
            ->_display();
        exit;
	}

	public function tampil_detail_jalankan_gaji($id)
	{
		$years = date('Y');
		$month = date('m');

		$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$id."' ");
		if ($sqlEmployee->num_rows() > 0) {
			$valueEmployee = $sqlEmployee->row_array();

			$arrayPayrollDetail = array();

			$sqlPayroll = $this->db->query("SELECT * FROM employee_payroll WHERE employee_id = '".$valueEmployee['employee_id']."' ");
			if ($sqlPayroll->num_rows() > 0) {
				$rowPayroll = $sqlPayroll->row_array();	

				$sqlTempPayroll = $this->db->query("SELECT * FROM temp_payroll WHERE temp_employee_id = '".$valueEmployee['employee_id']."' AND temp_payroll_month = '".$month."' AND temp_payroll_year = '".$years."' ");
				if ($sqlTempPayroll->num_rows() > 0) {
					$rowsqlTempPayroll = $sqlTempPayroll->row_array();

					$totalTakeHomePay = $rowsqlTempPayroll['temp_payroll_take_home_pay'];
					$jmlAttendance    = $rowsqlTempPayroll['temp_payroll_absen'];

					$arrayPayroll = array();
					$sqlTempPayrollDetail = $this->db->query("SELECT DISTINCT temp_payroll_detail_component_name FROM temp_payroll_detail WHERE temp_payroll_id = '".$rowsqlTempPayroll['temp_payroll_id']."' ");
					if ($sqlTempPayrollDetail->num_rows() > 0) {
						foreach ($sqlTempPayrollDetail->result_array() as $keyTempPayrollDetail => $valueTempPayrollDetail) {

							$arrayPayroll[$keyTempPayrollDetail]['komponen'] = $valueTempPayrollDetail['temp_payroll_detail_component_name'];
							$arrayPayroll[$keyTempPayrollDetail]['total']    = 0;
							$arrayPayroll[$keyTempPayrollDetail]['detail']   = array();

							$sqlTempPayrollDetail2 = $this->db->query("SELECT * FROM temp_payroll_detail WHERE temp_payroll_id = '".$rowsqlTempPayroll['temp_payroll_id']."' AND temp_payroll_detail_component_name = '".$valueTempPayrollDetail['temp_payroll_detail_component_name']."' ");
							if ($sqlTempPayrollDetail2->num_rows() > 0) {
								foreach ($sqlTempPayrollDetail2->result_array() as $value2) {
									
									$valueAmunt = round($value2['temp_payroll_detail_amount']);
									$valueName  = $value2['temp_payroll_detail_name'];

									$arrayPayroll[$keyTempPayrollDetail]['total'] += $valueAmunt;
									$arrayPayroll[$keyTempPayrollDetail]['detail'][] = array(
										'employee_payroll_detail_id' 			=> $value2['temp_payroll_detail_id'],
										'employee_payroll_detail_name' 			=> $valueName,
										'employee_payroll_detail_amount' 		=> $valueAmunt,
									);  
								}
							} else {
								
							}
						}
					} else {
						
					}
					
				} else {
				}
			} else {
				$totalTakeHomePay = 0;
				$jmlAttendance    = 0;

				$arrayPayroll = array();
			}

			$dataArray = array(
				'payroll'          			 => $arrayPayroll,
				'totalTakeHomePay' 			 => $totalTakeHomePay,
				'absen'            			 => $jmlAttendance
			);

			$response = array(
				"status"    => "TRUE",
				"message"   => "Ditemukan",
				"dataArray" => $dataArray
			);
		} else {
			$response = array(
				"status"    => "FALSE",
				"message"   => "Tidak Ditemukan",
				"dataArray" => array()
			);
		}		

		$this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response))
            ->_display();
        exit;
	}

	public function test_gaji($tahun = 0, $bulan = 0)
    {
		// die(print_r($tahun));
		if ($tahun != 0 && $bulan != 0) {
			$sqlPayroll = $this->db->query("SELECT * FROM payroll WHERE payroll_year = '".$tahun."' AND payroll_month = '".$bulan."' ");
			if ($sqlPayroll->num_rows() > 0) {
				foreach ($sqlPayroll->result_array() as $rowPayroll) {	
					$sql = $this->db->query("SELECT employee_id, employee_first_name, employee_last_name, employee_email, employee_department_id, employee_job_position, employee_job_level, employee_employment_status, employee_branch_name FROM employee WHERE employee_id = '".$rowPayroll['employee_id']."' ");
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

						$employee_id                          = $rowEmployee['employee_id'];
						$employee_first_name                  = $rowEmployee['employee_first_name'];
						$employee_last_name                   = $rowEmployee['employee_last_name'];
						$employee_email                       = $rowEmployee['employee_email'];
						$employee_department_id               = $organization_name;
						$employee_job_position                = $job_position;
						$employee_job_level                   = $job_level;
						$employee_employment_status           = ($rowEmployee['employee_employment_status'] == 1) ? 'Kontrak' : 'Permanent';
						$employee_branch_name                 = ($rowEmployee['employee_branch_name'] == 1) ? 'Pusat' : 'Cabangs';
					} else {
						$employee_id                          = '';
						$employee_first_name                  = '';
						$employee_last_name                   = '';
						$employee_email                       = '';
						$employee_department_id               = '';
						$employee_job_position                = '';
						$employee_job_level                   = '';
						$employee_employment_status           = '';
						$employee_branch_name                 = '';
					}

					$basic_salary  = $rowPayroll['payroll_basic_salary'];
					$take_home_pay = $rowPayroll['payroll_take_home_pay'];

					$sqlMasterComPayroll = $this->db->query("SELECT DISTINCT payroll_detail_component_name FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' ");
					foreach ($sqlMasterComPayroll->result_array() as $keyComPay => $valueMasterComPayroll) {
						$payrollComponentName = $valueMasterComPayroll['payroll_detail_component_name'];

						$payrol[$keyComPay]['com_name'] = $payrollComponentName;
						$payrol[$keyComPay]['total'] = 0;
						$sqlPayrollDdetail = $this->db->query("SELECT * FROM payroll_detail WHERE payroll_id = '".$rowPayroll['payroll_id']."' AND payroll_detail_component_name = '".$valueMasterComPayroll['payroll_detail_component_name']."' ");
						if ($sqlPayrollDdetail->num_rows() > 0) {
							foreach ($sqlPayrollDdetail->result_array() as $keyComPayDet =>  $valuePayrollDdetail) {
								$payrol[$keyComPay]['total'] += $valuePayrollDdetail['payroll_detail_amount'];
							}
						} else {
							$payrol[$keyComPay]['total'] = 0;
						}
					}

					$dataArray[] = array(
						'employee_id'                          => $employee_id,
						'employee_first_name'                  => $employee_first_name,
						'employee_last_name'                   => $employee_last_name,
						'employee_email'                       => $employee_email,
						'employee_department_id'               => $employee_department_id,
						'employee_job_position'                => $employee_job_position,
						'employee_job_level'                   => $employee_job_level,
						'employee_employment_status'           => $employee_employment_status,
						'employee_branch_name'                 => $employee_branch_name,
						'employee_component_tunjangan'         => $payrol[0]['com_name'],
						'employee_component_tunjangan_total'   => $payrol[0]['total'],
						'employee_component_pengurangan'       => $payrol[1]['com_name'],
						'employee_component_pengurangan_total' => $payrol[1]['total'],
						'employee_component_manfaat'           => $payrol[2]['com_name'],
						'employee_component_manfaat_total'     => $payrol[2]['total'],
						'employee_salary'     		   		   => $basic_salary,
						'employee_take_home_pay'     		   => $take_home_pay,
					);
				}
			} else {
				$dataArray = array(
					'employee_id'                          => '',
					'employee_first_name'                  => '',
					'employee_last_name'                   => '',
					'employee_email'                       => '',
					'employee_department_id'               => '',
					'employee_job_position'                => '',
					'employee_job_level'                   => '',
					'employee_employment_status'           => '',
					'employee_branch_name'                 => '',
					'employee_component_tunjangan'         => '',
					'employee_component_tunjangan_total'   => '',
					'employee_component_pengurangan'       => '',
					'employee_component_pengurangan_total' => '',
					'employee_component_manfaat'           => '',
					'employee_component_manfaat_total'     => '',
					'employee_salary'     		   		   => '',
					'employee_take_home_pay'     		   => '',
				);
			}
		} else {
			$dataArray = array(
				'employee_id'                          => '',
				'employee_first_name'                  => '',
				'employee_last_name'                   => '',
				'employee_email'                       => '',
				'employee_department_id'               => '',
				'employee_job_position'                => '',
				'employee_job_level'                   => '',
				'employee_employment_status'           => '',
				'employee_branch_name'                 => '',
				'employee_component_tunjangan'         => '',
				'employee_component_tunjangan_total'   => '',
				'employee_component_pengurangan'       => '',
				'employee_component_pengurangan_total' => '',
				'employee_component_manfaat'           => '',
				'employee_component_manfaat_total'     => '',
				'employee_salary'     		   		   => '',
				'employee_take_home_pay'     		   => '',
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

	public function thr()
	{
		if ($_GET) {
			$waktu = base64_decode($this->input->get('w'));
			$bulan = date('n', strtotime($waktu));
			$tahun = date('Y', strtotime($waktu));

			$list_payroll_bonus = $this->db->query("SELECT * FROM payroll_bonus a, employee b WHERE b.employee_id = a.employee_id AND a.payroll_bonus_month = '".$bulan."' AND a.payroll_bonus_years = '".$tahun."' ");
		} else {
			$waktu = '';
			$bulan = '';
			$tahun = '';

			$list_payroll_bonus = "";
		}

		$data = array(
			'title'              => 'THR',
			'waktu'              => $waktu,
			'bulan'              => $tahun,
			'tahun'              => $bulan,
			'list_karyawan'      => $this->db->query("SELECT * FROM employee WHERE employee_employment_status NOT IN (3)"),
			'list_payroll_bonus' => $list_payroll_bonus
        );
		$this->load->view('Admin/Gaji/Thr_view', $data);
	}

	public function thr_cek_data()
	{
		$bulan = $this->input->post('masa_pajak_hidden');
		$tahun = date('Y', strtotime($this->input->post('waktu_thr')));
		// die(print_r($bulan));
		$sqlCek = $this->db->query("SELECT * FROM payroll_bonus WHERE payroll_bonus_month = '".$bulan."' AND payroll_bonus_years = '".$tahun."' ");
		if ($sqlCek->num_rows() > 0) {
			$response = array(
				'status'  => '0',
				'message' => 'Periode THR di bulan ini dan tahun ini sudah di tambahkan',
			);
		} else {
			if ($this->input->post('check_id')) {
				foreach ($this->input->post('check_id') as $key => $value) {
					$sqlCekPayroll = $this->db->query("SELECT employee_payroll_basic_salary FROM employee_payroll WHERE employee_id = '".$key."' ");
					if ($sqlCekPayroll->num_rows() > 0) {
						$basic_salary = $sqlCekPayroll->row_array()['employee_payroll_basic_salary'];
					} else {
						$basic_salary = 0;
					}

					$sqlEmployee = $this->db->query("SELECT employee_join_start_date FROM employee WHERE employee_id = '".$key."' AND employee_employment_status NOT IN (3) ");
					if ($sqlEmployee->num_rows() > 0) {
						$rowEmployee = $sqlEmployee->row_array();

						$awal  = date_create($rowEmployee['employee_join_start_date']);
						$akhir = date_create(date('Y-m-d', strtotime($this->input->post('waktu_thr'))));
						$diff  = date_diff($awal, $akhir);

						$selisih = $diff->m;
					} else {
						$selisih = 0;
					}

					if ($selisih > 12) {
						$amount = $basic_salary;
					} else {
						$amount = ($basic_salary/12)*$selisih;
					}

					$dataInsert = array(
						'employee_id'                     => $key,
						'payroll_bonus_length_of_service' => $selisih,
						'payroll_bonus_month'             => $bulan,
						'payroll_bonus_years'             => $tahun,
						'payroll_bonus_type'              => 1,
						'payroll_bonus_amount'            => $amount,
						'payroll_bonus_status'            => 0,
						'payroll_bonus_createdate'        => date('Y-m-d H:i:s')
					);
					$this->db->insert('payroll_bonus', $dataInsert);
				}

				$response = array(
					'status'  => '1',
					'message' => '',
				);
			} else {
				$response = array(
					'status'  => '0',
					'message' => 'Ada kesalahan, silahkan cek kembali',
				);
			}
		}
		// die(print_r($dataInsert));

		$this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response))
            ->_display();
        exit;
	}

	public function thr_jalankan()
	{
		// die(print_r($_POST));
		if ($this->input->post('total_thr')) {
			foreach ($this->input->post('total_thr') as $key => $value) {
				$dataUpdate = array(
					'payroll_bonus_amount' => $value,
					'payroll_bonus_status' => 1
				);
				$this->db->update('payroll_bonus', $dataUpdate, ['payroll_bonus_id' => $key]);
			}

			$response = array(
				'status'  => '1',
				'message' => 'THR Berhasil Dijalankan',
			);
		} else {
			$response = array(
				'status'  => '0',
				'message' => 'Ada kesalahan, silahkan cek kembali',
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
