<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG Hotel - Room1</title>
  <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
     .pop:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
</style>

</head>
<body class="bg-light">


<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
<div class=" bg-dark"></div>

</div>
<div class="container">
    <div class="row">
        <!--room1-->
            <div class="card mb-4 border-0 shadow ">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <br>
                    <img src="images/rooms/1a.png" class="img-fluid rounded">
                    </div>
                     <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <br>
                     <h5 class="mb-3 fw-bold ">Standard Room</h5>
                     
                     <br>
                                <h6 class="mb-4 fw-bold">₱1000 per night</h6>

                        <div class="features mb-3">
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
                        <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        Aircon
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                            </div>
                         <div class="guest">
                                <h6 class="mb-1">Guest</h6>
                                     <span class="badge bg-light text-dark text-wrap">
                                        2 Person
                                    </span>
                                    <br>
                           </div>
                    </div>
                     <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h4 class="text-warning mt-4 mb-4 h-font">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h4>
                        
                                <div class="mb-3">
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <br>
                                    <br>
                                <h6><span id="total_review">0</span> Review</h6>
                                    
                                    </div>
                            </div>
                                    <br>
                                    <br>

   <!-- Carousel -->
     <div class="col-lg-12 col-md-4 mb-5 px-2">
    

    <div class="container-fluid px-lg-4 mt-4">
         <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/r1c.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/r1b.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/r1a.png" class="w-100 d-block" />
      </div>
     
      
    </div>
  </div>

    </div>
     </div>
      <!--ratings-->
                            <div class="col-lg-12 col-md-4 mb-5 px-2">
                            <div class="card-header texr-center">Reviews</div>

                                <p>
                                    <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                                    <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                                    </div>
                                </p>
                                <p>
                                    <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                                    
                                    <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                                    </div>               
                                </p>
                                <p>
                                    <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                                    
                                    <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                                    </div>               
                                </p>
                                <p>
                                    <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                                    
                                    <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                                    </div>               
                                </p>
                                <p>
                                    <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                                    
                                    <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                                    </div>               
                                </p>
                                <br>
                                <button type="button" name="add_review" id="add_review" class="btn btn-outline-white text-white shadow-none custom-bg">Add a Review</button>

                            </div>
                    <div class=" col-lg-12 col-md-4 mb-2 px-2" id="review_content"></div>
                </div> 
                </div>
                </div>
            </div>
        
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-outline-white text-white shadow-none custom-bg">Back</a>
            </div>
       </div>
       
 
        
                    
    		
    			
       
       
    </div>
</div>



<?php require('inc/footer.php'); ?>

</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
	          		
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="col-lg-12 text-center mt-5">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		  <button type="submit" class=" btn btn-outline-white text-white shadow-none custom-bg" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>
<script>
   $(document).ready(function () {
    var rating_data = 0;

    $('#add_review').click(function () {
        $('#review_modal').modal('show');
    });

    $(document).on('mouseenter', '.submit_star', function () {
        var rating = $(this).data('rating');
        reset_background();
        for (var count = 1; count <= rating; count++) {
            $('#submit_star_' + count).addClass('text-warning');
        }
    });

    function reset_background() {
        for (var count = 1; count <= 5; count++) {
            $('#submit_star_' + count).addClass('star-light');
            $('#submit_star_' + count).removeClass('text-warning');
        }
    }

    $(document).on('mouseleave', '.submit_star', function () {
        reset_background();
        for (var count = 1; count <= rating_data; count++) {
            $('#submit_star_' + count).removeClass('star-light');
            $('#submit_star_' + count).addClass('text-warning');
        }
    });

    $(document).on('click', '.submit_star', function () {
        rating_data = $(this).data('rating');
    });

    $('#save_review').click(function () {
    var user_name = $('#user_name').val();
    var user_review = $('#user_review').val();
    
    if (user_name == '' || user_review == '') {
        alert("Please Fill Both Fields");
        return false;
    } else {
        $.ajax({
            url: "submit_rating1.php",
            method: "POST",
            data: { rating_data: rating_data, user_name: user_name, user_review: user_review },
            success: function (data) {
                $('#review_modal').modal('hide');
                load_rating_data();
                alert("Review Submitted"); // Display pop-up message
            }
        })
    }
});


    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating1.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';


                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }


    });
</script>
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