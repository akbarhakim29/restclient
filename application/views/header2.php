<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="<?php echo base_url();?>jqueryui/development-bundle/themes/base/jquery.ui.all.css">

	<link rel="stylesheet" href="<?php echo base_url("Asset/css/bootstrap.min.css");?>" >

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url("Asset/css/plugins/metisMenu/metisMenu.min.css");?>" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("Asset/css/sb-admin-2.css");?>" >

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("Asset/font-awesome/css/font-awesome.min.css");?>" >

<script src="<?php echo base_url();?>jqueryui/development-bundle/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>jqueryui/development-bundle/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>jqueryui/development-bundle/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>jqueryui/development-bundle/ui/jquery.ui.datepicker.js"></script>

<script src="<?php echo base_url("Asset/js/highcharts.js");?>"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("Asset/css/Datetimepicker/jquery.datetimepicker.css");?>">
<script src="<?php echo base_url("Asset/css/Datetimepicker/jquery.js")?>"></script>
<script src="<?php echo base_url("Asset/css/Datetimepicker/jquery.datetimepicker.js")?>"></script>

<title>FEWS</title>

</head>

<body>
<div id="wrapper">
	<nav class="navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="#">FEWS</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo "admindex"; ?>"><i class="fa fa-dashboard fa-fw"></i> ADMIN HOME</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo "monitoring"; ?>"><i class="fa fa-dashboard fa-fw"></i>MONITORING</a>
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> KELOLA BERITA<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <a href="<?php echo "tambahberita"; ?>"><i class="fa fa-dashboard fa-fw"></i> Tambah Berita</a>
                               </li>
                                <li>
                                     <a href="<?php echo "berita"; ?>"><i class="fa fa-dashboard fa-fw"></i> List Berita</a>
                                </li>
                               
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> KELOLA ADMIN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo "addadmin"; ?>"><i class="fa fa-dashboard fa-fw"></i> Tambah Admin</a>
                                </li>
                                <li>
                                    <a href="<?php echo "listadmin"; ?>"><i class="fa fa-dashboard fa-fw"></i> List Admin</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo "admlogout"; ?>"><i class="fa fa-dashboard fa-fw"></i> LOG OUT</a>
                        </li>
  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    </nav>
</div>
<div><br /></div>