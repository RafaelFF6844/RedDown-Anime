<?php
$conn = mysqli_connect("localhost","root","","rdanime");
   if($conn->connect_error)
    die($conn->connect_error);


    $sql="SELECT * FROM animelist";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Css/main.css">
    <link rel="stylesheet" href="./Css/series.css">
    <script src="./js/api.js"></script>
    <title>RedDown Anime</title>
</head>
<body>
    <div class="nav-bar">
        <img src="https://static.vecteezy.com/system/resources/previews/000/435/388/original/vector-star-icon.jpg" class="icon">
        <a href="index.php"><strong>RedDown Anime</strong></a>

        <div class="menu-options">
            <a href="series.php"><b>Series</b></a>
            <a href="index.html"><b>Mi Lista</b></a>
        </div>
        
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <div class="caja">
        <?php $resultado=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($resultado)){?>
        <div class="card mycard" style="width: 16rem;">
            <img class="card-img-top" src='<?php echo $row["foto"]; ?>' alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["nombre"]; ?></h5>
                
                <a href="watch.php?nombre=<?php echo $row["nombre"]; ?>&link=<?php echo $row["link"]; ?>" class="btn btn-primary">Ver Ahora!</a>
            </div>
        </div>
        <?php } ?>
        
    </div>


</body>


</html>
