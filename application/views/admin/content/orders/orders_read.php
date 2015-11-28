 <div id="page-wrapper">
            <!-- /.row --><br /><br />
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Order Detail
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                
                                <h2 style="margin-top:0px">Orders Detail</h2>
                                <table class="table">
                            	    <tr><td>date</td><td><?php echo $date; ?></td></tr>
                            	    <tr><td>customerid</td><td><?php echo $customerid; ?></td></tr>
                            	    <tr><td></td><td><a href="<?php echo site_url('orders') ?>" class="btn btn-default">Cancel</button></td></tr>
                            	</table>
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