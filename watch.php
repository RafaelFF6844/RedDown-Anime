<?php
$conn = mysqli_connect("localhost","root","","rdanime");
   if($conn->connect_error)
    die($conn->connect_error);


    $sql="SELECT * FROM animelist";

    $name = $_GET["nombre"];
    $link= $_GET["link"];
    $cap= substr($link, -1); 
    $capp = $cap+1;
    $cad = substr ($link, 0, strlen($link) - 1);
    
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL,$link);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resultado= curl_exec($ch);
    if(preg_match_all('/"server":"fembed","title":"Fembed","allow_mobile":true,"code":"(.*)"/',$resultado,$matches)){
        $explotar= explode('"',$matches[1][0]);
        $respuesta= str_replace("\/","/",$explotar[0]);
    }

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
        
        <h4 class="captext"><?php echo $name; ?> Capitulo #<?php echo $cap; ?></h4>
        <iframe src="<?php echo $respuesta; ?>" class="capitulo" allowfullscreen=true></iframe>
        <a href="watch.php?nombre=<?php echo $name; ?>&link=<?php echo $cad.$capp; ?>" class="btn btn-primary">Capitulo siguiente</a>
        
    </div>


</body>


</html>
