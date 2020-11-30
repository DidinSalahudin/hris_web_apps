<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
    
    function __construct() {
        parent::__construct();           
    }

    private function sendOutput($response){
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();
        exit;
    }

    private function getUserIP()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    public function index(){
    	$this->check_authentication();
    }

    public function check_authentication(){

        if ($this->session->userdata('user_login')) {
            redirect(base_url('Dasbor'));
        } else {
            redirect(base_url('Login'));
        } 
    }

    public function sign_out(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function simpan_ganti_password()
    {
        $dataInsert = array(
			'employee_password'        => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
		);
		if ($this->db->update('employee', $dataInsert, ['employee_id' => $this->session->userdata('user_id')])) {
			$response = array(
				"status"          => "TRUE",
				"message"         => "Ubah Password Berhasil"
			);
		} else {
			$response = array(
				"status"          => "FALSE",
				"message"         => "Ubah Password Gagal"
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
