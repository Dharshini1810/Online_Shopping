<?php
require('conn.php'); 
$id=$_GET['id']; 
$uid=$_GET['uid'];
$sql="SELECT * FROM add_product"; 
$result=mysqli_fetch_all(mysqli_query($conn,$sql)); 
?> 
<style>
     h1{
            padding-top: 6rem;
            color: #dd6564; ;
            font-size: 30px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
            text-align:center;
    } 
    h3{
        text-align:center;
    }
    div{
        position: relative;
        left: 35rem;
        height: 35rem; 
        margin-bottom: 30px;
        width:25rem;
        border: 0px solid black;
        border-radius: 10px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
        font-size: 13px; 
        padding: 10px;
    } 
    .label{
        font-size: 17px;
        font-weight:bolder;
    }
</style>    
<h1>Product Description</h1> 
<div>
    <?php foreach($result as $res){?>
    <?php if($res[0]==$id){?>
    <h3><?php echo "<img width='200px' height='200px' src='data:image;base64,{$res[6]}'alt='img';>"?></h3>      
    <h4 class="label">Product Id:</h4>
    <h3><?php echo $res[1];?></h3>
    <h4 class="label">Product Name:</h4>
    <h3><?php echo $res[2];?></h3>
    <h4 class="label">Price:</h4>
    <h3><?php echo $res[3];?></h3>
    <h4 class="label">Description:</h4>
    <h3><?php echo $res[4];?></h3>                   
    <?php } ?>    
    <?php } ?>
    <a style="margin-bottom: 25px;" href="header.php?id=<?php echo $uid?>">
        <button style="width:100px; height: 30px; margin-top:20px;border:none; background-color:#dd6564; color: white;">BACK</button>
    </a> 
</div> 