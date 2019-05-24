<?php
session_start();
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Paper Source InterStationers and Printers | Kisoro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <!-- Include CSS For the login -->
   <style>
   /* Below line is used for online Google font */
@import url(http://fonts.googleapis.com/css?family=Droid+Serif);
h2{
text-align: center;
font-size: 24px;
}
p{
	font-size:20px;
}
hr{
margin-bottom: 30px;
}
div.container{
width: 960px;
height: 150px;
font-family: 'Droid Serif', serif;
position:relative;
}
div.main{
width: 320px;
margin-top: 10%;
float:left;
padding: 10px 55px 40px;
background-color: rgba(187, 255, 184, 0.65);
border: 15px solid white;
box-shadow: 0 0 10px;
border-radius: 2px;
font-size: 13px;
}
@media screen and (min-width:720px){
	div.main{
	margin-left: 30%;	
	}
}
input[type=text],[type=password] {
width: 125%;
height: 34px;
padding-left: 5px;
margin-bottom: 20px;
margin-top: 8px;
box-shadow: 0 0 5px #00F5FF;
border: 2px solid #00F5FF;
color: #4f4f4f;
font-size: 16px;
}
label{
color: #464646;
text-shadow: 0 1px 0 #fff;
font-size: 14px;
font-weight: bold;
}
#login {
width: 100%;
background: linear-gradient(#22abe9 5%, #36caf0 100%);
border: 1px solid #0F799E;
font-size: 20px;
margin-top: 15px;
padding: 8px;
font-weight: bold;
cursor: pointer;
color: white;
text-shadow: 0px 1px 0px #13506D;
}
#login:hover{
background: linear-gradient(#36caf0 5%, #22abe9 100%);
}
   </style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
<!-- Jquery for the login>
$(function(){
$("#login").click(function(){
var email = $("#email").val();
var password = $("#password").val();
(function(){
	$("#empType").selectmenu();
});
// Checking for blank fields.
if( email =='' || password ==''){
$('input[type="text"],input[type="password"]').css("border","2px solid red");
$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
alert("Please fill all fields...!!!!!!");
}
});
});
</script>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">   

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu -->
      <div>        
           <h1><center>PAPER SOURCE INTERSTATIONERS AND PRINTERS</center></h1>           
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

            
        <img style="margin-top:0.5in" src="dist/img/logo.jpg" class="user-image" alt="Company Logo" height ="220" width="220">
       
          
      
           
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content container-fluid">
	<div class="container">
	<div class="main">
	<form class="form" method="post" action="index.php">
	<p>Login As <select id="empType" name="empType" value="empType"><option>Manager</option><option>Cashier</option><option>Accountant</option></select></p>
	<label>Email :</label>
	<input type="text" name="email" id="email">
	<label>Password :</label>
	<input type="password" name="password" id="password">
	<input type="submit" name="login" id="login" value="Login">
</form>
<?php
if(isset($_POST['login'])){
require_once'function.php';
 if($_POST['empType']=="Manager"){
    adminLogin();
 }
 else{
	echo"<p>This is not manager</p>"; 
 }
}

?>
</div>

</div>
      

    </section>
    <!-- /.content -->
  </div>
  

  <!-- Main Footer -->
  <footer class="main-footer">
        
    <!-- Default to the left -->
    <strong><center>Copyright &copy; 2019 Paper Source InterStationers and printers.</strong> All rights reserved.</center>
	</footer>
 </body>
</html>