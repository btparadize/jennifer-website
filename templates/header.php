<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="lib/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script>
			var headOfficeLat = <?php echo $variables['head_office_lat']; ?>;
			var headOfficeLng = <?php echo $variables['head_office_lng']; ?>;
			var headOfficeZoom = <?php echo $variables['head_office_zoom']; ?>;
			var headOfficeAddress = '<?php echo $variables['address']; ?>';
		</script>
	</head>
	<body>
		<div id="banner" class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<img src="img/logo.png" alt="logo">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<p class="text-right h2 text-warning">
						<span class="glyphicon glyphicon-phone-alt"></span>
						<span class="h5"><?php echo $variables['contact_number']; ?></span>
					</p>
				</div>
			</div>
		</div>