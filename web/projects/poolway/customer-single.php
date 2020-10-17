<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Customer Name - Profile</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<h2 class="pl-2 mb-4 h3">Elisa Mayers - <span class="text-secondary h5">Profile Page</span></h2>
			<div class="row">
				<div class="col-3 ml-2"><p>Billing Address:</p></div>
				<div class="col-5"><p>123 N First St,<br>Mesa, AZ 85201</p></div>
			</div>
			<div class="row">
				<div class="col-3 ml-2"><p>Phone Number:</p></div>
				<div class="col-5"><p>(123) 456-6789</p></div>
			</div>
			<div class="row">
				<div class="col-3 ml-2"><p>Email:</p></div>
				<div class="col-5"><p>elizamayers@emailexample.com</p></div>
			</div>
			<div class="row">
				<div class="col-4 offset-5"> <a href="#" class="btn btn-primary">Edit</a><a href="" class="text-danger ml-3">Delete</a></div>
			</div>
			<div class="pool-list container mt-5">
			<h3 class="h4 mb-2">Pools</h3>
				<div class="row table-head">
					<div class="name col-5"><p>Address</p></div>
					<div class="address col-2"><p>Last Service</p></div>
					<div class="phone col-2"><p>Status</p></div>
					<div class="options col-3"><p>Options</p></div>
				</div>
				<div class="row table-row">
					<div class="address col-5"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="date col-2"><p>Jan. 20, 2020</p></div>
					<div class="status col-2"><p class="text-success">On Service</p></div>
					<div class="options col-3"><p><a href="pool-single.php">Reports</a> | <a href="#">Edit</a></p></div>
				</div>
				<div class="row table-row">
					<div class="address col-5"><p>345 N First Ave, Chandler, AZ 85223</p></div>
					<div class="date col-2"><p>Jan. 25, 2020</p></div>
					<div class="status col-2"><p class="text-success">On Service</p></div>
					<div class="options col-3"><p><a href="#">Reports</a> | <a href="#">Edit</a></p></div>
				</div>
			</div>
			
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>