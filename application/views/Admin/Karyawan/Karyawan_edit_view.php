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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Ubah Data Karyawan</a>
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
                                    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>">
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
                                                                <div class="image-input-wrapper" style="background-image: url('<?php echo base_url().$employee_foto_avatar; ?>');"></div>
                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="profile_avatar" id="profile_avatar" accept=".png, .jpg, .jpeg">
                                                                    <input type="hidden" name="profile_avatar_remove" id="profile_avatar_remove" value="">
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
                                                                <?php $selectedDept = ($value['master_department_id'] == $employee_department_id) ? 'selected' : '';?>
                                                                    <option value="<?php echo $value['master_department_id'] ?>" <?php echo $selectedDept; ?>><?php echo $value['master_department_name'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 1</label>
                                                            <select class="form-control form-control-sm" rel="Persetujuan Atasan 1" name="ED_Approval_Line_1" id="ED_Approval_Line_1">
                                                                <option value="">Pilih Persetujuan Atasan 1</option>
                                                                <?php foreach ($this->db->query("SELECT employee_id, employee_first_name FROM employee")->result_array() as $value) { ?>
                                                                <?php $selectedApprov1 = ($value['employee_id'] == $employee_approval_1_id) ? 'selected' : '';?>
                                                                    <option value="<?php echo $value['employee_id'] ?>" <?php echo $selectedApprov1; ?>><?php echo $value['employee_first_name'] ?></option>
                                                                <?php } ?>
                                                            </select>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Posisi Kerja <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Posisi Kerja" name="ED_Job_Position" id="ED_Job_Position" disabled="disabled">
                                                                <option value="">Pilih Posisi Kerja</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 2</label>
                                                            <select class="form-control form-control-sm" rel="Persetujuan Atasan 2" name="ED_Approval_Line_2" id="ED_Approval_Line_2">
                                                                <option value="">Pilih Persetujuan Atasan 2</option>
                                                                <?php foreach ($this->db->query("SELECT employee_id, employee_first_name FROM employee")->result_array() as $value) { ?>
                                                                <?php $selectedApprov2 = ($value['employee_id'] == $employee_approval_2_id) ? 'selected' : '';?>
                                                                    <option value="<?php echo $value['employee_id'] ?>" <?php echo $selectedApprov2; ?>><?php echo $value['employee_first_name'] ?></option>
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
                                                                <?php $selectedJobLevel = ($value['master_job_level_id'] == $employee_job_level) ? 'selected' : '';?>
                                                                    <option value="<?php echo $value['master_job_level_id'] ?>" <?php echo $selectedJobLevel; ?>><?php echo $value['master_job_level_name'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 3</label>
                                                            <select class="form-control form-control-sm" rel="Persetujuan Atasan 3" name="ED_Approval_Line_3" id="ED_Approval_Line_3">
                                                                <option value="">Pilih Persetujuan Atasan 3</option>
                                                                <?php foreach ($this->db->query("SELECT employee_id, employee_first_name FROM employee")->result_array() as $value) { ?>
                                                                <?php $selectedApprov3 = ($value['employee_id'] == $employee_approval_3_id) ? 'selected' : '';?>
                                                                    <option value="<?php echo $value['employee_id'] ?>" <?php echo $selectedApprov3; ?>><?php echo $value['employee_first_name'] ?></option>
                                                                <?php } ?>
                                                            </select>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Status Pekerja <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Status Pekerja" name="ED_Employment_Status" id="ED_Employment_Status">
                                                                <option value="">Pilih Status Pekerja</option>
                                                                <option value="1" <?php echo ($employee_employment_status == 1) ? 'selected' : ''; ?>>Kontrak</option>                             
                                                                <option value="2" <?php echo ($employee_employment_status == 2) ? 'selected' : ''; ?>>Permanent</option>
                                                                <option value="3" <?php echo ($employee_employment_status == 3) ? 'selected' : ''; ?>>Mengundurkan Diri</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Tanggal Masuk <span class="text-danger">*</span></label>
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control form-control-sm" rel="Tanggal Masuk" readonly="readonly" name="ED_Join_Date" id="ED_Join_Date" value="<?php echo $employee_join_start_date; ?>" />
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
                                                                <select class="form-control form-control-sm" rel="Cabang" name="ED_Branch" id="ED_Branch">
                                                                    <option value="">Pilih Cabang</option>
                                                                    <option value="1" <?php echo ($employee_branch_name == 1) ? 'selected' : ''; ?>>Pusat</option>                             
                                                                    <option value="2" <?php echo ($employee_branch_name == 2) ? 'selected' : ''; ?>>Cabang</option>
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
                                                            <input type="text" class="form-control form-control-sm" rel="Nama Depan" name="PD_First_Name" id="PD_First_Name" value="<?php echo $employee_first_name; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Nama Belakang <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-sm" rel="Nama Belakang" name="PD_Last_Name" id="PD_Last_Name" value="<?php echo $employee_last_name; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Email <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control form-control-sm" rel="Email" name="PD_Email" id="PD_Email" value="<?php echo $employee_email; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No Identitas <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="No Identitas" name="PD_ID_Card" id="PD_ID_Card" value="<?php echo $employee_no_id_card; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Alamat <span class="text-danger">*</span></label>
                                                            <textarea class="form-control form-control-sm" rel="Alamat" name="PD_Address" id="PD_Address" rows="3"><?php echo $employee_address; ?></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Kode Pos <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="Kode Pos" name="PD_Postal_Code" id="PD_Postal_Code" value="<?php echo $employee_postal_code; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>No Telepon <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="No Telepon" name="PD_Phone" id="PD_Phone" value="<?php echo $employee_home_phone_number; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No HP <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control form-control-sm" rel="No HP" name="PD_Mobile_phone" id="PD_Mobile_phone" value="<?php echo $employee_mobile_phone_number; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Tempat Lahir <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-sm" rel="Tempat Lahir" name="PD_Place_Of_Birth" id="PD_Place_Of_Birth" value="<?php echo $employee_place_of_birth; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control form-control-sm" rel="Tanggal Lahir" readonly="readonly" value="<?php echo $employee_date_of_birth; ?>" name="PD_Birth_Date" id="PD_Birth_Date" />
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
                                                                <option value="1" <?php echo ($employee_gender == 1) ? 'selected' : ''; ?>>Laki-laki</option>
                                                                <option value="2" <?php echo ($employee_gender == 2) ? 'selected' : ''; ?>>Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Agama <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Agama" name="PD_Religion" id="PD_Religion">
                                                                <option value="">Pilih Agama</option>
                                                                <option value="1" <?php echo ($employee_religion == 1) ? 'selected' : ''; ?>>Kristen</option>
                                                                <option value="2" <?php echo ($employee_religion == 2) ? 'selected' : ''; ?>>Islam</option>
                                                                <option value="3" <?php echo ($employee_religion == 3) ? 'selected' : ''; ?>>Hindu</option>
                                                                <option value="4" <?php echo ($employee_religion == 4) ? 'selected' : ''; ?>>Budha</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Golongan Darah <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Golongan Darah" name="PD_Blood_Type" id="PD_Blood_Type">
                                                                <option value="">Pilih Golongan Darah</option>
                                                                <option value="A" <?php echo ($employee_blood_type == 'A') ? 'selected' : ''; ?>>A</option>
                                                                <option value="B" <?php echo ($employee_blood_type == 'B') ? 'selected' : ''; ?>>B</option>
                                                                <option value="AB" <?php echo ($employee_blood_type == 'AB') ? 'selected' : ''; ?>>AB</option>
                                                                <option value="O" <?php echo ($employee_blood_type == 'O') ? 'selected' : ''; ?>>O</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Status Pernikahan <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Status Pernikahan" name="PD_Martial_Status" id="PD_Martial_Status">
                                                                <option value="">Pilih Status Pernikahan</option>
                                                                <option value="1" <?php echo ($employee_marital_status == 1) ? 'selected' : ''; ?>>Belum Menikah</option>
                                                                <option value="2" <?php echo ($employee_marital_status == 2) ? 'selected' : ''; ?>>Menikah</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Jumlah Tanggungan <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm" rel="Jumlah Tanggungan" name="PD_jumlah_tanggungan" id="PD_jumlah_tanggungan">
                                                                <option value="">Pilih Jumlah Tanggungan</option>
                                                                <option value="0" <?php echo ($employee_total_dependents == 0) ? 'selected' : ''; ?>>0</option>
                                                                <option value="1" <?php echo ($employee_total_dependents == 1) ? 'selected' : ''; ?>>1</option>
                                                                <option value="2" <?php echo ($employee_total_dependents == 2) ? 'selected' : ''; ?>>2</option>
                                                                <option value="3" <?php echo ($employee_total_dependents == 3) ? 'selected' : ''; ?>>3</option>
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
                                                    <button type="button" class="btn btn-primary mb-2" id="add_family_data">Tambahkan Data Keluarga</button>
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
                                                            <?php if (count($employee_family) > 0) { ?>
                                                                <?php foreach ($employee_family as $value) { ?>
                                                                    <tr id="tr_FD"> 
                                                                        <td><input type="text" rel="Nama Lengkap" name="FD_Full_Name[<?php echo $value['employee_family_id'] ?>]" id="FD_Full_Name" class="form-control form-control-sm" value="<?php echo $value['employee_family_name']; ?>"/></td>
                                                                        <td><input type="text" rel="Hubungan" name="FD_Relationship[<?php echo $value['employee_family_id'] ?>]" id="FD_Relationship" class="form-control form-control-sm" value="<?php echo $value['employee_family_relationship']; ?>"/></td>
                                                                        <td><input type="number" rel="Usia" name="FD_Age[<?php echo $value['employee_family_id'] ?>]" id="FD_Age" class="form-control form-control-sm" value="<?php echo $value['employee_family_age']; ?>"></td>
                                                                        <td>
                                                                            <select class="form-control form-control-sm" rel="Jenis Kelamin" name="FD_Gender[<?php echo $value['employee_family_id'] ?>]" id="FD_Gender">
                                                                                <option value="">Pilih Jenis Kelamin</option>
                                                                                <option value="1" <?php echo ($value['employee_family_gender'] == 1) ? 'selected' : ''; ?>>Laki-laki</option>
                                                                                <option value="2" <?php echo ($value['employee_family_gender'] == 2) ? 'selected' : ''; ?>>Perempuan</option>
                                                                            </select>
                                                                        </td>
                                                                        <td><input type="text" rel="Pekerjaan" name="FD_Job[<?php echo $value['employee_family_id'] ?>]" id="FD_Job" class="form-control form-control-sm" value="<?php echo $value['employee_family_job']; ?>"/></td>
                                                                        <td>
                                                                            <select class="form-control form-control-sm" rel="Agama" name="FD_Religion[<?php echo $value['employee_family_id'] ?>]" id="FD_Religion">
                                                                                <option value="">Pilih Agama</option>
                                                                                <option value="1"<?php echo ($value['employee_family_religion'] == 1) ? 'selected' : ''; ?>>Kristen</option>
                                                                                <option value="2"<?php echo ($value['employee_family_religion'] == 2) ? 'selected' : ''; ?>>Islam</option>
                                                                                <option value="3"<?php echo ($value['employee_family_religion'] == 3) ? 'selected' : ''; ?>>Hindu</option>
                                                                                <option value="4"<?php echo ($value['employee_family_religion'] == 4) ? 'selected' : ''; ?>>Buddha</option>
                                                                            </select>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } else { ?>
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
                                                            <?php } ?>
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
                                                            <?php if (count($employee_EmerContact) > 0) { ?>
                                                                <?php foreach ($employee_EmerContact as $value) { ?>
                                                                    <tr id="tr_EC"> 
                                                                        <td><input type="text" rel="Nama" name="EC_Name[<?php echo $value['employee_emergency_contact_id'] ?>]" id="EC_Name" class="form-control form-control-sm" value="<?php echo $value['employee_emergency_contact_name']; ?>"/></td>
                                                                        <td><input type="text" rel="Hubungan" name="EC_Relationship[<?php echo $value['employee_emergency_contact_id'] ?>]" id="EC_Relationship" class="form-control form-control-sm" value="<?php echo $value['employee_emergency_contact_relationship']; ?>"/></td>
                                                                        <td><input type="number" rel="No Telepon" name="EC_Phone_Number[<?php echo $value['employee_emergency_contact_id'] ?>]" id="EC_Phone_Number" class="form-control form-control-sm" value="<?php echo $value['employee_emergency_contact_phone_number']; ?>"/></td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <tr id="tr_EC"> 
                                                                    <td><input type="text" rel="Nama" name="EC_Name[]" id="EC_Name" class="form-control form-control-sm"/></td>
                                                                    <td><input type="text" rel="Hubungan" name="EC_Relationship[]" id="EC_Relationship" class="form-control form-control-sm"/></td>
                                                                    <td><input type="number" rel="No Telepon" name="EC_Phone_Number[]" id="EC_Phone_Number" class="form-control form-control-sm"/></td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php } ?>
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
                                                            <?php if (count($employee_Education) > 0) { ?>
                                                                <?php foreach ($employee_Education as $value) { ?>
                                                                    <tr id="tr_EH"> 
                                                                        <td><input type="text" rel="Nama Lembaga" name="EH_Institute_Name[<?php echo $value['employee_education_id'] ?>]" id="EH_Institute_Name" class="form-control form-control-sm" value="<?php echo $value['employee_education_institution_name']; ?>"/></td>
                                                                        <td><input type="text" rel="Jurusan" name="EH_Majors[<?php echo $value['employee_education_id'] ?>]" id="EH_Majors" class="form-control form-control-sm" value="<?php echo $value['employee_education_majors'] ?>"/></td>
                                                                        <td><input type="number" rel="Tahun Masuk" name="EH_Start_Years[<?php echo $value['employee_education_id'] ?>]" id="EH_Start_Years" class="form-control form-control-sm" value="<?php echo $value['employee_education_start_year'] ?>"/></td>
                                                                        <td><input type="number" rel="Tahun Keluar" name="EH_End_Years[<?php echo $value['employee_education_id'] ?>]" id="EH_End_Years" class="form-control form-control-sm" value="<?php echo $value['employee_education_end_year'] ?>"/></td>
                                                                        <td><input type="number" rel="Skor" name="EH_Score[<?php echo $value['employee_education_id'] ?>]" id="EH_Score" class="form-control form-control-sm" value="<?php echo $value['employee_education_score'] ?>"/></td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <tr id="tr_EH"> 
                                                                    <td><input type="text" rel="Nama Lembaga" name="EH_Institute_Name[]" id="EH_Institute_Name" class="form-control form-control-sm"/></td>
                                                                    <td><input type="text" rel="Jurusan" name="EH_Majors[]" id="EH_Majors" class="form-control form-control-sm"/></td>
                                                                    <td><input type="number" rel="Tahun Masuk" name="EH_Start_Years[]" id="EH_Start_Years" class="form-control form-control-sm"/></td>
                                                                    <td><input type="number" rel="Tahun Keluar" name="EH_End_Years[]" id="EH_End_Years" class="form-control form-control-sm"/></td>
                                                                    <td><input type="number" rel="Skor" name="EH_Score[]" id="EH_Score" class="form-control form-control-sm"/></td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php } ?>
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
                                                            <input type="hidden" name="P_id" id="P_id" class="form-control form-control-sm" value="<?php echo $employee_payroll_id; ?>">
                                                            <input type="text" rel="Nama Bank" name="P_Bank_name" id="P_Bank_name" class="form-control form-control-sm" value="<?php echo $employee_payroll_bank_name; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No Rekening <span class="text-danger">*</span></label>
                                                            <input type="number" rel="No Rekening" name="P_Account" id="P_Account" class="form-control form-control-sm" value="<?php echo $employee_payroll_bank_account; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Nama Rekening <span class="text-danger">*</span></label>
                                                            <input type="text" rel="Nama Rekening" name="P_Account_holder" id="P_Account_holder" class="form-control form-control-sm" value="<?php echo $employee_payroll_bank_account_holder; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Gaji Pokok <span class="text-danger">*</span></label>
                                                            <input type="number" rel="Gaji Pokok" name="P_Basic_salary" id="P_Basic_salary" class="form-control form-control-sm" value="<?php echo $employee_payroll_basic_salary; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>NPWP <span class="text-danger">*</span></label>
                                                            <input type="number" rel="NPWP" name="P_NPWP" id="P_NPWP" class="form-control form-control-sm" value="<?php echo $employee_payroll_npwp; ?>" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>BPJS Ketenagakerjaan <span class="text-danger">*</span></label>
                                                            <input type="number" rel="BPJS Ketenagakerjaan" name="P_BPJS_Ketenagakerjaan" id="P_BPJS_Ketenagakerjaan" class="form-control form-control-sm" value="<?php echo $employee_payroll_bpjs_ketenagakerjaan; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>BPJS Kesehatan <span class="text-danger">*</span></label>
                                                            <input type="number" rel="BPJS Kesehatan" name="P_BPJS_Kesehatan" id="P_BPJS_Kesehatan" class="form-control form-control-sm" value="<?php echo $employee_payroll_bpjs_kesehatan; ?>" placeholder="">
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
                                                                
                                                                $sqlEmployeePayrollDet = $this->db->query("SELECT * FROM employee_payroll_detail WHERE employee_payroll_id = '".$employee_payroll_id."' AND employee_payroll_detail_component_id = '".$rowPayroll['master_payroll_component_id']."' AND employee_payroll_detail_component_id_detail = '".$rowPayrollDetail['master_payroll_component_detail_id']."' ");
                                                                if ($sqlEmployeePayrollDet->num_rows() > 0) {
                                                                    $rowEmployeePayrollDet = $sqlEmployeePayrollDet->row_array();

                                                                    $employee_payroll_detail_amount = $rowEmployeePayrollDet['employee_payroll_detail_amount'];
                                                                    
                                                                } else {
                                                                    $employee_payroll_detail_amount = '';
                                                                }
                                                    ?>
                                                                    <tr>
                                                                        <?php if ($employee_payroll_detail_amount == 'Termasuk') { $name_rel = 'Nominal '.$rowPayrollDetail['master_payroll_component_detail_name']; ?>
                                                                            <td><?php echo $rowPayrollDetail['master_payroll_component_detail_name']; ?> <span class="text-danger">*</span></td>
                                                                            <td><input type="text" rel="<?php echo $name_rel; ?>" name="P_Amount[<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>]" id="P_Amount_<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>" value="<?php echo $employee_payroll_detail_amount; ?>" class="form-control form-control-sm" placeholder="" readonly></td>
                                                                        <?php } else { $name_rel = 'nilai_payroll_componen'; $span_merah = ($rowPayrollDetail['master_payroll_component_detail_id'] == 1) ? '<span class="text-danger">*</span>' : ''; ?>
                                                                            <td><?php echo $rowPayrollDetail['master_payroll_component_detail_name']; ?> <?php echo $span_merah; ?></td>
                                                                            <td><input type="number" rel="<?php echo $name_rel; ?>" name="P_Amount[<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>]" id="P_Amount_<?php echo $rowPayrollDetail['master_payroll_component_detail_id']; ?>" value="<?php echo $employee_payroll_detail_amount; ?>" class="form-control form-control-sm" placeholder=""></td>
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
                                                            <?php if (count($employee_Assets) > 0) { ?>
                                                                <?php foreach ($employee_Assets as $value) { ?>
                                                                    <tr id="tr_A"> 
                                                                        <td><input type="text" rel="Nama" name="A_name[<?php echo $value['employee_assets_id'] ?>]" id="A_name" class="form-control form-control-sm" value="<?php echo $value['employee_assets_name']; ?>"/></td>
                                                                        <td><input type="text" rel="No Seri" name="A_Serial_Number[<?php echo $value['employee_assets_id'] ?>]" id="A_Serial_Number" class="form-control form-control-sm" value="<?php echo $value['employee_assets_serial_number']; ?>"/></td>
                                                                        <td><input type="text" rel="Deskripsi" name="A_Description[<?php echo $value['employee_assets_id'] ?>]" id="A_Description" class="form-control form-control-sm" value="<?php echo $value['employee_assets_description']; ?>"/></td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <tr id="tr_A"> 
                                                                    <td><input type="text" rel="Nama" name="A_name[]" id="A_name" class="form-control form-control-sm"/></td>
                                                                    <td><input type="text" rel="No Seri" name="A_Serial_Number[]" id="A_Serial_Number" class="form-control form-control-sm"/></td>
                                                                    <td><input type="text" rel="Deskripsi" name="A_Description[]" id="A_Description" class="form-control form-control-sm"/></td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php } ?>
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
                                                            <?php if (count($employee_File) > 0) { ?>
                                                                <?php foreach ($employee_File as $value) { ?>
                                                                    <tr id="tr_F"> 
                                                                        <td><input type="text" rel="Nama" name="F_Name[<?php echo $value['employee_file_id'] ?>]" id="F_Name" class="form-control form-control-sm" value="<?php echo $value['employee_file_name']; ?>"/></td>
                                                                        <td><input type="text" rel="Deskripsi" name="F_Description[<?php echo $value['employee_file_id'] ?>]" id="F_Description" class="form-control form-control-sm" value="<?php echo $value['employee_file_description']; ?>"/></td>
                                                                        <td>
                                                                            <?php 
                                                                                if ($value['employee_file_file'] != '') { 
                                                                            ?>
                                                                                    <a target="_blank" href="<?php echo base_url().$value['employee_file_file']; ?>">Unduh File</a>
                                                                            <?php 
                                                                                } else { 
                                                                            ?>
                                                                            <?php 
                                                                                } 
                                                                                ?>
                                                                                <div class="custom-file">
                                                                                    <input type="file" name="F_File[<?php echo $value['employee_file_id'] ?>]" class="custom-file-input" id="F_customFile">
                                                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                                                </div>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <tr id="tr_F"> 
                                                                    <td><input type="text" rel="Nama" name="F_Name[]" id="F_Name" class="form-control form-control-sm"/></td>
                                                                    <td><input type="text" rel="Deskripsi" name="F_Description[]" id="F_Description" class="form-control form-control-sm"/></td>
                                                                    <td>
                                                                        <div class="custom-file">
                                                                            <input type="file" name="F_File[]" class="custom-file-input" id="F_customFile">
                                                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php } ?>
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
                                            <button type="submit" class="btn btn-primary" id="btn-employees-submit">Perbaharui</button>
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
                            console.log($(this));
                            statusValidation = 1;
                            $('#'+$(this)[0].id).focus();
                            var text = $(this)[0].id.replace("_", " ");
                            Swal.fire("Gagal !", $(this).attr('rel')+" Tidak Boleh Kosong!", "error");
                            return false;

                        }
                    }
                    // console.log($(this)[0].id+' -- '+$(this)[0].value+' -- '+$(this)[0].name);
                });

                // alert(statusValidation);

                if (statusValidation == 0) {
                    var postData = new FormData(this.form);                        
                    $.ajax({
                        url : "<?php echo base_url('karyawan/ubah_data_karyawan'); ?>",
                        type: "POST",
                        data: postData,
                        processData: false,
                        contentType: false,
                        success: function(data, textStatus, jqXHR){
                            console.log(data);
                            if(data.status == 'success'){ 
                                $('#cover-spin').hide(0);
                                Swal.fire("Berhasil", "Pembaharuan Karyawan Berhasil", "success");
                                setTimeout(function() {
                                    // location.reload();
                                    location = '<?php echo base_url(); ?>karyawan'; 
                                }, 2000);

                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal", "Pembaharuan Karyawan Gagal", "error");

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('#cover-spin').hide(0);
                            Swal.fire("Gagal", "Pembaharuan Karyawan Gagal", "error");
                        }
                    });
                } else {
                    // Swal.fire("Error!", "Please Check Again!", "error");
                }

            });

            jQuery(document).ready(function() {	
                KTSelect2.init();
                KTBootstrapDatepicker.init();
                KTImageInputDemo.init();

                if ($('#ED_Departmen').val() != '') {
                    var value = $('#ED_Departmen').val();
                    $.ajax({
                        url : "<?php echo base_url('karyawan/ambil_data_posisi_pekerjaan'); ?>/"+value,
                        type: "GET",
                        dataType: "JSON",
                        success: function(data, textStatus, jqXHR){
                            console.log(data);
                            $("#ED_Job_Position").removeAttr('disabled');
                            $("#ED_Job_Position").html('');
                            $("#ED_Job_Position").append('<option value="">Select Job Position</option>');
                            var option = '';
                            var selected = '';
                            var jobPosition = '<?php echo $employee_job_position; ?>';
                            data.forEach(element => {
                                console.log(element);
                                selected = (element.master_job_position_id == jobPosition) ? 'selected' : '';
                                option += '<option value="'+element.master_job_position_id+'" '+selected+'>'+element.master_job_position_name+'</option>';
                            });
                            console.log(option);
                            $("#ED_Job_Position").append(option);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $("#ED_Job_Position").removeAttr('disabled');
                            $("#ED_Job_Position").attr('disabled', 'disabled');
                            $("#ED_Job_Position").html('');
                            $("#ED_Job_Position").append('<option value="">Select Job Position</option>');
                        }
                    });
                } else {
                    $("#ED_Job_Position").removeAttr('disabled');
                    $("#ED_Job_Position").attr('disabled', 'disabled');
                    $("#ED_Job_Position").html('');
                    $("#ED_Job_Position").append('<option value="">Select Job Position</option>');
                }

                $('#ED_Departmen').change(function() {
                    var value = $(this).val();
                    console.log(value);
                    if (value != '') {
                        $.ajax({
                            url : "<?php echo base_url('employees/get_job_position'); ?>/"+value,
                            type: "GET",
                            dataType: "JSON",
                            success: function(data, textStatus, jqXHR){
                                console.log(data);
                                $("#ED_Job_Position").removeAttr('disabled');
                                $("#ED_Job_Position").html('');
                                $("#ED_Job_Position").append('<option value="">Select Job Position</option>');
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
                                $("#ED_Job_Position").append('<option value="">Select Job Position</option>');
                            }
                        });
                    } else {
                        $("#ED_Job_Position").removeAttr('disabled');
                        $("#ED_Job_Position").attr('disabled', 'disabled');
                        $("#ED_Job_Position").html('');
                        $("#ED_Job_Position").append('<option value="">Select Job Position</option>');
                    }
                });
                // KTBootstrapDatepicker.init();
                // KTWizard3.init();
                // KTSelect2.init();

                // Family Data
                $("#add_family_data").click(function(){    
                                    
                    var addRow = '<tr id="tr_FD"> \
                                        <td><input type="text" rel="Nama Lengkap" name="Tambah_FD_Full_Name[]" id="FD_Full_Name" class="form-control form-control-sm" value=""/></td>\
                                        <td><input type="text" rel="Hubungan" name="Tambah_FD_Relationship[]" id="FD_Relationship" class="form-control form-control-sm" value=""/></td>\
                                        <td><input type="number" rel="Usia" name="Tambah_FD_Age[]" id="FD_Age" class="form-control form-control-sm" value=""></td>\
                                        <td>\
                                            <select class="form-control form-control-sm" rel="Jenis Kelamin" name="Tambah_FD_Gender[]" id="FD_Gender">\
                                                <option value="">Pilih Jenis Kelamin</option>\
                                                <option value="1">Laki-laki</option>\
                                                <option value="2">Perempuan</option>\
                                            </select>\
                                        </td>\
                                        <td><input type="text" rel="Pekerjaan" name="Tambah_FD_Job[]" id="FD_Job" class="form-control form-control-sm" value=""/></td>\
                                        <td>\
                                            <select class="form-control form-control-sm" rel="Agama" name="Tambah_FD_Religion[]" id="FD_Religion">\
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
                                        <td><input type="text" rel="Nama" name="Tambah_EC_Name[]" id="EC_Name" class="form-control form-control-sm"/></td>\
                                        <td><input type="text" rel="Hubungan" name="Tambah_EC_Relationship[]" id="EC_Relationship" class="form-control form-control-sm"/></td>\
                                        <td><input type="number" rel="No Telepon" name="Tambah_EC_Phone_Number[]" id="EC_Phone_Number" class="form-control form-control-sm"/></td>\
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
                                    <td><input type="text" rel="Nama Lembaga" name="Tambah_EH_Institute_Name[]" id="EH_Institute_Name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Jurusan" name="Tambah_EH_Majors[]" id="EH_Majors" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="Tahun Masuk" name="Tambah_EH_Start_Years[]" id="EH_Start_Years" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="Tahun Keluar" name="Tambah_EH_End_Years[]" id="EH_End_Years" class="form-control form-control-sm"/></td>\
                                    <td><input type="number" rel="Skor" name="Tambah_EH_Score[]" id="EH_Score" class="form-control form-control-sm"/></td>\
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
                                    <td><input type="text" rel="Nama" name="Tambah_A_name[]" id="A_name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="No Seri" name="Tambah_A_Serial_Number[]" id="A_Serial_Number" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Deskripsi" name="Tambah_A_Description[]" id="A_Description" class="form-control form-control-sm"/></td>\
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
                                    <td><input type="text" rel="Nama" name="Tambah_F_Name[]" id="F_Name" class="form-control form-control-sm"/></td>\
                                    <td><input type="text" rel="Deskripsi" name="Tambah_F_Description[]" id="F_Description" class="form-control form-control-sm"/></td>\
                                    <td>\
                                        <div class="custom-file">\
                                            <input type="file" name="Tambah_F_File[]" class="custom-file-input" id="F_customFile">\
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