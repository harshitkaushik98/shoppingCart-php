<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<style>
body{ 
    background-color: yellowgreen;
    }
</style>

<?php  
 
 //require("temp.php");
 session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
     echo "<b style='font-size: 30px;padding-left:420px;color:black;'>WELCOME TO MEMBER'S AREA , " . $_SESSION['username'] . "!</b>";

$sum=0;
?>
<br>
<div  style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;padding-left:20px;"><a href="index-electronics.php"><b style="text-align:left;font-size: 50px;color:black;">HOME</b></a> </div>
<div style="margin-left: 300px;"><h2 style="font-size:50px"><b>Your Cart</b></h2></div>

</div>

<br>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=0; ?>
                    <?php
                    require_once "config.php";
         $records = mysqli_query($link,'select name,price from cart') or die("Query fail: " . mysqli_error());
 
                foreach ($records as $project){
                 ?>
        <tr>
            <td scope="row"><b><?php echo $project['name'];?></b></td>
            <td><b>
            <?php echo $project['price'];?>
            </b></td>
            <td>
                
                <form name="form" action="" method="post">
                <div style="width: 100%; overflow: hidden;">    
                <div style="width: 100px; float: left;">
                    <input name="quantity" type="number" value=<?php if(isset($_POST['Submit'])){ echo $_POST['quantity']; }else{echo "1";} ?>>
                    </div>
               <div style="margin-left: 300px;">
               <input type="submit" value="Save" name="Submit">
               </div>
               </div>
                </form>
            <?php 
            if(isset($_POST['Submit']))
            {
            $quantity=$_POST['quantity'];
            $sum = $sum+$project['price']*$_POST['quantity'];
            }
            ?>
        </td>
        </tr>
        <?php  } ?>
                    <?php $i=0; ?>
    </tbody>
</table>
<h3 style="color: black">Total Price : $ <?php echo $sum;?></h3>
<a class="btn btn-primary" href="checkout.php?price=<?php echo $sum;?>" role="button">Proceed To CheckOut</a>
</div>
<?php } 
else
{
header("location: login.php");
}?>
</body></html>
