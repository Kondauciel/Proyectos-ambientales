<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cantidad = $_POST['cantidad'];
    $tarjeta = $_POST['tarjeta'];
    
    echo "¡Muchas gracias por tu ayuda ".$nombre."!";
    echo "Tu donativo de".$cantidad." ayudará a muchos animalitos.";
    echo "El recibo del cobro a tu tarjeta ".$tarjeta." se enviará a tu correo ".$correo." en un maximo de 24 horas.";
?>
