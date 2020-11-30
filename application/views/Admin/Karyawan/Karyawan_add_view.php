<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Waletku | <?php echo $title; ?></title>
		<meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->
        
        <?php $this->load->view('Include/Css'); ?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url(<?php echo base_url(); ?>assets/template/metronic/media/bg/header.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url(); ?>assets/template/metronic/media/logos/logo-4-sm.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    
                    <!--begin::Header-->
					<?php $this->load->view('Include/Header'); ?>
                    <!--end::Header-->
                    
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						<!--begin::Subheader-->
						<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<div class="d-flex align-items-center flex-wrap mr-2">
									<div class="d-flex flex-column">
                                        <h2 class="text-dark font-weight-bold my-2 mr-5"><?php echo $title; ?></h2>
                                        <!--begin::Breadcrumb-->
										<div class="d-flex align-items-center font-weight-bold my-2">
											<!--begin::Item-->
											<a href="#" class="opacity-75 hover-opacity-100">
												<i class="flaticon2-shelter text-dark icon-1x"></i>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Karyawan</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Tambah Karyawan</a>
											<!--end::Item-->
										</div>
										<!--end::Breadcrumb-->
									</div>
								</div>
							</div>
						</div>
                        <!--end::Subheader-->
                        
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
                                <form class="form" id="form-employees">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h3 class="card-label">Foto Profil</h3>
                                                    </div>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-12 text-center col-xl-12">
                                                            <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                                                <div class="image-input-wrapper" style="background-image: url('<?php echo base_url(); ?>assets/image/foto_profil/Foto_Profil.jpg');"></div>
                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="profile_avatar" id="profile_avatar" accept=".png, .jpg, .jpeg">
                                                                    <input type="hidden" name="profile_avatar_remove" id="profile_avatar_remove" value="0">
                                                                </label>
                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <span class="form-text text-muted">Jenis file yang diizinkan: png, jpg, jpeg.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Detail Karyawan</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Departemen <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Departemen" name="ED_Departmen" id="ED_Departmen">
                                                                <option value="">Pilih Departmen</option>
                                                                <?php foreach ($this->db->query("SELECT * FROM master_department WHERE master_department_status IN (1)")->result_array() as $value) { ?>
                                                                    <option value="<?php echo $value['master_department_id'] ?>"><?php echo $value['master_department_name'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 1</label>
                                                            <select class="form-control form-control-sm" rel="Persetujuan Atasan 1" name="ED_Approval_Line_1" id="ED_Approval_Line_1">
                                                                <option value="">Pilih Persetujuan Atasan 1</option>
                                                                <?php foreach ($this->db->query("SELECT employee_code, employee_first_name FROM employee")->result_array() as $value) { ?>
                                                                    <option value="<?php echo $value['employee_code'] ?>"><?php echo $value['employee_first_name'] ?></option>
                                                                <?php } ?>
                                                            </select>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Posisi Pekerjaan <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Posisi Pekerjaan" name="ED_Job_Position" id="ED_Job_Position" disabled="disabled">
                                                                <option value="">Pilih Posisi Pekerjaan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 2</label>
                                                            <select class="form-control form-control-sm" rel="Persetujuan Atasan 2" name="ED_Approval_Line_2" id="ED_Approval_Line_2">
                                                                <option value="">Pilih Persetujuan Atasan 2</option>
                                                                <?php foreach ($this->db->query("SELECT employee_code, employee_first_name FROM employee")->result_array() as $value) { ?>
                                                                    <option value="<?php echo $value['employee_code'] ?>"><?php echo $value['employee_first_name'] ?></option>
                                                                <?php } ?>
                                                            </select>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Level Pekerjaan <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Level Pekerjaan" name="ED_Job_Level" id="ED_Job_Level">
                                                                <option value="">Pilih Level Pekerjaan</option>
                                                                <?php foreach ($this->db->query("SELECT * FROM master_job_level WHERE master_job_level_status IN (1)")->result_array() as $value) { ?>
                                                                    <option value="<?php echo $value['master_job_level_id'] ?>"><?php echo $value['master_job_level_name'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 3</label>
                                                            <select class="form-control form-control-sm" rel="Persetujuan Atasan 3" name="ED_Approval_Line_3" id="ED_Approval_Line_3">
                                                                <option value="">Pilih Persetujuan Atasan 3</option>
                                                                <?php foreach ($this->db->query("SELECT employee_code, employee_first_name FROM employee")->result_array() as $value) { ?>
                                                                    <option value="<?php echo $value['employee_code'] ?>"><?php echo $value['employee_first_name'] ?></option>
                                                                <?php } ?>
                                                            </select>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Status Pekerja <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Status Pekerja" name="ED_Employment_Status" id="ED_Employment_Status">
                                                                <option value="">Pilih Status Pekerja</option>
                                                                <option value="1">Kontrak</option>                             
                                                                <option value="2">Permanen</option>
                                                                <option value="3">Mengundurkan Diri</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Tanggal Masuk <span class="text-danger">*</span></label>
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control form-control-sm" rel="Tanggal Masuk" readonly="readonly" value="" name="ED_Join_Date" id="ED_Join_Date" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Lokasi Kerja <span class="text-danger">*</span></label>
                                                                <select class="form-control form-control-sm" rel="Lokasi Kerja" name="ED_Branch" id="ED_Branch">
                                                                    <option value="">Pilih Lokasi Kerja</option>
                                                                    <option value="1">Pusat</option>                             
                                                                    <option value="2">Cabang</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form-->
                                            </div>                                        
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Detail Pribadi</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Nama Depan <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-sm" rel="Nama Depan" name="PD_First_Name" id="PD_First_Name" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Nama Belakang <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-sm" rel="Nama Belakang" name="PD_Last_Name" id="PD_Last_Name" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Email <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control form-control-sm" rel="Email" name="PD_Email" id="PD_Email" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No Identitas <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="No Identitas" name="PD_ID_Card" id="PD_ID_Card" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Alamat <span class="text-danger">*</span></label>
                                                            <textarea class="form-control form-control-sm" rel="Alamat" name="PD_Address" id="PD_Address" rows="3"></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Kode Pos <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="Kode Pos" name="PD_Postal_Code" id="PD_Postal_Code" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>No Telepon <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="No Telepon" name="PD_Phone" id="PD_Phone" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No HP <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="No HP" name="PD_Mobile_phone" id="PD_Mobile_phone" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Tempat Lahir <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-sm" rel="Tempat Lahir" name="PD_Place_Of_Birth" id="PD_Place_Of_Birth" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control form-control-sm" rel="Tanggal Lahir" readonly="readonly" name="PD_Birth_Date" id="PD_Birth_Date" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Jenis Kelamin" name="PD_Gender" id="PD_Gender">
                                                                <option value="">Pilih Jenis Kelamin</option>
                                                                <option value="1">Laki-laki</option>
                                                                <option value="2">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Agama <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Agama" name="PD_Religion" id="PD_Religion">
                                                                <option value="">Pilih Agama</option>
                                                                <option value="1">Kristen</option>
                                                                <option value="2">Islam</option>
                                                                <option value="3">Hindu</option>
                                                                <option value="4">Budha</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Golongan Darah <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Golongan Darah" name="PD_Blood_Type" id="PD_Blood_Type">
                                                                <option value="">Pilih Golongan Darah</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="AB">AB</option>
                                                                <option value="O">O</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Status Pernikahan <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Status Pernikahan" name="PD_Martial_Status" id="PD_Martial_Status">
                                                                <option value="">Pilih Status Pernikahan</option>
                                                                <option value="1">Belum Menikah</option>
                                                                <option value="2">Menikah</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Jumlah Tanggungan <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Jumlah Tanggungan" name="PD_jumlah_tanggungan" id="PD_jumlah_tanggungan">
                                                                <option value="">Pilih Jumlah Tanggungan</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Info Keluarga</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-primary mb-2" id="add_family_data">Tambah Data Keluarga</button>
                                                    <table class="table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Lengkap <span class="text-danger">*</span></th>
                                                                <th>Hubungan <span class="text-danger">*</span></th>
                                                                <th style="width: 100px;">Usia <span class="text-danger">*</span></th>
                                                                <th>Jenis Kelamin <span class="text-danger">*</span></th>
                                                                <th>Pekerjaan <span class="text-danger">*</span></th>
                                                                <th>Agama <span class="text-danger">*</span></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_family_data">
                                                            <tr id="tr_FD"> 
                                                                <td><input type="text" rel="Nama Lengkap" name="FD_Full_Name[]" id="FD_Full_Name" class="form-control form-control-sm" value=""/></td>
                                                                <td><input type="text" rel="Hubungan" name="FD_Relationship[]" id="FD_Relationship" class="form-control form-control-sm" value=""/></td>
                                                                <td><input type="number" rel="Usia" name="FD_Age[]" id="FD_Age" class="form-control form-control-sm" value=""></td>
                                                                <td>
                                                                    <select class="form-control form-control-sm" rel="Jenis Kelamin" name="FD_Gender[]" id="FD_Gender">
                                                                        <option value="">Pilih Jenis Kelamin</option>
                                                                        <option value="1">Laki-laki</option>
                                                                        <option value="2">Perempuan</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" rel="Pekerjaan" name="FD_Job[]" id="FD_Job" class="form-control form-control-sm" value=""/></td>
                                                                <td>
                                                                    <select class="form-control form-control-sm" rel="Agama" name="FD_Religion[]" id="FD_Religion">
                                                                        <option value="">Pilih Agama</option>
                                                                        <option value="1">Kristen</option>
                                                                        <option value="2">Islam</option>
                                                                        <option value="3">Hindu</option>
                                                                        <option value="4">Buddha</option>
                                                                    </select>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <button type="button" class="btn btn-primary mb-2" id="add_emergency_contact">Tambahkan Kontak Darurat</button>
                                                    <table class="table table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama <span class="text-danger">*</span></th>
                                                                <th>Hubungan <span class="text-danger">*</span></th>
                                                                <th>No Telepon <span class="text-danger">*</span></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_emergency_contact">
                                                            <tr id="tr_EC"> 
                                                                <td><input type="text" rel="Nama" name="EC_Name[]" id="EC_Name" class="form-control form-control-sm"/></td>
                                                                <td><input type="text" rel="Hubungan" name="EC_Relationship[]" id="EC_Relationship" class="form-control form-control-sm"/></td>
                                                                <td><input type="number" rel="No Telepon" name="EC_Phone_Number[]" id="EC_Phone_Number" class="form-control form-control-sm"/></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Riwayat Pendidikan</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-primary mb-2" id="add_education_history">Tambah Riwayat Pendidikan</button>
                                                    <table class="table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Lembaga <span class="text-danger">*</span></th>
                                                                <th>Jurusan <span class="text-danger">*</span></th>
                                                                <th>Tahun Masuk <span class="text-danger">*</span></th>
                                                                <th>Tahun Keluar <span class="text-danger">*</span></th>
                                                                <th>Skor <span class="text-danger">*</span></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_education_history">
                                                            <tr id="tr_EH"> 
                                                                <td><input type="text" rel="Nama Lembaga" name="EH_Institute_Name[]" id="EH_Institute_Name" class="form-control form-control-sm"/></td>
                                                                <td><input type="text" rel="Jurusan" name="EH_Majors[]" id="EH_Majors" class="form-control form-control-sm"/></td>
                                                                <td><input type="number" rel="Tahun Masuk" name="EH_Start_Years[]" id="EH_Start_Years" class="form-control form-control-sm"/></td>
                                                                <td><input type="number" rel="Tahun Keluar" name="EH_End_Years[]" id="EH_End_Years" class="form-control form-control-sm"/></td>
                                                                <td><input type="number" rel="Skor" name="EH_Score[]" id="EH_Score" class="form-control form-control-sm"/></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Daftar Gaji</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Nama Bank <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Nama Bank" name="P_Bank_name" id="P_Bank_name">
                                                                <option value="">Pilih Bank</option>
                                                                <option value="BCA">BCA</option>
                                                                <option value="Mandiri">Mandiri</option>
                                                                <option value="BRI">BRI</option>
                                                                <option value="CIMB">CIMB</option>
                                                                <option value="Commonwealth">Commonwealth</option>
                                                                <option value="BNI">BNI</option>
                                                                <option value="Danamon">Danamon</option>
                                                                <option value="Panin">Panin</option>
                                                                <option value="Bank Permata">Bank Permata</option>
                                                                <option value="BII-Maybank">BII-Maybank</option>
                                                                <option value="BTN">BTN</option>
                                                                <option value="OCBC">OCBC</option>
                                                                <option value="Mega">Mega</option>
                                                                <option value="UOB Indonesia">UOB Indonesia</option>
                                                                <option value="Bank Sinarmas">Bank Sinarmas</option>
                                                                <option value="Bank Mayapada">Bank Mayapada</option>
                                                                <option value="ANZ">ANZ</option>
                                                                <option value="HCBC">HCBC</option>
                                                                <option value="Hana Bank">Hana Bank</option>
                                                                <option value="Bank DKI">Bank DKI</option>
                                                                <option value="DBS Bank">DBS Bank</option>
                                                                <option value="Bank Sumut">Bank Sumut</option>
                                                                <option value="Bank BJB">Bank BJB</option>
                                                                <option value="Bank Bukopin">Bank Bukopin</option>
                                                                <option value="HSBC">HSBC</option>
                                                                <option value="Citibank">Citibank</option>
                                                                <option value="Bank Mandiri Syariah">Bank Mandiri Syariah</option>
                                                                <option value="Bank Artha Graha">Bank Artha Graha</option>
                                                                <option value="BRI Syariah">BRI Syariah</option>
                                                                <option value="Bank BNI Syariah">Bank BNI Syariah</option>
                                                                <option value="Bank Muamalat">Bank Muamalat</option>
                                                                <option value="Bank BCA Syariah">Bank BCA Syariah</option>
                                                                <option value="BPD Kaltim">BPD Kaltim</option>
                                                                <option value="Bank Sumsel Babel">Bank Sumsel Babel</option>
                                                                <option value="Bank Mestika">Bank Mestika</option>
                                                                <option value="Bank Permata Syariah">Bank Permata Syariah</option>
                                                                <option value="Bank CIMB Niaga Syariah">Bank CIMB Niaga Syariah</option>
                                                                <option value="BTPN">BTPN</option>
                                                                <option value="Bank Bukopin Syariah">Bank Bukopin Syariah</option>
                                                                <option value="Bank Woori Saudara">Bank Woori Saudara</option>
                                                                <option value="Bank National Nobu">Bank National Nobu</option>
                                                                <option value="MNC Bank">MNC Bank</option>
                                                                <option value="Bank Ganesha">Bank Ganesha</option>
                                                                <option value="Shinhan Bank">Shinhan Bank</option>
                                                                <option value="Bank Permata Lestari">Bank Permata Lestari</option>
                                                                <option value="BPD Yogya">BPD Yogya</option>
                                                                <option value="Amar Bank">Amar Bank</option>
                                                                <option value="Bank Jatim">Bank Jatim</option>
                                                                <option value="CCB Indonesia">CCB Indonesia</option>
                                                                <option value="Bank Victoria">Bank Victoria</option>
                                                                <option value="BPD Sulawesi Utara">BPD Sulawesi Utara</option>
                                                                <option value="BJB Syariah">BJB Syariah</option>
                                                                <option value="Kasikorn Bank">Kasikorn Bank</option>
                                                                <option value="Affin Bank Berhad">Affin Bank Berhad</option>
                                                                <option value="Alliance Bank Malaysia Berhad">Alliance Bank Malaysia Berhad</option>
                                                                <option value="AmBank (M) Berhad">AmBank (M) Berhad</option>
                                                                <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                                                <option value="Hong Leong Bank Berhad">Hong Leong Bank Berhad</option>
                                                                <option value="Malayan Banking Berhad">Malayan Banking Berhad</option>
                                                                <option value="Public Bank Berhad">Public Bank Berhad</option>
                                                                <option value="RHB Bank Berhad">RHB Bank Berhad</option>
                                                                <option value="RIB France">RIB France</option>
                                                                <option value="BPD Jabar">BPD Jabar</option>
                                                                <option value="Bank Jateng">Bank Jateng</option>
                                                                <option value="Bank Papua">Bank Papua</option>
                                                                <option value="Bank Nusantara Parahyangan">Bank Nusantara Parahyangan</option>
                                                                <option value="MUFG Bank">MUFG Bank</option>
                                                                <option value="Bank Simpanan Nasional">Bank Simpanan Nasional</option>
                                                                <option value="Standard Chartered">Standard Chartered</option>
                                                                <option value="Bank of China">Bank of China</option>
                                                                <option value="Bank Capital">Bank Capital</option>
                                                                <option value="State Bank of India">State Bank of India</option>
                                                                <option value="Bank Mayora">Bank Mayora</option>
                                                                <option value="Bank Riau Kepri">Bank Riau Kepri</option>
                                                                <option value="Bank Pembangunan Daerah Bali">Bank Pembangunan Daerah Bali</option>
                                                                <option value="Bank Kaltimtara">Bank Kaltimtara</option>
                                                                <option value="Bank NTB Syariah">Bank NTB Syariah</option>
                                                                <option value="BTN Syariah">BTN Syariah</option>
                                                                <option value="HDFC Bank">HDFC Bank</option>
                                                                <option value="ICICI Bank">ICICI Bank</option>
                                                                <option value="Bank Nagari">Bank Nagari</option>
                                                                <option value="Bank SBI Indonesia">Bank SBI Indonesia</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No Rekening <span class="text-danger">*</span></label>
                                                            <input type="number" rel="No Rekening" name="P_Account" id="P_Account" class="form-control form-control-sm" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Nama Rekening <span class="text-danger">*</span></label>
                                                            <input type="text" rel="Nama Rekening" name="P_Account_holder" id="P_Account_holder" class="form-control form-control-sm" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Gaji Pokok <span class="text-danger">*</span></label>
                                                            <input type="number" rel="Gaji Pokok" name="P_Basic_salary" id="P_Basic_salary" class="form-control form-control-sm" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>NPWP <span class="text-danger">*</span></label>
                                                            <input type="number" rel="NPWP" name="P_NPWP" id="P_NPWP" class="form-control form-control-sm" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>BPJS Ketenagakerjaan <span class="text-danger">*</span></label>
                                                            <input type="number" rel="BPJS Ketenagakerjaan" name="P_BPJS_Ketenagakerjaan" id="P_BPJS_Ketenagakerjaan" class="form-control form-control-sm" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>BPJS Kesehatan <span class="text-danger">*</span></label>
                                                            <input type="number" rel="BPJS Kesehatan" name="P_BPJS_Kesehatan" id="P_BPJS_Kesehatan" class="form-control form-control-sm" placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <?php 
                                                        foreach ($this->db->query("SELECT * FROM master_payroll_component WHERE master_payroll_component_status IN (1)")->result_array() as $rowPayroll) {
                                                    ?>
                                                            <h3><?php echo $rowPayroll['master_payroll_component_name']; ?></h3>
                                                            <table class="table table-bordered table-checkable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nama</th>
                                                                        <th>Nilai</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                    <?php 
                                                            foreach ($this->db->query("SELECT * FROM master_payroll_component_detail WHERE payroll_component_master_id = '".$rowPayroll['master_payroll_component_id']."' AND master_payroll_component_detail_status IN (1) ")->result_array() as $rowPayrollDetail) {
                                                                if ($rowPayrollDetail['master_payroll_component_detail_id'] == 1) {
                                                                    $span_merah = '<span class="text-danger">*</span>';
                                                                    $name_rel = 'Nominal '.$rowPayrollDetail['master_payroll_component_detail_name'];
                                                                } else {
                                                                    $span_merah = '';
                                                                    $name_rel = 'nilai_payroll_componen';
                                                                }
                                                    ?>
                                                                    <tr>
                                                                        <?php if ($rowPayrollDetail['master_payroll_component_detail_status_mandatory'] == 1) { ?>
                                                                            <td><?php echo $rowPayrollDetail['master_payroll_component_detail_name']; ?> <span class="text-danger">*</span></td>
                                                                            <td><input type="text" rel="<?php echo $name_rel; ?>" name="P_Amount[<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>]" id="P_Amount_<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>" class="form-control form-control-sm" value="Termasuk" placeholder="" readonly></td>
                                                                        <?php } else { ?>
                                                                            <td><?php echo $rowPayrollDetail['master_payroll_component_detail_name']; ?> <?php echo $span_merah; ?></td>
                                                                            <td><input type="number" rel="<?php echo $name_rel; ?>" name="P_Amount[<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>]" id="P_Amount_<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>" class="form-control form-control-sm" placeholder=""></td>
                                                                        <?php } ?>
                                                                    </tr>                             
                                                    <?php
                                                            }
                                                    ?>
                                                                </tbody>
                                                            </table>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Info Lain-lain</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-primary mb-2" id="add_assets">Tambahkan Aset</button>
                                                    <table class="table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama <span class="text-danger">*</span></th>
                                                                <th>No Seri <span class="text-danger">*</span></th>
                                                                <th>Deskripsi <span class="text-danger">*</span></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_assets">
                                                            <tr id="tr_A"> 
                                                                <td><input type="text" rel="Nama" name="A_name[]" id="A_name" class="form-control form-control-sm"/></td>
                                                                <td><input type="text" rel="No Seri" name="A_Serial_Number[]" id="A_Serial_Number" class="form-control form-control-sm"/></td>
                                                                <td><input type="text" rel="Deskripsi" name="A_Description[]" id="A_Description" class="form-control form-control-sm"/></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <button type="button" class="btn btn-primary mb-2" id="add_File">Tambah Berkas</button>
                                                    <table class="table table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama <span class="text-danger">*</span></th>
                                                                <th>Deskripsi <span class="text-danger">*</span></th>
                                                                <th>Berkas</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_file">
                                                            <tr id="tr_F"> 
                                                                <td><input type="text" rel="Nama" name="F_Name[]" id="F_Name" class="form-control form-control-sm"/></td>
                                                                <td><input type="text" rel="Deskripsi" name="F_Description[]" id="F_Description" class="form-control form-control-sm"/></td>
                                                                <td>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="F_File[]" class="custom-file-input" id="F_customFile">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <span class="text-danger">*</span> Harus Diisi.
                                        </div>
                                        <div class="col-6 text-right">
                                            <button type="submit" class="btn btn-primary" id="btn-employees-submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
							</div>
						</div>
										
						<!--end::Entry-->
                        
					</div>
                    <!--end::Content-->
                    
					<!--begin::Footer-->
					<?php $this->load->view('Include/Footer'); ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
        <!--end::Main-->
        
        <!--begin::Scrolltop-->
        <?php $this->load->view('Include/Scrolltop'); ?>
        <!--end::Scrolltop-->        
        
        <?php $this->load->view('Include/Js'); ?>

        <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/crud/forms/widgets/select2.js"></script>
        <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/crud/file-upload/image-input.js"></script>

        <script>
            var KTImageInputDemo = function () {
                // Private functions
                var initDemos = function () {
                    var avatar3 = new KTImageInput('kt_image_3');

                }

                return {
                    // public functions
                    init: function() {
                        initDemos();
                    }
                };
            }();

            var KTSelect2 = function() {
                // Private functions
                var demos = function() {

                    // multi select
                    // $('#ED_Approval_Line').select2({
                    //     placeholder: "",
                    // });

                }

                // Public functions
                return {
                    init: function() {
                        demos();
                    }
                };
            }();

            var KTBootstrapDatepicker = function () {

                var arrows;
                if (KTUtil.isRTL()) {
                    arrows = {
                        leftArrow: '<i class="la la-angle-right"></i>',
                        rightArrow: '<i class="la la-angle-left"></i>'
                    }
                } else {
                    arrows = {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>'
                    }
                }
                
                // Private functions
                var demos = function () {

                    // enable clear button 
                    $('#ED_Join_Date').datepicker({
                        rtl: KTUtil.isRTL(),
                        todayBtn: "linked",
                        clearBtn: true,
                        todayHighlight: true,
                        templates: arrows
                    });

                    $('#PD_Birth_Date').datepicker({
                        rtl: KTUtil.isRTL(),
                        todayBtn: "linked",
                        clearBtn: true,
                        todayHighlight: true,
                        templates: arrows
                    });
                }

                return {
                    // public functions
                    init: function() {
                        demos(); 
                    }
                };
            }();

            $('#btn-employees-submit').on('click', function (e) {
                e.preventDefault();
                $('#cover-spin').show(0);

                var statusValidation = 0;
                
                $('#form-employees *').filter(':input').each(function(){                    
                    if ($(this)[0].value == '') {
                        if ($(this)[0].id == "add_family_data" || $(this)[0].id == "add_emergency_contact" || $(this)[0].id == "add_education_history" || $(this)[0].id == "add_assets" || $(this)[0].id == "add_File" || $(this)[0].id == "btn-employees-submit" || $(this)[0].id == "ED_Approval_Line_1" || $(this)[0].id == "ED_Approval_Line_2" || $(this)[0].id == "ED_Approval_Line_3" || $(this)[0].id == "F_customFile" || $(this)[0].id == "profile_avatar" || $(this)[0].id == "profile_avatar_remove" || $(this)[0].id == "P_NPWP" || $(this).attr('rel') == "nilai_payroll_componen") { 
                        } else {
                            statusValidation = 1;
                            $('#'+$(this)[0].id).focus();
                            var text = $(this)[0].id.replace("_", " ");
                            Swal.fire("Gagal !", $(this).attr('rel')+" Tidak Boleh Kosong!", "error");
                            return false;
                        }
                    }
                    console.log($(this)[0].id+' -- '+$(this)[0].value+' -- '+$(this)[0].name);
                });
                if (statusValidation == 0) {
                    var postData = new FormData(this.form);                        
                    $.ajax({
                        url : "<?php echo base_url('karyawan/karyawan_tambah_data'); ?>",
                        type: "POST",
                        data: postData,
                        processData: false,
                        contentType: false,
                        success: function(data, textStatus, jqXHR){
                            console.log(data);
                            if(data.status == 'success'){ 
                                $('#cover-spin').hide(0);
                                Swal.fire("Success", data.message, "success");
                                setTimeout(function() {
                                    // location.reload();
                                    location = '<?php echo base_url(); ?>karyawan'; 
                                }, 2000);

                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Error", data.message, "error");

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('#cover-spin').hide(0);
                            Swal.fire("Error", "Tambah Karyawan Gagal", "error");
                        }
                    });
                } else {
                    $('#cover-spin').hide(0);
                    // Swal.fire("Error!", "Please Check Again!", "error");
                }

            });

            jQuery(document).ready(function() {	
                KTSelect2.init();
                KTBootstrapDatepicker.init();
                KTImageInputDemo.init();

                $('#ED_Departmen').change(function() {
                    var value = $(this).val();
                    console.log(value);
                    if (value != '') {
                        $.ajax({
                            url : "<?php echo base_url('karyawan/ambil_data_posisi_pekerjaan'); ?>/"+value,
                            type: "GET",
                            dataType: "JSON",
                            success: function(data, textStatus, jqXHR){
                                console.log(data);
                                $("#ED_Job_Position").removeAttr('disabled');
                                var option = '';
                                data.forEach(element => {
                                    console.log(element);
                                    option += '<option value="'+element.master_job_position_id+'">'+element.master_job_position_name+'</option>';
                                });
                                console.log(option);
                                $("#ED_Job_Position").append(option);
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                $("#ED_Job_Position").removeAttr('disabled');
                                $("#ED_Job_Position").attr('disabled', 'disabled');
                                $("#ED_Job_Position").html('');
                                $("#ED_Job_Position").append('<option value="">Pilih Posisi Pekerjaan</option>');
                            }
                        });
                    } else {
                        $("#ED_Job_Position").removeAttr('disabled');
                        $("#ED_Job_Position").attr('disabled', 'disabled');
                        $("#ED_Job_Position").html('');
                        $("#ED_Job_Position").append('<option value="">Pilih Posisi Pekerjaan</option>');
                    }
                });
                // KTBootstrapDatepicker.init();
                // KTWizard3.init();
                // KTSelect2.init();

                // Family Data
                $("#add_family_data").click(function(){    
                                    
                    var addRow = '<tr id="tr_FD">\
                                    <td><input type="text" rel="Nama Lengkap" name="FD_Full_Name[]" id="FD_Full_Name" class="form-control form-control-sm" value=""/></td>\
                                    <td><input type="text" rel="Hubungan" name="FD_Relationship[]" id="FD_Relationship" class="form-control form-control-sm" value=""/></td>\
                                    <td><input type="number" rel="Usia" name="FD_Age[]" id="FD_Age" class="form-control form-control-sm" value=""></td>\
                                    <td>\
                                        <select class="form-control form-control-sm" rel="Jenis Kelamin" name="FD_Gender[]" id="FD_Gender">\
                                            <option value="">Pilih Jenis Kelamin</option>\
                                            <option value="1">Laki-laki</option>\
                                            <option value="2">Perempuan</option>\
                                        </select>\
                                    </td>\
                                    <td><input type="text" rel="Pekerjaan" name="FD_Job[]" id="FD_Job" class="form-control form-control-sm" value=""/></td>\
                                    <td>\
                                        <select class="form-control form-control-sm" rel="Agama" name="FD_Religion[]" id="FD_Religion">\
                                            <option value="">Pilih Agama</option>\
                                            <option value="1">Kristen</option>\
                                            <option value="2">Islam</option>\
                                            <option value="3">Hindu</option>\
                                            <option value="4">Buddha</option>\
                                        </select>\
                                    </td>\
                                    <td><a href="javascript:void(0);" class="btn btn-sm btn-danger" id="btn_hapus">X</a></td>\
                                </tr>';
                    $("#tbody_family_data").append(addRow);
                });

                $("#tbody_family_data").on('click','#btn_hapus',function(){
                    $(this).parent().parent().remove();
                });
                // End Family Data

                // Emergency Contact
                $("#add_emergency_contact").click(function(){    
                                    
                    var addRow = '<tr id="tr_EC">\
                                    <td><input type="text" rel="Nama" name="EC_Name[]" id="EC_Name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Hubungan" name="EC_Relationship[]" id="EC_Relationship" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="No Telepon" name="EC_Phone_Number[]" id="EC_Phone_Number" class="form-control form-control-sm"/></td>\
                                    <td><a href="javascript:void(0);" class="btn btn-sm btn-danger" id="btn_hapus">X</a></td>\
                                </tr>';
                    $("#tbody_emergency_contact").append(addRow);
                });

                $("#tbody_emergency_contact").on('click','#btn_hapus',function(){
                    $(this).parent().parent().remove();
                });
                // End Emergency Contact

                // Emergency Contact
                $("#add_education_history").click(function(){    
                                    
                    var addRow = '<tr id="tr_EH"> \
                                    <td><input type="text" rel="Nama Lembaga" name="EH_Institute_Name[]" id="EH_Institute_Name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Jurusan" name="EH_Majors[]" id="EH_Majors" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="Tahun Masuk" name="EH_Start_Years[]" id="EH_Start_Years" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="Tahun Keluar" name="EH_End_Years[]" id="EH_End_Years" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="Skor" name="EH_Score[]" id="EH_Score" class="form-control form-control-sm"/></td>\
                                    <td><a href="javascript:void(0);" class="btn btn-sm btn-danger" id="btn_hapus">X</a></td>\
                                </tr>';
                    $("#tbody_education_history").append(addRow);
                });

                $("#tbody_education_history").on('click','#btn_hapus',function(){
                    $(this).parent().parent().remove();
                });
                // End Emergency Contact

                // Assets
                $("#add_assets").click(function(){    
                                    
                    var addRow = '<tr id="tr_A"> \
                                    <td><input type="text" rel="Nama" name="A_name[]" id="A_name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="No Seri" name="A_Serial_Number[]" id="A_Serial_Number" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Deskripsi" name="A_Description[]" id="A_Description" class="form-control form-control-sm"/></td>\
                                    <td><a href="javascript:void(0);" class="btn btn-sm btn-danger" id="btn_hapus">X</a></td>\
                                </tr>';
                    $("#tbody_assets").append(addRow);
                });

                $("#tbody_assets").on('click','#btn_hapus',function(){
                    $(this).parent().parent().remove();
                });
                // End Assets

                // File
                $("#add_File").click(function(){    
                                    
                    var addRow = '<tr id="tr_F"> \
                                    <td><input type="text" rel="Nama" name="F_Name[]" id="F_Name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Deskripsi" name="F_Description[]" id="F_Description" class="form-control form-control-sm"/></td>\
                                    <td>\
                                        <div class="custom-file">\
                                            <input type="file" name="F_File[]" class="custom-file-input" id="F_customFile">\
                                            <label class="custom-file-label" for="customFile">Choose file</label>\
                                        </div>\
                                    </td>\
                                    <td><a href="javascript:void(0);" class="btn btn-sm btn-danger" id="btn_hapus">X</a></td>\
                                </tr>';
                    $("#tbody_file").append(addRow);
                });

                $("#tbody_file").on('click','#btn_hapus',function(){
                    $(this).parent().parent().remove();
                });
                // End File

                
            });
        </script>
        
	</body>
	<!--end::Body-->
</html>