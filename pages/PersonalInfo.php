<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 5:09 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personal Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Personal Information</h1>
        <hr>

        <div class="row">
            <div class="col-8">
                <form action="" method="post">

                    <label for="Fname"><b>First Name</b></label>
                    <input type="text" class="form-control" placeholder="Sarah" id="Fname"><br>

                    <label for="Lname"><b>Last Name</b></label>
                    <input type="text" class="form-control" placeholder="Smith" id="Lname"><br>

                    <label for="age"><b>Age</b></label>
                    <input type="number" class="form-control" placeholder="30" id="age"><br>

                    <label><b>Gender</b></label><br>
                    <div class="form-check  form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                            Female
                        </label>
                    </div><br>

                    <label for="phone"><b>Phone Number</b></label>
                    <input type="tel" class="form-control" placeholder="222-222-2222" id="phone"><br>
                </form>
            </div><!--col-->
            <div class="col-4">

                <div class="well well-lg">Note: All information is protected by our <a href="#">privacy policy</a>. Profile information can only be viewed by others with your permission.</div>

                <a class="btn btn-primary rounded align-bottom" href="/328/dating/pages/personal">Next</a>
            </div><!--col-->


        </div><!--row-->
    </div>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>