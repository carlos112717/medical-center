<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical-Center</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">Citas</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Asignación de Citas </a></li>
                    <li><a href="#">Listar Citas</a></li>
                    <li><a href="#">Citas Por atender</a></li>
                    <li><a href="#">Editar Citas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">Consultorios</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Registrar Consultorios</a></li>
                    <li><a href="#">Listar Consultorios</a></li>
                    <li><a href="#">Actualizar Consultorios</a></li>
                    <li><a href="#">Eliminar Consultorios</a></li>
                </ul>
            </li>
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                   aria-expanded="false">Médicos</a>
               <ul class="dropdown-menu">
                   <li><a href="registrar_medico.html">Registrar Médicos</a></li>
                   <li><a href="listar_medicos.php">Listar Médicos</a></li>
                   <li><a href="actualizar_medico.html">Actualizar Médicos</a></li>
                   <li><a href="borrar_medico.html">Borrar Médicos</a></li>
               </ul>
           </li>
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                   aria-expanded="false">Pacientes</a>
               <ul class="dropdown-menu">
                   <li><a href="registrar_paciente.html">Registrar pacientes</a></li>
                   <li><a href="listar_pacientes.php">Listar pacientes</a></li>
                   <li><a href="actualizar_paciente.html">Actualizar pacientes</a></li>
                   <li><a href="borrar_paciente.html">Borrar pacientes</a></li>
               </ul>
           </li>
        </ul>
    </header>