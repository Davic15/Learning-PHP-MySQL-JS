<?php
    $temp = "The date is ";
    echo longdate(time());

    function longdate($timestamp) {
        return $temp . date("l FjS Y", $timestamp);
    }
?>