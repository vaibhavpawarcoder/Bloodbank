<div class="row ">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">equalizer</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Request To Camp</strong></p>
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(donaremail) as donaremail from camp_request where donaremail='$email'");
                                    $data=mysqli_fetch_assoc($result);
                                    echo $data['donaremail'];
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

                    <div class="col-lg-4 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">waterdrop</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Request To Donar</strong></p>
                                <h3 class="card-title">
                                
                                    <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(Email) as Email from user_request where Email='$email' ");
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

                    <div class="col-lg-4 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        attach_money
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Request</strong></p>
                                <h3 class="card-title">

                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['Email'] ;
                                    $result=mysqli_query($con,"SELECT count(Request_Email) as Request_Email from user_request where Request_Email='$email' ");
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
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Followers</strong></p>
                                <h3 class="card-title">+245</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>