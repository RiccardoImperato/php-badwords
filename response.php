<?php
$get_text = $_GET['text'];
$get_badword = $_GET['badword'];
$censored_text = str_replace($get_badword, '***', $get_text);
?>

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
        <h1>Il tuo Testo</h1>
        <p>
            <?php
            echo $get_text;
            ?>
        </p>
        <h2>
            Il paragrafo è lungo <?php echo strlen($get_text); ?> caratteri.
        </h2>
        <h1>Testo Censurato</h1>
        <p>
            <?php
            echo $censored_text;
            ?>
        </p>
        <h2>
            Il paragrafo è lungo <?php echo strlen($censored_text); ?> caratteri.
        </h2>
    </div>
</body>

</html>