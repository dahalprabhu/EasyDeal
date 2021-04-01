
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:160px;">
  
  <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">
  FILTER BY <i class="fa fa-caret-down"></i>
  </button>
 
  <div id="demoAcc"  class="w3-hide w3-white w3-card">
  <a href="http://localhost/website/0-10000.php" class="w3-bar-item w3-button">0-10,000</a>
  <a href="http://localhost/website/10000-40000.php" class="w3-bar-item w3-button">10,000-40,000</a>
  <a href="http://localhost/website/40000-80000.php" class="w3-bar-item w3-button">40,000-80,000</a>
    <a href="http://localhost/website/80000-100000.php" class="w3-bar-item w3-button">80,000-1,00,000</a>
    <a href="http://localhost/website/100000-200000.php" class="w3-bar-item w3-button">1,00,000-2,00,000</a>
    <a href="http://localhost/website/200000-400000.php" class="w3-bar-item w3-button">2,00,000-4,00,000</a>
    
</div>

<script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>

</body>

</html>
  
  </div>
</html>



