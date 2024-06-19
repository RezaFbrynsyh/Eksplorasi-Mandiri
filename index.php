<?php
    $cookie_name = "admin";
    $cookie_value = "Reza";
    setcookie($cookie_name, $cookie_value); //cookies akan aktif selama 1 hari
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie pada PHP</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie tidak ditemukan!";
        } else {
            echo '$_COOKIE['.$cookie_name.'] = '.$_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>