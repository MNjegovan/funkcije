<?php
function fastcar($a)
{
    if ($a == 1)
    {
        echo "Audi <br>";
    }
    elseif ($a == 2)
    {
        echo "BMW <br>";
    }
    elseif ($a == 3)
    {
        echo "Fiat <br>";
    }
    elseif ($a == 4)
    {
        echo "Mazda <br>";
    }
    elseif ($a == 5)
    {
        echo "Toyota <br>";
    }
    else
    {
        echo $a*$a;
    }
}