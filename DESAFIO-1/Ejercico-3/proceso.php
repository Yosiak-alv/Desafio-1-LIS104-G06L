<?php include("formulario.html");?>
<div class="container">
    <div class="row py-5">
        <div class="col col-md-6 offset-md-3 p-5 bg-light border rounded-3 text-center">
            <?php
                $option = isset($_POST['opciones']) ? $_POST['opciones']:0;
                $km = isset($_POST['cantidad']) ? $_POST['cantidad']: '';

                if($option == 1){ //camion 5t
                    $gas  = $km * (1/12);
                    echo "El Camion de 5 Toneladas gasta ". number_format((float)$gas, 2, '.', '') ." Galones en ".$km." Kilometros.";
                }elseif($option == 2){ //camion 3t
                    $gas = $km * (1/16);
                    echo "El Camion de 3 Toneladas gasta ". number_format((float)$gas, 2, '.', '') ." Galones en ".$km." Kilometros.";
                }elseif($option == 3){//pickup
                    $gas = $km * (1/22);
                    echo "El Pickup gasta ". number_format((float)$gas, 2, '.', '') ." Galones en ".$km." Kilometros.";
                }elseif($option == 4){//panel
                    $gas = $km * (1/28);
                    echo "El Panel gasta ". number_format((float)$gas, 2, '.', '') ." Galones en ".$km." Kilometros.";
                }elseif($option == 5){//moto
                    $gas = $km * (1/42);
                    echo "La Moto gasta ". number_format((float)$gas, 2, '.', '') ." Galones en ".$km." Kilometros.";
                }else{
                    echo"<p>Ha ocurrido un error, Prueba otra vez.</p>";
                }
            ?>   
        </div>
    </div>
</div>