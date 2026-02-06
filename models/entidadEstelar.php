<?php
abstract class entidadEstelar {
    private $id;
    private $nombre;
    private $planetaDeOrigen;
    private $nivelDeEstabilidad;

    public function getid(){return $this->id;}
    public function getnombre(){return $this->nombre;}
    public function getplanetaDeOrigen(){return $this->planetaDeOrigen;}
    public function getnivelDeEstabilidad(){return $this->nivelDeEstabilidad;}

    public function setid($id){$this->id = $id;}
    public function setnombre($nombre){$this->nombre = $nombre;}
    public function setplanetaDeOrigen($planetaDeOrigen){$this->planetaDeOrigen = $planetaDeOrigen;}
    public function setnivelDeEstabilidad($nivelDeEstabilidad){$this->nivelDeEstabilidad = $nivelDeEstabilidad;}
    abstract public function getDato();
    abstract public function setDato($valor);
}