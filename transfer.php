
<?php
    //$username = $_POST['username'];
    //$amount = $_POST['amount'];
    $username = filter_input(INPUT_POST, 'username');
    $amount = filter_input(INPUT_POST, 'amount');

    if (empty($username)){
        echo $name_error = 'Please choose a valid username/User not in database';
    }
    if (empty($amount)){
        echo $amount_error = 'amount to transfer should be >=1';
    }

    include "dbconnection.php";
    $conn = OpenCon();
    //$query2 = "update customer_table set balance = (balance + $amount) where name = 'Pratik' AND set balance = (balance - $amount) where name = '$username'; "   
    $query2 = "update customer_table set balance = (balance + $amount) where name = 'Pratik' AND set balance = (balance - $amount) where name = '. mysqli_escape_string($conn,$username) . '; ";
    $result = mysqli_query($conn,$query2) ;
    $row2 = mysqli_fetch_assoc($result);
    echo $row2["balance"];
    include ('users.php');
?> 


<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
-->
                    