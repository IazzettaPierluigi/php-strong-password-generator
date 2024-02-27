<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Password Generator</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- get method -->
                <form action="index.php" method="GET">
                    <div class="form-group">
                        <label for="password_length">Password Length:</label>
                        <input type="number" class="form-control" id="password_length" name="password_length" min="1" max="50" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate Password</button>
                </form>

                <?php

                //include del file functions
                include 'functions.php';

                //controllo del set di password length e get del dato, per poi usare la funzione e generarla
                if (isset($_GET['password_length'])) {

                    //get dal input type con name password_length
                    $passwordLength = $_GET['password_length'];

                    //funzione in functions.php e valore ricavato dall'input nelle tonde
                    $password = generateRandomPassword($passwordLength);
                    echo "<div class='mt-4'>Your random password: <strong>$password</strong></div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>