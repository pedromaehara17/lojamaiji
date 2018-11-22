<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?= BASE_URL ?>">

    <title>MAIJI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="./publico/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./publico/css/animate.css">
    <link rel="stylesheet" href="./publico/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./publico/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./publico/css/magnific-popup.css">
    <link rel="stylesheet" href="./publico/css/aos.css">
    <link rel="stylesheet" href="./publico/css/ionicons.min.css">
    <link rel="stylesheet" href="./publico/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./publico/css/jquery.timepicker.css">
    <link rel="stylesheet" href="./publico/css/flaticon.css">
    <link rel="stylesheet" href="./publico/css/icomoon.css">
    <link rel="stylesheet" href="./publico/css/style.css">
  </head>
<body>
    <?php require "visao/cabecalho.php"; ?>

    <?php alertComponentRender(); ?>

    <main>
        <?php require $viewFilePath; ?>




    </main>


    <?php require "visao/rodape.php"; ?>

</body>
</html>
