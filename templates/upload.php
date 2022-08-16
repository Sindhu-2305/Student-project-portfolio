<?php
        include('connection.php');
        include('connect.php');
?>

<?php
   
        $connection=mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'proj');
   
        if(isset($_POST['upload']))
        {
            
           $category=$_POST['category'];  
           $project_title=$_POST['project_title'];
           $students_roll_numbers=$_POST['students_roll_numbers'];
           $domain=$_POST['domain'];
           $guide_name=$_POST['guide_name'];
           $branch=$_POST['branch'];
           $refer=$_POST['refer'];
           
           $query="INSERT INTO 'projects'('category','project_title','students_roll_numbers','domain','guide_name','branch','refer') VALUES('$category','$project_title','$students_roll_numbers','$domain','$guide_name','$branch','$refer')";

           $query_run= mysqli_query($connection,$query);
 
           if($query_run){
               echo '<script language="javascript">';
               echo 'alert("Data Successfully Uploaded"); location.href="proj_page.php"';
               echo '</script>';
           }
           else{
              echo'<script type="text/javascript"> alert("enter all neccesary details") location.href="proj_page.php" </script>';
           }

        }
 ?>     
