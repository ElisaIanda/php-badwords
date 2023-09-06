<?php

$paragraph = $_POST["paragraph"];
$badword = $_POST["badword"];

// str_replace sostituisce la stinga con il valore dato
$finalresult = str_replace($badword, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4 class="py-4">
                    <div class="py-2">Senza Censura</div>
                    <!-- mostra paragrafo senza censura -->
                    <?php echo $paragraph; ?>
                </h4>
            </div>
            <div class="col-6">
                <h4 class="py-4">
                    <div class="py-2">Con Censura</div>
                    <!-- mostra risultato finale-->
                    <?php echo $finalresult; ?>
                </h4>
            </div>

            <!-- per tornare indietro -->
            <button class="btn btn-dark">
                <a href="./index.php">Torna indietro</a>
            </button>
        </div>
    </div>
</body>