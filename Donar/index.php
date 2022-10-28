<?php include 's.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Blood Bank:Dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include 'nav.html'; ?>



        <!-- Page Content  -->
        <div id="content">

            <?php include 'topnavbar.php' ?>


            <div class="main-content">

                <?php include 'mainheader.php' ?>


                <div class="row ">
                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="row justify-content-evenly">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card pb-5" style="min-height: 400px">
                                        <div class="row justify-content-evenly">
                                            <!-- <?php include 'session.php'; ?> -->
                                            <div class="col-md-10">
                                                <?php

                                                $email = $_SESSION['Email'];
                                                //echo $email;
                                                include 'DB.php';
                                                $query = "SELECT * FROM donar_registration WHERE Email = '$email' ";
                                                $result = mysqli_query($con, $query);
                                                // mysqli_query($query);

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <form class="row g-3 needs-validation" method="POST" novalidate>
                                                        <div class="col-md-12 ">
                                                            <label for="validationCustom01" class="form-label">ID</label>
                                                            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['ID']; ?> " name="ID" disabled>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom01" class="form-label">First name</label>
                                                            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['First_Name']; ?> " name="First_Name" disabled>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom02" class="form-label">Last name</label>
                                                            <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Last_Name']; ?> " name="Last_Name" disabled>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustomUsername" class="form-label">Email</label>
                                                            <div class="input-group has-validation">
                                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $row['Email']; ?> " name="Email" disabled>
                                                                <div class="invalid-feedback">
                                                                    Please choose a username.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="validationCustom03" class="form-label">Mobile</label>
                                                            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['Mobile']; ?> " name="Mobile" disabled>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom03" class="form-label">Bloodgroup</label>
                                                            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['Bloodgroup']; ?> " name="Bloodgroup" disabled>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="validationCustom03" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['City']; ?> " name="City" disabled>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom03" class="form-label">State</label>
                                                            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['State']; ?> " name="State" disabled>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="validationCustom03" class="form-label">District</label>
                                                            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['District']; ?> " name="District" disabled>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="validationCustom03" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['zip']; ?> " name="Zip" disabled>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>


                                                        <div class="col-12">
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
                                                        <div class="col-12">
                                                            <!-- <a href="update.php?upid=" class="btn btn-primary" type="submit" name="update">Change</a href="#?upid=<?php echo $row['ID']; ?>"> -->
                                                            <a href="setting.php?ids=<?php echo  $row['ID']; ?>" class="btn btn-primary" name="update"> Upadte</a>
                                                        </div>
                                                    </form>
                                            </div>
                                        <?php
                                                }


                                        ?>

                                        <?php
                                        include 'DB.php';

                                        if (isset($_POST['register'])) {
                                            $First_name = mysqli_real_escape_string($con, $_POST['First_Name']);
                                            $Last_name = mysqli_real_escape_string($con, $_POST['Last_Name']);
                                            $Email = mysqli_real_escape_string($con, $_POST['Email']);

                                            $Mobile = mysqli_real_escape_string($con, $_POST['Mobile']);
                                            $Bloodgroup = mysqli_real_escape_string($con, $_POST['Bloodgroup']);

                                            $City = mysqli_real_escape_string($con, $_POST['City']);
                                            $State = mysqli_real_escape_string($con, $_POST['State']);
                                            $District = mysqli_real_escape_string($con, $_POST['District']);

                                            $Zip = mysqli_real_escape_string($con, $_POST['Zip']);



                                            $insertquery = "INSERT INTO `donar_registration`( First_Name, Last_Name, Mobile, Email, Password, Bloodgroup, City, State, District,Zip,Profile) 
                                VALUES ('$First_name','$Last_name','$Mobile','$Email','$Password_safe','$Bloodgroup','$City','$State','$District','$Zip','$destination')";

                                            $result = mysqli_query($con, $insertquery);

                                            if ($result) {
                                        ?>
                                                <script>
                                                    alert("data insert Successlly");
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
                                        ?>


                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 d-none d-lg-block ">
                        <div class="card" style="min-height: 485px">
                            <div class="row justify-content-around">
                                <div class="col-md-8 mt-5">
                                    <?php include 'session.php';  ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php include 'footer.html' ?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>