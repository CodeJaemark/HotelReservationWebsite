<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG Hotel - CONTACT</title>
  <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">


</head>
<body class="bg-light">


<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
<h2 class=" h-front text-center">CONTACT US</h2>
<div class=" bg-dark"></div>
<p class="text-center mt-3">Contacting us is easy! Whether you have questions, feedback, or inquiries, 
    <br>we're here to assist. Reach out to our dedicated team through our website's contact form, and expect 
    <br>a prompt and personalized response. Your satisfaction is our priority, and we look forward to connecting 
    <br>with you. Feel free to drop us a message, and let's make your experience with us exceptional.
    beauty.
</p>
</div>

<?php
$contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));

?>


<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center pop">
            <img src="contact/16c.png" width="340px">
            <h5 class="text-center fw-bold h-font"> <br>Walk-In</h5>
            <p>Step into convenience with our walk-in booking option. 
                No reservations needed – just walk in and let us take care of the rest. 
                <br><br>
                Our friendly staff is ready to make your spontaneous visit special,
                 ensuring a seamless and delightful experience.</p>
        </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-5 px-4 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center pop">
            <img src="contact/17c.png" width="340px">
            <h5 class="text-center fw-bold h-font"> <br>Call for Reservation</h5>
            <p>Elevate your experience by reserving your spot with a simple call. 
                Dial us and let our dedicated team 
                assist you in securing your reservation. 
                <br>
                <br>A quick call ensures that your 
                plans are in place, adding convenience to your visit. 
               </p>
        </div>
        </div>
        
         <div class="col-lg-4 col-md-6 mb-5 px-4 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center pop">
            <img src="contact/18c.png" width="340px">
            <h5 class="text-center fw-bold h-font"> <br>Book Online</h5>
            <p>Experience the ease of planning with our online reservation system. 
                Visit our website, select your desired date and service, and secure
                 your spot with a few clicks. Our online reservation ensures that your experience with us is tailored to your
                  preferences. </p>
                  
        </div>
        
        </div>
           
            
         <div class="col-lg-6 col-md-6 mb-5 px-2 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center pop">
            <iframe class="w-100 rounded mb-6" height="350px" src="<?php echo $contact_r['iframe'] ?>"  style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h6 class=" fw-bold h-font">  Address</h6>
                <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-nonetext-dark mb-2">
                   <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
                </a>
                

                <h6 class=" fw-bold h-font"> <br>Call for Reservation</h6>
                <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?> </a>
                    <br>

                      <?php
                        if ($contact_r['pn2'] != '') {
                            echo <<<data
                            <a href="tel: +{$contact_r['pn2']}" class="d-inline-block text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> +{$contact_r['pn2']}
                            </a>
                        data;
                        }
                        ?>


              
                <h6 class=" fw-bold h-font mt-4">Email</h6>
                <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?></a>
                    <div class="col-lg-6 col-md-6 px-4">
                    <br>
                

                </div>
            </div>
        </div>
                    
         <div class="col-lg-6 col-md-6 mb-5 px-2 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center pop">
                    <form method="POST">
                        <h5>Send a Message</h5>
                                <div class="mb-3">
                                <label class="form-label" style="font-weight:500;">Name</label>
                                <input name="name" required type="text" class="form-control shadow-none"  >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500;">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none"  >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500;">Subject</label>
                                <input name="subject" required type="text" class="form-control shadow-none"  >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500;">Message</label>
                                <textarea name="message" required class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                            </div>
                            
                             <button type="submit" name="send" class=" btn btn-outline-white text-white shadow-none custom-bg">
                                    SEND
                                </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
        if(isset($_POST['send'])) {
            $frm_data = filteration($_POST);
            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

            $res = insert($q, $values, 'ssss');
            if ($res == 1) {
                echo '<script>alert("Mail sent!");</script>';
            } else {
                echo '<script>alert("Try Again");</script>';
            }
        }

        ?>

<?php require('inc/footer.php'); ?>

</body>
</html>