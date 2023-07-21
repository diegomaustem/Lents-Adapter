<?php

require_once('LenteInterface.php');

class LenteNikon implements LenteInterface
{
    public function zoomIn()
    {
        return 'Lente com mais zoom Nikon';
    }

    public function zoomOut()
    {
        return 'Lente com menos zoom Nikon';
    }

    public function focus()
    {
        return 'Lente com foco Nikon';
    }
}

?>