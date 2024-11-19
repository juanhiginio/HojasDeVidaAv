<!DOCTYPE html>
<html lang="en">
    <?php
        include('../backend/obtenerdatos.php');
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Dispositivos Registrados</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <div class="container-fluid" id="fluid">
                <a class="navbar-brand" href="home.html">
                    <img src="https://www.avidanti.com/wp-content/uploads/2020/07/LOGO-AVIDANTI-_portal_helpdesk.png" alt="" id="avidanti">
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-hover" href="#" id="recient">RECIENTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-hover" href="https://helpdesk.avidanti.com:8003/portal" id="help">AYUDA</a>
                        </li>
                        <li class="nav-item">
                            <a href="../backend/logout.php" class="nav-link text-hover" id="logout">CERRAR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>

        <div class="container-data">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Info - TAG</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Activo Fijo</th>
                        <th scope="col">Serial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dispositivos as $dispositivo): ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($dispositivo['id_registro']); ?></th>
                            <td><?php echo 'DEBE VENIR DE LA DB DEL OCS'; ?></td>
                            <td><?php echo htmlspecialchars($dispositivo['marca']); ?></td>
                            <td><?php echo htmlspecialchars($dispositivo['activoFijo']); ?></td>
                            <td><?php echo htmlspecialchars($dispositivo['serial']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
