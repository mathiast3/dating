<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 6:42 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

$indoor = array("tv","movies","cooking","board games","puzzles","reading","playing cards","video games");
$outdoor = array("hiking","biking","swimming","collecting","walking","climbing");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyDatingSite</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/Interests.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Interests</h1>
        <hr>

        <label><b>In-door Interests</b></label>
        <div class='checkbox-inline myCheck'>
        <?php

            foreach ($indoor as $value){
                echo"
                        <input type='checkbox' id='$value' value='$value'>
                        <label for='$value'>$value</label>&nbsp;
                     ";

            }
        ?>
        </div>

        <label><b>Out-door Interests</b></label>
        <div class='checkbox-inline myCheck'>
            <?php

            foreach ($outdoor as $value){
                echo"
                        <input type='checkbox' id='$value' value='$value'>
                        <label for='$value'>$value</label>&nbsp;
                     ";

            }
            ?>
        </div>


        <a class="btn btn-primary rounded float-right float-bottom" href="/328/dating/pages/summary">Next></a>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
