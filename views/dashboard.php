<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Buscar por serial</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <div class="container-fluid" id="fluid">
                <a class="navbar-brand" href="home.html"><img src="https://www.avidanti.com/wp-content/uploads/2020/07/LOGO-AVIDANTI-_portal_helpdesk.png" alt="" id="avidanti"></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-hover" aria-current="page" href="#" id="recient">RECIENTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-hover" aria-current="page" href="https://helpdesk.avidanti.com:8003/portal" id="help">AYUDA </a>
                        </li>
                        <li class="nav-item">
                            <a href="../backend/logout.php" class="nav-link text-hover" aria-current="page" id="logout">CERRAR </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <hr>

        <div class="container-data">
            <div class="image-container">
                <div class="image">
                    <img src="../assets/user.png" alt="" id="img-person">
                </div>
            </div>

            <div class="personal-data">
                <label for="" id="name">Juan Rendon</label>
                <label for="" id="rol">Administrador</label>
            </div>

            <div class="contenedor-input">
                <div class="input-group mb-3" id="search">
                    <input type="text" class="form-control" placeholder="Ingresa el Serial..." aria-label="Ingresa el Serial..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>