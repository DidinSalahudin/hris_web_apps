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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Info Saya</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Informasi Umum</a>
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
                                                    <h3 class="card-title">Detail Karyawan</h3>
                                                </div>
                                                <!--begin::Form-->
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Departemen</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_departmen_name']; ?></span>
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 1</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_approval_1']; ?></span>                                                     
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Posisi Kerja</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_job_position']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 2</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_approval_2']; ?></span>                                                       
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Level Pekerjaan</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_job_level']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Persetujuan Atasan 3</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_approval_3']; ?></span>                                                         
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Status Pekerja</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_employment_status']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Tanggal Masuk</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_join_start_date']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Lokasi Kerja</label>
                                                                <span class="form-text text-muted"><?php echo $list['employee_branch_name']; ?></span>
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
                                                            <label>Nama Depan</label>
															<span class="form-text text-muted"><?php echo $list['employee_first_name']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Nama Belakang</label>
															<span class="form-text text-muted"><?php echo $list['employee_last_name']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Email</label>
															<span class="form-text text-muted"><?php echo $list['employee_email']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No Identitas</label>
															<span class="form-text text-muted"><?php echo $list['employee_no_id_card']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Alamat</label>
															<span class="form-text text-muted"><?php echo $list['employee_address']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Kode Pos</label>
															<span class="form-text text-muted"><?php echo $list['employee_postal_code']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>No Telepon</label>
															<span class="form-text text-muted"><?php echo $list['employee_mobile_phone_number']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>No HP</label>
															<span class="form-text text-muted"><?php echo $list['employee_home_phone_number']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Tempat Lahir</label>
															<span class="form-text text-muted"><?php echo $list['employee_place_of_birth']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
															<label>Tanggal Lahir</label>
															<span class="form-text text-muted"><?php echo $list['employee_date_of_birth']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Jenis Kelamin</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_gender']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Agama</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_religion']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Golongan Darah</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_blood_type']; ?></span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Status Pernikahan</label>
                                                            <span class="form-text text-muted"><?php echo $list['employee_marital_status']; ?></span>
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
													<h4>Info Keluarga</h4>
                                                    <table class="table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Lengkap</th>
                                                                <th>Hubungan</th>
                                                                <th style="width: 100px;">Usia</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Pekerjaan</th>
                                                                <th>Agama</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_family_data">
															<?php foreach ($list['employee_data_family'] as $value) { ?>
																<tr>
																	<td><?php echo $value['employee_family_name'] ?></td>
																	<td><?php echo $value['employee_family_relationship'] ?></td>
																	<td><?php echo $value['employee_family_age'] ?></td>
																	<td><?php echo $value['employee_family_gender'] ?></td>
																	<td><?php echo $value['employee_family_job'] ?></td>
																	<td><?php echo $value['employee_family_religion'] ?></td>
																</tr>
															<?php } ?>
                                                        </tbody>
                                                    </table>

                                                    <h4>Kontak Darurat</h4>
                                                    <table class="table table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>Hubungan</th>
                                                                <th>No HP</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_emergency_contact">
                                                            <?php foreach ($list['employee_data_emergency_contact'] as $value) { ?>
																<tr>
																	<td><?php echo $value['employee_emergency_contact_name'] ?></td>
																	<td><?php echo $value['employee_emergency_contact_relationship'] ?></td>
																	<td><?php echo $value['employee_emergency_contact_phone_number'] ?></td>
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
                                                    <table class="table table-bordered table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Lembaga</th>
                                                                <th>Jurusan</th>
                                                                <th>Tahun Masuk</th>
                                                                <th>Tahun Keluar</th>
                                                                <th>Skor</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody_education_history">
                                                            <?php foreach ($list['employee_data_education'] as $value) { ?>
																<tr>
																	<td><?php echo $value['employee_education_institution_name'] ?></td>
																	<td><?php echo $value['employee_education_majors'] ?></td>
																	<td><?php echo $value['employee_education_start_year'] ?></td>
																	<td><?php echo $value['employee_education_end_year'] ?></td>
																	<td><?php echo $value['employee_education_score'] ?></td>
																</tr>
															<?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Form-->
                                            </div>
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
            
        </script>
        
	</body>
	<!--end::Body-->
</html>