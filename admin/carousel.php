<?php

require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
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
            <!-- Carousel Section -->

                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title m-0">Images</h5>
                                    <button type="button" class="btn btn-outline-white text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#carousel-s">
                                        <i class="bi bi-plus-square"></i> Add
                                    </button>
                                </div>
                                <div class="row" id="carousel-data">
                                    <!-- Content for the Carousel data will go here -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="carousel_s_form"> <!-- Corrected enctype -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Image</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Add Picture</label>
                                            <input type="file" name="carousel_picture" id="carousel_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="carousel_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                
   
        </div>
   

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/carousel.js"></script>

</body>
</html>
