<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["favcolor"]="yellow";
        $_SESSION["favanimal"]="cat";
        echo "Session variables are set";
    ?>
    <a href="index1.php">다음 페이지로 이동</a>
</body>
</html>