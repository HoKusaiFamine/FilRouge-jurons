<?php
function envoiMail($mail, $nom, $prenom, $type) :bool 
{
    $to = $mail;
    $subject = "On t'a chopé";
    $headers = "From: lbclbc59000@gmail.com \r\n";
    $headers .= "Mime-version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = "<html><body style='margin: 0'>";
    $message .= "<div style='text-align: center><img height='200' width='auto' src='https://zupimages.net/viewer.php?id=23/09/bioa.png' alt='Logo-removebg-preview'/></div>"; 
    $message .= "<h3 style= 'text-align:center; font-family: sans-serif;'>" .strtoupper($nom). ' ' . ucfirst($prenom) . ' '. "t'as balance</h3>";
    $message .= "<div><p style='text-align: center; font-family: sans-serif; font: bold;'>".
        "Type d'infraction :". $type ."</p><br/>".
        "<p style='text-align: center; font-family: sans-serif;'>".
        "En cas d'erreur , veuillez renvoyer un mail .</p><br />" .
        "<p style= 'text-align:center; font-family: sans-serif;'>".
        "cordialement, <br/>";
        "Boite a jurons</p></div>";

    $message .= "<footer style='background-color: #673ab7;'>" .
        "<h6 style= 'text-align: center; font-family: sans-serif; color:white'>".
        "@ Copyright : Thomas/GREG/JB tout droit reservé</h6></footer>";
    $message .= "</body></html>";

    return mail($to, $subject, $message, $headers);


}


?>