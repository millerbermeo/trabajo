
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="edad" id="edad" placeholder="edad">
        <button type="submit">Enviar</button>
    </form>

    <?php 
    
    $edad = $_POST['edad'];

    if($edad < 0) {
        echo "edad invalida";
    } else if($edad <= 12) {
        echo "Usted es un Niño";
    } else if($edad <= 21) {
        echo "Usted es un adolecente";
    } else if($edad <= 31) {
        echo "Usted es un Joven";
    }else if($edad <= 60) {
        echo "Usted es un Adulto";
    }else  {
        echo "Usted es un Adulto Mayor";
    }


    
    ?>
</body>
</html>