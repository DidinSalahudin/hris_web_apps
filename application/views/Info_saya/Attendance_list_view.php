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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Manajemen Waktu</a>
											<!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Kehadiran</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Lihat Kehadiran</a>
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
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Kehadiran</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<!-- <div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													
												</span>Export</button>
												
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													
												</div>
												
											</div> -->
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder mr-2" data-toggle="modal" data-target="#request-attendance">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                Pengajuan Kehadiran
                                            </a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<!-- <div class="card-title"> -->
											<div class="col-12">
												<form action="<?php echo base_url(); ?>info_saya/lihat_kehadiran" method="GET">
													<div class="form-group row">
														<div class="col-3">
															<!-- <label>Month</label> -->
															<select class="form-control form-control-sm" name="attendance_month" id="attendance_month">
																<option value="01" <?php echo ($attendance_month == '01') ? 'selected' : '' ; ?>>Januari</option>
																<option value="02" <?php echo ($attendance_month == '02') ? 'selected' : '' ; ?>>Februari</option>
																<option value="03" <?php echo ($attendance_month == '03') ? 'selected' : '' ; ?>>Maret</option>
																<option value="04" <?php echo ($attendance_month == '04') ? 'selected' : '' ; ?>>April</option>
																<option value="05" <?php echo ($attendance_month == '05') ? 'selected' : '' ; ?>>Mei</option>
																<option value="06" <?php echo ($attendance_month == '06') ? 'selected' : '' ; ?>>Juni</option>
																<option value="07" <?php echo ($attendance_month == '07') ? 'selected' : '' ; ?>>Juli</option>
																<option value="08" <?php echo ($attendance_month == '08') ? 'selected' : '' ; ?>>Agustus</option>
																<option value="09" <?php echo ($attendance_month == '09') ? 'selected' : '' ; ?>>September</option>
																<option value="10" <?php echo ($attendance_month == '10') ? 'selected' : '' ; ?>>Oktober</option>
																<option value="11" <?php echo ($attendance_month == '11') ? 'selected' : '' ; ?>>November</option>
																<option value="12" <?php echo ($attendance_month == '12') ? 'selected' : '' ; ?>>Desember</option>
															</select>
														</div>
														<div class="col-3">
															<!-- <label>Years</label> -->
															<select class="form-control form-control-sm" name="attendance_years" id="attendance_years">
																<option value="2020" <?php echo ($attendance_years == '2020') ? 'selected' : '' ; ?>>2020</option>
																<option value="2019" <?php echo ($attendance_years == '2019') ? 'selected' : '' ; ?>>2019</option>
																<option value="2018" <?php echo ($attendance_years == '2018') ? 'selected' : '' ; ?>>2018</option>
																<option value="2017" <?php echo ($attendance_years == '2017') ? 'selected' : '' ; ?>>2017</option>
															</select>
														</div>
														<div class="col-3">
															<label>&nbsp;</label>
															<button class="btn btn-primary btn-sm" type="submit">Cari</button>
														</div>
													</div>
												</form>
											</div>
										<!-- </div> -->
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
											<thead>
												<tr>
													<th>Tanggal</th>
													<th>Tipe</th>
													<th>Jadwal Masuk</th>
													<th>Jadwal Keluar</th>
													<th>Jam Masuk</th>
													<th>Jam Keluar</th>
													<th>Tipe Kehadiran</th>
													<th>Tipe Cuti</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													$dateMonth = $attendance_years."-".$attendance_month;
													foreach ($date as $value) {
														$sqlCek = $this->db->query("SELECT * FROM attendance WHERE date_format(attendance_date,'%Y-%m') = '".$dateMonth."' AND employee_code = '".$this->session->userdata('user_code')."' ");
														if ($sqlCek->row_array() > 0) {
															if (date('D', strtotime($value)) == 'Sat' OR date('D', strtotime($value)) == 'Sun') {
																$bd_danger               = 'bg-danger';
																$type                    = 'LIBUR';
																$scheduleIn              = date('H:i', strtotime('08:00'));
																$scheduleOut             = date('H:i', strtotime('17:00'));
																$check_in                = '';
																$check_out               = '';
																$attendance_code         = '';
																$attendance_timeoff_code = '';
															} else {
																$sqlAttendance = $this->db->query("SELECT * FROM attendance WHERE attendance_date = '".$value."' AND employee_code = '".$this->session->userdata('user_code')."' ");
																if ($sqlAttendance->num_rows() > 0) {
																	$bd_danger = 'bg-success';

																	$rowAttendance = $sqlAttendance->row_array();

																	$scheduleIn    = date('H:i', strtotime('08:00'));
																	$scheduleOut   = date('H:i', strtotime('17:00'));
																	$check_in      = $rowAttendance['attendance_check_in'];
																	$check_out     = $rowAttendance['attendance_check_out'];

																	$sqlMAtendance = $this->db->query("SELECT * FROM master_attendance WHERE master_attendance_id = '".$rowAttendance['attendance_type']."' ");
																	if ($sqlMAtendance->num_rows() > 0) {
																		$rowMAtendance = $sqlMAtendance->row_array();

																		$attendance_code = $rowMAtendance['master_attendance_name'];
																	} else {
																		$attendance_code = '';
																	}

																	$sqlMTimeOff = $this->db->query("SELECT * FROM master_time_off WHERE master_time_off_id = '".$rowAttendance['attendance_timeoff_type']."' ");
																	if ($sqlMTimeOff->num_rows() > 0) {
																		$rowMTimeOff = $sqlMTimeOff->row_array();
																		
																		$attendance_timeoff_code = $rowMTimeOff['master_time_off_name'];
																		$bd_danger = 'bg-primary';
																	} else {
																		$attendance_timeoff_code = '';
																	}

																	if ($rowAttendance['attendance_type'] == 2) {
																		$bd_danger = 'bg-danger';
																	} else {
																		$bd_danger = $bd_danger;
																	}
																	
																} else {
																	$bd_danger               = '';
																	$scheduleIn              = date('H:i', strtotime('08:00'));
																	$scheduleOut             = date('H:i', strtotime('17:00'));
																	$check_in                = '';
																	$check_out               = '';
																	$attendance_code         = '';
																	$attendance_timeoff_code = '';
																}															
																$type = 'HARI KERJA';
															}
														} else {
															if (date('D', strtotime($value)) == 'Sat' OR date('D', strtotime($value)) == 'Sun') {
																$type = 'LIBUR';
															} else {
																$type = 'HARI KERJA';
															}
															$bd_danger               = 'bg-danger';
															$type                    = $type;
															$scheduleIn              = date('H:i', strtotime('00:00'));
															$scheduleOut             = date('H:i', strtotime('00:00'));
															$check_in                = '';
															$check_out               = '';
															$attendance_code         = '';
															$attendance_timeoff_code = '';
														}

												?>
												<tr style="text-align: center;" class="<?php echo $bd_danger; ?>">
													<td><?php echo $value; ?></td>
													<td><?php echo $type; ?></td>
													<td><?php echo $scheduleIn; ?></td>
													<td><?php echo $scheduleOut; ?></td>
													<td><?php echo $check_in; ?></td>
													<td><?php echo $check_out; ?></td>
													<td><?php echo $attendance_code; ?></td>
													<td><?php echo $attendance_timeoff_code; ?></td>
												</tr>
												<?php 
													}
												?>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
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

		<!-- Modal Add -->
        <div class="modal fade" id="request-attendance" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pengajuan Kehadiran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-add-department">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <div class="input-group date">
									<input type="text" class="form-control form-control-sm" readonly="readonly" value="" name="attendance_date" id="attendance_date" />
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="la la-calendar"></i>
										</span>
									</div>
								</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="exampleSelect1">Jam Masuk</label>
                                    <div class="input-group timepicker">
                                        <input class="form-control" id="attendance_check_in" name="attendance_check_in" readonly="readonly" placeholder="Select time" type="text">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleSelect1">Jam Keluar</label>
                                    <div class="input-group timepicker">
                                        <input class="form-control" id="attendance_check_out" name="attendance_check_out" readonly="readonly" placeholder="Select time" type="text">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Catatan</label>
                                <textarea class="form-control" rel="Catatan" name="attendance_note" id="attendance_note" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-save-attendance">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!--begin::Scrolltop-->
        <?php $this->load->view('Include/Scrolltop'); ?>
        <!--end::Scrolltop-->        
        
        <?php $this->load->view('Include/Js'); ?>
        <script src="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/datatables/datatables.bundle.js"></script>
        
        <!-- <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/features/miscellaneous/sweetalert2.js"></script> -->
        <!--end::Page Scripts-->
        
        <script>

			$('#btn-save-attendance').click(function (e) {
                e.preventDefault();
                var btn     = $(this);
                var form    = $(this).closest('form');
                
                var attendance_date      = $('#attendance_date').val();
                var attendance_check_in  = $('#attendance_check_in').val();
                var attendance_check_out = $('#attendance_check_out').val();
                var attendance_note      = $('#attendance_note').val();

                var statusValidation = 0;

                if (attendance_date != '') {
                    if (attendance_check_in != '') {
                        if (attendance_check_out != '') {
                            if (attendance_note != '') {
                                var postData = new FormData(this.form);                        
                                $.ajax({
                                    url : "<?php echo base_url('info_saya/tambah_pengajuan_kehadiran'); ?>",
                                    type: "POST",
                                    data: postData,
                                    processData: false,
                                    contentType: false,
                                    success: function(data, textStatus, jqXHR){
                                        console.log(data);
                                        if(data.status == 'TRUE'){ 

                                            Swal.fire("Berhasil", "Pengajuan Kehadiran Berhasil", "success");
                                            setTimeout(function() {
                                                location.reload();
                                            }, 2000);

                                        } else {

                                            Swal.fire("Gagal", "Pengajuan Kehadiran Gagal", "error");

                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        Swal.fire("Gagal", "Pengajuan Kehadiran Gagal", "error");
                                    }
                                });
                            } else {
                                Swal.fire("Gagal!", "Catatan Tidak Boleh Kosong!", "error");
                            }
                        } else {
                            Swal.fire("Gagal!", "Jam Keluar Tidak Boleh Kosong!", "error");
                        }
                    } else {
                        Swal.fire("Gagal!", "Jam Masuk Tidak Boleh Kosong!", "error");
                    }
                } else {
                    Swal.fire("Gagal!", "Tanggal Tidak Boleh Kosong!", "error");
                }

            });

            var KTDatatablesBasicScrollable = function() {

                var initTable1 = function() {
                    var table = $('#kt_datatable1');

                    // begin first table
                    table.DataTable({
                        scrollY: '50vh',
                        scrollX: true,
                        scrollCollapse: true,
                        columnDefs: [ ],
                    });
                };

                return {

                    //main function to initiate the module
                    init: function() {
                        initTable1();
                    },

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
                    $('#attendance_date').datepicker({
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

            var KTBootstrapTimepicker = function () {
    
                // Private functions
                var demos = function () {

                    // minimum setup
                    $('#attendance_check_in, #attendance_check_out').timepicker({
                        minuteStep: 1,
                        defaultTime: '',
                        showSeconds: true,
                        showMeridian: false,
                        snapToStep: true
                    });

                }

                return {
                    // public functions
                    init: function() {
                        demos(); 
                    }
                };
            }();

            jQuery(document).ready(function() {
				KTBootstrapDatepicker.init();
                KTBootstrapTimepicker.init();
                KTDatatablesBasicScrollable.init();
            });
        </script>
	</body>
	<!--end::Body-->
</html>