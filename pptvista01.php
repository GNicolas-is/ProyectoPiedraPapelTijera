<?php
    if(isset($_POST['name-user01'])){
        $namePlayer1 = $_POST['name-user01'];
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles.css">
            <title>Juego de Piedra, Papel o Tijera</title>
        </head>
        <body>
            <h1>Piedra, Papel, Tijera</h1>
            <form action="pptcontrol01.php" method="post">
                <label for="name">Nombre</label>
                <input type="name" id="name" name="name-user01"value="<?php echo $namePlayer1 ?>"readonly>
                Piedra
                <input type="radio" name="eleccion" value="piedra">
                Papel
                <input type="radio" name="eleccion" value="papel">
                Tijera
                <input type="radio" name="eleccion" value="tijera">

                <button type="submit" value="Enviar">
                    Comenzar a jugar
                </button>
            </form>
        </body>
        </html>

<?php
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Juego de Piedra, Papel o Tijera</title>
</head>
<body>
    <h1>Piedra, Papel, Tijera</h1>
    <form action="pptvista01.php" method="post">
        <label for="name">¿Cómo te llamas?</label>
        <input type="name" id="name" name="name-user01"required>
        <button type="submit" value="Enviar">
            Comenzar a jugar
        </button>
    </form>
</body>
</html>
<?php
    }
?>