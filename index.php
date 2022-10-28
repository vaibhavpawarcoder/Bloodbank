<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOOD BANK </title>
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
                        <a class="nav-link active h4 text-white link" aria-current="page" href="Pation.php">Pation</a>
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

    <!-- Container -->

    <div class="container mt-2 pt-1 mb-5 pb-5" id="main">
        <div class="row justify-content-evenly">

            <div class="col-md-5 col-12 mt-5 pt-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Img/back.png" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Img/back4.png" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Img/back5.png" class="d-block img-fluid" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-5 mt-5 col-10">
                <form class="row g-3 needs-validation" method="POST" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Blood Group</label>
                        <select class="form-select" id="validationCustom04" name="blood" required>
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
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <?php
                        include "DB.php";
                        $query = "SELECT DISTINCT(State) FROM donar_registration";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            $State = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }


                        ?>
                        <label for="validationCustom04" class="form-label">Select State</label>
                        <select class="form-select" id="validationCustom04" name="state" required>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach ($State as $State) {
                            ?>
                                <option><?php echo $State['State']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <?php

                        $query = "SELECT DISTINCT(District) FROM donar_registration";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            $District = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }


                        ?>
                        <label for="validationCustom04" class="form-label">Select District</label>
                        <select class="form-select" id="validationCustom04" name="district" required>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach ($District as $District) {
                            ?>
                                <option><?php echo $District['District']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <?php
                        $query = "SELECT DISTINCT(City) FROM donar_registration";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            $City = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }


                        ?>
                        <label for="validationCustom04" class="form-label">Select City</label>
                        <select class="form-select" id="validationCustom04" name="City" required>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach ($City as $City) {
                            ?>
                                <option><?php echo $City['City']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-check">

                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" name="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Find Blood
                        </button>
                        
                        <!-- Modal -->

                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <?php
if (isset($_POST['submit'])) {
    $blood = $_POST['blood'];
    $state = $_POST['state'];
    $dis = $_POST['district'];

    $select = "select * from donar_registration where State='$state' AND District='$dis' AND Bloodgroup='$blood'  ";

    $query = mysqli_query($con, $select);

    $num = mysqli_num_rows($query);

    if ($num) {
        while ($result = mysqli_fetch_assoc($query)) {

?>
            <div class="conatiner">
                <div class="row justify-content-around text-center">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="row justify-content-around text-center">


                            <div class="col-md-5">
                                <!-- <img src="<?php echo $result['Profile'];  ?>" alt="" class="Img-fluid" srcset=""> -->
                                <h5> Name:- <?php echo $result['First_Name'];  ?> <?php echo $result['Last_Name'];  ?> <h5>
                                        <p> <span class="h6">Email : -</span> <?php echo $result['Email'];  ?> </p>
                                        <p> <span class="h6">Mobile : -</span> <?php echo $result['Mobile'];  ?> </p>
                            </div>

                            <div class="col-md-5 float-start">
                                <p> <span class="h6">Address : - </span><?php echo $result['City'];  ?> </span>, <?php echo $result['District'];  ?>,
                                    <?php echo $result['State'];  ?> <?php echo $result['zip'];  ?> </p>
                                <br>
                                <a href="" class="btn bg-primary text-white">Send Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    } else {
        ?>
        <div class="conatiner">
            <div class="row justify-content-around text-center">
                <div class="col-md-12 mt-3 mb-3">
                    <div class="row justify-content-around text-center">


                        <div class="col-md-5">
                            <h5>No Record Showing </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}

?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="container-fluid mt-5 pt-2 book-food">
        <div class="row text-center book-food justify-content-evenly">
            <div class="col-md-4 pt-3 pb-3 mb-3 col-10 info">
                <h1>Donation</h1>
                <span style="display: flex; justify-content: space-evenly;">
                    <i class="bi bi-currency-rupee h1"></i>
                    <p>We are grateful for Real Hero and Hope for them
                        <br>
                        always success who helps Donat to Blood Bank Today
                    </p>
                </span>
                <a href="#" class="btn bg-danger text-white">Donate Us</a>
            </div>

            <div class="col-md-4 pt-3 pb-3 mb-3 col-10 info">
                <h1>Volunteer</h1>
                <span style="display: flex; justify-content: space-evenly;">
                    <i class="bi bi-person h1"></i>
                    <p>We are grateful for Real Hero and Hope for them
                        <br>
                        always success who helps Donat to Blood Bank Today
                    </p>
                </span>
                <a href="#" class="btn bg-danger text-white">Join Now</a>
            </div>

            <div class="col-md-4 pt-3 pb-3 mb-3 col-10 info">
                <h1>Causes</h1>
                <span style="display: flex; justify-content: space-evenly;">
                    <i class="bi bi-flag-fill h1"></i>
                    <p>We are grateful for Real Hero and Hope for them
                        <br>
                        always success who helps Donat to Blood Bank Today
                    </p>
                </span>
                <a href="#" class="btn bg-danger text-white">Causes</a>
            </div>
        </div>
    </div>

    <!-- Donation type -->

    <div class="container type">
        <div class="row justify-content-evenly text-center type-div">
            <h1 class="mt-5 text-danger">Total Blood Donar Rgister With Blood Bank </h1>
            <div class="col-md-10">
                <div class="row justify-content-evenly text-center">
                    <div class="col-md-2 col-4 type-group">
                        <h3> A+</h3>
                        <p>12</p>
                    </div>
                    <div class="col-md-2 col-4 type-group">
                        <h3> A-</h3>
                        <p>12</p>
                    </div>
                    <div class="col-md-2 col-4 type-group">
                        <h3>AB+</h3>
                        <p>12</p>
                    </div>
                    <div class="col-md-2 col-4 type-group">
                        <h3>AB-</h3>
                        <p>12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row justify-content-evenly text-center">
                    <div class="col-md-2 col-4 type-group">
                        <h3> B+</h3>
                        <p>12</p>
                    </div>
                    <div class="col-md-2 col-4 type-group">
                        <h3> B-</h3>
                        <p>12</p>
                    </div>
                    <div class="col-md-2 col-4 type-group">
                        <h3>O+</h3>
                        <p>12</p>
                    </div>
                    <div class="col-md-2 col-4 type-group">
                        <h3>O-</h3>
                        <p>12</p>
                    </div>
                </div>
            </div>
            <a href="" class="text-danger h2">All Blood Group List</a>
        </div>
    </div>

    <!-- Why Should Donat Blood -->

    <div class="container mt-5 pt-5">
        <div class="row justify-content-evenly">
            <div class="col-md-5 col-10 pt-5">
                <img src="Img/back3.png" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-md-5 col-10 pt-5">
                <h2> Why Shoul Donat Blood? </h2>
                <p>
                    Safe blood saves lives. Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients
                </p>
                <a href="about.html" class="btn bg-danger text-white donat-more"> Know More</a>
            </div>
        </div>
    </div>

    <!-- Blood bank Today -->
    <div class="container-fluid">
        <div class="row justify-content-evenly text-center">
            <div class="col-10">
                <h2 class="mt-5 mb-3 text-danger">BLOOD BANK TODAY</h2>
                <p class="h5">Help Some One <span class="text-danger">Donat Blood</span> & Save life </p>
                <p class="mt-4">Blood is essential to help patients survive surgeries, cancer treatment, chronic illnesses, and traumatic injuries.
                    One blood donation can save up to three lives. ...
                </p>
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