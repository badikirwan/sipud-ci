<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title><?php echo $title?> | Dashboard</title>
<!-- Site favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/images/favicon.ico">
<!-- /site favicon -->
<!-- Entypo font stylesheet -->
<link href="<?php echo base_url()?>assets/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->
<!-- Font awesome stylesheet -->
<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->
<!-- Bootstrap stylesheet min version -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->
<!-- Integral core stylesheet -->
<link href="<?php echo base_url()?>assets/css/integral-core.css" rel="stylesheet">
<!-- /integral core stylesheet -->
<!--Jvector Map-->
<link href="<?php echo base_url()?>assets/plugins/jvectormap/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">
<!--DataTables-->
<link href="<?php echo base_url()?>assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">
<!--/DataTables-->
<link href="<?php echo base_url()?>assets/css/integral-forms.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootbox/bootbox.min.js"></script>
<link href="<?php echo base_url()?>assets/plugins/select2/css/select2.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?php echo base_url()?>assets/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="<?php echo base_url()?>assets/plugins/flot/<?php echo base_url()?>assets/js/excanvas.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Loader Backdrop -->
	<div class="loader-backdrop">
	  <!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
	  <!-- /loader -->
	</div>
<!-- loader backgrop -->

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">

		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="<?php echo base_url()?>assets/images/logo.png" alt="Integral" title="Integral"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->

		<!-- Main navigation -->
		<?php include $menu ?>
		<!-- /main navigation -->
  </div>
  <!-- /page sidebar -->

  <!-- Main container -->
  <div class="main-container">

		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-md-12">

			<!-- User info -->
			<ul class="user-info pull-right">
			  <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="<?php echo base_url()?>assets/images/man-3.jpg">John Henderson <span class="caret"></span></a>

				<!-- User action menu -->
				<ul class="dropdown-menu">

				  <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
				  <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
				  <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
				  <li class="divider"></li>
				  <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
				  <li><a href="#"><i class="icon-logout"></i>Logout</a></li>
				</ul>
				<!-- /user action menu -->
			  </li>
			</ul>
			<!-- /user info -->
		  </div>
		</div>
		<!-- /main header -->

		<!-- Main content -->
		<div class="main-content">
			<?php $this->load->view($contents)?>
      <footer class="footer-main">
				© 2017 <strong>SIPUD</strong> by <a target="_blank" href="#/">Badik Irwan</a>
			</footer>
	  </div>
	  <!-- /main content -->
  </div>
  <!-- /main container -->
</div>
<!-- /page container -->

<!--Load JQuery-->

<script src="<?php echo base_url()?>assets/plugins/metismenu/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>assets/plugins/blockui-master/js/jquery-ui.js"></script>
<script src="<?php echo base_url()?>assets/plugins/blockui-master/js/jquery.blockUI.js"></script>

<!--Knob Charts-->
<script src="<?php echo base_url()?>assets/plugins/knob/js/jquery.knob.min.js"></script>

<!--Jvector Map-->
<script src="<?php echo base_url()?>assets/plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>

<!--ChartJs-->
<script src="<?php echo base_url()?>assets/plugins/chartjs/js/Chart.min.js"></script>

<!--Morris Charts-->
<script src="<?php echo base_url()?>assets/plugins/morris/js/raphael-min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/morris/js/morris.min.js"></script>

<!--Float Charts-->

<!--Functions Js-->
<script src="<?php echo base_url()?>assets/js/functions.js"></script>
<!-- Input Mask-->
<script src="<?php echo base_url()?>assets/plugins/jasny/js/jasny-bootstrap.min.js"></script>

<!--Dashboard Js-->

<script src="<?php echo base_url()?>assets/js/loader.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/dataTables-script.js"></script>
<!-- Select2-->
<script src="<?php echo base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>






</body></html>
