<?php
$string = 'quangnamhd9x';

$pattern = '/^[_a-z0-9]{6,}$/';
if (preg_match($pattern, $string)){
    echo 'Success!';
} else {
    echo 'Wrong!!';
}

