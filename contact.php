<?php
$host="localhost";
$username="root";
$password="";
$connection = mysql_connect($host,$username,$password); 

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }
mysql_select_db("amazemetrack", $connection);

if(!isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$mobile= $_POST['mobile'];
$message = $_POST['subject'];

if(empty($name)){
	echo "<script>alert('Failed');</script>";
}
else{
$sql ="INSERT INTO contact(Name,email,mobile,message) VALUES 
('$name','$email','$mobile','$message')";
if (!mysql_query($sql,$connection))

  {

  die('Error: ' . mysql_error());

  }

echo"
<script>
alert('Thankyou so much for the Feedback!');

</script>";


}
}


mysql_close($connection); // Closing Connection with Server
?>