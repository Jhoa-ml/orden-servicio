<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login | Link Mex</title>
  <link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body class="login-body">
  <div class="login-container">
    <img src="../assets/img/logo_linkmex.png" alt="Logo Link Mex" class="logo">
    <h2>Iniciar Sesión</h2>
    <form id="loginForm">
      <input type="text" id="usuario" placeholder="Usuario" required>
      <input type="password" id="password" placeholder="Contraseña" required>
      <select id="rol" required>
        <option value="">Selecciona tu rol</option>
        <option value="cliente">Cliente</option>
        <option value="tecnico">Técnico</option>
        <option value="admin">Administrador</option>
      </select>
      <button type="submit">Entrar</button>
    </form>
  </div>
  <script src="../assets/js/funciones.js"></script>
</body>
</html>