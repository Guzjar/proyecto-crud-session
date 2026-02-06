<?php
class artefacto extends EntidadEstelar implements interactuable {
    private $antiguedad;
    public function setDato($antiguedad){ $this->antiguedad = $antiguedad; }
    public function getDato(){ return $this->antiguedad; }

    public function reacciones(){
        if ($this->antiguedad < 100) return "(se veria muy cerca) Reproduce un mensaje en una lengua muerta";
        if ($this->antiguedad < 1000) return " (se veria un poco lejos) Reproduce un mensaje en una lengua muerta";
        return "(ni se alcanza a ver) Reproduce un mensaje en una lengua muerta";
    }
}