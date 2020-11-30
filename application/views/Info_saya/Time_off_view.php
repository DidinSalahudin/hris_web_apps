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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Cuti</a>
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
                                    <div class="col-md-12">
                                        <div class="card card-custom gutter-b example example-compact">
                                            <!--begin::Form-->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <h1 style="font-size: 40px;"><?php echo $employee_time_off_balance; ?>d</h1>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
														<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalLong">
															Pengajuan Cuti
														</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3>Riwayat</h3>
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

		<!-- Modal-->
		<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Pengajuan Cuti</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<form method="POST" action="" id="form-add">
                        <!-- <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" /> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleSelect1">Jenis Cuti</label>
                                <select class="form-control" rel="Jenis Cuti" name="time_off_type" id="time_off_type">
                                    <option value="">Pilih Jenis Cuti</option>
									<?php foreach ($this->db->query("SELECT * FROM master_time_off WHERE master_time_off_status IN (1)")->result_array() as $rowMaster) { ?>
                                    	<option value="<?php echo $rowMaster['master_time_off_id']; ?>"><?php echo $rowMaster['master_time_off_name']; ?></option>
									<?php } ?>
                                </select>
                            </div>
							<div class="form-group">
								<label>Waktu Mulai</label>
								<div class="input-group date">
									<input type="text" rel="Waktu Mulai" class="form-control form-control-sm" readonly="readonly" value="" name="start_date" id="start_date" />
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="la la-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Waktu Selesai</label>
								<div class="input-group date">
									<input type="text" rel="Waktu Selesai" class="form-control form-control-sm" readonly="readonly" value="" name="end_date" id="end_date" />
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="la la-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Alasan</label>
								<textarea class="form-control form-control-sm" rel="Alasan" name="reason" id="reason" rows="3"></textarea>
							</div>
							<div class="form-group">
								<div class="custom-file">
									<input type="file" name="file_upload" rel="File" class="custom-file-input" id="file_upload">
									<label class="custom-file-label" for="customFile">Pilih File</label>
								</div>
							</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" id="btn-cancel" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-save">Ajukan</button>
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

			$('#btn-save').on('click', function(e) {
				e.preventDefault();
				var statusValidation = 0;
				$('#form-add *').filter(':input').each(function(){                    
                    if ($(this)[0].value == '') {
                        if ($(this)[0].id == "btn-save" || $(this)[0].id == "btn-cancel") { 
                        } else {
                            statusValidation = 1;
                            $('#'+$(this)[0].id).focus();
							var id = $(this)[0].id;
                            var text = id.split("_").join(" ");
                            Swal.fire("Error!", $(this).attr('rel')+" Tidak Boleh Kosong!", "error");
                            return false;

                        }
                    }
                    console.log($(this)[0].id+' -- '+$(this)[0].value+' -- '+$(this)[0].name);
                });
				if (statusValidation == 0) {
                    var postData = new FormData(this.form);                        
                    $.ajax({
                        url : "<?php echo base_url('info_saya/pengajuan_cuti'); ?>",
                        type: "POST",
                        data: postData,
                        processData: false,
                        contentType: false,
                        success: function(data, textStatus, jqXHR){
                            console.log(data.message);
                            if (data.status == 'TRUE'){ 

                                Swal.fire("Berhasil", "Pengajuan Cuti Berhasil", "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);

                            } else {

                                Swal.fire("Terjadi Kesalahan", data.message, "error");

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            Swal.fire("Terjadi Kesalahan", "Pengajuan Cuti Gagal", "error");
                        }
                    });
                } else {
                    // Swal.fire("Error!", "Please Check Again!", "error");
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
                    $('#start_date').datepicker({
                        rtl: KTUtil.isRTL(),
                        todayBtn: "linked",
                        clearBtn: true,
                        todayHighlight: true,
                        templates: arrows
                    });

                    $('#end_date').datepicker({
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

			function getData() {
                return new Promise((resolve) => {
                    $.ajax({    
                        type: "GET",
                        url: "<?php echo base_url('info_saya/ambil_pengajuan_cuti'); ?>",             
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
                            field: 'CreateDate',
                            title: 'Create Date',
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
                            field: 'Status',
                            title: 'Status',
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'PENDING',
                                        'class': ' label-light-warning'
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
                                return '<span class="label font-weight-bold label-lg ' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
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

			jQuery(document).ready(function() {	
                KTBootstrapDatepicker.init();
				KTDatatableDataLocalDemo.init();
			});
        </script>
        
	</body>
	<!--end::Body-->
</html>