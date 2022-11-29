<?php

if (isset($_GET['password'])) {
    if (strlen($_GET['password']) > 8) {
        function generatePassword($password)
        {
            $symbols = ['.', ',', '!', ';', ':', '?', '@', '#', '"', '&', '*', '=', '$'];
            $uppercases = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
            $lowercase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            if (in_array($password, $symbols) && in_array($password, $uppercases) && in_array($password, $lowercase)) {
                var_dump('password Valida');
                $status = 'success';
                $message = 'password Valida';
                $is_valid = true;
            } else {
                var_dump('password non valida');
                $status = 'danger';
                $message = 'password Invalida';
                $is_valid = false;
            }

            return ['status' => $status, 'message' => $message, 'is_valid' => $is_valid];
        }
    }
}



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

<body class="bg-danger">
    <div class="container">
        <div class="py-5">
            <h1 class="text-secondary text-center">Strong Password Generator</h1>
            <h2 class="text-white text-center">Genera una password sicura</h2>
        </div>
        <?php if (isset($_GET['email'])) : ?>
            <div class="alert alert-<?= $alert['status']; ?>" role="alert">
                <strong><?= $alert['message']; ?></strong>
            </div>
        <?php endif; ?>
        <div class="container bg-light p-5 rounded-3 mt-5">
            <form action="index.php" method="get">
                <div class="d-flex justify-content-between">
                    <label for="password">Lunghezza password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-danger">Annulla</button>
            </form>
        </div>
    </div>

</body>

</html>