<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function index()
	{
		$this->message_inbox();
    }

    public function message_inbox()
	{
		$data['title'] = 'Message Inbox';
		$this->load->view('Message/message_inbox_view', $data);
    }
    
    public function message_get_data()
    {
        $sqlMessage = $this->db->query("SELECT * FROM message WHERE employee_message_id_reciever = '".$this->session->userdata('employee_id')."' AND employee_message_type IN (0) ");
        if ($sqlMessage->num_rows() > 0) {
            foreach ($sqlMessage->result_array() as $value) {
                $sqlUser = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$value['employee_message_id_sending']."' ");
                if ($sqlUser->num_rows() > 0) {
                    $row = $sqlUser->row_array();
                    $sending_name = $row['employee_first_name']." ".$row['employee_last_name'];
                } else {
                    $sending_name = '';
                }
                $dataArray[] = array(
                    'RecordID'  => $value['employee_message_id'],
                    'Sending'   => $sending_name,
                    'Subject'   => $value['employee_message_subject'],
                    'body'      => $value['employee_message_body'],
                );
            }
        } else {
            $dataArray = array(
                'RecordID'  => '',
                'Sending'   => '',
                'Subject'   => '',
                'body'      => '',
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($dataArray))
            ->_display();
        exit;
    }

    public function message_send()
	{
		$data['title'] = 'Message Send';
		$this->load->view('Message/message_send_view', $data);
    }

    public function message_get_data_send()
    {
        $sqlMessage = $this->db->query("SELECT * FROM message WHERE employee_message_id_reciever = '".$this->session->userdata('employee_id')."' AND employee_message_type IN (0) ");
        if ($sqlMessage->num_rows() > 0) {
            foreach ($sqlMessage->result_array() as $value) {
                $sqlUser = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$value['employee_message_id_sending']."' ");
                if ($sqlUser->num_rows() > 0) {
                    $row = $sqlUser->row_array();
                    $sending_name = $row['employee_first_name']." ".$row['employee_last_name'];
                } else {
                    $sending_name = '';
                }
                $dataArray[] = array(
                    'RecordID'  => $value['employee_message_id'],
                    'Sending'   => $sending_name,
                    'Subject'   => $value['employee_message_subject'],
                    'body'      => $value['employee_message_body'],
                );
            }
        } else {
            $dataArray = array(
                'RecordID'  => '',
                'Sending'   => '',
                'Subject'   => '',
                'body'      => '',
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($dataArray))
            ->_display();
        exit;
    }

    public function message_time_off()
	{
		$data['title'] = 'Message Time Off';
		$this->load->view('Message/message_time_off_view', $data);
    }

    public function message_get_data_time_off()
    {
        $search  = array('=', '==');
        $replace = array('', '');
        $status = '';
        $sqlMessage = $this->db->query("SELECT * FROM message WHERE employee_message_id_reciever = '".$this->session->userdata('employee_id')."' AND employee_message_type IN (1) ");
        if ($sqlMessage->num_rows() > 0) {
            foreach ($sqlMessage->result_array() as $value) {
                $sqlUser = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$value['employee_message_id_sending']."' ");
                if ($sqlUser->num_rows() > 0) {
                    $row = $sqlUser->row_array();
                    $sending_name = $row['employee_first_name']." ".$row['employee_last_name'];
                    $id_message = str_replace($search, $replace, base64_encode($value['employee_message_id']));
                } else {
                    $sending_name = '';
                    $id_message = base64_encode(0);
                }

                if ($value['employee_message_type'] == 1) {
                    $sqlTImeOff = $this->db->query("SELECT * FROM time_off WHERE time_off_id = '".$value['employee_message_id_type']."' ");
                    if ($sqlTImeOff->num_rows() > 0) {
                        $rowTimeOff = $sqlTImeOff->row_array();
                        $status = ($rowTimeOff['time_off_status'] == 1) ? 'PENDING' : ($rowTimeOff['time_off_status'] == 2) ? 'APPROVE' : 'REJECT';
                    } else {
                        $status = '';
                    }
                }

                // die(print_r($id_message));
                $dataArray[] = array(
                    'RecordID'  => $value['employee_message_id'],
                    'Subject'   => "<a href='".base_url()."message/view_message/".$id_message."'><h4>".$sending_name."</h4>".$value['employee_message_subject']."<br>".$value['employee_message_create_date']."</a><br>".$status,
                    'body'      => $value['employee_message_body'],
                );
            }
        } else {
            $dataArray = array(
                'RecordID'  => '',
                'Subject'   => '',
                'body'      => '',
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($dataArray))
            ->_display();
        exit;
    }

    public function message_attendance()
	{
		$data['title'] = 'Message Attendance';
		$this->load->view('Message/message_attendance_view', $data);
    }

    public function message_get_data_attendance()
    {
        $sqlMessage = $this->db->query("SELECT * FROM message WHERE employee_message_id_reciever = '".$this->session->userdata('employee_id')."' AND employee_message_type IN (0) ");
        if ($sqlMessage->num_rows() > 0) {
            foreach ($sqlMessage->result_array() as $value) {
                $sqlUser = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$value['employee_message_id_sending']."' ");
                if ($sqlUser->num_rows() > 0) {
                    $row = $sqlUser->row_array();
                    $sending_name = $row['employee_first_name']." ".$row['employee_last_name'];
                } else {
                    $sending_name = '';
                }
                $dataArray[] = array(
                    'RecordID'  => $value['employee_message_id'],
                    'Sending'   => $sending_name,
                    'Subject'   => $value['employee_message_subject'],
                    'body'      => $value['employee_message_body'],
                );
            }
        } else {
            $dataArray = array(
                'RecordID'  => '',
                'Sending'   => '',
                'Subject'   => '',
                'body'      => '',
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($dataArray))
            ->_display();
        exit;
    }

    public function view_message($id)
    {
        $id = base64_decode($id);
        $sqlMessage = $this->db->query("SELECT * FROM message WHERE employee_message_id = '".$id."' ");
        if ($sqlMessage->num_rows() > 0) {
            $row = $sqlMessage->row_array();

            if ($row['employee_message_status_read'] == 0) {
                $this->db->update('message', array('employee_message_status_read' => 1), array('employee_message_id' => $id));
            }

            if ($row['employee_message_type'] == 1) {
                
                $type_message = 'time_off';
                $sqlTimeOff = $this->db->query("SELECT * FROM time_off WHERE time_off_id = '".$id."' ");
                if ($sqlTimeOff->num_rows() > 0) {
                    $rowTimeOff  = $sqlTimeOff->row_array();
                    $sqlMasterTimeOff = $this->db->query("SELECT * FROM master_time_off  WHERE master_time_off_id = '".$rowTimeOff['time_off_type_id']."' ");
                    if ($sqlMasterTimeOff->num_rows() > 0) {
                        $rowMasterTimeOff  = $sqlMasterTimeOff->row_array();
                        $type_name = $rowMasterTimeOff['master_time_off_name'];
                    } else {
                        $type_name = '';
                    }

                    $body_email  = $rowTimeOff['time_off_start_date']." until ".$rowTimeOff['time_off_start_date'];
                    $id_employee = $rowTimeOff['employee_id'];
                    $type        = $type_name ;
                    $reaon       = $rowTimeOff['time_off_reason'] ;
                } else {
                    $body_email = "";
                    $id_employee = 0;
                    $type        = "";
                    $reaon       = "";
                }

                $sqlUser = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$id_employee."' ");
                if ($sqlUser->num_rows() > 0) {
                    $rowUsers = $sqlUser->row_array();

                    $sending_name = $rowUsers['employee_first_name']." ".$rowUsers['employee_last_name'];
                } else {
                    $sending_name = '';
                }

            } else if ($row['employee_message_type'] == 2) {
                $type_message = 'attendance';
                // $sqlTimeOff = $this->db->query("SELECT * FROM attendance WHERE employee_message_id_type = '".$id."' ");
                // if ($sqlTimeOff->num_rows() > 0) {
                //     $rowTimeOff = $sqlTimeOff->row_array();
                //     $body_email = $rowTimeOff['time_off_start_date']." until ".$rowTimeOff['time_off_start_date'];
                // } else {
                    $body_email = "";
                    $sending_name = '';
                // }
            } else if ($row['employee_message_id_sending'] == $this->session->userdata('employee_id')) {
                $type_message = 'send';
            } else if ($row['employee_message_id_reciever'] == $this->session->userdata('employee_id')) {
                $type_message = 'inbox';
            } else {
                $type_message = '';
            }

            $data = array(
                'title'        => 'Message View',
                'body_email'   => $body_email,
                'type_message' => $type_message,
                'id_message'   => $row['employee_message_id'],
                'subject'      => $row['employee_message_subject'],
                'sending_name' => $sending_name,
                'type'         => $type,
                'reason'       => $reaon,
                'create_date'  => $row['employee_message_create_date']
            );
        } else {
            $data = array(
                'title'        => 'Message View',
                'body_email'   => $body_email,
                'type_message' => $type_message,
                'id_message'   => 0,
                'subject'      => '',
                'sending_name' => '',
                'type'         => '',
                'reason'       => '',
                'create_date'  => ''
            );
        }
        // die(print_r($data));
        $this->load->view('Message/message_view', $data);
    }

    public function message_response()
    {
        // die(print_r($_POST));
        $sqlMessage = $this->db->query("SELECT * FROM message WHERE employee_message_id = '".$this->input->post('id_message')."' ");
        if ($sqlMessage->num_rows() > 0) {
            $row = $sqlMessage->row_array();
            $dataInsert = array(
                'time_off_status'           => $this->input->post('status'),
                'time_off_approval_by'      => $this->session->userdata('employee_id'),
                'time_off_approval_date'    => date('Y-m-d H:i:s'),
                'time_off_approval_comment' => $this->input->post('comment'),
            );
            if($this->db->update('time_off', $dataInsert, array('time_off_id' => $row['employee_message_id_type']))) {
                $sqlEmployee = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$row['employee_message_id_sending']."' ");
                if ($sqlEmployee->num_rows() > 0) {
                    $rowEmployee = $sqlEmployee->row_array();
                    $minus_day = $rowEmployee['employee_time_off_balance']-$row['time_off_leave_day'];
                    die(print_r($minus_day));
                    $this->db->update('employee', array('employee_time_off_balance' => $minus_day), array('employee_id' => $row['employee_id']));
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

}
