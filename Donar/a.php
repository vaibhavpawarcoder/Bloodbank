<?php include 's.php';
include 'DB.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
    <?php

$ids = $_GET['ids'];

$email = $_SESSION['Email'];
//echo $email;
include 'DB.php';
$query = "SELECT * FROM camp WHERE ID = '$ids' ";
$result = mysqli_query($con, $query);
// mysqli_query($query);

while ($rows = mysqli_fetch_array($result)) {

?>

    <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Donar Name</label>
            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $rows['Camp_name']; ?> " name="cn" >
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">SP</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $rows['sponsor_name']; ?> " name="sp" >
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $rows['Email']; ?> " name="e" >
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>

    <?php

    $email = $_SESSION['Email'];
    //echo $email;
    include 'DB.php';
    $query = "SELECT * FROM donar_registration WHERE Email = '$email' ";
    $result = mysqli_query($con, $query);
    // mysqli_query($query);

    while ($row = mysqli_fetch_array($result)) {
    ?>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Donar Name</label>
            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['First_Name']; ?>  <?php echo $row['Last_Name']; ?>" name="donarname" >
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $row['Email']; ?> " name="donaremail" >
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['Mobile']; ?> " name="donarmobile" >
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Bloodgroup</label>
            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['Bloodgroup']; ?> " name="donarblood" >
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Camp Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" coloum="10" rows="3" name="donaradd" ><?php echo $row['City']; ?>,<?php echo $row['State']; ?>,<?php echo $row['District']; ?>,<?php echo $row['zip']; ?></textarea>
        </div>
        </div>


        <div class="col-11">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-11">
            <button class="btn btn-primary" name="update">Donate</button>
        </div>
        </form>
        </div>
    <?php
    if(isset($_POST['update'])){
        $name=$_POST['donarname'];
        $email=$_POST['donaremail'];
        $mobile=$_POST['donarmobile'];

        $blood=$_POST['donarblood'];
        $add=$_POST['donaradd'];

        $cn=$_POST['cn'];
        $sp=$_POST['sp'];
        $e=$_POST['e'];

        $inserquery="INSERT INTO demo ( name, email, mobile, blood, address, camp, sp, campemail)
         VALUES ('$name','$email','$mobile','$blood','$add','$cn','$sp','$e')";

        $query=mysqli_query($con, $inserquery);

        if ($query) {
            ?>
                    <script>
                        alert("Update Data Successlly");
                    </script>
                <?php       
                } else {
                ?>
                    <script>
                        alert("data insert Un-Successlly");
                    </script>
            <?php

                }
    }

    }
}

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>