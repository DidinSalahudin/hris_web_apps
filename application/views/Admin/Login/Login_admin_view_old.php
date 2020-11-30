
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Waletku | Login Page</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo base_url(); ?>assets/template/metronic/css/pages/login/classic/login-1.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
        
        <?php $this->load->view('Include/Css'); ?>

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-color: #FFC81B;">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/template/metronic/media/logos/logo-4.png" class="max-h-100px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
                            <div class="mb-20">
								<h3>Selamat Datang Admin</h3>
								<p class="opacity-60 font-weight-bold">Silahkan Masukan Email dan Password Anda</p>
							</div>
							<form class="form" method="POST" id="kt_login_signin_form">
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="email" placeholder="Email" name="email" id="email_login" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password" id="password_login" />
								</div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
									<label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                        <!-- <input type="checkbox" name="remember" />Remember me
                                        <span></span> -->
                                    </label>
									<!-- <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Lupa Password ?</a> -->
								</div>
								<div class="form-group text-center mt-10">
									<button type="submit" id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Masuk</button>
								</div>
                            </form>
                            <div class="mt-10">
								<span class="opacity-70 mr-4">Anda Bukan Admin?</span>
								<a href="<?php echo base_url(); ?>login" class="text-white font-weight-bold">Masuk</a>
							</div>
						</div>
						<!--end::Login Sign in form-->
						<!--begin::Login forgot password form-->
						<div class="login-forgot">
							<div class="mb-20">
								<h3>Lupa Password ?</h3>
								<p class="opacity-60">Masukan email Anda untuk reset password Anda</p>
							</div>
							<form class="form" id="kt_login_forgot_form">
								<div class="form-group mb-10">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<button id="kt_login_forgot_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Ajukan</button>
									<button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Batal</button>
								</div>
							</form>
						</div>
						<!--end::Login forgot password form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
        <!--end::Main-->
        
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
                            // defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                $('#kt_login_signin_submit').on('click', function(e) {
                    e.preventDefault();
                    var btn     = $(this);
                    var form    = $(this).closest('form');
                    // console.log(form);                    
                    
                    validation.validate().then(function(status) {
                        if (status == 'Valid') {
                            var postData = new FormData($('#kt_login_signin_form')[0]);
                            // var postData = new FormData(this.form);     
                            console.log(postData); 
                            $.ajax({
                                url : "<?php echo base_url('admin/validation_login'); ?>",
                                type: "POST",
                                data: postData,
                                processData: false,
                                contentType: false,
                                success: function(data, textStatus, jqXHR){
                                    console.log(data);
                                    if (data.status == 'TRUE') { 

                                        Swal.fire("Berhasil", "Login Berhasil", "success");
                                        setTimeout(function() {
                                            window.location = "<?php echo base_url(); ?>dasbor";
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
                            
                            // swal.fire({
                            //     text: "All is cool! Now you submit this form",
                            //     icon: "success",
                            //     buttonsStyling: false,
                            //     confirmButtonText: "Ok, got it!",
                            //     customClass: {
                            //         confirmButton: "btn font-weight-bold btn-light-primary"
                            //     }
                            // }).then(function() {
                            //     KTUtil.scrollTop();
                            //     window.location = "<?php echo base_url(); ?>dashboard";
                            // });
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

                // Handle forgot button
                $('#kt_login_forgot').on('click', function (e) {
                    e.preventDefault();
                    _showForm('forgot');
                });

                // Handle signup
                $('#kt_login_signup').on('click', function (e) {
                    e.preventDefault();
                    _showForm('signup');
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
                                        message: 'Email address is required'
                                    },
                                    emailAddress: {
                                        message: 'The value is not a valid email address'
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
                            // Submit form
                            KTUtil.scrollTop();
                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
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
	<!--end::Body-->
</html>