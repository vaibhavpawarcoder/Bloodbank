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
                        <div class="card" style="min-height: 490px">
                            <div class="row justify-content-evenly">

                            <?php
                                  $ids = $_GET['ids'];

                                $query = "select * from donar_registration where ID='$ids'";

                                $queryshow = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_assoc($queryshow)) {
                                    $email = $_SESSION['Email'];
                                    //echo $email;
                                    include 'DB.php';
                                    $query = "SELECT * FROM donar_registration WHERE Email = '$email' ";
                                    $result = mysqli_query($con, $query);
                                    // mysqli_query($query);

                                    while ($rows = mysqli_fetch_array($result)) {
                                ?>
                                <form class="row g-3" method="POST">
                                        <div class="col-md-4">
                                            <label for="validationDefault01" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" id="validationDefault01" value=" <?php echo $_SESSION['First_Name']; ?> <?php echo $_SESSION['Last_Name']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="validationDefault02" value="<?php echo $_SESSION['Email']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Mobile</label>
                                            <input type="tel" class="form-control" name="mobile" id="validationDefault02" value="<?php echo $_SESSION['Mobile']; ?>" required>
                                        </div>

                                    <form class="row g-3" method="POST">
                                        <div class="col-md-4">
                                            <label for="validationDefault01" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="rname" id="validationDefault01" value=" <?php echo $row['First_Name'] ?> <?php echo $row['Last_Name'] ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="remail" id="validationDefault02" value="<?php echo $row['Email'] ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Mobile</label>
                                            <input type="tel" class="form-control" name="rmobile" id="validationDefault02" value="<?php echo $row['Mobile'] ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault03" class="form-label">Bloodgroup</label>
                                            <input type="text" class="form-control" name="rblood"  id="validationDefault03" 
                                            value="<?php echo $row['Bloodgroup'] ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault03" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="radd" id="validationDefault03"
                                            value="<?php echo $row['City'] ?>, <?php echo $row['State'] ?>, <?php echo $row['District'] ?> <?php echo $row['zip'] ?>"  required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                <label class="form-check-label" for="invalidCheck2">
                                                    Agree to terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" name="request"type="submit"> request</button>
                                        </div>
                                    </form>



                                <?php

                                if(isset($_POST['request'])){
                                    $name=$_POST['name'];
                                    $email=$_POST['email'];
                                    $mobile=$_POST['mobile'];

                                    $Rname=$_POST['rname'];
                                    $Remail=$_POST['remail'];
                                    $Rmobile=$_POST['rmobile'];

                                    $Rblood=$_POST['rblood'];
                                    $Radd=$_POST['radd'];

                                    $inserquery="INSERT INTO user_request( Name, Email, Mobile, Request_Name, Request_Email, Request_Mobile, Request_Bloodgroup, Request_Address)
                                     VALUES ('$name','$email','$mobile','$Rname','$Remail','$Rmobile','$Rblood','$Radd')";

                                     $show=mysqli_query($con, $inserquery);

                                     if ($show) {
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