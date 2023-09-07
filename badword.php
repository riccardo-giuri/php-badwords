<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>badword-giuri</title>
</head>

<body>
    <div class="container">
        <form action="./form_results.php" method="POST" class="d-flex gap-4 align-items-center">
            <div class="d-flex flex-column w-25">
                <label>Parole non volute</label>
                <input type="text" name="badword">
            </div>

            <div class="d-flex flex-column w-50">
                <label>Paragrafo</label>
                <textarea type="text" name="badword_p" cols="30" rows="10"></textarea>
            </div>

            
            <button class="btn btn-primary h-25">Invia</button>
        </form>
    </div>    
</body>
</html>