<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ('v_navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Obat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

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
            <div class="col-md-2" style="background-color: white;margin-left: 2%;margin-top: 1%">
               <center>  <p style="padding-top: 5%">Detail Obat</p></center>
            </div>
        </div>
        <br>    
        <div class="row" style="height:  100%; margin-left: 0.5%;margin-right: 0.5%; background-color: white;padding-bottom: 2%;padding-top: 2%">
            <div class="col-md-4" style="margin-left: 3%; box-shadow: 5px 5px 10px;padding-bottom: 2%">
                <img src="<?php echo base_url();?>DATAIMAGE/<?php echo $dataobat['foto'];?>" style="width: 90%;margin-bottom: 20%;margin-top: 10%; margin-left: 5%;">
                <!-- <a href="<?php echo site_url("welcome/addkeranjang/".$dataobat['idObat']) ?>" style="margin-left: 2%; padding-right: 60%;">
                    <img id="keranjang" name="keranjang" style="width: 45px" src="<?php echo base_url() ?>image/keranjang.png">
                </a>   -->
                <div style="margin-left: 51%; color: red"><?php echo form_error('keranjang'); ?></div>
                

               
                       
                <div class="modal fade" id="obat<?php echo $dataobat['idObat']?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title"><?php echo $dataobat['namaObat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <form method="post" action="<?php echo site_url("welcome/addkeranjang/".$dataobat['idObat']) ?>" name="data" id="data" class="form-inline">
                        <div class="modal-body">
                          <table>
                            <tr>
                                <td><input type="hidden" class="form-control" id="name" name="nama" style="width: 300px" value="<?php echo $dataobat['namaObat'] ?>">
                                  <input type="hidden" class="form-control" id="pemilik" name="pemilik" style="width: 300px" value="<?php echo $this->session->userdata('nama') ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" id="pnumber" name="harga" style="width: 300px" value="<?php echo $dataobat['harga'] ?>" ></td>
                            </tr>
                           
                            <tr>
                                <td height="50px" width="150px">Jumlah</td>
                                <td>
                                  <input type="number" id="jumlah" name="jumlah" class="form-control" pattern="[0-9]+" required>
                                </td>
                                
                            </tr>
                            
                          </table> 
                        </div>
                      
                        <!-- Modal footer -->
                        <div class="modal-footer" style="margin-left: 60%">
                          <input class="btn btn-success" type="submit" value="Pesan">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                        
                    </div>
                  </div>
                </div> 
            </div>
            <div class="col-md-7" style=" margin-left: 2%;height: 440px;box-shadow: 1px 1px 30px">
                <br>
                <p style="font-weight: 1000; font-size: 30pt;"><?php echo $dataobat['namaObat'];?></p>

                <p style="text-align: left; font-size: 15pt;"><?php echo $dataobat['keteranganKhasiat'];?></p>
                <div class="row" style="margin-top: 20%;">
                  <div class="col-md-5"></div>
                  <div class="col-md-2">

                   
                  </div>
                  

                  <div class="col-md-5"> 
                    <p style="font-weight: 500;">
                      Stock Tersedia: <?php echo $dataobat["stock"] ?><br>
                      Harga: Rp.<?php echo $dataobat['harga'];?> / item
                    </p>
                      <button type="button" class="btn btn-primary" id="address" style="font-weight: bold; color: white; font-size: 12px; background-image:   " data-toggle="modal" data-target="#obat<?php echo $dataobat['idObat'] ?>"> Tambahkan ke Keranjang <img id="keranjang" name="keranjang" style="width: 45px" src="<?php echo base_url() ?>image/keranjang.png"></button>
                  </div>
                 </div>
            </div>          
        </div>
        <div class="row" style="height:  100%; background-color: white;">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>
    <br>  
<?php include("v_footer.php") ?>          
</body>
</html>