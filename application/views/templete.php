<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Fixed Nav + Sticky Footer</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Wrap all page content here -->
<div id="wrap">
  
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/utama">Ali Hasan</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url(); ?>index.php/utama">Home</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/data_mahasiswa">Data Mahasiswa</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
		  <li><a href="<?php echo base_url(); ?>index.php/data.php">Data</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/contact_c">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <?php echo $deskription; ?>
    <?php $this->load->view($judul);?>
</div>

<div id="footer">
  <div class="container">
    <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
  </div>
</div>

	<!-- script references -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>