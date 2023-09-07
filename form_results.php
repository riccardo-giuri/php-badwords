<?php
    $badwords = $_POST['badword'] ?? null;
    $paragrafo = $_POST['badword_p'] ?? null;

    $paragrafo_censurato = str_replace($badwords, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>badword-result-giuri</title>
</head>

<body>
    <div>
        <h1>Testo pre-censura</h1>
        <p><?php echo $paragrafo ?></p>
    </div>

    <div>
        <h1>Testo post-censura</h1>
        <p><?php echo $paragrafo_censurato ?></p>
    </div>
</body>
</html>