<?php
if (empty($_SERVER["HTTP_REFERER"])){
    header('Location:error.php?reason%5b%5d=unauthorized');
    exit();
}
?>