<?php
  $con=mysqli_connect("localhost","root","","velacomp");
  $c=$_POST['name'];
  $v=$_POST['phone'];
  $e=  $_POST['address'];
  $aa=$_POST['vehiclenumber'];
  $s=$_POST['vehicleaddress'];
      $a="INSERT INTO customer(name,phone,address,vehicleno,vehicledetails) VALUES('$c','$v','$e','$aa','$s')";
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