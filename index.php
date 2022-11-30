<?php
include __DIR__ . '/functions.php';

$risultato =  password_generate($_GET['lunghezza']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="py-5">
            <h1 class="text-secondary text-center">Strong Password Generator</h1>
            <h2 class="text-white text-center">Genera una password sicura</h2>
        </div>
        <?php if (isset($_GET['lunghezza'])) : ?>
            <div class="alert alert-<?= $risultato['class']; ?>" role="alert">
                <strong>Password: </strong><?= $risultato['message'] ?>
            </div>
        <?php endif; ?>
        <div class="container bg-light p-5 rounded-3 mt-5">
            <form action="index.php" method="get">
                <div class="d-flex justify-content-between">
                    <label for="password">Lunghezza password:</label>
                    <input type="number" name="lunghezza" id="lunghezza">
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-danger">Annulla</button>
            </form>
        </div>
    </div>

</body>

</html>