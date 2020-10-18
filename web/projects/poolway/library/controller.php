<?php
// Error Bugging File

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
require_once 'connections.php';
require_once 'model.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'newCustomer':
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $customerAddress = filter_input(INPUT_POST, 'customerAddress', FILTER_SANITIZE_STRING);
        $customerCity = filter_input(INPUT_POST, 'customerCity', FILTER_SANITIZE_STRING);
        $customerState = filter_input(INPUT_POST, 'customerState', FILTER_SANITIZE_STRING);
        $customerZipcode = filter_input(INPUT_POST, 'customerZipcode', FILTER_SANITIZE_STRING);
        

        $regOutcome = registerCustomer($firstName, $lastName, $customerAddress, $customerCity, $customerState, $customerZipcode, $phone, $email);
        if($regOutcome ===1) {
            $message = "<div class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>User Created!</h4>
            <p>The user has been created successfuly.</p>
            </div>";
            header('Location: ../customer-list.php');
        } else {
            $message = "<div class='alert alert-danger' role='alert'>
            <h4 class='alert-heading'>User was not Created!</h4>
            <p>There's an error and the customer cannot be register at the moment.</p>
            </div>";
            header('Location: ../new-customer.php');
        }
    break;
}
