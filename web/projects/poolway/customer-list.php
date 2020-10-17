<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Customer List</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<h2 class="pl-3 mb-3">Customer List</h2>
			
			<div class="customer-list container">
				<div class="row table-head">
					<div class="name col-3"><p>Name</p></div>
					<div class="address col-4"><p>Address</p></div>
					<div class="phone col-2"><p>Phone</p></div>
					<div class="options col-3"><p>Options</p></div>
				</div>
				<div class="row customer-row">
					<div class="name col-3"><p>Elisa Myers</p></div>
					<div class="address col-4"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="phone col-2"><p>(123) 456-6789</p></div>
					<div class="options col-3"><p><a href="customer-single.php">Profile</a> | <a href="#">Edit</a></p></div>
				</div>
				<div class="row customer-row">
					<div class="name col-3"><p>Hector Nichols</p></div>
					<div class="address col-4"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="phone col-2"><p>(123) 456-6789</p></div>
					<div class="options col-3"><p><a href="#">Profile</a> | <a href="#">Edit</a></p></div>
				</div>
				<div class="row customer-row">
					<div class="name col-3"><p>Pablo Roberson</p></div>
					<div class="address col-4"><p>123 N First St, Mesa, AZ 85201</p></div>
					<div class="phone col-2"><p>(123) 456-6789</p></div>
					<div class="options col-3"><p><a href="#">Profile</a> | <a href="#">Edit</a></p></div>
				</div>
			</div>
			
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>