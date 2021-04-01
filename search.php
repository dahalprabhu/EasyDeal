<?php
include 'head.php';
?>



<?php
include 'conn.php';
?>


<?php 
include 'header1.php';
?>
<link rel="stylesheet" type="text/css" href="kk.css">

<?php
    if (isset($_POST['submit-search']))
    {
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql= "SELECT name, brand, image,RAM,ROM,screen,price FROM products WHERE name LIKE '%$search%' OR brand LIKE '%$search%' ";
        $result=$conn->query($sql);

        $queryresult= mysqli_num_rows($result);
        echo"<div class ='col-md-2'>
        </div>";
        echo"<div class ='col-md-8'>
        <div class ='row'>
        <h2 class='text-center'>featured products </h2>";




        if ($queryresult > 0)
        {
            while ($products=mysqli_fetch_assoc($result)) 
            {
               
            echo" 
             
                  <div class ='col-md-3'>
                  <img src= ".$products['image']."  >
                  <p> ".$products['name']."</p>
                  <p>Brand: ".$products['brand']."</p>
                  <p>Ram: ".$products['RAM']."</p>
                  <p>Rom ".$products['ROM']."</p>
                  <p>screen: ".$products['screen']."</p>
                  <p class ='price'>price: RS ".$products['price']."</p>


            
              
            </div>";

            }
          
           
           
        }
           else{
              echo " There is no results matching your search!";
         }
    }
   
    ?>

    <?php  include 'edit.php'
   ?>