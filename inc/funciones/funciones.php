<?php

function obtenerEmpleados() {
     include 'bd.php';
     try{
          return $conn->query("SELECT id, nombre, apellidos, domicilio, sueldo, fecha FROM empleado");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}

// Obtiene un contacto toma un id.

function obtenerEmpleado($id) {
     include 'bd.php';
     try{
          return $conn->query("SELECT id, nombre, apellidos, domicilio, sueldo, fecha FROM empleado WHERE id = $id");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}
