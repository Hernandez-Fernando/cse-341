<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Pool - Profile</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<h2 class="pl-2 mb-2 h3">Elisa Mayers Pool - <span class="text-success h5">On Service</span></h2>
			<div class="row">
				<div class="col ml-2"><p class="text-muted">Owner: <a href="customer-single.php">Elisa Mayers</a></p></div>
			</div>
			<div class="row">
				<div class="col ml-2"><p>Address: 123 N First St, Mesa, AZ 85201</p></div>
			</div>
			<div class="row">
				<div class="col-4 ml-2"><p>Access Code: #8888</p></div>
				<div class="col-4"><p>Gate Code: None</p></div>
			</div>
			<div class="row">
				<div class="col-4 ml-2"><p>Service Day: Monday</p></div>
				<div class="col-5"><p>Last Service: Jan 20, 2020</p></div>
			</div>
			<div class="row">
				<div class="col-4 ml-2"><p>Last Backwash: Jan 13, 2020</p></div>
				<div class="col-5"><p>Last Filter Service: Oct 18, 2019</p></div>
			</div>
			<div class="row">
				<div class="col-4 offset-5"> <a href="#" class="btn btn-primary">Edit</a><a href="" class="text-danger ml-3">Delete</a></div>
			</div>
			<div class="pool-list container mt-5">
			<h3 class="h4 mb-2">Service Reports</h3>
				<div class="row table-head">
					<div class="name col-4"><p>Date</p></div>
					<div class="address col-4"><p>Technician</p></div>
					<div class="phone col-4"><p>Options</p></div>
				</div>
				<div class="row table-row">
					<div class="address col-4"><p>Jan 20, 2020</p></div>
					<div class="date col-4"><p>Fernando Hernandez</p></div>
					<div class="options col-4"><p><a href="#">View</a> | <a href="#">Edit</a> | <a href="#" class="text-danger">Delete</a></p></div>
				</div>
				<div class="row table-row">
					<div class="address col-4"><p>Jan 13, 2020</p></div>
					<div class="date col-4"><p>Fernando Hernandez</p></div>
					<div class="options col-4"><p><a href="#">View</a> | <a href="#">Edit</a> | <a href="#" class="text-danger">Delete</a></p></div>
				</div>
				<div class="row table-row">
					<div class="address col-4"><p>Jan 6, 2020</p></div>
					<div class="date col-4"><p>Miguel Vazquez</p></div>
					<div class="options col-4"><p><a href="#">View</a> | <a href="#">Edit</a> | <a href="#" class="text-danger">Delete</a></p></div>
				</div>
			</div>
			
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>