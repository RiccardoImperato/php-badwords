<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Testo da censurare</h1>
        <form action="response.php" method="GET">
            <label for="text">
                <h2>Inserisci testo</h2>
            </label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
            <label for="badword">
                <h2>Inserici parola da censurare</h2>
            </label>
            <input type="text" name="badword" id="badword">
            <button>Avanti</button>
        </form>
    </div>
</body>

</html>