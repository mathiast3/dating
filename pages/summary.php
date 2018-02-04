<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 7:46 PM
 */
$fname=$_SESSION['Fname'];
$lname=$_SESSION['Lname'];
$gender=$_SESSION['gender'];
$age=$_SESSION['age'];
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];
$state=$_SESSION['state'];
$seek=$_SESSION['seek'];
$indoor=$_SESSION['indoor'];
$outdoor=$_SESSION['outdoor'];
$bio = $_SESSION['bio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyDatingSite</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="summary.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <table class="table">
                <tr>
                    <td>Name: <?php  echo "$fname $lname";?></td>
                </tr>
                <tr>
                    <td>Gender: <?php  echo "$gender";?></td>
                </tr>
                <tr>
                    <td>Age: <?php  echo "$age";?></td>
                </tr>
                <tr>
                    <td>Phone: <?php  echo "$phone";?></td>
                </tr>
                <tr>
                    <td>Email: <?php  echo "$email";?></td>
                </tr>
                <tr>
                    <td>State: <?php  echo "$state";?></td>
                </tr>
                <tr>
                    <td>Seeking: <?php  echo "$seek";?></td>
                </tr>
                <tr>
                    <td>
                <?php
                    foreach ($indoor as $value){
                        echo "$value";
                    }
                ?>
                <?php
                    foreach ($outdoor as $value){
                        echo "$value";
                    }
                ?>
                    </td>
                </tr>


            </table>


            <a class="btn btn-primary rounded float-right" href="#">Contact Me!</a>

        </div>
        <div class="col-6">
            <img src="../images/download.jpg" class="img-fluid rounded mt-4"><br>

            <legend>Biography</legend>
            <?php echo "<p>$bio</p>"; ?>

        </div>
    </div>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
