
<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main-content">


<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First_Name</th>
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

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        

        $total_pages_sql = "SELECT COUNT(*) FROM donar_registration";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
            ?>
            <tr>
               <th scope="col"><?php echo $result['First_Name']; ?></th>
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
<?php
        mysqli_close($con);
    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>