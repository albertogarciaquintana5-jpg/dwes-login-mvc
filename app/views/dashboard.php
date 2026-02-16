<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <h1>Bienvenido, <?php echo htmlspecialchars($user['nombre'] ?? $user['email']) ?></h1>
  <p>Rol: <?php echo htmlspecialchars($user['rol'] ?? 'user') ?></p>

  <p><a href="?action=logout">Cerrar sesión</a></p>
</body>
</html>
