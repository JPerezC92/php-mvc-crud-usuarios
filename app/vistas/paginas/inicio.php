<!-- Prueba de carga de la vista inicio -->

<?php require RUTA_APP . "/vistas/inc/header.php" ?>

<!-- <h3><?php echo $datos["titulo"] ?></h3> -->

<p>MVC</p>


<table class="w-full">
  <thead class="border-2 border-green-500 text-left">
    <th class="text-center">id</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Acciones</th>
  </thead>

  <tbody class="divide-y divide-green-400">

  <?php foreach ($datos["usuarios"] as $usuario): ?>
    <tr>
      <td class="text-center"><?php echo $usuario->id_usuario; ?></td>
      <td><?php echo $usuario->nombre; ?></td>
      <td><?php echo $usuario->email; ?></td>
      <td><?php echo $usuario->telefono; ?></td>
      <td>
        <a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $usuario->id_usuario; ?>">Editar</a>
        <a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $usuario->id_usuario; ?>">Borrar</a>
      </td>
    </tr>
  <?php endforeach; ?>

  </tbody>

</table>


<?php require RUTA_APP . "/vistas/inc/footer.php" ?>