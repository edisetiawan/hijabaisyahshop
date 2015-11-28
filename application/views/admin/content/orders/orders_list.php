        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br />
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php //echo anchor(site_url('customers/create'), 'Create', 'class="btn btn-primary"'); ?>
                            <div class="table-responsive">
                    <!-- satrt table --> 
                    
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">    
                   <thead>
                    <tr>
                <th>No</th>
		<th>name</th>
		<th>email</th>
        <th>phone</th>
        <th>date</th>
		<th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $start=0;
            foreach ($orders_data as $orders)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $orders->name ?></td>
			<td><?php echo $orders->email ?></td>
            <td><?php echo $orders->phone ?></td>
            <td><?php echo $orders->date ?></td>
			<td style="text-align:center">
  	 <a href="<?php echo base_url()."orders/read/".$orders->serial; ?>"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</button></a>                           
            
				<?php 
			//	echo anchor(site_url('orders/read/'.$orders->serial),'Read'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
            </tbody>
             </table>       
                    
           
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>