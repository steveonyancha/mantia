<?php session_start();
//include 'config.php';

// Check if the user is logged in

if(!isset($_SESSION['username']))
{

header("Location: welcome.php");
exit;
}

?>
<?php

include("database/config.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#as').load('backup.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<div id="as"></div>


 <!--back up-->
  
  <!--Script top is process to add-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN HOME</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />	

</head>

<script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.fixedMenu.js"></script>
        <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
        <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>
      
        <script src="js/organictabs.jquery.js"></script>


</head>

<body>

<div class="header">
  
</div>
<?php include('umenu.php'); ?>
<!-- <div style="width:100%; background:#3B5998; border: #000 1px solid;"></div>
--><div class="wrapper">
<div class="head">
<div class="head_title">

<?php if(isset($_GET['searchBooks'])){ ?>Search Books<?php } ?>
<?php if(isset($_GET['start'])){ ?>start<?php } ?>
<?php if(isset($_GET['countinue'])){ ?>Countinue<?php } ?>
<?php if(isset($_GET['proceed'])){ ?>proceed<?php } ?>
<?php if(isset($_GET['view'])){ ?>view<?php } ?>
    



</div>
</div>
<div class="body">

<?php
if(isset($_GET['start'])){
	 include('start.php'); 
	}
elseif(isset($_GET['proceed'])){
	 include('proceed.php'); 
	}
    elseif(isset($_GET['view'])){
	 include('view.php'); 
	}

	
/*----------------------------------------------*/
	
	
	
/*----------------------------------------------*/
	else{ ?>
<center><br><br> 
		</center><?php }

	
	 //include('login.php'); 

 ?>

    </div>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot"> 
</div>
<div class="rightfoot"></div>
</div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>

    <?php  ?>
