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
                        <div class="panel-heading">
                        <a href="<?php echo base_url()."products/create"; ?>">
                        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
                        </a>
                       <!--    <a href="<?php //echo base_url()."project/create"; ?>"> Tambah Data Project</a> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php //echo anchor(site_url('customers/create'), 'Create', 'class="btn btn-primary"'); ?>
                            <div class="table-responsive">
                    <!-- satrt table -->                         
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">  
                
              <!-- <table class="table table-bordered" id="dataTables-example"> -->
          <thead>
            <tr>
        <th>No</th>
        <th>picture</th>
		<th>name</th>
		<th>description</th>
		<th>price</th>
		<th>Action</th>
            </tr>
           </thead> 
          
            
            <tbody>
            <?php
            $start=0;
            foreach ($products_data as $products)
            {
                ?>
            <tr>
			<td><?php echo ++$start ?></td>
            <td><img src="<?php echo base_url()."assets/home/".$products->picture ?>" height="190" width="138"/></td>
			<td><?php echo $products->name ?></td>
			<td><?php echo $products->description ?></td>
			<td><?php echo $products->price ?></td>
			<td style="text-align:center">
			<a href="<?php echo base_url()."products/update/".$products->serial; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>                           
            <a href="<?php echo base_url()."products/delete/".$products->serial; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php //echo $data['gallery_keterangan'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
            
                <?php 
				//echo anchor(site_url('products/read/'.$products->serial),'Read'); 
				//echo ' | '; 
				//echo anchor(site_url('products/update/'.$products->serial),'Update'); 
				//echo ' | '; 
				//echo anchor(site_url('products/delete/'.$products->serial),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
            </tbody>
            
        </table>
          <!-- end table -->
        
           
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