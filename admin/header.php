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
        table{
            text-align: center;
        }
    </style>
    <navbar style="position:fixed;">
        <ul id="nav">
            <a href="">
            <uli class="navitem">Logout</uli></a>
            <a href="displayprod.php"> 
            <a href="">
            <uli class="navitem">Placed Order</uli></a>
            <a href="displayprod.php"> 
            <uli class="navitem">Product Details</uli></a>
            <a href="addproduct.php">
            <uli class="navitem">Add Product</uli></a>
        </ul>
    </navbar>
</head>
<body>