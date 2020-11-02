<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function ordering($elementosArray){
            $novoArray = [];
            $arrayIguais = [];

            $quantidade = count($elementosArray);
            
            for($i = 0; $i < $quantidade; $i++){
                for($i2 = 0; $i < $quantidade; $i++){
                    if($elementosArray[$i2] < $elementosArray[$i]){
                        for($i3 = 0; $i3 < count($arrayIguais); $i3++){
                            if($elementosArray[$i2] != $arrayIguais[$i3]){
                                array_push($novoArray, $elementosArray[$i2]);
                                array_push($arrayIguais, $elementosArray[$i2]);
                            }elseif($elementosArray[$i2] = $arrayIguais[$i3]){
                                $elementosArray[$i2++];
                            }
                        }
                    }elseif($elementosArray[$i] < $elementosArray[$i2]){
                        for($i3 = 0; $i3 < count($arrayIguais); $i3++){
                            if($elementosArray[$i] != $arrayIguais[$i3]){
                                array_push($novoArray, $elementosArray[$i]);
                                array_push($arrayIguais, $elementosArray[$i]);
                            }elseif($elementosArray[$i] = $arrayIguais[$i3]){
                                $elementosArray[$i++];
                            }
                        }
                    }
                }
            }
            echo "novo array: ";                
            print_r($novoArray);
            echo "<br>";
            echo "<br>";

            echo "array iguais: ";                
            print_r($arrayIguais);
            echo "<br>";
        }    
            $ordenar = [10,2,7,1,8,4,9,3,6,5];
            
            echo "array recebido: ";
            print_r($ordenar);
            echo "<br><br>";
        ordering($ordenar);
    ?>
</body>
</html>