
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Rounded Flat User Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/ap/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>






<body>
  <!-- main -->
    <div class="main">
      <h1>Login Form</h1>
      <div class="input_form">
        <form >
          <input type="text" name="identity" placeholder="mobile number"   required="">
          <input type="password" name="password" placeholder="password"   required="">
      
<div class="ckeck-bg">
        <div class="checkbox-form">
          <div class="check-left">
            <div class="check">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Remember my Password</label>
            </div>
          </div>
          <div class="check-right">
    
            <input type="submit" value="Login">
    
          </div>
  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>

          <div class="clearfix"> </div>
        </div>
      </div>

        </form>
        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        <div><a href="create_user">Register Here</a></div>

      </div>
      
    </div>
</body>
</html>







<?php echo form_close();?>

