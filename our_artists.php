<html lang="fr">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<ul id="nav" class="nav flex-column menu">
    <a id ="img" href="./index.php"><img style = "height: 200px;" src = "images/Logo-Mdusa.png"></a>
    <li class="nav-item">
        <?php
        if (strpos( $_SERVER['REQUEST_URI'], 'index.php') > 0 || $_SERVER['REQUEST_URI'] == '/medusa/medusaWebSite/'){
            echo '<a class="nav-link colorOn" href="./index.php">Notre Label</a>';
        } else {
            echo '<a class="nav-link" href="./index.php">Notre Label</a>';
        }
        ?>
    </li>
    <li class="nav-item">
        <?php
        if (strpos( $_SERVER['REQUEST_URI'], 'our_artists.php') > 0){
            echo '<a class="nav-link colorOn" href="./our_artists.php">Nos Artistes</a>';

        } else {
            echo '<a class="nav-link" href="./our_artists.php">Nos Artistes</a>';
        }
        ?>
    </li>
    <!--<li class="nav-item">
        <a class="nav-link" href="#">Nos Récompenses</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Forum</a>
    </li>-->
    <li class="nav-item">
        <?php
        if (strpos( $_SERVER['REQUEST_URI'], 'contact.php') > 0){
            echo '<a class="nav-link colorOn" href="./contact.php">Contactez nous</a>';
        } else {
            echo '<a class="nav-link" href="./contact.php">Contactez nous</a>';
        }
        ?>
    </li>
</ul>
<div class = "content">
    <div style = "display: flex; flex-direction: column;">
        <h3 class="our_artists">NOS ARTISTES</h3>
        <div class="firstDivOfOurArtist"> <!--prendre la div est la dupliqué pour d'autres artiste -->
            <div class = "rowOne imgFlip">
                <div class="divImgFlip">
                    <div class ="colOne imgFront">
                        <img src="./images/led_zeppelin.jpg" class="imgArtists"/>
                    </div>
                    <div class ="colOne imgBack">
                        <h3>LED ZEPPELIN</h3>
                        <p>Groupe de rock britannique  -  S'inspire de nombreuses sources et genres musicaux : blues, le rock et le folk</p>
                    </div>
                </div>
            </div>
            <div class = "rowTwo imgFlip">
                <div class="divImgFlip">
                    <div class ="colOne imgFront">
                        <img src="./images/jimi_hendrix.jpg" class="imgArtists"/>
                    </div>
                    <div class ="colOne imgBack">
                        <h3>JIMI HENDRIX</h3>
                        <p>Guitariste, auteur-compositeur et chanteur américain</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
