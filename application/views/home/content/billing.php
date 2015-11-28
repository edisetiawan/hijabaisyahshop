<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="<?php echo base_url(); ?>">Home</a></li>
		  <li class="active">Billing</li>
		 </ol>
		 <h2>Billing Info</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 
				 <form id="defaultForm" method="post" action="<?php echo base_url(); ?>billing/save_order">
					 <ul>
						 <li class="text-info">Your Name: </li>
						 <li><input type="text" name="name" value=""/></li>
                         <li><span class="help-block" id="nameMessage"></li>
					 </ul>				 
					<ul>
						 <li class="text-info">Address: </li>
						 <li><input type="text" name="address" value=""/></li>
                         <li><span class="help-block" id="addressMessage"></li>
					 </ul>
					 <ul>
						 <li class="text-info">Email: </li>
						 <li><input type="text" name="email" value=""/></li>
                         <li><span class="help-block" id="emailMessage"></li>
					 </ul>
					 <ul>
						 <li class="text-info">Phone:</li>
						 <li><input type="text" name="phone" value=""/></li>
                         <li><span class="help-block" id="phoneMessage"></li>
					 </ul>
					 					
					 <input type="submit" value="Pleace Order"/> 
				 </form>
			 </div>
		 </div>
		 	 
	 </div>
</div>
<script type="text/javascript"> 

$(document).ready(function() {

    $('#defaultForm').bootstrapValidator({

        message: 'This value is not valid',

        feedbackIcons: {

            valid: 'glyphicon glyphicon-ok',

            invalid: 'glyphicon glyphicon-remove',

            validating: 'glyphicon glyphicon-refresh'

        },

        fields: {

            name: {

               container: '#nameMessage',
				//group: '.col-lg-7',
                validators: {

                    notEmpty: {

                        message: 'name is required and cannot be empty'

                    }

                }

            },
            address: {

               container: '#addressMessage',
				//group: '.col-lg-7',
                validators: {

                    notEmpty: {

                        message: 'address is required and cannot be empty'

                    }

                }

            },
            email: {

                container: '#emailMessage',

                validators: {

                    notEmpty: {

                        message: 'email is required and cannot be empty'

                    },

                    emailAddress: {

                        message: 'The input is not a valid email address'

                    }

                }

            },

            phone: {

                container: '#phoneMessage',

                validators: {

                    notEmpty: {

                        message: 'phone is required and cannot be empty'

                    }

                }

            }
      
        }

    });

});

</script> 