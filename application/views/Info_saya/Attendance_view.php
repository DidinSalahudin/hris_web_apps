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
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Informasi Kehadiran
                                            <!-- <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span></h3> -->
                                        </div>
                                        <div class="card-toolbar">
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
                                            <a href="<?php echo base_url(); ?>info_saya/lihat_kehadiran" class="btn btn-primary font-weight-bolder">
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
                                                Lihat Kehadiran
                                            </a>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!--begin: Search Form-->
                                        <!--begin::Search Form-->
                                        <div class="mb-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6 my-2 my-md-0">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control" placeholder="Pencarian..." id="kt_datatable_search_query" />
                                                                <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Search Form-->
                                        <!--end: Search Form-->
                                        <!--begin: Datatable-->
                                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
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

            function getData() {
                return new Promise((resolve) => {
                    $.ajax({    
                        type: "GET",
                        url: "<?php echo base_url('info_saya/ambil_pengajuan_kehadiran'); ?>",             
                        dataType: "JSON",   
                        success: function(response){                    
                            //    console.log(response);     
                            resolve(response)        
                        }
                    });
                });
            }

            var KTDatatableDataLocalDemo = function() {
                // Private functions

                // demo initializer
                var demo = async function() {
                    const listDATA = await getData();
                    var dataJSONArray = JSON.parse(JSON.stringify(listDATA));

                    var datatable = $('#kt_datatable').KTDatatable({
                        // datasource definition
                        data: {
                            type: 'local',
                            source: dataJSONArray,
                            pageSize: 10,
                        },

                        // layout definition
                        layout: {
                            scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                            // height: 450, // datatable's body's fixed height
                            footer: false, // display/hide footer
                        },

                        // column sorting
                        sortable: true,

                        pagination: true,

                        search: {
                            input: $('#kt_datatable_search_query'),
                            key: 'generalSearch'
                        },

                        // columns definition
                        columns: [{
                            field: 'atendance_request_create_date',
                            title: 'Waktu Dibuat',
                            width: 120,
                        }, {
                            field: 'atendance_request_date',
                            title: 'Waktu Pengajuan',
                        }, {
                            field: 'atendance_request_check_in',
                            title: 'Jam Masuk',
                        }, {
                            field: 'atendance_request_check_out',
                            title: 'Jam Keluar',
                        }, {
                            field: 'atendance_request_status',
                            title: 'Status',
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'PENDING',
                                        'class': ' label-light-info'
                                    },
                                    2: {
                                        'title': 'APPROVE',
                                        'class': ' label-light-success'
                                    },
                                    3: {
                                        'title': 'REJECT',
                                        'class': ' label-light-danger'
                                    },
                                };
                                return '<span class="label font-weight-bold label-lg ' + status[row.atendance_request_status].class + ' label-inline">' + status[row.atendance_request_status].title + '</span>';
                            },
                        }],
                    });

                    $('#kt_datatable_search_status').on('change', function() {
                        datatable.search($(this).val().toLowerCase(), 'Status');
                    });

                    $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
                };

                return {
                    // Public functions
                    init: function() {
                        // init dmeo
                        demo();
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
                KTDatatableDataLocalDemo.init();
            });
        </script>
	</body>
	<!--end::Body-->
</html>