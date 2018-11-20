<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ('v_navbar.php');
?>
<html>
<head>
    <title>Keranjang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
    <div class="container" style="width: 100%;background-color: rgb(247, 247, 247, 0.5); padding-bottom: 2%;">
        <div class="row" style="">         
            <div class="col-md-2" style="background-color: white;margin-left: 2%;margin-top: 1%">
               <center>  <p style="padding-top: 5%">Input Data Diri</p></center>
            </div>

        </div>
        <br>

        <div class="row" style="height:  100%; margin-left: 0.5%;margin-right: 0.5%; background-color: white;padding-bottom: 2%;padding-top: 2%; padding-bottom: 2%;" >
            <div class="row" style="width: 100%; padding-top:2%; padding-bottom: 2%; ">
                    <div class="col-md-2" style="" >
                        
                    </div>


                    <div class="col-md-8" style="box-shadow: 1px 1px 10px">
                        <div class="row">
                            <div class="col-md-2">
                                
                                
                                
                            </div>
                            <div class="col-md-8">

                                <?php   $no=0; ?>
                                <?php foreach ($customer as $cus) {
                                    # code...
                                ?>
                                <form method="post" action="<?php echo site_url('welcome/pembayaran') ?>">
                                    
                                    <p style="margin-top: 5%;">Nama  :  </p>
                                    <input type="text" name="nama"  value="<?php echo $cus['namaKonsumen'] ?>" style="width:100%; margin-bottom: 5%; border: none; border-bottom: 2px solid grey;">  <br>
                                    <p>Alamat : </p>
                                    <input type="textarea" value="<?php echo $cus['Alamat'] ?>" name="alamat" style="width:100%; margin-bottom: 5%;  border: none;border-bottom: 2px solid grey;"> <br>
                                    <p>No. Hp : </p>
                                    <input type="text" name="noHP" value="<?php echo $cus['noHP'] ?>" style="width:100%; margin-bottom: 5%;  border: none; border-bottom: 2px solid grey;"> <br>

                                <?php } ?>
                            </div>
                            <div class="col-md-2">
                                
                                
                                
                            </div>
                            
                        </div>
                        
                        
                    </div>

                    <div class="col-md-2" style="">
                        
                    </div>
                    
            </div>
            
            
            
            <div class="row" style="padding-left: 89.5%; padding-top: 2%;">
                <input type="submit" class="btn btn-warning" name="lanjutkan" value="Lanjutkan">
            </div> 
            </form> 
        </div>              


        </div>
        
    </div>
    <br>
</body>
<?php include("v_footer.php") ?>  