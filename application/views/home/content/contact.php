<div class="contact-section-page">
	   <div class="contact_top">					
		   <div class="container">
				<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
			  <div class="col-md-6 contact_left">
			 		<h2>Contact Form</h2>
			 		<p>Lorem ipsum dolor sit amet, adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
				  <form method="post" action="<?php echo base_url(); ?>inbox/create_action">
					 <div class="form_details">
						   <input type="text" class="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"/>
						   <input type="text" class="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"/>
						<!--	<input type="text" class="text"  value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}"/> -->
							<textarea value="Message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<div class="clearfix"> </div>					   
							<input name="submit" type="submit" value="Send message">
					 </div>					 
				  </form>
			 </div>
			 <div class="col-md-6 company-right">
					<div class="contact-map">
				    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
				    </div>      
				 <div class="company-right">
					   <div class="company_ad">
							<h3>Contact Info</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
			      			<address>
                            <?php
                             foreach ($contact_data as $contact)
                             {
                            ?>
								<p>email:<a href="mail-to: hijabaisyahshop@gmail.com"><?php echo $contact->email ?></a></p>
								 <p><?php echo $contact->phone ?></p>
								<p><?php echo $contact->address ?></p>
								<p>Yogyakarta</p>	
                                <?php 
                                }
                                ?>								 	 	
							</address>
					  </div>
				 </div>							
			 </div>
		  </div>
	 </div>
</div>