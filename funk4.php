<?php
function palindrom($a)
{
    $b = strrev($a);
    if($a == $b)
    {
        echo "ova riječ je palindrom ";
    }
    else
        {
            echo "ova riječ nije palindrom";
        }
}