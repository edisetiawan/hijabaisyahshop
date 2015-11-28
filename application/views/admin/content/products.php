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
                           Data Pesan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php echo anchor(site_url('products/create'),'Create', 'class="btn btn-primary"'); ?>
                            <div class="table-responsive">
               <table class="table table-bordered" id="dataTables-example">
            <tr>
                <th>No</th>
		<th>name</th>
		<th>description</th>
		<th>price</th>
		<th>picture</th>
		<th>Action</th>
            </tr><?php
            foreach ($products_data as $products)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $products->name ?></td>
			<td><?php echo $products->description ?></td>
			<td><?php echo $products->price ?></td>
			<td><?php echo $products->picture ?></td>
			<td style="text-align:center">
				<?php 
				echo anchor(site_url('products/read/'.$products->serial),'Read'); 
				echo ' | '; 
				echo anchor(site_url('products/update/'.$products->serial),'Update'); 
				echo ' | '; 
				echo anchor(site_url('products/delete/'.$products->serial),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
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