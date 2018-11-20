<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include ('navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>APOTEK ONLINE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/styleLogin.css">
        <link rel="stylesheet" type="<?php echo base_url('c_admin/login'); ?>">

<style type="text/css">
    body{
        background-image: url("<?php echo base_url() ?>image/background.jpg");
    }
    #welcome{
        margin-left: 25%;
        margin-top: 20%;
        height: 100px;
        width: 45%;
        background-color: rgb(31, 33, 35, 0.8);
        color: rgb(244, 246, 249,0.9);
        font-family: Helvetica neue;

    }
    #myModal{
        margin-top: 0%;

    }
    body{
        
        background-size: cover;
        

    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: rgb(20, 68, 63, 0.7);
        color: white;
        text-align: center;
        height: 50px;
        
    }

    #inputEmail{
        height: 50px;
        width: 60%;
        margin-left: 20%;
        margin-top: 5%;
    }


    #modContent{
        outline-style: solid;
        border-radius: 0pt;
        outline-width: 8px;
        outline-color: rgb(56, 100, 105, 0.9);
        background-color: rgb(56, 100, 105, 0.9);
    }

    #inputPassword{
        height: 50px;
        width: 60%;
        margin-left: 20%;
        margin-top: 5%;
    }

    #logoUsername{
        margin-left: -9%;
        margin-top: 0px;
        position: absolute;
        width: 35px;
        height: 35px;
    }

    #logoPassword{
        margin-left: -9%;
        margin-top: 0px;
        position: absolute;
        width: 35px;
        height: 35px;
        opacity: 1;
        
    }


    #logo{
        height: 50%;
        width: 50%;
        margin-top: 10%;
        margin-left: 25%;
        margin-bottom: 5%;
    }

    #formLogin{
        width: 60%;
        margin-left: 20%;
        margin-top: 3%;
        margin-bottom: 10%;

    }

    #modalHead{

        color: #1c3133;
        width: 200px;
        height: 50px;

        margin-left: 27%;
        


    }

    #teksModHead{
        margin-left: 20%;
        margin-top: 5%;
        font-family: Helvetica neue;
        color: white;
        font-size: 18pt;

    }


    #welcome:hover{
        background-color: rgb(31, 33, 35, 0.4);

    }

    #welcome:active{
        background-color: rgb(31, 33, 35, 0.0);

    }

    #footerText{
        margin-top: 4px;
        color: rgb(95, 103, 117);
    }

    #kontenerObat{
        background-color: rgb(244, 246, 249,0.8);
        margin-top: 5%;
    }

    #obats{
        margin-top: 5%;
    }
</style>
</head>
<body>

    <?php if ($this->session->flashdata('logindulu')=='loginuser'){
    echo "<script>alert('SILAHKAN LOGIN USER DAHULU')</script>";
}
if ($this->session->flashdata('logindulu')=='loginadmin'){
    echo "<script>alert('SILAHKAN LOGIN USER DAHULU')</script>";
}?>
    <nav class="navbar navbar-expand-xl bg-dark" style="height: 30px;"></nav>
    <button id="welcome" type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">
        <header>
            <h1 style="font-family: Gotham"><b>APOTEK BERKAH</b></h1>
        </header>
    </button>

<!-- The Modal -->
    <div class="modal" id="myModal" >
        <div class="modal-dialog">
            <div class="modal-content" id="modContent">
          <!-- Modal Header -->
                <div class="modal-header" style="border-color: #000000;">
                    <div id="modalHead"> <b><p id="teksModHead">Apotek Berkah</p></b>
                    </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          <!-- Modal body -->
                <div class="container">
                    <h1 class="form-heading"> <img id="logo" src="<?php echo base_url() ?>image/logoApotek.png"></h1>
                    <div class="login-form">
                        <div class="main-div">
                            <div class="panel">
                                <form id="formLogin" class="" method="post" action="<?php echo site_url('Welcome/login2')?>" >        
                                    <img src="<?php echo base_url() ?>image/userApotek.png" id="logoUsername">
                                    <div class="form-group">
                                        <input type="text" name="loginUsername" class="form-control form-control-xs" id="username" placeholder="Username" >
                                    </div>    
                                    <img src="<?php echo base_url() ?>image/keyApotek.png" id="logoPassword">     
                                    <div class="form-group"> 
                                        <input type="password" name="loginPassword" class="form-control" id="password" placeholder="Password" >   
                                    </div> 
                                    <input type="submit" name="btnLogin" id="login" class="btn btn-success btn-xs text-light" value="Sign In">
                                    <a href="<?php echo site_url('c_user/user') ?>"><input type="button" name="btnRegis" id="regis" class="btn btn-primary btn-xs text-light" value="Registrasi" style="width: 60%; margin-left: 20%;margin-top: 3%;margin-bottom: 10%;"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
