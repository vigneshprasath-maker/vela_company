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
    $price=$_POST['price'];
           
   // mysql query to Update data
   $query = "UPDATE `stock` SET `name`='".$name."',`quantity`='".$pn."',`type`='".$add."',`msg`='". $vn."',`price`='".$price."' WHERE `location` = '".$vd."'";


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

        

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>update page</title>

    </head>

    <body>

        <form action="update2.php" method="post">

          name<input type="text" name="name" required><br><br>

            quantity:<input type="text" name="pn" required><br><br>

            type:<input type="text" name="add" required><br><br>

            msg:<input type="text" name="vn" required><br><br>
             location:<input type="text" name="vd" required><br><br>
             price:<input type="text" name="price" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>
