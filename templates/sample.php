<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projects</title>  
</head>
<body style="background-size: 100%;" background="images/a.jpg" >
	<h2 style="font-family: cursive; text-align: center; background-color: #89ABE3FF;">LIST OF PROJECTS</h2>
	<?php

		$res=mysqli_query($con,"SELECT * FROM projects");

		echo "<table border='1' cellspacing='8' cellpadding='2px' class='table' style='background-color: #89ABE3FF; width: 100%; font-family: cursive'>";
		    echo "<tr style='background-color: black; color: white; text-align: center'>";
			    echo "<th>"; echo "Title"; echo "</th>";
				  echo "<th>"; echo "Team"; echo "</th>";
					echo "<th>"; echo "Domain"; echo "</th>";
					echo "<th>"; echo "Category"; echo "</th>";
					echo "<th>"; echo "Branch"; echo "</th>";
					echo "<th>"; echo "Guide"; echo "</th>";
					echo "<th>"; echo "References"; echo "</th>";
				echo "</tr>";
        
        	while($row=mysqli_fetch_assoc($res))
        	{
        		echo "<tr>";
            	echo "<td>"; echo $row['title']; echo "</td>";
            	echo "<td>"; echo $row['team']; echo "</td>";
            	echo "<td>"; echo $row['domain']; echo "</td>";
            	echo "<td>"; echo $row['category']; echo "</td>";
            	echo "<td>"; echo $row['branch']; echo "</td>";
            	echo "<td>"; echo $row['guide']; echo "</td>";
				
				echo "<td>"; echo $row['references']; echo "</td>";
				
        		echo "</tr>";
        	}
        echo "</table>"
;  ?>


<div style="margin:auto; margin-top: 90px; display:block; text-align: center; justify-content: center;">
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
	" onclick="window.location.href='wishlist.php'"class="button"><span></span>Wishlist</button>
	
</div>  
<div style="margin:auto; margin-top: 15px; display:block; text-align: center; justify-content: center;">
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
	" onclick="window.location.href='review.php'"class="button"><span></span>Give Review</button>
	
</div>
<!-- <button style="width: 150px;
    padding: 15px 0;
    text-align: center;
    margin-left: 15cm;
	margin-top: 3cm;
    border-radius: 90px;
    font-weight: bold;
    font-size: 17px;
    border: 2px solid #009688;
    background-color: rgb(233, 94, 94);
    color: white;
    cursor: pointer;
    transform: translateY(100%);
    transform: translateX(50%);
    top: 1.5cm;
    left: 1.5cm;
    height: 1.5cm;
     " onclick="window.location.href='wishlist.html'"class="button"><span></span>Wishlist</button>

<button style="width: 150px;
    padding: 15px 0;
    text-align: center;
    margin-left: 18cm;
	margin-top: 3cm;
    border-radius: 90px;
    font-weight: bold;
    font-size: 17px;
    border: 2px solid #009688;
    background-color: rgb(233, 94, 94);
    color: white;
    cursor: pointer;
    transform: translateY(100%);
    transform: translateX(50%);
    top: 1.5cm;
    left: 1.5cm;
    height: 1.5cm;
     " onclick="window.location.href='feedback.html'"class="button"><span></span>Give Feedback</button> -->

</body>
</html>
