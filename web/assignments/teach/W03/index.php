<?php
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
    <title>W03 - Team Assignment</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/header.php'; ?>
    <div class="container">
        <h1 class="mb-5">Week 2 - Team Assignment - Form</h1>
    
    <form action="display.php" method="post">
        <div class="form-group row">
            <label for="name" class="col-form-label col-3 col-md-2">Name</label>
            <div class="col-6"><input class="form-control" type="text" name="name"></div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-form-label col-3 col-md-2">Email</label>
            <div class="col-6"><input class="form-control" type="email" name="email"></div>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-3 col-md-2 pt-0">Major</legend>
            <div class="col-8">
            <?php foreach($majorsArray as list($code, $fullN)) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="major" id="<?php echo $code; ?>" value="<?php echo $code; ?>">
                    <label class="form-check-label" for="<?php echo $code; ?>">
                        <?php echo $fullN; ?>
                    </label>
                </div>
                <?php  }; ?>
            </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-4 col-md-2">Continents Visited</div>
            <div class="col-8">
                <?php foreach($continentsArray as list($ab, $full)) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="<?php echo $ab; ?>" name="continents[]" value="<?php echo $ab; ?>">
                    <label class="form-check-label" for="<?php echo $ab; ?>"><?php echo $full; ?></label>
                </div>
              <?php  }; ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="form-label col-4 col-md-2" for="comments">Comments</label>
            <div class="col-8"><textarea class="form-control" id="comments" rows="3" name="comments"></textarea></div>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit Form" id="submit" />
    </form>
</div>
</body>
</html>