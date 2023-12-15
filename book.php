
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$Code = substr(number_format(time()* rand(), 0, '', ''), 0,6);

if (isset($_GET['date'])) {
    $Dat = $_GET['date'];
}

if (isset($_POST['submit'])) {

    $fname = $_POST['First_Name'];
    $mname = $_POST['Middle_Name'];
    $lname = $_POST['Last_Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $room = isset($_POST['room']) ? $_POST['room'] : ""; 
    $persons = isset($_POST['persons']) ? $_POST['persons'] : ""; 
    $Nights = isset($_POST['Nights']) ? $_POST['Nights'] : "";
    $ID_Number = $_POST['ID_number'];
    $Autonum = $_POST['Autonum'];
    $date = isset($Dat) ? $Dat : date('Y-m-d');

    $conn = new mysqli('localhost', 'root', '', 'lgwebsite');

    $sql = "INSERT INTO booking_details (First_Name, Middle_Name, Last_Name, Phone, Email, date, room, persons, Nights, ID_Number, Autonum) 
            VALUES ('$fname', '$mname', '$lname', '$Phone', '$Email', '$date', '$room', '$persons', '$Nights', '$ID_Number', '$Autonum')";

    if ($conn->query($sql)) {
        $message = "<div class='alert alert-success'>Booking Successful</div>";
    } else {
        $message = "<div class='alert alert-danger'>Booking was not Successful</div>";
    }

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lodgegohotel@gmail.com';
    $mail->Password = 'jgcq fnhd hrie sbss';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('lodgegohotel@gmail.com');

    $mail->addAddress($_POST["Email"]);

    $mail->isHTML(true);

    $mail->Subject = 'Booking Confirmation For'. ' ' .   $_POST["Last_Name"] . ', ' .  $_POST["First_Name"];
    $mail->Body = 'Thank you for booking LodgeGo Hotel! Your confirmation code is' . ' ' .  $Code . '.';

    $mail->send();

    echo
    "
    <script>
    alert('Booking success! Check your email for the confirmation code. Thank you!');
    document.location.href = 'index.php';
    </script>
    ";

}
?>
<?php 
$a = mt_rand(100000,999999); 

for ($i = 0; $i<6; $i++) 
{
   $a .= mt_rand(0,9);
}?>
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
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        .pop:hover {
            transform: scale(1.03);
            transition: all 0.3s;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>
<br>
<br>
<br>
<br>

<div class="container">
    <h3 class="text-center p-4 mb-3" style="background:#547972;border:none;color:#fff"> Book for date: <?php echo date('m/d/Y', strtotime($Dat)); ?></h3>
    <div class="row">
        <div class="col-md-12">
            <?php echo isset($message) ? $message : ''; ?>
            <form action="" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for=""> First Name</label>
                    <input type="text" class="form-control" name="First_Name" required>
                    <input type="hidden" class="form-control" name="Autonum" value="<?php echo 'TRAC' . $a; ?>" required>
                </div>
                <div class="form-group">
                    <label for=""> Middle Name</label>
                    <input type="text" class="form-control" name="Middle_Name" required>
                </div>
                <div class="form-group">
                    <label for=""> Last Name</label>
                    <input type="text" class="form-control" name="Last_Name" required>
                </div>
                <div class="form-group">
                    <label for=""> Phone Number</label>
                    <input type="number" class="form-control" name="Phone" required>
                </div>
                <div class="form-group">
                    <label for=""> Email</label>
                    <input type="Email" class="form-control" name="Email" required>
                </div>
               <label for="">Room (Select room type)</label>
                    <select id="room" name="room" class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="1">Standard Room</option>
                        <option value="2">Superior Room</option>
                        <option value="3">Junior Suite</option>
                        <option value="4">Deluxe Room</option>
                        <option value="5">Executive Room</option>
                        <option value="6">Master Suite</option>
                        <option value="7">Presidential room</option>
                        <option value="8">Villa Suite</option>
                </select>
                <label for="">Persons</label>
                <select id="persons" name="persons" class="form-select" aria-label="Default select example" required>
                    <option selected>How many?</option>
                </select>
                <label for="">Days (How many days)</label>
                <select id="Nights" name="Nights" class="form-select" aria-label="Default select example" required>
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
                <div class="form-group">
                    <label for=""> ID Number (National ID, Passport, etc.)</label>
                    <input type="text" class="form-control" name="ID_number" required>
                </div>
                <br>
                <br>
                <br>

                <button type="submit" name="submit" class="btn btn-outline-white text-white shadow-none custom-bg me-lg-2 me-2 p-2" onclick="window.location.href='emailconfirm.php'"> Submit </button>
                <a href="index.php" class="btn btn-outline-dark text-dark me-lg-2 me-2 p-2">Back</a>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#room").change(function () {
            var selectedRoom = $(this).val();
            var personsDropdown = $("#persons");

            personsDropdown.empty();

            if (selectedRoom == "1" || selectedRoom == "2" || selectedRoom == "3" || selectedRoom == "5") {
                // Standard Room, Superior Room, Junior Suite, Executive Room
                appendPersonsOptions(personsDropdown, 2);
            } else if (selectedRoom == "4" || selectedRoom == "7") {
                // Deluxe Room, Presidential Room
                appendPersonsOptions(personsDropdown, 3);
            } else if (selectedRoom == "6" || selectedRoom == "8") {
                // Master Suite, Villa Suite
                appendPersonsOptions(personsDropdown, 5);
            }
        });

        function appendPersonsOptions(select, count) {
            for (var i = 1; i <= count; i++) {
                select.append("<option value='" + i + "'>" + i + " Person" + (i > 1 ? "s" : "") + "</option>");
            }
        }
    });
</script>
</body>
</html>
