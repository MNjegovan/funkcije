<?php
function godine($rodenje, $brojanje)
{
    if ($brojanje > $rodenje)
    {
        $kek3 = $brojanje - $rodenje;
        echo "Bit ćeš rođen za " . $kek3 . " godina";
    }
    elseif ($brojanje == $rodenje)
    {
        echo "Ti si rođen ove godine";
    }
    else
    {
        $kek = $rodenje - $brojanje;
        echo "Ti si " . $kek . " godina star";
    }
}
$a = 2017;
$b = 20;
?>
<?php
godine($a,$b);
?>
