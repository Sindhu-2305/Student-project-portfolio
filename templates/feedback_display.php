<!DOCTYPE html>
<html>
<head>
<title>Feedbacks</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
    <div style=" background-image: linear-gradient(#ffff,rgb(255,122,89));">
    <br><br>
        <h1 style="text-align:center;  font-size: 40px;">Feedbacks Given
        <br><br><br>
        </h1>
    </div>
    
   
<table>
<tr>

<th>Project Title</th>
<th>Domain</th>

<th>Feedback</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "login_sample_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT projtitle,domain,feedback FROM feedbacks";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["projtitle"]. "</td><td>" . $row["domain"] . "</td><td>"
. $row["feedback"]. "</td></tr>";
}
echo "</table>";
}
$conn->close();
?>
</table>
</body>
</html>