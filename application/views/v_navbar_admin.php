 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


    <div class="nav-item" style="padding-top: 0.5%; background-color: #626d7f; width: 100%;height: 75px; margin-bottom: 10px;" >
        

            <form  id="formLogin" class="form-inline" method="post" action="" >

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <a href="<?php echo site_url('welcome/listobat') ?>"><img id="logo" style="width: 35%" src="<?php echo base_url() ?>image/logoApotek.png"></a>    
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">

            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
               
            </div> 
            
            
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                <a href="#"><img id="keranjang" style="width: 55%" src="<?php echo base_url() ?>image/userApotek.png"><span style="font-size: 10pt; color: white;"><?php echo $this->session->userdata('nama') ?></span> </a>
            </div>   
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                <a href="<?php echo site_url('welcome/logout') ?>" ><img id="keranjang" style="width: 75%" src="<?php echo base_url() ?>image/logoutApotek.png"></a>
            </div> 
        </form>
        
    </div>
</body>
</html>

 