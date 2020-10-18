<?php
try
		{
		  $dbUrl = getenv('DATABASE_URL');
		
		  $dbOpts = parse_url($dbUrl);
		
		  $dbHost = $dbOpts["host"];
		  $dbPort = $dbOpts["port"];
		  $dbUser = $dbOpts["user"];
		  $dbPassword = $dbOpts["pass"];
		  $dbName = ltrim($dbOpts["path"],'/');
		
		  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		
		  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $ex)
		{
		  echo 'Error!: ' . $ex->getMessage();
		  die();
	  }



function getCustomerList() {
	//$db = dbConnection();
	//$sql = 'SELECT customerId, firstName, lastName, address, city, state, zcode, phone FROM customers ORDER BY firstName ASC';
	$stmt = $db->prepare('SELECT customerId, firstName, lastName, address, city, state, zcode, phone FROM customers ORDER BY firstName ASC');
	$stmt->execute();
	$customerList = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->closeCursor();
	return $customerList;
}

function registerCustomer($firstName, $lastName, $address, $city, $state, $zcode, $phone, $email) {
	$db = dbConnection();
	$sql = 'INSERT INTO customers (firstName, lastName, address, city, state, zcode, phone, email) VALUES (:firstName, :lastName, :address, :city, :state, :zcode, :phone, :email)';
	$stmt = $db->prepare($sql);
	
	$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
	$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->bindValue(':city', $city, PDO::PARAM_STR);
    $stmt->bindValue(':state', $state, PDO::PARAM_STR);
    $stmt->bindValue(':zcode', $zcode, PDO::PARAM_STR);
    $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
	
	$stmt->execute();
	
	$rowsChanged = $stmt->rowCount();
	
	//Close interaction
	$stmt->closeCursor();
	
	//Show success indication
	return $rowsChanged;
}

 