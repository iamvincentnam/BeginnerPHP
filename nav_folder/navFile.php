<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my header file</title>
    <link rel="stylesheet" href="footer.css">
    <style>
         body{background-color: silver; 
         }
        .nav{display: flex;
            justify-content: space-between;
            align-items: center;
            background-image: linear-gradient(to right,#002c1f,#ffff);
        
        /* background-color:  #3333; */
        margin: -10px;
        height: 80px;
        }
        .nav ul{
        list-style: none; 
        width: 55%; 
        display: flex;
        justify-content: space-evenly;
        /* border: 1px solid red; */
            margin: 0;
            padding: 0;
        font-size: 1.2rem;}
        .nav ul li{display: inline-block;
        margin-right: 0.8rem;}
        .nav ul a{text-decoration: none; color: #36244f;     font-weight:600;}
        .nav ul a:hover{border-bottom: 2px groove orangered;
        color: #4b0082;}
        #icon{ color: purple; height: 28px;
       transition: ease-out 0.5s all;
       margin-left:1rem ;
       }
        #icon:hover{
            border-bottom: 1px groove orangered;
             color: white;
            /* margin-left:1.4rem; */
            transform: translateX(1rem);
        cursor: pointer;} 
        .navigation p{
             max-width: 500px;
             font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            color:#4c4c4c;
            
    }

    </style>
</head>
<body>

<div class="nav">
    
            <h2 id="icon"> Mywebsite</h2>
            <ul>
                <li><a href=http://localhost:5442/vincent-php/vin-repository/home.php"> Home</a></li>
                <li><a href="http://localhost:5442/vincent-php/vin-repository/contact.php"> Contact</a></li>
                <li><a href="#"> Gallery</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="http://localhost:5442/vincent-php/vin-repository/test.php">Blog</a></li>
            </ul>

</div>
</body>
</html>
