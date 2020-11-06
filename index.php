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
            <a id ="img" href="#"><img style = "height: 200px;" src = "images/Logo-Mdusa.png"></a>

            
            <li class="nav-item">
                <a class="nav-link" href="#">Notre Label</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nos Artistes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nos Récompenses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactez nous</a>
            </li>
        </ul>

        <div class = "content">


            <div style = "display: flex; flex-direction: column;">
                <div class = "rowOne">
                    <div class ="colOne">
                        <div class = "imgOne">
                            </div>
                    </div>
                    <div class ="colTwo">
                        <p id="descrOne">Nous nous imposons en découvreur de talent en étant très souvent le premier label de l'artiste. La volonté de MDUSA est avant tout de s'adapter aux besoins des artistes pour leur permettre de réaliser le projet dont ils rêvent.</p>       
                    </div>
                </div>

                <div class = "rowTwo ">
                    <div class = "colOne">
                        <p id ="descrTwo">Nous accompagnons nos auteurs, compositeurs dans la création et diffusion de leurs oeuvres. Notre énergie et notre savoir-faire sont employés à révéler leur talent et travailler leur carrière.</p>
                    </div>
                    <div class ="colTwo">
                        <div class = "imgTwo">
                        </div>
                    </div>
                </div>
            </div>


            <div class="contact">
                <div class="block-contact">
                    <div class="title-contact">CONTACT</div>
                    <form class="form-contact" action="fonction/mail.php">
                        <div class="field">
                            <label for="input-name">Nom</label>
                            <input id="input-name" class="field-input" type="text" name="name">
                        </div>
                        <div class="field">
                            <label for="input-email">Email</label>
                            <input id="input-email" class="field-input" type="text" name="email">
                        </div>
                        <div class="field">
                            <label for="input-msg">Message</label>
                            <textarea id="input-msg" class="field-input field-text" name="message"></textarea>
                        </div>

                    </form>
                </div>
            </div>

        </div>


</body>


</html>
