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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Pengaturan</a>
											<!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Daftar Admin</a>
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
                                            <h3 class="card-label">Daftar Admin
                                            <!-- <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span></h3> -->
                                        </div>
                                        <div class="card-toolbar">
                                            
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
                                                Tambah Data
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
                                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                                <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 my-2 my-md-0">
                                                            <div class="d-flex align-items-center">
                                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                                <select class="form-control" id="kt_datatable_search_status">
                                                                    <option value="">All</option>
                                                                    <option value="1">Aktif</option>
                                                                    <option value="2">Tidak Aktif</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                                    <!-- <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a> -->
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
        <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-add-admin">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Admin</label>
                                <input type="text" name="nama_admin" id="add_nama_admin" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Nama Pengguna Admin</label>
                                <input type="text" name="nama_pengguna_admin" id="add_nama_pengguna_admin" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="add_email" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="add_password" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="kondirmasi_password" id="add_kondirmasi_password" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Status</label>
                                <select class="form-control form-control-sm" name="admin_status" id="add_admin_status">
                                    <option value="">Pilih Status</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-add-save">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-add-admin">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <input type="hidden" name="edit_admin_id" id="edit_admin_id" class="form-control">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Admin</label>
                                <input type="text" name="nama_admin" id="edit_nama_admin" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Nama Pengguna Admin</label>
                                <input type="text" name="nama_pengguna_admin" id="edit_nama_pengguna_admin" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="edit_email" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Status</label>
                                <select class="form-control form-control-sm" name="admin_status" id="edit_admin_status">
                                    <option value="">Pilih Status</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-edit-save">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal_ganti_password" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form-add-admin">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <input type="hidden" name="edit_admin_id" id="edit_admin_ganti_pass_id" class="form-control">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="ganti_pass_password" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="kondirmasi_password" id="ganti_pass_kondirmasi_password" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn-ganti-pass-save">Simpan</button>
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
            $('#btn-add-save').click(function (e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var add_nama_admin          = $('#add_nama_admin').val();
                var add_nama_pengguna_admin = $('#add_nama_pengguna_admin').val();
                var add_email               = $('#add_email').val();
                var add_password            = $('#add_password').val();
                var add_kondirmasi_password = $('#add_kondirmasi_password').val();
                var add_admin_status        = $('#add_admin_status').val();

                var statusValidation = 0;

                if (add_nama_admin != '') {
                    if (add_nama_pengguna_admin != '') {
                        if (add_email != '') {
                            if (ValidateEmail(add_email)) {
                                if (add_password != '') {
                                    var validPassword = validatePassword(add_password);
                                    // console.log(validPassword);
                                    if (validPassword == true) {
                                        if (add_kondirmasi_password != '') {
                                            if (add_password == add_kondirmasi_password) {
                                                if (add_admin_status != '') {
                                                    var postData = new FormData(this.form); 
                                                    $.ajax({
                                                        url : "<?php echo base_url('pengaturan/admin_add_data'); ?>",
                                                        type: "POST",
                                                        data: postData,
                                                        processData: false,
                                                        contentType: false,
                                                        success: function(data, textStatus, jqXHR){

                                                            if(data.status == 'TRUE'){ 
                                                                $('#cover-spin').hide(0);
                                                                Swal.fire("Success", "Tambah Admin Berhasil", "success");
                                                                setTimeout(function() {
                                                                    location.reload();
                                                                }, 2000);

                                                            } else {
                                                                $('#cover-spin').hide(0);
                                                                Swal.fire("Gagal", "Tambah Admin Gagal", "error");

                                                            }
                                                        },
                                                        error: function (jqXHR, textStatus, errorThrown)
                                                        {
                                                            $('#cover-spin').hide(0);
                                                            Swal.fire("Gagal", "Tambah Admin Gagal", "error");
                                                        }
                                                    });
                                                } else {
                                                    $('#cover-spin').hide(0);
                                                    Swal.fire("Gagal!", "Status Tidak Boleh Kosong!", "error");
                                                }
                                            } else {
                                                $('#cover-spin').hide(0);
                                                Swal.fire("Gagal!", "Password dan Konfirmasi Password Tidak Sama!", "error");
                                            }
                                        } else {
                                            $('#cover-spin').hide(0);
                                            Swal.fire("Gagal!", "Konfirmasi Password Tidak Boleh Kosong!", "error");
                                        }
                                    } else {
                                        $('#cover-spin').hide(0);
                                        Swal.fire("Gagal!", validPassword, "error");
                                    }
                                } else {
                                    $('#cover-spin').hide(0);
                                    Swal.fire("Gagal!", "Password Tidak Boleh Kosong!", "error");
                                }
                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal!", "Format Email Anda Salah, Periksa Kembali Email Anda!", "error");
                            }
                        } else {
                            $('#cover-spin').hide(0);
                            Swal.fire("Gagal!", "Email Tidak Boleh Kosong!", "error");
                        }
                    } else {
                        $('#cover-spin').hide(0);
                        Swal.fire("Gagal!", "Nama Pengguna Tidak Boleh Kosong!", "error");
                    }
                } else {
                    $('#cover-spin').hide(0);
                    Swal.fire("Gagal!", "Nama Admin Tidak Boleh Kosong!", "error");
                }

            });

            function edit(id) {
                $.ajax({    
                    type: "GET",
                    url: "<?php echo base_url('pengaturan/admin_get_edit_data/')?>" + id,             
                    dataType: "JSON",   
                    success: function(response){     
                        console.log(response);               
                        $('#modal_edit').modal('show');
                        $('#edit_admin_id').val(response[0].admin_id);
                        $('#edit_nama_admin').val(response[0].admin_name);
                        $('#edit_nama_pengguna_admin').val(response[0].admin_username);
                        $('#edit_email').val(response[0].admin_email);  
                        $('#edit_admin_status').val(response[0].admin_status); 

                    }
                });
            }

            function ganti_password(id) {
                $('#modal_ganti_password').modal('show');
                $('#edit_admin_ganti_pass_id').val(id);
            }

            $('#btn-edit-save').click(function (e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var edit_nama_admin          = $('#edit_nama_admin').val();
                var edit_nama_pengguna_admin = $('#edit_nama_pengguna_admin').val();
                var edit_email               = $('#edit_email').val();
                var edit_admin_status        = $('#edit_admin_status').val();
                var edit_admin_id            = $('#edit_admin_id').val();

                var statusValidation = 0;

                if (edit_nama_admin != '') {
                    if (edit_nama_pengguna_admin != '') {
                        if (edit_email != '') {
                            if (ValidateEmail(edit_email)) {
                                if (edit_admin_status != '') {
                                    var postData = new FormData(this.form); 
                                    $.ajax({
                                        url : "<?php echo base_url('pengaturan/admin_edit_data'); ?>",
                                        type: "POST",
                                        data: postData,
                                        processData: false,
                                        contentType: false,
                                        success: function(data, textStatus, jqXHR){

                                            if(data.status == 'TRUE'){ 
                                                $('#cover-spin').hide(0);
                                                Swal.fire("Success", "Update Admin Berhasil", "success");
                                                setTimeout(function() {
                                                    location.reload();
                                                }, 2000);

                                            } else {
                                                $('#cover-spin').hide(0);
                                                Swal.fire("Gagal", "Update Admin Gagal", "error");

                                            }
                                        },
                                        error: function (jqXHR, textStatus, errorThrown)
                                        {
                                            $('#cover-spin').hide(0);
                                            Swal.fire("Gagal", "Update Admin Gagal", "error");
                                        }
                                    });
                                } else {
                                    $('#cover-spin').hide(0);
                                    Swal.fire("Gagal!", "Status Tidak Boleh Kosong!", "error");
                                }
                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal!", "Format Email Anda Salah, Periksa Kembali Email Anda!", "error");
                            }
                        } else {
                            $('#cover-spin').hide(0);
                            Swal.fire("Gagal!", "Email Tidak Boleh Kosong!", "error");
                        }
                    } else {
                        $('#cover-spin').hide(0);
                        Swal.fire("Gagal!", "Nama Pengguna Tidak Boleh Kosong!", "error");
                    }
                } else {
                    $('#cover-spin').hide(0);
                    Swal.fire("Gagal!", "Nama Admin Tidak Boleh Kosong!", "error");
                }

            });

            $('#btn-ganti-pass-save').click(function (e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var add_password            = $('#ganti_pass_password').val();
                var add_kondirmasi_password = $('#ganti_pass_kondirmasi_password').val();

                var statusValidation = 0;
                if (add_password != '') {
                    var validPassword = validatePassword(add_password);
                    // console.log(validPassword);
                    if (validPassword == true) {
                        if (add_kondirmasi_password != '') {
                            if (add_password == add_kondirmasi_password) {
                                var postData = new FormData(this.form); 
                                $.ajax({
                                    url : "<?php echo base_url('pengaturan/admin_ganti_pass_data'); ?>",
                                    type: "POST",
                                    data: postData,
                                    processData: false,
                                    contentType: false,
                                    success: function(data, textStatus, jqXHR){

                                        if(data.status == 'TRUE'){ 
                                            $('#cover-spin').hide(0);
                                            Swal.fire("Success", "Ganti Password Admin Berhasil", "success");
                                            setTimeout(function() {
                                                location.reload();
                                            }, 2000);

                                        } else {
                                            $('#cover-spin').hide(0);
                                            Swal.fire("Gagal", "Ganti Password Admin Gagal", "error");

                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        $('#cover-spin').hide(0);
                                        Swal.fire("Gagal", "Ganti Password Admin Gagal", "error");
                                    }
                                });
                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal!", "Password dan Konfirmasi Password Tidak Sama!", "error");
                            }
                        } else {
                            $('#cover-spin').hide(0);
                            Swal.fire("Gagal!", "Konfirmasi Password Tidak Boleh Kosong!", "error");
                        }
                    } else {
                        $('#cover-spin').hide(0);
                        Swal.fire("Gagal!", validPassword, "error");
                    }
                } else {
                    $('#cover-spin').hide(0);
                    Swal.fire("Gagal!", "Password Tidak Boleh Kosong!", "error");
                }
                            

            });
            

            function delete_data(id) {
                Swal.fire({
                    title: 'Apakah Kamu Yakin?',
                    text: "Akan Menghapus Data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!'
                }).then(function (result) {
                    if (result.value) {    
                        $('#cover-spin').show(0);                                        
                        $.ajax({
                            type: "GET",
                            url: "<?php echo base_url('pengaturan/admin_delete_data/')?>" + id,             
                            dataType: "JSON",   
                            success: function(data, textStatus, jqXHR){

                                if(data.status == 'TRUE'){ 
                                    $('#cover-spin').hide(0);
                                    Swal.fire(
                                        'Berhasil!',
                                        'Data Berhasil Dihapus.',
                                        'success'
                                    );
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);

                                } else {
                                    $('#cover-spin').hide(0);
                                    Swal.fire("Gagal", "Hapus departmen Gagal", "error");

                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal", "Hapus departmen Gagal", "error");
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        $('#cover-spin').hide(0);
                        Swal.fire(
                            'Dibatalkan',
                            'Hapus Dibatalkan',
                            'error'
                        )
                    }
                });
            }

            function getData() {
                return new Promise((resolve) => {
                    $.ajax({    
                        type: "GET",
                        url: "<?php echo base_url('pengaturan/admin_get_data'); ?>",             
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
                            field: 'admin_id',
                            title: '#',
                            sortable: false,
                            width: 20,
                            type: 'number',
                            selector: {
                                class: ''
                            },
                            textAlign: 'center',
                        }, {
                            field: 'admin_code',
                            title: 'Kode Admin',
                        }, {
                            field: 'admin_name',
                            title: 'Nama Admin',
                        }, {
                            field: 'admin_username',
                            title: 'Nama Pengguna',
                        }, {
                            field: 'admin_email',
                            title: 'Email',
                        }, {
                            field: 'admin_status',
                            title: 'Status',
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'Aktif',
                                        'class': ' label-light-success'
                                    },
                                    0: {
                                        'title': 'Tidak Aktif',
                                        'class': ' label-light-danger'
                                    },
                                };
                                return '<span class="label font-weight-bold label-lg ' + status[row.admin_status].class + ' label-inline">' + status[row.admin_status].title + '</span>';
                            },
                        }, {
                            field: 'Actions',
                            title: 'Aksi',
                            sortable: false,
                            width: 125,
                            overflow: 'visible',
                            autoHide: false,
                            template: function(row) {
                                return '\
                                        <a href="javascript:;" onclick="edit('+row.admin_id+')" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit detail">\
                                            <i class="icon text-dark-50 flaticon-edit-1"></i>\
                                        </a>\
                                         <a href="javascript:;" onclick="ganti_password('+row.admin_id+')" class="btn btn-sm btn-clean btn-icon mr-2" title="Ganti Password">\
                                            <i class="icon text-dark-50 flaticon-lock"></i>\
                                        </a>\
                                        <a href="javascript:;" onclick="delete_data('+row.admin_id+')" class="btn btn-sm btn-clean btn-icon" title="Hapus">\
                                            <i class="icon text-dark-50 flaticon2-trash"></i>\
                                        </a>\
                                    ';
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

            function ValidateEmail(email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(email)) {
                    return false;
                } else {
                    return true;
                }
            }

            function validatePassword(password) 
            {	
                var errorMsg = "";
                var space  = " ";
                //fieldname   = document.myform.password; 
                //fieldvalue  = fieldname.value; 
                //fieldlength = fieldvalue.length; 
                fieldvalue  = password; 
                fieldlength = fieldvalue.length; 
            
                if (fieldvalue.indexOf(space) > -1)
                {
                    errorMsg += "Password tidak boleh menggunakan spasi.<br>";
                }     
            
                if (!(fieldvalue.match(/\d/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 angka.<br>";
                }
            
                /*if (!(fieldvalue.match(/^[a-zA-Z]+/))) 
                {
                    errorMsg += "Strong passwords must start with at least one letter.<br>";
                }*/
            
                if (!(fieldvalue.match(/[A-Z]/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 huruf kapital.<br>";
                }

                if (!(fieldvalue.match(/[a-z]/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 atau lebih huruf kecil.<br>";
                }

                if (!(fieldvalue.match(/\W+/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 karakter spesial (#,@,%,!).<br>";
                }

                if (!(fieldlength >= 8)) 
                {
                    errorMsg += "Password minimal terdiri dari 8 karakter.<br>";
                }

                if (errorMsg != "")
                {
                    // msg = "__________________\n\n";
                    // msg += "Password Anda tidak memenuhi kriteria di bawah ini:\n";
                    // msg += "__________________\n";
                    // errorMsg += alert(msg + errorMsg + "\n\n");
                    //document.form1.new_frm.value="";
                    // document.form1.NewPassword.select();
                    return errorMsg;
                }
                
                return true;
            }

            jQuery(document).ready(function() {
                KTDatatableDataLocalDemo.init();
            });
        </script>
	</body>
	<!--end::Body-->
</html>