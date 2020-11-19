<?php
  $conn = new mysqli("localhost","root","","velacomp");
  $count = 0;
  $sql2="SELECT * FROM stock WHERE quantity = 0";
  $result=mysqli_query($conn, $sql2);
  $count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>choose one</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="notification-demo-style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
  }
  .table-wrapper {
    width: 700px;
    margin: 30px auto;
        background: #fff;
        padding: 20px;  
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
    }
  .table-title .add-new i {
    margin-right: 4px;
  }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
    cursor: pointer;
        display: inline-block;
        margin: 0 5px;
    min-width: 24px;
    }    
  table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
  table.table td a.add i {
        font-size: 24px;
      margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
  table.table .form-control.error {
    border-color: #f50000;
  }
  table.table td .add {
    display: none;
  }
</style>
<script type="text/javascript">

    function myFunction() {
        $.ajax({
            url: "view_notification.php",
            type: "POST",
            processData:false,
            success: function(data){
                $("#notification-count").remove();                  
                $("#notification-latest").show();$("#notification-latest").html(data);
            },
            error: function(){}           
        });
     }
     
     $(document).ready(function() {
        $('body').click(function(e){
            if ( e.target.id != 'notification-icon'){
                $("#notification-latest").hide();
            }
        });
    });
         
    </script>
    
</head>
<body>
    <div class="demo-content" style="width: 100%">
        <div id="notification-header" style="width: 100%">
               <div style="position:relative">
               <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="notification-icon.png" /></button>
                 <div id="notification-latest" style="width: 250px;"></div>
                </div>          
        </div>
        </div>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Select<b>One</b></h2></div>
                    
                </div>
            </div>
            <table class="table table-bordered">
               
                <tbody>
                    <tr>
                        <td>Customer</td>
                        <td>
              <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a  href="vela.html" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                          
                            <a href="upd.php"><i class="fa fa-refresh" title="update" style="font-size:16px;color:red;"></i></a>
                            <a href="tt.php"><i class="fa fa-eye" style="font-size:16px;color:gold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                       
                        <td>
              <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a  href="log.html" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            
                            <a href="upd1.php"><i class="fa fa-refresh" title="update" style="font-size:16px;color:red"></i></a>
                            <a href="tt1.php"><i class="fa fa-eye" style="font-size:16px;color:gold"></i></a>
                        </td>
                    </tr>
                          
                </tbody>
            </table>
        <div>
            <a href="/twilio/gsm.php" >
            <button style="width: 100%;height: 30px;background: #17eccf;color: black;font-weight: bold">Print</button>
            </a>
        </div>    
        
        </div>
    </div>     
</body>
</html>                             