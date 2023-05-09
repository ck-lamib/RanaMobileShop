<head>
    <!-- index page  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<!-- choosing title according to page -->
<?php
switch ($page) {
    case 'index':
?>
        <script src="https://kit.fontawesome.com/add2be7059.js" crossorigin="anonymous"></script>

        <!-- Gilder -->
        <link href="./glider files/glider.min.css" rel="stylesheet">
        <!-- gilder -->
        <link rel="stylesheet" href="style.css">
        <title>Rana Mobile</title>
    <?php
        break;
    case 'login':
    ?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
        <title>Document</title>
    <?php
        break;
    case 'productDetails':
    ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
        <link rel="stylesheet" href="style.css">
        <title>Rana Mobile</title>
    <?php
        break;
    case 'productDetails':
    ?>

        <link rel="stylesheet" href="/style.css">
        <script src="https://kit.fontawesome.com/add2be7059.js" crossorigin="anonymous"></script>
        <title>Document</title>
    <?php
        break;
    default:
    ?>
        <title> Rana Mobilee</title>
<?php
        break;
}
?>



</head>