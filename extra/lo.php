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
                        <a class="nav-link active h4 text-white active text-danger link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="pation.html">Pation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="donar.html">Donar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white link" aria-current="page" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h4 text-white bg-white text-danger mem text-center nav-btn" href="admin.html">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <div class="row justify-content-around text-center">
            <div class="col-md-10">
                <p><span class="h3 text-danger">Blood Donation </span>Creat Account For Donation</p>

                <span>Already Have Account , Login hear...
                     <a href="lo.php" class="btn bg-danger text-white" >Login</a>
                </span>
            </div>

        </div>
    </div>

    <!-- Donat- Form -->

    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-md-9">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                    <div class="mb-3">
                        <label class="form-label">email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputemail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputpassword1">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- php for donar-registration -->
    <?php
    include 'DB.php';

    if(isset($_POST['login'])) {
        $email= $_POST['email'];
        $password = $_POST['password'];

        $chk = " select * from donar_registration where email='$email' ";
        $query = mysqli_query($con, $chk);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['Password'];

            $pass_decode = password_verify($password, $db_pass);

            if ($pass_decode) {
                echo "login successful";
            } else {
                echo "password incorrect";
            }
        } else {
            echo "email Incorrect";
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
                    <input type="text" class="form-control" placeholder="email" aria-label="Username" aria-describedby="addon-wrapping">
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
                <p class="copy">Desgin & Develop By <a class="text-danger"> Vaibhav Pawar</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>