<?php
$file = "example.txt";
if ($handle = fopen($file,'w')){
    fwrite($handle,'Hey');
} else {
    echo "The application was not able to write to the file.";
}
?>