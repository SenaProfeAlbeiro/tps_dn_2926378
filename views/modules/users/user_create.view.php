<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div class="form-header">
            <h2>Crear Usuario</h2>
        </div>
        <div class="form-body">
            <div>
                <label for="">Nombre</label>
                <input type="text" name="user_name" placeholder="Ingrese Nombre">
            </div>
            <div>
                <label for="">Dirección</label>
                <input type="text" name="user_address" placeholder="Ingrese Dirección">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="user_email" placeholder="Ingrese Email">
            </div>
            <div>
                <label for="">Celular</label>
                <input type="text" name="user_phone" placeholder="Ingrese Número Celular">
            </div>
            <div>
                <label for="">Categoría</label>
                <input type="text" name="user_category" placeholder="Ingrese Categoría">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="user_pass" placeholder="Ingrese Contraseña">
            </div>
            <div>
                <label for="">Estado</label>
                <input type="number" name="user_status" placeholder="Ingrese Categoría">
            </div>
            
        </div>
        <div class="form-footer">
            <br>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>