<!DOCTYPE html>
<html>

<head>
<style>
h1 {
  color: black;
  font-family: verdana;
  font-size: 600%;
  font-weight: bold;
  text-align: center;
  margin-top: 6cm
}
p {
  color: red;
  font-family: courier;
  font-size: 160%;
}
</style>
	<title>Insert Page page</title>
	<body style="background-size: 100%;" background="images/a.jpg" >
</head>

<body>
<?php
include("connection.php");
extract($_POST);
$sql = "INSERT INTO feedbacks(projtitle, domain, mentor, branch, feedback) VALUES('$projtitle','$domain','$mentor','$branch','$feedback')";
$result = $con->query($sql);
if(!$result){
    die("Couldn't enter data: ".$con->error);
}
echo "<h1> THANK YOU </h1>";
// Thank You For Contacting Us ";
$con->close();
?>

<div style="margin:auto; margin-top: 150px; display:block; text-align: center; justify-content: center;">
	<button style="width: 150px;
    padding: 15px 0;
    border-radius: 90px;
    font-weight: bold;
    font-size: 17px;
    border: 2px solid #009688;
    background-color: rgb(233, 94, 94);
    color: white;
    cursor: pointer;
    transform: translateY(100%);
    transform: translateX(20%);
    height: 1.5cm;
	" onclick="window.location.href='explore.php'"class="button"><span></span>Go back</button>
	
</div>  

</body>