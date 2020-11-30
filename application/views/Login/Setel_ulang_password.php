
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
        <div id="cover-spin"></div>
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
                            <div class="mb-5">
								<h3>Silahkan Setel Ulang Password Anda</h3>
								<p class="opacity-60 font-weight-bold"><?php echo $email; ?></p>
							</div>
							<form class="form" method="POST" id="form_setel_ulang_password">
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="hidden" name="email" id="email" value="<?php echo $email; ?>" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Konfirmasi Password" name="konfirmasi_password" id="konfirmasi_password" />
								</div>
								<div class="form-group text-center mt-10">
									<button type="submit" id="btn_setel_ulang" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Masuk</button>
								</div>
                            </form>
						</div>
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
        <!--end::Main-->
        
        <?php $this->load->view('Include/Js'); ?>
        
		<script>
            
            $('#btn_setel_ulang').on('click', function(e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var password   = $('#password').val();
                var k_password = $('#konfirmasi_password').val();
                // console.log(form);                    
                if (password != '') {
                    var validPassword = validatePassword(password);
                    // console.log(validPassword);
                    if (validPassword == true) {
                        if (k_password != '') {
                            if (password == k_password) {
                                var postData = new FormData($('#form_setel_ulang_password')[0]);
                                // var postData = new FormData(this.form);     
                                console.log(postData); 
                                $.ajax({
                                    url : "<?php echo base_url('login/simpan_setel_ulang_password'); ?>",
                                    type: "POST",
                                    data: postData,
                                    processData: false,
                                    contentType: false,
                                    success: function(data, textStatus, jqXHR){
                                        console.log(data);
                                        $('#cover-spin').hide(0);
                                        if (data.status == 'TRUE') { 

                                            Swal.fire("Berhasil", "Setel Ulang Password Berhasil", "success");
                                            setTimeout(function() {
                                                window.location = "<?php echo base_url(); ?>dasbor";
                                            }, 2000);

                                        } else {

                                            Swal.fire("Gagal", data.message, "error");

                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        $('#cover-spin').hide(0);
                                        Swal.fire("Gagal", "Setel Ulang Password Berhasil Gagal", "error");
                                    }
                                });
                            } else {
                                $('#cover-spin').hide(0);
                                Swal.fire("Gagal", "Password dan Konfirmasi Password Tidak Sama", "error");
                            }
                        } else {
                            $('#cover-spin').hide(0);
                            Swal.fire("Gagal", "Konfirmasi Password Tidak Boleh Kosong", "error");
                        }
                    } else {
                        $('#cover-spin').hide(0);
                        Swal.fire("Gagal", validPassword, "error");
                    }
                } else {
                    $('#cover-spin').hide(0);
                    Swal.fire("Gagal", "Password Tidak Boleh Kosong", "error");
                }
            });

            function validatePassword(password) 
            {	
                var errorMsg = "";
                var space  = " ";
                //fieldname   = document.myform.password; 
                //fieldvalue  = fieldname.value; 
                //fieldlength = fieldvalue.length; 
                fieldvalue  = password; 
                fieldlength = fieldvalue.length; 
            
                if (fieldvalue.indexOf(space) > -1)
                {
                    errorMsg += "Password tidak boleh menggunakan spasi.<br>";
                }     
            
                if (!(fieldvalue.match(/\d/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 angka.<br>";
                }
            
                /*if (!(fieldvalue.match(/^[a-zA-Z]+/))) 
                {
                    errorMsg += "Strong passwords must start with at least one letter.<br>";
                }*/
            
                if (!(fieldvalue.match(/[A-Z]/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 huruf kapital.<br>";
                }

                if (!(fieldvalue.match(/[a-z]/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 atau lebih huruf kecil.<br>";
                }

                if (!(fieldvalue.match(/\W+/))) 
                {
                    errorMsg += "Password harus memiliki minimal 1 karakter spesial (#,@,%,!).<br>";
                }

                if (!(fieldlength >= 8)) 
                {
                    errorMsg += "Password minimal terdiri dari 8 karakter.<br>";
                }

                if (errorMsg != "")
                {
                    // msg = "__________________\n\n";
                    // msg += "Password Anda tidak memenuhi kriteria di bawah ini:\n";
                    // msg += "__________________\n";
                    // errorMsg += alert(msg + errorMsg + "\n\n");
                    //document.form1.new_frm.value="";
                    // document.form1.NewPassword.select();
                    return errorMsg;
                }
                
                return true;
            }

            // Class Initialization
            jQuery(document).ready(function() {
                
            });
        </script>
	</body>
	<!--end::Body-->
</html>