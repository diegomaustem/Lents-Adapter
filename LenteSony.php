<?php

require_once('LenteSonyInterface.php');

class LenteSony implements LenteSonyInterface 
{
    public function zoomIn()
    {
        return 'Lente com mais zoom Sony';
    }

    public function zoomOut()
    {
        return 'Lente com menos zoom Sony';
    }

    public function autofocus()
    {
        return 'Lente com autofoco Sony';
    }
}

?>