<?php
$censura= $_POST['censura'];
$paragrafo= $_POST['paragrafo'];
$paragrafo_censurato= str_replace($censura, '***', $paragrafo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafo censurato</title>
</head>
<body>
    <p>
        Il paragrafo è:
        <?php
        echo $paragrafo
        ?>
        La lunghezza è:
        <?php
        echo strlen($paragrafo);
        ?>
        caratteri
    </p>
    <p>
        Il paragrafo dopo la censura è:
        <?php
        echo $paragrafo_censurato
        ?>
         La lunghezza è:
        <?php
        echo strlen($paragrafo_censurato);
        ?>
        caratteri
    </p>
    
</body>
</html>