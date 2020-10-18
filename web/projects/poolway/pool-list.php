<?php
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once(__DIR__ . '/library/connections.php');
	require_once(__DIR__ . '/library/model.php');

	$poolList = getPoolList();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Pool List</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/header.php'; ?>
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
				<?php
				foreach ($poolList as $pool) { ?>
				<div class="row customer-row">
					<div class="name col-2"><p><?= $pool['displayname']; ?></p></div>
					<div class="address col-5"><p><?= $pool['address'] . ', ' . $pool['city'] . ', ' . $pool['state'] . ' ' . $pool['zcode']; ?></p></div>
					<?php if($pool['status'] == 'On Service') { ?>
					<div class="phone col-2"><p class="text-success">On Service</p></div>
					<?php } elseif($pool['status'] == 'Parked') { ?>
					<div class="phone col-2"><p class="text-warning">Parked</p></div>
					<?php } else { ?>
					<div class="phone col-2"><p class="text-danger">Canceled</p></div>
					<?php } ?>
					<div class="options col-3"><p><a href="pool-single.php">Reports</a> | <a href="#">Edit</a> | <a href="#" class="text-danger">Delete</a></p></div>
				</div>
					<?php }; ?>
			</div>
			
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/scripts.php'; ?>
</body>
</html>