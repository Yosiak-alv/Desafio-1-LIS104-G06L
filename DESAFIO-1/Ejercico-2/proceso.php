<?php include('view.html'); include('logica.php')?>
<div class="container">
    <div class="row py-5">
        <div class="col col-md-6 offset-md-3 p-5 bg-light border rounded-3 text-center">
            <?php
                $option = isset($_POST['opciones']) ? $_POST['opciones']:0;
                $number = isset($_POST['cantidad']) ? $_POST['cantidad']:'';

                logic($option,$number);
            ?>   
        </div>
    </div>
</div>