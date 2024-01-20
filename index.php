<?php

 $test = "testing";
 if($test == "testing") {
     echo "All seems fine";
     } else {
     echo  "All seems not fine";
 }
 ?>

 <br>

<?php

 $a = 204;
 $b = 300;
 $c = 405;

 if($a > $b && $a > $c ){
     echo "$a is greater than $b and $c";
 } else if ($b > $a && $b > $c ){
     echo "$b is greater than $a and $c";
 } else {
     echo "$c is greater than $a and $b";
 }
 ?>
 <br>
<?php

 function getGreaterNumber (){
 $a = 2056;
 $b = 3000;
 $c = 404;

 if($a > $b && $a > $c ){
     echo "$a is greater than $b and $c";
 } else if ($b > $a && $b > $c ){
     echo "$b is greater than $a and $c";
} else {
    echo "$c is greater than $a and $b";
 }
 }
 getGreaterNumber();
?>
<?php

function getNumber ($a1,$b1,$c1){
    $a = $a1;
    $b = $b1;
    $c = $c1;
    
    if($a > $b && $a > $c ){
        echo "$a is greater than $b and $c";
    } else if ($b > $a && $b > $c ){
        echo "$b is greater than $a and $c";
    } else {
        echo "$c is greater than $a and $b";
    }
    }
    getNumber(100,40,80);
?>

// Example - 2
<?php

 $userName = "testUser";
 $userPass = "123456";

 if($userName == "testUser"){
  if($userPass == "123456"){
     echo "Log in success";
 } else {
     echo "Log in fail";
  };
 } else    {
     echo "Your name is not correct";
 }
 ?>

 <?php

 function checkUser ($user, $pass){
     $userName = $user;
     $userPass = $pass;

     if($userName == "testUser"){
         if($userPass == "839948"){
            echo "<h1 >Log in success </h1>";
         } else {           
             echo "Log in fail";
        };
        } else {
            echo "Your name is not correct";
       };
 }
 checkUser("testUser","839948");
?>
//Example-3
<?php


 function getResult (){
     $num = 51;

 if ($num % 2 == 0){
     echo "$num is an even number";
 } else {
     echo "$num is an odd number";
 };
 }
 getResult();
?>


// Example - 4
<?php

 $num = 50;

 echo $num % 2 == 0 ? "Even": "Odd";
 ?>

 


// Example - 5 
<?php
  

 $num = 50;

 switch($num){
     case 50 : 
         echo "The number is an even number";
         break;
     case 40 :
         echo "The number is an odd numver";
         break;
 } 
 ?>


// // INDEXING Array 
<?php
$num = [20,"test"];
$test= array (20,50);

 echo "<pre>";
var_dump($num);
 print_r($num); 
 echo "</pre>";


// ASSOCIATING Array 

 $num = [
     "Name" => "Orvee",
     "Age" => "24",
     "Institute" => "Islamic University Chattogram"
 ];

 echo "<pre>";
var_dump($num);
print_r($num); 
 print_r($num["Name"]. " is a student.He is ". $num["Age"] ." years old");
  echo "</pre>";



// MULTIDIMENSIONAL Array 

$test = [
    "Name" => "Orvee",
    "Age" => "24",
    "Institute" => 
     [
        "SSC"=> "2016",
        "HSC" => "2018", 
        "BSc" => "2022"
     ],
    "SocialMedia" => [
        "facebook" => "www.facebook.com/imrulibtehaz",
        "Instagram" => "www.instagram.com/veeor"
    ],
];

echo "<pre>";
print_r("My name is ".$test["Name"].". I am ". $test["Age"]. " years old." . " My facebook id is " . $test["SocialMedia"]["facebook"] .".");
echo "</pre>";


?>