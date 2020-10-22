<?php
function checkAcc($str)
{
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern,$str)) {
        echo 'Hop le';
    } else {
        echo "Khong hop le";
    }
}

checkAcc("123abv__");