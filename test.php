<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Testphp</title>
    <style>
        

        body  .flex-div{
            display: flex; width: 500px;
            justify-content: space-between;
            align-items:center;
        padding: 1.5rem 2rem;
        background-color: #36244f;
        margin: 0 auto;
        }
        
        /* 
        .flex-div div{
        margin-top:1rem ; 
        } */
        
        .flex-div h3{ 
        border-bottom: 2px groove white; margin: 0;
        text-align: center;
        color: #ff8172;}
        p{ font-size: 18px;
            margin: 0;
            color:#f26d50;
            transition:  ease-in 0.4s transform;
        }
        .flex-div ol li{
            text-transform: capitalize;
            font-family:cursive;
            color: #f7dc66;
           
        }
        
       .flex-div p:hover{ 
                    border-bottom: 2px groove yellow;
                /* font-weight: bold; */
                cursor: pointer;
                font-size:20px ;
                transform: translateX(-1rem);
            }  
       
    </style>
</head>
<body>

<?php 
$result ='';
 function arithmeticFunc($num1, $num2, $opera){
    switch($opera) {
    case 'add':
      $result = $num1 + $num2;
      break;
      case 'subtract':
        $result = $num1 - $num2;
        break;
      case 'multiply':
        $result = $num1 * $num2;
        break;
        default:
        $result= " Operation can not be done!!!";
    }
    return $result;
    }
    if(isset($_POST["submit"])){
      $number1 = $_POST["num1"];
      $number2 = $_POST["num2"];
      $operation =$_POST["opera"];
      $message = arithmeticFunc($number1,$number2,$operation);
    }

        echo "<h1>Your answer is: $message</h1>";
  
$drinks =[
   'category1' =>[
      'name' =>'Moscow',
     'list' => ['vodka','lime','Juice', 'angostura bitters','ginger beer'],
     'price' =>1050],
  
     'category2' =>[
      'name' =>'Twisted Paloma',
     'list' => ['Grapefruit', 'lavender syrup', 'tequila' , 'club soda'],
     'price' =>6550
      ],
     
     'category3' =>[
      'name' =>'cosmopolitan',
     'list' => ['Vodka', 'Triple sec', 'Cranberry juice','lime juice'],
     'price' =>7000],
  
     'category4' =>[
      'name' =>'Margarita',
     'list' => ['lime juice', 'Triple' ,'sec', 'Tequila'],
     'price' =>12000],
     'category5' =>[
      'name' =>'TEQUILA',
     'list' => ['Tequila', 'gold','orange', 'juice' , 'grenadine'],
     'price' =>5000]
  
  
  ];

 
?> 
<?php  
    ?>

   <?php foreach($drinks as $category ):?>
      
      <div class="flex-div"> 
   

              <div>
              <h3> <?= strtoupper($category['name'])  ?> </h3> 
          
             <ol style="list-style-type: lower-roman;">
               <?php  foreach($category['list'] as $list):?>
                  <li> <?=  $list ?></li>
                  <?php endforeach; ?>
               </ol>
              </div>
      
               
              <p> <?= "N".$category['price']?>  </p>
      
      
          </div>
          <?php endforeach; ?>
</body>
</html> 