<?php
 require_once "config.php";

$sql = "INSERT INTO cart (name, price) VALUES (?, ?)";
        
$stmt = $link->prepare($sql);
$stmt->bind_param("ss", $param_username, $param_price);
$param_username = $_GET["name"];
$param_price = $_GET["price"];

if($stmt->execute()){
    header("location: cart.php");
} else{
    echo "Something went wrong. Please try again later.";
}
   $stmt->close();
?>