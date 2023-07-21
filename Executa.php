<?php 

require_once('LenteNikon.php');
require_once('LenteSony.php');

require_once('SonyLenteAdapter.php');

    $lenteNikon = new LenteNikon();
    echo "{$lenteNikon->zoomOut()} </br>";
    echo "{$lenteNikon->zoomIn()} </br>";
    echo "{$lenteNikon->focus()} </br>";

    echo "------------------------------------</br>";
    
    $lenteSony = new SonyLenteAdapter(new LenteSony);
    echo "{$lenteSony->zoomOut()} </br>";
    echo "{$lenteSony->zoomIn()} </br>";
    echo "{$lenteSony->focus()}"; 
?>