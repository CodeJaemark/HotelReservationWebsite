<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    $password = $_POST['pass'];
    $confirmPassword = $_POST['cpass'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo '<script>alert("Passwords do not match");</script>';
    } else {
        // Continue with the registration process
        $frm_data = filteration($_POST);
        $hashedPassword = password_hash($frm_data['pass'], PASSWORD_DEFAULT);

        $q = "INSERT INTO `register`(`name`, `email`, `pn`, `address`, `dob`, `pass`) VALUES (?,?,?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['email'], $frm_data['pn'], $frm_data['address'], $frm_data['dob'], $hashedPassword];

        $res = insert($q, $values, 'ssssss');
        if ($res == 1) {
            echo '<script>alert("Registration Successful!");</script>';
        } else {
            echo '<script>alert("Registration Failed. Please try again later.");</script>';
        }
    }
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG Hotel - ROOMS</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        .pop:hover {
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("cpass").addEventListener("input", function () {
                var pass = document.getElementById("pass").value;
                var cpass = document.getElementById("cpass").value;
                var errorSpan = document.getElementById("passwordError");

                if (pass !== cpass) {
                    errorSpan.textContent = "Passwords do not match";
                } else {
                    errorSpan.textContent = "";
                }
            });
        });
    </script>
</head>
<body class="bg-light">


<?php require('inc/header.php'); ?>

<?php
$register_q = "SELECT * FROM `register` WHERE `sr_no`=?";
$values = [1];
$register_r = mysqli_fetch_assoc(select($register_q, $values, 'i'));

?>
<div class="my-5 px-4">
<h4 class="mb-4 d-flex justify-content-evenly mb-2 h-font">REGISTER</h4>
<div class=" bg-dark"></div>

</div>
<div class="container">
    <div class="row">
        <!--room1-->
            <div class="card mb-4 border-0 shadow ">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    </div>
                    <form method="POST">
                                 <div class="col-md-12 ps-0 mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control shadow-none" required  >
                                    </div>
                                     <div class="col-md-12 p-0 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control shadow-none" required  >
                                    </div>
                                    <div class="col-md-12 p-0 mb-3" >
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" name="pn" class="form-control shadow-none" required  >
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
                                        <div class="col-md- ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control shadow-none" required>
                                </div>
                                <!-- <div class="col-md-6 p-0 mb-3 p-2">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="cpass" id="cpass" class="form-control shadow-none" required>
                                    <span id="passwordError" style="color: red;"></span>
                                </div> -->

                               

                         <!-- <a href="calendar.php" class="btn btn-outline-white w-100 text-white shadow-none custom-bg mb-2">Book Now</a> -->
                                
                                   
                             <button type="submit" name="send" class=" btn btn-outline-white text-white shadow-none custom-bg"> 
                                    REGISTER
                                </button>
    </form>
                    </div>
                </div>
            </div>
             
                </div>
            </div>
       </div>
       
       
    </div>
</div>
<?php
if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `register`(`name`, `email`, `pn`, `address`, `dob`, `pass`) VALUES (?,?,?,?,?,?)";

    $values = [$frm_data['name'], $frm_data['email'], $frm_data['pn'], $frm_data['address'], $frm_data['dob'], $frm_data['pass']];

    $res = insert($q, $values, 'ssssss');
    if ($res == 1) {
        echo '<script>alert("Registered!");</script>';
    } else {
        echo '<script>alert("Try Again");</script>';
    }
}
?>


 <script>
    document.getElementById("cpass").addEventListener("input", function () {
     var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
     var errorSpan = document.getElementById("passwordError");

    if (pass !== cpass) {
    errorSpan.textContent = "Passwords do not match";
    } else {
    errorSpan.textContent = "";
    }
    });
    </script>
<?php require('inc/footer.php'); ?>

</body>
</html>