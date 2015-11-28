<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Login Administrator Hijabaisyahshop</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1>HIJABAISYAHSHOP</h1>
	<div class="contact-form">
	 <div class="signin">
     <form method="post" action="<?php echo base_url(); ?>admin/login">
	      <input type="text" class="user" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" />
	      <input type="password" class="pass" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
          <input type="submit" value="LOGIN" />
        <!--  <p>Not a member? <a href="#">Signup now >></a> </p> -->
	 </form>
	 </div>
	</div>
</div>
<div class="footer">
     <p>Copyright &copy; <?php echo date('Y'); ?> Hijabaisyahshop</p>
</div>
</body>
</html>