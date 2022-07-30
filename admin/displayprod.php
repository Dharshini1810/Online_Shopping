<?php 
include('header.php'); 
require('conn.php'); 
$sql="SELECT * FROM add_product";
$result=mysqli_query($conn,$sql); 
$prod=mysqli_fetch_all($result,MYSQLI_ASSOC); //2-d array format
?>
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM add_product WHERE id=$id";
        if(mysqli_query($conn,$query)){
            header("location:displayprod.php");
        }    
    }    
?>
<style>
    th{
        padding-left: 13rem; 
        padding-bottom: 1.5rem; 
        padding-top: 2rem; 
        color: #dd6564; ;
        font-size: 20px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
    } 
    td{
        padding-left: 13rem;
        padding-bottom: 1.5rem; 
        color: black;
        font-size: 15px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
    } 
    button{
        background-color: #dd6564;
        color:white;
        width: 5.5rem; 
        height:2.2rem;
        border:none;
        border-radius: 5px;
    }
</style>
<h1>Product List</h1>  
<div style="text-align:center;">    
<table style="padding-left: 0rem;">
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr> 
    <?php foreach($prod as $product){ ?>
    <tr>
        <td><?php echo $product['pid']?></td> 
        <td><?php echo $product['pname']?></td>
        <td><?php echo $product['price']?></td>
        <td>
        <a style="margin-left: -100px;" href="info.php?id=<?php echo $product['id']?>">
        <button>View</button></a></td>
        <td>
        <a style="margin-left: -350px;" href="displayprod.php?id=<?php echo $product['id']?>">
        <button value="delete">Delete</button></a></td>
    </tr>
    <?php } ?>
</table>
</div>