<?php include 'DB.php'; ?>
<?php 
    $query ="SELECT DISTINCT(State) FROM donar_registration";
    $result = $con->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    
    <form action="" method="post">
        <select name="State" id="" >
            <?php 
    foreach ($options as $option) {
    ?>
      <option value="<?php echo $option['State']; ?>"><?php echo $option['State']; ?> </option>
      <?php 
      }
     ?>
        </select>
        <br><br><br>




        

<?php 
    $query ="SELECT DISTINCT(District) FROM donar_registration";
    $result = $con->query($query);
    if($result->num_rows> 0){
      $District= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    

?>
        <select name="district" id="" >
            <?php 
    foreach ($District as $District) {
    ?>
      <option value="<?php echo $District['District']; ?>"><?php echo $District['District']; ?> </option>
      <?php 
      }
     ?>
        </select>
        <br> <br>


        <?php 
    $query ="SELECT DISTINCT(Bloodgroup) FROM donar_registration";
    $result = $con->query($query);
    if($result->num_rows> 0){
      $Bloodgroup= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    

?>
        <select name="Bloodgroup" id="" >
            <?php 
    foreach ($Bloodgroup as $Bloodgroup) {
    ?>
      <option value="<?php echo $Bloodgroup['Bloodgroup']; ?>"><?php echo $Bloodgroup['Bloodgroup']; ?> </option>
      <?php 
      }
     ?>
        </select>
        <button type="submit" name="submit"class="btn btn-danger">Submit</button>
    </form>

    <?php  
    if(isset($_POST['submit'])){
        $state=$_POST['State'];
        $dis= $_POST['district'];
        $blood=$_POST['Bloodgroup'];

        $select="select * from donar_registration where State='$state' AND District='$dis' AND Bloodgroup='$blood' ";

        $query= mysqli_query($con, $select);

        $num=mysqli_num_rows($query);


       while($result= mysqli_fetch_assoc($query)){ 
    
    ?>
<div class="conatiner">
    <div class="row justify-content-around text-center">
        <div class="col-md-10 mt-3 mb-3">
            <div class="row justify-content-around text-center">

        
            <div class="col-md-3">
            <img src="<?php echo $result['Profile'];  ?>" alt="" class="Img-fluid" srcset="">
        </div>

        <div class="col-md-8 float-start">
            <h1>Name:- <?php echo $result['First_Name'];  ?>  <?php echo $result['Last_Name'];  ?> </h1>
            <p> <span>District:<?php echo $result['District'];  ?> </span> , <span>  State: <?php echo $result['State'];  ?>  </span> </p>
            <p> <span>City: <?php echo $result['City'];  ?> </span> , <span>Zip: <?php echo $result['zip'];  ?>  </span> </p>
            <p> <span>Email: <?php echo $result['Email'];  ?>  </span> , <span>Mobile: <?php echo $result['Mobile'];  ?>  </span> </p>
        </div>
            </div>
        </div>
    </div>
</div>



<?php } }?>
</body>
</html>