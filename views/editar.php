<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MODIFICAR | SISTEMA</title>
    <style>
        body { background: #000; color: #fff; font-family: 'Courier New', monospace; display: flex; justify-content: center; padding: 50px; }
        .container { background: #050505; border: 1px solid #222; padding: 40px; width: 100%; max-width: 500px; box-shadow: 0 0 20px rgba(255,255,255,0.05); }
        h1 { letter-spacing: 5px; font-size: 1.2rem; text-align: center; border-bottom: 1px solid #222; padding-bottom: 20px; }
        label { display: block; color: #666; font-size: 0.8rem; margin-top: 20px; text-transform: uppercase; }
        input { width: 100%; background: #000; border: 1px solid #444; color: #fff; padding: 12px; margin-top: 5px; box-sizing: border-box; }
        .btn { background: #fff; color: #000; border: none; padding: 15px; width: 100%; margin-top: 30px; cursor: pointer; font-weight: bold; text-transform: uppercase; }
        .btn:hover { background: #3b82f6; color: #fff; }
        .cancel { display: block; text-align: center; color: #444; margin-top: 15px; text-decoration: none; font-size: 0.7rem; }
    </style>
</head>
<body>
    <div class="container">
        <h1>MODIFICAR REGISTRO</h1>
        <form action="index.php?action=guardar" method="POST">
            <input type="hidden" name="id" value="<?= $hallazgo->getid() ?>">
            
            <label>Identificador de Nombre</label>
            <input type="text" name="nombre" value="<?= $hallazgo->getnombre() ?>" required>
            
            <label>Detalle del Hallazgo</label>
            <input type="text" name="datoExtra" value="<?= $hallazgo->getDato() ?>" required>
            
            <button type="submit" class="btn">ACTUALIZAR DATOS</button>
            <a href="index.php" class="cancel">DESCARTAR CAMBIOS</a>
        </form>
    </div>
</body>
</html>