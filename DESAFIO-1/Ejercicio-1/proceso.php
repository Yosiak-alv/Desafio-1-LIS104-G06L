<?php include("conversion-view.html");?>
<div class="container">
    <div class="row py-2">
        <div class="col col-md-6 offset-md-3 p-5 bg-light border rounded-3 text-center text-primary">
            <?php
                if(isset($_POST['enviar'])){
                    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : '';
                    $select1 = isset($_POST['select1']) ? $_POST['select1'] : "";
                    $select2 = isset($_POST['select2']) ? $_POST['select2'] : "";
                    //var_dump($select1,$select2);
                    $result = "";
                    if(($select1 == 'USD' && $select2 == 'EUR')){
                        $result = $cantidad * 0.94;
                        echo $cantidad." Dolar americano <br> = <br> ".$result." Euros";
                    }
                    elseif($select1 == 'USD' && $select2 == 'JPY'){
                        $result = $cantidad * 134.15;
                        echo $cantidad." Dolar Americano <br> = <br> ".$result." Yen Japones";
                    }
                    elseif ($select1 == 'USD' && $select2 == 'GBP') {
                        $result = $cantidad * 0.83;
                        echo $cantidad." Dolar americano <br> = <br> ".$result." Libras Esterlinas";
                    }
                    elseif ($select1 == 'EUR' && $select2 == 'USD') {
                        $result = $cantidad * 1.07;
                        echo $cantidad." Euro <br> = <br> ".$result." Dolar Americano";
                    }
                    elseif ($select1 == 'EUR' && $select2 == 'JPY') {
                        $result = $cantidad * 143.38;
                        echo $cantidad." Euro <br> = <br> ".$result." Yen Japones";
                    }
                    elseif ($select1 == 'EUR' && $select2 == 'GBP') {
                        $result = $cantidad * 0.89;
                        echo $cantidad." Euro <br> = <br> ".$result." Libras Esterlinas";
                    }
                    elseif ($select1 == 'JPY' && $select2 == 'USD') {
                        $result = $cantidad * 0.0075;
                        echo $cantidad." Yen Japones <br> = <br> ".$result." Dolar Americano";
                    }
                    elseif ($select1 == 'JPY' && $select2 == 'EUR') {
                        $result = $cantidad * 0.0070;
                        echo $cantidad." Yen Japones <br> = <br> ".$result." Euro";
                    }
                    elseif ($select1 == 'JPY' && $select2 == 'GBP') {
                        $result = $cantidad * 0.0062;
                        echo $cantidad." Yen Japones <br> = <br> ".$result." Libras Esterlinas";
                    }
                    elseif ($select1 == 'GBP' && $select2 == 'USD') {
                        $result = $cantidad * 1.20;
                        echo $cantidad." Libras Esterlinas <br> = <br> ".$result." Dolar Americano";
                    }
                    elseif ($select1 == 'GBP' && $select2 == 'EUR') {
                        $result = $cantidad * 1.13;
                        echo $cantidad." Libras Esterlinas <br> = <br> ".$result." Euro";
                    }
                    elseif ($select1 == 'GBP' && $select2 == 'JPY') {
                        $result = $cantidad * 161.42;
                        echo $cantidad." Libras Esterlinas <br> = <br> ".$result." Yen Japones";
                    }
                    else{
                        $result = "Ha ocurrido un error";
                        echo $result;
                    }
                }
            ?>
        </div>
    </div>
</div>