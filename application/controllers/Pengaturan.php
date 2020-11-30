<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => 'Employees', 
        );
		$this->load->view('Admin/Employees/Employees_list_view', $data);
    }
	
	// PAYROLL {
		public function komponen_gaji()
		{
			$data = array(
				'title' => 'Payroll Component', 
			);
			$this->load->view('Admin/Settings/Payroll_component_view', $data);
		}
		
		public function payroll_component_get_data()
		{
			$sql = $this->db->query("SELECT * FROM master_payroll_component");
			if ($sql->num_rows() > 0) {
				foreach ($sql->result_array() as $value) {
					$sqlDetail = $this->db->query("SELECT * FROM master_payroll_component_detail WHERE payroll_component_master_id = '".$value['master_payroll_component_id']."' ");
					if ($sqlDetail->num_rows() > 0) {
						$list = '<ul>';
						foreach ($sqlDetail->result_array() as $valueDetail) {
							if ($valueDetail['master_payroll_component_detail_status_mandatory'] == 1) {
								$mandatory = '<i class="icon-sm text-success flaticon2-lock" title="Komponen Utama">';
							} else {
								$mandatory = '';
							}

							if ($valueDetail['master_payroll_component_detail_status'] == 0) {
								$text_color = "text-danger";
							} else {
								$text_color = "";
							}

							$list .= '<li class="'.$text_color.'">'.$valueDetail['master_payroll_component_detail_name'].' '.$mandatory.'</i></li>';
						}
						$list .= '</ul>';
					} else {
						$list = '';
					}
					$dataArray[] = array(
						'RecordID'               => $value['master_payroll_component_id'],
						'PayrollComponentName'   => $value['master_payroll_component_name'],
						'PayrollComponentDetail' => $list,
						'Status'                 => $value['master_payroll_component_status'],
					);
				}
			} else {
				$dataArray = array(
					'RecordID'               => '',
					'PayrollComponentName'   => '',
					'PayrollComponentDetail' => '',
					'Status'                 => '',
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

		public function payroll_component_add_data() 
		{
			// die(print_r($_POST));
			$dataInsert = array(
				"master_payroll_component_name"   => $this->input->post('payroll_component_name'),
				"master_payroll_component_status" => $this->input->post('payroll_component_status'),
			);
			// die(print_r($dataInsert));
			if ($this->db->insert('master_payroll_component', $dataInsert)) {
				$id_payroll_component = $this->db->insert_id();

				foreach ($this->input->post('add_payroll_detail_name') as $key => $value) {
					$dataInsertJobPosition = array(
						'payroll_component_master_id'                      => $id_payroll_component,
						'master_payroll_component_detail_name'             => $this->input->post('add_payroll_detail_name')[$key],
						'master_payroll_component_detail_status'           => $this->input->post('add_payroll_detail_status')[$key],
					);
					$this->db->insert('master_payroll_component_detail', $dataInsertJobPosition);
				}

				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function payroll_component_get_edit_data($id)
		{
			$sql = $this->db->query("SELECT * FROM master_payroll_component WHERE master_payroll_component_id = '".$id."' ");
			if ($sql->num_rows() > 0) {
				$row = $sql->row_array();
				$sqlDetail = $this->db->query("SELECT * FROM master_payroll_component_detail WHERE payroll_component_master_id = '".$row['master_payroll_component_id']."' ");
				if ($sqlDetail->num_rows() > 0) {
					foreach ($sqlDetail->result_array() as $valueDetail) {
						$arrayDetail[] = array(
							'master_payroll_component_detail_id'               => $valueDetail['master_payroll_component_detail_id'],
							'master_payroll_component_detail_name'             => $valueDetail['master_payroll_component_detail_name'],
							'master_payroll_component_detail_status'           => $valueDetail['master_payroll_component_detail_status'],
							'master_payroll_component_detail_status_mandatory' => $valueDetail['master_payroll_component_detail_status_mandatory'],
						);
					}
				} else {
					$arrayDetail = array();
				}
				
				$response = array(
					'master_payroll_component_id'     => $row['master_payroll_component_id'],
					'master_payroll_component_name'   => $row['master_payroll_component_name'],
					'master_payroll_component_status' => $row['master_payroll_component_status'],
					'arrayDetail'                     => $arrayDetail
				);
			} else {
				$response = array();
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}    
		
		public function payroll_component_update_data() 
		{
			// die(print_r($_POST));
			$dataUpdate = array(
				"master_payroll_component_name"   => $this->input->post('payroll_component_name'),
				"master_payroll_component_status" => $this->input->post('payroll_component_status')
			);

			if ($this->db->update('master_payroll_component', $dataUpdate, array('master_payroll_component_id' => $this->input->post('payroll_component_id')))) {
				if ($this->input->post('add_payroll_detail_name')) {
					foreach ($this->input->post('add_payroll_detail_name') as $key => $value) {
						$dataInsertPayrollDetail = array(
							'payroll_component_master_id'                      => $this->input->post('payroll_component_id'),
							'master_payroll_component_detail_name'             => $this->input->post('add_payroll_detail_name')[$key],
							'master_payroll_component_detail_status'           => $this->input->post('add_payroll_detail_status')[$key],
						);
						$this->db->insert('master_payroll_component_detail', $dataInsertPayrollDetail);
					}
				} 

				if ($this->input->post('edit_payroll_detail_name')) {
					foreach ($this->input->post('edit_payroll_detail_name') as $key => $value) {
						$dataUpdatePayrollDetail = array(
							'master_payroll_component_detail_name'             => $this->input->post('edit_payroll_detail_name')[$key],
							'master_payroll_component_detail_status'           => $this->input->post('edit_payroll_detail_status')[$key],
						);
						$this->db->update('master_payroll_component_detail', $dataUpdatePayrollDetail, array('master_payroll_component_detail_id' => $key));
					}
				} 
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function payroll_component_delete_data($id) 
		{

			if ($this->db->delete('master_payroll_component', array('master_payroll_component_id' => $id))) {
				$this->db->delete('master_payroll_component_detail', array('payroll_component_master_id' => $id));
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
	// }

	// DEPARTEMENT {
		public function departmen()
		{
			$data = array(
				'title' => 'Departemen', 
			);
			$this->load->view('Admin/Settings/Employees_department_view', $data);
		}	
	
		public function department_get_data()
		{
			$sql = $this->db->query("SELECT * FROM master_department");
			if ($sql->num_rows() > 0) {
				foreach ($sql->result_array() as $value) {
					$sqlJobPosition = $this->db->query("SELECT * FROM master_job_position WHERE master_department_id_hd = '".$value['master_department_id']."' ");
					if ($sqlJobPosition->num_rows() > 0) {
						$list = '<ul>';
						foreach ($sqlJobPosition->result_array() as $valueJobPosition) {
							if ($valueJobPosition['master_job_position_status'] == 0) {
								$text_color = "text-danger";
							} else {
								$text_color = "";
							}

							$list .= '<li class="'.$text_color.'">'.$valueJobPosition['master_job_position_name'].'</li>';
						}
						$list .= '</ul>';
					} else {
						$list = '';
					}
					$dataArray[] = array(
						'RecordID'       => $value['master_department_id'],
						'DepartmentName' => $value['master_department_name'],
						'JobPosition'    => $list,
						'Status'         => $value['master_department_status'],
					);
				}
			} else {
				$dataArray = array(
					'RecordID'       => '',
					'DepartmentName' => '',
					'JobPosition'    => '',
					'Status'         => '',
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

		public function department_add_data() 
		{
			// die(print_r($_POST));
			$dataInsert = array(
				"master_department_name"   => $this->input->post('department_name'),
				"master_department_status" => $this->input->post('department_status'),
			);
			// die(print_r($dataInsert));
			if ($this->db->insert('master_department', $dataInsert)) {
				$id_departemen = $this->db->insert_id();

				foreach ($this->input->post('add_job_position_name') as $key => $value) {
					$dataInsertJobPosition = array(
						'master_department_id_hd'    => $id_departemen,
						'master_job_position_name'   => $this->input->post('add_job_position_name')[$key],
						'master_job_position_status' => $this->input->post('add_job_position_status')[$key],
					);
					$this->db->insert('master_job_position', $dataInsertJobPosition);
				}

				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function department_get_edit_data($id)
		{
			$sql = $this->db->query("SELECT * FROM master_department WHERE master_department_id = '".$id."' ");
			if ($sql->num_rows() > 0) {
				$row = $sql->row_array();
				$sqlJobPosition = $this->db->query("SELECT * FROM master_job_position WHERE master_department_id_hd = '".$row['master_department_id']."' ");
				if ($sqlJobPosition->num_rows() > 0) {
					foreach ($sqlJobPosition->result_array() as $valueJobPosition) {
						$arrayJobPosition[] = array(
							'master_job_position_id'     => $valueJobPosition['master_job_position_id'],
							'master_job_position_name'   => $valueJobPosition['master_job_position_name'],
							'master_job_position_status' => $valueJobPosition['master_job_position_status'],
						);
					}
				} else {
					$arrayJobPosition = array();
				}
				
				$response = array(
					'master_department_id'     => $row['master_department_id'],
					'master_department_name'   => $row['master_department_name'],
					'master_department_status' => $row['master_department_status'],
					'job_position'             => $arrayJobPosition
				);
			} else {
				$response = array();
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}    
		
		public function department_update_data() 
		{
			// die(print_r($_POST));
			$dataUpdate = array(
				"master_department_name"   => $this->input->post('department_name'),
				"master_department_status" => $this->input->post('department_status')
			);

			if ($this->db->update('master_department', $dataUpdate, array('master_department_id' => $this->input->post('department_id')))) {
				
				if ($this->input->post('add_job_position_name')) {
					foreach ($this->input->post('add_job_position_name') as $key => $value) {
						$dataInsertJobPosition = array(
							'master_department_id_hd'    => $this->input->post('department_id'),
							'master_job_position_name'   => $this->input->post('add_job_position_name')[$key],
							'master_job_position_status' => $this->input->post('add_job_position_status')[$key],
						);
						$this->db->insert('master_job_position', $dataInsertJobPosition);
					}
				}	

				if ($this->input->post('edit_job_position_name')) {
					foreach ($this->input->post('edit_job_position_name') as $key => $value) {
						$dataUpdateJobPosition = array(
							'master_job_position_name'   => $this->input->post('edit_job_position_name')[$key],
							'master_job_position_status' => $this->input->post('edit_job_position_status')[$key],
						);
						$this->db->update('master_job_position', $dataUpdateJobPosition, array('master_job_position_id' => $key));
					}
				}	

				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function department_delete_data($id) 
		{

			if ($this->db->delete('master_department', array('master_department_id' => $id))) {
				$this->db->delete('master_job_position', array('master_department_id_hd' => $id));
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
	// }
	
	// JOB LEVEL {
		public function level_pekerjaan()
		{
			$data = array(
				'title' => 'Job Level', 
			);
			$this->load->view('Admin/Settings/Employees_job_level_view', $data);
		}

		public function job_level_get_data()
		{
			$sql = $this->db->query("SELECT * FROM master_job_level");
			if ($sql->num_rows() > 0) {
				foreach ($sql->result_array() as $value) {
					$dataArray[] = array(
						'RecordID'          => $value['master_job_level_id'], 
						'jobLevelName'      => $value['master_job_level_name'], 
						'Status'            => $value['master_job_level_status'], 
					);
				}
			} else {
				$dataArray = array(
					'RecordID'  => '',
					'Name'      => '',
					'Status'    => '',
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($dataArray))
				->_display();
			exit;
		}

		public function job_level_add_data() 
		{
			
			$dataInsert = array(
				"master_job_level_name"   => $this->input->post('job_level_name'),
				"master_job_level_status" => $this->input->post('job_level_status'),
			);
			// die(print_r($dataInsert));
			if ($this->db->insert('master_job_level', $dataInsert)) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function job_level_get_edit_data($id)
		{
			$sql = $this->db->query("SELECT * FROM master_job_level WHERE master_job_level_id = '".$id."' ");

			if ($sql->num_rows() > 0) {
				$response = $sql->result();
			} else {
				$response = array();
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}    
		
		public function job_level_update_data() 
		{
			
			$dataUpdate = array(
				"master_job_level_name"   => $this->input->post('job_level_name'),
				"master_job_level_status" => $this->input->post('job_level_status')
			);

			if ($this->db->update('master_job_level', $dataUpdate, array('master_job_level_id' => $this->input->post('job_level_id')))) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function job_level_delete_data($id) 
		{

			if ($this->db->delete('master_job_level', array('master_job_level_id' => $id))) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
	// }

	// TIME OFF {
		public function cuti()
		{
			$data = array(
				'title' => 'Time Off', 
			);
			$this->load->view('Admin/Settings/Time_management_time_off_view', $data);
		}

		public function time_off_get_data()
		{
			$sql = $this->db->query("SELECT * FROM master_time_off");
			if ($sql->num_rows() > 0) {
				foreach ($sql->result_array() as $value) {
					$dataArray[] = array(
						'time_off_id'     => $value['master_time_off_id'],
						'time_off_name'   => $value['master_time_off_name'],
						'time_off_status' => $value['master_time_off_status'],
					);
				}
			} else {
				$dataArray = array(
					'time_off_id'     => '',
					'time_off_name'   => '',
					'time_off_status' => '',
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($dataArray))
				->_display();
			exit;
		}

		public function time_off_add_data() 
		{			
			$dataInsert = array(
				"master_time_off_name"   => $this->input->post('time_off_name'),
				"master_time_off_status" => $this->input->post('time_off_status'),
			);
			// die(print_r($dataInsert));
			if ($this->db->insert('master_time_off', $dataInsert)) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function time_off_get_edit_data($id)
		{
			$sql = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$id."' ");

			if ($sql->num_rows() > 0) {
				$response = $sql->result();
			} else {
				$response = array();
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}    
		
		public function time_off_update_data() 
		{
			
			$dataUpdate = array(
				"master_time_off_name"   => $this->input->post('time_off_name'),
				"master_time_off_status" => $this->input->post('time_off_status')
			);

			if ($this->db->update('master_time_off', $dataUpdate, array('master_time_off_id' => $this->input->post('time_off_id')))) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function time_off_delete_data($id) 
		{

			if ($this->db->delete('master_time_off', array('master_time_off_id' => $id))) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
	// }

	// ATTENDANCE {
		public function kehadiran()
		{
			$data = array(
				'title' => 'Kehadiran', 
			);
			$this->load->view('Admin/Settings/Time_management_attendance_view', $data);
		}

		public function attendance_get_data()
		{
			$sql = $this->db->query("SELECT * FROM master_attendance");
			if ($sql->num_rows() > 0) {
				foreach ($sql->result_array() as $value) {
					$dataArray[] = array(
						'attendance_id'     => $value['master_attendance_id'],
						'attendance_name'   => $value['master_attendance_name'],
						'attendance_status' => $value['master_attendance_status'],
					);
				}
			} else {
				$dataArray = array(
					'attendance_id'     => '',
					'attendance_name'   => '',
					'attendance_status' => '',
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($dataArray))
				->_display();
			exit;
		}

		public function attendance_add_data() 
		{			
			$dataInsert = array(
				"master_attendance_name"   => $this->input->post('attendance_name'),
				"master_attendance_status" => $this->input->post('attendance_status'),
			);
			// die(print_r($dataInsert));
			if ($this->db->insert('master_attendance', $dataInsert)) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function attendance_get_edit_data($id)
		{
			$sql = $this->db->query("SELECT * FROM master_attendance WHERE master_attendance_id = '".$id."' ");

			if ($sql->num_rows() > 0) {
				$response = $sql->result();
			} else {
				$response = array();
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}    
		
		public function attendance_update_data() 
		{
			
			$dataUpdate = array(
				"master_attendance_name"   => $this->input->post('attendance_name'),
				"master_attendance_status" => $this->input->post('attendance_status')
			);

			if ($this->db->update('master_attendance', $dataUpdate, array('master_attendance_id' => $this->input->post('attendance_id')))) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
		
		public function attendance_delete_data($id) 
		{

			if ($this->db->delete('master_attendance', array('master_attendance_id' => $id))) {
				$response = array(
					"status" 	=> 'TRUE'
				);
			} else {
				$response = array(
					"status" 	=> 'FALSE'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($response))
				->_display();
			exit;
		}
	// }
    
    public function posisi_pekerjaan()
	{
        $data = array(
            'title' => 'Job Position', 
        );
		$this->load->view('Admin/Employees/Employees_job_position_view', $data);
	}
	
	public function daftar_admin()
	{
		$data = array(
			'title' => 'Daftar Admin', 
		);
		$this->load->view('Admin/Settings/Daftar_admin', $data);
	}

	public function admin_get_data()
	{
		$sql = $this->db->query("SELECT * FROM admin");
		if ($sql->num_rows() > 0) {
			foreach ($sql->result_array() as $value) {
				$dataArray[] = array(
					'admin_id'       => $value['admin_id'],
					'admin_code'     => $value['admin_code'],
					'admin_name'     => $value['admin_name'],
					'admin_username' => $value['admin_username'],
					'admin_email'    => $value['admin_email'],
					'admin_status'   => $value['admin_status'],
				);
			}
		} else {
			$dataArray = array(
				'admin_id'       => '',
				'admin_code'     => '',
				'admin_name'     => '',
				'admin_username' => '',
				'admin_email'    => '',
				'admin_status'   => '',
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($dataArray))
			->_display();
		exit;
	}

	public function admin_add_data()
	{
		$kode_admin = $this->cek_kode_admin();

		$data_admin = array(
			'admin_code'        => $kode_admin,
			'admin_name'        => $this->input->post('nama_admin'),
			'admin_username'    => $this->input->post('nama_pengguna_admin'),
			'admin_email'       => $this->input->post('email'),
			'admin_password'    => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'admin_status'      => $this->input->post('admin_status'),
			'admin_create_date' => date('Y-m-d H:i:s')
        );
        // die(print_r($data_admin));

		if ($this->db->insert('admin', $data_admin)) {
			$response = array(
				"status" 	=> 'TRUE'
			);
		} else {
			$response = array(
				"status" 	=> 'FALSE'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}

	public function admin_get_edit_data($id)
	{
		$sql = $this->db->query("SELECT * FROM admin WHERE admin_id = '".$id."' ");

		if ($sql->num_rows() > 0) {
			$response = $sql->result();
		} else {
			$response = array();
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}    

	public function admin_edit_data()
	{
		$data_admin = array(
			'admin_name'        => $this->input->post('nama_admin'),
			'admin_username'    => $this->input->post('nama_pengguna_admin'),
			'admin_email'       => $this->input->post('email'),
			'admin_status'      => $this->input->post('admin_status'),
			// 'admin_id' => $this->input->post('edit_admin_id')
        );
        // die(print_r($data_admin));

		if ($this->db->update('admin', $data_admin, ['admin_id' => $this->input->post('edit_admin_id')])) {
			$response = array(
				"status" 	=> 'TRUE'
			);
		} else {
			$response = array(
				"status" 	=> 'FALSE'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}

	public function admin_ganti_pass_data()
	{
		$data_admin = array(
			'admin_password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
        );
        // die(print_r($data_admin));

		if ($this->db->update('admin', $data_admin, ['admin_id' => $this->input->post('edit_admin_id')])) {
			$response = array(
				"status" 	=> 'TRUE'
			);
		} else {
			$response = array(
				"status" 	=> 'FALSE'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}
	
	public function admin_delete_data($id)
	{
		if ($this->db->delete('admin', array('admin_id' => $id))) {
			$response = array(
				"status" 	=> 'TRUE'
			);
		} else {
			$response = array(
				"status" 	=> 'FALSE'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response))
			->_display();
		exit;
	}

	public function cek_kode_admin()
    {
		// die(print_r('asd'));
		// AD001
		// WL00001
		$dateCode = 'AD';
		$query = $this->db->query("SELECT coalesce(max(SUBSTR(`admin_code`,3, 4)),0) as admin_code FROM admin");
		if ($query->row('admin_code') == 0){			
			$urut = 1;
		}else{
			$urut = ($query->row('admin_code')*1) + 1;
		}
		$kode_admin = $dateCode.str_pad($urut,3,'0',STR_PAD_LEFT);
		// die(print_r($kode_admin));
		return $kode_admin;
	}
}
