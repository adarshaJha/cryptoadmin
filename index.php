<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cryptoadmin login</title>
<title>Crypto Admin - Dashboard</title>

    
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
    
    <!--amcharts -->
    <link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
    
    <!-- Bootstrap-extend -->
  <link rel="stylesheet" href="css/bootstrap-extend.css">
  
  <!-- cryptocoins fonts -->
  <link rel="stylesheet" href="css/webfont/cryptocoins-colors.css">
  <link rel="stylesheet" href="css/webfont/cryptocoins.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
  

    <!-- theme style -->
    <link rel="stylesheet" href="css/master_style.css">
    
    <!-- Crypto_Admin skins -->
    <link rel="stylesheet" href="css/skins/_all-skins.css">
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style type="text/css">
        form#login-form {
    width: 34%;
    margin: 8% auto;
}
    </style>
</head>
<body>

<div class="signin-form">

	<div class="container">
        <h2 class="form-signin-heading">CryptoFund</h2><hr />
        
       <form class="form-signin" method="post" id="login-form">
      
     
        
        <div id="error">
        <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                </div>
                <?php
			}
		?>
        </div>
        <div class="loginformcont">
            
        </div>
        <div class="form-group">
        <input type="text" class="form-control bgnone" name="txt_uname_email" placeholder="Username or E mail ID" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control bgnone" name="txt_password" placeholder="Your Password" />
        </div>
       
     	<hr />

        <div class="form-group">
            <div id="html_element"></div>

        </div>
        
        <div class="form-group">
            <button type="submit" name="btn-login" class="btn btn-default">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN IN
            </button>
        </div>  
      	<br />
            <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
      </form>

    </div>
    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- api reqests to coinmarketcap  -->
  <script src="js/api.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
</body>
</html>