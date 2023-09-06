<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>

<body>

    <div class="container">
        <!-- collego pagina -->
        <form action="filter.php" method="POST">

            <h1>Php Badwords</h1>

            <div class="py-3">
                <!-- per paragrafo -->
                <label for="paragraph" class="form-label">
                    <strong>Scrivi un paragrafo</strong>
                </label>
                <input type="text" class="form-control" id="paragraph" name="paragraph">
            </div>
            <div class="py-3">
                <!-- per badwords -->
                <label for="badword" class="form-label">
                    <strong>Quale parola vuoi censurare?</strong>
                </label>
                <input type="text" class="form-control" id="badword" name="badword">
            </div>
            <button type="submit" class="btn btn-dark">Invia</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>