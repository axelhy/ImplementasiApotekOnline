<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OBAT</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
</head>
<body>
	<div class="header" style="width: 100%; height: 400px;">
        <form  method="post" action="<?php echo site_url('formc_addpemasok/add')?>" class="form-group">
            <div class="row" style="margin-top: 20%;">
            	<div class="col-md-1"> </div>
                <div class="col-md-10">
                    <label for="name">ID PEMASOK</label>
			        <input type="text" name="idpsk" class="form-control" required>
			        <label for="name">NAMA PEMASOK</label>
			        <input type="text" name="namapsk" class="form-control" required>
						
						<!-- <label for="name">ALAMAT</label>
			            <input type="text" name="alamatpemasok" class="form-control" required>
						
						<label for="name">KONTAK</label>
			            <input type="text" name="kontakpemasok" class="form-control" required> -->

					<br>
                </div> 
                <div class="col-md-1"></div>
                

            </div>
            <div class="row">
                	<div class="col-md-9"></div>
                	<div class="col-md-3" >
                    <input type="submit" value="ADD" class="btn btn-lg btn-primary" name="add" >
                    </div>

                </div>	
       	</form>	
	</div>
</body>
</html>