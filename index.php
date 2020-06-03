<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google News - Suner And Garcia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
<!--Mi API: 2c8671602ed44553867fb4a72447ffa1-->
<?php
$url = 'https://newsapi.org/v2/everything?domains=techcrunch.com&apiKey=2c8671602ed44553867fb4a72447ffa1';
$respuesta = file_get_contents($url);
$NoticiaData = json_decode($respuesta);
?>
<div class="jumbotron jumbotron-fluid">
    <h1 class="text-center">Google News API </h1>
    <p class="lead text-center">Suner And Garcia.</p>
</div>
<div class="container-fluid">
    <?php
        foreach ($NoticiaData->articles as $Noticia)
        {
    ?>
    <div class="row noticiasGrid">
        <div class="col-md-3">
            <img src="<?php echo $Noticia->urlToImage ?>" alt="Noticias thumbs" class="rounded">
        </div>
        <div class="col-md-9">
            <h2><?php echo $Noticia->title ?></h2>
            <h5><?php echo $Noticia->description ?> </h5>
            <p><?php echo $Noticia->content ?> </p>
            <h6>Autor: <?php echo $Noticia->author ?> </h6>
            <h6>Fecha de publicación: <?php echo $Noticia->publishedAt ?> </h6>
        </div>
    </div>
    <?php } ?>

</div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/script.js"></script>

<!-- Bootstrap library -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>