<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>

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
 
<!-- Content on the right -->
            <div class="col-lg-12 ms-auto p-0 overflow-hidden" id="main-content">
                            
                <div class="my-5 px-0">
                <h2 class=" h-front text-center">LodgeGo Hotel</h2>
                <div class=" bg-dark"></div>
                <p class="text-center mt-3 align-items-justify">
                    Welcome to LodgeGo Hotel, where your escape to tranquility begins. 
                    Nestled in the embrace of nature, our hotel offers a harmonious 
                    blend of luxury and natural beauty.<br> From our scenic dining area 
                    and private pool to the allure of horseback adventures and the 
                    refreshing embrace of our lake, <br>LodgeGo Hotel is a haven for those 
                    seeking an immersive retreat.
                
                </p>
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