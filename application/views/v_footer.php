<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HOME</title>
    	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<style type="text/css">
.footer1 {
    /*position: fixed;*/
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(20, 68, 63, 0.7);
    color: white;
    text-align: center;
    height: 110px;
    
}
.footer {
    /*position: fixed;*/
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #54bc81;
    color: white;
    text-align: center;
    height: 300px;
    
}
#footerText{
    margin-top: 4px;
    color: white;
    font-family: "Gotham";
}
</style>
</head>
<body>
    <footer>
        <div class="footer">
            <div class="row" style="width: 100%">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: justify;">
                    <br>

                    <h3>Tentang Apotek Berkah</h3>
                    <br>

                    <img id="logo" style="width: 35%; float: left; margin: 3px 8px 0 0;" src="<?php echo base_url() ?>image/logoApotek.png">
                    Apotek Berkah adalah solusi praktis masalah kesehatan dan keobatan anda. Dengan hadirnya website ini kami berharap masyarakat akan lebih mudah memperoleh obat-obatan bersertifikasi resmi dan diperjualbelikan secara legal sehingga masyarakat tidak perlu kebingungan ketika memerlukan obat tertentu.

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: justify;">
                    <br>

                    <h3>Hubungi Kami</h3>
                    <br>

                    <ul>
                        <li> 08928648939</li>
                        <li> apotekberkah@gmail.com</li>
                        <li> <p>Jl. Inaja Dulu No. 43, Kecamatan Minus, Kabupaten Paten</p></li>
                    </ul>

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: justify;">
                    <br>

                    <h3>Kata Netizen</h3>
                    <br>

                    <p>
                        "Biasanya saya bingung mau cari obat sakit kepala karena gak dijual di warung-warung, Mau ke apotek juga jauh. Tapi berkat Apotek Berkah, saya gak khawatir lagi kalau perlu obat-obatan yang pastinya resmi dan praktis. Terimakasih Apotek Berkah... ^^"
                    </p>
                    <p style="text-align: right;">
                        --- Imam Bensin ---
                    </p>

                </div>
            </div>
        </div>
        <div class="footer1">
            <br>
            <p id="footerText" ><b>Your Life's Most Trusted Health Partner.</b></p>

            <p>Copyright</p>
        </div>
    </footer>
</body>
</html>