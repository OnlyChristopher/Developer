<?php

/**
 * Created by PhpStorm.
 * User: cramirez
 * Date: 27/04/2017
 * Time: 16:17
 */
class ClearPar{
    var $par = "()";

    function build($cadena){
        for ( $i = 0 ; $i <= strlen ( $cadena ) ; $i ++ ) {
            $arr[ $i ] = substr ( $cadena , $i , 2 );
            $cadena_array[] = $arr[ $i ];

        }
        foreach ( $cadena_array as $item ) {
            if($item == $this->par){
                print $item;
            }else{
                print '';
            }
        }


    }
}
$cadena_input = '()(()';

$string = new ClearPar();
    if($cadena_input){
        print("Entrada :$cadena_input Salida : ");
        $string->build($cadena_input);
    }else{
        print("Ingrese texto en la  variable cadena_input");

    }

?>