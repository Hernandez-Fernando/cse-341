<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$major = filter_input(INPUT_POST, 'major', FILTER_SANITIZE_STRING);
$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
$continents = $_POST['continents'];

$continentsArray = array(
    ["NA", "North America"],
    ["SA", "South America"],
    ["EU", "Europe"],
    ["AS", "Asia"],
    ["AU", "Australia"],
    ["AF", "Africa"],
    ["AN", "Antartica"]
);

$majorsArray = array(
    ["CS", "Computer Science"],
    ["WDD", "Web Design and Development"],
    ["CIT", "Computer Information Technology"],
    ["CE", "Computer Engineering"]
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - W03 Team Assignment</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/header.php'; ?>
    <div class="container">
        <h1 class="mb-5">Week 3 - Team Assignment - Results</h1>
        <p><b>Name:</b> <?=$name ?></p>
        <p><b>Email:</b> <?=$email ?></p>
        <p><b>Major:</b> 
            <?php foreach($majorsArray as list($abr, $fullN)) {
                if($major == $abr) {
                    echo $fullN;
                }
            } ?>
        </p>
        <p><b>Countries Vistied:</b></p>
        <ul class="ml-4">
        <?php
        foreach ($continents as $continent) {
            $continent_clean = htmlspecialchars($continent);
            foreach($continentsArray as list($ab, $full)) {
                if($continent_clean == $ab) {
                    echo "<li>$full</li>";
                }
            }
        };
        ?>
        </ul>
        <p><b>Comments:</b> <?=$comments ?></p>
</div>
</body>
</html>