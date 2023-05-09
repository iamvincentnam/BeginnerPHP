<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <title>Footer page</title>
    <style>
        html{box-sizing: border-box;}
*{box-sizing: border-box;}
footer{background-color:#002c1f;
min-height: 350px;


padding: 3rem;}
.footer_div{
    flex-wrap: wrap;
display: flex; justify-content: space-evenly;
height: 210px;

}

.sub_section{ display: flex; flex-direction: column; justify-content: space-evenly;  width: 30%;
}
.sub_section ul{
 display: flex; 
flex-direction: column; 
justify-content: space-around;
height: 100%;
color:#b3b3b3; 
list-style-type: none;
margin: 0;
padding: 0;
font-weight: bold;
}

.footer_div h3{color: white;
        text-transform: uppercase;
        font-size: 1rem;
    font-weight: 600;
font-family: Arial, Helvetica, sans-serif;
text-decoration: underline;
cursor: pointer;}



.sub_section ul li:hover{cursor: pointer;}
footer #copyright{text-align: center;
font-weight: bold;
font-family: Arial, Helvetica, sans-serif; 
color:#b3b3b3; 
font-size: 90%;}
    </style>
</head>
<body>
<!-- footer section goes here -->
    <footer>
        <div class="footer_div">
    <div class="sub_section">
        <h3>Quick Links</h3>
        <ul>
            <li> About Us</li>
            <li> FAQ</li>
            <li>Help</li>
            <li>My account</li>
            <li>Contacts</li>
        </ul>
    </div>
    <div class="sub_section">
        <h3>Farm Produce</h3>
        <ul>
            <li> LiveStock</li>
            <li>Tubers</li>
            <li>Sea foods</li>
            <li>Herbs</li>
            <li>Raw materials</li>
        </ul>
    </div>
    <div class="sub_section">
        <h3>Contacts</h3>
        <ul>
            <li> Ring Road Okrika PH</li>
            <li>+2348143999388</li>
            <li>info@nubiangem.com</li>
        
        </ul>
    </div>

        </div>
        <br>
       

        <hr style="height:0.5px;border-width:0;color:silver;background-color:silver">
        <div>
            <p id="copyright">Copyright &#169; 2023 Nubian Gem</p>
        </div>
    </footer>
</body>
</html>