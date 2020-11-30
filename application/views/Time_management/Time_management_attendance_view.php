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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Manajemen Waktu</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Kehadiran</a>
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
                                <div class="card card-custom">
									<div class="card-header py-3">
										<div class="card-title">
											<h3 class="card-label">Kehadiran</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalLong">
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
                                                Import Data Kehadiran
                                            </a>
											<!--end::Button-->
										</div>
                                    </div>
									<div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <form action="<?php echo base_url(); ?>manajemen_waktu/kehadiran" class="form" method="GET">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control form-control-sm" readonly="readonly" value="<?php echo $date; ?>" name="search_date" id="search_date" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="submit" class="btn btn-primary">Cari</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
											<thead>
												<tr>
                                                    <th>Kode Karyawan</th>
                                                    <th>Nama Depan</th>
                                                    <th>Nama Belakang</th>
                                                    <th>Tanggal</th>
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
                                                    foreach ($data as $value) { 
                                                        if ($value['AttendanceId'] == '1') {
                                                            $bg_tr = 'bg-success';
                                                        } else if ($value['AttendanceId'] == '2') {
                                                            $bg_tr = 'bg-danger';
                                                        } else if ($value['AttendanceId'] == '3') {
                                                            $bg_tr = 'bg-primary';
                                                        } else if ($value['AttendanceId'] == '4') {
                                                            $bg_tr = 'bg-secondary';
                                                        } else {
                                                            $bg_tr = 'bg-warning';
                                                        }
                                                ?>
                                                    <tr class="<?php echo $bg_tr; ?>">
                                                        <td><?php echo $value['Code']; ?></td>
                                                        <td><?php echo $value['FirstName']; ?></td>
                                                        <td><?php echo $value['LastName']; ?></td>
                                                        <td><?php echo $value['Date']; ?></td>
                                                        <td><?php echo $value['ScheduleIn']; ?></td>
                                                        <td><?php echo $value['ScheduleOut']; ?></td>
                                                        <td><?php echo $value['CheckIn']; ?></td>
                                                        <td><?php echo $value['CheckOut']; ?></td>
                                                        <td><?php echo $value['AttendanceType']; ?></td>
                                                        <td><?php echo $value['TimeOffType']; ?></td>
                                                    </tr>
                                                <?php } ?>
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
        
        <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Impor Kehadiran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-import-attendance" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <div class="modal-body">
                            <div class="form-group">
                                <label>File Impor</label>
                                <div class="custom-file">
                                    <input type="file" name="file_import_attendance" class="custom-file-input" id="file_import_attendance" onchange="return fileValidation('file_import_attendance')">
                                    <label class="custom-file-label" for="customFile" id="label_import_file_attendance">Pilih File</label>
                                </div>
                                <span class="form-text text-muted">Contoh file klik <a href="<?php echo base_url(); ?>assets/file/contoh_file/contoh_file.xlsx">disini</a>.</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-import-attendance">Impor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!--begin::Scrolltop-->
        <?php $this->load->view('Include/Scrolltop'); ?>
        <!--end::Scrolltop-->        
        
        <?php $this->load->view('Include/Js'); ?>

        <!-- <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/crud/forms/widgets/select2.js"></script> -->
        <!--begin::Page Vendors(used by this page)-->
		<script src="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors-->

        <script>

			function fileValidation(idFile) {
                var fileInput = document.getElementById(idFile);
                var filePath = fileInput.value;
                var strArray = filePath.split('\\');
                var filename = strArray[2];
                var file = fileInput.files[0];
                console.log(file.size);
                var allowedExtensions = /(\.xls|\.xlsx|\.csv)$/i;
                if (!allowedExtensions.exec(filePath)) {
                    $('#label_import_file_attendance').html('');
                    fileInput.value = '';
                    Swal.fire("Error", "Files must be of type xls, xlsx and csv", "error");
                    
                    return false;
                } else {
                    $('#label_import_file_attendance').html(file.name);
                }
            }

            $('#btn-import-attendance').click(function(e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var file_import_attendance = $('#file_import_attendance').val();

                if (file_import_attendance != '') {
                    var formData = new FormData(this.form);
                    console.log(formData);  
                    $.ajax({
                        url : "<?php echo base_url('manajemen_waktu/impor_kehadiran'); ?>",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false, 
                        // dataType: "JSON",
                        success: function(data) {            
                            console.log(data);                
                            if(data.status == 'TRUE'){ 
                                $('#cover-spin').hide(0);
                                Swal.fire("success", data.message, "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal", data.message, "error");              
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('#cover-spin').hide(0);
                            Swal.fire("Gagal", "Periksa Kembali Masukan Anda", "error");
                        }
                    });
                } else {
                    $('#cover-spin').hide(0);
                    Swal.fire("Gagal", "File Impor Tidak Boleh Kosong", "error");
                }
            });

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
                    $('#search_date').datepicker({
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

            var KTDatatablesExtensionButtons = function() {

                var initTable1 = function() {

                    // begin first table
                    var table = $('#kt_datatable1').DataTable({
                        responsive: true,
                        // Pagination settings
                        dom: `<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>
                        <'row'<'col-sm-12'tr>>
                        <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

                        buttons: [
                            'print',
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5',
                        ],
                        columnDefs: [
                            {
                                width: '75px',
                                targets: 6,
                                render: function(data, type, full, meta) {
                                    var status = {
                                        1: {'title': 'Pending', 'class': 'label-light-primary'},
                                        2: {'title': 'Delivered', 'class': ' label-light-danger'},
                                        3: {'title': 'Canceled', 'class': ' label-light-primary'},
                                        4: {'title': 'Success', 'class': ' label-light-success'},
                                        5: {'title': 'Info', 'class': ' label-light-info'},
                                        6: {'title': 'Danger', 'class': ' label-light-danger'},
                                        7: {'title': 'Warning', 'class': ' label-light-warning'},
                                    };
                                    if (typeof status[data] === 'undefined') {
                                        return data;
                                    }
                                    return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                                },
                            },
                            {
                                width: '75px',
                                targets: 7,
                                render: function(data, type, full, meta) {
                                    var status = {
                                        1: {'title': 'Online', 'state': 'danger'},
                                        2: {'title': 'Retail', 'state': 'primary'},
                                        3: {'title': 'Direct', 'state': 'success'},
                                    };
                                    if (typeof status[data] === 'undefined') {
                                        return data;
                                    }
                                    return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                                        '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                                },
                            },
                        ],
                    });

                };

                // var initTable2 = function() {

                //     // begin first table
                //     var table = $('#kt_datatable2').DataTable({
                //         responsive: true,

                //         buttons: [
                //             'print',
                //             'copyHtml5',
                //             'excelHtml5',
                //             'csvHtml5',
                //             'pdfHtml5',
                //         ],
                //         processing: true,
                //         serverSide: true,
                //         ajax: {
                //             url: HOST_URL + '/api/datatables/demos/server.php',
                //             type: 'POST',
                //             data: {
                //                 // parameters for custom backend script demo
                //                 columnsDef: [
                //                     'OrderID', 'Country', 'ShipCity',
                //                     'ShipAddress', 'CompanyAgent', 'CompanyName', 'Status', 'Type',],
                //             },
                //         },
                //         columns: [
                //             {data: 'OrderID'},
                //             {data: 'Country'},
                //             {data: 'ShipCity'},
                //             {data: 'ShipAddress'},
                //             {data: 'CompanyAgent'},
                //             {data: 'CompanyName'},
                //             {data: 'Status'},
                //             {data: 'Type'},
                //         ],
                //         columnDefs: [
                //             {
                //                 targets: 6,
                //                 render: function(data, type, full, meta) {
                //                     var status = {
                //                         1: {'title': 'Pending', 'class': 'label-light-primary'},
                //                         2: {'title': 'Delivered', 'class': ' label-light-danger'},
                //                         3: {'title': 'Canceled', 'class': ' label-light-primary'},
                //                         4: {'title': 'Success', 'class': ' label-light-success'},
                //                         5: {'title': 'Info', 'class': ' label-light-info'},
                //                         6: {'title': 'Danger', 'class': ' label-light-danger'},
                //                         7: {'title': 'Warning', 'class': ' label-light-warning'},
                //                     };
                //                     if (typeof status[data] === 'undefined') {
                //                         return data;
                //                     }
                //                     return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                //                 },
                //             },
                //             {
                //                 targets: 7,
                //                 render: function(data, type, full, meta) {
                //                     var status = {
                //                         1: {'title': 'Online', 'state': 'danger'},
                //                         2: {'title': 'Retail', 'state': 'primary'},
                //                         3: {'title': 'Direct', 'state': 'success'},
                //                     };
                //                     if (typeof status[data] === 'undefined') {
                //                         return data;
                //                     }
                //                     return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                //                         '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                //                 },
                //             },
                //         ],
                //     });

                //     $('#export_print').on('click', function(e) {
                //         e.preventDefault();
                //         table.button(0).trigger();
                //     });

                //     $('#export_copy').on('click', function(e) {
                //         e.preventDefault();
                //         table.button(1).trigger();
                //     });

                //     $('#export_excel').on('click', function(e) {
                //         e.preventDefault();
                //         table.button(2).trigger();
                //     });

                //     $('#export_csv').on('click', function(e) {
                //         e.preventDefault();
                //         table.button(3).trigger();
                //     });

                //     $('#export_pdf').on('click', function(e) {
                //         e.preventDefault();
                //         table.button(4).trigger();
                //     });

                // };

                return {

                    //main function to initiate the module
                    init: function() {
                        initTable1();
                        // initTable2();
                    },

                };

            }();

			jQuery(document).ready(function() {	
                KTBootstrapDatepicker.init();
                // KTDatatableDataLocalDemo.init();
                KTDatatablesExtensionButtons.init();
			});
        </script>
        
	</body>
	<!--end::Body-->
</html>