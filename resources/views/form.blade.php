<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/scss/form.scss'])

        <title>Form</title>
    </head>

    <body>
        <div class="container">
            <p>Dane płatnika</p>
            {{--<div class="form">
                <input type="radio" id="adresCheckbox">
                <label for="adresCheckbox">Nowy Adres</label>
            </div>--}}

            <form class="data" action="{{route('submit')}}" method="POST">
                @csrf
                <div class="fnames"><input type="text" id="name" name="name" placeholder="Imię" required></div>
                <div><input type="text" id="lame" name="lastname" placeholder="Nazwisko" required></div>
                <div><input type="text" id="street" name="street" placeholder="Ulica" required></div>
                <div><input type="text" id="nr-building" name="nr_of_building" placeholder="Numer mieszkania" required></div>
                <div><input type="text" id="city" name="city" placeholder="Miejscowość" required></div>
                <div><input type="text" id="post-code" name="post_code" placeholder="Kod pocztowy" required></div>
                <div><input type="text" id="email" name="email" placeholder="name@example.com" required></div>
                <div><input type="text" id="number" name="number" placeholder="+1 123 456 7890" required></div>
                <div class="buttons">
                    <a href="{{route('basket')}}" class="back-button-link">Wróć do koszyka</a>
                    <button type="submit" class="order-button-link">Przejdź do płatności</button>
                    {{--or
                    <button onclick="window.location.href='{{ route('home') }}'" class="back-button">Wróć do zakupów</button>--}}
                </div>
            </form>
        </div>
    </body>
</html>
