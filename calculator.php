<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator APP</title>
    <style>
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
    </style>
</head>
<body>
<form action="test.php" method="POST">
    <strong style="color:
    silver; text-decoration:underline;"> My Calculator</strong>

<div class="formdiv">
    <label for="num1">Number 1</label>
    <input type="number" name="num1" placeholder="Num 1">
</div>

<div class="formdiv">
    <select name="opera">
     <label for="opera"> Choose Operation</label>
     <option value="add"> Add</option>  
     <option value="subtract"> subtract</option>  
     <option value="multiply"> Multiply</option>  
    </select>
</div>
<div class="formdiv">
    <label for="num2">Number 2</label>
    <input type="number" name="num2" placeholder="Num 2">
</div>

<div class="formdiv">
    <input type="submit" name="submit" value="Calculate" id="submit">
</div>

</form> 
</body>
</html>
