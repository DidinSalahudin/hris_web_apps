<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_waktu extends CI_Controller {
	
	function __construct() {
		parent::__construct();   
		if (!$this->session->userdata('user_login')) {
            redirect(base_url());
        }        
    }

    public function index()
    {
        echo '';
    }

	public function cuti()
	{
        $sqlMasterCuti = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_status IN (1) ");
        foreach ($sqlMasterCuti->result_array() as $key => $valueMaster) {
            $sqlCuti = $this->db->query("SELECT count(*) as total FROM time_off WHERE time_off_type_id = '".$valueMaster['master_time_off_id']."' ");
            if ($sqlCuti->num_rows() > 0) {
                $rowCuti = $sqlCuti->row_array();
                $total = $rowCuti['total'];
            } else {
                $total = 0;
            }

            $dataArray[] = array(
                'id'    => $valueMaster['master_time_off_id'],
                'name'  => $valueMaster['master_time_off_name'],
                'total' => $total,
            );
        }
		$data['title'] = 'Cuti';
        $data['data'] = $dataArray;
        // die(print_r($data));
		$this->load->view('Time_management/Time_management_time_off_view', $data);
    }
    
    public function ambil_data_cuti($status = 0)
	{
        $dataArray = array();
        $sqlCek = $this->db->query("SELECT * FROM employee");
        foreach ($sqlCek->result_array() as $rowCek) {
            if ($status == 0) {
                $sql = $this->db->query("SELECT * FROM time_off WHERE employee_id = '".$rowCek['employee_id']."' AND time_off_status IN (1) ");
            } else {
                $sql = $this->db->query("SELECT * FROM time_off WHERE employee_id = '".$rowCek['employee_id']."' AND time_off_status NOT IN (1) ");
            }
            if ($sql->num_rows() > 0) {
                foreach ($sql->result_array() as $value) {
                    $sqlMaster = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$value['time_off_type_id']."' ");
                    if ($sqlMaster->num_rows() > 0) {
                        $rowMaster = $sqlMaster->row_array();
                        $masterTimeOffName = $rowMaster['master_time_off_name'];
                    } else {
                        $masterTimeOffName = '';
                    }

                    $sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$value['time_off_approval_by']."' ");
                    if ($sqlEmployee->num_rows() > 0) {
                        $rowEmployee = $sqlEmployee->row_array();
                        $employeeNameApproval = $rowEmployee['employee_first_name'];
                    } else {
                        $employeeNameApproval = '';
                    }

                    $dataArray[] = array(
                        'RecordID'       => $value['time_off_id'],
                        'CreateDate'     => $value['time_off_create_date'],
                        'EmployeeID'     => $rowCek['employee_code'],
                        'EmployeeName'   => $rowCek['employee_first_name'],
                        'Type'           => $masterTimeOffName,
                        'StartDate'      => $value['time_off_start_date'],
                        'StartEnd'       => $value['time_off_end_date'],
                        'ApproveBy'      => $employeeNameApproval,
                        'ApproveDate'    => $value['time_off_approval_date'],
                        'ApproveComment' => $value['time_off_approval_comment'],
                        'Reason'         => $value['time_off_reason'],
                        'Status'         => $value['time_off_status'],
                    );
                }
            } else {
                // $dataArray = array(
                //     'RecordID'       => '',
                //     'CreateDate'     => '',
                //     'Type'           => '',
                //     'StartDate'      => '',
                //     'StartEnd'       => '',
                //     'ApproveBy'      => '',
                //     'ApproveDate'    => '',
                //     'ApproveComment' => '',
                //     'Reason'         => '',
                //     'Status'         => '',
                // );
            }
        }
		// die(print_r($dataArray));
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($dataArray))
			->_display();
		exit;
    }
    
    public function cuti_disetujui()
    {
        $sqlRequest = $this->db->query("SELECT * FROM time_off WHERE time_off_id = '".$this->input->post('id_request_approve')."' ");
        if ($sqlRequest->num_rows() > 0) {
            $rowRequest = $sqlRequest->row_array();
            $dataUpdate = array(
                'time_off_status'           => 2,
                'time_off_approval_by'      => $this->session->userdata('employee_id'),
                'time_off_approval_date'    => date('Y-m-d H:i:s'),
                'time_off_approval_comment' => $this->input->post('comment_approve')
            );
            if ($this->db->update('time_off', $dataUpdate, array('time_off_id' => $this->input->post('id_request_approve')))) {
                $sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$rowRequest['employee_id']."' ");
                if ($sqlEmployee->num_rows() > 0) {
                    $rowEmployee = $sqlEmployee->row_array();
                    $time_off_balance = $rowEmployee['employee_time_off_balance']-$rowRequest['time_off_leave_day'];

                    $dataUpdateEmployee = array(
                        'employee_time_off_balance' => $time_off_balance
                    );
                    $this->db->update('employee', $dataUpdateEmployee, array('employee_id' => $rowRequest['employee_id']));
                } else {

                }

                $begin = new DateTime($rowRequest['time_off_start_date']);
                $endPlus = date('Y-m-d', strtotime('+1 days', strtotime($rowRequest['time_off_end_date'])));
                $end = new DateTime($endPlus);

                $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

                foreach($daterange as $date){
                    $dateValue = $date->format("Y-m-d");
                    $sqlCek = $this->db->query("SELECT * FROM attendance WHERE attendance_date = '".$dateValue."' AND employee_id = '".$rowRequest['employee_id']."' ");
                    if ($sqlCek->num_rows() > 0) {
                        $rowAttendance = $sqlCek->row_array();
                        $dataUpdateAttendance = array(
                            'employee_id'             => $rowRequest['employee_id'],
                            'attendance_date'         => $dateValue,
                            'attendance_schedule_in'  => '08:00',
                            'attendance_schedule_out' => '17:00',
                            'attendance_check_in'     => '',
                            'attendance_check_out'    => '',
                            'attendance_type'         => 3,
                            'attendance_timeoff_type' => $rowRequest['time_off_type_id'],
                        );
                        $this->db->update('attendance', $dataUpdateAttendance, array('attendance_id ' => $rowAttendance['attendance_id']));
                    } else {
                        $dataInsertAttendance = array(
                            'employee_id'             => $rowRequest['employee_id'],
                            'attendance_date'         => $dateValue,
                            'attendance_schedule_in'  => '08:00',
                            'attendance_schedule_out' => '17:00',
                            'attendance_check_in'     => '',
                            'attendance_check_out'    => '',
                            'attendance_type'         => 3,
                            'attendance_timeoff_type' => $rowRequest['time_off_type_id'],
                        );
                        $this->db->insert('attendance', $dataInsertAttendance);
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

    public function time_off_reject()
    {
        $dataUpdate = array(
            'time_off_status'           => 3,
            'time_off_approval_by'      => $this->session->userdata('employee_id'),
            'time_off_approval_date'    => date('Y-m-d H:i:s'),
            'time_off_approval_comment' => $this->input->post('comment_reject')
        );
        if ($this->db->update('time_off', $dataUpdate, array('time_off_id' => $this->input->post('id_request_reject')))) {
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

    public function kehadiran()
	{
        if ($_REQUEST) {
            $date = date('Y-m-d', strtotime($this->input->get('search_date')));
        } else {
            $date = date('Y-m-d');
        }
        
        if (date('D', strtotime($date)) == 'Sat' OR date('D', strtotime($date)) == 'Sun') {
            $type = 'DAYOFF';
        } else {
            $type = 'WEEKDAY';
        }

        // die(print_r($date));

        $scheduleIn  = date('H:i', strtotime('08:00'));
        $scheduleOut = date('H:i', strtotime('17:00'));
        
        $sqlCek = $this->db->query("SELECT * FROM employee");
        foreach ($sqlCek->result_array() as $rowCek) {
            
            $sqlAttendance = $this->db->query("SELECT * FROM attendance WHERE employee_code = '".$rowCek['employee_code']."' AND attendance_date = '".$date."' ");            
            if ($sqlAttendance->num_rows() > 0) {
                $rowAttendance = $sqlAttendance->row_array();

                $sqlMasterAttendance = $this->db->query("SELECT * FROM master_attendance WHERE master_attendance_id = '".$rowAttendance['attendance_type']."' ");
                if ($sqlMasterAttendance->num_rows() > 0) {
                    $rowMasterAttendance = $sqlMasterAttendance->row_array();
                    $AttendanceType = $rowMasterAttendance['master_attendance_name'];
                    $AttendanceId   = $rowMasterAttendance['master_attendance_id'];
                } else {
                    $AttendanceType = '';
                    $AttendanceId   = '';
                }

                $sqlMasterTimeOff = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$rowAttendance['attendance_timeoff_type']."' ");
                if ($sqlMasterTimeOff->num_rows() > 0) {
                    $rowMasterTimeOff = $sqlMasterTimeOff->row_array();
                    $TimeOffType = $rowMasterTimeOff['master_time_off_name'];
                } else {
                    $TimeOffType = '';
                }

                $CheckIn  = $rowAttendance['attendance_check_in'];
                $CheckOut = $rowAttendance['attendance_check_out'];

            } else {
                $AttendanceType = '';
                $AttendanceId   = '';
                $TimeOffType    = '';
                $CheckIn        = '';
                $CheckOut       = '';
            }
            $dataArray[] = array(
                'RecordID'       => $rowCek['employee_id'],
                'Code'           => $rowCek['employee_code'],
                'FirstName'      => $rowCek['employee_first_name'],
                'LastName'       => $rowCek['employee_last_name'],
                'Date'           => $date,
                'Type'           => $type,
                'ScheduleIn'     => $scheduleIn,
                'ScheduleOut'    => $scheduleOut,
                'CheckIn'        => $CheckIn,
                'CheckOut'       => $CheckOut,
                'AttendanceType' => $AttendanceType,
                'AttendanceId'   => $AttendanceId,
                'TimeOffType'    => $TimeOffType,
            );
        }

        $data['title'] = 'Attendance';
        $data['data'] = $dataArray;
        $data['date'] = date('m/d/Y', strtotime($date));
        // die(print_r($data));
		$this->load->view('Time_management/Time_management_attendance_view', $data);
    }
    
    public function attendance_get_data()
	{   
        $date = date('Y-m-d');
        if (date('D', strtotime($date)) == 'Sat' OR date('D', strtotime($date)) == 'Sun') {
            $type = 'DAYOFF';
        } else {
            $type = 'WEEKDAY';
        }

        $scheduleIn  = date('H:i', strtotime('08:00'));
        $scheduleOut = date('H:i', strtotime('17:00'));
        
        $sqlCek = $this->db->query("SELECT * FROM employee");
        foreach ($sqlCek->result_array() as $rowCek) {
            
            $sqlAttendance = $this->db->query("SELECT * FROM attendance WHERE employee_id = '".$rowCek['employee_id']."' AND attendance_date = '".$date."' ");            
            if ($sqlAttendance->num_rows() > 0) {
                $rowAttendance = $sqlAttendance->row_array();

                $sqlMasterAttendance = $this->db->query("SELECT * FROM master_attendance WHERE master_attendance_id = '".$rowAttendance['attendance_type']."' ");
                if ($sqlMasterAttendance->num_rows() > 0) {
                    $rowMasterAttendance = $sqlMasterAttendance->row_array();
                    $AttendanceType = $rowMasterAttendance['master_attendance_name'];
                } else {
                    $AttendanceType = '';
                }

                $sqlMasterTimeOff = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$rowAttendance['attendance_timeoff_type']."' ");
                if ($sqlMasterTimeOff->num_rows() > 0) {
                    $rowMasterTimeOff = $sqlMasterTimeOff->row_array();
                    $TimeOffType = $rowMasterTimeOff['master_time_off_name'];
                } else {
                    $TimeOffType = '';
                }

                $CheckIn  = $rowAttendance['attendance_check_in'];
                $CheckOut = $rowAttendance['attendance_check_out'];

            } else {
                $AttendanceType = '';
                $TimeOffType    = '';
                $CheckIn        = '';
                $CheckOut       = '';
            }
            $dataArray[] = array(
                'RecordID'       => $rowCek['employee_id'],
                'Code'           => $rowCek['employee_code'],
                'FirstName'      => $rowCek['employee_first_name'],
                'LastName'       => $rowCek['employee_last_name'],
                'Date'           => $date,
                'Type'           => $type,
                'ScheduleIn'     => $scheduleIn,
                'ScheduleOut'    => $scheduleOut,
                'CheckIn'        => $CheckIn,
                'CheckOut'       => $CheckOut,
                'AttendanceType' => $AttendanceType,
                'TimeOffType'    => $TimeOffType,
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
    
    public function attendance_approve()
    {
        $sqlRequest = $this->db->query("SELECT * FROM attendance_request WHERE atendance_request_id = '".$this->input->post('id_request_approve')."' ");
        if ($sqlRequest->num_rows() > 0) {
            $rowRequest = $sqlRequest->row_array();

            $dataUpdate = array(
                'atendance_request_status'           => 2,
                'atendance_request_approval_by'      => $this->session->userdata('employee_id'),
                'atendance_request_approval_date'    => date('Y-m-d H:i:s'),
                'atendance_request_approval_comment' => $this->input->post('comment_approve')
            );
            // die(print_r($dataUpdate));
            if ($this->db->update('attendance_request', $dataUpdate, array('atendance_request_id' => $this->input->post('id_request_approve')))) {
                $sqlCek = $this->db->query("SELECT * FROM attendance WHERE attendance_date = '".$rowRequest['atendance_request_date']."' AND employee_id = '".$rowRequest['employee_request_id']."' ");
                if ($sqlCek->num_rows() > 0) {
                    $rowAttendance = $sqlCek->row_array();
                    $dataUpdateAttendance = array(
                        'employee_id'             => $rowRequest['employee_request_id'],
                        'attendance_date'         => $rowRequest['atendance_request_date'],
                        'attendance_schedule_in'  => '08:00',
                        'attendance_schedule_out' => '17:00',
                        'attendance_check_in'     => $rowRequest['atendance_request_check_in'],
                        'attendance_check_out'    => $rowRequest['atendance_request_check_out'],
                        'attendance_type'         => 1,
                        'attendance_timeoff_type' => '',
                    );
                    $this->db->update('attendance', $dataUpdateAttendance, array('attendance_id ' => $rowAttendance['attendance_id']));
                } else {
                    $dataInsertAttendance = array(
                        'employee_id'             => $rowRequest['employee_request_id'],
                        'attendance_date'         => $rowRequest['atendance_request_date'],
                        'attendance_schedule_in'  => '08:00',
                        'attendance_schedule_out' => '17:00',
                        'attendance_check_in'     => $rowRequest['atendance_request_check_in'],
                        'attendance_check_out'    => $rowRequest['atendance_request_check_out'],
                        'attendance_type'         => 1,
                        'attendance_timeoff_type' => '',
                    );
                    $this->db->insert('attendance', $dataInsertAttendance);
                }
                $response = array(
                    "status" 	=> 'TRUE'
                );
            } else {
                $response = array(
                    "status" 	=> 'FALSE'
                );
            }
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

    public function attendance_reject()
    {
        $dataUpdate = array(
            'attendance_status'           => 3,
            'attendance_approval_by'      => $this->session->userdata('employee_id'),
            'attendance_approval_date'    => date('Y-m-d H:i:s'),
            'attendance_approval_comment' => $this->input->post('comment_reject')
        );
        if ($this->db->update('attendance', $dataUpdate, array('attendance_id' => $this->input->post('id_request_reject')))) {
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

    public function impor_kehadiran()
    {
        // die(print_r($_FILES));
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $extension = pathinfo($_FILES['file_import_attendance']['name'])['extension'];
        $filename  = 'File_Import_Attendance_'.date('YmdHis');

        $this->load->library('upload');

        $config['upload_path']   = './assets/upload/file_import/attendance';
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size']      = '2048';
        $config['overwrite']     = true;
        $config['file_name']     = $filename;
        
        $this->upload->initialize($config); 

        if (!$this->upload->do_upload('file_import_attendance')) {
            
            $response = array(
                "status" 	=> "FALSE",
                "message"   => "Import Failed"
            );

        } else {

            $excelreader = new PHPExcel_Reader_Excel2007();
            $loadexcel   = $excelreader->load('assets/upload/file_import/attendance/'.$filename.'.'.$extension);         // Load file yang telah diupload ke folder excel
            $sheet       = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            $numError = 0;
            foreach($sheet as $row){
                if($numrow > 1){
                    if (date('Y-m-d', strtotime($row['D'])) > date('Y-m-d')) {
                        $numError++;
                    } else {
                        $sqlCek = $this->db->query("SELECT * FROM attendance WHERE employee_code = '".$row['A']."' AND attendance_date = '".date('Y-m-d', strtotime($row['D']))."' ");
                        if ($sqlCek->num_rows() > 0) {
                        } else {
                            array_push($data, array(
                                'employee_code'           => $row['A'],
                                'attendance_date'         => date('Y-m-d', strtotime($row['D'])),
                                'attendance_schedule_in'  => date('H:i', strtotime($row['E'])),
                                'attendance_schedule_out' => date('H:i', strtotime($row['F'])),
                                'attendance_check_in'     => date('H:i', strtotime($row['G'])),
                                'attendance_check_out'    => date('H:i', strtotime($row['H'])),
                                'attendance_type'         => $row['I'],
                                'attendance_timeoff_type' => $row['J'],
                            ));
                        }
                    }
                }
                $numrow++;
            }
            
            if ($numError == 0) {
                if (count($data) > 0) {
                    $this->db->insert_batch('attendance', $data);                
                    $response = array(
                        "status" 	=> "TRUE",
                        "message"   => "Success"
                    );
                }
            } else {
                $response = array(
                    "status" 	=> "FALSE",
                    "message"   => "Attendance Date exceeds today's date"
                );
            }
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response))
            ->_display();
        exit;
    }
}
