<?php
class productocontroller {
    private $gestor;

    public function __construct() {
        // Inicializamos el gestor que maneja la sesión
        $this->gestor = new SesionGestor();
    }

    public function ejecutar() {
        $action = $_GET['action'] ?? 'listar';
        switch ($action) {
            case 'guardar':  $this->guardar();  break;
            case 'eliminar': $this->eliminar(); break;
            case 'editar':   $this->editar();   break;
            default:         $this->listar();   break;
        }
    }

    public function listar() {
        $todos = $this->gestor->obtenerTodo();
        
        // Configuración de paginación
        $porPagina = 5;
        $total = count($todos);
        $paginasTotales = ceil($total / $porPagina) ?: 1;
        $paginaActual = (int)($_GET['p'] ?? 1);
        $offset = ($paginaActual - 1) * $porPagina;
        
        // Cortamos el array para mostrar solo 5 por página
        $hallazgos = array_slice($todos, $offset, $porPagina);
        
        include "views/lista.php";
    }

    public function guardar() {
        $nombre = $_POST['nombre'] ?? '';
        $tipo = $_POST['tipo'] ?? '';
        $extra = $_POST['datoExtra'] ?? '';
        $id = $_POST['id'] ?? '';

        if (!empty($id)) {
            // Si hay ID, es una edición
            $this->gestor->actualizar($id, $nombre, $extra);
        } else {
            // Si no hay ID, es un registro nuevo
            $this->gestor->crear($nombre, $tipo, $extra);
        }
        header("Location: index.php");
        exit();
    }

    public function editar() {
        $id = $_GET['id'] ?? '';
        $hallazgo = $this->gestor->buscarPorId($id);
        
        if ($hallazgo) {
            include "views/editar.php";
        } else {
            header("Location: index.php");
        }
    }

    public function eliminar() {
        $id = $_GET['id'] ?? '';
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit();
    }
}