<?php
    include "dbconnection.php";
    $conn = OpenCon();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>users</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th style="text-align: center;">Pratik's Balance</th>
                    <th>
                    <?php
                        $query = "select balance from customer_table where name = 'Pratik'";
                        $val = $conn->query($query);
                        $row=mysqli_fetch_array($val);
                        echo $row["balance"];    
                    ?> </th>
                </tr>
        </table>
    </div>

    <div class="table-responsive">
        <table class="table" style="text-align: center;">
            <tbody>
            <form action="transfer.php" method="POST"> 
                <thead>
                    <tr>
                        <th style="text-align: right;">Withdraw From User</th>
                        <th style="text-align: left;">
                            <input type="text" name="username" placeholder="username" >
                            <p><?php if(isset($name_error)) {?></p> 
                                <p><?php echo $name_error; ?> </p>
                            <?php } ?> 
                            <p><?php if(isset($amount_error)) {?></p> 
                                <p><?php echo $amount_error; ?> </p>
                            <?php } ?> 
                        </th>
                        
                    </tr><br>
                
                    <tr>
                        <th style="text-align: right;">Enter Amount to Transfer</th>
                        <th style="text-align: left;"><input type="int" name="amount" min="1" placeholder="amount"></th>
                    </tr><br>
                    <tr>
                        <th style="text-align: right;"><input type="submit" value="Transfer" /></th> 
                    </tr>
                </thead>
            </form>  
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <?php
                    //include 'dbconnection.php';
                    $sql = "SELECT * FROM customer_table where name !='Pratik'";
                    $result = mysqli_query($conn,$sql) 
                ?>
                <thead >
                    <tr>
                        <th style="text-align: center;">
                            User_id   
                        </th>
                        <th style="text-align: center;">
                            Customer_name 
                        </th>
                        <th style="text-align: center;">
                            Balance
                        </th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <?php 
                        while($rows=mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['user_id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>