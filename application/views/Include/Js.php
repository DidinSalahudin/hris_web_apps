        <div class="modal fade" id="ganti_password" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form method="POST" action="" id="form_ganti_pass">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token" />
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="ganti_pass" id="ganti_pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="ganti_konfirmasi_pass" id="ganti_konfirmasi_pass" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Keluar</button>
                            <button type="button" class="btn btn-primary font-weight-bold" id="btn_ganti_pass">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        
        <script src="<?php echo base_url(); ?>assets/template/metronic/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="<?php echo base_url(); ?>assets/template/metronic/js/scripts.bundle.js"></script>
        
        <script>
            $('#btn_ganti_pass').on('click', function(e) {
                e.preventDefault();
                $('#cover-spin').show(0);
                var btn     = $(this);
                var form    = $(this).closest('form');

                var password   = $('#ganti_pass').val();
                var k_password = $('#ganti_konfirmasi_pass').val();
                // console.log(form);                    
                if (password != '') {
                    var validPassword = validatePassword(password);
                    // console.log(validPassword);
                    if (validPassword == true) {
                        if (k_password != '') {
                            if (password == k_password) {
                                var postData = new FormData($('#form_ganti_pass')[0]);
                                // var postData = new FormData(this.form);     
                                console.log(postData); 
                                $.ajax({
                                    url : "<?php echo base_url('Authentication/simpan_ganti_password'); ?>",
                                    type: "POST",
                                    data: postData,
                                    processData: false,
                                    contentType: false,
                                    success: function(data, textStatus, jqXHR){
                                        console.log(data);
                                        if (data.status == 'TRUE') { 
                                            $('#cover-spin').hide(0);
                                            Swal.fire("Berhasil", "Setel Ulang Password Berhasil", "success");
                                            setTimeout(function() {
                                                window.location = "<?php echo base_url(); ?>dasbor";
                                            }, 2000);

                                        } else {
                                            $('#cover-spin').hide(0);
                                            Swal.fire("Gagal", "Setel Ulang Password Gagal", "error");

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
        </script>
