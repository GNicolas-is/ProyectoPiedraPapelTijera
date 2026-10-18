<?php
    require_once 'functions.php';
    $namePlayer1 = $_POST['name-user01'];
    $eleccionPlayer1 = $_POST['eleccion'];

    $arrayPPT = ['piedra' => '🪨',
                'papel' => '📄',
                'tijera' => '✂'];

    $eleccionMachine = array_rand($arrayPPT);
    $emojiMachine = $arrayPPT[$eleccionMachine]; 
    
?>

<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Juego de Piedra, Papel o Tijera</title>
        </head>
        <body>
            <h1>Piedra, Papel, Tijera</h1>
            <?php echo "Hola, " . $namePlayer1 . "!";?>
            <p>La máquina eligió: <strong><?php echo $eleccionMachine . " " . $emojiMachine?> </strong></p>

            <?php echo resultadoPartida($eleccionPlayer1, $eleccionMachine, $namePlayer1); ?>
        </body>
</html>