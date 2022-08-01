<!Doctype HMTL>
<html>
   <?php
        require('conn.php');  
        $nameerr="";$noerr="";$pswderr="";
        $f1=0;$f2=0;$f3=0;
        if(isset($_POST['submit'])){
            $name=htmlspecialchars($_POST['name1']); 
            $mobno=htmlspecialchars($_POST['mobno']); 
            $email=htmlspecialchars($_POST['email']); 
            $pswd=htmlspecialchars($_POST['pswd']); 
            if(strlen($name)<3){
                $nameerr="*Enter valid name";
            } 
            else{
                $f1=1;
            } 
            if(strlen($mobno)!=10){
                $noerr="*Enter valid mobile number";
            } 
            else{
                $f2=1;
            } 
            if(strlen($pswd)<8){
                $pswderr="*Enter valid pswd"; 
            } 
            else{
                $f3=1;
            } 
            if($f1==1 and $f2==1 and $f3==1){    
                $name=mysqli_real_escape_string($conn,$name);
                $mobno=mysqli_real_escape_string($conn,$mobno);
                $email=mysqli_real_escape_string($conn,$email);
                $pswd=mysqli_real_escape_string($conn,$pswd);
                $sql="INSERT INTO user_register(name,mobno,email,pswd) VALUES('$name','$mobno','$email','$pswd')";
                if (!mysqli_query($conn,$sql)) {
                    echo 'Data Not inserted';
                }
                else{
                    echo "<script>alert('Registration Done Successfully!! Now login')</script>";
                }
            }    
            $nameerr="";
            $noerr="";
            $pswderr="";
        }  
   ?>
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
            .button1{
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
        <h1>Register/Login</h1>
        <form action="register.php" method="POST">
            <label>NAME:</label><br>
            <input class="inputtag" type="text" name="name1" required><br>
            <p style="margin-top:-10px; color:red"><?php echo $nameerr ?></p>
            <label>MOBILE NO:</label><br>
            <input class="inputtag" type="tel" name="mobno" required><br>
            <p style="margin-top:-10px; color:red"> <?php echo $noerr ?></p>  
            <label>EMAIL:</label><br>
            <input class="inputtag" type="email" name="email" required><br> 
            <label>PASSWORD:</label><br> 
            <input class="inputtag" type="password" name="pswd" required><br>
            <p style="margin-top:-10px; color:red"><?php echo $pswderr ?></p>
            <input type="submit" name="submit" class="button1" value="SUBMIT"><br>
        </form>    
            <a href="login.php">                
            <button style="margin-left: 37.5rem;" class="button1">LOGIN</button></a>
    </body>
</html>