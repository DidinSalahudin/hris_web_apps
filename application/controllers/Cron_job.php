<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_job extends CI_Controller {
    
    function __construct() {
        parent::__construct();           
    }

    public function Login(){
    	$this->load->view('Admin/Login/Login_admin_view');
    }

    public function tambah_jatah_cuti()
	{		
		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_employment_status NOT IN (3) ");
		if ($sqlCek->num_rows() > 0) {
            foreach ($sqlCek->result_array() as $key => $value) {
                $dataUpdate = array(
                    'employee_time_off_balance' => $value['employee_time_off_balance']+1
                );
                $this->db->update('employee', $dataUpdate, ['employee_id' => $value['employee_id']]);
            }
        } else {

        }
		
	}
}
