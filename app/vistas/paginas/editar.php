<?php require RUTA_APP . "/vistas/inc/header.php" ?>

<a class="flex items-center" href="<?php echo RUTA_URL; ?>/paginas"><i class="fas fa-arrow-circle-left fa-2x"></i>  Volver</a>

<div class="w-full max-w-xs flex flex-col items-center justify-center m-auto border rounded-md border-green-600 py-8">

  <h2 class="mb-4 text-xl font-bold">EDITAR Usuario</h2>

  <form class="flex flex-col items-center justify-center" action="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $datos["id_usuario"]; ?>" method="POST">


    <div class="flex flex-col my-3">
      <label for="nombre">Nombre<sub>*</sub></label>
      <input class="border rounded-sm border-green-500 py-1 px-2" type="text" name="nombre" value="<?php echo $datos["nombre"]; ?>">
    </div>

    <div class="flex flex-col">
      <label for="email">Email<sub>*</sub></label>
      <input class="border rounded-sm border-green-500 py-1 px-2" type="text" name="email" value="<?php echo $datos["email"]; ?>">
    </div>

    <div class="flex flex-col my-3">
      <label for="telefono">Telefono<sub>*</sub></label>
      <input class="border rounded-sm border-green-500 py-1 px-2" type="text" name="telefono" value="<?php echo $datos["telefono"]; ?>">
    </div>

    <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mt-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Editar Usuario">

  </form>

</div>

<?php require RUTA_APP . "/vistas/inc/footer.php" ?>