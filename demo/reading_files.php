<?php
$file = "example.txt";
if ($handle = fopen($file,'r')){
    echo $content = fread($handle, filesize($file)); //Each bite = a character
} else {
    echo "The application was not able to write to the file.";
}
?>