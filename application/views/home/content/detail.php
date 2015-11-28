<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Single</li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">					 
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						<div class="flexslider">
							        <!-- FlexSlider -->
										<script src="<?php echo base_url(); ?>assets/home/js/imagezoom.js"></script>
								        <script defer src="<?php echo base_url(); ?>assets/home/js/jquery.flexslider.js"></script>
									<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/home/css/flexslider.css" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->

							  <ul class="slides">
								<li data-thumb="<?php echo base_url(); ?>assets/home/<?php echo $picture; ?>">
									<div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/home/<?php echo $picture; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
                                <!--
								<li data-thumb="<?php echo base_url(); ?>assets/home/images/s2.jpg">
									 <div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/home/images/s2.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="<?php echo base_url(); ?>assets/home/images/s3.jpg">
								   <div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/home/images/s3.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="<?php echo base_url(); ?>assets/home/images/s4.jpg">
								   <div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/home/images/s4.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li> -->
							  </ul>
							<div class="clearfix"></div>
						</div>
		
					 </div>
					 <div class="details-left-info">
							<h3>Belle Fille Grey & Black</h3>
								<h4>Pellentesque pretium </h4>							
							<p>Rp. <?php echo number_format($price,0,',','.'); ?>,00<br /><a>(Belum termasuk ongkos kirim)</a></p>
							<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
                            <?php
                            
                    $id = $serial;
                    $name = $name;
                    $picture = $picture;
                    $description = $description;
                    $price = $price; 
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
                    echo form_hidden('picture', $picture);
					echo form_hidden('price', $price);
                    ?>
                    <!--<a href="<?php //echo base_url(); ?>home/cart">Add to cart</a> -->
                    <input type="submit" name="" class="item_add" value="Add to cart"/>
                    <?php
					
                    
                   // echo form_submit('action', 'Add to Cart');
					echo form_close();
					?>
								
							</div>
							<div class="flower-type">
							<p>Mobel  ::<a href="#">Dress</a></p>
							<p>Brand  ::<a href="#">Pellentesque</a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc"><?php echo $description; ?></p>
					 </div>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>		 
		 <div class="clearfix"></div>
		 <div class="single-bottom2">
			 <h6>Related Products</h6>
                <!--
				<div class="rltd-posts">
					 <div class="col-md-3 pst1">
						 <img src="<?php echo base_url(); ?>assets/home/images/ab3.jpg" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="<?php echo base_url(); ?>assets/home/images/c1.jpg" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="<?php echo base_url(); ?>assets/home/images/ab4.jpg" alt=""/>
						 <h4><a href="products.html">SAREES</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="<?php echo base_url(); ?>assets/home/images/c5.jpg" alt=""/>
						 <h4><a href="products.html">MANGO</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="clearfix"></div>
				</div>
                -->
		 </div>	
	 </div>
</div>