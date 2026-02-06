<?php
class SesionGestor implements iGestor {
    
    public function __construct() {
        // Iniciamos sesión si no existe
        if (session_status() === PHP_SESSION_NONE) session_start();
        // Si no existe el array de hallazgos, lo creamos
        if (!isset($_SESSION['hallazgos'])) {
            $_SESSION['hallazgos'] = [];
        }
    }

    public function crear($nombre, $tipo, $extra) {
        // 1. Creamos la instancia según el tipo
        if ($tipo === "formaDeVida") {
            $nuevo = new formaDeVida();
        } elseif ($tipo === "mineralRaro") {
            $nuevo = new mineralRaro();
        } else {
            $nuevo = new artefacto();
        }
        
        // 2. Seteamos los datos usando los métodos que ya arreglamos
        $nuevo->setid(time()); // ID único por tiempo
        $nuevo->setnombre($nombre);
        $nuevo->setDato($extra); // Aquí se guarda la dieta, dureza o antigüedad
        
        // 3. Lo metemos a la sesión
        $this->guardar($nuevo);
    }

    public function obtenerTodo() {
        return $_SESSION['hallazgos'];
    }

    // Este método es obligatorio por la Interfaz iGestor
    public function guardar($entidad) {
        $_SESSION['hallazgos'][] = $entidad;
    }

    public function eliminar($id) {
        foreach ($_SESSION['hallazgos'] as $key => $h) {
            if ($h->getid() == $id) {
                unset($_SESSION['hallazgos'][$key]);
                $_SESSION['hallazgos'] = array_values($_SESSION['hallazgos']);
                break;
            }
        }
    }

    public function buscarPorId($id) {
        foreach ($_SESSION['hallazgos'] as $h) {
            if ($h->getid() == $id) return $h;
        }
        return null;
    }

    public function actualizar($id, $nombre, $extra) {
        $h = $this->buscarPorId($id);
        if ($h) {
            $h->setnombre($nombre);
            $h->setDato($extra);
            return true;
        }
        return false;
    }
}