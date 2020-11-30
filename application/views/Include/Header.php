					<?php 
						$sqlMessage = $this->db->query("SELECT count(*) as total FROM message WHERE (employee_message_id_reciever = '".$this->session->userdata('employee_id')."' OR employee_message_id_sending = '".$this->session->userdata('employee_id')."') AND employee_message_status_read IN (0) ");
						if ($sqlMessage->num_rows() > 0) {
							$jml_notif = $sqlMessage->row_array()['total'];
						} else {
							$jml_notif = 0;
						}

						$sqlManager = $this->db->query("SELECT * FROM employee WHERE (employee_approval_1_id = '".$this->session->userdata('user_id')."' OR employee_approval_2_id = '".$this->session->userdata('user_id')."' OR employee_approval_3_id = '".$this->session->userdata('user_id')."') ");
						if ($sqlManager->num_rows() > 0) {
							$statusManager = 1;
						} else {
							$statusManager = 0;
						}

						if (ISSET($menu)) {
							$menu = $menu;
						} else {
							$menu = '';
						}
						
						$menu_bar = $menu;

						$menu_dasbor          = '';
						$menu_karyawan        = '';
						$menu_gaji            = '';
						$menu_info_saya       = '';
						$menu_manajemen_waktu = '';
						$menu_pengajuan       = '';
						$menu_pengaturan      = '';
						$menu_perusahaan      = '';
						
						if ($this->uri->segment(1) == 'dasbor') {
							$menu_dasbor = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'karyawan') {
							$menu_karyawan = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'gaji') {
							$menu_gaji = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'manajemen_waktu') {
							$menu_manajemen_waktu = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'Pengajuan') {
							$menu_pengajuan = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'info_saya') {
							$menu_info_saya = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'pengaturan') {
							$menu_pengaturan = 'menu-item-here';
						} else if ($this->uri->segment(1) == 'perusahaan') {
							$menu_perusahaan = 'menu-item-here';
						} else {}

					?>
					
					<div id="kt_header" class="header header-fixed" style="border-bottom: 1px solid rgba(10, 10, 10, 0.1); background-color: #fee800;">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-stretch mr-3">
								<!--begin::Header Logo-->
								<div class="header-logo">
									<a href="index.html">
										<img alt="Logo" src="<?php echo base_url(); ?>assets/template/metronic/media/logos/logo-4-sm.png" class="logo-default max-h-40px" />
										<img alt="Logo" src="<?php echo base_url(); ?>assets/template/metronic/media/logos/logo-4-sm.png" class="logo-sticky max-h-40px" />
									</a>
								</div>
								<!--end::Header Logo-->
								<!--begin::Header Menu Wrapper-->
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">
											<li class="menu-item <?php echo $menu_dasbor; ?>">
												<a href="<?php echo base_url(); ?>dasbor" class="menu-link">
													<span class="menu-text text-dark">Dasbor</span>
												</a>
											</li>
											<?php if ($this->session->userdata('user_access') == 0) { ?>
												<li class="menu-item menu-item-submenu menu-item-rel <?php echo $menu_info_saya; ?>" data-menu-toggle="click" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text text-dark">Info Saya</span>
														<span class="menu-desc"></span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-left">
														<ul class="menu-subnav">
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>info_saya/informasi_umum" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Informasi Umum</span>
																</a>
															</li>
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Files/Pictures1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
																				<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
																				<polygon fill="#000000" points="11 19 15 14 19 19" />
																				<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Gaji</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>info_saya/info_gaji" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Info Gaji</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>info_saya/slip_gaji" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Slip Gaji</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Address-card.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Manajemen Waktu</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>info_saya/cuti" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Cuti</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>info_saya/kehadiran" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Kehadiran</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>info_saya/informasi_lainnya" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Adress-book2.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
																				<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Lain-lain</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item <?php echo $menu_perusahaan; ?>">
													<a href="<?php echo base_url(); ?>perusahaan" class="menu-link">
														<span class="menu-text text-dark">Perusahaan</span>
													</a>
												</li>
											<?php } ?> 
											<?php if ($this->session->userdata('user_access') == 1) { ?>
												<li class="menu-item <?php echo $menu_karyawan; ?>">
													<a href="<?php echo base_url(); ?>karyawan" class="menu-link">
														<span class="menu-text text-dark">Karyawan</span>
													</a>
												</li>
											<?php } ?> 
											<?php if ($this->session->userdata('user_access') == 1) { ?>
												<li class="menu-item <?php echo $menu_gaji; ?> menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text text-dark">Gaji</span>
														<span class="menu-desc"></span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-left">
														<ul class="menu-subnav">
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>gaji/jalankan_gaji" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Jalankan Gaji</span>
																</a>
															</li>
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>gaji/daftar_gaji_karyawan" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Daftar Gaji</span>
																</a>
															</li>
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Files/Pictures1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
																				<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
																				<polygon fill="#000000" points="11 19 15 14 19 19" />
																				<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Bonus</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>gaji/thr" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">THR</span>
																			</a>
																		</li>
																	</ul>
																	<!-- <ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>pengaturan/cuti" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Bonus</span>
																			</a>
																		</li>
																	</ul> -->
																</div>
															</li>
														</ul>
													</div>
												</li>
											<?php } ?> 
											<?php if ($this->session->userdata('user_access') == 1) { ?>
												<li class="menu-item menu-item-submenu menu-item-rel <?php echo $menu_manajemen_waktu; ?>" data-menu-toggle="click" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text text-dark">Manajemen Waktu</span>
														<span class="menu-desc"></span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-left">
														<ul class="menu-subnav">
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>manajemen_waktu/cuti" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Cuti</span>
																</a>
															</li>
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>manajemen_waktu/kehadiran/request" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Kehadiran</span>
																</a>
															</li>
															<?php if ($this->session->userdata('user_access') == 1) { ?>
																<!-- <li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="<?php //echo base_url(); ?>employees" class="menu-link">
																		<span class="svg-icon menu-icon">
																			
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
																			
																		</span>
																		<span class="menu-text text-dark">Kalender</span>
																	</a>
																</li> -->
															<?php } ?> 
														</ul>
													</div>
												</li>
											<?php } ?> 
											<?php if ($this->session->userdata('user_access') == 1 OR $statusManager == 1) { ?>
												<li class="menu-item <?php echo $menu_pengajuan; ?> menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text text-dark">Permintaan</span>
														<span class="menu-desc"></span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-left">
														<ul class="menu-subnav">
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>Pengajuan/cuti/req" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Cuti</span>
																</a>
															</li>
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>Pengajuan/kehadiran/req" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Kehadiran</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
											<?php } ?> 
											<?php if ($this->session->userdata('user_access') == 1) { ?>
												<li class="menu-item menu-item-submenu menu-item-rel <?php echo $menu_pengaturan; ?>" data-menu-toggle="click" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text text-dark">Pengaturan</span>
														<span class="menu-desc"></span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-left">
														<ul class="menu-subnav">
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Files/Pictures1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
																				<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
																				<polygon fill="#000000" points="11 19 15 14 19 19" />
																				<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Gaji</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>pengaturan/komponen_gaji" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Komponen Penggajian</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Files/Pictures1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
																				<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
																				<polygon fill="#000000" points="11 19 15 14 19 19" />
																				<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Manajemen Waktu</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>pengaturan/kehadiran" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Kehadiran</span>
																			</a>
																		</li>
																	</ul>
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>pengaturan/cuti" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Cuti</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Files/Pictures1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
																				<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
																				<polygon fill="#000000" points="11 19 15 14 19 19" />
																				<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Karyawan</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>pengaturan/departmen" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Departemen</span>
																			</a>
																		</li>
																	</ul>
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="<?php echo base_url(); ?>pengaturan/level_pekerjaan" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text text-dark">Level Pekerjaan</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															<li class="menu-item" data-menu-toggle="hover" aria-haspopup="true">
																<a href="<?php echo base_url(); ?>pengaturan/daftar_admin" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/template/metronic/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text text-dark">Admin</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
											<?php }  ?>
										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::User-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-hover-transparent-black d-flex align-items-center btn-lg px-md-2 w-md-auto">
											<span class="text-black opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
											<span class="text-black opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"><?php echo $this->session->userdata('user_first_name'); ?></span>
											<span class="symbol symbol-35">
											<span class="symbol-label text-black font-size-h5 font-weight-bold bg-white-o-30">S</span>
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
										<!--begin::Header-->
										<div class="d-flex align-items-center p-8 rounded-top">
											<!--begin::Symbol-->
											<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
												<img src="<?php echo base_url(); ?><?php echo $this->session->userdata('user_foto_avatar'); ?>" alt="" />
											</div>
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo $this->session->userdata('user_first_name'); ?></div>
											<!-- <span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span> -->
											<!--end::Text-->
										</div>
										<div class="separator separator-solid"></div>
										<!--end::Header-->
										<!--begin::Nav-->
										<div class="navi navi-spacer-x-0 pt-5">
											<!--begin::Item-->
											<?php if ($this->session->userdata('user_access') != 1) { ?>
												<a href="#" class="navi-item px-8" data-toggle="modal" data-target="#ganti_password">
													<div class="navi-link">
														<div class="navi-icon mr-2">
															<i class="icon text-success flaticon-lock"></i>
															<!-- <i class="flaticon2-calendar-3 text-success"></i> -->
														</div>
														<div class="navi-text">
															<div class="font-weight-bold">Ganti Password</div>
														</div>
													</div>
												</a>
											<?php } ?>
											
											<!--<a href="<?php //echo base_url(); ?>message" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-mail text-warning"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Messages</div>
														<div class="text-muted">Inbox and tasks</div>
													</div>
												</div>
											</a> -->
											<!--end::Item-->
											<!--begin::Item-->
											<!-- <a href="custom/apps/user/profile-2.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-rocket-1 text-danger"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Activities</div>
														<div class="text-muted">Logs and notifications</div>
													</div>
												</div>
											</a> -->
											<!--end::Item-->
											<!--begin::Item-->
											<!-- <a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-hourglass text-primary"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Tasks</div>
														<div class="text-muted">latest tasks and projects</div>
													</div>
												</div>
											</a> -->
											<!--end::Item-->
											<!--begin::Footer-->
											<!-- <div class="navi-separator mt-3"></div> -->
											<div class="navi-footer px-8 py-5">
												<a href="<?php echo base_url(); ?>authentication/sign_out" class="btn btn-light-primary font-weight-bold">Sign Out</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<div id="cover-spin"></div>