<?php
require('conn.php');
if(isset($_POST['submit'])){
    $mailid=$_POST['email']; 
    $password=$_POST['password']; 
    $query="SELECT * FROM adminlogin";
    $data=mysqli_query($conn,$query); 
    foreach($data as $data1){
        if($data1['email'] == $mailid and $data1['pswd'] == $password){
            $id=$data1['id'];
            echo "<script>alert('Login Successful!')</script>";
            header("location:displayprod.php");
            break;
        }
    }
}
?>
<!Doctype HMTL>
<html>
    <head>
        <title>Login</title>
        <style>
            h1{
                padding-top: 20px;
                padding-bottom: 20px;
                text-align:center;
                font-size:30px;  
                color:#dd6564;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }  
            form{
                text-align: center;
            }
            label{
                font-size: 20px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color: #dd6564; 
            } 
            .inputtag{
                width: 20rem;
                height: 3rem;
                border-radius: 25px;
                border: none;  
                background-color: #c5c6d0;
                margin-top: 30px; 
                margin-bottom: 30px;
                opacity: 0.4; 
                font-size: 15px;
                color: black; 
                padding-left: 20px;  
            } 
            .buttons{
                width: 20rem;
                height: 3rem; 
                background: #dd6564;
                border: none; 
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
                border-radius: 25px; 
                color: white; 
                font-size: 15px;
                margin-bottom: 30px;
            }
        </style>
    </head> 
    <body>
        <h1>Admin Login</h1>
        <form action="adminlogin.php" method="POST">
            <label>EMAIL:</label><br>
            <input class="inputtag" type="email" name="email"><br> 
            <label>PASSWORD:</label><br> 
            <input class="inputtag" type="password" name="password"><br>
            <input type="submit" name="submit" class="buttons" value="SUBMIT"><br>
        </form>
    </body>
</html>