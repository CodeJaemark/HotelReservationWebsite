 <!-- Footer -->           
    
    <div class="container-fluid bg-white mt-5 jus" >
    <div class="row ">
        <div class="col-lg-4 p-4 margin: auto;">
            <h5 class=" me-5 fs-3" name="site_title">LodgeGo Hotel</h5>
            <p name="site_about">
                Discover serenity at LodgeGo Hotel, situated by a tranquil lake. 
                Our upscale accommodations offer a perfect blend of luxury and nature's beauty. 
                Enjoy breathtaking views, upscale amenities, and the soothing ambiance for an unforgettable retreat.
            </p>
        </div>
        <div class="col-lg-4 p-4 margin: auto; ">
            <h5 class="mb-2 fw-bold ">Links</h5>
            <a href="index.php" class="d-inline-block mb-2  text-dark text-decoration-none">Home</a> <br>
            <a href="rooms.php" class="d-inline-block mb-2  text-dark text-decoration-none">Rooms</a> <br>            
            <a href="facilities.php" class="d-inline-block mb-2  text-dark text-decoration-none">Amenities</a> <br>
            <a href="contact.php" class="d-inline-block mb-2  text-dark text-decoration-none">Contact Us</a> <br>
            <a href="aboutus.php" class="d-inline-block mb-2  text-dark text-decoration-none">About Us</a> 
        </div>
        <div class="col-lg-4 p-4 margin: auto;">
            <h5 class="mb-2 fw-bold">Follow Us</h5>
             <a href="https://www.facebook.com/" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-facebook"></i> Facebook</a>
                <br>
                <a href="https://www.instagram.com/" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-instagram"></i> Instagram</a>
        </div> <br>
        
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function setActive(){

    }
    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', (e)=>{
        e.preventDefault();

        let data = new FormData();
        data.append('name',register_form.elements['name'].value);
        data.append('email',register_form.elements['email'].value);
        data.append('phonenum',register_form.elements['phonenum'].value);
        data.append('address',register_form.elements['address'].value);
        data.append('pincode',register_form.elements['pincode'].value);
        data.append('dob',register_form.elements['dob'].value);
        data.append('pass',register_form.elements['pass'].value);
        data.append('profile',register_form.elements['profile'].files[0]);
        data.append('register','');

        var myModal = document.getElementById('registerModal');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/login_register.php",true);

        xhr.onload = function(){
            alert('success', "Registration Successful");
            register_form.reset();
        }

        xhr.send(data);

    });
    setActive();
</script>