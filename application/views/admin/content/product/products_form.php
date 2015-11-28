 <div id="page-wrapper">
            <!-- /.row --><br /><br />
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Form Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
                <label for="varchar">name <?php echo form_error('name') ?></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="<?php echo $name; ?>" />
            </div>
        <div class="form-group">
                <label for="varchar">picture <?php //echo form_error('picture') ?></label>
                <input type="file" name="picture" class="form-control" value="<?php echo $picture; ?>"/>
             <!--
                <label for="varchar">picture <?php //echo form_error('picture') ?></label>
                <input type="file" class="form-control" name="picture" id="picture" placeholder="picture" value="<?php //echo $picture; ?>" />
           -->
            </div>
	    <div class="form-group">
                <label for="varchar">description <?php echo form_error('description') ?></label>
                <input type="text" class="form-control" name="description" id="description" placeholder="description" value="<?php echo $description; ?>" />
            </div>
	    <div class="form-group">
                <label for="float">price <?php echo form_error('price') ?></label>
                <input type="text" class="form-control" name="price" id="price" placeholder="price" value="<?php echo $price; ?>" />
            </div>
	    
            
        <input type="hidden" name="serial" value="<?php echo $serial; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        
	  <!--  <input type="hidden" name="serial" value="<?php echo $serial; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('products') ?>" class="btn btn-default">Cancel</button>  -->
	</form>
          
          
                                </div>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>