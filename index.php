<?php
include 'inc/funciones/funciones.php';
include 'inc/layout/header.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
 ?>
 <div class="contenedor-barra">
      <h1>Registro de Empleados</h1>
      <legend>Examen de Programación Web <span>Fernanda Monserrat Ramírez Ochoa</span> </legend>
 </div>
 <div class="bg-registro contenedor sombra">
      <form id="empleado" action="#">
           <legend><img src="img/add.png" alt="icono de agregar usuario"/>Añadir un Empleado <span>Todos los campos son obligatorios</span> </legend>
           <?php include 'inc/layout/formulario.php'; ?>
      </form>
 </div>
 <div class="bg-despliegue contenedor sombra empleados">
      <div class="contenedor-empleados">
        <legend class="sub"><img src="img/note.png" alt="icono de agregar usuario"/><h2>Empleados</h2></legend>

           <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Empleados...">

           <p class="total-empleados"><span></span> Empleados</p>

           <div class="contenedor-tabla">
                <table id="listado-empleados" class="listado-empleados">
                     <thead>
                          <tr>
                               <th>Nombre</th>
                               <th>Apellido</th>
                               <th>Domicilio</th>
                               <th>Sueldo Semanal</th>
                               <th>Fecha Ingreso</th>
                               <th>Acciones</th>
                          </tr>
                     </thead>

                     <tbody>
                          <?php $empleados = obtenerEmpleados();

                                if($empleados->num_rows) {

                                    foreach($empleados as $empleado) { ?>
                                    <tr>

                                         <td><?php echo $empleado['nombre']; ?></td>
                                         <td><?php echo $empleado['apellidos']; ?></td>
                                         <td><?php echo $empleado['domicilio']; ?></td>
                                         <td><?php echo $empleado['sueldo']; ?></td>
                                         <td><?php echo $empleado['fecha']; ?></td>
                                         <td>
                                              <a class="btn-editar btn" href="editar.php?id=<?php echo $empleado['id']; ?>">
                                                   <i class="fas fa-pen-square"></i>
                                              </a>
                                              <button data-id="<?php echo $empleado['id']; ?>" type="button" class="btn-borrar btn">
                                                   <i class="fas fa-trash-alt"></i>
                                              </button>
                                         </td>
                                    </tr>
                                    <?php }
                               } ?>

                     </tbody>
                </table>
           </div>
      </div>
 </div>

 <?php include 'inc/layout/footer.php'; ?>
