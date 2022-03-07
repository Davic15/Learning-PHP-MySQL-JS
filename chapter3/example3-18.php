<?php
    function test() {
        static $int = 0;            //allow
        static $int = 1 + 2;        //disallowed
        //static $int = sqrt(144);    //disallowed
    }
?>