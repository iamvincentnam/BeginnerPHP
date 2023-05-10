
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
 

//  the code for collecting and saving values from an input into the database goes here.
   include_once('dbase.php');

   if(isset($_POST["submit"])){
    
    $firstName =mysqli_real_escape_string($connection,$_POST["firstname"]) ;
    $lastName =mysqli_real_escape_string($connection, $_POST["lastname"]) ;
    $email =mysqli_real_escape_string($connection,  $_POST["email"]);
    // $userName = $_POST["username"];
    $sql = "INSERT INTO users(user_first,user_last, user_email)values('$firstName','$lastName','$email');";
    $sqlResult = mysqli_query($connection, $sql);

      header("Location:home.php?signup=success!!");
 
  
   }
// Here is the code for deleting a row/item in a database after an input value  with corresponding data is entered.
if(isset($_POST["delete"])){
  $delete =$_POST["namedelete"];
  $sql="DELETE From users where user_first = '$delete' OR user_last ='$delete';";
  mysqli_query($connection,$sql);
header("Location: home.php?delete=success");
}



 ?>
</body>

</html>
