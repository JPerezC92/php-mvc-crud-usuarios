<?php require RUTA_APP . "/vistas/inc/header.php" ?>

<a class="flex items-center" href="<?php echo RUTA_URL; ?>/paginas"><i class="fas fa-arrow-circle-left fa-2x"></i>  Volver</a>

<div class="w-full max-w-xs flex flex-col items-center justify-center m-auto border rounded-md border-green-600 py-8">

  <h2 class="mb-4 text-xl font-bold">Agregar Usuario</h2>

  <form class="flex flex-col items-center justify-center" action="<?php echo RUTA_URL; ?>/paginas/agregar" method="post">

    <div class="flex flex-col my-3">
      <label for="nombre">Nombre<sub>*</sub></label>
      <input class="border rounded-sm border-green-500 py-1 px-2" type="text" name="nombre">
    </div>

    <div class="flex flex-col">
      <label for="email">Email<sub>*</sub></label>
      <input class="border rounded-sm border-green-500 py-1 px-2" type="text" name="email">
    </div>

    <div class="flex flex-col my-3">
      <label for="telefono">Telefono<sub>*</sub></label>
      <input class="border rounded-sm border-green-500 py-1 px-2" type="text" name="telefono">
    </div>

    <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mt-4 rounded focus:outline-none focus:shadow-outline " type="submit" value="Agregar Usuario">

  </form>

</div>




<!-- <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div> -->

<?php require RUTA_APP . "/vistas/inc/footer.php" ?>