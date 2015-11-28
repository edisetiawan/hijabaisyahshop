<!DOCTYPE html>
<html>
<head>
<title>Hijabaisyahshop</title>
<link href="<?php echo base_url(); ?>assets/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hijabaisyahsop, Hijab mahasiswi jogja, jula hijab"/>
<script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/home/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="<?php echo base_url(); ?>assets/home/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<!--header-->
<div class="header">
	 <div class="container">
	     <div class="main-header">
			  <div class="carting">
				 <ul><li><a href="#"> LOGIN</a></li></ul>
				 </div>
			 <div class="logo">
				 <h3><a href="<?php echo base_url(); ?>">HIJABAISYAHSHOP</a></h3>
			  </div>			  
			 <div class="box_1">				 
				 <a href="<?php echo base_url(); ?>cart"><h3>Cart: <span class="1simpleCart_total"></span> ( <span id="1simpleCart_quantity" class="simpl1eCart_quantity"><?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
        //echo "Rp. ".number_format();
       
	endforeach;
endif;
echo "Rp.";
echo  number_format($grand_total,0,',','.');
?></span> )<img src="<?php echo base_url(); ?>assets/home/images/cart.png" alt=""/></h3></a>
				 <p><a href="javascript:;" class="simpleCart_empty"></a></p>
			 
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
				
				<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="<?php echo base_url(); ?>">Home</a></li>
			<li class="grid"><a href="#">Women</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
			                     <ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Products</h4>
							     <ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
       	                        <ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
							<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a href="#">MEN</a><div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Products</h4>
                                <ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li class="grid"><a href="<?php echo base_url(); ?>home/about">ABOUT US</a></li>
			 <li class="grid"><a href="#">BLOG</a></li>				
				<li><a href="#">SHOP ONLINE</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
							     <ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Products</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="#">trends</a></li>
									<li><a href="#">sale</a></li>
									<li><a href="#">style videos</a></li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>			
				
				</ul> 			 
			  <div class="clearfix"></div>			   	
	 </div>
		 <div class="caption">
		 <h1>FASHION AND CREATIVITY</h1>	 
		 <p>Tebarkan senyummu kepada semua yang engkau kehendaki dan buatlah anggunya dirimu menjadi pancaran keindahanmu dalam indahnya raga yang terbalut hijabmu</p>
	     </div>
</div>
<!--header-->