<?php
abstract class EntidadEstelar{
    private $id;
    private $nombre;
    private $planetaDeOrigen;
    private $nivelDeEstabilidad;
    function public getid(){return $this->id;}
    function public getnombre(){return $this->nombre;}
    function public getplanetaDeOrigen(){return $this->planetaDeOrigen;}
    function public getnivelDeEstabilidad(){return $this->nivelDeEstabilidad;}

    function public setid($id){$this->id = $id;}
    function public setnombre($nombre){$this->nombre = $nombre;}
    function public setplanetaDeOrigen($planetaDeOrigen){$this->planetaDeOrigen = $planetaDeOrigen;}
    function public setnivelDeEstabilidad($nivelDeEstabilidad){$this->nivelDeEstabilidad = $nivelDeEstabilidad;}
}