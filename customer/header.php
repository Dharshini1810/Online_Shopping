<?php
    require("conn.php");
    $id=$_GET['id']; 
    $query="SELECT * FROM user_register";
    $data=mysqli_query($conn,$query); 
    foreach($data as $data1){
        if($data1['id'] == $id){
            $name=$data1['name']; 
            break;
        }    
    } 
?>
<!Doctype HTML>
<head>
    <style>
        h1{
            padding-top: 6rem;
            color: #dd6564; ;
            font-size: 30px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
            text-align:center;
        } 
        form{
                margin-top:30px;
                text-align: center;
            }
        label{
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: #dd6564; 
        } 
        input{
            padding-left:20px;
            margin-top: 20px; 
            margin-bottom:20px;
            width: 20rem; 
            height: 2.5rem;
            border: 1.5px solid black;
            border-radius: 10px;
        }
        #nav{
            display:flex; 
            flex-direction:row-reverse;
            background: white; 
            width:94.9rem;
            padding-top:30px;
            padding-bottom:30px;
            height: 30px; 
            margin-top:-20px;
            margin-left:-10px;
            position:sticky;
        } 
        .navitem{
            padding-right:30px;
            padding-left:30px;
            color: #dd6564; ;
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
        } 
        a{
            text-decoration:none;
        } 
        #user{
            margin-top: -2rem;
        }
        table{
            text-align: center;
        }
    </style>
    <navbar style="position:fixed;">
        <ul id="nav">
            <a href="">
            <uli class="navitem">Logout</uli></a>
            <uli style="padding-right: 75rem;" class="navitem">hello, <?php echo $name ?></uli></a>
        </ul>
    </navbar>
</head>
<body> 
<?php
$id=$_GET['id'];
require('conn.php'); 
$sql="SELECT * FROM add_product";
$result=mysqli_query($conn,$sql); 
$prod=mysqli_fetch_all($result,MYSQLI_ASSOC); //2-d array format
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
        <button value="delete">Place Order</button></a></td>
    </tr>
    <?php } ?>
</table>
</div>    
