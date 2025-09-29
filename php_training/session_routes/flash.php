<?php

/**
 * Définir une variable de session flash
 * @param string $message
 * @param string $class
 * @return void
 */
function setFlash(string $message, string $class='success') : void {
    $_SESSION['flash'] = [
        'message'=> $message,
        'class'=> $class,
    ];
};

/**
 * Retourner le flash en html
 * @return string
 */
function displayFlash() : string {
$msg = '<div class="msg msg-' . $_SESSION['flash']['class'] . '">';
$msg .= $_SESSION['flash']['message'];
$msg .= '</div>';
unset($_SESSION['flash']);

return $msg;
};