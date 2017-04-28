<?php
/**
 * Created by PhpStorm.
 * User: cramirez
 * Date: 27/04/2017
 * Time: 10:51
 */
class ChangeString {
   var $abecedario = [ "a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z"];

    function build ( $cadena )
    {
        /**
         * Recorremos la cadena y convertimos en array
         */
        for ( $i = 0 ; $i <= strlen ( $cadena ) ; $i ++ ) {
            $arr[ $i ] = substr ( $cadena , $i , 1 );
            $cadena_array = $arr[ $i ];


            /**
             * Verificamos si el array de la cadena contiene minusculas o mayusculas ,procedemos a extraer el indice comparando con el array del abecedario
             */
            if ( ctype_lower ( $cadena_array ) ) {
                $indice = array_search ( $cadena_array , $this->abecedario , true );
            } else {
                $indice = array_search ( $cadena_array , array_map ( 'strtoupper' , $this->abecedario ) , true );
            }

            /**
             * Validamos si el indice obtenido es numerico para proceder hacer el reemplazo por el siguiente array del abecedario, asu vez validamos si en el array de la cadena contiene minusculas o mayusculas.
             * En caso contrario el array de la cadena no hace ni un cambio.
             */
            if ( is_numeric ( $indice ) ) {
                /**
                 * Validamos que el array de la cadena no exceda el array del abecedario, en caso exceda se procede a resetear
                 */
                    if ( $indice == ( count ( $this->abecedario ) - 1 ) ) {
                        $indice = - 1;
                    }
                    if ( ctype_lower ( $cadena_array ) ) {
                        $cadena_output = "<b style='color:red'>".$this->abecedario[ $indice + 1 ]."</b>";
                    } else {
                        $cadena_output = "<b style='color:red'>".strtoupper ( $this->abecedario[ $indice + 1 ] )."</b>";
                    }

            }else{
                $cadena_output = $cadena_array;
            }
            /**
             * Finalmente imprimimos la cadena concatenada
             */
            print ( $cadena_output );
        }
    }

}

/**
 * $cadena_input : TEXTO DE ENTRADA
 */
$cadena_input = "AAXXxxx555****eEEE";

$string = new ChangeString();

    if($cadena_input){
        print("Entrada :$cadena_input Salida : ");
        $string->build($cadena_input);
    }else{
        print("Ingrese texto en la  variable cadena_input");

    }


?>



