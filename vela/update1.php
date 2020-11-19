<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "vela";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   if($connect)
   {
   	echo"connected";
   }
   
   // get values form input text and number
   
   $name = $_POST['name'];
   $pn = $_POST['pn'];
   $add = $_POST['add'];
   $vn = $_POST['vn'];
    $vd = $_POST['vd'];
           
   // mysql query to Update data
   $query = "UPDATE `customer` SET `name`='".$name."',`phone`='".$pn."',`address`='".$add."',`vehicledetails`='". $vd."' WHERE `vehicleno` = '".$vn."'";


   //   $query = "UPDATE `users` SET `fname`='".$fname."',`lname`='".$lname."',`age`= $age WHERE `id` = $id";
   
   
   $result = mysqli_query($connect, $query) or die(mysqli_error($connect));;
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>update page</title>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="update1.php" method="post">

          name<input type="text" name="name" required><br><br>

            phone number:<input type="text" name="pn" required><br><br>

            address :<input type="text" name="add" required><br><br>

            vehicle no:<input type="text" name="vn" required><br><br>
             vehicle details:<input type="text" name="vd" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>
