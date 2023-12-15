<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Room Ratings</title>

    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="common.css1">
    <style>
        #dashboard-menu {
            height: 900px;
            background-color: #37433b;
            z-index: 11;
            
        }
.pop:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
        /* Adjust the text alignment */
        #dashboard-menu h6 {
            text-align: left;
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
        
        <?php require('inc/header.php'); ?>
            
            
            <!-- Content on the right -->
            <div class="col-lg-10 ms-auto p-0 overflow-hidden" id="main-content">
               
<!-- Carousel -->

    <div class="container-fluid px-lg-2 mt-2">
         <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/ab.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/cd.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/ef.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/gh.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/ij.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/kl.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/mn.png" class="w-100 d-block"/>
                </div>
                
                        
            </div>
     </div>
 
<!-- buttons -->
<br>
            <div class="container col-lg-12">
                <div class="row">
                     <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings1.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Standard Room</h6>
                                    <p class="text-center">Room #1</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings2.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Superior Room</h6>
                                    <p class="text-center">Room #2</p>
                                </div>
                            </a>
                        </div>
                         <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings3.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Junior Suite</h6>
                                    <p class="text-center">Room #3</p>
                                </div>
                            </a>
                        </div>
                         <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings4.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Deluxe Room</h6>
                                    <p class="text-center">Room #4</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings5.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Executive Room</h6>
                                    <p class="text-center">Room #5</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings6.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Master Suite</h6>
                                    <p class="text-center">Room #6</p>
                                </div>
                            </a>
                        </div>
                         <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings7.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Presidential room</h6>
                                    <p class="text-center">Room #7</p>
                                </div>
                            </a>
                        </div>
                         <div class="col-lg-3 col-md-2 mb-2 px-2">
                            <a href="ratings8.php" class="text-decoration-none">
                                <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop text-dark">
                                    <h6 class="text-center h-font"><br>Villa Suite</h6>
                                    <p class="text-center">Room #8</p>
                                </div>
                            </a>
                        </div>
                        

                </div>
            </div>



</div>

    </div>

            </div>
        </div>
        
    </div>

    <?php require('inc/scripts.php'); ?>
</body>
</html>
  <script src= "https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="scripts/settings.js"></script>

   
   <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay:{
        delay: 3500,
        disableOnInteraction: false,
      }
    });
    
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: 3,
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
            slidesPerView: 1,
        },
        640:{
            slidesPerView: 1,
        },
        
        768:{
            slidesPerView: 2,
        },
        1024:{
            slidesPerView: 3,
        },
      }
    });
  </script>