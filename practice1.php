<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice #1</title>
</head>
<body>

<?php
// Practice 1
// Step 1:  Use the Echo Function to say hello with html h1 tags embedded inside php.
    // this will echo out hello in an h1 tag
    echo "<h1>hello</h1>";
// Step 2: Write a comment above the echo function and explain what that function is doing.

// Practice 2
// Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
    $number1 = 10;
    $number2 = 20;
// Step 2: Add the two variables and display the sum with echo:
    $result = $number1 +$number2;
    echo $result;
// Step 3: Make 2 Arrays with the same values, one regular and the other associative
    $array1 = [1,2,3,4,5,.13,3,4,5,6,1];
    $arraay2 = ['name' => "Austin Giles","email" => "this@that.com", "third_item" => "something"];
// Step 4: Make a constant and set it to the value of PHP. and use an echo to print it out
    define("ONE_CONSTANT", "PHP");
    echo ONE_CONSTANT;

// Practice 3
// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
    if ($number1 == $number2)
    {

    }else if($number2 == $result){

    }else{
        echo "I Love ". ONE_CONSTANT;
    }
// Step 2: Make a for loop that displays 10 numbers
    for($i=1,$i <= 10; $i++;){
        echo $i;
    }
// Step 3 : Make a switch Statement that test against one condition with 5 cases
    switch(x){
        case 1: {
            echo "Do this 1";
        }
        case 2: {
            echo "Do this 2";
        }
        case 3: {
            echo "Do this 3";
        }
        case 4: {
            echo "Do this 4";
        }
        case 5: {
            echo "Do this 5";
        }
    }

// Practice 4
// Step1: Define a function and make it return a calculation of 2 numbers
    function calculate2(){
        $num1 = 4;
        $num2 = 7;
        return $result = $num1 + $num2;
    }
    echo calculate2();
// Step 2: Make a function that passes parameters and call it using parameter values
    function parametercalc($val1, $val2){
        return $result = $val1 + $val2;
    }
    echo parametercalc(3,9);
// Practice 5
// Step1: Use a pre-built math function here and echo it
    echo $random1 = rand(1,68);
// Step 2:  Use a pre-built string function here and echo it
    echo strupper($array2["third_item"]);
// Step 3:  Use a pre-built Array function here and echo it
    echo sort($array1);
?>

</body>
</html>