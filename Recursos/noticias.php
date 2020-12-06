<?php

$ch= curl_init("https://ohayoanime.com");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

$respuesta= curl_exec($ch);

/* if(preg_match_all('/<div class="col-8 main-content">(.*)"/',$respuesta,$matches)){
    print_r($matches);
} */
echo $respuesta;
?>
<script>
    $("div").remove(".main-featured");
    $("header").remove(".default");
    $("nav").remove(".navigation");
    $("div").remove(".top-bar");
    $("footer").remove(".main-footer");
    $("").remove();
  
</script>
