<?php
    $fn = fopen("testfile.txt", "w") or die ("Failed to create a file");
    $text = <<<_END
        Line 1
        Line 2
        Line 3
    _END;

    fwrite($fn, $text) or die ("Could not write to file");
    fclose($fn);
    echo "File 'testfile.txt' written successfully";
?>