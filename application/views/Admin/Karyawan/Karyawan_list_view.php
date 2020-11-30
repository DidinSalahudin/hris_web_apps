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
                                            <h3 class="card-label">Daftar Karyawan
                                            <!-- <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span></h3> -->
                                        </div>
                                        <div class="card-toolbar">
                                            <!--begin::Dropdown-->
                                            <div class="dropdown dropdown-inline mr-2">
                                                <a href="<?php echo base_url(); ?>karyawan/download_daftar_karyawan" class="btn btn-light-primary font-weight-bolder">
                                                    <span class="svg-icon svg-icon-md">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    Download Excel
                                                </a>
                                            </div>
                                            <!--end::Dropdown-->
                                            <!--begin::Button-->
                                            <a href="<?php echo base_url(); ?>karyawan/tambah_karyawan" class="btn btn-primary font-weight-bolder">
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
                                                Tambah Karyawan
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
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                                <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="d-flex align-items-center">
                                                                <label class="mr-3 mb-0 d-none d-md-block">Departmen:</label>
                                                                <select class="form-control" id="kt_datatable_search_status">
                                                                    <option value="">All</option>
                                                                    <?php foreach ($this->db->query("SELECT * FROM master_department WHERE master_department_status IN (1)")->result_array() as $value) { ?>
                                                                        <option value="<?php echo $value['master_department_name'] ?>"><?php echo $value['master_department_name'] ?></option>
                                                                    <?php } ?>
                                                                </select>
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

        <!-- Modal-->
        <!-- <div class="modal fade" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div data-scroll="true" data-height="300">
                            asdasd
                        <div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal fade" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <input type="hidden" name="id_karyawan" id="setel_password_id_karyawan">
                        <h5 class="modal-title">Apakah Anda Yakin?</h5>
                        <small>Akan Mensetel Ulang Password</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="btn_setel_password">Ya</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--begin::Scrolltop-->
        <?php $this->load->view('Include/Scrolltop'); ?>
        <!--end::Scrolltop-->        
        
        <?php $this->load->view('Include/Js'); ?>
        
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/widgets.js"></script>
		<script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/custom/profile/profile.js"></script>
        <!--end::Page Scripts-->
        
        <script>
            function getData() {
                return new Promise((resolve) => {
                    $.ajax({    
                        type: "GET",
                        url: "<?php echo base_url('karyawan/karyawan_ambil_data'); ?>",             
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
                    console.log(listDATA);
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
                            field: 'employee_first_name',
                            title: 'Nama Depan',
                        }, {
                            field: 'employee_last_name',
                            title: 'Nama Belakang',
                        }, {
                            field: 'employee_email',
                            title: 'Email',
                        }, {
                            field: 'employee_department_id',
                            title: 'Departemen',
                        }, {
                            field: 'employee_job_position',
                            title: 'Posisi Pekerjaan',
                        }, {
                            field: 'employee_job_level',
                            title: 'Level Pekerjaan',
                        }, {
                            field: 'employee_employment_status',
                            title: 'Status Pekerjaan',
                        }, {
                            field: 'employee_branch_name',
                            title: 'Lokasi Pekerjaan',
                        }, {
                            field: 'Actions',
                            title: 'Aksi',
                            sortable: false,
                            width: 125,
                            overflow: 'visible',
                            autoHide: false,
                            template: function(row) {
                                return '\
                                        <a href="javascript:;" onclick="edit('+row.employee_id+')" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit detail">\
                                            <i class="flaticon2-pen"></i>\
                                        </a>\
                                        <a href="javascript:;" onclick="resset_password('+row.employee_id+')" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit detail">\
                                            <i class="flaticon2-gear"></i>\
                                        </a>\
                                    ';
                            },
                        }],
                    });

                    $('#kt_datatable_search_status').on('change', function() {
                        datatable.search($(this).val().toLowerCase(), 'employee_department_id');
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

            function edit(params) {
                // alert(params);
                window.location.href='<?php echo base_url()?>karyawan/edit_karyawan/'+params;
            }

            $('#btn_setel_password').on('click', function() {
                $('#cover-spin').show(0);
                var paramId = $('#setel_password_id_karyawan').val();
                $.ajax({
                    url : "<?php echo base_url(); ?>karyawan/setel_ulang_password/"+paramId,
                    type: "POST",
                    data: {id: paramId},
                    processData: false,
                    contentType: false,
                    success: function(data, textStatus, jqXHR){
                        console.log(data);
                        if(data.status == 'TRUE'){ 
                            $('#cover-spin').hide(0);
                            Swal.fire("Success", "Setel Password Berhasil", "success");
                            setTimeout(function() {
                                location.reload();
                                // location = '<?php echo base_url(); ?>karyawan'; 
                            }, 2000);

                        } else {
                            $('#cover-spin').hide(0);
                            Swal.fire("Error", "Setel Password Gagal", "error");

                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#cover-spin').hide(0);
                        Swal.fire("Error", "Setel Password Gagal", "error");
                    }
                });
            })

            function resset_password(params) {
                $('#exampleModalSizeSm').modal('show');
                $('#setel_password_id_karyawan').val(params);
                // Swal.fire({
                //     title: "Apakah Anda Yakin?",
                //     text: "Akan Mensetel Ulang Password",
                //     icon: "warning",
                //     showCancelButton: true,
                //     confirmButtonText: "Ya, Reset"
                // }).then(function(result) {
                //     if (result.value) {
                //         // alert('test');
                        $.ajax({
                            url : "<?php echo base_url(); ?>karyawan/setel_ulang_password/"+params,
                            type: "POST",
                            data: postData,
                            processData: false,
                            contentType: false,
                            success: function(data, textStatus, jqXHR){
                                console.log(data);
                                if(data.status == 'TRUE'){ 

                                    Swal.fire("Success", "Setel Password Berhasil", "success");
                                    setTimeout(function() {
                                        location.reload();
                                        // location = '<?php echo base_url(); ?>karyawan'; 
                                    }, 2000);

                                } else {

                                    Swal.fire("Error", "Setel Password Gagal", "error");

                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                Swal.fire("Error", "Setel Password Gagal", "error");
                            }
                        });
                //     }
                // });
                
            }
        </script>
	</body>
	<!--end::Body-->
</html>