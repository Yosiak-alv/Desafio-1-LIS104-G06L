<?php
    function logic($option,$number){
        switch ($option) {
            case '1': //metros
                echo "<p>El numero $number esta en Metros</p>";
                $yardas = $number * 1.09361;
                $pulgadas = $number * 39.37;
                $pie = $number * 3.281;
                echo "<table class=\"table\">";
                echo"<thead>
                        <tr>
                            <th>Pulgada</th>
                            <th>Pie</th>
                            <th>Yardas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>".number_format((float)$pulgadas, 4, '.', '')."</td>
                            <td>".number_format((float)$pie, 4, '.', '')."</td>
                            <td>".number_format((float)$yardas, 4, '.', '')."</td>
                        </tr>
                    </tbody>
                </table>";
                break;
            case '2': //pulgadas
                echo "<p>El numero $number esta en Pulgadas</p>";
                $yardas = $number * (1/36);
                $metros = $number * (1/39.37);
                $pie = $number * (1/12);
                echo "<table class=\"table\">";
                echo"<thead>
                        <tr>
                            <th>Metro</th>
                            <th>Pie</th>
                            <th>Yardas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>".number_format((float)$metros, 4, '.', '')."</td>
                            <td>".number_format((float)$pie, 4, '.', '')."</td>
                            <td>".number_format((float)$yardas, 4, '.', '')."</td>
                        </tr>
                    </tbody>
                </table>";
                break;
            case '3': //yardas
                echo "<p>El numero $number esta en Yardas</p>";
                $pulgadas = $number * 36;
                $metros = $number * (1/1.094);
                $pie = $number * 3;
                
                echo "<table class=\"table\">";
                echo"<thead>
                        <tr>
                            <th>Metro</th>
                            <th>Pie</th>
                            <th>Pulgada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>".number_format((float)$metros, 4, '.', '')."</td>
                            <td>".number_format((float)$pie, 4, '.', '')."</td>
                            <td>".number_format((float)$pulgadas, 4, '.', '')."</td>
                        </tr>
                    </tbody>
                </table>";
                break;
            case '4': //pie
                echo "<p>El numero $number esta en Pies</p>";
                $pulgadas = $number * 12;
                $metros = $number *  (1/3.281);
                $yardas = $number * (1/3);
                echo "<table class=\"table\">";
                echo"<thead>
                        <tr>
                            <th>Metro</th>
                            <th>Pulgada</th>
                            <th>Yarda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>".number_format((float)$metros, 4, '.', '')."</td>
                            <td>".number_format((float)$pulgadas, 4, '.', '')."</td>
                            <td>".number_format((float)$yardas, 4, '.', '')."</td>
                        </tr>
                    </tbody>
                </table>";
                break;
            default: 
                echo '<p>Ha ocurrido un error, Pruebe otra vez</p>'; 
                break;
        }
    }
?>