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
                                    <form class="row gy-2 gx-3 align-items-center" method="POST">
                                        <div class="col-md-4">
                                            <?php
                                            $query = "SELECT DISTINCT(campname) FROM camp_request";
                                            $result = $con->query($query);
                                            if ($result->num_rows > 0) {
                                                $campname = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            }


                                            ?>
                                            <label class="" for="autoSizingInput">campname</label>
                                            <select class="form-select" id="autoSizingSelect" name="campname" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($campname as $campname) {
                                                ?>
                                                    <option value="<?php echo $campname['campname']; ?>"><?php echo $campname['campname']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php
                                        $query = "SELECT DISTINCT(spname) FROM camp_request";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $spname = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }
                                        ?>
                                        <div class="col-md-4">
                                            <label class="" for="autoSizingInput">spname</label>
                                            <select class="form-select" id="autoSizingSelect" name="spname" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($spname as $spname) {
                                                ?>
                                                    <option value="<?php echo $spname['spname']; ?>"><?php echo $spname['spname']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php
                                        $query = "SELECT DISTINCT(camplocation) FROM camp_request";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $camplocation = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }
                                        ?>
                                        <div class="row text-center justify-content-evenly mt-5">
                                            <div class="col-md-3">
                                                <button type="submit" name="submit" class="btn btn-danger">Donate</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <?php
                                if (isset($_POST['submit'])) {
                                    $campname = $_POST['campname'];
                                    // $state = $_POST['State'];
                                    $spname = $_POST['spname'];

                                    $select = "select * from camp_request where  spname='$spname' AND campname='$campname' ";

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
                                                                <h4>Camp Info</h4>
                                                                <p> Camp_Name:- <?php echo $result['campname'];  ?> <p>
                                                                <p> Sponsor_Name:- <?php echo $result['spname'];  ?> <p>
                                                                <p> Camp_Email:- <?php echo $result['campemail'];  ?> <p>
                                                                <p> Camp_Mobile:- <?php echo $result['campmobile'];  ?> <p>
                                                            </div>

                                                            <div class="col-md-5 float-start">
                                                            <h4>Donar Info</h4>
                                                                <p> Donar_Name:- <?php echo $result['donarname'];  ?> <p>
                                                                <p> Donar_Email:- <?php echo $result['donaremail'];  ?> <p>
                                                                <p> Donar_Blood:- <?php echo $result['donarblood'];  ?> <p>
                                                                <p> Donar_Add:- <?php echo $result['donaradd'];  ?> <p>
                                                                <p> Donar_Mobile:- <?php echo $result['donarmobile'];  ?> <p>
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