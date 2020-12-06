<?php
$conn = mysqli_connect("localhost","root","","rdanime");
   if($conn->connect_error)
    die($conn->connect_error);

    print "conexion exitosa";