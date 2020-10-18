<?php

function getCustomerList() {
	$db = dbConnection();
	$sql = 'SELECT customerId, firstName, lastName, address, city, state, zcode, phone FROM customers ORDER BY firstName ASC';
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$customerList = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->closeCursor();
	return $customerList;
}

function getCustomerListShort() {
	$db = dbConnection();
	$sql = 'SELECT customerId, firstName, lastName FROM customers ORDER BY firstName ASC';
	$stmt = $db->prepare($sql);
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

function getNewCustomerId($email) {
    $db = dbConnection();
	$sql = 'SELECT customerId FROM customers WHERE email = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
	$stmt->execute();
	$customerId = $stmt->fetch();
	$stmt->closeCursor();
	return $customerId;
}

function getPoolList() {
	$db = dbConnection();
	$sql = 'SELECT poolId, displayName, address, city, state, zcode, status FROM pools ORDER BY displayName ASC';
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$poolList = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->closeCursor();
	return $poolList;
}

function registerPool($customerId, $displayName, $address, $city, $state, $zcode) {
    $status = "On Service";
    $db = dbConnection();
	$sql = 'INSERT INTO pools (customerId, displayName, address, city, state, zcode, status) VALUES (:customerId, :displayName, :address, :city, :state, :zcode, :status)';
	$stmt = $db->prepare($sql);
	
    $stmt->bindValue(':customerId', $customerId, PDO::PARAM_INT);
    $stmt->bindValue(':displayName', $displayName, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->bindValue(':city', $city, PDO::PARAM_STR);
    $stmt->bindValue(':state', $state, PDO::PARAM_STR);
    $stmt->bindValue(':zcode', $zcode, PDO::PARAM_STR);
    $stmt->bindValue(':status', $status, PDO::PARAM_STR);
	
	$stmt->execute();
	
	$rowsChanged = $stmt->rowCount();
	
	//Close interaction
	$stmt->closeCursor();
	
	//Show success indication
	return $rowsChanged;
}

 