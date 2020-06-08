<?php
$amount = $_POST['amount'];
$days = $_POST['days'];
$conversionRT = 10;
$profitMargin = 2;
$calcVisitors = $amount / $profitMargin;
$calcOrders = $days * $conversionRT / 100 ;
$attract = $amount * $conversionRT;
$totalOrder = $days * $profitMargin;
$sales = abs($amount - $attract);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Drop Shipping</title>
</head>
<style>

@media screen and (max-width:480px){
   input,button{
       margin-top:15px
   }
   .in,.dollar,.calc{
       display:block
   }
   .calc{
       margin-left:70px
   }
}
body{
    background-color: #f0f4f7;

}
.container{
    margin-top:20px;
}
.container-fluid{
    background:#fff;
    padding:20px;
    margin-top:80px;
}
.assump{
    line-height: 1.5;
    margin-bottom: 20px;
    font-family: ProximaNova-Regular;
    font-size: 16px;
    margin-left:28px
}
.note{
    margin-left:25px;
    color: #2e4257;
    font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: 400;
}
li{
    list-style: disc;
    margin-left: 20px;
    display: list-item;
    text-align: -webkit-match-parent;
    color: #2e4257;
    font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: 400;
}
.header{
    color: #202e3c;
    font-family: ProximaNova-Bold;
}
.card{
    max-width:900px;
    padding:20px;
    /* margin-left:100px */
}
button{
    background-color:#27B7D7;
    border:0px;
    padding:10px;
    border-radius:3px;
    color:#fff
}
p{
    font-size: 22px;
    margin: 20px 0 30px;
    color: #2e4257;
}
.error{
    color:red
}
.result{
    font-size: 16px;
    color: #353e49;
    padding: 35px;
}
.start{
    background:#27B7D7;
    color:#fff;
    height:220px;margin-top:20px
}
.start h3{
    padding-top:50px
}
.signup{
    margin-top:22px;
    border: 2px solid #fff;
    background-color: #27b7d7;
    color: #fff;
    cursor: pointer;
    font-family: ProximaNova-Bold;
    font-size: 1rem;
    height: 2.75rem;
    line-height: 2.75rem;
    border-radius: 3px;
    -webkit-appearance: none;
    align-items: center;
    box-shadow: none;
    justify-content: flex-start;
    padding: 0 20px;
    transition: background-color .3s ease;
}
.signup:hover{
    background-color: #fff;
    color:#27b7d7

}
</style>
<body>
<div class="container">
    <h3 class="text-center header"><b>Dropshipping Traffic Calculator</b></h3>
  <p class="text-center">It’s important for every store owner to understand how website traffic relates to sales.<br>
This tool will tell you how many visitors you need to attract to your store to hit your earnings goal.</p>
<div class="card text-center">
  <div class="card-body">
  <form action="" method="POST">
    <div class="col-md-12">
    <label for="Amount"><b>My goal is to earn</b></label> <b class="dollar">$</b>
    <input type="number" name="amount" required > <b class="in">in</b>
    <input type="number"  name="days" required>
   
    <label for="customer"><b class="days">days</b></label>
    <button type="submit" class="calc">Calculate</button>
    </div>
    </form>
<?php 
if(isset($amount)){
    echo "<hr><div class='text-center result'>You need <b>$calcVisitors</b> visitors and  <b>$calcOrders</b> orders daily.</div>";
    echo "<div class='text-center'> Overall you'll need to  attract <b>$attract</b> visitors  to your store or get <b>$totalOrder</b> orders.</div>";
    echo "<div class='text-center'>Oh, and by the way, you’ll make <b>$$sales.00</b> in sales! </div>";

    }
?>
  </div>
</div>
</div>
<?php 
if(isset($amount)){
    echo "<div class='container-fluid'>";
 echo "<p class='assump'><b>These calculations are based on the following assumptions:</b></p>";
 echo "<ul>";
 echo "<li>on average, out of every 100 visitors to your store 2 people will place an order</li>";
 echo "<li>the average order value will be $45 </li>";
 echo "<li>your margin is 2x, which means that you must charge customers double the price you pay the supplier </li>";
 echo "<li>on average it costs you $0.35 to attract one visitor to your site</li>";
 echo "</ul>";
 echo "<div class='note'>Note: Earnings are calculated by taking your sales and subtracting what you pay to your supplier and what you pay for advertising your store.</div>";
 echo "</div>";
}
?>
<div class="start">
<h3 class="text-center"><b>Start using Oberlo today</b></h3>
<div class="text-center">All accounts have access to the forever free Starter Plan.<div>
<button type="button" class="text-center signup">Sign Up Free</button>
</div>
</body>
</html>


