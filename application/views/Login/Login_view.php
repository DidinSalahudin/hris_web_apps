<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
		<title>Waletku | Login Page</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<link href="<?php echo base_url(); ?>assets/template/metronic/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />
        
        <?php $this->load->view('Include/Css'); ?>
	</head>
	<body id="kt_body" style="background-image: url(<?php echo base_url(); ?>assets/template/metronic/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid" style="background-color: #FFC81B;" id="kt_login">
				<div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
					<div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
						<a href="#" class="text-center pt-2">
							<img src="<?php echo base_url(); ?>assets/template/metronic/media/logos/logo-4.png" class="max-h-75px" alt="" />
						</a>
						<div class="d-flex flex-column-fluid flex-column flex-center">
							<div class="login-form login-signin py-11">
								<form class="form" method="POST" id="kt_login_signin_form">
									<div class="text-center pb-8">
										<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Masuk</h2>
									</div>
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
										<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="email" name="email" id="email_login" autocomplete="off" />
									</div>
									<div class="form-group">
										<div class="d-flex justify-content-between mt-n5">
                                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                            <!-- <a href="javascript:;" class="text-white font-weight-bold">Masuk</a> -->
											<a href="javascript:;" class="text-white font-size-h6 font-weight-bolder pt-5" id="kt_login_forgot">Lupa Password ?</a>
										</div>
										<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
									</div>
									<div class="text-center pt-2">
										<button id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3" style="background-color: #159db7; border: none;">Masuk</button>
									</div>
								</form>
							</div>
							<div class="login-form login-forgot pt-11">
								<form class="form" novalidate="novalidate" id="kt_login_forgot_form">
									<div class="text-center pb-8">
										<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Lupa Password ?</h2>
										<p class="text-white font-weight-bold font-size-h4">Masukan email Anda untuk reset password Anda</p>
									</div>
									<div class="form-group">
										<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
										<button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4" style="background-color: #159db7; border: none;">Simpan</button>
										<button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Batal</button>
									</div>
								</form>
							</div>
						</div>
						<div class="text-center">
							<span class="opacity-70 mr-4">Anda Adalah Admin?</span>
							<a href="<?php echo base_url(); ?>admin/login" class="text-white font-weight-bold">Masuk</a>
						</div>
					</div>
				</div>
				<div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #159db7;">
					<div class="d-flex flex-column justify-content-center text-center pt-lg-0 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
						<h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">PT Walletku Indompet Indonesia</h3>
					</div>
					<div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?php echo base_url(); ?>assets/template/metronic/media/login/hr-2.png);"></div>
				</div>
			</div>
        </div>
        
        <?php $this->load->view('Include/Js'); ?>

		<script>
            var KTLogin = function() {
                var _login;

                var _showForm = function(form) {
                    var cls = 'login-' + form + '-on';
                    var form = 'kt_login_' + form + '_form';

                    _login.removeClass('login-forgot-on');
                    _login.removeClass('login-signin-on');

                    _login.addClass(cls);

                    KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
                }

                var _handleSignInForm = function() {
                    var validation;

                    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                    validation = FormValidation.formValidation(
                        KTUtil.getById('kt_login_signin_form'),
                        {
                            fields: {
                                email: {
                                    validators: {
                                        notEmpty: {
                                            message: 'Email harus diisi'
                                        },
                                        emailAddress: {
                                            message: 'Format email yang anda masukan tidak sesuai'
                                        }
                                    }
                                },
                                password: {
                                    validators: {
                                        notEmpty: {
                                            message: 'Password harus diisi'
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger(),
                                submitButton: new FormValidation.plugins.SubmitButton(),
                                //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                                bootstrap: new FormValidation.plugins.Bootstrap()
                            }
                        }
                    );

                    $('#kt_login_signin_submit').on('click', function (e) {
                        e.preventDefault();
                        $('#cover-spin').show(0);
                        var btn     = $(this);
                        var form    = $(this).closest('form');

                        validation.validate().then(function(status) {
                            if (status == 'Valid') {
                                var postData = new FormData($('#kt_login_signin_form')[0]);
                                // var postData = new FormData(this.form);     
                                console.log(postData); 
                                $.ajax({
                                    url : "<?php echo base_url('login/validation_login'); ?>",
                                    type: "POST",
                                    data: postData,
                                    processData: false,
                                    contentType: false,
                                    success: function(data, textStatus, jqXHR){
                                        $('#cover-spin').hide(0);
                                        console.log(data);
                                        if (data.status == 'TRUE') { 
                                            if (data.status_password == 1) {
                                                Swal.fire("Berhasil", data.message, "success");
                                                setTimeout(function() {
                                                    window.location = "<?php echo base_url(); ?>login/setel_ulang_password?u="+btoa($('#email_login').val());
                                                }, 2000);
                                            } else {
                                                Swal.fire("Berhasil", data.message, "success");
                                                setTimeout(function() {
                                                    window.location = "<?php echo base_url(); ?>dasbor";
                                                }, 2000);
                                            }

                                        } else {

                                            Swal.fire("Gagal", data.message, "error");

                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        Swal.fire("Gagal", "Login Gagal", "error");
                                    }
                                });
                            } else {
                                $('#cover-spin').hide(0);
                                swal.fire({
                                    text: "Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                }).then(function() {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    });

                    // Handle forgot button
                    $('#kt_login_forgot').on('click', function (e) {
                        e.preventDefault();
                        _showForm('forgot');
                    });
                }

                var _handleForgotForm = function(e) {
                    var validation;

                    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                    validation = FormValidation.formValidation(
                        KTUtil.getById('kt_login_forgot_form'),
                        {
                            fields: {
                                email: {
                                    validators: {
                                        notEmpty: {
                                            message: 'Email harus diisi'
                                        },
                                        emailAddress: {
                                            message: 'Format email yang anda masukan tidak sesuai'
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger(),
                                bootstrap: new FormValidation.plugins.Bootstrap()
                            }
                        }
                    );

                    // Handle submit button
                    $('#kt_login_forgot_submit').on('click', function (e) {
                        e.preventDefault();

                        validation.validate().then(function(status) {
                            if (status == 'Valid') {
                                var postData = new FormData($('#kt_login_forgot_form')[0]);
                                // var postData = new FormData(this.form);     
                                console.log(postData); 
                                $.ajax({
                                    url : "<?php echo base_url('login/kirim_lupa_password'); ?>",
                                    type: "POST",
                                    data: postData,
                                    processData: false,
                                    contentType: false,
                                    success: function(data, textStatus, jqXHR){
                                        console.log(data);
                                        $('#cover-spin').hide(0);
                                        if (data.status == 'TRUE') { 
                                            Swal.fire("Berhasil", data.message, "success");
                                            setTimeout(function() {
                                                window.location = "<?php echo base_url(); ?>login";
                                            }, 2000);

                                        } else {

                                            Swal.fire("Gagal", data.message, "error");

                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        Swal.fire("Gagal", "Login Gagal", "error");
                                    }
                                });
                            } else {
                                swal.fire({
                                    text: "Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                }).then(function() {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    });

                    // Handle cancel button
                    $('#kt_login_forgot_cancel').on('click', function (e) {
                        e.preventDefault();

                        _showForm('signin');
                    });
                }

                // Public Functions
                return {
                    // public functions
                    init: function() {
                        _login = $('#kt_login');

                        _handleSignInForm();
                        _handleForgotForm();
                    }
                };
            }();

            // Class Initialization
            jQuery(document).ready(function() {
                KTLogin.init();
            });
        </script>
	</body>
</html>