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
											<a href="" class="text-dark text-hover-white opacity-75 hover-opacity-100">Message</a>
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
								<!--begin::Inbox-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-250px w-xxl-275px" id="kt_inbox_aside">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
											<!--begin::Body-->
											<div class="card-body px-5">
												<!--begin::Compose-->
												<div class="px-4 mt-4 mb-10">
													<a href="#" class="btn btn-block btn-primary font-weight-bold text-uppercase py-4 px-6 text-center" data-toggle="modal" data-target="#kt_inbox_compose">New Message</a>
												</div>
												<!--end::Compose-->
												<!--begin::Navigations-->
												<?php $this->load->view('Include/Navigation_message'); ?>
												<!--end::Navigations-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Aside-->
									<!--begin::List-->
									<div class="flex-row-fluid ml-lg-8 d-block" id="kt_inbox_list">
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">
												<!--begin::Left-->
												<div class="d-flex align-items-center my-2">
													<a href="#" class="btn btn-clean btn-icon btn-sm mr-6" data-inbox="back">
														<i class="flaticon2-left-arrow-1"></i>
													</a>
													
													<span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="" data-original-title="Delete">
														<span class="svg-icon svg-icon-md">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																	<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													
												</div>
												<!--end::Left-->
											</div>
                                            <div class="card-body p-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center justify-content-between flex-wrap card-spacer-x py-5">
													<!--begin::Title-->
													<div class="d-flex align-items-center mr-2 py-2">
														<div class="font-weight-bold font-size-h3 mr-3"><?php echo $subject; ?></div>
														<!-- <span class="label label-light-primary font-weight-bold label-inline mr-2">inbox</span>
														<span class="label label-light-danger font-weight-bold label-inline">important</span> -->
													</div>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="d-flex py-2">
														<span class="btn btn-default btn-sm btn-icon mr-2">
															<i class="flaticon2-sort"></i>
														</span>
														<span class="btn btn-default btn-sm btn-icon" data-dismiss="modal">
															<i class="flaticon2-fax"></i>
														</span>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Messages-->
												<div class="mb-3">
													<div class="shadow-xs">
														<div class="d-flex align-items-center card-spacer-x py-6">
															<span class="symbol symbol-50 mr-4">
																<span class="symbol-label" style="background-image: url('assets/media/users/100_13.jpg')"></span>
															</span>
															<div class="d-flex flex-column flex-grow-1 flex-wrap mr-2">
																<div class="d-flex">
																	<a href="#" class="font-size-lg font-weight-bolder text-dark-75 text-hover-primary mr-2"><?php echo $sending_name; ?></a>
																	<div class="font-weight-bold text-muted">
                                                                        
                                                                    </div>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<div class="font-weight-bold text-muted mr-2"><?php echo $create_date; ?></div>
															</div>
														</div>
														<div class="card-spacer-x text-center py-3 toggle-off-item">
															<form action="" id="message-view-form">
																<input type="hidden" id="id_message" name="id_message" value="<?php echo $id_message; ?>">
																<p class="h4"><?php echo $sending_name; ?> would like to request time off <?php echo $type; ?> at this date:</p>
																<p class="h5"><?php echo $body_email; ?></p>
																<p class="mt-5">Notes</p>
																<p class="h5"><?php echo $reason; ?></p>
																<p class="mt-5">
																	<textarea class="form-control form-control-sm p-5" name="comment" id="comment" cols="30" rows="5" style="width: 100%;"></textarea>    
																</p>
																<p>
																	<button class="btn btn-primary" id="btn-approve">Approve</button> 
																	<button class="btn btn-warning" id="btn-reject">Reject</button>
																</p>
															</form>
														</div>
													</div>
												</div>
												<!--end::Messages-->
												
											</div>
										</div>
										<!--end::Card-->
									</div>
									<!--end::List-->
								</div>
								<!--end::Inbox-->
								<!--begin::Compose-->
								<div class="modal modal-sticky modal-sticky-lg modal-sticky-bottom-right" id="kt_inbox_compose" role="dialog" data-backdrop="false">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<!--begin::Form-->
											<form id="kt_inbox_compose_form">
												<!--begin::Header-->
												<div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-bottom">
													<h5 class="font-weight-bold m-0">Compose</h5>
													<div class="d-flex ml-2">
														<span class="btn btn-clean btn-sm btn-icon mr-2">
															<i class="flaticon2-arrow-1 icon-1x"></i>
														</span>
														<span class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
															<i class="ki ki-close icon-1x"></i>
														</span>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="d-block">
													<!--begin::To-->
													<div class="d-flex align-items-center border-bottom inbox-to px-8 min-h-45px">
														<div class="text-dark-50 w-75px">To:</div>
														<div class="d-flex align-items-center flex-grow-1">
															<input type="text" class="form-control border-0" name="compose_to" value="Chris Muller, Lina Nilson" />
														</div>
														<div class="ml-2">
															<span class="text-muted font-weight-bold cursor-pointer text-hover-primary mr-2" data-inbox="cc-show">Cc</span>
															<span class="text-muted font-weight-bold cursor-pointer text-hover-primary" data-inbox="bcc-show">Bcc</span>
														</div>
													</div>
													<!--end::To-->
													<!--begin::CC-->
													<div class="d-none align-items-center border-bottom inbox-to-cc pl-8 pr-5 min-h-45px">
														<div class="text-dark-50 w-75px">Cc:</div>
														<div class="flex-grow-1">
															<input type="text" class="form-control border-0" name="compose_cc" value="" />
														</div>
														<span class="btn btn-clean btn-xs btn-icon" data-inbox="cc-hide">
															<i class="la la-close"></i>
														</span>
													</div>
													<!--end::CC-->
													<!--begin::BCC-->
													<div class="d-none align-items-center border-bottom inbox-to-bcc pl-8 pr-5 min-h-45px">
														<div class="text-dark-50 w-75px">Bcc:</div>
														<div class="flex-grow-1">
															<input type="text" class="form-control border-0" name="compose_bcc" value="" />
														</div>
														<span class="btn btn-clean btn-xs btn-icon" data-inbox="bcc-hide">
															<i class="la la-close"></i>
														</span>
													</div>
													<!--end::BCC-->
													<!--begin::Subject-->
													<div class="border-bottom">
														<input class="form-control border-0 px-8 min-h-45px" name="compose_subject" placeholder="Subject" />
													</div>
													<!--end::Subject-->
													<!--begin::Message-->
													<div id="kt_inbox_compose_editor" class="border-0" style="height: 250px"></div>
													<!--end::Message-->
													<!--begin::Attachments-->
													<div class="dropzone dropzone-multi px-8 py-4" id="kt_inbox_compose_attachments">
														<div class="dropzone-items">
															<div class="dropzone-item" style="display:none">
																<div class="dropzone-file">
																	<div class="dropzone-filename" title="some_image_file_name.jpg">
																		<span data-dz-name="">some_image_file_name.jpg</span>
																		<strong>(
																		<span data-dz-size="">340kb</span>)</strong>
																	</div>
																	<div class="dropzone-error" data-dz-errormessage=""></div>
																</div>
																<div class="dropzone-progress">
																	<div class="progress">
																		<div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
																	</div>
																</div>
																<div class="dropzone-toolbar">
																	<span class="dropzone-delete" data-dz-remove="">
																		<i class="flaticon2-cross"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<!--end::Attachments-->
												</div>
												<!--end::Body-->
												<!--begin::Footer-->
												<div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-top">
													<!--begin::Actions-->
													<div class="d-flex align-items-center mr-3">
														<!--begin::Send-->
														<div class="btn-group mr-4">
															<span class="btn btn-primary font-weight-bold px-6">Send</span>
															<span class="btn btn-primary font-weight-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"></span>
															<div class="dropdown-menu dropdown-menu-sm dropup p-0 m-0 dropdown-menu-right">
																<ul class="navi py-3">
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-writing"></i>
																			</span>
																			<span class="navi-text">Schedule Send</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-medical-records"></i>
																			</span>
																			<span class="navi-text">Save &amp; archive</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-hourglass-1"></i>
																			</span>
																			<span class="navi-text">Cancel</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<!--end::Send-->
														<!--begin::Other-->
														<span class="btn btn-icon btn-sm btn-clean mr-2" id="kt_inbox_compose_attachments_select">
															<i class="flaticon2-clip-symbol"></i>
														</span>
														<span class="btn btn-icon btn-sm btn-clean">
															<i class="flaticon2-pin"></i>
														</span>
														<!--end::Other-->
													</div>
													<!--end::Actions-->
													<!--begin::Toolbar-->
													<div class="d-flex align-items-center">
														<span class="btn btn-icon btn-sm btn-clean mr-2" data-toggle="tooltip" title="More actions">
															<i class="flaticon2-settings"></i>
														</span>
														<span class="btn btn-icon btn-sm btn-clean" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
															<i class="flaticon2-rubbish-bin-delete-button"></i>
														</span>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Compose-->
							</div>
							<!--end::Container-->
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
        
        <!--begin::Scrolltop-->
        <?php $this->load->view('Include/Scrolltop'); ?>
        <!--end::Scrolltop-->        
        
        <?php $this->load->view('Include/Js'); ?>

        <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/crud/forms/widgets/select2.js"></script>
        <!-- <script src="<?php echo base_url(); ?>assets/template/metronic/js/pages/custom/inbox/inbox.js"></script> -->

        <script>
			$('#btn-approve').click(function (e) {
                e.preventDefault();
                var btn     = $(this);
                var form    = $(this).closest('form');

				var comment = $('#comment').val();

				if (comment != '') {
					 var postData = new FormData(this.form);   
					 postData.append('status', '2');                     
					$.ajax({
						url : "<?php echo base_url('message/message_response'); ?>",
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
					Swal.fire("Error!", "Comment Not Empty!", "error");
				}
			});

			$('#btn-reject').click(function (e) {
                e.preventDefault();
                var btn     = $(this);
                var form    = $(this).closest('form');

				var comment = $('#comment').val();

				if (comment != '') {
					
				} else {
					Swal.fire("Error!", "Comment Not Empty!", "error");
				}
			});
        </script>
        
	</body>
	<!--end::Body-->
</html>