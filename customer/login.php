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
        <h1>Register/Login</h1>
        <form action="#" method="POST">
            <label>EMAIL:</label><br>
            <input class="inputtag" type="email" name="email"><br> 
            <label>PASSWORD:</label><br> 
            <input class="inputtag" type="password" name="password"><br>
            <input type="submit" class="buttons" value="SUBMIT"><br>
            <button class="buttons">REGISTER</button>
        </form>
    </body>
</html>