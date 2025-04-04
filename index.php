<?php

  $servidor = "sql213.byethost7.com"; //cuando se conecta el php con el server no se tiene que poner http/https
  $usuario = "b7_38669112"; //usuario del server
  $clave = "tietoN777"; //clave del php, mismo que el del cpanel
  $baseDeDatos = "b7_38669112_prueba"; //usuario_nombredelabase

  $enlace = mysqli_connect($servidor, $usuario, $clave,$baseDeDatos );

  if ($enlace->connect_error) { //esta poronga (todo el if) solo sirve para verificar que se conecte bien pero por ahora no sirve para mas nada
    die("Error en la conexión: " . $enlace->connect_error);
}

echo "Conexión exitosa a la base de datos";

   if (isset($_GET['continuar'])) {
       $usuario=$_GET['usuario']; //esto lo que hace es vincular la cosa esta de html con lo que tenes en el server
       $correo=$_GET['correo'];
       $contraseña=$_GET['contraseña'];

       $insertarDatos= "INSERT INTO  b7_38669112_prueba.datos (usuario, correo, contraseña) VALUES('$usuario', '$correo', '$contraseña')"; //esto inserta lo que vos pusiste a la tabla

           $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos ); //ya esta explicado ahi

   }

//noooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo andaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
?>




   