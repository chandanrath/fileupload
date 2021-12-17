<?php
session_start();
if (isset($_GET['debug'])) error_reporting(-1);
else error_reporting(0);session_start();


	
include_once 'includes/connect.php';
include_once 'includes/define.php';
include_once 'includes/functions.php';

if(!empty($_GET['action']))
{
	$requestPage = $_GET['action'];
}
else{
	$requestPage = "";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta http-equiv="Refresh" content="6000"> 

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<?php include_once 'includes/link.php'; ?>
 



</head>

<body>

<!-- header start --->



<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="containerk" >
      <!-- Menu button for smallar screens -->

	
		
		<div class="navbar-header">
		  <img src="img/logo.png" width="60px" height="50px">
          
          <span  id='ct' style="text-align:right;padding-left:178px;color:#FFF;font-size: medium;"></span>
		</div>
      <!-- Site name for smallar screens -->
      
	
      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <!-- Links -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">			
              Welcome <?php echo $_SESSION['username'];?> 			 
			  <b class="caret"></b>              
            </a>            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">    
			 
              <li><a href="<?PHP echo ADMIN_PATH;?>logout"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>     
		</nav>
        
      </div>

    </div>
<!-- header end--->


<div class="content">
 <div class="sidebar">
 <div class="sidebar-dropdown">&nbsp;</div>
 
   
    <div class="sidebar-inner">
       <ul class="navi">
             <!--<li class="has_submenu nblue <?php echo (($_GET['action']=='category')?"open":"");?>" >
              <a href="dashboard.php?action=category"><i class="icon-doc"></i> Category</a>
             </li>
			 <li class="has_submenu nblue <?php echo (($_GET['action']=='product')? "open":"");?>" >
              <a href="dashboard.php?action=product"><i class="icon-doc"></i> Product</a>
             </li>-->
			 
			 <li class="has_submenu nblue <?php echo (($_GET['action']=='createpage')? "open":"");?>" >
              <a href="dashboard.php?action=createpage"><i class="icon-doc"></i> Create Page</a>
             </li>
			 
			 <li class="has_submenu nblue <?php echo (($_GET['action']=='imageupload')? "open":"");?>" >
              <a href="dashboard.php?action=imageupload"><i class="icon-doc"></i> Image Upload</a>
             </li>
			 
			  <li class="has_submenu nblue <?php echo (($_GET['action']=='downloadpg')? "open":"");?>" >
              <a href="dashboard.php?action=downloadpg"><i class="icon-doc"></i> Download Pages</a>
             </li>
       </ul>
     </div> 
	 
 </div>


</div>

 <?php 
	
 	include_once('action.php');
?>

 
<!-- chandan Content ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->

<script src="js/jquery.js"></script> <!-- jQuery -->
<script src="js/bootstrap.js"></script>	


</body>
</html>