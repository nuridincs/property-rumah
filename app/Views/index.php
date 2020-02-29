<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo isset($title) ? "Property -".$title :"Property "; ?>  </title>
  <meta property="og:site_name" content="Furniture">
  <meta property="og:title" content="Furniture">
  <meta property="og:description" content="Furniture">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo base_url('/img/logo.jpg'); ?>">
  <meta property="og:url" content="">
  <link rel="shortcut icon" href="<?php echo base_url('/img/logo.png'); ?>" type="image/x-icon">

<link href="<?php echo base_url('/frontend/style.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('/frontend/uikit/css/uikit.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('/frontend/datepicker/daterangepicker.css'); ?>" rel="stylesheet" type="text/css">

<script src="<?php echo base_url('/frontend/js/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?php echo base_url('/frontend/uikit/js/uikit.js'); ?>"></script>
<script src="<?php echo base_url('/frontend/uikit/js/uikit-icons.js'); ?>"></script>

<!-- <script src="<?php //echo base_url(); ?>/frontend/datepicker/moment.min.js"></script>
<script src="<?php //echo base_url(); ?>/frontend/datepicker/daterangepicker.js"></script> -->

</head>
<body>
	<div>
		 <?php echo view('frontend/menu'); ?>
	</div>

	<div align="center" style="min-height: 400px">
    	<?php echo view($content); ?>
	</div>

	<br><br><br>
	<div align="center" class="footer">
		&copy;Copyright Property Rumah <?= date('Y') ?>
	</div>
	<br>
</body>
</html>

<script>
	$(document).ready(function(){
		total = $("#total_result").val();
		if(!total){
			total = 0;
		}
		$("#span_result").text(total);
	})

	$(".onEnter").on('keypress',function(e) {
	    if(e.which == 13) {
	       search();
	    }
	});

	function search(kategori=''){
		if(kategori==''){
			kategori = '-';
		}

		val = $("#search").val();
		if(val==''){
			val = '-';
		}
		window.location.href = '<?php echo base_url(); ?>index.php/depan/index/' + kategori + '/' + val;
	}
</script>