<?php
session_start();
      if(isset($_SESSION['email'])&& !empty($_SESSION['email'])){       
      }else{
       header("location:index.php");  
      }
      
 ?> 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Paper Source InterStationers and Printers | Kisoro</title>
    <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
  
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  @media screen and (min-width:720px){
	td.h1{
	margin-left: 30%;	
	}
}
 @media screen and (min-width:720px){
	.box{
	
	}
}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PSISP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PSISP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">
                
                <?php
        require_once'database.php';
        $email=$_SESSION['email'];
        $a= mysqli_query($con,"select * from user where email='$email' and type='Manager'");
        $rw = mysqli_fetch_array($a);
        echo $rw['name'];
        echo'<img class="user-image" src="data:image;base64,'.$rw['photo'].'" >';
        
        ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <?php    
        
        echo'<img class="img-circle" src="data:image;base64,'.$rw['photo'].'" >';
        
        ?>
                <p>
                  Manager
                  
                </p>
              </li>                          
              <!-- Menu Footer-->
              <li class="user-footer">
                 <div class="pull-left">
                  <a href="logout.php" class="btn btn-primary"> <i class="fa fa-power-off" style="font-size:30px"></i> Log Out</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-primary"><i class="fa fa-window-close" style="font-size:30px"></i> Cancel</a>
                </div>
              </li>
            </ul>
          </li>          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">         
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MANAGER'S DASH BOARD</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>MANAGE USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="active"><a href="register.php"><i class="fa fa-user"></i> Create Account</a></li>
            <li><a href="userEdit.php"><i class="fa fa-edit"></i> Edit Account</a></li>
      <li><a href="userDel.php"><i class="fa fa-trash-o"></i> Delete Account</a></li>
      <li><a href="users.php"><i class="fa fa-newspaper-o"></i> View All Accounts</a></li>
          </ul>
		  
        </li>
		
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-bank"></i> <span>PURCHASES/PRODUCTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="newProducts.php"><i class="fa fa-circle-o"></i> Stoke-In</a></li>           
      <li><a href="availableProducts.php"><i class="fa fa-newspaper-o"></i>Products Available</a></li>
      <li><a href="productEdit.php"><i class="fa fa-edit"></i>Edit Products</a></li>    
       </ul>
      
        </li>
    
     <li class="active treeview">
          <a href="#">
            <i class="fa fa-cc-mastercard"></i> <span>SALES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="newTransaction.php"><i class="fa fa-plus"></i>New Transaction</a></li>
      <li><a href="admin.php"><i class="fa fa-newspaper-o"></i> view Transactions</a></li>
            <li><a href="transactionEdit.php"><i class="fa fa-edit"></i> Edit Transaction</a></li>
      <li><a href="transactionDel.php"><i class="fa fa-trash-o"></i>Delete Transaction</a></li>     
          </ul>
      
        </li>
		
		 <li class="active treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>EXPENSES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="newExpense.php"><i class="fa fa-plus"></i>New Expense</a></li>
      <li><a href="expenses.php"><i class="fa fa-newspaper-o"></i> view Expenses</a></li>
            <li><a href="expenseEdit.php"><i class="fa fa-edit"></i> Edit Expenses</a></li>
      <li><a href="expenseDel.php"><i class="fa fa-trash-o"></i>Delete Expenses</a></li>     
          </ul>
      
        </li>
		 <li class="active treeview">
          <a href="#">
            <i class="fa fa-balance-scale"></i> <span>ACCOUNTING</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>  
            <ul class="treeview-menu">
            <li class="active"><a href="accounts.php"><i class="fa fa-balance-scale"></i>Balance Cashier</a></li>
         
          </ul>     
    </li>
		
		
		 <li class="active treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i> <span>REPORTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dailyReport.php"><i class="fa fa-pie-chart"></i>Daily Report</a></li>
      <li><a href="monthlyReport.php"><i class="fa fa-bar-chart-o (alias)"></i> Monthly Report</a></li>
            <li><a href="annualReport.php"><i class="fa fa-area-chart"></i> Annual Report</a></li>
          
          </ul>
      
        </li>
		
		</ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
	<!--Put your page content here-->
  <center><h1>Available Products</h1></center>
   <center>
   <?php
   require_once 'database.php';
   $sel = mysqli_query($con,"select * from product where Quantity>0");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ProductId</center></th>"; 
  echo"<th> <center>productName</center> </th>";
  echo"<th><center>Selling Price</center></th>";
  echo"<th><center>Quantity</center>  </th>";
 
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
  echo"<td><center>".$row['ProductId']."</center></td>"; 
  echo"<td><center>".$row['productName']."</center></td>";
  echo"<td><center>".number_format($row['SPrice'])." /=</center></td>";
  echo"<td><center>".$row['Quantity']."</center></td>";
  
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";
  echo"<tr>";
  echo"<th> <center>ProductId</center></th>"; 
  echo"<th> <center>productName</center> </th>";
  echo"<th><center>Selling Price</center></th>";
  echo"<th><center>Quantity</center>  </th>";
  
  echo"</tr>";
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Product is available . You need add more products</h2></center>";
   }
  mysqli_close($con);
  ?>
  <center>
    

    </section>
    <!-- /.content -->
  
  </div>
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
        
    <!-- Default to the left -->
    <strong><center>Copyright &copy; 2019 Paper Source InterStationers and printers.</strong> All rights reserved.</center>
	</footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
