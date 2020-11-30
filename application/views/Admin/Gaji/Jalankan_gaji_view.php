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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Jalankan Gaji</a>
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
                                <?php if ($status == 1) { ?>
                                    <div class="card card-custom">
                                        <div class="card-body text-center">
                                            <h3 class="card-label"><?php echo $pesan; ?></h3>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="card card-custom">
                                        <div class="card-header py-3">
                                            <div class="card-title">
                                                <h3 class="card-label">Jalankan Gaji</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <button type="button" id="proses_jalankan_gaji" class="btn btn-primary font-weight-bolder">
                                                    <i class="icon text-light flaticon2-rocket"></i>
                                                    Jalankan Gaji
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Karyawan</th>
                                                        <th>Informasi Karyawan</th>
                                                        <!-- <th>Departemen</th>
                                                        <th>Posisi Pekerjaan</th>
                                                        <th>Level Pekerjaan</th> -->
                                                        <th>Kehadiran</th>
                                                        <th>Gaji Pokok</th>
                                                        <th>Tunjangan</th>
                                                        <th>Pengurangan</th>
                                                        <th>Manfaat</th>
                                                        <th>Gaji Bersih</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach ($data_array as $value) { 
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $value['employee_code']; ?></td>
                                                            <td><p style="font-size: 16px; font-weight: bold; margin-bottom: 0px;"><?php echo $value['employee_first_name']; ?> <?php echo $value['employee_last_name']; ?></p><?php echo $value['employee_department_id']; ?><br><?php echo $value['employee_job_position']; ?><br><?php echo $value['employee_job_level']; ?></td>
                                                            <!-- <td></td>
                                                            <td></td>
                                                            <td></td> -->
                                                            <td><?php echo $value['absen']; ?></td>
                                                            <td>Rp. <?php echo number_format($value['payroll']['employee_payroll_basic_salary'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['payroll']['employee_payroll_detail'][0]['total'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['payroll']['employee_payroll_detail'][1]['total'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['payroll']['employee_payroll_detail'][2]['total'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['totalTakeHomePay'],0,',','.'); ?></td>
                                                            <td><Button class="btn btn-primary font-weight-bolder" onclick="edit(<?php echo $value['employee_id']; ?>)">Ubah</Button></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                <?php } ?>
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
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Gaji</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form_ubah_gaji" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <input type="hidden" name="employee_id" value="" id="ubah_gaji_id_karyawan" />
                        <div class="modal-body" id="modal_body_ubah_gaji"></div>
                        <!-- <div class="modal-body" id="modal_body_take_home_pay"></div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" id="btn_batal_gaji" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" id="btn_ubah_gaji">Ubah</button>
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

            function edit(params) {
                // alert(params);
                $.ajax({    
                    type: "GET",
                    url: "<?php echo base_url('gaji/tampil_detail_jalankan_gaji/')?>" + params,             
                    dataType: "JSON",   
                    success: function(response){     
                        console.log(response);               
                        $('#exampleModalLong').modal('show');
                        $("#modal_body_ubah_gaji").html('');
                        $('#ubah_gaji_id_karyawan').val(params);
                        var data = response.dataArray.payroll;
                        var append = '';
                        // var tr = '';
                        data.forEach(element => {
                            var tr = '';
                            element.detail.forEach(element_detail => {
                                tr += '<tr>\
                                            <td>'+element_detail.employee_payroll_detail_name+'</td>\
                                            <td><input type="number" rel="Nilai '+element_detail.employee_payroll_detail_name+'" name="P_Amount['+element_detail.employee_payroll_detail_id+']" id="P_Amount['+element_detail.employee_payroll_detail_id+']" value="'+element_detail.employee_payroll_detail_amount+'" class="form-control form-control-sm" placeholder=""></td>\
                                        </tr>';
                            });
                            
                            append += '<h3>'+element.komponen+'</h3>\
                                            <table class="table table-bordered table-checkable">\
                                                <thead>\
                                                    <tr>\
                                                        <th>Name</th>\
                                                        <th>Amount</th>\
                                                    </tr>\
                                                </thead>\
                                                <tbody>\
                                                    '+tr+'\
                                                </tbody>\
                                            </table>';
                        });
                        $("#modal_body_ubah_gaji").append(append);


                        // var tr_thp = '<table style="width:100%;">\
                        //                 <tr style="font-size: 16px;">\
                        //                     <td>Gaji Bersih</td>\
                        //                     <td>Rp. 123</td>\
                        //                 </tr>\
                        //               </table>';
                        // $("#modal_body_take_home_pay").append(tr_thp);
                        
                    }
                });
            }

            $('#btn_ubah_gaji').click(function(e) {
                e.preventDefault();

                var statusValidation = 0;
                
                $('#form_ubah_gaji *').filter(':input').each(function(){                    
                    if ($(this)[0].value == '') {
                        if ($(this)[0].id == "btn_batal_gaji" || $(this)[0].id == "btn_ubah_gaji" || $(this)[0].id == "csrf_token") { 
                        } else {
                            statusValidation = 1;
                            $('#'+$(this)[0].id).focus();
                            var text = $(this)[0].id.replace("_", " ");
                            Swal.fire("Terjadi Kesalahan!",  $(this).attr('rel')+" Not Empty!", "error");
                            return false;

                        }
                    }
                    console.log($(this)[0].id+' -- '+$(this)[0].value+' -- '+$(this)[0].name);
                });
                if (statusValidation == 0) {
                    var postData = new FormData(this.form);                        
                    $.ajax({
                        url : "<?php echo base_url('gaji/perbarui_jalankan_gaji'); ?>",
                        type: "POST",
                        data: postData,
                        processData: false,
                        contentType: false,
                        success: function(data, textStatus, jqXHR){
                            console.log(data);
                            if(data.status == 'TRUE'){ 
                                Swal.fire("Berhasil", data.message, "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            } else {
                                Swal.fire("Gagal", data.message, "error");
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            Swal.fire("Gagal", "Update Gagal", "error");
                        }
                    });
                } else {
                    // Swal.fire("Error!", "Please Check Again!", "error");
                }
            });
            
            $('#proses_jalankan_gaji').click(function(e) {   
                $('#cover-spin').show(0);                    
                $.ajax({    
                    type: "GET",
                    url: "<?php echo base_url('gaji/proses_jalankan_gaji'); ?>",             
                    dataType: "JSON",   
                    success: function(response){                    
                        console.log(response);
                        if (response.status == 'TRUE') { 
                            $('#cover-spin').hide(0);
                            Swal.fire("Success", response.pesan, "success");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);

                        } else {
                            $('#cover-spin').hide(0);
                            Swal.fire("Error", response.pesan, "error");
                        }    
                    }
                });
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