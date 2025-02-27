<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body class="list-group">
    <h1><?php echo e($usuario->nome); ?></h1>
    <li class="list-group-item">ID: <?php echo e($usuario->id); ?></li>
    <li class="list-group-item">Nome: <?php echo e($usuario->nome); ?></li>
    <li class="list-group-item">Email: <?php echo e($usuario->email); ?></li>
    <li class="list-group-item">Idade: <?php echo e($usuario->idade); ?></li>
    <li class="list-group-item">Telefone: <?php echo e($usuario->telefone); ?></li>


    <p><a href="/usuarios" class="btn btn-success">Voltar</a></p>
  </body>
</html><?php /**PATH C:\wamp64\www\Projeto\unicv-web-esw\resources\views/usuarios/detalhes.blade.php ENDPATH**/ ?>