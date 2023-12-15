<?php

require('inc/essentials.php');
require('inc/db_config.php');

adminLogin();
    if (isset($_GET['seen'])) {
    $frm_data = filteration($_GET);

    if (isset($frm_data['seen']) && $frm_data['seen'] == 'all') {
         $q = "UPDATE rating_room5 SET seen=?";
        $values = [1];  
        if (update($q, $values, 'i')) {
            alert('success', 'Marked all as read');
    } else {
    }
            alert('error', 'Operation Failed');
    } else {
        if (isset($frm_data['seen'])) {
            $q = "UPDATE rating_room5 SET seen=? WHERE sr_no=?";
            $values = [1, $frm_data['seen']];  
            if (update($q, $values, 'ii')) {
                alert('success', 'Marked as read');
            } else {
                alert('error', 'Operation Failed');
            }
        }
    }
}

        if (isset($_GET['del'])) {
            $frm_data = filteration($_GET);

            if ($frm_data['del'] == 'all') {
                $q = "DELETE FROM rating_room5";
                if (mysqli_query($con,$q)) {
                    alert('success', 'All Data deleted!');
                } else {
                    alert('error', 'Operation Failed');
                }
            } else {
                $q = "DELETE FROM rating_room5 WHERE sr_no=?";
                $values = [$frm_data['del']];  // Corrected $$frm_data to $frm_data
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
    <title>Admin Panel - Room5 Ratings</title>
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
        .custom-bg{
            background-color: #a3ac84;
            border: 1px solid #eee6e1;
        }
        .custom-bg:hover{
            background-color: #4d4838;
            border-color: #eee6e1;

        }
            .custom-alert{
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
            <!--adminpanel-->
            
            <?php require('inc/header.php'); ?>

            
            <!-- Content on the right -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden " id="main-content">
            <h3 class="mb-4">Executive Room</h3>
            <!-- Carousel Section -->

                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">

                            <div class="text-end mb-4">
                                <!-- <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                                    <i class="bi bi-check-all"></i> Mark all read</a> -->
                                <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                                    <i class="bi bi-trash3-fill"></i> Delete all read</a>


                            </div>
                                
                            <div class="table-responsive-md" style="height:450px; overflow-y: scroll;">
                                <table class="table table-hover border">
                                        <thead class="sticky-top">
                                            <tr class="bg-dark text-light">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Star Rating</th>
                                            <th scope="col">Review</th>
                                            <th scope="col">Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                $q = "SELECT * FROM rating_room5 ORDER BY sr_no DESC";
                                                $data = mysqli_query($con, $q);
                                                $i = 1;

                                                                                            
                                                while ($row = mysqli_fetch_assoc($data)) {
                                                    $markAsReadBtn = (isset($row['seen']) && $row['seen'] != 1) ? "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary custom-bg'>Mark as read</a>" : "";
                                                    $deleteBtn = "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger'>Delete</a>";

                                                    echo <<<query
                                                        <tr>
                                                            <td>$i</td>
                                                            <td>$row[user_name]</td>
                                                            <td>$row[user_rating]</td>
                                                            <td>$row[user_review]</td>
                                                            <td>$markAsReadBtn $deleteBtn</td>
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
                    </div>
            </div>
   
        </div>
   

    <?php require('inc/scripts.php'); ?>

</body>
</html>
