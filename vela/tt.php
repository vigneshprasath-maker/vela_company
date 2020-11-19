<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `customer` WHERE CONCAT(`name`, `phone`, `address`, `vehicleno`, `vehicledetails`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `customer`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "velacomp");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body style="background: linear-gradient(90deg,white,lightgreen);">
        <center>
        
        <form action="tt.php" method="post" style="padding-top: 50px;">
            <label><b>Enter The Value to Search:</b></label>
            <br><br>
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter">&nbsp;&nbsp;
<a href="tt.php"><button>Reset</button></a>
<br><br>            
            <table>
                <tr>
                    <th>name</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>vehicleno</th>
                    <th>vehicledetails</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['vehicleno'];?></td>
                    <td><?php echo $row['vehicledetails'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        </center>
    </body>
</html>
