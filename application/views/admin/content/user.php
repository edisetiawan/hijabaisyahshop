<div id="page-wrapper">

<br />
<br />
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
        <h2 style="margin-top:0px">Contact <?php //echo $button ?></h2>
        <form action="<?php //echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">contact_email <?php // echo form_error('contact_email') ?></label>
                <input type="text" class="form-control" name="contact_email" id="contact_email" placeholder="contact_email" value="<?php //echo $contact_email; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">contact_phone <?php //echo form_error('contact_phone') ?></label>
                <input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="contact_phone" value="<?php //echo $contact_phone; ?>" />
            </div>
	    <div class="form-group">
                <label for="contact_alamat">contact_alamat <?php // echo form_error('contact_alamat') ?></label>
                <textarea class="form-control" rows="3" name="contact_alamat" id="contact_alamat" placeholder="contact_alamat"><?php //echo $contact_alamat; ?></textarea>
            </div>
	    <input type="hidden" name="contact_id" value="<?php //echo $contact_id; ?>" /> 
	    <button type="submit" class="btn btn-primary">SAVE<?php //echo $button ?></button> 
	    
	</form>
     </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>