<?php

require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="common.css">
    <style>
        
        #dashboard-menu {
            height: 900px;
          background-color: #37433b;
            z-index: 11;

        }

        /* Adjust the text alignment */
        #dashboard-menu h6 {
            text-align: left;
        }
        .custom-bg{
            background-color: #a3ac84;
            border: 1px solid #eee6e1;
        }
        .custom-bg:hover{
            background-color: #4d4838;
            border-color: #eee6e1;

        }
            .custom-alert{
                position: fixed;
                top: 80px;
                right: 25px;
            }
        @media screen and (max-width: 992px) {
            #dashboard-menu {
                position: fixed;
                height: auto;
            }
        }
    </style>
</head>
<body class="bg-light">

      <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">

        <h5 class="mb-0">LODGE GO HOTEL</h5>
        <a href="logout.php" class="btn btn-outline-white text-white shadow-none btn-sm">LOG OUT</a>
    </div>

    <!-- Admin panel on the left -->
    <div class="container-fluid">
        <div class="row">
            <!--adminpanel-->
            
            <?php require('inc/header.php'); ?>

            
            <!-- Content on the right -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden " id="main-content">
            <h3 class="mb-4">SETTINGS</h3>
            <!--General Settings-->
                <!-- <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-outline-white text-white shadow-none custom-bg " data-bs-toggle="modal" data-bs-target="#general-s">
                        <i class="bi bi-pencil-square"></i> Edit
                        </button>
                        </div>
                        <h6 class="card-subtitle mb-1">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                    </div> -->
            <!--General Settings Modal-->

                    <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form"> 
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">General Settings</h5>
                            </div>
                            <div class="modal-body">
                               <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required >
                                    </div>
                                    <div class="mb-3" >
                                        <label class="form-label">About Us</label>
                                         <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                            </div>
                        </div></form>
                       
                    </div>
                    </div>
               </div>

                <!-- Shutdown Section -->
              <!-- <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Website Shutdown</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.checked)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            During the website shutdown, customers will not be able to make hotel room reservations.
                        </p>
                    </div>
                </div> -->

                <!-- Contact details section -->
                      <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                        <button type="button" class="btn btn-outline-white text-white shadow-none custom-bg " data-bs-toggle="modal" data-bs-target="#contacts-s">
                        <i class="bi bi-pencil-square"></i> Edit
                        </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1">Google Maps</h6>
                                    <p class="card-text" id="gmap"></p>
                           
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-3">Phone Numbers</h6>
                                   <p class="card-text mb-3">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>

                                </div>
                                  <div class="mb-4">
                                    <h6 class="card-subtitle mb-1">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                           
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1">Iframe</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>

                             </div>
                         </div>
                        </div>
                    </div>

                     <!--Contacts detail Modal-->

                    <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form"> 
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Contact Settings</h5>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" id="address_inp" class="form-control shadow-none" required >
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Google Map Link</label>
                                                <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required >
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number (with country code)</label>
                                                <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none" >
                                                </div>
                                                <div class="mb-3">
                                                <label class="form-label">iFrame Src</label>
                                                <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required >
                                        </div>   
                                            </div>
                                        <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="text" name="gmap" id="email_inp" class="form-control shadow-none" required >
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                            </div>
                        </div></form>
                       
                    </div>
                    </div>
               </div>
                   
               </div>
                    </div>

               
         
        </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/settings.js"></script>

</body>
</html>
