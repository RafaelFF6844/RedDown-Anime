<?php
$conn = mysqli_connect("localhost","root","","rdanime");
   if($conn->connect_error)
    die($conn->connect_error);

    print "conexion exitosa";

    $mid=$_POST['mid'];
    $nombre=$_POST['nombre'];
    $episodes=$_POST['episodes'];
    $score=$_POST['score'];
    $foto=$_POST['img'];
    $link=$_POST['link'];

    
    $sql = "INSERT INTO animelist(mid,nombre,episode,score,foto,link) VALUES('$mid','$nombre','$episodes','$score','$foto','$link');";
    $result= mysqli_query($conn,$sql);
    header("Location: ../add.php");
    exit(1);

    ?>