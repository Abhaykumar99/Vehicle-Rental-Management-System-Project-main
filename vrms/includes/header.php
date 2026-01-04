<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> <?php  echo $row['PageDescription'];?>
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +<?php  echo $row['MobileNumber'];?>
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-envelope"></i> <?php  echo $row['Email'];?>
                    </div>
                    <!--== Single HeaderTop End ==-->
<?php } ?>
                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <?php if (strlen($_SESSION['vrmsuid']==0)) {?>
                            <li><a href="login.php">Login/Register</a>
                                <?php } ?>    
                                </li>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.php" class="logo">
                            <h2 style="color: white">VRMS</h2>
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>

                              <?php if(strlen($_SESSION['vrmsuid']==0)) {?>
                                <li><a href="admin/login.php">Admin</a></li>
                            <?php } ?>

                                <li><a href="#">Vehicle</a>
                                    <ul>
                                        <li><a href="car-details.php">Four Wheeler Details</a></li>
                                        <li><a href="twowheeler-details.php">Two Wheeler Details</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                 <?php if (strlen($_SESSION['vrmsuid']!=0)) {?>
                            
                                <li><a href="">My Booking</a>
                                    <ul>
                                       
                                        
                                        <li><a href="two-wheeler-booking.php">Two Wheeler Booking</a> 
                                        </li>
                                       <li><a href="four-wheeler-booking.php">Four Wheeler Booking</a></li>
                                        
                                    </ul>
                                </li>
                                    <li><a href="">My Account</a>
                                    <ul>
                                       
                                        
                                        <li><a href="profile.php">My Profile</a> 
                                        </li>
                                       <li><a href="change-password.php">Change Password</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>