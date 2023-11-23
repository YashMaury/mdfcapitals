

<?php
include('admin/inc/function.php');
?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Zinat Token | SignUp
</title><meta charset="utf-8" /><meta name="author" content="cryptoscience.world" /><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /><meta name="description" content="PHC World" />
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!-- Site Title  -->
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="login/css/vendor.bundle8bfc.css?ver=1420" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="login/css/style1.css" /><link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet" />
    <style>
        .user-ath {
            background: linear-gradient(135deg, #051b3300 0%, #00244a52 100%), url(images/bgimg.png) no-repeat 50% 50%, #eaf3fc;
            background-size: cover;
            background-position: center;
        }

      .input-bordered {
	border-radius: 4px;
	border: 1px solid #ffffff0f;
	width: 100%;
	padding: 10px 15px;
	line-height: 20px;
	font-size: 14px;
	color: #fff;
	transition: all .4s;
	background: #ffffff12;
}

    .user-ath-box {
	position: relative;
	padding: 45px 40px 40px;
	background: linear-gradient(90deg,#1f2933 0,#19222d 50.39%,#19222b);
	border-radius: 13px;
	box-shadow: none !important;
	backdrop-filter: blur(4px);
	border: 2px solid #ffffff14;
	background-color: #212a33;
}

            .user-ath-box::after {
                background: none;
            }

        .input-item {
            padding-bottom: 20px;
        }

        .btn {
            color: #fff;
        }

        
       .btn-primary {
	background: #88d00f;
	border: none !important;
	box-shadow: none !important;
}
    </style>
</head>
<body class="user-ath no-touch">

<div>

</div>

<div>


</div>

<form name="form1" class="text-left clearfix mt-50" action="registration-process" method="post" >
        <div>
            <div class="user-ath-page">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8  text-center">
                            <div class="user-ath-logo">
                                <a href="#">
                                    <img src="cclogo.png" alt="icon" style="max-width: 220px;" />
                                </a>
                            </div><?php if($_REQUEST['msg']==4){?>
<div align="center" style="background:#FFFFFF;">
<div align="center" style="margin:0;padding:0;color:#0000FF; font-size:18px;"><strong>Your registration is successfully completed!</strong></div>
<h6 align="center" style="color:#0000FF;font-size:18px;">User ID: <?=getMember($conn,$_REQUEST['id'],'userid')?>&nbsp; Password: <?=base64_decode(getMember($conn,$_REQUEST['id'],'password'))?></h6>
</div>
<?php }?>

<?php if($_REQUEST['e']==1){?><p align="center" style="color:#FF0000;">Phone number already used!</p><?php }?>
<?php if($_REQUEST['e']==2){?><p align="center" style="color:#FF0000;">Email ID already used!</p><?php }?>

<?php if($_REQUEST['q']==4){?>
<div align="center" style="margin:0;padding:0;color:#fff; font-size:14px;"><strong>Invalid/Inactive Sponsor ID !</strong></div>
<?php }?>
                            <div class="user-ath-box">
                                <h4>Register Your Account</h4>
                                
                                
                                
                                <div class="input-item">
<input type="text" class="input-bordered" placeholder="Sponsor Name" name="sponsor" id="sponsor"  required  value="<?=$_REQUEST['spon']?>" />



                                </div>
                                
                                <div class="input-item">
<input type="text" class="input-bordered"  placeholder="Enter Name" name="name" id="name"   required  />

                                </div>
                                
                                <div class="input-item">
<input type="password" class="input-bordered"  placeholder="Enter Password" name="password" id="password"   required   />

                                </div>
                                
                                <div class="input-item">
<input type="text" class="input-bordered"  placeholder="Enter Phone" name="phone" id="phone"   required   />

                                </div>
                                
                                <div class="input-item">
<input type="text" class="input-bordered"  placeholder="Enter Email" name="email" id="email"   required   />

                                </div>
                                
                                
                                
                                
                                
                                
                                <div class="gaps"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    
                                    <input type="submit" name="btn_Login" value="Sign Up" id="btn_Login" class="btn btn-primary" />
                                    <!--<a href="For-Pwd" class="simple-link">Forgot Password?</a>-->
                                </div>
                                <br />
                                <span id="lblMessage"></span>
                            </div>  </form>
                            <div class="gaps-2x"></div>
                            <div class="form-note">Already a member? <a href="log">Login Now</a> </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JavaScript (include all script here) -->
            <script src="login/js/jquery.bundle.js?ver=101"></script>
            <script src="login/js/script.js?ver=101"></script>
        </div>
  
</body>
</html>
