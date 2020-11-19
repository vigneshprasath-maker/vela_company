<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `stock` WHERE CONCAT(`name`, `quantity`, `type`, `stockid`, `location`,`price`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `stock`";
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
    <body style="background: linear-gradient(90deg,white,pink);">
        <center>
        
        <form action="tt1.php" method="post" style="padding-top: 50px;">
            <label><b>Enter The Value to Search:</b></label>
            <br><br>
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter">&nbsp;&nbsp;
<a href="tt.php"><button>Reset</button></a>
<br><br>            
            <table style="border: 2px solid black;">
                <tr>
                    <th style="font-size: 20px">Name</th>
                    <th style="font-size: 20px">Quantity</th>
                    <th style="font-size: 20px">Type</th>
                    <th style="font-size: 20px">Message</th>
                    <th style="font-size: 20px">Location</th>
                    <th style="font-size: 20px">Price</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td style="font-size: 20px"><?php echo $row['name'];?></td>
                    <td style="font-size: 20px"><?php echo $row['quantity'];?></td>
                    <td style="font-size: 20px"><?php echo $row['type'];?></td>
                    <td style="font-size: 20px"><?php echo $row['stockid'];?></td>
                    <td style="font-size: 20px"><?php echo $row['location'];?></td>
                    <td style="font-size: 20px"><?php echo $row['price'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        </center>
    </body>
</html>
