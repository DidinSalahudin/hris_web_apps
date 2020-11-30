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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Gaji</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Bonus</a>
											<!--end::Item-->
                                            <!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">THR</a>
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
                                            <h3 class="card-label">THR Karyawan</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST" id="form_jalankan_thr">
                                            <!--begin: Datatable-->
                                            <h4 class="mb-5">Periode THR : <?php echo date('d F Y', strtotime($waktu)); ?></h4>
                                            <table class="table table-separate table-head-custom table-checkable" id="tbl_bukan_modal">
                                                <thead>
                                                    <tr>
                                                        <th>Karyawan</th>
                                                        <th>Lama Bekerja</th>
                                                        <th>Total THR</th>
                                                        <th>Agama</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    <?php 
                                                        if ($list_payroll_bonus != '') {
                                                            foreach ($list_payroll_bonus->result_array() as $key => $value) {
                                                                if ($value['employee_religion'] == 1) {
                                                                    $agama = 'Kristen';
                                                                } else if ($value['employee_religion'] == 2) {
                                                                    $agama = 'Islam';
                                                                } else if ($value['employee_religion'] == 23) {
                                                                    $agama = 'Hindu';
                                                                } else {
                                                                    $agama = 'Budha';
                                                                }
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $value['employee_code']; ?> <br> <?php echo $value['employee_first_name']; ?> <?php echo $value['employee_first_name']; ?></td>
                                                                <td><?php echo $value['payroll_bonus_length_of_service']; ?> Bulan</td>
                                                                <td><input type="number" class="form-control form-control-sm" name="total_thr[<?php echo $value['payroll_bonus_id'] ?>]" value="<?php echo $value['payroll_bonus_amount']; ?>" ></td>
                                                                <td><?php echo $agama; ?></td>
                                                            </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->

                                            <div class="row mt-7">
                                                <div class="col-12 text-right">
                                                    <button class="btn btn-primary" id="btn_jalankan_thr">Simpan & Jalankan THR</button>
                                                </div>
                                            </div>
                                        </form>
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
        
        <div class="modal fade" id="modal_form" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Periode THR</h5>
                    </div>
                    <form action="" method="POST" id="form-data">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="exampleSelect1">Waktu THR</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control form-control-sm" rel="Tanggal Masuk" readonly="readonly" value="" name="waktu_thr" id="waktu_thr" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleSelect1">Masa Pajak</label>
                                    <input type="text" class="form-control form-control-sm" rel="Masa Pajak" name="masa_pajak" id="masa_pajak" readonly>
                                    <input type="hidden" class="form-control form-control-sm" name="masa_pajak_hidden" id="masa_pajak_hidden" readonly>
                                </div>
                            </div>
                                
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" name="check_id_all" id="check_id_all">&nbsp;
                                                <span></span>
                                            </label> 
                                        </th>
                                        <th>Kode Karyawan</th>
                                        <th>Nama Lengkap</th>
                                        <th>Agama</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_tbl_karyawan">
                                    <?php 
                                        foreach ($list_karyawan->result_array() as $key => $value) {
                                            if ($value['employee_religion'] == 1) {
                                                $agama = 'Kristen';
                                            } else if ($value['employee_religion'] == 2) {
                                                $agama = 'Islam';
                                            } else if ($value['employee_religion'] == 23) {
                                                $agama = 'Hindu';
                                            } else {
                                                $agama = 'Budha';
                                            }
                                            // $agama = ($value['employee_religion'] == 1) ? 'Kristen' : ($value['employee_religion'] == 2) ? 'Islam' : ($value['employee_religion'] == 3) ? 'Hindu' : 'Budha';
                                    ?>
                                        <tr>
                                            <td>
                                                <label class="checkbox checkbox-primary">
                                                    <input type="checkbox" name="check_id[<?php echo $value['employee_id']; ?>]" id="check_id">&nbsp;
                                                    <span></span>
                                                </label>    
                                            </td>
                                            <td><?php echo $value['employee_code']; ?></td>
                                            <td><?php echo $value['employee_first_name']; ?> <?php echo $value['employee_first_name']; ?></td>
                                            <td><?php echo $agama; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>             
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="modal-footer">
                            <a href ="javascript:history.back()" class="btn btn-light-primary font-weight-bold">Kembali</a>
                            <button type="button" class="btn btn-primary font-weight-bold" id="btn_cari">Cari</button>
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
            $('#btn_cari').click(function (e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var waktu_thr         = $('#waktu_thr').val();
                var masa_pajak        = $('#masa_pajak').val();
                var masa_pajak_hidden = $('#masa_pajak_hidden').val();

                var statusValidation = 0;

                if (waktu_thr != '') {
                    $('#tbody_tbl_karyawan').find("input[id^='check_id']").each(function(){
                        if ($(this).is(':checked')) {
                            statusValidation++;
                        }
                    });
                    if (statusValidation != 0) {
                        var postData = new FormData(this.form);                        
                        $.ajax({
                            url : "<?php echo base_url('gaji/thr_cek_data'); ?>",
                            type: "POST",
                            data: postData,
                            processData: false,
                            contentType: false,
                            success: function(data, textStatus, jqXHR){
                                console.log(data);
                                if(data.status == '1'){ 
                                    $('#cover-spin').hide(0);
                                    // Swal.fire("Success", "Tambah Komponen Penggajian Berhasil", "success");
                                    setTimeout(function() {
                                        window.location = "<?php echo base_url(); ?>gaji/thr?w="+btoa(waktu_thr);
                                    }, 2000);
    
                                } else {
                                    $('#cover-spin').hide(0);
                                    Swal.fire("Gagal", data.message, "error");
    
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal", "Ada kesalahan, silahkan cek kembali", "error");
                            }
                        });
                    } else {
                        $('#cover-spin').hide(0);
                        Swal.fire("Gagal!", "Anda Belum Memilih Karyawan", "error");
                    }
                } else {
                    $('#cover-spin').hide(0);
                    Swal.fire("Gagal!", "Waktu THR Tidak Boleh Kosong", "error");
                }

            });

            $('#btn_jalankan_thr').click(function (e) {
                e.preventDefault();
                // $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var postData = new FormData(this.form);
                
                Swal.fire({
                    title: 'Apakah Kamu Yakin?',
                    text: "Bonus THR akan di jalankan!",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Jalankan!'
                }).then(function (result) {
                    if (result.value) {    
                        $('#cover-spin').show(0);                                        
                        $.ajax({
                            url : "<?php echo base_url('gaji/thr_jalankan'); ?>",
                            type: "POST",
                            data: postData,
                            processData: false,
                            contentType: false,
                            success: function(data, textStatus, jqXHR){
                                console.log(data);
                                if(data.status == '1'){ 
                                    $('#cover-spin').hide(0);
                                    Swal.fire("Success",  data.message, "success");
                                    setTimeout(function() {
                                        window.location = "<?php echo base_url(); ?>gaji/thr";
                                    }, 2000);
                                } else {
                                    $('#cover-spin').hide(0);
                                    Swal.fire("Gagal", data.message, "error");
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal", "Ada kesalahan, silahkan cek kembali", "error");
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        $('#cover-spin').hide(0);
                        Swal.fire(
                            'Dibatalkan',
                            'Bonus THR Batal Dijalankan',
                            'error'
                        )
                    }
                });
            });

            $('#check_id_all').click(function() {
                if ($(this).is(':checked')) {
                    $('#tbody_tbl_karyawan').find("input[id^='check_id']").each(function(){    
                        $(this).prop('checked', true);
                    });        
                } else {
                    $('#tbody_tbl_karyawan').find("input[id^='check_id']").each(function(){ 
                        $(this).prop('checked', false);  
                    });                        
                }
            })

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
                    $('#waktu_thr').datepicker({
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

            var KTDatatablesBasicScrollable = function() {

                var initTable1 = function() {
                    var table = $('#tbl_modal');

                    // begin first table
                    table.DataTable({
                        scrollY: '50vh',
                        scrollX: true,
                        scrollCollapse: true,
                        columnDefs: [ ],
                    });
                };

                var initTable2 = function() {
                    var table = $('#tbl_bukan_modal');

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
                        initTable2();
                    },

                };

            }();

            $('#waktu_thr').on('change', function() {
                var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var valueWaktuTHR = $(this).val();
                var bulanWaktuTHR = valueWaktuTHR.split("/");
                var bulan = parseInt(bulanWaktuTHR[0]-1)
                // console.log(bulan);
                var waktuTHR = monthNames[bulan];

                $('#masa_pajak').val(waktuTHR);
                $('#masa_pajak_hidden').val(parseInt(bulanWaktuTHR[0]));
            });

            jQuery(document).ready(function() {	
                <?php if (!$_GET) { ?>
                    $('#modal_form').modal('show');
                <?php } else {} ?>

                KTBootstrapDatepicker.init();
                // KTDatatableHtmlTableDemo.init();
                KTDatatablesBasicScrollable.init();
            });
        </script>
        
	</body>
	<!--end::Body-->
</html>