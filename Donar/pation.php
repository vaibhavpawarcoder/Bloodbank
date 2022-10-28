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
                                <h1 class="text-center mt-5 mb-5 text-danger">Find Donar Information</h1>
                                <div class="col-md-9">
                                    <form class="row gy-2 gx-3 align-items-center" method="post">
                                        <div class="col-md-4">
                                            <?php
                                            $query = "SELECT DISTINCT(Bloodgroup) FROM donar_registration";
                                            $result = $con->query($query);
                                            if ($result->num_rows > 0) {
                                                $Bloodgroup = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            }


                                            ?>
                                            <label class="" for="autoSizingInput">Blood Group</label>
                                            <select class="form-select" id="autoSizingSelect" name="blood">
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($Bloodgroup as $Bloodgroup) {
                                                ?>
                                                    <option><?php echo $Bloodgroup['Bloodgroup']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php
                                        $query = "SELECT DISTINCT(State) FROM donar_registration";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $State = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }


                                        ?>
                                        <div class="col-md-4">
                                            <label class="" for="autoSizingInput">State</label>
                                            <select class="form-select" id="autoSizingSelect" name="state">
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
                                        $query = "SELECT DISTINCT(District) FROM donar_registration";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $District = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }


                                        ?>
                                        <div class="col-md-4">
                                            <label class="" for="autoSizingSelect">District</label>
                                            <select class="form-select" id="autoSizingSelect" name="district">
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
                                                <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['submit'])) {
                                $blood = $_POST['blood'];
                                $state = $_POST['state'];
                                $dis = $_POST['district'];

                                $select = "select * from donar_registration where State='$state' AND District='$dis' AND Bloodgroup='$blood' ";

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