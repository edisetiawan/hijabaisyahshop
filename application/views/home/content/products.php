<div class="shop">
       <div class="container">
	   <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Shop</li>
		 </ol>
		 
      </div>
</div>
<!---->
<div class="features" id="features">
	 <div class="container">
		 <div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1">Best seller</a></li>
				<li><a href="#tab2">Popular</a></li>
				<li><a href="#tab3">New Arrivals</a></li>
			</ul>
			<div class="clearfix"> </div>
		 <div class="tab-grids">
			 <div id="tab1" class="tab-grid1">
             
				
				   	  <?php //for($i=1;$i<=6;$i++){
             	    foreach ($products_data as $products)
                    {
                       ?> 				  
				 <a href="<?php echo base_url(); ?>home/detail/<?php echo $products->serial ?>"><div class="product-grid">					  
											
						<div class="product-img b-link-stripe b-animate-go  thickbox">						   
							<!--<img src="<?php echo base_url(); ?>assets/home/images/bs1.jpg" class="img-responsive" alt=""/>
                            -->
                           	<img src="<?php echo base_url()."assets/home/".$products->picture ?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4><?php echo $products->name ?></h4>
								<span class="item_price">Rp. <?php echo number_format($products->price,0,',','.'); ?>,00</span>
								<input type="text" class="item_quantity" value="1" />
                    <?php
                   
                    $id = $products->serial;
                    $name = $products->name;
                    $picture = $products->picture;
                    $description = $products->description;
                    $price = $products->price;
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
                    echo form_hidden('picture', $picture);
					echo form_hidden('price', $price);
                    ?>
                    <!--<a href="<?php //echo base_url(); ?>home/cart">Add to cart</a>-->
                    
                    
					
                    <input type="submit" class="item_add" value="ADD">
                    <?php
                    //echo form_submit('action','clas:item_add', 'Add to Cart');
					echo form_close();
					?>
							<!--	<input type="button" class="item_add" value="ADD"> -->
							</div>													 
							<div class="clearfix"> </div>
						</div>
					</div>	
                    
                    <?php 
                    } 
                    
                    ?>	
				
					
			
					
		
					<div class="clearfix"></div>
			 </div>				
				
			 <div id="tab2" class="tab-grid2">
				<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c1.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>							
													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c2.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>STYLES</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>							
													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c3.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>EAVAN</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>							
														
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c4.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>MANGO</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c5.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>														
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c6.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>MIRAGE</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
			 </div>
		 
			 <div id="tab3" class="tab-grid3">
				<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/bs3.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>ROADSTER</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>														
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/bs5.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>RED CHECKS</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">
							</div>														
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c5.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c4.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>MANGO</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>														
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c3.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>EAVAN</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>														
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<a href="single.html"><div class="product-grid boats-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/bs1.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>BELLE B&W</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
						<div class="clearfix"></div>
			 </div>
		 </div>			
		 </div>
			<!-- tabs-box -->
			<!-- Comman-js-files -->
			<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid1,.tab-grid2,.tab-grid3").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
				$("ul.tabs-menu li a").click(function(){
					$(this).parent().addClass("active a");
					$(this).parent().siblings().removeClass("active a");
				});
			});
			</script>
			<!-- Comman-js-files -->
	 </div>
</div>