<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //to change a session variable, just overwrite it.
        $_SESSION["favcolor"]="red";
        print_r($_SESSION);
    ?>
    <a href="index3.php">다음 페이지로 이동</a>
</body>
</html>