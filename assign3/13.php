

<?php

$con = mysqli_connect("localhost","root","","demo");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
   
   
   $user_check = $_SESSION["login_user"];
   
   $ses_sql = mysqli_query($db,"select username from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['username'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>

Index.php

<?php


include('db.php');
session_start();
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["login_user"])) {
	$_SESSION["login_user"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["login_user"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["login_user"] = array_merge($_SESSION["login_user"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
  <h1>Welcome <?php echo $_SESSION['login_session']; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
<title>Demo Simple Shopping Cart using PHP and MySQL</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Demo Simple Shopping Cart using PHP and MySQL</h2>   

<?php
if(!empty($_SESSION["login_user"])) {
$cart_count = count(array_keys($_SESSION["login_user"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>₹".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</div>
</body>
</html>


Login.php

<?php
   
   include('db.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
	  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $total = $row[0];
      echo "Total rows: " . $total;
      
      //$count = mysqli_num_rows($result);/
      //echo $count;/
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($total == $myusername)
	  {
         #session_register("myusername");
		  session_start();
         $_SESSION['login_user'] = $myusername;
		 $_SESSION['login_session'] = $myusername;
         header("location: index.php");
      }
	  else
	  {
         $error = "Your Login Name or Password is invalid";
		 print("Your Login Name or Password is invalid");
      }  
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               	
            </div>
				
         </div>
			
      </div>

   </body>
</html>

Logout.php

<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>