<?php
require('inc/essentials.php');
require('inc/db_config.php');

adminLogin();

if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['del'] == 'all') {
        $q = "DELETE FROM `admin_gela`";
        if (mysqli_query($con, $q)) {
            alert('success', 'All Data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    } else {
        $q = "DELETE FROM `admin_gela` WHERE sr_no=?";
        $values = [$frm_data['del']];
        if (deleteData($q, $values)) { 
            alert('success', 'Data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    }
}

if (isset($_POST['submit'])) {
    $aname = $_POST['admin_name'];
    $apass = $_POST['admin_pass'];
    
    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO admin_gela (admin_name, admin_pass) VALUES (?, ?)");
    $stmt->bind_param("ss", $aname, $apass);
    
    if ($stmt->execute()) {
        alert('success', 'New Admin account added!');
    } else {
        alert('error', 'Registration not successful');
    }

    $stmt->close();
}

function deleteData($query, $values) {
    global $con;
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        if ($values) {
            mysqli_stmt_bind_param($stmt, str_repeat("s", count($values)), ...$values);
        }

        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    return false;
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
                            <i class="bi bi-trash3-fill"></i> Delete all read
                        </a>
                    </div>

                    <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light col-lg-12">
                                <th scope="col">#</th>
                                <th scope="col">Admin Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $q = "SELECT * FROM `admin_gela` ORDER BY sr_no DESC";
                            $data = mysqli_query($con, $q);
                            $i = 1;

                                                    while ($row = mysqli_fetch_assoc($data)) {
                                $deleteBtn = "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger'>Delete</a>";

                                echo <<<query
                                    <tr>
                                        <td>$i</td>
                                        <td>$row[admin_name]</td>
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
                <br>
                <br>
                                    <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 mb-5 px-4">
                            <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center">
                                <h5 class="text-center fw-bold h-font">Add new Admin Account</h5>

                                <form method="post">
                                    <div class="form-group">
                                        <label for="admin_name">Admin Name</label>
                                        <input type="text" class="form-control" name="admin_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="admin_pass">Admin Password</label>
                                        <input type="text" class="form-control" name="admin_pass" required>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-outline-white text-white shadow-none custom-bg me-lg-2 me-2 p-2">Submit</button>
                                
                                
                                </form>
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
