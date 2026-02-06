<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ENTRADA | VACÍO</title>
    <style>
        body { background: #000; color: #fff; font-family: 'Courier New', monospace; display: flex; justify-content: center; padding: 50px; }
        .container { background: #050505; border: 1px solid #222; padding: 40px; width: 100%; max-width: 500px; }
        h1 { letter-spacing: 5px; font-size: 1.2rem; text-align: center; border-bottom: 1px solid #222; padding-bottom: 20px; }
        label { display: block; color: #666; font-size: 0.8rem; margin-top: 20px; }
        input, select { width: 100%; background: #000; border: 1px solid #444; color: #fff; padding: 12px; margin-top: 5px; box-sizing: border-box; }
        .btn { background: #fff; color: #000; border: none; padding: 15px; width: 100%; margin-top: 30px; cursor: pointer; font-weight: bold; }
        .cancel { display: block; text-align: center; color: #444; margin-top: 15px; text-decoration: none; font-size: 0.7rem; }
    </style>
</head>
<body>
    <div class="container">
        <h1>REGISTRAR HALLAZGO</h1>
        <form action="../index.php?action=guardar" method="POST">
            <label>NOMBRE DEL OBJETO</label>
            <input type="text" name="nombre" required>

            <label>CATEGORÍA</label>
            <select name="tipo" id="tipoSelector" onchange="cambiarOpciones()" required>
                <option value="formaDeVida">Forma de Vida</option>
                <option value="mineralRaro">Mineral Raro</option>
                <option value="artefacto">Artefacto</option>
            </select>

            <label id="labelDinamico">DIETA</label>
            <select name="datoExtra" id="selectDinamico" required></select>

            <button type="submit" class="btn">PROCESAR ENTRADA</button>
            <a href="../index.php" class="cancel">CANCELAR</a>
        </form>
    </div>

    <script>
        const opciones = {
            formaDeVida: ["carbono", "silicio", "energia"],
            mineralRaro: ["talco", "yeso", "calcita", "fluorita", "apatita", "ortosa", "cuarzo", "corindon", "diamante"],
            artefacto: ["50", "500", "2000"]
        };

        function cambiarOpciones() {
            const tipo = document.getElementById('tipoSelector').value;
            const label = document.getElementById('labelDinamico');
            const select = document.getElementById('selectDinamico');

            label.innerText = (tipo === 'formaDeVida') ? "DIETA SELECCIONADA" : 
                              (tipo === 'mineralRaro') ? "DUREZA SELECCIONADA" : "ANTIGÜEDAD (AÑOS)";

            select.innerHTML = "";
            opciones[tipo].forEach(opt => {
                let node = document.createElement("option");
                node.value = opt;
                node.textContent = opt.toUpperCase();
                select.appendChild(node);
            });
        }
        window.onload = cambiarOpciones;
    </script>
</body>
</html>