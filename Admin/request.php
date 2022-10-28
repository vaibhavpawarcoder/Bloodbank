<?php include 's.php'; ?>
<?php include 'DB.php'; ?>
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
                        <div class="card" style="min-height: 490px">
                        <h3 class="text-center m-3">Request For Donar</h3>
                            <div class="row justify-content-center">
                                <div class="col-md-5 justify-content-center">
                                    <form class="d-flex m-5" method="POST">
                                        <input class="form-control me-2" type="search" name="info" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" name="search" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST['search'])) {
                                $info = $_POST['info'];
                                $infosearch = "select * from user_request where Request_Bloodgroup like '%$info%' or Request_Name like '%$info%'  or Name like '%$info%' or Date like '%$info%' ";

                                $inforesult = mysqli_query($con, $infosearch);

                                $infoshow = mysqli_num_rows($inforesult);

                                if ($infoshow > 0) {
                                    while ($rowinfo = mysqli_fetch_assoc($inforesult)) {

                                        ?> 
                                        <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">First_Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Request_Name</th>
                                                    <th scope="col">Request_Email</th>
                                                    <th scope="col">Request_Mobile</th>
                                                    <th scope="col">Request_Bloodgroup</th>
                                                    <th scope="col">Request_Address</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                ?>
                                                    <tr>
                                                        <th scope="col"><?php echo $rowinfo['Name']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Email']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Mobile']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Request_Name']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Request_Email']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Request_Mobile']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Request_Bloodgroup']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Request_Address']; ?></th>
                                                        <th scope="col"><?php echo $rowinfo['Date']; ?></th>
                                                    </tr>
                                                <?php
                                                
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                        <?php
                                    }
                                } else {
                                    echo "<h3 class='text-center m-3 text-danger'> No result Regarding Your Search to show </h3>";
                            ?>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">First_Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Request_Name</th>
                                                    <th scope="col">Request_Email</th>
                                                    <th scope="col">Request_Mobile</th>
                                                    <th scope="col">Request_Bloodgroup</th>
                                                    <th scope="col">Request_Address</th>
                                                    <th scope="col">Date</th>>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $select = "select * from user_request ";

                                                $query = mysqli_query($con, $select);

                                                $num = mysqli_num_rows($query);


                                                while ($result = mysqli_fetch_assoc($query)) {

                                                ?>
                                                    <tr>
                                                    <th scope="col"><?php echo $result['Name']; ?></th>
                                                        <th scope="col"><?php echo $result['Email']; ?></th>
                                                        <th scope="col"><?php echo $result['Mobile']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Name']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Email']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Mobile']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Bloodgroup']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Address']; ?></th>
                                                        <th scope="col"><?php echo $result['Date']; ?></th>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">First_Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Request_Name</th>
                                                    <th scope="col">Request_Email</th>
                                                    <th scope="col">Request_Mobile</th>
                                                    <th scope="col">Request_Bloodgroup</th>
                                                    <th scope="col">Request_Address</th>
                                                    <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $select = "select * from user_request ";

                                            $query = mysqli_query($con, $select);

                                            $num = mysqli_num_rows($query);


                                            while ($result = mysqli_fetch_assoc($query)) {

                                            ?>
                                                <tr>
                                                <th scope="col"><?php echo $result['Name']; ?></th>
                                                        <th scope="col"><?php echo $result['Email']; ?></th>
                                                        <th scope="col"><?php echo $result['Mobile']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Name']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Email']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Mobile']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Bloodgroup']; ?></th>
                                                        <th scope="col"><?php echo $result['Request_Address']; ?></th>
                                                        <th scope="col"><?php echo $result['Date']; ?></th>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </tbody>
                                    </table>

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