


<?php 
include 'header1.php';
?>
<?php include 'sidebar1.php'
?>
<?php 
include 'conn.php';
?>



<?php

$sql="SELECT name, brand,image,RAM,ROM,screen,price FROM products where price < 10000 && price > 0";

$result=$conn->query($sql);
?>
<div class ="col-md-2"></div>

<div class ="col-md-8">
    <div class ="row">
        <h2 class="text-center">featured products</h2>
        <?php while ($products=mysqli_fetch_assoc($result)) :?>
        <div class ="col-md-3">
           
        <img src ="<?= $products ['image']; ?>"  alt="<?= $products ['name']; ?>" style="width:200px;height:200px;border:0;">
             <h4><?=$products['name']; ?></h4>
            <p> Brand:<?=$products['brand']; ?><br>
            RAM:<?=$products['RAM']; ?><br>
            Rom:<?=$products['ROM']; ?><br>
            screen<?=$products['screen']; ?><br>
           price: RS <?=$products['price']; ?><br>
           
           
        </div>  
<?php endwhile; ?>  


<?php 
include 'edit.php';
?>

</body>



</html>
