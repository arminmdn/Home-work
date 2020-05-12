<!DOCTYPE html>
<html>

<?php

$cols = 10;
$rows = 10;

echo "<table  border=\"1 groove\">";

for ($r =0; $r <= $rows; $r++){

    echo('<tr class="">');

    for ($c = 0; $c <= $cols; $c++)
        echo( '<td class="a1">' .$c*$r.'</td>');

    echo('</tr>');

}
class bg2 {
    public $r;
}
echo("</table>");





?>

<style>


    .a1 {
        background-color: lightblue;
        color: white;
        border: solid;
    }
</style>
</html>
