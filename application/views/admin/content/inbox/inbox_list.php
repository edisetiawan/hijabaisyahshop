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
		<th>name</th>
		<th>email</th>
		<th>message</th>
		<th>Action</th>
            </tr>
            </thead><?php
            $start=0;
            foreach ($inbox_data as $inbox)
            {
                ?>
                <tbody>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $inbox->name ?></td>
			<td><?php echo $inbox->email ?></td>
			<td><?php echo $inbox->message ?></td>
			<td style="text-align:center">
            <a href="<?php echo base_url()."inbox/read/".$inbox->id;?>"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Read</button></a>                           
            <a href="<?php echo base_url()."inbox/delete/".$inbox->id;?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php //echo $data['gallery_keterangan'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
		    
				
			</td>
		</tr></tbody>
                <?php
            }
            ?>
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