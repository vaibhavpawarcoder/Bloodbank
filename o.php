<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="contanier">
        <div class="row">
            <div class="col-md-11">
                <form class="row g-3 needs-validation" novalidate>
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
                        <label for="validationCustom04" class="form-label">Select State</label>
                        <?php
                        include 'DB.php';
                        $query = "SELECT DISTINCT(State) FROM donar_registration";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            $State = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }


                        ?>
                        <select class="form-select" id="autoSizingSelect" name="State" require>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach ($State as $State) {
                            ?>
                                <option value="<?php echo $State['State']; ?>"><?php echo $State['State']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Select District</label>
                        <?php
                        include 'DB.php';
                        $query = "SELECT DISTINCT(District) FROM donar_registration";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            $District = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }


                        ?>
                        <select class="form-select" id="autoSizingSelect" name="District" require>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach ($District as $District) {
                            ?>
                                <option value="<?php echo $District['District']; ?>"><?php echo $District['District']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Select City</label>
                        <?php
                        include 'DB.php';
                        $query = "SELECT DISTINCT(city) FROM donar_registration";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            $city = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }


                        ?>
                        <select class="form-select" id="autoSizingSelect" name="city" require>
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach ($city as $city) {
                            ?>
                                <option value="<?php echo $city['city']; ?>"><?php echo $city['city']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>

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
                        <button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Find Blood
                        </button>


                    </div>
                </form>

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
                                    $City = $_POST['City'];
                                    $state = $_POST['State'];
                                    $dis = $_POST['district'];

                                    $select = "select * from donar_registration where  District='$dis' AND City='$City' AND blood='$blood' AND state='$state' ";

                                    $query = mysqli_query($con, $select);

                                    $num = mysqli_num_rows($query);

                                    if ($num) {
                                        while ($result = mysqli_fetch_assoc($query)) {

                                ?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NAme</th>
                                                        <th scope="col">Mobile </th>
                                                        <th scope="col">Blood Goup</th>
                                                        <th scope="col">Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php echo  $result['ID']; ?></th>
                                                        <td><?php echo  $result['ID']; ?></td>
                                                        <td><?php echo  $result['ID']; ?></td>
                                                        <td>@<?php echo  $result['ID']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>


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
        </div>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>