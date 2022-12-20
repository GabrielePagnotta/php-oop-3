<?php

include_once __DIR__ . "/class/dvd.php";
include_once __DIR__ . "/class/book.php";
include_once __DIR__ . "/class/employee.php";
$arrayprodotti=[
    new dvd("https://m.media-amazon.com/images/I/81JWVTlPQ2L._SL1500_.jpg","Fight club",10,"1998","edgar allan poe","azione","1080p"),
    new dvd("https://pad.mymovies.it/filmclub/2002/08/201/locandinapg3.jpg","Arancia meccanica",20,"2000","Bill Clinton","horror","720p"),
    new book("https://www.picclickimg.com/E2EAAOSwDQVgIn9Q/C-Collodi-PINOCCHIO-Illustrato-da-GIM.webp","Pinocchio",30,"1956","Alessandro Siani","fantasy","flessibile"),
    new book("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy9ffVoOw7HtU5x6lKyGRCfK0AcBS0HvfIG4zVIVdgRvQe4f5G5oqjZld0yfX1YtmzFLw&usqp=CAU","Gomorra",15,"2012","Roberto Saviano","crime","kindle")
];

$arrayemployers=[
    new employee("https://img.freepik.com/free-photo/portrait-smiling-young-man-eyewear_171337-4842.jpg?w=2000","Giacomo","Rossi","Bookstore-Rozzano",""),
    new employee("https://st2.depositphotos.com/1662991/8837/i/450/depositphotos_88370500-stock-photo-mechanic-wearing-overalls.jpg","Gianluca","Vacchi","Bookstore-Venezia",""),
    new employee("https://img.freepik.com/free-photo/smiling-man-white-shirt-typing-text-message-scrolling-feed-social-network-using-smartphone-gray_171337-634.jpg","Gennaro","Malavitoso","Bookstore-Roma","Impiegato del mese"),
]





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap header-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>php-oop-3</title>
</head>

<body>
    <section class="container">
        <h1>Prodotti</h1>
        <div class="d-flex flex-wrap text-center">
            <?php foreach ($arrayprodotti as $element) {?>

            <div class="card" style="width: calc(100% / 4);">
                <img src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $element->name ?>
                    </p>
                    <p class="card-text">
                        <?php echo $element->price ."€" ?>
                    </p>
                    <p class="card-text">
                        <?php echo $element->author ?>
                    </p>
                    <p class="card-text">
                        <?php echo  "genere: <strong> $element->genre </strong>" ?>
                    </p>
                    <?php if (get_class($element) == "dvd") {?>
                    <p class="card-text">
                        <?php echo $element->quality ?>
                    </p>
                    <?php  } elseif (get_class($element) == "book") { ?>
                    <p class="card-text">
                        <?php echo $element->format ?>
                    </p>
                    <?php } ?>

                </div>
            </div>

            <?php } ?>

        </div>
    </section>

    <section class="container">
        <h1>Lavoratori</h1>
        <div class="d-flex flex-wrap text-center">
            <?php foreach ($arrayemployers as $element) {?>

            <div class="card" style="width: 18rem;">
                <img src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $element->name ?></h4>
                    <h5 class="card-text"><?php echo $element->lastname ?></h5>
                    <h5 class="card-text"><?php echo $element->place ?></h5>
                    <h3 class="card-text"><?php echo $element->empofmonth ?></h3>
                    
                </div>
            </div>

            <?php } ?>

        </div>
    </section>



    <!--bootstrap body-->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'></script>

</body>

</html>