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
											<div class="card-body">
												<!--begin: Search Form-->
												<!--begin::Search Form-->
												<div class="mb-7">
													<div class="row align-items-center">
														<div class="col-lg-10 col-xl-10">
															<div class="row align-items-center">
																<div class="col-md-12 my-2 my-md-0">
																	<div class="input-icon">
																		<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																		<span>
																			<i class="flaticon2-search-1 text-muted"></i>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-2 col-xl-2 mt-5 mt-lg-0">
															<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
														</div>
													</div>
												</div>
												
												<!--begin: Datatable-->
												<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
												<!--end: Datatable-->
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
			function getData() {
                return new Promise((resolve) => {
                    $.ajax({    
                        type: "GET",
                        url: "<?php echo base_url('message/message_get_data_time_off'); ?>",             
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
                            field: 'Subject',
                            // title: 'Department Name',
                        }, {
                            field: 'Actions',
                            // title: 'Actions',
                            sortable: false,
                            width: 80,
                            overflow: 'visible',
                            autoHide: false,
                            textAlign: 'right',
                            template: function(row) {
                                return '\
                                        <a href="javascript:;" onclick="delete_data('+row.RecordID+')" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                                            <span class="svg-icon svg-icon-md">\
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                        <rect x="0" y="0" width="24" height="24"/>\
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                                    </g>\
                                                </svg>\
                                            </span>\
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

            jQuery(document).ready(function() {
                KTDatatableDataLocalDemo.init();
            });
        </script>
        
	</body>
	<!--end::Body-->
</html>