<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
	
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

	public function cuti($flag = '')
	{
        if ($flag == 'req') {
            $data['status']         = 0;
            $data['request_active'] = 'active';
            $data['history_active'] = '';
            $data['title_table']    = "Pengajuan Cuti";
        } else {
            $data['status']         = 1;
            $data['request_active'] = '';
            $data['history_active'] = 'active';
            $data['title_table']    = "History";
        }
		$data['title'] = 'Cuti';
		$this->load->view('Request/Request_time_off_view', $data);
    }
    
    public function ambil_data_pengajuan_cuti($status = 0)
	{
        $dataArray = array();
        // if ($this->session->userdata('user_access') == 1) {
        //     $sqlCek = $this->db->query("SELECT * FROM admin WHERE employee_approval = '".$this->session->userdata('user_access')."' ");
        // } else {
        //     $sqlCek = $this->db->query("SELECT * FROM employee WHERE (employee_approval = '".$this->session->userdata('user_access')."' OR employee_approval_1_id = '".$this->session->userdata('user_id')."' OR employee_approval_2_id = '".$this->session->userdata('user_id')."' OR employee_approval_3_id = '".$this->session->userdata('user_id')."') ");
        // }
        $sqlCek = $this->db->query("SELECT * FROM employee WHERE (employee_approval = '".$this->session->userdata('user_access')."' OR employee_approval_1_id = '".$this->session->userdata('user_id')."' OR employee_approval_2_id = '".$this->session->userdata('user_id')."' OR employee_approval_3_id = '".$this->session->userdata('user_id')."') ");
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
                        $sqlAdmin = $this->db->query("SELECT * FROM admin WHERE admin_code = '".$value['time_off_approval_by']."' ");
                        if ($sqlAdmin->num_rows() > 0) {
                            $rowAdmin = $sqlAdmin->row_array();
                            $employeeNameApproval = $rowAdmin['admin_name'];
                        } else {
                            $employeeNameApproval = '';
                        }
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
                        'File'           => '<a href="'.base_url().$value['time_off_file'].'" target="_blank">Unduh File</a>',
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
                'time_off_approval_by'      => $this->session->userdata('user_code'),
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

                // $begin   = new DateTime($rowRequest['time_off_start_date']);
                // $endPlus = date('Y-m-d', strtotime('+1 days', strtotime($rowRequest['time_off_end_date'])));
                // $end     = new DateTime($endPlus);
                // $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

                $begin   = new DateTime($rowRequest['time_off_start_date']);
                $endPlus = date('Y-m-d', strtotime('+1 days', strtotime($rowRequest['time_off_end_date'])));
                $end     = new DateTime($endPlus);
                $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

                foreach($daterange as $date){
                    $dateValue = $date->format("Y-m-d");
                    $sqlCek = $this->db->query("SELECT * FROM attendance WHERE attendance_date = '".$dateValue."' AND employee_code = '".$rowRequest['employee_code']."' ");
                    if ($sqlCek->num_rows() > 0) {
                        $rowAttendance = $sqlCek->row_array();
                        $dataUpdateAttendance = array(
                            'employee_code'           => $rowRequest['employee_code'],
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
                            'employee_code'           => $rowRequest['employee_code'],
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

    public function cuti_ditolak()
    {
        $dataUpdate = array(
            'time_off_status'           => 3,
            'time_off_approval_by'      => $this->session->userdata('user_id'),
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

    public function kehadiran($flag = '')
	{
        if ($flag == 'req') {
            $data['status']         = 0;
            $data['request_active'] = 'active';
            $data['history_active'] = '';
            $data['title_table']    = "Pengajuan Kehadiran";
        } else {
            $data['status']         = 1;
            $data['request_active'] = '';
            $data['history_active'] = 'active';
            $data['title_table']    = "History";
        }
		$data['title'] = 'Kehadiran';
		$this->load->view('Request/Request_attendance_view', $data);
    }
    
    public function ambil_data_kehadiran($status = 0)
	{
        $dataArray = array();
        // if ($this->session->userdata('user_access') == 1) {
        //     $sqlCek = $this->db->query("SELECT * FROM admin WHERE employee_approval = '".$this->session->userdata('user_access')."' ");
        // } else {
        //     $sqlCek = $this->db->query("SELECT * FROM employee WHERE (employee_approval = '".$this->session->userdata('user_access')."' OR employee_approval_1_id = '".$this->session->userdata('user_id')."' OR employee_approval_2_id = '".$this->session->userdata('user_id')."' OR employee_approval_3_id = '".$this->session->userdata('user_id')."') ");
        // }
        $sqlCek = $this->db->query("SELECT * FROM employee WHERE (employee_approval = '".$this->session->userdata('user_access')."' OR employee_approval_1_id = '".$this->session->userdata('user_id')."' OR employee_approval_2_id = '".$this->session->userdata('user_id')."' OR employee_approval_3_id = '".$this->session->userdata('user_id')."') ");
        foreach ($sqlCek->result_array() as $rowCek) {
            // die(print_r($sqlCek->result_array()));
            if ($status == 0) {
                $sql = $this->db->query("SELECT * FROM attendance_request WHERE employee_request_id = '".$rowCek['employee_id']."' AND atendance_request_status IN (1) ");
            } else {
                $sql = $this->db->query("SELECT * FROM attendance_request WHERE employee_request_id = '".$rowCek['employee_id']."' AND atendance_request_status NOT IN (1) ");
            }
            // die(print_r($sql));
            
            if ($sql->num_rows() > 0) {
                foreach ($sql->result_array() as $value) {
                    // $sqlMaster = $this->db->query("SELECT * FROM master_attendance WHERE master_attendance_id = '".$value['attendance_type_id']."' ");
                    // if ($sqlMaster->num_rows() > 0) {
                    //     $rowMaster = $sqlMaster->row_array();
                    //     $masterTimeOffName = $rowMaster['master_attendance_name'];
                    // } else {
                    //     $masterTimeOffName = '';
                    // }

                    $sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_code = '".$value['atendance_request_approval_by']."' ");
                    if ($sqlEmployee->num_rows() > 0) {
                        $rowEmployee = $sqlEmployee->row_array();
                        $employeeNameApproval = $rowEmployee['employee_first_name'];
                    } else {
                        $sqlAdmin = $this->db->query("SELECT * FROM admin WHERE admin_code = '".$value['atendance_request_approval_by']."' ");
                        if ($sqlAdmin->num_rows() > 0) {
                            $rowAdmin = $sqlAdmin->row_array();
                            $employeeNameApproval = $rowAdmin['admin_name'];
                        } else {
                            $employeeNameApproval = '';
                        }
                    }

                    $dataArray[] = array(
                        'RecordID'       => $value['atendance_request_id'],
                        'EmployeeID'     => $rowCek['employee_code'],
                        'EmployeeName'   => $rowCek['employee_first_name'],
                        'CreateDate'     => $value['atendance_request_create_date'],
                        'Date'           => $value['atendance_request_date'],
                        'CheckIn'        => $value['atendance_request_check_in'],
                        'CheckOut'       => $value['atendance_request_check_out'],
                        'Note'           => $value['atendance_request_note'],
                        'ApproveBy'      => $employeeNameApproval,
                        'ApproveDate'    => $value['atendance_request_approval_date'],
                        'ApproveComment' => $value['atendance_request_approval_comment'],
                        'Status'         => $value['atendance_request_status'],
                    );
                }
            } else {
                // $dataArray[] = array(
                //     'RecordID'       => '',
                //     'CreateDate'     => '',
                //     'Date'           => '',
                //     'CheckIn'        => '',
                //     'CheckOut'       => '',
                //     'Note'           => '',
                //     'ApproveBy'      => '',
                //     'ApproveDate'    => '',
                //     'ApproveComment' => '',
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
    
    public function kehadiran_disetujui()
    {
        $sqlRequest = $this->db->query("SELECT * FROM attendance_request WHERE atendance_request_id = '".$this->input->post('id_request_approve')."' ");
        if ($sqlRequest->num_rows() > 0) {
            $rowRequest = $sqlRequest->row_array();

            $dataUpdate = array(
                'atendance_request_status'           => 2,
                'atendance_request_approval_by'      => $this->session->userdata('user_code'),
                'atendance_request_approval_date'    => date('Y-m-d H:i:s'),
                'atendance_request_approval_comment' => $this->input->post('comment_approve')
            );
            // die(print_r($dataUpdate));
            if ($this->db->update('attendance_request', $dataUpdate, array('atendance_request_id' => $rowRequest['atendance_request_id']))) {
                $sqlCek = $this->db->query("SELECT * FROM attendance WHERE attendance_date = '".$rowRequest['atendance_request_date']."' AND employee_code = '".$rowRequest['employee_request_code']."' ");
                // die(print_r($sqlCek->num_rows()));
                if ($sqlCek->num_rows() > 0) {
                    $rowAttendance = $sqlCek->row_array();
                    $dataUpdateAttendance = array(
                        'employee_code'           => $rowRequest['employee_request_code'],
                        'attendance_date'         => $rowRequest['atendance_request_date'],
                        'attendance_schedule_in'  => '08:00',
                        'attendance_schedule_out' => '17:00',
                        'attendance_check_in'     => $rowRequest['atendance_request_check_in'],
                        'attendance_check_out'    => $rowRequest['atendance_request_check_out'],
                        'attendance_type'         => 1,
                        'attendance_timeoff_type' => '',
                    );
                    // die(print_r($dataUpdateAttendance));
                    $this->db->update('attendance', $dataUpdateAttendance, array('attendance_id ' => $rowAttendance['attendance_id']));
                } else {
                    $dataInsertAttendance = array(
                        'employee_code'           => $rowRequest['employee_request_code'],
                        'attendance_date'         => $rowRequest['atendance_request_date'],
                        'attendance_schedule_in'  => '08:00',
                        'attendance_schedule_out' => '17:00',
                        'attendance_check_in'     => $rowRequest['atendance_request_check_in'],
                        'attendance_check_out'    => $rowRequest['atendance_request_check_out'],
                        'attendance_type'         => 1,
                        'attendance_timeoff_type' => '',
                    );
                    // die(print_r($dataInsertAttendance));
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

    public function kehadiran_ditolak()
    {
        $dataUpdate = array(
            'attendance_status'           => 3,
            'attendance_approval_by'      => $this->session->userdata('user_id'),
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
}
