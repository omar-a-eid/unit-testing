<?php
function factorial($n)
{
    if (!is_int($n) || $n < 0) {
        return null;
    }

    if ($n === 0) {
        return 1;
    }

    return $n * factorial($n - 1);
}
