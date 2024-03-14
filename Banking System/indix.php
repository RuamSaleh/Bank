</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale="1.0">
    <title>BANKING SYSTEM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
  </head>

  <body>
  <?php
include("head.php");
?>

<div class="container">
<div class="header"> Welcome to Sparks Bank </div>
<img src="bank.jpg" height=65% width=30% style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
</div>
<center>
<div class="contentbox">
  <h1> OUR SERVICES</h1>

  <div class="subcontent">
  <img src="transfer.jpg"  width=50% height="30%" style="  border-radius: 10px;
    border-style: double; display: block; margin: 5px;">
    <h2><a href="customers.php"> Customers </a></h2>
    <h4> list of customers</h4>
  </div>

  <div class="subcontent">
    <img src="user.jpg"  width=50% height="30%" style="  border-radius: 10px;
      border-style: double; display: block; margin: 5px;">
      <h2> <a href="send.php"> Transfer</a></h2>
      <h4> mony transfer can be done</h4>
    </div>

    <div class="subcontent">
      <img src="history.jpg"  width=50% height="30%" style="  border-radius: 10px;
        border-style: double; display: block; margin: 5px;">
        <h2> <a href="transactions.php"> Transactions </a></h2>
        <h4> you can check the transactions</h4>
      </div>
</div></center>
<?php
include("footer.php");
?>
</body></html>