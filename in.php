
<?php
$file = fopen("abc.txt","r");
$content = fread($file, filesize("abc.txt"));

echo $content;
fclose($file);


?>