<?php
class mineralRaro extends EntidadEstelar implements interactuable {
    private $dureza;
    public function setDato($dureza){ $this->dureza = $dureza; }
    public function getDato(){ return $this->dureza; }

    public function reacciones(){
        $reacciones = [
            'talco' => "dureza de una uña pero Brilla con intensidad azulada",
            'yeso' => "dureza de una uña pero Brilla con intensidad azulada",
            'calcita' => "dureza de una moneda de cobre pero Brilla con intensidad azulada",
            'fluorita' => "dureza de una moneda de cobre pero Brilla con intensidad azulada",
            'apatita' => "dureza de un vidrio pero Brilla con intensidad azulada",
            'ortosa' => "dureza de acero pero Brilla con intensidad azulada",
            'cuarzo' => "dureza de acero pero Brilla con intensidad azulada",
            'corindon' => "dureza de acero pero Brilla con intensidad azulada",
            'diamante' => "dureza de un diamante pero Brilla con intensidad azulada"
        ];
        return $reacciones[$this->dureza] ?? "Mineral desconocido";
    }
}






