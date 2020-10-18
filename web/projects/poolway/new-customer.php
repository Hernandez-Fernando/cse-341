<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>New Customer</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/header.php'; ?>
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
			<h2 class="pl-3 mb-3">New Customer Information</h2>
			<form action="library/controller.php" method="post" id="newCustomer" class="col-10">
				<div class="form-row">
					<div class="col form-group">
						<label for="">First Name</label>
						<input id="firstName" name="firstName" type="text" class="form-control" required>
					</div>
					<div class="col form-group">
						<label for="">Last Name</label>
						<input id="lastName" name="lastName" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label for="">Phone Number</label>
						<input type="tel" name="phone" class="form-control" required>
					</div>
					<div class="col form-group">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label for="">Address</label>
						<input id="customerAddress" name="customerAddress" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-7 form-group">
						<label for="">City</label>
						<input id="customerCity" name="customerCity" type="text" class="form-control" required>
					</div>
					<div class="col form-group">
						<label for="">State</label>
						<select name="customerState" id="customerState" class="custom-select" required>
							<option value="" selected>Choose...</option>
							<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/states.php'; ?>
						</select>
					</div>
					<div class="col form-group">
						<label for="">Zip</label>
						<input id="customerZipcode" name="customerZipcode" type="text" class="form-control" required/>
					</div>
				</div>
				<div class="form-row">
					<div class="col form-group ml-4">
						<input type="checkbox" class="form-check-input" id="poolCheckbox" onclick="checkAddress()">
						<label for="" class="form-check-label">Register pool with same address</label>
					</div>
				</div>
				<h3 class="mt-4 h4">Pool Information</h3>
				<div class="form-row">
					<div class="col-7 form-group">
						<label for="">Display Name</label>
						<input id="poolDisplayName" type="text" class="form-control" required>
					</div>
					<div class="col form-group ml-4 mt-4">
						<input type="checkbox" class="form-check-input" id="poolNicknameBox" onclick="checkNickname()">
						<label for="" class="form-check-label">Same as Owner</label>
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
							<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/states.php'; ?>
						</select>
					</div>
					<div class="col form-group">
						<label for="">Zip</label>
						<input id="poolZip" type="text" class="form-control" required/>
					</div>
				</div>
				<!--
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
				</div> -->
				<button class="btn btn-primary mt-3" type="submit">Register Customer</button>
				<input type="hidden" name="action" value="newCustomer">
			</form>
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/footer.php'; ?>

<script>
	function checkAddress() {
		var checkbox = document.getElementById('poolCheckbox');
		var poolAddress = document.getElementById('poolAddress');
		var poolCity = document.getElementById('poolCity');
		var poolState = document.getElementById('poolState');
		var poolZip = document.getElementById('poolZip');
		
		if(checkbox.checked == true) {
			poolAddress.value = document.getElementById('customerAddress').value;
			poolCity.value = document.getElementById('customerCity').value;
			poolState.value = document.getElementById('customerState').value;
			poolZip.value = document.getElementById('customerZipcode').value;
			
			// Put ReadOnly Attribute to Pool Inputs
			poolAddress.readOnly = true;
			poolCity.readOnly = true; 
			poolState.disabled = true; 
			poolZip.readOnly = true;
			
		} else {
			poolAddress.value = "";
			poolCity.value = "";
			poolState.value = "";
			poolZip.value = "";
			
			// Remove ReadOnly Attribute to Pool Inputs
			poolAddress.readOnly = false;
			poolCity.readOnly = false; 
			poolState.disabled = false; 
			poolZip.readOnly = false;
		}
	}
	
	function checkNickname() {
		var checkbox = document.getElementById('poolNicknameBox');
		var poolNickname = document.getElementById('poolDisplayName');
		
		if(checkbox.checked == true) {
			var firstName = document.getElementById('firstName').value;
			var lastName = document.getElementById('lastName').value;
			var fullname = firstName + " " + lastName;
			poolNickname.value = fullname;
			
			poolNickname.readOnly = true;
		} else {
			poolNickname.value = "";
			
			poolNickname.readOnly = false;
		}
	}
</script>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/scripts.php'; ?>
</body>
</html>