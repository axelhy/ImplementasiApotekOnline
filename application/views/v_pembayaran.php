<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 include ('v_navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="styleLogin.css">

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="footer.css">
      <link rel="stylesheet" type="text/css" href="body.css">
      <link rel="stylesheet" type="text/css" href="detail_obat.css">
<style type="text/css">
    body{
    background-image: url("<?php echo base_url() ?>image/background.jpg");
    background-size: cover;
}
</style>
</head>
<body>
  <div class="container" style="width: 100%;background-color: rgb(247, 247, 247, 0.5)">
    <div class="row" style="">         
      <div class="col-md-2" style="background-color: white;margin-left: 5%;margin-top: 1%">
          <center>  <p style="padding-top: 5%">Pembayaran</p></center>
      </div>
    </div>
    <br>    
    <div class="row" style="height:  100%; margin-left: 0.5%;margin-right: 0.5%; background-color: white;padding-bottom: 2%;padding-top: 2%; ">
        <div style="margin-left: 4%">
          <div style="width: 95%;height: 50px;background-color: white;box-shadow: 5px 5px 10px">
       	    <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-9"><img src="<?php echo base_url() ?>image/bri.png" style="width: 10%;margin-top: 2%"></div>
              <div class="col-md-2" style="width: 10%;margin-top: 1%">23456798765</div>
            </div>
          </div><br>
          <div style="width: 95%;height: 50px;background-color: white;box-shadow: 5px 5px 10px">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-9"><img src="<?php echo base_url() ?>image/bca.png" style="width: 9%;margin-top: 0%"></div>
              <div class="col-md-2" style="width: 10%;margin-top: 1%">23456798765</div>
            </div>
          </div><br> 
           <div style="width: 95%;height: 50px;background-color: white;box-shadow: 5px 5px 10px">
           	  <div class="row">
               <div class="col-md-1"></div>
               <div class="col-md-9"><img src="<?php echo base_url() ?>image/mandiri.png" style="width: 10%;margin-top: 0%"></div>
               <div class="col-md-2" style="width: 10%;margin-top: 1%">23456798765</div>
           </div>
           </div><br> 

          <div style="width: 43%;height: 100px;background-color: white;box-shadow: 5px 5px 10px;margin-left: 52%">
          <br><br>
            <div class="row">
              <div class="col-md-6" style="border-right: solid black; "><center>Input Bukti Pebayaran</center></div>
              
              <div class="col-md-6" >
                <form method="post" action="<?php echo site_url('welcome/addkonsumen') ?>">
                <input type="file" name="buktitf" >
              </div>
            </div>
          </div><br>
       <div class="row">
          <div class="col-md-7" ></div> 
          <div class="col-md-3" >
           
              
              <input type="hidden" name="nama" value="<?php echo $konsumen['namaKonsumen'] ?>">
              <input type="hidden" name="noHP" value="<?php echo $konsumen['noHP'] ?>">
              <input type="hidden" name="alamat" value="<?php echo $konsumen['Alamat'] ?>">
              <input type="hidden" name="alamat" value="<?php $a=rand(0,1000) ?>">

              <?php foreach ($keranjang as $datak) {?>
               <input type="hidden" name="idobat" value="<?php echo $datak['obat'] ?>">
               <input type="hidden" name="idkon" value="<?php echo $konsumen['namaKonsumen'] ?>">
               <input type="hidden" name="statusp" value="belum siap">
               <input type="hidden" name="statuspem" value="l">
               <input type="hidden" name="tgl" value="<?php echo date('D-m-Y');?>">
               <input type="hidden" name="tot" value="<?php echo $datak['total'] ?>">
               <?php 
               $datat=array(
                        'idTransaksi'=>$a,
                        'idKonsumen'=>$konsumen['namaKonsumen'],
                        'idObat'=>$datak['obat'],
                        'statusPesanan'=>"belum siap",
                        'statusPembayaran'=>0,
                        'tglTransaksi'=>date('D-m-Y'),
                        
                        'totalBiaya'=>$datak['total']
                        
                         
             
                    );
               $this->db->insert('transaksi',$datat);
                     ?>


<?php } ?>
            <input type="submit" value="SIMPAN" class="btn btn-primary" id="login" style="margin-left: 23%; width: 100%;">

            </form>  

          </div>
          <div class="col-md-2" ></div> 
        </div>
      </div>    
    </div>
    <br>
  </div>
  <br>  
<?php include ("v_footer.php") ?>        
</body>
</html>