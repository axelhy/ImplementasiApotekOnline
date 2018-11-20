<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ('v_navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Manager</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <style type="text/css">
    body{
    background-image: url("<?php echo base_url() ?>image/background.jpg");
    background-size: cover;
    font-size: 12pt;
}
</style>
</head>
<body>
	<div class="container" style="width: 100%;font-size: 12pt;background-color: rgb(247, 247, 247, 0.5)">
        <div class="row" style="">         
            <div class="col-md-2" style="background-color: white;margin-left: 5%;margin-top: 1%">
               <center>  <p style="padding-top: 5%">LIHAT DATA (MANAGER)</p></center>
            </div>
        </div>
        <br>

    	<div class="container" style="background-color: white; width: 100%;font-size: 12pt; margin-right: 5%; box-shadow: 5px 5px 10px">
  

  			<ul class="nav nav-pills">
    			<li><a data-toggle="tab" href="#menu1">DATA TRANSAKSI</a></li>
    			<li><a data-toggle="tab" href="#menu2">DATA PEMASOK</a></li>
    			<li><a data-toggle="tab" href="#menu3">DATA OBAT</a></li>
    			<li><a data-toggle="tab" href="#menu4">DATA PEMASOKAN</a></li>

  			</ul>
  			<div class="tab-content">
  				<div id="menu1" class="tab-pane fade">
  					<table id="tabel1" class="table table-bordered">
  						<thead>
  							<tr>
        						<th>No</th>
        						<th>ID TRANSAKSI</th>
						        <th>NAMA KONSUMEN</th>
						        <th>TANGGAL TRANSAKSI</th>
						        <th>JENIS PEMBAYARAN</th>
						        <th>OBAT</th>
						        <th>JUMLAH OBAT</th>
						        <th>TOTAL HARGA</th>
						    </tr>
  						</thead>
  						<tbody>
  							<?php
  								
  							?>
  						</tbody>
  					</table>
  				</div>
  				
  				<div id="menu2" class="tab-pane fade">
  					<table id="tabel2" class="table table-bordered">
  						<thead>
  							<tr>
        						<th>No</th>
        						<th>NAMA PEMASOK</th>
						        <th>ALAMAT</th>
						        <th>KONTAK</th>
						    </tr>
  						</thead>
  						<tbody>
  							<?php
  							$no=1;
  								foreach ($sup as $s) {
  									echo '<tr>';
  									echo '<th>'.$no++.'</th>';
  									echo '<th>'.$s['namSupplier'].'</th>';
  									echo '<th></th>';
  									echo '<th></th>';
  									echo '</tr>';
  								}
  							?>
  						</tbody>
  					</table>
  				</div>
  				
  				<div id="menu3" class="tab-pane fade">
  					<table id="tabel3" class="table table-bordered">
  						<thead>
  							<tr>
        						<th>No</th>
						        <th>KODE OBAT</th>
						        <th>NAMA OBAT</th>
						        <th>HARGA</th>
						        <th>JUMLAH STOK OBAT</th>
						    </tr>
  						</thead>
  						<tbody>
  							<?php
  							$no=1;
  								foreach ($obat as $o) {
  									echo '<tr>';
  									echo '<th>'.$no++.'</th>';
  									echo '<th>'.$o['idObat'].'</th>';
  									echo '<th>'.$o['namaObat'].'</th>';
  									echo '<th>'.$o['harga'].'</th>';
  									echo '<th>'.$o['stock'].'</th>';
  									echo '</tr>';
  								}
  							?>
  						</tbody>
  					</table>
  				</div>

  				<div id="menu4" class="tab-pane fade">
  					<table id="tabel4" class="table table-bordered">
  						<thead>
  							<tr>
        						<th>No</th>
						        <th>ID PEMASOKAN</th>
						        <th>ID OBAT</th>
						        <th>ID SUPPLIER</th>
						        <th>TANGGAL PEMASOKAN</th>
						        <th>JUMLAH PEMASOKAN</th>
						    </tr>
  						</thead>
  						<tbody>
  							<?php
  							$no=1;
  								foreach ($pemasokan as $p) {
  									echo '<tr>';
  									echo '<th>'.$no++.'</th>';
  									echo '<th>'.$p['idPemasokan'].'</th>';
  									echo '<th>'.$p['idObat'].'</th>';
  									echo '<th>'.$p['idSupplier'].'</th>';
  									echo '<th>'.$p['tglPemasokan'].'</th>';
  									echo '<th>'.$p['jumlahPemasokan'].'</th>';
  									echo '</tr>';
  								}
  							?>
  						</tbody>
  					</table>
  				</div>
  			</div>
  		</div>
  	</div>
	<script>
	     $(document).ready(function(){
	      // body...
	      $('#tabel1').DataTable();
	      $('#tabel2').DataTable();
	      $('#tabel3').DataTable();
	      $('#tabel4').DataTable();
	      
	     });
	      
    </script>
</body>
</html>