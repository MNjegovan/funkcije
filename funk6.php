<?php
require "reverzija.php";
$lista = array(0,1,2,3,4);
reversa($lista);
foreach($lista as $keys)
{
    echo $keys;
}