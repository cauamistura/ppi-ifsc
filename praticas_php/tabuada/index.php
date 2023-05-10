<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="">
        <label for="number">Tabuda:</label>
        <input type="number" name="number">
        <input type="submit" value="Calcular">
    </form>
    <ol>
        <?php
            if (!(isset($_GET['number']) && $_GET['number'] != null)) {
                exit();
            }
            $number = $_GET['number'];
            for ($i=0; $i <= 10; $i++) { 
                $result = $number . " x " . $i . " = " . $number * $i;
                echo "<li>" . $result . "</li>";
            }
        ?>
    </ol>
</body>
</html>