<div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">equalizer</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Donar Registration</strong></p>
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(Email) as Email from donar_registration ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['Email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="#pablo">See detailed report</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">shopping_cart</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Camp</strong></p>
                                <h3 class="card-title">
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(Email) as Email from camp ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['Email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Product-wise sales
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        attach_money
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Camp Request</strong></p>
                                <h3 class="card-title">
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(donaremail) as donaremail from camp_request ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['donaremail'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Request For Users</strong></p>
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(Request_Email) as Request_Email from user_request ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['Request_Email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                </div>