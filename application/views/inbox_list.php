<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Inbox List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('inbox/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('inbox/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('inbox'); ?>" class="btn btn-default">Reset</a>
                        <?php
                    }
                    ?>
                    <input type="submit" value="Search" class="btn btn-primary" />
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>name</th>
		<th>email</th>
		<th>message</th>
		<th>Action</th>
            </tr><?php
            foreach ($inbox_data as $inbox)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $inbox->name ?></td>
			<td><?php echo $inbox->email ?></td>
			<td><?php echo $inbox->message ?></td>
			<td style="text-align:center">
				<?php 
				echo anchor(site_url('inbox/read/'.$inbox->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('inbox/update/'.$inbox->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('inbox/delete/'.$inbox->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <ul class="pagination" style="margin-top: 0px">
                    <li class="active"><a href="#">Total Record : <?php echo $total_rows ?></a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>