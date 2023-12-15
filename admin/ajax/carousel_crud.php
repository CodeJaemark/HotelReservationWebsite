<?php

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['add_image'])) {
    $img_r = uploadImage($_FILES['picture'], CAROUSEL_FOLDER);

    if ($img_r === 'inv_img') {
        echo 'inv_img';
    } elseif ($img_r === 'inv_size') {
        echo 'inv_size';
    } elseif ($img_r === 'upd_failed') {
        echo 'upd_failed';
    } elseif ($img_r === null || $img_r === '') {
        echo 'error_upload'; // Handle upload failure
    } else {
        $q = "INSERT INTO carousel (`image`) VALUES (?)";
        $values = [$img_r];
        
        // Debug: Output the SQL query and values for further inspection
        echo "Query: $q\n";
        echo "Values: " . print_r($values, true) . "\n";

        $res = insert($q, $values, 's');

        if ($res === 1) {
            echo 'success';
        } else {
            echo 'error_insert'; // Handle insertion failure
        }
    }
}

if (isset($_POST['get_carousel'])) {
    $res = selectAll('carousel');

    while ($row = mysqli_fetch_assoc($res)) {
        $path = CAROUSEL_IMG_PATH;
        echo <<<data
        <div class="col-md-2 mb-3">
            <div class="card bg-dark text-white">
                <img src="$path$row[image]" class="card-img">
                <div class="carad-img-overlay text-end">
                    <button type="button" onclick="rem_member($row[sr_no]" class="btn btn-outline-white text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#carousel-s">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </div>
            </div>
        </div>
data;
    }
}
?>
