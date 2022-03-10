<?php
    copy("testfile.txt", "testfile2.txt") or die ("Could not copy file.");
    echo ("File successfully copies to 'testfile2.txt'");
?>