</<!DOCTYPE html>
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
<center>
<div class="contentbox" cellspacing="20px" cellpadding="20px">
  <h1> ALL CUSTOMERS </h1>

<table class="customer" style= font-color: white;>
<th> Name </th>
<th> Email </th>
<th> Account No </th>
<th> Balanse </th>
</tr>

<?php
$server="localhost";
$username="root";
$password="";
$dbname="bankingsystem";

//create connections
$con=mysqli_connect( $server, $username, $password, $dbname);
//check for connection success
if (!$con){
 die("Connection to this database failed due to ".mysqli_connect_error());
}

$sql="Select Name, Email, Account_no, Balanse from customers";
$result= $con-> query($sql);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Account_no"]."</td><td>".$row["Balanse"]."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "0 Result Found!";
}
$con->close();
?>
  
</div>
<div class="pagebreak">
</div>
<div style="width: 80%; color: white; padding: 20px">
</div>
<div class="pagebreak">
</div>
<?php
include("footer.php");
?>
</center>
  </body>
</html>