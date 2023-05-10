<?php 
echo "<br>" ;

?>

 <!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 body{box-sizing: border-box;}

 form{
        width: 400px;
        background: peru;
        padding: 0.5rem 2rem;
    min-height: 300px;
display: flex;
border-radius: 5px;
flex-direction: column;
justify-content: space-evenly;
align-items: center;
margin: 0 auto;

}
    form label{
        text-align: right !important;
     width: 28%;
    text-transform: capitalize;
    /* background-color:yellow; */
    font-weight: 600;
    color: silver;
    
    
    align-self:center;}
.formdiv{
   display: flex;
   justify-content:space-between ;
width: 100%;

    /* margin-bottom: 0.8rem; */
}
.formdiv input{
background-color:silver;
outline:0;
height: 1.8rem;
border-radius: 5px;
padding: 2px 7px;
background: silver;
border-top: none;
border-left: none;
border-right: none;
width: 70%;}
#submit{justify-self: center;
    cursor: pointer;
   background-color: #002c1f;
   color: white;
margin: 0 auto;
padding: 5px 20px;}
#submit:active{background-color: #4f68af;}
.form-flex{display: flex;
justify-content: space-evenly;
align-items: center;}
.form-flex table{
    border: 1px solid black !important;
border-collapse: collapse !important; max-width: 400px;}
.form-flex tr{
    border: 1px solid orange;
}
</style>
    <title>Homepage</title>
   
</head>

<?php 

include  ('./nav_folder/navFile.php');

 ?>
<body>
    <div class="navigation">
       
        <h1>Home</h1>


<p>
This code defines a function called "mycalc" that takes three arguments: $num1 (first number), $opera (operation type), and $num2 (second number). The function performs a mathematical operation on the two numbers based on the operation type specified in the second argument. It then returns the result of the calculation.
<br>
The code also checks if the 'submit' button has been pressed in a form. If it has, it retrieves the values for $operational, $number1, and $number2 from the form input and calls the "mycalc" function with those values as arguments. The resulting calculation is stored in the variable $result_func.
<br>
Finally, the code displays the result of the calculation in an HTML heading tag.
</p>

       
<hr>

    </div>
<br>
<br>

  
<hr>
<hr>

<h2>User Management system</h2>
        <p>This code is for a simple user management system. It allows users to submit their first name, last name, and email through a form, which is then inserted into a MySQL database. Additionally, there is functionality to delete a user by their first or last name. The code utilizes the mysqli extension to interact with the database. Upon successful submission or deletion, the user is redirected to the home.php page with a success message in the URL.</p>
<div class="form-flex">

<form action="arithmetic.php" method="POST"> 
     <input type="text" name="firstname" placeholder="firstname" required autocomplete="off">
    <input type="text"  name="lastname" placeholder="lastname" required autocomplete="off">
    <input type="email" name="email" placeholder="email" autocomplete="off" required>
    <!-- <input type="text"  name="username" placeholder="username" required autocomplete="off"> -->
    <input type="submit" value="Go" name="submit">
</form>

<form action="arithmetic.php" method="POST" style="margin-top: 1rem;"> 
     <input type="text" name="namedelete" placeholder="Enter Name to be deleted" required autocomplete="off">
     <input type="submit" value="Delete" name="delete">
</form>
</div>
<?php

echo "<br>";
 include ('./nav_folder/footer.php'); 
  ?>
</body>
</html>