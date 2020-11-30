        <!--begin::Fonts-->
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/font/googleapis.css"/>
		<!--end::Fonts-->
        
        <!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url(); ?>assets/template/metronic/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/template/metronic/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/template/metronic/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/template/metronic/media/logos/favicon.ico" />
        
        <style>
            .header-menu .menu-nav > .menu-item:hover:not(.menu-item-here):not(.menu-item-active) > .menu-link, .header-menu .menu-nav > .menu-item.menu-item-hover:not(.menu-item-here):not(.menu-item-active) > .menu-link, .header-menu .menu-nav > .menu-item.menu-item-here > .menu-link, .header-menu .menu-nav > .menu-item.menu-item-active > .menu-link {
                background-color: rgba(4, 4, 4, 0.1);
            }

            #cover-spin {
                position:fixed;
                width:100%;
                left:0;right:0;top:0;bottom:0;
                background-color: rgba(255,255,255,0.7);
                z-index:9999;
                display:none;
            }

            @-webkit-keyframes spin {
                from {-webkit-transform:rotate(0deg);}
                to {-webkit-transform:rotate(360deg);}
            }

            @keyframes spin {
                from {transform:rotate(0deg);}
                to {transform:rotate(360deg);}
            }

            #cover-spin::after {
                content:'';
                display:block;
                position:absolute;
                left:48%;top:40%;
                width:40px;height:40px;
                border-style:solid;
                border-color:black;
                border-top-color:transparent;
                border-width: 4px;
                border-radius:50%;
                -webkit-animation: spin .8s linear infinite;
                animation: spin .8s linear infinite;
            }
        </style>