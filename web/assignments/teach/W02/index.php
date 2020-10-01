<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Activity - Week 2</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/header.php'; ?>
    <div class="container">
        <h1 class="mb-5">Week 2 - Team Assignment</h1>
        <div class="row">
            <div id="firstDiv" class="col-12 col-md-4 div first-div">First Div</div>
            <div class="col-12 col-md-4 div second-div">Second Div</div>
            <div id="thirdDiv" class="col-12 col-md-4 div third-div">Third Div</div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-12 col-md-4">
                <button class="btn btn-primary" onclick="alertOnClick()">Click Me</button>
            </div>
            <div class="col-12 col-md-4 form-group mt-4 mt-md-0">
                <label class="form-control-label" for="">Add Custom Color to First Div</label>
                <input id="colorInput" type="text" class="form-control">
                <button class="btn btn-secondary mt-3" onclick="changeColorJS()">Change Color with JS</button>
                <button id="jQueryButton" class="btn btn-secondary mt-3">Change Color with jQuery</button>
            </div>
            <div class="col-12 col-md-4 form-group mt-4 mt-md-0">
                <label for="" class="form-control-label d-block">Hide or Show the Third Div</label>
                <button id="toggleButton" class="btn btn-warning">Hide Now!</button>
            </div>
        </div>
    </div>
    
</body>
</html>