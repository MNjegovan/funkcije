<?php
$a = 6;
function povrsina($a)
{
    echo "Površina je " . $a*$a . "<br>";
}
function opseg($a)
{
    echo "Opseg je " . 4*$a;
}
function izracun($a)
{
    povrsina($a);
    opseg($a);
}
izracun($a);