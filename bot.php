<?php


$token = "5486003716:AAGQpG24_wJYj6GEx6-jXp50IHmZ_jmaooc";
$link = "https://yaka-yt.herokuapp.com/bot.php";
$url = "https://api.telegram.org/bot$token/setwebhook?url=$link";

echo file_get_contents($url);


?>
