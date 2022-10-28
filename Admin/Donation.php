<?php include 's.php';
include 'DB.php'; ?>
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
                        <div class="card pb-5" style="min-height: 400px">
                            <div class="row justify-content-evenly">
                                <h2 class="text-center text-primary mt-4 mb-2">Donate Blood Nearby Camp</h2>
                                <div class="col-md-9">
                                    <form class="row gy-2 gx-3 align-items-center" method="post">
                                        <div class="col-md-4">
                                            <?php
                                            $query = "SELECT DISTINCT(City) FROM camp";
                                            $result = $con->query($query);
                                            if ($result->num_rows > 0) {
                                                $City = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            }


                                            ?>
                                            <label class="" for="autoSizingInput">City</label>
                                            <select class="form-select" id="autoSizingSelect" name="City" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($City as $City) {
                                                ?>
                                                    <option><?php echo $City['City']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php
                                        $query = "SELECT DISTINCT(State) FROM camp";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $State = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }
                                        ?>
                                        <div class="col-md-4">
                                            <label class="" for="autoSizingInput">State</label>
                                            <select class="form-select" id="autoSizingSelect" name="State" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($State as $State) {
                                                ?>
                                                    <option><?php echo $State['State']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php
                                        $query = "SELECT DISTINCT(District) FROM camp";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $District = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }
                                        ?>
                                        <div class="col-md-4">
                                            <label class="" for="autoSizingSelect">District</label>
                                            <select class="form-select" id="autoSizingSelect" name="district" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($District as $Districte) {
                                                ?>
                                                    <option><?php echo $Districte['District']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="row text-center justify-content-evenly mt-5">
                                            <div class="col-md-3">
                                                <button type="submit" name="submit" class="btn btn-danger">Donate</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <?php
                                if (isset($_POST['submit'])) {
                                    $City = $_POST['City'];
                                    // $state = $_POST['State'];
                                    $dis = $_POST['district'];

                                    $select = "select * from camp where  District='$dis' AND City='$City' ";

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
                                                                <h5> Camp_Name:- <?php echo $result['Camp_name'];  ?> <h5>
                                                                        <p> <span class="h6">Email : -</span> <?php echo $result['Email'];  ?> </p>
                                                                        <p> <span class="h6">Mobile : -</span> <?php echo $result['Mobile'];  ?> </p>
                                                                        <p> <span class="h6">Address : - </span><?php echo $result['City'];  ?> </span>, <?php echo $result['District'];  ?>,
                                                                            <?php echo $result['State'];  ?> <?php echo $result['Zip'];  ?> </p>
                                                            </div>

                                                            <div class="col-md-5 float-start">
                                                                <h5> Sponsor_Name:- <?php echo $result['sponsor_name'];  ?> <h5>
                                                                        <p> <span class="h6">First Day : -</span> <?php echo $result['firstDate'];  ?> </p>
                                                                        <p> <span class="h6">Last Day : -</span> <?php echo $result['lastDate'];  ?> </p>
                                                                        <br>
                                                                        <a href="camprequest.php?ids=<?php echo  $result['ID']; ?>" class="btn bg-primary text-white">Send Request</a>
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
                        </div>
                    </div>

                </div>

                <?php
                include 'DB.php';

                if (isset($_POST['register'])) {
                    $Camp_Name = mysqli_real_escape_string($con, $_POST['Camp_Name']);
                    $sponsor_name = mysqli_real_escape_string($con, $_POST['sponsor_name']);
                    $Location = mysqli_real_escape_string($con, $_POST['Location']);

                    $Email = mysqli_real_escape_string($con, $_POST['email']);
                    $firstDate = mysqli_real_escape_string($con, $_POST['firstDate']);
                    $lastDate = mysqli_real_escape_string($con, $_POST['lastDate']);

                    $City = mysqli_real_escape_string($con, $_POST['city']);
                    $State = mysqli_real_escape_string($con, $_POST['state']);
                    $District = mysqli_real_escape_string($con, $_POST['district']);

                    $Zip = mysqli_real_escape_string($con, $_POST['zip']);
                    $Mobile = mysqli_real_escape_string($con, $_POST['Mobile']);
                    $File = $_FILES['file'];

                    $filename = $File['name'];
                    $fileerror = $File['error'];
                    $filetemp = $File['tmp_name'];

                    $fileext = explode('.', $filename);
                    $filechk = strtolower(end($fileext));

                    $fileextstore = array('png', 'jpg', 'jpeg');

                    if (in_array($filechk, $fileextstore)) {
                        $destination = 'Camp/' . $filename;
                        move_uploaded_file($filetemp, $destination);




                        $insertquery = "INSERT INTO `camp`( Camp_name, sponsor_name, Location, Email, firstDate, lastDate, City, State, District, Zip, Mobile, destination) 
                             VALUES ('$Camp_Name','$sponsor_name','$Location','$Email','$firstDate','$lastDate','$City','$State','$District','$Zip','$Mobile','$destination')";

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
                ?>

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