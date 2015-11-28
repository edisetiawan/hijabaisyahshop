<div class="cart">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="men.html">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>
			
			
		 <div class="col-md-9 cart-items">
            <?php
            //for($i=1;$i<=2;$i++){
                error_reporting(0);
           	if ($cart = $this->cart->contents()):
            $grand_total = 0;
                foreach ($cart as $item):
            ?>
			 <div class="cart-header">
				 <div class="close1">
                 <a href="<?php echo base_url(); ?>cart/remove/<?php echo $item['rowid']; ?>">
                 <img src="<?php echo base_url(); ?>assets/home/images/close.png"/> 
                 </a>
                 </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url(); ?>assets/home/<?php echo $item['picture'];?>"/>
						</div>
					   <div class="cart-item-info">
							 <h3><?php echo $item['name']; ?><span></span></h3>
							 <h4><span>Rp.</span> <?php echo number_format($item['price'],0,',','.'); ?>,00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					   <?php 
                       $grand_total = $grand_total + $item['price'];
                       //echo "Total :".$grand_total;
                       ?>
                       </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p></p>
							 <span></span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			 </div>
             <?php
             
             endforeach;
             endif;
             ?>
            
              		
		 </div>
		 
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="<?php echo base_url(); ?>home/products">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total"><?php  echo number_format($grand_total,0,',','.'); ?>,00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 (Belum Termasuk Ongkos Kirim)
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final"><?php echo number_format($grand_total,0,',','.'); ?>,00</span>
			 <div class="clearfix"></div>
			 <a class="order" href="<?php echo base_url(); ?>billing">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>
