<?php
class NightsWatch implements IFighter
{
    private $soldiers = array();
    public function recruit($recruit)
    {
        $this->soldiers[] = $recruit;
    }
    
    public function fight()
    {
        foreach ($this->soldiers as $recruit) {
            if ($recruit instanceof IFighter)
                $recruit->fight();
        }
    }
}
?>