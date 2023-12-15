<?php
require('inc/essentials.php');
require('inc/db_config.php');

adminLogin();


if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['del'] == 'all') {
        $q = "DELETE FROM booking_details";
        if (mysqli_query($con, $q)) {
            alert('success', 'All Data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    } else {
        $q = "DELETE FROM booking_details WHERE sr_no=?";
        $values = [$frm_data['del']];
        if (delete($q, $values, 'i')) {
            alert('success', 'Data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Booking</title>
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

        .custom-bg {
            background-color: #a3ac84;
            border: 1px solid #eee6e1;
        }

        .custom-bg:hover {
            background-color: #4d4838;
            border-color: #eee6e1;
        }

        .custom-alert {
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

   
        <?php require('inc/header.php'); ?>
        <!-- Content on the right -->
        
        <div class="col-lg-10 ms-auto p-4 overflow-hidden " id="main-content">
            <h3 class="mb-4">Bookings</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="text-end mb-4">
                        <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                            <i class="bi bi-trash3-fill"></i> Delete all 
                        </a>
                    </div>

                    <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Room</th>
                                <th scope="col">Persons</th>
                                <th scope="col">Nights</th>
                                <th scope="col">ID Number</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $q = "SELECT * FROM booking_details ORDER BY sr_no DESC";
                            $data = mysqli_query($con, $q);
                            $i = 1;

                            while ($row = mysqli_fetch_assoc($data)) {
                                $deleteBtn = "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger'>Delete</a>";

                                echo <<<query
                                    <tr>
                                        <td>$i</td>
                                        <td>$row[First_Name]</td>
                                        <td>$row[Middle_Name]</td>
                                        <td>$row[Last_Name]</td>
                                        <td>$row[Phone]</td>
                                        <td>$row[Email]</td>
                                        <td>$row[date]</td>
                                        <td>$row[room]</td>
                                        <td>$row[persons]</td>
                                        <td>$row[Nights]</td>
                                        <td>$row[ID_Number]</td>
                                        <td>$deleteBtn</td>
                                    </tr>
                                query;
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container col-lg-12 ">
            <div class="row">
                    <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Standard Room</h6>
                            <p class="text-center">Room # 1</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Superior Room</h6>
                            <p class="text-center">Room # 2</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Junior Suite</h6>
                            <p class="text-center">Room # 3</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Deluxe Room</h6>
                            <p class="text-center">Room # 4</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Executive Room</h6>
                            <p class="text-center">Room # 5</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Master Suite</h6>
                            <p class="text-center">Room # 6</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Presidential room</h6>
                            <p class="text-center">Room # 7</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 mb-2 px-2 ">
                            <div class="bg-white rounded shadow p-2 border-top border-4 align-items-center pop">
                            <h6 class="text-center h-font"> <br>Villa Suite</h6>
                            <p class="text-center">Room # 8</p>
                            </div>
                        </div>
                        
                        
                        
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
