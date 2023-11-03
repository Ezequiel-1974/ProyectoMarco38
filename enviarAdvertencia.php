<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombreAlumno = $_POST["nombreAlumno"];
  $nombreMateria = $_POST["nombreMateria"];
  $porcentajeAsistencia = $_POST["porcentajeAsistencia"];
  $mensaje = $_POST["mensaje"];

  // Aquí puedes agregar el código para enviar la advertencia al alumno, por ejemplo, mediante correo electrónico o almacenarla en una base de datos.
  // Puedes usar la información recopilada ($nombreAlumno, $nombreMateria, $porcentajeAsistencia, $mensaje) para enviar la advertencia.

  echo "Advertencia enviada al alumno: $nombreAlumno";
  // Puedes redirigir al profesor a una página de confirmación o realizar otras acciones necesarias.
}
?>
