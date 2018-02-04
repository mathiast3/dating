<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 6:42 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);




require "models/validation.php";

$indoorChoices="";
$outdoorChoices="";

if(!empty($_POST)) {
    $isValid=true;
    if(isset($_POST['indoor'])) {
        if (isValidIndoor($_POST['indoor'])) {
            $_SESSION['indoor'] = $_POST['indoor'];
            $indoor=$_SESSION['indoor'];
        } else {
            echo "<div class='alert alert-danger'>
                 <strong>Invalid Indoor</strong> Use only listed options
            </div>";
            $isValid = false;
        }
    }

    if(isset($_POST['outdoor'])) {
        if (isValidOutdoor($_POST['outdoor'])) {
            $_SESSION['outdoor'] = $_POST['outdoor'];
            $outdoor=$_SESSION['outdoor'];
        } else {
            echo "<div class='alert alert-danger'>
                 <strong>Invalid Outdoor</strong> Use only listed options
            </div>";
            $isValid = false;
        }
    }

    if($isValid){
        header("Location: http://mtaylor.greenriverdev.com/328/dating/pages/summary");
    }
}
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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.html">MyDatingSite</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="personal">Personal Info</a></li>
            <li><a href="profile">Profile</a></li>
            <li><a href="">Interests</a></li>
            <li><a href="summary">Summary</a></li>
        </ul>
    </div>
</nav>

    <div class="container">
        <h1>Interests</h1>
        <hr>
        <form action="" method="post">
        <label><b>In-door Interests</b></label>
        <div class='checkbox-inline'>


        <?php
        $indoor = array("tv","movies","cooking","board games","puzzles","reading","playing cards","video games");


            foreach ($indoor as $value){
                //$_POST['indoor']=$value;
                echo"
                        <input  type='checkbox' id='$value' value='$value' name='indoor[]' if(in_array($value,$indoorChoices)) {echo \"checked='checked'\";} >
                        <label for='$value'>$value</label>&nbsp;
                     ";

            }
        ?>
        </div>

        <label><b>Out-door Interests</b></label>
        <div class='checkbox-inline myCheck'>
            <?php
            $outdoor = array("hiking","biking","swimming","collecting","walking","climbing");

            foreach ($outdoor as $value){
                echo"
                        <input type='checkbox' id='$value' value='$value' name='outdoor[]' if(in_array($value,$outdoorChoices)) {echo \"checked = 'checked'\";}>
                        <label for='$value'>$value</label>&nbsp;
                     ";

            }
            ?>
        </div>


        <button type="submit" class="btn btn-primary rounded float-right float-bottom">Next></button>
        </form>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
