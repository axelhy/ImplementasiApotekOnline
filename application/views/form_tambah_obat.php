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
		<ul>
			<center><label>IMAGE</label><br><br>
			<?php echo form_open_multipart('formc_tambah_obat/upload');?>
            	<form method="post">
                	<div class="row">
                    	<div class="col-md-8">
				            <label for="name">IDOBAT</label>
				            <input type="text" name="idobat" class="form-control" required>
							
							<label for="name">NAMAOBAT</label>
				            <input type="text" name="nama" class="form-control" required>
							
							<label for="name">JUMLAH STOCK</label>
				            <input type="text" name="stock" class="form-control" required>
							
							<label for="name">keterangan</label>
				            <input type="text" name="ket" class="form-control" required>
							
							<label for="name">harga</label>
				            <input type="text" name="harga" class="form-control" required>
							<input type="file" name="userfile"   id="preview_1301160192" />
                    	</div>
                    	<div class="col-md-4">
							<br /><br />
							<img src="#"  style="max-width: 80%;max-height: 500px;background-color: #edeeef;" id="gambar_1301160192" ><br>
							<input type="submit" value="ADD" class="btn btn-primary" name="upload" /><br>
                    	</div>
                	</div>
					<?php if (isset($_POST['upload'])) {
            		} ?></center>
        		</form>
			<?php echo form_close(); ?>
		</ul>
	</div>

	<script >
		function baca(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#gambar_1301160192').attr('src',e.target.result);
				}
				reader.readAsDataURL(input.files[0]);	
			}
		}
		$('#preview_1301160192').change(function() {
			// body...
			baca(this);
		});
	</script>
</body>
</html>