<DOCTYPE html> 
<html lang="en" theme='default'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="<?php echo e(URL::asset('css/style.css')); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <br>
        <br>
        <div class="table-wrapper">
        <table class="fl-table" id = "tbldata">
        <thead>
            <tr>
                <th scope="col">Id_Gastos</th>
                <th scope="col">Vehiculos</th>
                <th scope="col">Combustible</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Capital</th>
                <th scope="col">Departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $gastos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gasto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($gasto['Id_Gastos']); ?></th>
                <td><?php echo e($gasto['Vehiculos']); ?></td>
                <td><?php echo e($gasto['Combustible']); ?></td>
                <td><?php echo e($gasto['Sueldo']); ?></td>
                <td><?php echo e($gasto['Capital']); ?></td>
                <td><?php echo e($gasto -> departamentos -> tipo_departamento); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
        <div class = "containerboton">
            <a onclick="exportarAexcel('tbldata')" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-export"></span>EXCEL
            </a>
            <a href="#" id= "xx" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-export"></span>CSV
            </a>
            
        </div>
    </div>

    </body>
    <footer><?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></footer>
</html>
<?php /**PATH C:\xampp\htdocs\integracion2\resources\views/index.blade.php ENDPATH**/ ?>