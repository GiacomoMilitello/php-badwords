<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <form action="censored.php" method="post" class="d-flex flex-column justify-content-center align-items-center my-5 w-75 mx-auto">
        <label for="paragrafo" class="text-center fw-bold text-danger">Inserisci un paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" class="w-100"></textarea><br>
        <label for="parola" class="text-center fw-bold text-danger">Inserisci una parola:</label><br>
        <input type="text" id="parola" name="parola"><br>
        <input type="submit" value="Invia" class="bg-danger text-white px-5 py-2 mt-4">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>