<?php

interface iGestor{
    public function obtenerTodo();
    public function guardar($entidad);
    public function eliminar($id);
}