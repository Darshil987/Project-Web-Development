<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php require_once("header.php"); ?>

    
    <div class="container">
        <div class="head"><h2>Your Cart</h2></div>
        <table>
            <thead>
            <tr>
                <td>Sno</td>
                <td>Name</td>
                <td>Quantity</td>
                <td>Total Price</td>
            </tr>
            </thead>
            <?php
                if($_SESSION["cart"]>0){
                    $sno=0;
                    $i=0;
                
                    foreach((array)$_SESSION['cart'] as $products){
                     $q=$products['quantity'];
                     $p=$products['price'];
                     $tp=$p*$q;
                     $id=$products['prodname'];
                     echo "<tr class='nameitem'>";
                     $sno++;
                             echo "<td>".$sno."</td>";
                     
                             $n=$products['name'];
                            echo "<td>".$n."</td>";
                            
                            
                     
                                echo "<td>".$q."</td>";		
                            
                             $bill=($q*$p);
                             echo "<td>$bill</td>";						 
                             
                             echo "<td><button type='submit' class='btn' name='rent' value='$n'>RENT</button></td>";
                             echo "<td><button type='submit' class='btn' name='buy' value='$n'>BUY</button></td>";
                     echo "</tr>";
                     $i++; 					
                     } 
                }else{
                    echo "<script type='text/javascript'>alert('No item to Checkout');
					window.location='home.php';
					</script>";
                }
            ?>
        </table>
</body>
</html>