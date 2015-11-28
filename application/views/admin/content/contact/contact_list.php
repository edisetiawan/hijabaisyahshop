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
                       
                            <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example"> 
            <thead>
            <tr>
                <th>No</th>
		<th>email</th>
		<th>phone</th>
		<th>address</th>
		<th>Action</th>
            </tr>
            </thead>
            <tbody><?php
            $start=0;
            foreach ($contact_data as $contact)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $contact->email ?></td>
			<td><?php echo $contact->phone ?></td>
			<td><?php echo $contact->address ?></td>
			<td style="text-align:center">
            <a href="<?php echo base_url()."contact/update/".$contact->id; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> edit</button></a>                           
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