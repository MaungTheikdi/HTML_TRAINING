<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $today = "Monday";
    if ($today == "Monday") {
        echo "ယနေ့သည် တနင်္လာနေ့ ဖြစ်သည်။";
    } elseif ($today == "Tuesday") {
        echo "Today is Tuesday";
    } elseif ($today == "Wednesday") {
        echo "Today is Wednesday";
    } elseif ($today == "Thursday") {
        echo "Today is Thursday";
    } elseif ($today == "Friday") {
        echo "Today is Friday";
    } elseif ($today == "Saturday") {
        echo "Today is Saturday";
    } elseif ($today == "Sunday") {
        echo "Today is Sunday";
    } else {
        echo "Invalid day";
    }

    $condition = 4;
    switch ($condition){
        case 1:
            echo "Condition 1";
            break;
        case 2:
            echo "Condition 2";
            break;
        case 3:
            echo "Condition 3";
            break;
        default:
            echo "Default condition";
            break;
    }

    // switch case
    switch ($today) {
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "Today is Wednesday";
            break;
        case "Thursday":
            echo "Today is Thursday";
            break;
        case "Friday":
            echo "Today is Friday";
            break;
        case "Saturday":
            echo "Today is Saturday";
            break;
        case "Sunday":
            echo "Today is Sunday";
            break;
        default:
            echo "Invalid day";
            break;
    }


    // Switch statement
    $day = 3;
    switch($day){
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid day";
    }


?>
</body>
</html>