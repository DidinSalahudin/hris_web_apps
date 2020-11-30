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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">My Info</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Time Management</a>
											<!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Time Off</a>
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
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card card-custom gutter-b example example-compact">
                                            <div class="card-body">
                                                <div class="col-12">
                                                    <ul class="navi navi-hover navi-active navi-accent">
                                                        <li class="navi-item">
                                                            <a class="navi-link <?php echo $request_active; ?>" href="<?php echo base_url(); ?>pengajuan/cuti/req">
                                                                <span class="navi-icon"><i class="flaticon2-analytics"></i></span>
                                                                <span class="navi-text">Pengajuan Cuti</span>
                                                                <!-- <span class="label label-light-danger font-weight-bold label-inline">new</span> -->
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a class="navi-link <?php echo $history_active; ?>" href="<?php echo base_url(); ?>pengajuan/cuti/riwayat">
                                                                <span class="navi-icon"><i class="flaticon2-pie-chart-2"></i></span>
                                                                <span class="navi-text">Riwayat</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card card-custom gutter-b example example-compact">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3><?php echo $title_table; ?></h3>
                                                        <!--begin: Datatable-->
														<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
														<!--end: Datatable-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Form-->
                                        </div>                                        
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

        <!-- Modal Approve -->
        <div class="modal fade" id="modal-approve" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-approve">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <input type="hidden" name="id_request_approve" id="id_request_approve" class="form-control">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Comment</label>
                                <textarea class="form-control" name="comment_approve" id="comment_approve" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-approve">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Reject -->
        <div class="modal fade" id="modal-reject" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-reject">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <input type="hidden" name="id_request_reject" id="id_request_reject" class="form-control">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Comment</label>
                                <textarea class="form-control" name="comment_reject" id="comment_reject" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-reject">Submit</button>
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

        <script>
            function approve(id) {
                $('#modal-approve').modal('show');
                $('#id_request_approve').val(id);
            }

            function reject(id) {
                $('#modal-reject').modal('show');
                $('#id_request_reject').val(id);
            }

            $('#btn-approve').click(function (e) {
                e.preventDefault();
                var btn     = $(this);
                var form    = $(this).closest('form');

                if ($('#comment_approve').val() != '') {
                    var postData = new FormData(this.form);                        
                    $.ajax({
                        url : "<?php echo base_url('pengajuan/cuti_disetujui'); ?>",
                        type: "POST",
                        data: postData,
                        processData: false,
                        contentType: false,
                        success: function(data, textStatus, jqXHR){
                            console.log(data);
                            if(data.status == 'TRUE'){ 

                                Swal.fire("Success", "Approve Successfully", "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);

                            } else {

                                Swal.fire("Error", "Approve Failed", "error");

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            Swal.fire("Error", "Approve Failed", "error");
                        }
                    });
                } else {
                    Swal.fire("Error", "Comment Is Not Empty!", "error");
                }
            });

            $('#btn-reject').click(function (e) {
                e.preventDefault();
                var btn     = $(this);
                var form    = $(this).closest('form');

                if ($('#comment_reject').val() != '') {
                    var postData = new FormData(this.form);                        
                    $.ajax({
                        url : "<?php echo base_url('pengajuan/cuti_ditolak'); ?>",
                        type: "POST",
                        data: postData,
                        processData: false,
                        contentType: false,
                        success: function(data, textStatus, jqXHR){

                            if(data.status == 'TRUE'){ 

                                Swal.fire("Success", "Reject Successfully", "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);

                            } else {

                                Swal.fire("Error", "Reject Failed", "error");

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            Swal.fire("Error", "Reject Failed", "error");
                        }
                    });
                } else {
                    Swal.fire("Error", "Comment Is Not Empty!", "error");
                }
            });

			function getData() {
                return new Promise((resolve) => {
                    $.ajax({    
                        type: "GET",
                        url: "<?php echo base_url('pengajuan/ambil_data_pengajuan_cuti/'); ?><?php echo $status; ?>",             
                        dataType: "JSON",   
                        success: function(response){                    
                               console.log(response);     
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

                    var status_timeoff = '<?php echo $status; ?>';

                    if (status_timeoff == 0) {
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
                                field: 'CreateDate',
                                title: 'Tanggal Dibuat',
                            }, {
                                field: 'EmployeeID',
                                title: 'Karyawan ID',
                            }, {
                                field: 'EmployeeName',
                                title: 'Nama Karyawan',
                            }, {
                                field: 'Type',
                                width: 50,
                                title: 'Jenis',
                            }, {
                                field: 'StartDate',
                                title: 'Waktu Mulai',
                            }, {
                                field: 'StartEnd',
                                title: 'Waktu Selesai',
                            }, {
                                field: 'Reason',
                                title: 'Alasan',
                            }, {
                                field: 'File',
                                title: 'File',
                            }, {
                                field: 'Actions',
                                title: 'Actions',
                                sortable: false,
                                width: 150,
                                overflow: 'visible',
                                autoHide: false,
                                template: function(row) {
                                    return '\
                                            <a href="javascript:;" onclick="approve('+row.RecordID+')" class="btn btn-sm btn-primary" title="Approve">\
                                                Approve\
                                            </a>\
                                            <a href="javascript:;" onclick="reject('+row.RecordID+')" class="btn btn-sm btn-danger" title="Reject">\
                                                Reject\
                                            </a>\
                                        ';
                                },
                            }],
                        });
                    } else {
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
                                field: 'CreateDate',
                                title: 'Create Date',
                            }, {
                                field: 'EmployeeID',
                                title: 'Employee ID',
                            }, {
                                field: 'EmployeeName',
                                title: 'Employee Name',
                            }, {
                                field: 'Type',
                                width: 50,
                                title: 'Type',
                            }, {
                                field: 'StartDate',
                                title: 'Start Date',
                            }, {
                                field: 'StartEnd',
                                title: 'Start End',
                            }, {
                                field: 'Reason',
                                title: 'Reason',
                            }, {
                                field: 'ApproveBy',
                                title: 'Approve By',
                            }, {
                                field: 'ApproveDate',
                                title: 'Approve Date',
                            }, {
                                field: 'ApproveComment',
                                title: 'Comment',
                            }, {
                                field: 'Status',
                                title: 'Status',
                                // callback function support for column rendering
                                template: function(row) {
                                    var status = {
                                        2: {
                                            'title': 'APPROVE',
                                            'class': ' label-light-success'
                                        },
                                        3: {
                                            'title': 'REJECT',
                                            'class': ' label-light-danger'
                                        },
                                        
                                    };
                                    return '<span class="label font-weight-bold label-lg ' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                                },
                            }],
                        });
                    }

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

			jQuery(document).ready(function() {	
				KTDatatableDataLocalDemo.init();
			});
        </script>
        
	</body>
	<!--end::Body-->
</html>