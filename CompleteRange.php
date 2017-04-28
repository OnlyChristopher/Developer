<?php

/**
 * Created by PhpStorm.
 * User: cramirez
 * Date: 27/04/2017
 * Time: 16:25
 */
class CompleteRange
{
    function build($numeros){

        foreach ($numeros as $a => $b) {
            if (!is_int($b)) {
                print("Ingrese colecciones con números enteros positivos");
                return false;
            }
        }

        for ($i = min($numeros) ; $i <= max($numeros); $i ++ ) {
                $ncompleta[] = $i;
        }

        $add_numeros = array_diff($ncompleta,$numeros);

        $a = array_merge($numeros,$add_numeros);
        sort($a);

        foreach ($a as $valor){
            if(in_array($valor,$numeros)){
                if($valor == max($numeros)){
                    echo $valor."]";
                }else{
                    if($valor == min($numeros) ){
                       echo "[".$valor."," ;
                    }else{
                        echo $valor."," ;
                    }
                }
            }else{
                if($valor == max($numeros)){
                    echo "<b style='color:red'>".$valor."</b>";
                }else{
                    echo "<b style='color:red'>".$valor.",</b>";
                }

            }
        }

    }
}

$numeros_input = [3, 11, 4];
$number = new CompleteRange();


    if($numeros_input){
        print(" Entrada: ");
        print_r('['.implode(',',$numeros_input).']');
        print(" Salida: ");
        $number->build($numeros_input);
    }else{
        print("Ingrese colecciones con números enteros positivos en la  variable numeros_input");

    }

?>