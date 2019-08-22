<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistem Informasi PT SMU Jogja</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/logosmu.png"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/colorpicker.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/uniform.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/select2.css" />

        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/matrix-style.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/matrix-media.css" />
        <link href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery.gritter.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

        <link href="<?php echo base_url() ?>/assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

        
    </head>
    <body>

        <!--Header-part-->
        <div id="header">
            <h1><a href="">PT SMU Jogja Group</a></h1>
        </div>
        <!--close-Header-part--> 

        <!--top-Header-menu-->

        <div id="user-nav" class="navbar navbar-inverse">
            <div class="scrollmenu">
                <ul class="nav">
<!--                    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                            <li class="divider"></li>
                            <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                            <li class="divider"></li>
                            <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                            <li class="divider"></li>
                            <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                        </ul>
                    </li>
                    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>-->
                    <!--<li class=""><a title="" href="<?php echo site_url('Logout');?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>-->
                </ul>
            </div>
        </div>

        <!--start-top-serch-->
        <div id="search">
            <!--<input type="text" placeholder="Search here..."/>-->
            <!--<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>-->
            <a title="" href="<?php echo site_url('Logout');?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
        </div>
        <!--close-top-serch--> 

        <!--sidebar-menu-->

        <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-info-sign"></i> Error</a>
            <ul>

                <!--dashboard-->
                <li><a href="<?php echo site_url('Welcome/index'); ?>"><i class="icon icon-home"></i> <span>Halaman Awal</span></a> </li>

                <!--admin-->
                <!--<li><a href="<?php echo site_url('Admin/data_admin'); ?>"><i class="icon icon-user"></i> <span>Admin</span></a> </li>-->
                <li class="submenu"> <a href="#"><i class="icon-money"></i> <span>Admin</span> <span class="label label-important">2</span></a>
                    <ul>
                        <li><a href="<?php echo site_url('Admin/form_insert_admin'); ?>">Tambah Admin</a></li>
                        <li><a href="<?php echo site_url('Admin/data_admin'); ?>">Data Admin</a></li>
                    </ul>
                </li>
                
                <!--perusahaan-->
<!--                <li><a href=""><i class="icon-money"></i> <span>Perusahaan</span></a></li>
                <li><a href=""><i class="icon-map-marker"></i> <span>Lokasi Perusahaan</span></a></li>-->
                <li class="submenu"> <a href="#"><i class="icon-money"></i> <span>Perusahaan</span> <span class="label label-important">2</span></a>
                    <ul>
                        <!--<li><a href="<?php echo site_url('Lokasi/data_lokasi'); ?>">Lokasi Perusahaan</a></li>-->
                        <li><a href="<?php echo site_url('Perusahaan/form_insert_perusahaan'); ?>">Tambah Perusahaan</a></li>
                        <li><a href="<?php echo site_url('Perusahaan/data_perusahaan'); ?>">Data Perusahaan</a></li>
                    </ul>
                </li>
                
                <!--lowongan-->
                <li class="submenu"> <a href="#"><i class="icon-briefcase"></i> <span>Informasi Lowongan</span> <span class="label label-important">2</span></a>
                    <ul>
                        <!--<li><a href="<?php echo site_url('Pekerjaan/data_pekerjaan'); ?>">Jenis Pekerjaan</a></li>-->
                        <li><a href="<?php echo site_url('Lowongan/form_insert_lowongan'); ?>">Tambah Lowongan</a></li>
                        <li><a href="<?php echo site_url('Lowongan/data_lowongan'); ?>">Data Lowongan</a></li>
                    </ul>
                </li>

                <!--pelamar-->
                <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>Pendataan Pelamar</span> <span class="label label-important">2</span></a>
                    <ul>
                        <li><a href="<?php echo site_url('Pelamar/form_insert_pelamar'); ?>">Tambah Pelamar</a></li>
                        <li><a href="<?php echo site_url('Pelamar/data_pelamar'); ?>">Data Pelamar</a></li>
                    </ul>
                </li>

                <!--pendaftar lowongan-->
                <li><a href="<?php echo site_url('Pendaftar/data_pelamar'); ?>"><i class="icon-shopping-cart"></i> <span>Pendaftar Lowongan</span></a> </li>

                <!--endorsment-->
                <li><a href="<?php echo site_url('Endorsement/data_lowongan'); ?>"><i class="icon-tasks"></i> <span>Endorsement</span></a> </li>

                <!--pengiriman endorsment-->
                <!--<li><a href="<?php echo site_url('Endorsement/tampilan_pengiriman'); ?>"><i class="icon-external-link"></i> <span>Pengiriman Endorsement</span></a> </li>-->
                <li class="submenu"> <a href="#"><i class="icon-money"></i> <span>Pengiriman Dokumen</span> <span class="label label-important">2</span></a>
                    <ul>
                        <li><a href="<?php echo site_url('Endorsement/pengiriman'); ?>">Tambah Pengiriman</a></li>
                        <li><a href="<?php echo site_url('Endorsement/tampilan_pengiriman'); ?>">Data Pengiriman</a></li>
                    </ul>
                </li>
                
                <!--keberangkatan-->
                <li><a href="<?php echo site_url('Endorsement/data_keberangkatan_lowongan'); ?>"><i class="icon-plane"></i> <span>Keberangkatan</span></a> </li>


<!--                <li><a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
                <li><a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
                <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
                <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
                <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
                    <ul>
                        <li><a href="form-common.html">Basic Form</a></li>
                        <li><a href="form-validation.html">Form with Validation</a></li>
                        <li><a href="form-wizard.html">Form with Wizard</a></li>
                    </ul>
                </li>
                <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
                <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
                <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
                    <ul>
                        <li><a href="index2.html">Dashboard2</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="chat.html">Chat option</a></li>
                    </ul>
                </li>
                <li class="submenu active"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
                    <ul>
                        <li><a href="error403.html">Error 403</a></li>
                        <li><a href="error404.html">Error 404</a></li>
                        <li><a href="error405.html">Error 405</a></li>
                        <li><a href="error500.html">Error 500</a></li>
                    </ul>
                </li>-->
<!--                <li class="content"> <span>Monthly Bandwidth Transfer</span>
                    <div class="progress progress-mini progress-danger active progress-striped">
                        <div style="width: 77%;" class="bar"></div>
                    </div>
                    <span class="percent">77%</span>
                    <div class="stat">21419.94 / 14000 MB</div>
                </li>
                <li class="content"> <span>Disk Space Usage</span>
                    <div class="progress progress-mini active progress-striped">
                        <div style="width: 87%;" class="bar"></div>
                    </div>
                    <span class="percent">87%</span>
                    <div class="stat">604.44 / 4000 MB</div>
                </li>-->
            </ul>
        </div>