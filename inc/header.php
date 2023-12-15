<?php
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

$_SESSION['status'] = 1;//if logged in
$_SESSION['status'] = 0;//if logged out

?>   


 <!-- NAVBAR-->           
    
    <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 py-lg-2 shadow-sm sticky-top ">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fs-3" href="index.php">LodgeGo Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="facilities.php">Amenities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="aboutus.php">About Us</a>
            </li>
           
        </ul>
         
        <!-- <div class="d-flex justify-content-evenly mb-2" >
        <a href="login.php" class="btn btn-outline-white text-white shadow-none custom-bg me-lg-2 me-2 p-2" <?php echo ($_SESSION['status'] == 1) ? 'style="display:none;"' : '' ?> >Login</a>
                                
        </div>
        
        <div class="d-flex justify-content-evenly mb-2" >
        <a href="register.php" class="btn btn-outline-white text-white shadow-none custom-bg me-lg-2 me-2 p-2" <?php echo ($_SESSION['status'] == 1) ? 'style="display:none;"' : '' ?>>Register</a>
                                
        </div>

        <div class="d-flex justify-content-evenly mb-2" >   
        <a href="logout.php" class="btn btn-outline-white text-white shadow-none custom-bg me-lg-2 me-2 p-2" <?php echo ($_SESSION['status'] == 0) ? 'style="display:none;"' : '' ?>>Logout</a>
                  -->
        <div class="d-flex justify-content-evenly mb-2" >
        <a href="calendar.php" class="btn btn-outline-white text-white shadow-none custom-bg me-lg-2 me-2 p-2" <?php echo ($_SESSION['status'] == 1) ? 'style="display:none;"' : '' ?>>Book Now</a>
                                
        </div>               
        </div>
        </div>
        </div>
    </div>
    </nav>

 <!-- Login -->           

    <!-- <div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form >
                <div class="modal-header">
                        <h7 class="modal-title  me-1">
                          <i class="bi bi-person-fill"></i>  User Login
                        </h7>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                          <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none"  >
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none"  >
                            </div>
                            <div class="d-flex align-items-center justify-content-between me-lg-2  me-3">
                                <button type="submit" class=" btn btn-outline-white text-white shadow-none custom-bg">
                                    LOGIN
                                </button>
                                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password?</a>
                            </div>
                    </div>
            </form>
        </div>
    </div>
    </div> -->

 <!-- Register -->           

    <!-- <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="register-form" >
             <div class="modal-header">
                        <h7 class="modal-title  me-1">
                          <i class="bi bi-person-plus-fill"></i>  User Registration
                        </h7>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 ps-0 mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control shadow-none" required  >
                                    </div>
                                     <div class="col-md-6 p-0 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control shadow-none" required  >
                                    </div>
                                    <div class="col-md-12 p-0 mb-3" >
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" name="phonenum" class="form-control shadow-none" required  >
                                    </div>
                                    <div class="col-md-12 p-0 mb-3" >
                                        <label class="form-label">Address</label>
                                         <textarea class="form-control shadow-none" name="address" required  rows="1"></textarea>
                                    </div>
                                        <div class="col-md-6 ps-0 mb-3">
                                    </div>
                                     <div class="col-md-12 p-0 mb-3" >
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control shadow-none" required  >
                                    </div>
                                         <div class="col-md-6 ps-0 mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="pass" class="form-control shadow-none" required  >
                                    </div>
                                     <div class="col-md-6 p-0 mb-3" >
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="cpass" class="form-control shadow-none" required  >
                                    </div>
                                    <div class="text-center my-1">
                                        <button type="submit" class=" btn btn-outline-white text-white shadow-none custom-bg">
                                             REGISTER
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div> -->  
            </form>
        </div>
    </div>
    </div>
