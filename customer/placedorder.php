<?php 
$id1=$_GET['id1'];
$placedid=$_GET['id'];
session_start(); 
$_SESSION['placedid']=$placedid;
?>
<meta http-equiv="refresh" content="5;url=header.php?id=<?php echo $id1?>">
<div style="text-align:center; padding-top: 7rem;">
    <img src="https://static.vecteezy.com/system/resources/previews/000/572/885/original/check-mark-icon-vector.jpg" width="300" height="300">
    <h1 style="font-size: 40px;">Order Placed Successfully!!</h1>
</div>  
