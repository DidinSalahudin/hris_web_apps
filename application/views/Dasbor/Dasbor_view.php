
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
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
										<h2 class="text-dark font-weight-bold my-2 mr-5">Dasbor</h2>
									</div>
								</div>
							</div>
						</div>

						<?php
							if ($this->session->userdata('user_access') == 1) {
								$foto_avatar = 'assets/image/foto_profil/Foto_Profil.jpg';
							} else {
								$foto_avatar = $foto_avatar;
							}
						?>
                        
						<div class="d-flex flex-column-fluid">
							<div class="container">
								<div class="d-flex flex-row">
									<!-- <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px ml-lg-8" id="kt_profile_aside">
										<div class="card card-custom ">
											<div class="card-body pt-15">
												<div class="text-center mb-10">
													<div class="symbol symbol-60 symbol-circle symbol-xl-90">
														<div class="symbol-label" style="background-image:url('<?php echo base_url().$foto_avatar; ?>')"></div>
														<i class="symbol-badge symbol-badge-bottom bg-success"></i>
													</div>
													<h4 class="font-weight-bold my-2"><?php echo $this->session->userdata('user_first_name'); ?></h4>
													<div class="text-muted mb-2"><?php echo $this->session->userdata('user_job_position'); ?></div>
												</div>
											</div>
										</div>
									</div> -->
									<div class="flex-row-fluid ml-lg-8">
										<div class="row">
											<div class="col-lg-4 col-md-12 mb-4">
												<div class="card card-custom ">
													<div class="card-body pt-15">
														<div class="text-center mb-10">
															<div class="symbol symbol-60 symbol-circle symbol-xl-90">
																<div class="symbol-label" style="background-image:url('<?php echo base_url().$foto_avatar; ?>')"></div>
																<i class="symbol-badge symbol-badge-bottom bg-success"></i>
															</div>
															<h4 class="font-weight-bold my-2"><?php echo $this->session->userdata('user_first_name'); ?></h4>
															<div class="text-muted mb-2"><?php echo $this->session->userdata('user_job_position'); ?></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-12 mb-4">
												<div class="card card-custom card-stretch gutter-b">
													<div class="card-header border-0">
														<h3 class="card-title font-weight-bolder text-dark">Hi, <?php echo $this->session->userdata('user_first_name'); ?></h3>
													</div>
													<div class="card-body pt-0">
														<h3>Selamat Datang di dasbor</h3>
													</div>
												</div>
											</div>
										</div>
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
        
		<script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/widgets.js"></script>
		<script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/custom/profile/profile.js"></script>
	</body>
</html>