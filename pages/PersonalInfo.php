<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 5:09 PM
 */

require "models/validation.php";

//create the needed variables
$gender ="";
$Fname="";
$Lname="";
$age="";
$gender="";
$phone="";

//check if the form has been submitted
if(!empty($_POST)){

    $isValid=true;
    //check name
    if(isValidName($_POST['Fname'],$_POST['Lname'])){
        $_SESSION['Fname']= $_POST['Fname'];
        $_SESSION['Lname']= $_POST['Lname'];
        $Fname=$_SESSION['Fname'];
        $Lname=$_SESSION['Lname'];
    } else{
       echo "<div class='alert alert-danger'>
             <strong>Invalid Name</strong> Use only alphabetic characters
        </div>";
       $isValid=false;
    }

    //check age
    if(isValidAge($_POST['age'])){
        $_SESSION['age']=$_POST['age'];
        $age=$_SESSION['age'];
    }else{
        echo "<div class='alert alert-danger'>
             <strong>Invalid Age</strong> Must be 18+
        </div>";
        $isValid=false;
    }


    //check gender
    if(isset($_POST['gender'])){
        $_SESSION['gender']=$_POST['gender'];
        $gender=$_SESSION['gender'];
    }

    //check phone number
    if(isValidPhone($_POST['phone'])){
        $_SESSION['phone']=$_POST['phone'];
        $phone=$_SESSION['phone'];
    }else{
        echo "<div class='alert alert-danger'>
             <strong>Invalid Phone Number</strong> Use only numbers 
        </div>";
        $isValid=false;
    }

    //create a member object based on the choice of the user
    if(isset($_POST['premium'])){
        $memberClass= new PremiumMember($Fname,$Lname,$age,$gender,$phone);
        $isPremium=true;


    } else{
        $memberClass= new Member($Fname,$Lname,$age,$gender,$phone);
    }

    //stores the object in a session
    $_SESSION['member']=$memberClass;


    //redirect to the next page
    if($isValid){
        header("Location: http://mtaylor.greenriverdev.com/328/dating/pages/profile");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personal Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.html">MyDatingSite</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="">Personal Info</a></li>
            <li><a href="profile">Profile</a></li>
            <li><a href="interests">Interests</a></li>
            <li><a href="summary">Summary</a></li>
            <li><a href="admin">Admin Page</a></li>
        </ul>
    </div>
</nav>


    <div class="container">
        <h1>Personal Information</h1>
        <hr>

        <form action="" method="post">
        <div class="row">
            <div class="col-8">


                    <label for="Fname"><b>First Name</b></label>
                    <input type="text" class="form-control" placeholder="Sarah" name="Fname" id="Fname" value="<?php if(!empty($_SESSION)){echo $Fname;} ?>"><br>

                    <label for="Lname"><b>Last Name</b></label>
                    <input type="text" class="form-control" placeholder="Smith" name="Lname" id="Lname" value="<?php if(!empty($_SESSION)){echo $Lname;} ?>"><br>

                    <label for="age"><b>Age</b></label>
                    <input type="number" class="form-control" placeholder="30" name="age" id="age" value="<?php if(!empty($_SESSION)){echo $age;} ?>"><br>

                    <label><b>Gender</b></label><br>
                    <div class="form-check  form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php if($gender=="male") {echo "checked='checked'";} ?>>
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php if($gender=="female") {echo "checked='checked'";} ?>>
                            Female
                        </label>
                    </div><br>

                    <label for="phone"><b>Phone Number</b></label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="<?php if(!empty($_SESSION['phone'])){echo $phone;} ?>"><br>

                    <label for="premium"><b>Premium Membership</b></label><br>
                    <input type="checkbox" class="form-check-input" name="premium" id="premium" <?php if(!empty($_SESSION['member'])){ if($_SESSION['member']->isPremium()){echo "checked='checked'";}} ?>>Sign me up for a Premium Account!


            </div><!--col-->
            <div class="col-4">

                <div class="well well-lg">Note: All information is protected by our <a href="#">privacy policy</a>.
                    Profile information can only be viewed by others with your permission.</div>


            </div><!--col-->


        </div><!--row-->


            <button type="submit" class="btn btn-primary rounded float-right float-bottom">Next></button>
        </form>
    </div>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>