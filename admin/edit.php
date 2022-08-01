<?php
include('header.php');
require('conn.php');
$id=$_GET['id'];  
$sql="SELECT * FROM add_product"; 
$result=mysqli_query($conn,$sql); 
$prod=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach($prod as $product){
    if($product['id']==$id){
        $ans=$product;
        break;
    }
}      
if(isset($_GET['submit'])){
    $pid=$_GET['pid']; 
    $pname=$_GET['pname']; 
    $price=$_GET['price']; 
    $descp=$_GET['desc'];
    $sql=" UPDATE add_product SET pid='$pid', pname='$pname', price='$price', descp='$descp' WHERE pid='$pid' "; 
    $data=$res=mysqli_query($conn,$sql);
    if($data){
        echo '<script>alert("Data updated successfully!")</script>';
    }
}
?> 
<h1>Edit Product</h1> 
<form method="GET" action="edit.php">
    <label>Product Id:</label><br> 
    <input name="pid" type="text" value="<?php echo $ans['pid']?>"><br> 
    <label>Product Name:</label><br> 
    <input name="pname" type="text" value="<?php echo $ans['pname']?>"><br> 
    <label>Price:</label> <br>
    <input name="price" type="text" value="<?php echo $ans['price']?>"><br>
    <label>Product Description:</label><br>
    <textarea style="padding-left:20px; margin-top:20px; margin-bottom:20px; border: 1.5px solid black; border-radius:15px;" rows="5" cols="42" name="desc" type="text"><?php echo $ans['descp']?></textarea><br> 
    <input style=" margin-top:20px;border:none; background-color:#dd6564; color: white;" type="submit" name="submit" value="SUBMIT">
</form>
