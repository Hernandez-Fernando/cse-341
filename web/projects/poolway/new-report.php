<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>New Report For POOL NICKNAME</title>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
			<h2 class="pl-2 ml-2 mb-2 h3">Service Report for Elisa Mayers Pool - <span class="text-muted h5">Jan 20, 2020</span></h2>
			<form action="" id="newPool" class="col-12 pool-form">
			<div class="form-row">
				<div class="col"><p class="text-muted">123 N First St, Mesa, AZ 85201</p></div>
			</div>
			<div class="form-row">
					<div class="col form-group">
						<p>Technician: Fernando Hernandez</p>
						<input type="hidden" value="TECHNICIAN ID">
					</div>
					<div class="col form-group row">
						<label class="col-form-label"for="">Arrival Time</label>
						<div class="col-6"><input type="time" name="arrival" class="form-control"></div>
					</div>
					<div class="col form-group row">
						<label class="col-form-label"for="">Ending Time</label>
						<div class="col-6"><input type="time" name="end" class="form-control"></div>
					</div>
			</div>
			
			<h3 class="h6 mt-3">Pool Readings</h3>
			<div class="form-row ml-2">
					<div class="col form-group row">
						<label class="col-form-label" for="">Chlor</label>
						<div class="col-6"><input type="number" name="chlor" class="form-control"></div>
					</div>
					<div class="col form-group row">
						<label class="col-form-label"for="">pH</label>
						<div class="col-6"><input type="number" name="ph" class="form-control"></div>
					</div>
					<div class="col-3 form-group row">
						<label class="col-form-label"for="">Ha</label>
						<div class="col-6"><input type="number" name="hardness" class="form-control"></div>
					</div>
					<div class="col form-group row">
						<label class="col-form-label"for="">C. Acid</label>
						<div class="col-6"><input type="number" name="acid" class="form-control"></div>
					</div>
					<div class="col form-group row">
						<label class="col-form-label"for="">Filter Psi</label>
						<div class="col-6"><input type="number" name="psi" class="form-control"></div>
					</div>
			</div>
			
			
			<div class="row mt-3">
				<div class="col-5">
					<h3 class="h6 mt-4">Service Checklist</h3>
					 <div class="form-group row">
					    <div class="col">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox">
					        <label class="form-check-label" for="">Brush</label>
					      </div>
					    </div>
						<div class="col">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox">
					        <label class="form-check-label" for="">Baskets Clean</label>
					      </div>
					  </div>
					</div>
					<div class="form-group row">
					    <div class="col">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox">
					        <label class="form-check-label" for="">Vacuum</label>
					      </div>
					    </div>
						<div class="col">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox">
					        <label class="form-check-label" for="">Chemicals Added</label>
					      </div>
					  </div>
				  </div>
				  <div class="form-group row">
					    <div class="col">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox">
					        <label class="form-check-label" for="">Cleaner Basket</label>
					      </div>
					    </div>
						<div class="col">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox">
					        <label class="form-check-label" for="">Backwash</label>
					      </div>
					  </div>
				  </div>
				</div>
				<div class="col-5 offset-1">
					<h3 class="h6 mt-4">Pool Equipment Check</h3>
					<div class="form-group">
						<div class="form-check">
						        <input class="form-check-input" type="checkbox">
						        <label class="form-check-label" for="">Pump</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
						        <input class="form-check-input" type="checkbox">
						        <label class="form-check-label" for="">Filter</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
						        <input class="form-check-input" type="checkbox">
						        <label class="form-check-label" for="">Cleaner</label>
						</div>
					</div>
				</div>
			</div>
			<div class="form-row ml-2 mt-5">
					<div class="col form-group row">
						<label class="col-form-label" for="">Notes</label>
						<div class="col-6"><textarea name="notes" cols="30" rows="6" class="form-control"></textarea></div>
					</div>
				</div>
			<div class="form-row mt-4">
				<div class="col"><p class="text-center"><a href="#" class="btn btn-primary">Save</a><a href="" class="text-danger ml-3">Cancel</a></p></div>
			</div>
			
			</form>
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/scripts.php'; ?>
</body>
</html>