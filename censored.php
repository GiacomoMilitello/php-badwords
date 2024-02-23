<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paragrafo = $_POST["paragrafo"];
        $parola = $_POST["parola"];

        $lunghezza = strlen($paragrafo);

        $paragrafo_sostituito = str_replace($parola, "***", $paragrafo);
        $lunghezza_sostituita = strlen($paragrafo_sostituito);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censored</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="pt-5">
            <h4 class="text-center fw-bold text-danger mt-5"><?php echo $paragrafo; ?></h4>
            <p class="text-center">Lunghezza del paragrafo: <?php echo $lunghezza; ?></p>

            <h3 class="text-center fw-bold text-danger my-5">CENSURA</h3>

            <h4 class="text-center fw-bold text-danger"><?php echo $paragrafo_sostituito; ?></h4>
            <p class="text-center">Lunghezza del paragrafo: <?php echo $lunghezza_sostituita; ?></p>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>