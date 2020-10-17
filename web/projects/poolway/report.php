<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>POOL NAME - DATE - Service Report</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<h2 class="pl-2 mb-2 h3">Service Report - Elisa Mayers Pool - <span class="text-muted h5">Jan 20, 2020</span></h2>
			<div class="row">
				<div class="col ml-2"><p class="text-muted">123 N First St, Mesa, AZ 85201</p></div>
			</div>
			<div class="row mt-2">
				<div class="col-4 ml-2"><p>Technician: Fernando Hernandez</p></div>
				<div class="col-3"><p>Arrival Time: 8:23 AM</p></div>
				<div class="col-3"><p>Ending Time: 8:56 AM</p></div>
			</div>
			<h3 class="h6 mt-3 ml-2">Pool Readings</h3>
			<div class="row">
				<div class="col-2 ml-2"><p>Chlorine: 2</p></div>
				<div class="col-2"><p>pH: 7.5</p></div>
				<div class="col-2"><p>Hardness: 500</p></div>
				<div class="col-2"><p>Cyanuric Acid: 80</p></div>
				<div class="col-2"><p>Filter Psi: 22</p></div>
			</div>
			<div class="row">
				<div class="col-5">
					<h3 class="h6 mt-4 ml-2">Service Checklist</h3>
					<div class="row">
						<div class="col-5 ml-2"><p><i class="fas fa-check-circle"></i> Brush</p></div>
						<div class="col-5"><p><i class="fas fa-check-circle"></i> Baskets Clean</p></div>
					</div>
					<div class="row">
						<div class="col-5 ml-2"><p><i class="fas fa-check-circle"></i> Vaccum</p></div>
						<div class="col-5"><p><i class="fas fa-check-circle"></i> Chemicals Added</p></div>
					</div>
					<div class="row">
						<div class="col-5 ml-2"><p><i class="fas fa-check-circle"></i> Cleaner Basket</p></div>
						<div class="col-5"><p><i class="fas fa-times-circle"></i> Backwash</p></div>
					</div>
				</div>
				<div class="col-5">
					<h3 class="h6 mt-4 ml-3">Pool Equipment</h3>
					<div class="col"><p><i class="fas fa-check-circle"></i> Pump</p></div>
					<div class="col"><p><i class="fas fa-check-circle"></i> Filter</p></div>
					<div class="col"><p><i class="fas fa-times-circle"></i> Cleaner</p></div>
				</div>
			</div>
			<div class="row mt-3 mb-4">
				<div class="col-7 ml-2"><p><span class="text-muted">Notes:</span> Pump was off, small leak on pump.</p></div>
			</div>
			
			
			<div class="row">
				<div class="col"><p class="text-center"><a href="#" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a><a href="" class="text-danger ml-3"><i class="fas fa-trash-alt"></i> Delete</a></p></div>
			</div>
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>