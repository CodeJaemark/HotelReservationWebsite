<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', '', 'lgwebsite');

    // Check connection
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    $stmt = $mysqli->prepare("SELECT * FROM booking_details WHERE MONTH('Date') = ? AND YEAR('Date') = ?");
    if (!$stmt) {
        die('Error in preparing SQL statement: ' . $mysqli->error);
    }

    $stmt->bind_param('ss', $month, $year);

    $bookings = array();
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = $row['Date'];
            }

            $stmt->close();
        }
    } else {
        die('Error in executing SQL statement: ' . $stmt->error);
    }
	
    
    
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
     $firstDayOfMonth = mktime(0, 0, 0, intval($month), 1, intval($year));
     $numberDays = date('t',$firstDayOfMonth);
     $dateComponents = getdate($firstDayOfMonth);
     $monthName = $dateComponents['month'];
     $dayOfWeek = $dateComponents['wday'];

    $datetoday = date('Y-m-d');
   
    $prev_month = date('m', strtotime("-1 month", strtotime("$year-$month-01")));
    $prev_year = date('Y', strtotime("-1 month", strtotime("$year-$month-01")));
    $next_month = date('m', strtotime("+1 month", strtotime("$year-$month-01")));
    $next_year = date('Y', strtotime("+1 month", strtotime("$year-$month-01")));


    $calendar = "<center><h2>$monthName $year</h2>";
    $calendar .= "<a class='btn btn-outline-white text-white shadow-none custom-bg' href='?month=".$prev_month."&year=".$prev_year."'>Prev Month</a> ";
    $calendar .= "<a class='btn btn btn-outline-white text-white shadow-none custom-bg' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    $calendar .= "<a class='btn btn-outline-white text-white shadow-none custom-bg' href='?month=".$next_month."&year=".$next_year."'>Next Month</a></center> ";


    $calendar .= "<br><table class='table table-bordered'>";
    $calendar .= "<tr>";
     foreach($daysOfWeek as $day) {
          $calendar .= "<th  class='header'>$day</th>";
     } 

     $currentDay = 1;
     $calendar .= "</tr><tr>";


     if ($dayOfWeek > 0) { 
         for($k=0;$k<$dayOfWeek;$k++){
                $calendar .= "<td  class='empty'></td>"; 

         }
     }
    
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
          
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs' disabled>N/A</button>";
         }elseif(in_array($date, $bookings)){
             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'> <span class='glyphicon glyphicon-lock
             '></span> Already Booked</button>";
         }else{
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=".$date."' class='btn btn-success btn-xs'> <span class='glyphicon glyphicon-ok'></span> Book Now</a>";
         }
            
          $calendar .="</td>";
          $currentDay++;
          $dayOfWeek++;
     }

     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>"; 
         }
     }
     
     $calendar .= "</tr>";
     $calendar .= "</table>";
     echo $calendar;

}
    
?>

<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG Hotel - HOME</title>
  <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
<style>
  
    .availability-form{
        margin-top: -50px; ;
        z-index: 2;
        position:relative;
    }
    .pop:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
    @media screen and (max-width: 575px){
         .availability-form{
        margin-top: 25px; ;
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
         <div class="col-lg-12 col-md-6 mb-5 px-2 p-8">
             <div class="bg-white rounded shadow p-4 border-top border-4 align-items-center">
                        <h2 class=" h-front text-center">Book</h2>

                        <?php
                            $dateComponents = getdate();
                            if(isset($_GET['month']) && isset($_GET['year'])){
                                $month = $_GET['month'];
                                $year = $_GET['year'];
                            }else{
                                $month = $dateComponents['month'];
                                $year = $dateComponents['year'];
                            }
                            echo build_calendar($month, $year);
                        ?>
                        </div>
                        
                    
                    </div>
             </div>
        </div>
        <br>
        <br>

<?php require('inc/footer.php'); ?>

</body>
</html>
