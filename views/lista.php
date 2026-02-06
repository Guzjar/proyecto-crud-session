<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BITÁCORA | PROYECTO</title>
    <style>
        body { background: #000; color: #fff; font-family: 'Courier New', monospace; padding: 50px; }
        .container { background: #050505; border: 1px solid #222; padding: 40px; max-width: 900px; margin: auto; }
        h1 { letter-spacing: 5px; text-align: center; border-bottom: 1px solid #222; padding-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 30px; }
        th { color: #666; font-size: 0.7rem; text-align: left; padding: 10px; border-bottom: 1px solid #333; }
        td { padding: 15px 10px; border-bottom: 1px solid #111; font-size: 0.9rem; }
        .btn-new { display: inline-block; background: #fff; color: #000; padding: 10px 20px; text-decoration: none; font-weight: bold; margin-top: 20px; }
        .edit { color: #3b82f6; text-decoration: none; margin-right: 10px; }
        .delete { color: #ff4444; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>BITÁCORA DE HALLAZGOS</h1>
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO</th>
                    <th>REACCIÓN / RESULTADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hallazgos as $h): ?>
                <tr>
                    <td><?= $h->getnombre() ?></td>
                    <td><?= get_class($h) ?></td>
                    <td><?= $h->reacciones() ?></td>
                    <td>
                        <a href="index.php?action=editar&id=<?= $h->getid() ?>" class="edit">[EDITAR]</a>
                        <a href="index.php?action=eliminar&id=<?= $h->getid() ?>" class="delete">[BORRAR]</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="views/formulario.php" class="btn-new">REGISTRAR NUEVO</a>
    </div>
</body>
</html>