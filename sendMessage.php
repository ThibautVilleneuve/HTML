<?php
/**
 * Created by PhpStorm.
 * User: thibaut.villeneuve
 * Date: 29/12/2017
 * Time: 14:53
**/

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "test@votredomaine.com";

    $to = "villeneuvethibaut@gmail.com";

    $subject = "Vérification PHP mail";

    $message = "PHP mail marche";

    $headers = "From:" . $from;

    mail($to,$subject,$message, $headers);

    echo "L'email a été envoyé.";
?>