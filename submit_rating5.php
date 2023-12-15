<?php
$conn = new mysqli('localhost', 'root', '', 'lgwebsite');

if (isset($_POST["rating_data"])) {
    $data = array(
        'user_name'     => $_POST["user_name"],
        'user_rating'   => $_POST["rating_data"],
        'user_review'   => $_POST["user_review"],
    );

    $query = 'INSERT INTO rating_room5(user_name, user_rating, user_review) VALUES (?, ?, ?)';

    $statement = $conn->prepare($query);

    // Bind parameters
    $statement->bind_param('sss', $data['user_name'], $data['user_rating'], $data['user_review']);

    // Execute the statement
    $statement->execute();
}

if (isset($_POST["action"])) {
    $average_rating = 0;
    $total_review = 0;
    $five_star_review = 0;
    $four_star_review = 0;
    $three_star_review = 0;
    $two_star_review = 0;
    $one_star_review = 0;
    $total_user_rating = 0;
    $review_content = array();

    $query = 'SELECT * FROM rating_room5 ORDER BY sr_no DESC';

    $result = $conn->query($query);

    foreach ($result as $row) {
        $review_content[] = array(
            'user_name'     => $row["user_name"],
            'user_review'   => $row["user_review"],
            'rating'        => $row["user_rating"],
        );

        if ($row["user_rating"] == '5') {
            $five_star_review++;
        } elseif ($row["user_rating"] == '4') {
            $four_star_review++;
        } elseif ($row["user_rating"] == '3') {
            $three_star_review++;
        } elseif ($row["user_rating"] == '2') {
            $two_star_review++;
        } elseif ($row["user_rating"] == '1') {
            $one_star_review++;
        }

        $total_review++;
        $total_user_rating = $total_user_rating + $row["user_rating"];
    }

    $average_rating = $total_user_rating / $total_review;

    $output = array(
        'average_rating'    => number_format($average_rating, 1),
        'total_review'      => $total_review,
        'five_star_review'  => $five_star_review,
        'four_star_review'  => $four_star_review,
        'three_star_review' => $three_star_review,
        'two_star_review'   => $two_star_review,
        'one_star_review'   => $one_star_review,
        'review_data'       => $review_content
    );

    echo json_encode($output);
}

?>
