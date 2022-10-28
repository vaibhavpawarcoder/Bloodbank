<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOOD BANK: About </title>
    <link rel="icon" type="image/x-icon" href="Img/back3.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark  ">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <p class="text-logo text-white h1">Blood Bank</p>
            </a>
            <button class="navbar-toggler bg-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 border-top border-white">
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white active text-danger link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="pation.php">Pation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="donar.php">Donar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white bg-white text-danger mem text-center nav-btn" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <div class="row justify-content-around text-center">
            <div class="col-md-10">
                <p><span class="h3 text-danger">Blood Donation </span>Creat Account For Donation</p>

                <span>
                    Already Have Account , Login hear...
                    <a href="login.php" class="btn bg-danger text-white">Login</a>
                </span>
            </div>

        </div>
    </div>

    <!-- Donat- Form -->

    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-md-9">
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

    <!-- php for donar-registration -->

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
            $destination = 'Donar/Upload/' . $filename;
            move_uploaded_file($filetemp, $destination);

            $user = 'Donar/Donar/Upload/' . $filename;
            move_uploaded_file($filetemp, $user);


            //password Safty
            $Password_safe = password_hash($Password, PASSWORD_BCRYPT);

            //Email varify
            $emailquery = "select * from donar_registration where email='$Email'";
            $emailquerysolve = mysqli_query($con, $emailquery);

            $emailcount = mysqli_num_rows($emailquerysolve);

            if ($emailcount > 0) {
    ?>
                <script>
                    alert("Email Alredy Exit");
                </script>
                <?php
            } else {

                $insertquery = "INSERT INTO `donar_registration`( First_Name, Last_Name, Mobile, Email, Password, Bloodgroup, City, State, District,Zip,Profile) 
        VALUES ('$First_name','$Last_name','$Mobile','$Email','$Password_safe','$Bloodgroup','$City','$State','$District','$Zip','$destination')";

                $result = mysqli_query($con, $insertquery);

                if ($result) {
                ?>
                    <!-- <script>
                        alert("data insert Successlly"); -->
                        <?php
                        echo "<script>
                        window.location.href='admin/ahm/panel';
                        alert('There are no fields to generate a report');
                        </script>";
                        ?>
                    <!-- </script> -->
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




    <!-- Blood bank Today -->
    <div class="container-fluid">
        <div class="row justify-content-evenly text-center">
            <div class="col-10">
                <h2 class="mt-5 mb-3 text-danger">BLOOD BANK TODAY</h2>
                <p class="h5">Help Some One <span class="text-danger">Donat Blood</span> & Save life </p>
                <p class="mt-4">Blood is essential to help patients survive surgeries, cancer treatment, chronic
                    illnesses, and traumatic injuries.
                    One blood donation can save up to three lives. ...
                </p>
                <a href="" class="btn text-white bg-danger">Donat Blood</a>
                <div class="row justify-content-evenly text-center">
                    <div class="col-md-2 col-6 mt-5 today">
                        <i class="bi bi-droplet-fill "></i>
                        <p class="mt-5">Be a Donar</p>

                    </div>
                    <div class="col-md-2 col-6 mt-5 today">
                        <i class="bi bi-currency-rupee"></i>
                        <p class="mt-5">Fund Rising</p>

                    </div>
                    <div class="col-md-2 col-6 mt-5 today">
                        <i class="bi bi-r-square"></i>
                        <p class="mt-5">Register</p>

                    </div>
                    <div class="col-md-2 col-6 mt-5 today">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <p class="mt-5">Be a Volunteer</p>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-white">
        <div class="row justify-content-evenly">
            <div class="col-md-4 mt-5 col-10">
                <h1 class="text-danger mb-5">BOOLD BANK</h1>
                <p>DONAR ALREADY CONNECTED</p>
            </div>
            <div class="col-md-3 mt-5 col-10 footer-link">
                <h3>About Us</h3>
                <p><a href="about.html">About-US</a></p>
                <p> <a href="donar.html">Donar</a></p>
                <p> <a href="pation.html">Pation</a></p>
            </div>
            <div class="col-md-4 mt-5 col-10">
                <h1>Contact-US</h1>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping">
                        <button class="btn">Click</button>
                    </span>
                </div>
            </div>
            <div class="row justify-content-evenly text-center">
                <hr class="text-white h3">
                <div class="col-md-9 mt-5 mb-3 footer-socail">
                    <a href=""> <i class=" p-3 h2 bi bi-instagram"></i> </a>
                    <a href=""> <i class=" p-3 h2 bi bi-facebook"></i> </a>
                    <a href=""> <i class=" p-3 h2 bi bi-twitter"></i> </a>
                    <a href=""> <i class=" p-3 h2 bi bi-linkedin"></i> </a>
                    <a href=""> <i class=" p-3 h2 bi bi-google"></i> </a>
                </div>
                <h2>Made With Love</h2>

                <p class="copy">Copyright @ 2022. All Right Reserved By <a class="text-danger"> Vaibhav Pawar</a></p>
                <p class="copy">Desgin & Develop By <a href="https://vaibhavpawarcoder.in/index.html" class="text-danger"> Vaibhav Pawar</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>