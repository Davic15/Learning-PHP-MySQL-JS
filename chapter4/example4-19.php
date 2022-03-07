<?php
    $bank_balance = 150;
    if ($bank_balance < 100) {
        $money          = 1000;
        $bank_balance   += $money;
        echo $bank_balance . "<br>";
    }

    echo $bank_balance;
?>