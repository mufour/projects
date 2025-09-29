<?php
/**
 * utilitary functions, allowing debugging
 */



/**
 * Ce que fait la fonction
 * @param array $array le tableau à débugger
 * @return void
 */
function pre_print_r(array $array): void{
    echo '<pre>';
    print_r(value: $array);
    echo '<pre>';
}