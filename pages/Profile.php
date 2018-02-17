<?php
/**
 * User: Mathias
 * Date: 2/2/2018
 * Time: 6:22 PM
 */
$state="";
$seek="";
$bio="";
//check if page has been submitted
if(!empty($_POST)) {

    $isValid=true;
    $email="";
    //check email
    if(!empty($_POST['email'])){
        $_SESSION['email']=$_POST['email'];
        $email=$_POST['email'];
    }

    //chekc state
    if(isset($_POST['state'])){
        $_SESSION['state']=$_POST['state'];
        $state=$_POST['state'];
    }

    //check bio
    if(!empty($_POST['bio'])){
        $_SESSION['bio']=$_POST['bio'];
        $bio = $_POST['bio'];
    }

    //check seek
    if(isset($_POST['seek'])){
        $_SESSION['seek']=$_POST['seek'];
        $seek=$_POST['seek'];
    }

    //set the member object
    if(isset($_SESSION['member'])){
        $member=$_SESSION['member'];
        $member->setEmail($_POST['email']);
        $member->setState($_POST['state']);
        $member->setBio($_POST['bio']);
        $member->setSeeking($_POST['seek']);
        $_SESSION['member']=$member;

    }

    //redirect to the next page based on the member object
    if ($isValid && $_SESSION['member']->isPremium()) {
        header("Location: http://mtaylor.greenriverdev.com/328/dating/pages/interests");
    } else{
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
            <li><a href="">Profile</a></li>
            <li><a href="interests">Interests</a></li>
            <li><a href="summary">Summary</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h1>Profile</h1>
    <hr>
    <form action="" method="post">
        <div class="row">

                <div class="col-6">
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="my_email@gmail.com" value="<?php echo $email; ?>"><br>

                    <div class="form-group">
                        <label for="state"><b>State</b></label>
                        <div >
                            <select class="form-control" id="state" name="state">
                                <option value="AK" <?php if($state=="AK") {echo "checked='checked'";} ?>>Alaska</option>
                                <option value="AL" <?php if($state=="AL") {echo "checked='checked'";} ?>>Alabama</option>
                                <option value="AR" <?php if($state=="AR") {echo "checked='checked'";} ?>>Arkansas</option>
                                <option value="AZ" <?php if($state=="AZ") {echo "checked='checked'";} ?>>Arizona</option>
                                <option value="CA" <?php if($state=="CA") {echo "checked='checked'";} ?>>California</option>
                                <option value="CO" <?php if($state=="CO") {echo "checked='checked'";} ?>>Colorado</option>
                                <option value="CT" <?php if($state=="CT") {echo "checked='checked'";} ?>>Connecticut</option>
                                <option value="DC" <?php if($state=="DC") {echo "checked='checked'";} ?>>District of Columbia</option>
                                <option value="DE" <?php if($state=="DE") {echo "checked='checked'";} ?>>Delaware</option>
                                <option value="FL" <?php if($state=="FL") {echo "checked='checked'";} ?>>Florida</option>
                                <option value="GA" <?php if($state=="GA") {echo "checked='checked'";} ?>>Georgia</option>
                                <option value="HI" <?php if($state=="HI") {echo "checked='checked'";} ?>>Hawaii</option>
                                <option value="IA" <?php if($state=="IA") {echo "checked='checked'";} ?>>Iowa</option>
                                <option value="ID" <?php if($state=="ID") {echo "checked='checked'";} ?>>Idaho</option>
                                <option value="IL" <?php if($state=="IL") {echo "checked='checked'";} ?>>Illinois</option>
                                <option value="IN" <?php if($state=="IN") {echo "checked='checked'";} ?>>Indiana</option>
                                <option value="KS" <?php if($state=="KS") {echo "checked='checked'";} ?>>Kansas</option>
                                <option value="KY" <?php if($state=="KY") {echo "checked='checked'";} ?>>Kentucky</option>
                                <option value="LA" <?php if($state=="LA") {echo "checked='checked'";} ?>>Louisiana</option>
                                <option value="MA" <?php if($state=="MA") {echo "checked='checked'";} ?>>Massachusetts</option>
                                <option value="MD" <?php if($state=="MD") {echo "checked='checked'";} ?>>Maryland</option>
                                <option value="ME" <?php if($state=="ME") {echo "checked='checked'";} ?>>Maine</option>
                                <option value="MI" <?php if($state=="MI") {echo "checked='checked'";} ?>>Michigan</option>
                                <option value="MN" <?php if($state=="MN") {echo "checked='checked'";} ?>>Minnesota</option>
                                <option value="MO" <?php if($state=="MO") {echo "checked='checked'";} ?>>Missouri</option>
                                <option value="MS" <?php if($state=="MS") {echo "checked='checked'";} ?>>Mississippi</option>
                                <option value="MT" <?php if($state=="MT") {echo "checked='checked'";} ?>>Montana</option>
                                <option value="NC" <?php if($state=="NC") {echo "checked='checked'";} ?>>North Carolina</option>
                                <option value="ND" <?php if($state=="ND") {echo "checked='checked'";} ?>>North Dakota</option>
                                <option value="NE" <?php if($state=="NE") {echo "checked='checked'";} ?>>Nebraska</option>
                                <option value="NH" <?php if($state=="NH") {echo "checked='checked'";} ?>>New Hampshire</option>
                                <option value="NJ" <?php if($state=="NJ") {echo "checked='checked'";} ?>>New Jersey</option>
                                <option value="NM" <?php if($state=="NM") {echo "checked='checked'";} ?>>New Mexico</option>
                                <option value="NV" <?php if($state=="NV") {echo "checked='checked'";} ?>>Nevada</option>
                                <option value="NY" <?php if($state=="NY") {echo "checked='checked'";} ?>>New York</option>
                                <option value="OH" <?php if($state=="OH") {echo "checked='checked'";} ?>>Ohio</option>
                                <option value="OK" <?php if($state=="OK") {echo "checked='checked'";} ?>>Oklahoma</option>
                                <option value="OR" <?php if($state=="OR") {echo "checked='checked'";} ?>>Oregon</option>
                                <option value="PA" <?php if($state=="PA") {echo "checked='checked'";} ?>>Pennsylvania</option>
                                <option value="PR" <?php if($state=="PR") {echo "checked='checked'";} ?>>Puerto Rico</option>
                                <option value="RI" <?php if($state=="RI") {echo "checked='checked'";} ?>>Rhode Island</option>
                                <option value="SC" <?php if($state=="SC") {echo "checked='checked'";} ?>>South Carolina</option>
                                <option value="SD" <?php if($state=="SD") {echo "checked='checked'";} ?>>South Dakota</option>
                                <option value="TN" <?php if($state=="TN") {echo "checked='checked'";} ?>>Tennessee</option>
                                <option value="TX" <?php if($state=="TX") {echo "checked='checked'";} ?>>Texas</option>
                                <option value="UT" <?php if($state=="UT") {echo "checked='checked'";} ?>>Utah</option>
                                <option value="VA" <?php if($state=="VA") {echo "checked='checked'";} ?>>Virginia</option>
                                <option value="VT" <?php if($state=="VT") {echo "checked='checked'";} ?>>Vermont</option>
                                <option value="WA" <?php if($state=="WA") {echo "checked='checked'";} ?>>Washington</option>
                                <option value="WI" <?php if($state=="WI") {echo "checked='checked'";} ?>>Wisconsin</option>
                                <option value="WV" <?php if($state=="WV") {echo "checked='checked'";} ?>>West Virginia</option>
                                <option value="WY" <?php if($state=="WY") {echo "checked='checked'";} ?>>Wyoming</option>
                            </select>
                        </div>
                    </div><!--States-->

                    <br><label><b>Seeking</b></label><br>
                    <div class="form-check  form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="seek" id="male" value="male" <?php if($seek=="male") {echo "checked='checked'";} ?>>
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="seek" id="female" value="female" <?php if($seek=="female") {echo "checked='checked'";} ?>>
                            Female
                        </label>
                    </div><br>

                </div><!--col-->
                <div class="col-6">
                    <label for="bio"><b>Biography</b></label>
                   <textarea class="form-control" name="bio"><?php echo "$bio"; ?></textarea>

                </div>

        </div><!--row-->
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
