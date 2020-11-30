<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Waletku | <?php echo $title; ?></title>
		<meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        

		<link href="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

        
        <?php $this->load->view('Include/Css'); ?>
	</head>
	<body id="kt_body" style="background-image: url(<?php echo base_url(); ?>assets/template/metronic/media/bg/header.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">


		<div id="kt_header_mobile" class="header-mobile">

			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url(); ?>assets/template/metronic/media/logos/logo-4-sm.png" class="logo-default max-h-30px" />
			</a>

			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>

					</span>
				</button>
			</div>

		</div>

		<div class="d-flex flex-column flex-root">

			<div class="d-flex flex-row flex-column-fluid page">

				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    
					<?php $this->load->view('Include/Header'); ?>
                    
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<div class="d-flex align-items-center flex-wrap mr-2">
									<div class="d-flex flex-column">
                                        <h2 class="text-dark font-weight-bold my-2 mr-5"><?php echo $title; ?></h2>
										<div class="d-flex align-items-center font-weight-bold my-2">
											<a href="#" class="opacity-75 hover-opacity-100">
												<i class="flaticon2-shelter text-dark icon-1x"></i>
											</a>
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Gaji</a>
										</div>
									</div>
								</div>
							</div>
						</div>
                        
						<div class="d-flex flex-column-fluid">
							<div class="container">
                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Daftar Gaji Karyawan
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-7">
                                            <div class="row align-items-center">
                                                <!-- <form action="<?php echo base_url(); ?>gaji/daftar_gaji_karyawan" method="GET"> -->
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="d-flex align-items-center">
                                                                    <select class="form-control" name="tahun" id="tahun_periode" require>
                                                                        <option value="">Tahun</option>
                                                                        <?php
                                                                            $thn_skr = date('Y');
                                                                            for ($x = $thn_skr; $x >= 2010; $x--) {
                                                                                if ($x == $tahun) {
                                                                                    $selected = 'selected';
                                                                                } else {
                                                                                    $selected = '';
                                                                                }
                                                                        ?>
                                                                                <option value="<?php echo $x; ?>" <?php echo $selected; ?>><?php echo $x; ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="d-flex align-items-center">
                                                                    <select class="form-control" name="bulan" id="bulan_periode" require>
                                                                        <option value="">Bulan</option>
                                                                        <option value="01" <?php echo ($bulan == '01') ? 'selected' : ''; ?>>Januari</option>
                                                                        <option value="02" <?php echo ($bulan == '02') ? 'selected' : ''; ?>>Februari</option>
                                                                        <option value="03" <?php echo ($bulan == '03') ? 'selected' : ''; ?>>Maret</option>
                                                                        <option value="04" <?php echo ($bulan == '04') ? 'selected' : ''; ?>>April</option>
                                                                        <option value="05" <?php echo ($bulan == '05') ? 'selected' : ''; ?>>Mei</option>
                                                                        <option value="06" <?php echo ($bulan == '06') ? 'selected' : ''; ?>>Juni</option>
                                                                        <option value="07" <?php echo ($bulan == '07') ? 'selected' : ''; ?>>Juli</option>
                                                                        <option value="08" <?php echo ($bulan == '08') ? 'selected' : ''; ?>>Agustus</option>
                                                                        <option value="09" <?php echo ($bulan == '09') ? 'selected' : ''; ?>>September</option>
                                                                        <option value="10" <?php echo ($bulan == '10') ? 'selected' : ''; ?>>Oktober</option>
                                                                        <option value="11" <?php echo ($bulan == '11') ? 'selected' : ''; ?>>November</option>
                                                                        <option value="12" <?php echo ($bulan == '12') ? 'selected' : ''; ?>>Desember</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="d-flex align-items-center">
                                                                    <button type="button" class="btn btn-light-primary px-6 font-weight-bold" id="btn_cari_periode">Cari</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                                                                
                                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
											<thead>
												<tr>
                                                    <th>Kode Karyawan</th>
                                                    <th>Informasi Karyawan</th>
                                                    <th>Kehadiran</th>
                                                    <th>Gaji Pokok</th>
                                                    <th>Tunjangan</th>
                                                    <th>Pengurangan</th>
                                                    <th>Manfaat</th>
                                                    <th>Gaji Bersih</th>
												</tr>
											</thead>
											<tbody>
                                                <?php 
                                                    if (count($data) > 0) {
                                                        foreach ($data as $value) { 
                                                ?>
                                                        <tr>
                                                            <td><?php echo $value['employee_code']; ?></td>
                                                            <td><p style="font-size: 16px; font-weight: bold; margin-bottom: 0px;"><?php echo $value['employee_first_name']; ?> <?php echo $value['employee_last_name']; ?></p><?php echo $value['employee_department_id']; ?><br><?php echo $value['employee_job_position']; ?><br><?php echo $value['employee_job_level']; ?></td>
                                                            <td><?php echo $value['employee_absen']; ?></td>
                                                            <td>Rp. <?php echo number_format($value['employee_salary'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['employee_component_tunjangan_total'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['employee_component_pengurangan_total'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['employee_component_manfaat_total'],0,',','.'); ?></td>
                                                            <td>Rp. <?php echo number_format($value['employee_take_home_pay'],0,',','.'); ?></td>
                                                        </tr>
                                                <?php }} ?>
											</tbody>
										</table>
                                        
                                    </div>
                                </div>
							</div>
						</div>
										
                        
					</div>
                    
					<?php $this->load->view('Include/Footer'); ?>
				</div>
			</div>
		</div>
        
        <?php $this->load->view('Include/Scrolltop'); ?>
        
        <?php $this->load->view('Include/Js'); ?>
        
		<script src="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/datatables/datatables.bundle.js"></script>
        
        <script>
            $('#btn_cari_periode').on('click', function() {
                var tahun = $('#tahun_periode').val();
                var bulan = $('#bulan_periode').val();

                if (tahun != '') {
                    if (bulan != '') {
                        window.location.href = '<?php echo base_url(); ?>gaji/daftar_gaji_karyawan?tahun='+tahun+'&bulan='+bulan;
                    } else {
                        Swal.fire("Terjadi Kesalahan!", "Periode Bulan Tidak Boleh Kosong", "error");
                    }
                } else {
                    Swal.fire("Terjadi Kesalahan!", "Periode Tahun Tidak Boleh Kosong", "error");
                }
            });
            
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
                KTDatatablesExtensionButtons.init();
            });

            function edit(params) {
                // alert(params);
                window.location.href='<?php echo base_url()?>karyawan/edit_karyawan/'+params;
            }
        </script>
	</body>
</html>