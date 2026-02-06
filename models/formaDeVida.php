<?php
class formaDeVida extends EntidadEstelar implements interactuable {
    private $dieta;
    public function setDato($dieta){ $this->dieta = $dieta; }
    public function getDato(){ return $this->dieta; }

    public function reacciones(){
        switch ($this->dieta) {
            case 'carbono': return " (Emite un pulso electromagnético) y su dieta se basa en carbono ";
            case 'silicio': return " (Emite un pulso electromagnético) y su dieta se basa en silicio ";
            case 'energia': return " (Emite un pulso electromagnético) y su dieta se basa en energia ";
            default: return "emite un sonido raro";
        }
    }
}