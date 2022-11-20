<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body class="p-5">
    <h1>Usuários</h1>
    <?php if(session('mensagem')): ?>
      <div class="alert alert-success"><?php echo e(session('mensagem')); ?></div>
    <?php endif; ?>
    <p><a href="/usuarios/novo" class="btn btn-dark">Cadastrar</a></p>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
        </tr>
    </thead>
        <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($usuario->id); ?></td>
                <td><?php echo e($usuario->nome); ?></td>
                <td><?php echo e($usuario->idade); ?></td>
                <td><?php echo e($usuario->email); ?></td>
                <td><?php echo e($usuario->telefone); ?></td>
                <td>
                  <a href="/usuarios/<?php echo e($usuario->id); ?>" class="btn btn-outline-primary">Visualizar</a>
                  <a href="/usuarios/editar/<?php echo e($usuario->id); ?>" class="btn btn-outline-success">Editar</a>
                  <a href="/usuarios/excluir/<?php echo e($usuario->id); ?>" class="btn btn-outline-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </body>
</html><?php /**PATH C:\wamp64\www\Projeto\unicv-web-esw\resources\views/usuarios/listar.blade.php ENDPATH**/ ?>