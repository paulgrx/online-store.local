<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/scss/app.scss'])

        <title>Form</title>
    </head>

    <body>
        <div class="container">
            <p>Adres płatnika</p>
            <div class="form">
                <input type="radio" id="adresCheckbox">
                <label for="adresCheckbox">Nowy Adres</label>
            </div>

            <form class="data" action="/submit" method="post">
                <div class="fnames"><input type="text" id="fname" name="name" placeholder="Imię" required></div>
                <div><input type="text" id="lame" name="lastname" placeholder="Nazwisko" required></div>
                <div><input type="text" id="street" name="street" placeholder="Ulica" required></div>
                <div><input type="text" id="nr-building" name="number of building" placeholder="Numer mieszkania" required></div>
                <div><input type="text" id="city" name="city" placeholder="Miejscowość" required></div>
                <div><input type="text" id="post-code" name="post code" placeholder="Kod pocztowy" required></div>
                <div><input type="text" id="email" name="email" placeholder="name@example.com" required></div>
                <div><input type="text" id="number" name="number" placeholder="+1 123 456 7890" required></div>
                <div class="buttons">
                    <button class="back-button" type="submit">Poprzedni</button>
                    <button class="order-button" type="submit">Następny</button>
                </div>
            </form>
        </div>
    </body>
</html>
