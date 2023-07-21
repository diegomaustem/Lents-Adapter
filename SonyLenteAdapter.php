<?php 

require_once('LenteInterface.php');

class SonyLenteAdapter implements LenteInterface
{
    protected $lenteSony;

    public function __construct(LenteSony $lenteSony)
    {
        return $this->lenteSony = $lenteSony;
    }

    public function zoomIn()
    {
        return $this->lenteSony->zoomIn();
    }

    public function zoomOut()
    {
        return $this->lenteSony->zoomOut();
    }

    public function focus()
    {
        return $this->lenteSony->autofocus();
    }
}




?>