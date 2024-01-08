<?php
$get_text = $_GET['text'];
$get_badword = $_GET['badword'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>Risposta</h1>
    <p>
        <?php
        echo $get_text;
        ?>
    </p>
    <div>
        Il paragrafo è lungo <?php echo strlen($get_text); ?> caratteri.
    </div>
    <p>
        <?php
        echo str_replace($get_badword, '***', $get_text);
        ?>
    </p>
    <div>
        Il paragrafo è lungo <?php echo strlen($get_text); ?> caratteri.
    </div>
</body>

</html>