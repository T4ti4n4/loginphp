<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./actions/login.php" method="post">
        <div>
            <label for="user">User</label>
            <input type="email" name="user">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
    <button>Iniciar sesión</button>
    </form>
</body>
</html>