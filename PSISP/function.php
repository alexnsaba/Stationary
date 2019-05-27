<?php
require'database.php';
//login function for Admin
function adminLogin(){
	require'database.php';
	if(!empty($_POST['email'])&&!empty($_POST['password'])){ // making sure that the login details are not empty
$email=$_POST['email']; // Fetching Values from URL.
$password= sha1($_POST['password']); // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "<p style='color: red'>Invalid Email.......</p>";
}else{	
// Matching user input email and password with stored email and password in database.
$result = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password' and type='Manager'");
$data = mysqli_num_rows($result);
if($data==1){
            $_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			$URL="admin.php";
			 echo "<script>window.location.href = '{$URL}';</script>";
			 echo'<META HTTP-EQUIV = "refresh" content="0;URL=' .$URL . ' ">';
			 exit();
}else{
echo "<p style='color: red'>Email or Password is wrong...!!!!</p>";
}
}
mysqli_close ($con);
}
}
//Cashier Login
function cashierLogin(){
	require'database.php';
	if(!empty($_POST['email'])&&!empty($_POST['password'])){ // making sure that the login details are not empty
$email=$_POST['email']; // Fetching Values from URL.
$password= sha1($_POST['password']); // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "<p style='color: red'>Invalid Email.......</p>";
}else{	
// Matching user input email and password with stored email and password in database.
$result = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password' and type='Cashier'");
$data = mysqli_num_rows($result);
if($data==1){
            $_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			$URL="cashier.php";
			 echo "<script>window.location.href = '{$URL}';</script>";
			 echo'<META HTTP-EQUIV = "refresh" content="0;URL=' .$URL . ' ">';
			 exit();
}else{
echo "<p style='color: red'>Email or Password is wrong...!!!!</p>";
}
}
mysqli_close ($con);
}
}

//accountant Login
function accountantLogin(){
	require'database.php';
	if(!empty($_POST['email'])&&!empty($_POST['password'])){ // making sure that the login details are not empty
$email=$_POST['email']; // Fetching Values from URL.
$password= sha1($_POST['password']); // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "<p style='color: red'>Invalid Email.......</p>";
}else{	
// Matching user input email and password with stored email and password in database.
$result = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password' and type='Accountant'");
$data = mysqli_num_rows($result);
if($data==1){
            $_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			$URL="accountant.php";
			 echo "<script>window.location.href = '{$URL}';</script>";
			 echo'<META HTTP-EQUIV = "refresh" content="0;URL=' .$URL . ' ">';
			 exit();
}else{
echo "<p style='color: red'>Email or Password is wrong...!!!!</p>";
}
}
mysqli_close ($con);
}
}
mysqli_close ($con); 
?>