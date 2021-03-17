<!DOCTYPE html>
<html>
<head>
<style>
   .header {
  overflow: hidden;
  background-color: grey;;
  padding: 20px 10px;
}

.header a {
  float: right;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: olive green;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
   /* text-align: left;*/
  }
  
  .header-right {
    float: none;
  }
}
   h1{
       margin: 0px;
     
       text-align: center;
       color: white;
   }
   .loginbox{
       margin-top:40px;
       width:320px;
       height:520px;
       background:#000;
       color:#fff;
       top:50%;
       left: 50%;
       position: absolute;
       transform: translate(-50%,-50%);
       box-sizing: border-box;
       padding: 70px 30px;
   }
   body{
       margin:0;
       padding: 0px;
       background: url(final1.jpg);
       background-position: center;
       font-family: sans-serif;
       background-color: rgb(212, 204, 204);
       
     }
     .loginbox p{
         margin: 0px;
         padding: 0px;
         font-weight: bold;
     }
     .loginbox input{
         width: 100%;
         margin-bottom: 20px;
     }
     .loginbox input[type="email"],input[type="password"],input[type ="text"],input[type ="tel"]{
         border: none;
         border-bottom: 1px solid #fff;
         background: transparent;
         outline: none;
         height: 40px;
         color:#fff;
         font-size: 16px;
     }
     .loginbox input[type="submit"]
     {
         border: none;
         outline: none;
         height: 40px;
         background: dark grey;
         color:#000;
         font-size: 18px;
         border-radius: 20px;
     }
     .loginbox input[type="submit"]:hover
     {
         cursor: pointer;
         background: #ffc107;
         color: #000;
     }
     .loginbox a{
         text-decoration: none;
         font-size: 12px;
         line-height: 20px;
         color: darkgray;
     }
   </style>
   <body>
   <div class="header">  
   <nav> <a href="add.php">Add Customer</a> </nav>
    <nav ><a href="hist.php">Transfer History</a></nav>
    <nav ><a href="home.php" style="float:left;">HOME</a></nav>
</div>
  
<div class="loginbox">
<h1>Register here</h1>
<form method ="post" action="#">
<label for name>Name</label></td>
<td><input type ="text" name ="name" placeholder="Enter name"></td>
<label >Balance</label></td>
<td><input type ="tel" name ="bal"  required placeholder="Enter balance"></td>
<td><label >E-mail id</label></td>
<td><input type ="email" name ="email" placeholder="Enter email"></td>
<label >Account Number</label></td>
<td><input type ="tel" name ="ano"  required placeholder="Enter Account Number"></td>

<br><input type="submit" name="insert" value="Submit">

<?php
$conn=mysqli_connect("localhost","root","","bank");
if(!$conn){
    echo "error".mysqli_connect_error();
}
else{
if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $bal=$_POST['bal'];
    $email=$_POST['email'];
    $ano=$_POST['ano'];
   
    $q="insert into customer(name,  email,balance, ano) VALUES ('$name', '$email', '$bal','$ano')";
    $query_run=mysqli_query($conn,$q);

    }
    
}
    
   
    

  

    ?>


</form>
</div>
</body>
</head>
</html>
