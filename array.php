<?php

// array
$nameArray = array();

$nameArray = array('Mg Mg', 'Kyaw Kyaw', 'Zaw Zaw');
// array index []
$nameArray[0] = 'Ko Ko';


// associative array key => value
$nameArray2 = array('name1'=>'Mg Mg', 'name2'=>'Kyaw Kyaw', 'name3'=>'Zaw Zaw');
$person = array('name' => 'Mg Mg', 'age' => 21,'isStudent' => true);

// mutidimensional array
$person2 = array(
    'name' => array('Mg Mg', 'Kyaw Kyaw', 'Zaw Zaw'),
    'friends' => array('Aye', 'Zin', 'Moe')
);

$condition = $condition1 = $condition2 = 1;
// one condition
if ($condition == 1) {
    // code
}

if ($condition == 2) {
    // code
} else {
    // code
}

// Elseif Statement
if ($condition1) {
    // code
} elseif ($condition2) {
    // code
} else {
    // code
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $nameArray[0]; ?></h1>
    <h1><?php echo $nameArray2['name2']; ?></h1>
    <h1><?php echo $person2['friends'][2];  ?></h1>
    <?php
        // loop
        // The while loop
        $i = 0;
        while($i < 10){
            echo "<h1>The number is: $i </h1><br>";
            $i++;
        }
    ?>
</body>
</html>