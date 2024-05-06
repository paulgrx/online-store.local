<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        @vite(['resources/scss/app.scss'])

        <title>Basket</title>
    </head>
    <body>
        <div class="content">
            <h1>Koszyk</h1>
            <div class="basket">
                <div class="row" id="list">
                    <div class="col-lg-5">Produkt</div>
                    <div class="col-lg-2">Cena</div>
                    <div class="col-lg-2">Ilość</div>
                    <div class="col-lg-2">Razem</div>
                    <div class="col-lg-1">Usuń</div>
                </div>
                <div class="row" id="purchase data">
                    <div class="col-md-5">
                        <div class="col-sm-6">
                            <img src="images/iq4933-5_1.jpg" alt="Photo">
                        </div>
                        <div class="col-sm-6">
                                <h2>Piłka Adidas</h2><br>
                                <p>Rozmiar piłki: 5</p><br>
                                <p>Przeznaczenie: naturalna trawa</p>
                        </div>
                    </div>
                    <div class="col-md-2"><p>369,99 zł</p></div>
                    <div class="col-md-2"><p>1</p></div>
                    <div class="col-md-2"><p>369,99 zł</p></div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </body>
</html>
