<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic web app</title>
    <style>
        body{height: 600px !important;
        background-color: chocolate !important;  }
    </style>
</head>

<body>
<?php 
 include('./nav_folder/navFile.php');
 $result ='';
 
 function mycalc($num1, $opera, $num2){

switch($opera){
case 'add':
    $result = $num1 + $num2;
    break;
case 'multiply':
 $result = $num1 * $num2;
        break;
case 'subtract':
     $result = $num1 - $num2;
     break;
default:
$result ="Error!!!!!" ;
}
return $result;
 }
 if(isset($_POST['submit'])){
    $operational = $_POST['opera'];
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];

$result_func = mycalc($number1, $operational, $number2);
  
 }
 
 echo " <h1> Your answer is
   $result_func </h1>";
 echo "<br>";
 include('./nav_folder/footer.php');
 ?>
</body>

</html>
