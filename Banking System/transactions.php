<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BANKING SYSTEM</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>

  <body>
  <?php
include("head.php");
?>

<div class="container">
<div class="header"> Welcome to Sparks Bank</div>
<img src="bank.jpg" height=65% width=30% alt="Welcome to the sparks bank!" style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
</div>

<!--  container closed -->
<br>
<div class="contentbox">
  <center>
<h1> TRANSACTION HISTORY </h1>
  <center>
<table class="customer">
<th> ID </th>
<th> SENDER'S ACCOUNT NO. </th>
<th> SENDER'S NAME </th>
<th> RECEIVER'S ACCOUNT NO. </th>
<th> RECEIVER'S NAME </th>
<th> AMOUNT TRANSFERRED </th>
<th> SENDER'S BALANCE </th>
<th> RECEIVER'S BALANCE </th>
<th> TRANSACTION STATUS </th>
<th> TIME </th>
</tr>

<?php
$server="localhost";
$username="root";
$password="";
$dbname="bankingsystem";
  
$con=mysqli_connect( $server, $username, $password, $dbname);


if (!$con){
 die("Connection to this database failed due to ".mysqli_connect_error());
}
$sql="Select * from transactions WHERE ID<202200000";
$result= $con-> query($sql);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>".$row["ID"]."</td><td>".$row["Sender_AccountNo"]."</td><td>".$row["Sender_Name"]."</td><td>".$row["Receiver_AccountNo"]."</td><td>".$row["Receiver_Name"]."</td><td>".$row["Amount_transferred"]."</td><td>".$row["Sender_Balance"]."</td><td>".$row["Receiver_Balance"]."</td><td>".$row["Status"]."</td><td>".$row["Transaction_Date"]."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "</table> <br>";
  echo "0 Result Found!";
}
$con->close();
?>

</div>
<br> <br>
<br> <br>   
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br>
<br> <br>
<br> <br>


<center>
<div class="pagebreak">
</div>
<div style="width: 80%; color: white; padding:  20px">

</div>
</center>

<?php
include("footer.php");
?>
  </body>
</html>