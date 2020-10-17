<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New Pool</title>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<!--
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item"><a href="#">Library</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Data</li>
			  </ol>
			</nav>
			-->
			<h2 class="pl-3 mb-3">Add New Pool</h2>
			<form action="" id="newPool" class="col-10 pool-form form-collapsed">
				<div class="form-row">
					<div class="col form-group row">
						<label for="" class="col-3 col-form-label">Select Customer</label>
						<select name="" id="customerList" class="custom-select col-6" required onchange="checkCustomer()">
							<option value="" selected>Choose...</option>
							<option value="">Elisa Myers</option>
							<option value="">Hector	Nichols</option>
							<option value="">Pablo Roberson</option>
							<option value="">Essie Ross</option>
							<option value="">Elvira Poole</option>
							<option value="">Jessie Dennis</option>
							<option value="">Geoffrey Oliver</option>
							<option value="">Virginia Gray</option>
							<option value="">Neal Logan</option>
							<option value="">Gilberto Hansen</option>
							<option value="new">New Customer...</option>
						</select>
					</div>
				</div>
				<h3 class="mt-4 h4">Pool Information</h3>
				<div class="form-row">
					<div class="col-8 form-group">
						<label for="">Nickname</label>
						<input id="poolNickname" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label for="">Address</label>
						<input id="poolAddress" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-7 form-group">
						<label for="">City</label>
						<input id="poolCity" type="text" class="form-control" required>
					</div>
					<div class="col form-group">
						<label for="">State</label>
						<select name="" id="poolState" class="custom-select" required>
							<option value="" selected>Choose...</option>
							<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/states.php'; ?>
						</select>
					</div>
					<div class="col form-group">
						<label for="">Zip</label>
						<input id="poolZip" type="text" class="form-control" required/>
					</div>
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label for="">Access Code</label>
						<input type="text" class="form-control">
					</div>
					<div class="col form-group">
						<label for="">Gate Code</label>
						<input type="text" class="form-control"/>
					</div>
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label for="">Filter Type</label>
						<select name="" id="" class="custom-select" required>
							<option value="" selected>Choose...</option>
							<option value="Cartridge">Cartridge</option>
							<option value="DE">DE</option>
							<option value="Sand">Sand</option>
						</select>
					</div>
					<div class="col form-group">
						<label for="">Service Day</label>
						<select name="" id="" class="custom-select" required>
							<option value="" selected>Choose...</option>
							<option value="">Monday</option>
							<option value="">Tuesday</option>
							<option value="">Wednesday</option>
							<option value="">Thursday</option>
							<option value="">Friday</option>
						</select>
					</div>
				</div>
				<button class="btn btn-primary mt-3" type="submit">Add Pool</button>
			</form>
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>

 <script>
	 function checkCustomer() {
	 var customerList = document.getElementById('customerList');
	 var customer = customerList.options[customerList.selectedIndex].value;
		 if (customer == "new") {
		 	window.location.pathname = '/new-customer.php';
			console.log('Working');
		 } else {
			 var form = document.getElementById('newPool');
			 form.classList.remove('form-collapsed');
		 }
	 }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>