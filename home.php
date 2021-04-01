<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Easy Deal</title>
</head>
<body>

<?php
include 'header1.php';
?>


<?php
include 'conn.php';
?>


<?php

$sql="SELECT name, brand,image,RAM,ROM,screen,price FROM products  ";
$result=$conn->query($sql);
?>
<div class ="col-md-2"></div>

<div class ="col-md-8">
    <div class ="row">
        <h2 class="text-center">featured products</h2>
        <?php while ($products=mysqli_fetch_assoc($result)) :?>
        <div class ="col-md-3">
           
           <img src="<?=$products['image']; ?>" alt="jj" style="width:200px; height:200px; ">
        
           
    
             <h5><?=$products['name']; ?></h5>
            <p> Brand: <?=$products['brand']; ?><br>
            RAM: <?=$products['RAM']; ?><br>
            Rom: <?=$products['ROM']; ?><br>
            screen: <?=$products['screen']; ?><br>
            price: RS<?=$products['price']; ?><br>
           
            
        </div>  
<?php endwhile; ?>  

    </div>
</div>
            



   

    </body>
    </html>


