<?php

$email = $_SESSION['Email'];
//echo $email;
include 'DB.php';
$query = "SELECT * FROM donar_registration WHERE Email = '$email' ";
$result = mysqli_query($con,$query);
// mysqli_query($query);

while($row=mysqli_fetch_array($result)){
?> 
<img src="<?php echo $row['Profile'];  ?>" alt="" class="" srcset="">
<span> <p>Name : <?php echo $row['First_Name']; ?>  <?php echo $row['Last_Name']; ?></p> </span>
<span> <p>Email : <?php echo $row['Email']; ?> </p> </span>
<span> <p>Mobile : <?php echo $row['Mobile']; ?> </p> </span>
<span> <p>Bloodgroup : <?php echo $row['Bloodgroup']; ?> </p> </span>
<span> <p>Address : <?php echo $row['City']; ?>, <?php echo $row['State']; ?>, <?php echo $row['District']; ?>, <?php echo $row['zip']; ?></p> </span>
<?php
}
?>