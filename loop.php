<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php  ?></h1>
    <h1><?php  ?></h1>
    <h1><?php  ?></h1>
    <?php
        // loop
        // The while loop
        $i = 0;
        while($i < 10){
            //echo "<h1>The number is: $i </h1><br>";
            $i++;
        }
        
        // Do while loops
        // phone number or name 
        // length of string -> row number
        $j = 0;
        do {
            //echo "<h1>The j value is: $j </h1><br>";
            $j++;
        } while ($j < 11);


        // For loops
        //for (ini; con; exc){}
        for($k = 1; $k <= 12; $k++){
            //echo "<h1>The number is: $k </h1><br>";
        }

        // Nested loops
        for($l = 0; $l < 5; $l++){
            for($m = 0; $m < 5; $m++){
                //echo "<span>The value of L is: $l, and M is: $m </span><br>";
            }
        }
        //Exercises
        //print
        //2x1 = 2
        //2x2 = 4
        //2x3 = 6 ...
        //2x9 = 18
        //using the for loop
        for($i=1; $i<10; $i++){
            echo '2 x '.$i.' = '.$i*2;
            echo "<br>";

        }



        
        // foreach loops
        $numbers = array(1, 2, 3, 4, 5);
        foreach($numbers as $number){
            //echo "<h1>The number is: $number </h1><br>";
        }

        

        // break and continue statements
        for($n = 0; $n < 10; $n++){
            if($n == 5){
                break;
            }
            //echo "<h1>The number is: $n </h1><br>";
        }

        for($o = 0; $o < 10; $o++){
            if($o == 5){
                continue;
            }
            //echo "<h1>The number is: $o </h1><br>";
        }

        // Functions
        function addNumbers($num1, $num2){
            return $num1 + $num2;
        }
        //echo "<h1>The sum is: ". addNumbers(5, 10). "</h1><br>";

        // Arrays
        $nameArray = array("John", "Jane", "Mike");
        //echo "<h1>".$nameArray[0]."</h1><br>";

        // Associative arrays
        $person = array("name" => "John", "age" => 30, "city" => "New York");
        //echo "<h1>".$person["name"]."</h1><br>";

        // Multidimensional arrays
        $person2 = array(
            array("name" => "John", "age" => 30, "city" => "New York"),
            array("name" => "Jane", "age" => 25, "city" => "Los Angeles")
        );
        //echo "<h1>".$person2[0]["name"]."</h1><br>";

        // Objects
        class Person {
            public $name;
            public $age;
            public $city;
            
            function __construct($name, $age, $city) {
                $this->name = $name;
                $this->age = $age;
                $this->city = $city;
            }
            
            function introduce(){
                echo "Hello, my name is ".$this->name.", I am ".$this->age." years old, and I live in ".$this->city.".<br>";
            }
            
            function changeCity($newCity){
                $this->city = $newCity;
            }
            
            function getDetails(){
                return "Name: ".$this->name.", Age: ".$this->age.", City: ".$this->city;
            }
        }
        
        // Create an object and call methods
        //$person1 = new Person("John", 30, "New York");
        //$person1->introduce();
        //$person1->changeCity("Los Angeles");
        //echo "Updated city: ".$person1->getDetails()."<br>";


    ?>
</body>
</html>