<?php
    $fh = fopen("testfile.txt", "r") or die ("File does not exist of you lack permission to open it.");
    $text = fread($fh, 10);
    fclose($fh);
    echo $text;
?>