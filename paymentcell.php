<?php
    include "dbconnection.php";
    $conn = OpenCon();
    /*$query = "select balance from customer_table where name = 'Pratik'";*/
    $query = "update customer_table set balance = balance+amount where name = 'Pratik' and set balance = balance-amount where name='#'";
    $val = $conn->query($query);
    $row=mysqli_fetch_array($val);
    echo $row["balance"];
                        
?> 