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
            <div class="col-md-2" style="background-color: white;margin-left: 2%;margin-top: 1%; ">
               <center>  <p style="padding-top: 5%">Status Pesanan</p></center>
            </div>
        </div>
        <br>    
        <form method="post" action="<?php echo site_url('welcome/cekstatus') ?>">
        <div class="row" style="height:  100%; margin-left: 0.5%;margin-right: 0.5%; background-color: white;padding-bottom: 2%;padding-top: 2%;margin-bottom: 2%">
            
            <div class="col-md-4" style="margin-left: 3%; box-shadow: 1px 1px 10px;padding-bottom: 2%">
                <input type="text" name="cek" style="width: 100%; margin-top:5%;box-shadow: 1px 1px 10px;height: 50px"><br><br>    
                <input type="submit" name="buttoncek" value="CEK" class="btn btn-primary" style="width: 40%; margin-left: 60%; margin-top: ">
              
              </form> 
            </div>

                
                <!-- <div style="border: 1px black solid;margin-top: 20%; height: 50%;box-shadow: 1px 1px 10px">
                        <div style="margin-left: 5%;margin-top: 3%">      
                                <label> Pesanan Dengan ID : </label><br> 
                                <label> Atas Nama : </label><br>   
                                <label> Status Pesanan : </label><br> 
                        </div> 
                </div>  --> 
            
            <div class="col-md-7" style=" margin-left: 2%;height: 440px;box-shadow: 1px 1px 10px">
                <br>    
                <div style="border: 1px black solid; height: 400px;box-shadow: 1px 1px 10px">   
                    
                        <center><?php
                if (isset($_POST['cek'])){ 

                     foreach ($ceki as $cek) {
                    # code...
                }?>
                <div class="row">
                  
                       <div style="margin-left: 30%;margin-top: 20%; font-weight: 500;">          
                        <label> Pesanan Dengan ID : <?php echo $cek['idTransaksi']?></label><br> 

                        <label> Tanggal Pemesanan : <?php echo $cek['tglTransaksi']?></label><br>  

                        <label> Atas Nama : <?php echo $cek['idKonsumen']?></label><br>    
                    
                        <label> Status Pesanan : <?php echo $cek['statusPesanan']?></label><br>


                       <?php  }
             ?></center>
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