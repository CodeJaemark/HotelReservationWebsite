<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG Hotel - HOME</title>
  <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
<style>
  
    .availability-form{
        margin-top: -50px; ;
        z-index: 2;
        position:relative;
    }
    .pop:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
    @media screen and (max-width: 575px){
         .availability-form{
        margin-top: 25px; ;
        padding: 0 35px;
    }
    }
</style>

</head>
<body class="bg-light">


<?php require('inc/header.php'); ?>

<!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
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

    </div>

<!-- Availability -->
 
<div class="container availability-form" >
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded ">
            <br>
            <h3 class="mb-4 d-flex justify-content-evenly mb-2">ROOMS</h3>
            <form>
                <div class="container">
        <div class="row">
        <!--room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow pop" style="max-width: 550px; margin: auto; ">
                    <img src="images/rooms/1a.png" class="card-img-top">

                        <div class="card-body" >
                            <h5 class="fw-bold ">Standard Room</h5>
                            <h6 class="mb-4">₱1000 per night</h6>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Balcony 
                                    </span>
                            </div>

                             <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                           </div>

                             <div class="guest mb-4">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        2 Person
                                    </span>
                           </div>

                    
                          
                        </div>
                           <a href="rooms1.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> Explore Standard Room</a>
                       
                </div>
            </div>
        <!--room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow pop" style="max-width: 550px; margin: auto; ">
                    <img src="images/rooms/2a.png" class="card-img-top">

                        <div class="card-body">
                            <h5 class="fw-bold ">Junior Suite</h5>
                            <h6 class="mb-4">₱2200 per night</h6>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Balcony 
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Parlour 
                                    </span>
                            </div>

                             <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        TV
                                    </span>
                           </div>

                             <div class="guest mb-4">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        2 Person
                                    </span>
                           </div>

                      
                        </div>
                           <a href="rooms3.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> Explore Junior Suite</a>
                       
                </div>

                
            </div>
        <!--room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow pop" style="max-width: 550px; margin: auto; ">
                    <img src="images/rooms/5a.png" class="card-img-top">

                        <div class="card-body">
                            <h5 class="fw-bold ">Master Suite</h5>
                            <h6 class="mb-4">₱6600 per night</h6>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        2 Rooms
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        2 Bathrooms
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Balcony 
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Living Room 
                                    </span>
                                  
                            </div>

                             <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        TV
                                    </span>  
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Kitchen
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Jacuzzi
                                    </span>
                                    
                           </div>

                             <div class="guest mb-4">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        4-5 Person
                                    </span>
                           </div>
                       

                        </div>
                           <a href="rooms6.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> Explore Master Suite</a>
                       
                </div>  

                
                
            </div>
        <!--room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow pop" style="max-width: 550px; margin: auto; ">
                    <img src="images/rooms/4a.png" class="card-img-top">

                        <div class="card-body">
                            <h5 class="fw-bold ">Superior Room</h5>
                            <h6 class="mb-4">₱1800 per night</h6>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Rooms
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Parlour
                                    </span>
                                    
                            </div>

                             <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        TV
                                    </span>
                           </div>
                           
                             <div class="guest mb-4">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        2 Person
                                    </span>
                           </div>


                        </div>
                           <a href="rooms2.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> Explore Superior Room</a>
                       
                </div>

                
                
            </div>
        <!--room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow pop" style="max-width: 550px; margin: auto; ">
                    <img src="images/rooms/6a.png" class="card-img-top">

                        <div class="card-body">
                            <h5 class="fw-bold ">Deluxe Room</h5>
                            <h6 class="mb-4">₱3600 per night</h6>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        2 Beds
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Balcony 
                                    </span>
                                   
                            </div>

                             <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        TV
                                    </span>
                           </div>

                             <div class="guest mb-4">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        2-3 Person
                                    </span>
                           </div>
                          


                        </div>
                           <a href="rooms4.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> Explore Deluxe Room</a>
                       
                </div>

                
                
            </div>
        <!--room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow pop" style="max-width: 550px; margin: auto; ">
                    <img src="images/rooms/3a.png" class="card-img-top">

                        <div class="card-body">
                            <h5 class="fw-bold ">Executive Room</h5>
                            <h6 class="mb-4">₱4400 per night</h6>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Balcony 
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Living Room 
                                    </span>
                            </div>

                             <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        TV
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Desk
                                    </span>
                                    
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Kitchen
                                    </span>
                           </div>

                             <div class="guest mb-4">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        2 Person
                                    </span>
                           </div>
                           


                        </div>
                           <a href="rooms5.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> Explore Executive Room</a>
                       
                </div>

                
                
            </div>


            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class=" btn btn-outline-white text-white shadow-none custom-bg"> More Rooms</a>
                <a href="calendar.php" class="btn btn-outline-white text-white shadow-none custom-bg">Book Now</a>
            </div>
        
        
                                
          </div>
        </div>
    </div>

                <!-- <div class="d-flex justify-content-evenly mb-2" >
                                 <a href="calendar.php" class="btn btn-outline-white text-white shadow-none custom-bg">Book Now</a>
                                
                           </div> -->
                <!-- <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                                 <label class="form-label font-weight:500;">Check-in</label>
                                 <input type="date" class="form-control shadow-none"  >
                    </div>
                     <div class="col-lg-3 mb-3">
                                <label class="form-label font-weight:500;">Check-out</label>
                                 <input type="date" class="form-control shadow-none"  >
                    </div>
                    <div class="col-lg-3 mb-3">
                            <label class="form-label font-weight:500;">Adult</label>
                            <select class="form-select shadow-none" >
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>

                            </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                            <label class="form-label font-weight:500;">Children</label>
                            <select class="form-select shadow-none" >
                                    <option value="1">None</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option> -->

                            <!-- </select> -->
                    </div>
                     
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div> 


    <!--<h2 class="mt-5 pt-4 mb-4 text-center h-font">FACILITIES</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2"></div>
                <img src="" width="80px">
                <h5 class="">Wifi</h5>
            </div>
            </div>-->

            
 <!-- Testimonials -->           


<h2 class="mt-5 pt-4 mb-4 text-center h-font"></h2>
<h5 class="mb-4 d-flex justify-content-evenly mb-2">LODGEGO POSITIVE REVIEWS FROM PARTNERS</h5>
        <div class="container mt-5">
            <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
                     <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="images/facilities/profile.png" width="30px">
                        <h6 class="m-0 ms-2 fw-bold ">Maria Cruz</h6>
                    </div>
                    <p>
                        Staying at LodgeGo Hotel was like being part of nature's symphony. The horseback rides, scenic boat trips, 
                        and the charming dining area added a unique touch. The Rodriguez family have created something 
                        truly special here.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.png" width="30px">
                        <h6 class="m-0 ms-2 fw-bold">Isabella Reyes</h6>
                    </div>
                    <p>
                        The attention to detail at LodgeGo Hotel is unparalleled. 
                        The staff's hospitality was exceptional, and every moment felt like a 
                        personalized experience. Highly recommended!"
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                    </div>
                 <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.png" width="30px">
                        <h6 class="m-0 ms-2 fw-bold">Eduardo Lim</h6>
                    </div>
                    <p>
                        Our stay at LodgeGo Hotel was nothing short of enchanting. 
                        The serene boat rides, the cozy campfire nights, and the delectable dining experience
                         each element added magic to our getaway. Kudos to the founders for creating such a memorable retreat!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                    </div>
                 <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.png" width="30px">
                        <h6 class="m-0 ms-2 fw-bold">Lorraine Alvaro</h6>
                    </div>
                    <p>
                        LodgeGo Hotel exceeded all expectations. The ambiance, coupled with the activities like fishing by the lake, created an unforgettable experience. 
                        The Rodriguez and Pascual families have truly created a haven for those looking to escape, unwind, and connect with nature.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                    </div>
                 <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.png" width="30px">
                        <h6 class="m-0 ms-2 fw-bold">Roberto Santos</h6>
                    </div>
                    <p>
                        LodgeGo Hotel is a hidden gem nestled by the lake. The picturesque views, serene private pool, 
                        and the warm hospitality make it an absolute delight. A perfect escape for anyone seeking tranquility and luxury. Can't wait to return!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                    </div>


    </div>
    <div class="swiper-pagination"></div>
  </div>
        </div>
    
 <!-- Reach Us -->      
 
 <?php
$contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));

?>

 
<h2 class="mt-5 pt-4 mb-4 text-center h-font"></h2>
<h5 class="mb-4 d-flex justify-content-evenly mb-2">REACH US</h5>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-1 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded" height="250px" src="<?php echo $contact_r['iframe'] ?>" style="border: 0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Call us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?> </a>
                        <br>
                
                      <?php
                        if ($contact_r['pn2'] != '') {
                            echo <<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                            </a>
                        data;
                        }
                        ?>


 </div>
              <div class="bg-white p-4 rounded mb-4">
                <h5>Follow us</h5>
                <a href="https://www.facebook.com/" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook"></i> Facebook</span>
                </a>
                <br>
                 <a href="https://www.instagram.com/" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram"></i> Instagram</span>
                    
                </a>
            </div>
            
        </div>
    </div>
</div>

<?php require('inc/footer.php'); ?>

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
</body>
</html>