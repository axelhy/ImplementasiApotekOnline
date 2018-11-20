<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include ('navbar.php');
?>

<!DOCTYPE html>
<html>
<head >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/csswelcome.css"">
    <title>Welcome Page</title>
    <style type="text/css">
        header {
            background-image: url(image/background.jpg);
        }
    </style>
</head>
<body>
    <a href="<?php echo site_url("welcome/login") ?>"><header>
        <h1 id="welcome">WELCOME TO APOTEK ONLINE</h1>
    </header></a>
</body>
</html>

