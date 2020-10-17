<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Pool List</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<h2 class="pl-3 mb-3">Pool List</h2>
			
			<div class="customer-list container">
				<div class="row table-head">
					<div class="name col-2"><p>Nickname</p></div>
					<div class="address col-5"><p>Pool Address</p></div>
					<div class="phone col-2"><p>Status</p></div>
					<div class="options col-3"><p>Options</p></div>
				</div>
				<div class="row customer-row">
					<div class="name col-2"><p>Elisa Myers</p></div>
					<div class="address col-5"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="phone col-2"><p class="text-success">On Service</p></div>
					<div class="options col-3"><p><a href="pool-single.php">Reports</a> | <a href="#">Edit</a> | <a href="#" class="text-danger">Delete</a></p></div>
				</div>
				<div class="row customer-row">
					<div class="name col-2"><p>Hector Nichols</p></div>
					<div class="address col-5"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="phone col-2"><p class="text-warning">Parked</p></div>
					<div class="options col-3"><p><a href="#">Reports</a> | <a href="#">Edit</a></p></div>
				</div>
				<div class="row customer-row">
					<div class="name col-2"><p>Pablo Roberson</p></div>
					<div class="address col-5"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="phone col-2"><p class="text-danger">Canceled</p></div>
					<div class="options col-3"><p><a href="#">Reports</a> | <a href="#">Edit</a></p></div>
				</div>
			</div>
			
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>