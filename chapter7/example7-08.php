<?php
    if(!copy("testfile.txt", "testfile2.txt"))
        echo "Could not rename file";
    else 
        echo "File successfully copied to 'testfile2.txt'";
?>