<?php
include 'header.php';
require('conn.php');
if(isset($_POST['submit'])){
    $pid=htmlspecialchars($_POST['pid']);      
    $pname=htmlspecialchars($_POST['pname']);      
    $price=htmlspecialchars($_POST['price']);      
    $desc=htmlspecialchars($_POST['desc']);      
    $imgname=$_FILES['image']['name'];
    $img=$_FILES['image']['tmp_name'];
    $img=file_get_contents($img); 
    $img=base64_encode($img);
    $pname=mysqli_real_escape_string($conn,$pname);
    $price=mysqli_real_escape_string($conn,$price);
    $desc=mysqli_real_escape_string($conn,$desc);
    $imgname=mysqli_real_escape_string($conn,$imgname);
    $img=mysqli_real_escape_string($conn,$img);
    $sql="INSERT INTO add_product(pid,pname,price,descp,imgname,img) VALUES('$pid','$pname','$price','$desc','$imgname','$img')";
    if(!mysqli_query($conn,$sql)){
        echo 'error';
    }
    else{
        echo '<script>alert("Product Added!")</script>';
    }
}
?>
<h1>Add Product</h1> 
<form method="POST" enctype="multipart/form-data" action="addproduct.php">
    <label>Product Id:</label><br> 
    <input name="pid" type="text"><br> 
    <label>Product Name:</label><br> 
    <input name="pname" type="text"><br> 
    <label>Price:</label> <br>
    <input name="price" type="text"><br>
    <label>Product Description:</label><br>
    <textarea  style="padding-left:20px; margin-top:20px; margin-bottom:20px; border: 1.5px solid black; border-radius:15px;" rows="5" cols="42" name="desc" type="text"></textarea><br> 
    <label>Image</label><br>
    <input style="border:none; font-size: 20px; font-weight:bold;" name="image" type="file" accept="image/*"><br>
    <input style=" margin-top:20px;border:none; background-color:#dd6564; color: white;" type="submit" name="submit" value="SUBMIT">
</form>
