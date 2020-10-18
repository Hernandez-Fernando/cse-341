<?php
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require_once(__DIR__ . '/library/connections.php');
	require_once(__DIR__ . '/library/model.php');
	//require_once 'library/functions.php';

	$customerList = getCustomerList($db);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Customer List</title>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/head.php'; ?>
</head>

<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/header.php'; ?>
	<section class="main">
		<div class="dashboard container py-4 pb-5">
		<?php if(isset($message)) {echo $message;}; ?>
			<h2 class="pl-3 mb-3">Customer List</h2>
			
			<div class="customer-list container">
				<div class="row table-head">
					<div class="name col-3"><p>Name</p></div>
					<div class="address col-4"><p>Address</p></div>
					<div class="phone col-2"><p>Phone</p></div>
					<div class="options col-3"><p>Options</p></div>
				</div>
				<?php
				foreach ($customerList as $customer) { ?>
				<div class="row customer-row"><?= implode(" ",$customer); ?>
					<div class="name col-3"><p><?= $customer['firstName'] . ' ' . $customer['lastName']; ?></p></div>
					<div class="address col-4"><p><?= $customer['address'] . ', ' . $customer['city'] . ', ' . $customer['state'] . ' ' . $customer['zcode']; ?></p></div>
					<div class="phone col-2"><p><?= $customer['phone']; ?></p></div>
					<div class="options col-3"><p><a href="customer-single.php?<?=$customer['customerId'];?>">Profile</a> | <a href="#">Edit</a></p></div>
				</div>
				<?php }; ?>
			</div>
			
		</div>
	</section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/footer.php'; ?>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/projects/poolway/common/scripts.php'; ?>
</body>
</html>