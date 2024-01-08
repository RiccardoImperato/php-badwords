<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>Testo da censurare</h1>
    <form action="response.php" method="GET">
        <label for="text">Inserisci testo</label>
        <textarea name="text" id="text"></textarea>
        <label for="badword">Inserici parola da censurare</label>
        <input type="text" name="badword" id="badword">
        <button>Invia</button>
    </form>
</body>

</html>