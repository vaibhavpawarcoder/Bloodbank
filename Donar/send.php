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
                        <div class="card pb-5" style="min-height: 400px">
                            <div class="row justify-content-evenly">
                                <!-- <?php include 'session.php'; ?> -->
                                <div class="col-md-10">
                                    
                                        <form class="row g-3 needs-validation" method="POST" novalidate>
                                            <div class="col-md-4 ">
                                                <label for="validationCustom01" class="form-label">Camp_Name</label>
                                                <input type="text" class="form-control" id="validationCustom01"  name="campname" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Sirst name</label>
                                                <input type="text" class="form-control" id="validationCustom01"  name="spname" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Camp Email</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Email']; ?> " name="campemail" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                                <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Camp Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" coloum="10" rows="3" name="campadd" disabled><?php echo $row['City']; ?>,<?php echo $row['State']; ?>,<?php echo $row['District']; ?>,<?php echo $row['Zip']; ?></textarea>
                                                </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Donation First Date</label>
                                                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['firstDate']; ?> " name="campfist" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Donation Last Date</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['lastDate']; ?> " name="camplast" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Donar  Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['First_Name']; ?>  <?php echo $row['Last_Name']; ?>" name="donarname" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustomUsername" class="form-label">Email</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $row['Email']; ?> " name="donaremail" disabled>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="validationCustom03" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['Mobile']; ?> " name="donarmobile" disabled>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom03" class="form-label">Bloodgroup</label>
                                                <input type="text" class="form-control" id="validationCustom03" value="<?php echo $row['Bloodgroup']; ?> " name="donarblood" disabled>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Camp Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" coloum="10" rows="3" name="donaradd" disabled><?php echo $row['City']; ?>,<?php echo $row['State']; ?>,<?php echo $row['District']; ?>,<?php echo $row['zip']; ?></textarea>
                                                </div>v>
                                            </div>


                                            <div class="col-11">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-11">
                                                <!-- <a href="update.php?upid=" class="btn btn-primary" type="submit" name="update">Change</a href="#?upid=<?php echo $row['ID']; ?>"> -->
                                                <a  > Upadte</a>
                                                <button class="btn btn-primary" name="update">Donate</button>
                                            </div>
                                        </form>
                                </div>
                           

                            


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