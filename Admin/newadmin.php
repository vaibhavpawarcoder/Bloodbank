<?php include 's.php';
include 'DB.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Blood Bank:Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 490px">
                            <div class="row justify-content-evenly">
                                <div class="container mt-5">
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-9">
                                            <h1 class="text-center text-primary">Creat New Admin</h1>
                                            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                                <div class="col-md-4">
                                                    <label for="validationDefault01" class="form-label">First name</label>
                                                    <input type="text" class="form-control" name="first_name" id="validationDefault01" placeholder="First Name" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault02" class="form-label">Last name</label>
                                                    <input type="text" class="form-control" name="last_name" id="validationDefault02" placeholder="Last Name" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">Mobile</label>
                                                    <input type="tel" class="form-control" name="mobile" id="validationDefault03" placeholder="Mobile 91-xxxx-xxx-xxx" required>
                                                </div>


                                                <!-- SEcond section -->
                                                <div class="col-md-4">
                                                    <label for="validationDefault05" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" id="validationDefault05" placeholder="Email Id" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" id="validationDefault03" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault04" class="form-label">Blood Group</label>
                                                    <select class="form-select" name="bloodgroup" id="validationDefault04" required>
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>


                                                <!-- Third section -->
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">City</label>
                                                    <input type="text" class="form-control" name="city" id="validationDefault03" placeholder="City" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault04" class="form-label">State</label>
                                                    <select class="form-select" name="state" id="validationDefault04" required>
                                                        <option selected disabled value="">Choose State...</option>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chandigarh">Chandigarh</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                        <option value="Puducherry">Puducherry</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Odisha">Odisha</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault05" class="form-label">District</label>
                                                    <input type="text" class="form-control" name="district" id="validationDefault05" placeholder="District" required>
                                                </div>

                                                <!-- Four section -->
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">Zip</label>
                                                    <input type="text" class="form-control" name="zip" id="validationDefault03" placeholder="Zip / Pin-Code" required>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="formFile" class="form-label">Default file input example</label>
                                                    <input class="form-control" name="file" type="file" id="formFile">
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                        <label class="form-check-label" for="invalidCheck2">
                                                            Agree to terms and conditions
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <button class="btn btn-danger" name="register" type="submit">Submit form</button>
                                                </div>
                                                <div class="col-5">
                                                    <span>
                                                        Already Have Account , Login hear...
                                                        <a href="login.php" class="btn bg-danger text-white">Login</a>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                include 'DB.php';

                                if (isset($_POST['register'])) {
                                    $First_name = mysqli_real_escape_string($con, $_POST['first_name']);
                                    $Last_name = mysqli_real_escape_string($con, $_POST['last_name']);
                                    $Mobile = mysqli_real_escape_string($con, $_POST['mobile']);

                                    $Email = mysqli_real_escape_string($con, $_POST['email']);
                                    $Password = mysqli_real_escape_string($con, $_POST['password']);
                                    $Bloodgroup = mysqli_real_escape_string($con, $_POST['bloodgroup']);

                                    $City = mysqli_real_escape_string($con, $_POST['city']);
                                    $State = mysqli_real_escape_string($con, $_POST['state']);
                                    $District = mysqli_real_escape_string($con, $_POST['district']);

                                    $Zip = mysqli_real_escape_string($con, $_POST['zip']);
                                    $File = $_FILES['file'];

                                    $filename = $File['name'];
                                    $fileerror = $File['error'];
                                    $filetemp = $File['tmp_name'];

                                    $fileext = explode('.', $filename);
                                    $filechk = strtolower(end($fileext));

                                    $fileextstore = array('png', 'jpg', 'jpeg');

                                    if (in_array($filechk, $fileextstore)) {
                                        $destination = 'Upload/' . $filename;
                                        move_uploaded_file($filetemp, $destination);

                                        $user = 'Admin/Admin/Upload/' . $filename;
                                        move_uploaded_file($filetemp, $user);


                                        //password Safty
                                        $Password_safe = password_hash($Password, PASSWORD_BCRYPT);

                                        //Email varify
                                        $emailquery = "select * from admin where email='$Email'";
                                        $emailquerysolve = mysqli_query($con, $emailquery);

                                        $emailcount = mysqli_num_rows($emailquerysolve);

                                        if ($emailcount > 0) {
                                ?>
                                            <script>
                                                alert("Email Alredy Exit");
                                            </script>
                                            <?php
                                        } else {

                                            $insertquery = "INSERT INTO `admin`( First_Name, Last_Name, Mobile, Email, Password, Bloodgroup, City, State, District,Zip,Profile) 
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
                                    }
                                }
                                ?>
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