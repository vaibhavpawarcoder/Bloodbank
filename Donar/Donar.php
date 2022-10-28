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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Picture</th>
                                            <th scope="col">First_Name</th>
                                            <th scope="col">Last_Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Blood</th>
                                            <th scope="col">City</th>
                                            <th scope="col">District</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Pinode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php include 'DB.php'; ?>
                                        <?php 
                                        $select="select * from donar_registration ";

                                        $query = mysqli_query($con, $select);
                                
                                        $num = mysqli_num_rows($query);
                                
                                
                                        while ($result = mysqli_fetch_assoc($query)) { 

                                        ?>
                                        <tr>
                                            <th scope="col"><img src="<?php echo $result['Profile']; ?>" alt="" srcset=""></th>
                                            <th scope="col"><?php echo $result['First_Name']; ?></th>
                                            <th scope="col"><?php echo $result['Last_Name']; ?></th>
                                            <th scope="col"><?php echo $result['Email']; ?></th>
                                            <th scope="col"><?php echo $result['Mobile']; ?></th>
                                            <th scope="col"><?php echo $result['Bloodgroup']; ?></th>
                                            <th scope="col"><?php echo $result['City']; ?></th>
                                            <th scope="col"><?php echo $result['District']; ?></th>
                                            <th scope="col"><?php echo $result['State']; ?></th>
                                            <th scope="col"><?php echo $result['zip']; ?></th>
                                        </tr>
                                        <?php
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