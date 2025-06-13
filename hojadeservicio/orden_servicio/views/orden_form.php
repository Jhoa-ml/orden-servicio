<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Registrar Orden | Link Mex</title>
  <link rel="stylesheet" href="../assets/css/estilos.css" />
</head>
<body class="orden-body">
  <div class="orden-container">
    <img src="../assets/img/logo_linkmex.png" alt="Logo Link Mex" class="logo" />

    <h2>Registrar Orden de Servicio</h2>

    <form id="ordenForm" enctype="multipart/form-data">
      <!-- Datos del cliente -->
      <h3>Datos del Cliente</h3>
      <input type="text" name="nombre_cliente" placeholder="Nombre del cliente" required />
      <input type="text" name="telefono" placeholder="Teléfono" required />
      <input type="text" name="correo" placeholder="Correo electrónico" />

      <!-- Información del servicio -->
      <h3>Detalles del Servicio</h3>
      <select name="tipo_servicio" required>
        <option value="">Selecciona un tipo de servicio</option>
        <option value="camara">Instalación de Cámaras</option>
        <option value="alarma">Sistema de Alarma</option>
        <option value="redes">Configuración de Redes</option>
      </select>

      <textarea name="descripcion" placeholder="Descripción del problema o requerimiento" rows="4" required></textarea>

      <!-- Carga de evidencias -->
      <h3>Evidencia Fotográfica</h3>
      <input type="file" name="evidencias[]" multiple accept="image/*" />

      <!-- Firma -->
      <h3>Firma del cliente</h3>
      <input type="file" name="firma" accept="image/*" required />

      <!-- Botón -->
      <button type="submit">Guardar Orden</button>
    </form>
  </div>

  <script src="../assets/js/funciones.js"></script>
</body>
</html>
