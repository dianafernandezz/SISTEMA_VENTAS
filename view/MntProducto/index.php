<?php require_once("../../config/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>SISTEMA VENTAS - Mantenimiento Producto</title>
    <?php require_once("../mainhead/mainhead.php"); ?>
</head>
<body>

  <?php require_once("../mainnav/mainnav.php"); ?>
  <?php require_once("../mainheader/mainheader.php"); ?>

  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Mantenimiento</a>
        <span class="breadcrumb-item active">Productos</span>
      </nav>
    </div>

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">Página de Productos</h4>
      <p class="mg-b-0">Aquí voy a configurar mi página de productos</p>
    </div>

    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">MANTENIMIENTO DE PRODUCTOS</h6>
        <button class="btn btn-outline-primary mg-b-20" id="btnnuevo">Nuevo Registro</button>

        <div class="table-wrapper">
          <table id="producto_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">NOMBRE PRODUCTO</th>
                <th class="wd-15p">ACCIÓN</th>
                <th class="wd-15p">ACCIÓN</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php require_once("../mainjs/mainjs.php"); ?>
  <script type="text/javascript" src="mntproducto.js"></script>
</body>
</html>