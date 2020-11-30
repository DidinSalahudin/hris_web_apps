<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	
	function __construct() {
		parent::__construct();   
		if (!$this->session->userdata('user_login')) {
            redirect(base_url());
        }        
    }

	public function index()
	{
		$sqlCek = $this->db->query("SELECT * FROM employee WHERE employee_id = '".$this->session->userdata('user_id')."' ");
		if ($sqlCek->num_rows() > 0) {
			$rowSqlCek = $sqlCek->row_array();

			$foto_avatar = $rowSqlCek['employee_foto_avatar'];

		} else {

			$foto_avatar = 'assets/image/foto_profil/Foto_Profil.jpg';
		}

		$data = array(
			'foto_avatar' => $foto_avatar
		);
		$this->load->view('Dasbor/Dasbor_view', $data);
	}
}
