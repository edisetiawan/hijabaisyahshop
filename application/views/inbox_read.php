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
        <h2 style="margin-top:0px">Inbox Read</h2>
        <table class="table">
	    <tr><td>name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>message</td><td><?php echo $message; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('inbox') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </body>
</html>