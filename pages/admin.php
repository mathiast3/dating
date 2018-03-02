<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/2/2018
 * Time: 2:53 PM
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

require "../config.php";
require "../db-connect.php";
$dbh=connect();

$sql = "SELECT * FROM Member";
$statement = $dbh->prepare($sql);
$statement->execute();
$result=$statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/styles.css" type="text/css">

    <title>Admin Page</title>
</head>
<body>
<table border="0">
<?php

echo "<tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Email</th>
        <th>State</th>
        <th>Gender</th>
        <th>Seeking</th>
        <th>Premium</th>
        <th>Interests</th>
       

      </tr>";


foreach($result as $row) {

    $premium=$row['premium'];
    $checked="";

    //chechks if premium
    if($premium==1){
        $checked='checked';
    }

    echo $premium;
    echo"<tr>";
    echo "<td>".$row['member_id']."</td>";
    echo "<td>".$row['fname'].$row['lname']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['state']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['seeking']."</td>";
    echo "<td><input type='checkbox' $checked ></td>";
    echo "<td>".$row['interests']."</td>";
    echo "</tr>";
}


?>

</table>


</body>
</html>
