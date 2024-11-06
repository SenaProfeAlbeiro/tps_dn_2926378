<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control </title>
    <!-- Estilos -->
    <!-- <link rel="shortcut icon" href="img/css.png"> -->
    <link rel="stylesheet" href="assets/dashboard/css/all.css">
    <link rel="stylesheet" href="assets/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dashboard/css/styles.css">    
</head>
<body>    
    <!-- Contenedor -->
    <div class="container">        
        <!-- Navegador -->        
        <nav class="row border">
            <div class="col-12 p-3">
                <a href="../landing/index.html">Cerrar Sesión</a>
            </div>
        </nav>
        <section class="row">
            <!-- Panel Lateral -->
            <aside class="col-3 border">
                <h2>Usuarios</h2>
                <div>
                    <a href="modules/users/user_create.html" target="area_trabajo">Registrar Usuario</a>
                </div>
                <div>
                    <a href="modules/users/user_read.html" target="area_trabajo">Consultar Usuarios</a>
                </div>
                
            </aside>
            <!-- Área Principal -->
            <main class="col-9 border">
                <h1>Main Principal Admin</h1>
            </main>
            <!-- Pie de Página -->
        </section>
        <footer class="row">
            <div class="col-12 border">
                Pie de Página
            </div>
        </footer>
    </div>    
    <!-- Scripts -->
    <script src="assets/dashboard/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dashboard/js/scripts.js"></script>
</body>
</html>