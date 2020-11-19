<?php
  $con=mysqli_connect("localhost","root","","velacomp");
  $c=$_POST['name'];
  $v=$_POST['quantity'];
  $e=  $_POST['type'];
  $aa=$_POST['message'];
  $s=$_POST['location'];
  $ee=$_POST['price'];
      $a="INSERT INTO stock(name,quantity,type,stockid,location,price) VALUES('$c','$v','$e','$aa','$s','$ee')";
      if (!mysqli_query($con,$a))
    {
      die('Error: ' . mysqli_error());
    }
    else
    {
      echo "<script>
          alert('Details Added Successfully');  
        </script>";
    } 
    mysqli_close($con)  
?>