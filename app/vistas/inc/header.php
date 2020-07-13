<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/estilos.css">

  <title><?php echo NOMBRESITIO ?></title>
</head>
<body>


<div class="container bg-gray-700 w-screen mx-auto p-4 text-white">

<nav class="h-full flex">

<a href="<?php echo RUTA_URL; ?>" class="brand w-1/3 flex items-center justify-start">

  <i class="fab fa-laravel fa-2x"></i>
  <span class="ml-4">MVC</span>
</a>

<ul class="w-1/3 text-center flex items-center justify-center">

  <li class=""><a href="paginas/agregar" class="mx-2 p-2 border rounded-md border-red-500">Insertar</a></li>

  <li class=""><a href="#" class="mx-2 p-2 border rounded-md border-red-500">Insertar</a></li>

</ul>

<div class="w-1/3 flex items-center justify-end">
  <span>Otros</span>
</div>

</nav>

</div>