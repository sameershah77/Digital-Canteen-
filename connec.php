<?php

if(isset($_POST))
{
$emps=json_decode($_POST['e']);
//print_r($emps);

$emps1=json_decode($_POST['e1']);
//print_r($emps1);


$servername = "localhost";
$username = "id19742941_arshaikh_09";
$password = "+P&<i2<>I/PDdv[}";
$dbname = "id19742941_arshaikh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "Connection successful ";
}

$len=count($emps);
$order=" ";
for ($x = 0; $x < $len; $x++) {
  $order.= $emps[$x]." ";
echo $order;

}
$total=0;
for ($y = 0; $y < $len; $y++) {
 $total+=$emps1[$y];
}

echo $total;

//echo $order;


$sql = "INSERT INTO order2(ordered_products,total) VALUES ('$order','$total')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?> 
  
  
  
  
   


