<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ('v_navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body >
    


    <div id="kontenerObat" style="background-color: #c5c9d0; padding-top: 5%; padding-bottom: 5%;">
	   <div class="container"  style="width: 75%; background-color: #c5c9d0; border: 5px solid black; border-radius: 20pt;" id="demo">
        
	       <div class="row" style="padding-top: 2%;">
            <?php foreach ($obat as $listobat) {?>
                <a href="<?php echo site_url("welcome/getobat/".$listobat['idObat']) ?>">
                <div id="obats" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5%; margin-top: 4%;">
               	    <img class="rounded" style="width: 100%; height: 100%" src="<?php echo base_url() ?>DATAIMAGE/<?php echo $listobat["foto"] ?>">
               		   
                        <!-- <?php
                            echo anchor('welcome/getobat/'.$listobat['idObat'],$listobat["namaObat"]);
                            ?> -->

               	    </a>

                    <span style="font-weight: 1000;"><?php echo $listobat["namaObat"] ?> <br>Stock Tersedia: <?php echo $listobat["stock"] ?><p style="font-weight: 500; color: #5e6c7d;">Rp.<?php echo $listobat["harga"] ?></p> </span>
                    
                </div> 


              <?php } ?> 

            </div>
        <br>  
              <br>   
    <ul class="pagination justify-content-center">
        <li class="page-item active">
            <a class="page-link" href="/?page=1">1</a>
        </li>
  
        <li class="page-item ">
            <a class="page-link" href="/?page=2">2</a>
        </li>
        <li class="page-item ">
            <a class="page-link" href="/?page=3">3</a>
        </li>
        <li class="page-item ">
            <a class="page-link" href="/?page=3">4</a>
        </li>
        <li class="page-item ">
            <a class="page-link" href="/?page=3">5</a>
        </li>
        <li class="page-item ">
            <a class="page-link" href="/?page=2">...
                 <!-- <i class="fa fa-chevron-right"></i> -->
            </a>
        </li>
  
        <li class="page-item ">
            <a class="page-link" href="/?page=200">Last</a>
        </li>
  
    </ul>
        </div>
    </div>
<br><br><br><br><br>
<?php include ("v_footer.php") ?>
</body>
</html>