<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "lgwebsite";

    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_errno()) {
        die("Connection Failed" . mysqli_connect_error());
    }

    $query = "SELECT * FROM register WHERE email='$email' AND pass='$pass'";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows == 1) {
        header("Location: index.php");
        exit();
    } else {
        echo '<script>alert("Invalid User or Password!");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG Hotel - login</title>
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


?>

                    <br>
                    <br>
                    <br>

<div class="my-5 px-4">
<h4 class="mb-4 d-flex justify-content-evenly mb-2 h-font">LOGIN</h4>
<div class=" bg-dark"></div>

</div>
<div class="container">
    <div class="row">
        <!--room1-->
            <div class="card mb-4 border-0 shadow ">
                
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    </div>
                    <br>
                   <form method="POST">
                            <!-- Your form fields -->
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="pass" id="pass" class="form-control shadow-none" required>
                            </div>

                            <button type="submit" name="send" class="btn btn-outline-white text-white shadow-none custom-bg al">
                                Login
                            </button>
                        </form>


                               

                         <!-- <a href="calendar.php" class="btn btn-outline-white w-100 text-white shadow-none custom-bg mb-2">Book Now</a> -->
                                
                                   
                            
    </form>
                    </div>
                </div>
            </div>
                    <br>
                    <br>
                    <br>
             
                </div>
            </div>
       </div>
       
       
    </div>
</div>
 <!-- <script>
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
    </script> -->
<?php require('inc/footer.php'); ?>

</body>
</html>