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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Slip Gaji</a>
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
                                <form class="form" id="form-employees">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Slip Gaji</h3>
                                                </div>
                                                <!--begin::Form-->
                                                
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
                                                            <!-- </form> -->
                                                        </div>
                                                    </div>
                                                    <?php if (count($gaji) > 0) { ?>
                                                        <div class="mb-7">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-5">
                                                                        <h3><?php echo $nama_bulan; ?> <?php echo $tahun; ?> <a href="<?php echo base_url(); ?>info_saya/download_gaji/<?php echo $employee_id.'/'.$tahun.'/'.$bulan; ?>" class="btn btn-primary font-weight-bold">Download</a></h3>                                                          
                                                                    </div>
                                                                    <div class="mb-5">
                                                                        <label for="">Gaji Pokok</label>
                                                                        <h1>Rp <?php echo $basic_salary; ?></h1>                                                          
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <?php 
                                                                    foreach ($gaji as $key => $value) {
                                                                ?>
                                                                        <div class="col-6 mb-8">
                                                                            <div class="card card-custom card-border">
                                                                                <div class="card-header border-0">
                                                                                    <h3 class="card-title font-weight-bolder text-dark"><?php echo $value['komponen_nama'] ?></h3>
                                                                                </div>
                                                                                
                                                                                <div class="card-body pt-0">
                                                                                    <?php 
                                                                                        foreach ($value['detail'] as $key2 => $value2) {
                                                                                    ?>
                                                                                            <div class="d-flex align-items-center flex-wrap mb-2">
                                                                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                                    <span class="text-muted font-weight-bold"><?php echo $value2['name']; ?></span>
                                                                                                </div>
                                                                                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">Rp. <?php echo number_format($value2['value'],0,',','.'); ?></span>
                                                                                            </div>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                    <hr>
                                                                                    <div class="d-flex align-items-center bg-light-info rounded p-5">
                                                                                        <!--end::Icon-->
                                                                                        <!--begin::Title-->
                                                                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                            <span class="text-muted font-weight-bold">Total</span>
                                                                                        </div>
                                                                                        <!--end::Title-->
                                                                                        <!--begin::Lable-->
                                                                                        <span class="font-weight-bolder text-warning py-1 font-size-lg">Rp. <?php echo number_format($value['total'],0,',','.'); ?></span>
                                                                                        <!--end::Lable-->
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                               
                                                                        </div>
                                                                <?php
                                                                    }
                                                                ?>     
                                                                <?php 
                                                                    foreach ($kehadiran as $key => $valueKehadiran) {
                                                                ?>
                                                                        <div class="col-6 mb-8">
                                                                            <div class="card card-custom card-border">
                                                                                <div class="card-header border-0">
                                                                                    <h3 class="card-title font-weight-bolder text-dark"><?php echo $valueKehadiran['komponen_nama'] ?></h3>
                                                                                </div>
                                                                                
                                                                                <div class="card-body pt-0">
                                                                                    <?php 
                                                                                        foreach ($valueKehadiran['detail'] as $key2 => $valueKehadiran2) {
                                                                                    ?>
                                                                                            <div class="d-flex align-items-center flex-wrap mb-2">
                                                                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                                    <span class="text-muted font-weight-bold"><?php echo $valueKehadiran2['name']; ?></span>
                                                                                                </div>
                                                                                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder"><?php echo$valueKehadiran2['value']; ?></span>
                                                                                            </div>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>                                               
                                                                        </div>
                                                                <?php
                                                                    }
                                                                ?>                                                            
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card card-custom card-border">
                                                                        <div class="card-header border-0">
                                                                            <h3 class="card-title font-weight-bolder text-dark">Gaji Bersih</h3>
                                                                            <div class="card-toolbar">
                                                                                <h3 class="card-title font-weight-bolder text-dark">Rp <?php echo $totalTakeHomePay; ?></h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                               
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="mb-7">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h1>Periode Gaji Belum Terdaftar</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Periode Slip Gaji</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="exampleSelect1">Tahun</label>
                                <select class="form-control" name="tahun" id="tahun_periode_modal" require>
                                    <option value="">Tahun</option>
                                    <?php
                                        $thn_skr = date('Y');
                                        for ($x = $thn_skr; $x >= 2010; $x--) {
                                    ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleSelect1">Bulan</label>
                                <select class="form-control" name="bulan" id="bulan_periode_modal" require>
                                    <option value="">Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href ="javascript:history.back()" class="btn btn-light-primary font-weight-bold">Kembali</a>
                        <button type="button" class="btn btn-primary font-weight-bold" id="btn_cari_periode_modal">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--begin::Scrolltop-->
        <?php $this->load->view('Include/Scrolltop'); ?>
        <!--end::Scrolltop-->        
        
        <?php $this->load->view('Include/Js'); ?>

        <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/crud/forms/widgets/select2.js"></script>

        <script>
            jQuery(document).ready(function() {	
                <?php if (!$_GET) { ?>
                    $('#modal_form').modal('show');
                <?php } else {} ?>
            });

            $('#btn_cari_periode').on('click', function() {
                var tahun = $('#tahun_periode').val();
                var bulan = $('#bulan_periode').val();

                if (tahun != '') {
                    if (bulan != '') {
                        window.location.href = '<?php echo base_url(); ?>info_saya/slip_gaji?tahun='+tahun+'&bulan='+bulan;
                    } else {
                        Swal.fire("Terjadi Kesalahan!", "Periode Bulan Tidak Boleh Kosong", "error");
                    }
                } else {
                    Swal.fire("Terjadi Kesalahan!", "Periode Tahun Tidak Boleh Kosong", "error");
                }
            });

            $('#btn_cari_periode_modal').on('click', function() {
                var tahun = $('#tahun_periode_modal').val();
                var bulan = $('#bulan_periode_modal').val();

                if (tahun != '') {
                    if (bulan != '') {
                        window.location.href = '<?php echo base_url(); ?>info_saya/slip_gaji?tahun='+tahun+'&bulan='+bulan;
                    } else {
                        Swal.fire("Terjadi Kesalahan!", "Periode Bulan Tidak Boleh Kosong", "error");
                    }
                } else {
                    Swal.fire("Terjadi Kesalahan!", "Periode Tahun Tidak Boleh Kosong", "error");
                }
            });
        </script>
        
	</body>
	<!--end::Body-->
</html>